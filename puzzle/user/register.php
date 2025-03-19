<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");
include($_SERVER['DOCUMENT_ROOT']."/template/config.php");

$p = new puzzle(array(
  "stage" => -2,
  "title" => "Register",
  "requireLogin" => false
));

$errorMessage = ''; // 用于存储错误消息

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // 表单提交处理
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $recaptchaResponse = $_POST['g-recaptcha-response'];

  try {
      // 验证用户名和密码
      if (empty($username) || empty($password)) {
          throw new Exception('用户名或密码不能为空');
      }

      // 验证 reCAPTCHA
      $recaptchaSecret = $_CONFIG['recaptcha_secret_key'];
      $recaptchaVerifyUrl = 'https://www.recaptcha.net/recaptcha/api/siteverify';
      $recaptchaData = [
          'secret' => $recaptchaSecret,
          'response' => $recaptchaResponse
      ];

      $options = [
          'http' => [
              'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($recaptchaData),
          ],
      ];
      $context = stream_context_create($options);
      $verifyResponse = file_get_contents($recaptchaVerifyUrl, false, $context);
      $responseData = json_decode($verifyResponse, true);

      if (!$responseData['success']) {
          throw new Exception('reCAPTCHA 验证失败，请重试。');
      }

      // 数据库连接
      $pdo = new PDO(
          "mysql:host={$_CONFIG['mysql_address']};dbname={$_CONFIG['mysql_database']}",
          $_CONFIG['mysql_username'],
          $_CONFIG['mysql_password']
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // 检查用户名是否已存在
      $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
      $stmt->execute(['username' => $username]);
      if ($stmt->fetch()) {
          throw new Exception('用户名已存在，请选择其他用户名。');
      }

      // 加密密码
      $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

      // 插入用户
      $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
      $stmt->execute([
          'username' => $username,
          'password' => $hashedPassword,
      ]);

      header("Location: /user/login.php?message=" . urlencode("注册成功，请进行登录"));
      exit();
  } catch (Exception $e) {
      // 错误处理
      $errorMessage = $e->getMessage();
  }
}

$p->header();
?>

<script src="https://recaptcha.net/recaptcha/api.js" async defer></script>

    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              <form class="login-form" method="post" action="/user/register.php">
                <div class="form-group">
                  <div class="question-input"><input class="input" type="text" id="username" name="username" placeholder="尊姓大名" required></div>
                </div>
                <div class="form-group">
                  <div class="question-input"><input class="input" type="password" id="password" name="password" placeholder="密码" required></div>
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="<?=$_CONFIG['recaptcha_site_key']; ?>"></div>
                </div>
                <div class="form-group">
                  <button style="margin: 20px auto; display: block; width: 200px;" class="button" type="submit">注册</button>
                </div>
              </form>
              <?php if (!empty($errorMessage)): ?>
                <p style="color: red;"><?php echo htmlspecialchars($errorMessage); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>