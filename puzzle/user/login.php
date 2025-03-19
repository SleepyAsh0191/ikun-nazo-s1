<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");
include($_SERVER['DOCUMENT_ROOT'] . "/template/config.php");

$p = new puzzle(array(
  "stage" => -1,
  "title" => "Login",
  "requireLogin" => false
));

$errorMessage = ''; // 用于存储错误消息

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  try {
      // 验证用户名和密码是否为空
      if (empty($username) || empty($password)) {
          throw new Exception('用户名或密码不能为空');
      }

      // 数据库连接
      $pdo = new PDO(
          "mysql:host={$_CONFIG['mysql_address']};dbname={$_CONFIG['mysql_database']}",
          $_CONFIG['mysql_username'],
          $_CONFIG['mysql_password']
      );
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // 查找用户
      $stmt = $pdo->prepare("SELECT id, password FROM users WHERE username = :username");
      $stmt->execute(['username' => $username]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if (!$user) {
          throw new Exception('用户名或密码错误');
      }

      // 验证密码
      if (!password_verify($password, $user['password'])) {
          throw new Exception('用户名或密码错误');
      }

      // 登录成功，生成会话或令牌
      session_start();
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $username;

      // 生成 token
      $token = bin2hex(random_bytes(32));
      $expiresAt = (new DateTime('+1 day'))->format('Y-m-d H:i:s');

      // 存储 token 到数据库
      $stmt = $pdo->prepare("INSERT INTO tokens (user_id, token, expires_at) VALUES (:user_id, :token, :expires_at)");
      $stmt->execute([
          'user_id' => $user['id'],
          'token' => $token,
          'expires_at' => $expiresAt,
      ]);

      // 将 token 设置到 cookie 中，过期时间为 1 天
      setcookie("auth_token", $token, time() + 86400, "/", "", true, true);

      // 重定向到用户仪表盘
      header("Location: /stage0.php");
      exit();
  } catch (Exception $e) {
      // 错误处理
      $errorMessage = $e->getMessage();
  }
}

$p->header();
?>

<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content">
        <div class="question-text">

          <?php if (!empty($_GET['message'])): ?>
            <p style="color: green; text-align: center;">
              <?= htmlspecialchars($_GET['message']); ?>
            </p>
          <?php endif; ?>

          <form class="login-form" method="post" action="/user/login.php">
            <div class="form-group">
              <div class="question-input"><input class="input" type="text" id="username" name="username"
                  placeholder="尊姓大名" required></div>
            </div>
            <div class="form-group">
              <div class="question-input"><input class="input" type="password" id="password" name="password"
                  placeholder="密码" required></div>
            </div>
            <div class="form-group">
              <button style="margin: 20px auto; display: block; width: 200px;" class="button" type="submit">登录</button>
            </div>
            <!-- 注册按钮 -->
            <div class="form-group">
              <a href="/user/register.php" style="text-align: center; display: block;">注册</a>
            </div>
          </form>

          <?php if (!empty($errorMessage)): ?>
            <!-- 你连注册都找不到的话，那你就已经输在起跑线了 -->
            <p style="color: red; text-align: center;">
              <?= htmlspecialchars($errorMessage); ?>
            </p>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>
