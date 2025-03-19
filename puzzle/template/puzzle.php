<?php
namespace base;
include($_SERVER['DOCUMENT_ROOT'] . "/template/sql.php");
class puzzle
{
  public $stage = "";  // 关卡编号
  public $title = "";  // title tip
  public $next = "";   // 下关链接
  public $passwd = ""; // 关卡密码
  public $jsCode = ""; // 所要插入的关卡js
  public $cssCode = ""; // 所要插入的关卡css
  public $unicode = "utf-8";
  public $requireLogin = true;
  public $sub = false;
  public $feedback = array();
  private $sessionId;

  private $progressFile = "progress.json"; // 存储关卡进度的文件

  function __construct($init)
  {
    session_start();
    setcookie(session_name(), session_id(), time() + 86400, "/");
    $this->sessionId = session_id();
    if (isset($init["stage"]) && is_int($init["stage"])) {
      $this->stage = $init["stage"];
    }
    if (isset($init["title"]))
      $this->title = $init["title"];
    if (isset($init["next"]))
      $this->next = $init["next"];
    if (isset($init["passwd"]))
      $this->passwd = $init["passwd"];
    if (isset($init["jsCode"]))
      $this->jsCode = $init["jsCode"];
    if (isset($init["cssCode"]))
      $this->cssCode = $init["cssCode"];
    if (isset($init["unicode"]))
      $this->unicode = $init["unicode"];
    if (isset($init["sub"]))
      $this->sub = $init["sub"];
    if (isset($init["feedback"]))
      $this->feedback = $init["feedback"];
    if (isset($init["requireLogin"]))
      $this->requireLogin = $init["requireLogin"];

    //防跳关预检
    // $this->preCheck();
    // $this->saveProgress();
  }

  public function getUser($token)
  {
    global $pdo; // 使用全局的 PDO 实例

    try {
      // 查询 token 对应的用户信息
      $stmt = $pdo->prepare("
              SELECT u.id, u.username, u.created_at
              FROM tokens t
              INNER JOIN users u ON t.user_id = u.id
              WHERE t.token = :token AND t.expires_at > NOW() AND t.revoked = 0
          ");
      $stmt->execute(['token' => $token]);

      // 获取用户信息
      $user = $stmt->fetch(\PDO::FETCH_ASSOC);

      // 如果未找到用户，抛出异常
      if (!$user) {
        throw new \Exception("无效的 Token 或 Token 已过期");
      }

      return $user;
    } catch (\Exception $e) {
      // 错误处理
      return null;
    }
  }


  private function preCheck()
  {

    //从cookie里拿token
    $token = isset($_COOKIE["auth_token"]) ? $_COOKIE["auth_token"] : null;
    if($token == null) {
      if ($this->requireLogin) {
        header("Location: /user/login");
        exit();
      } else {
        return;
      }
    }
    //检查token是否存在与数据库
    $user = $this->getUser($token);
    if($user == null && $this->requireLogin){
      header("Location: /user/login");
      exit();
    } else if ($user == null && !$this->requireLogin) {
      return;
    } else if ($user != null && !$this->requireLogin) {
      return;
    }
    $id = $user['id'];
    $storedStage = $this->getStoredStage($id);

    // 仅允许第一关直接访问
    if ($this->stage > 1 && $storedStage < $this->stage - 1) {
      // 隐式跳转到404.php
      http_response_code(404);
      include($_SERVER['DOCUMENT_ROOT'] . "/404.php");
      exit();
    }
  }


  // 保存关卡进度到文件
  private function saveProgress()
  {
    global $pdo;
    $token = isset($_COOKIE["auth_token"]) ? $_COOKIE["auth_token"] : null;
    if($token == null) {
      return;
    }

    $user = $this->getUser($token);
    $id = $user['id'];
    //检查是否有重复记录
    $stmt = $pdo->prepare("SELECT * FROM user_progress WHERE user_id = :user_id AND level_number = :level_number");
    $stmt->execute([
      'user_id' => $id,
      'level_number' => $this->stage,
    ]);
    if ($stmt->fetch()) {
      return;
    }

    //插入通关记录
    $stmt = $pdo->prepare("INSERT INTO user_progress (user_id, level_number) VALUES (:user_id, :level_number)");
    $stmt->execute([
      'user_id' => $id,
      'level_number' => $this->stage,
    ]);
  }

  // 获取存储的关卡编号
  public function getStoredStage($user_id)
  {
    global $pdo;
    //取最大的一个level_number
    $stmt = $pdo->prepare("SELECT MAX(level_number) FROM user_progress WHERE user_id = :user_id");
    $stmt->execute(['user_id' => $user_id]);
    $currentStage = $stmt->fetchColumn();
    if ($currentStage == null) {
      return 0;
    }
    return $currentStage;
  }

  function check()
  {
    if (isset($_POST["passwd"])) {

      if ($_POST["passwd"] == $this->passwd) {
        return true;
      } else {
        header("Content-Type:text/html;charset=utf-8");
        if (isset($this->feedback[$_POST["passwd"]])) {
          echo $this->feedback[$_POST["passwd"]];
        } else {
          echo '<div style="border: 2px solid red; width: 60vw; top:20px; margin: 0 auto;">提交错误！</div>';
        }
      }
    }
    return false;
  }

  function next()
  {
    header("Location: " . $this->next);
  }

  function header()
  {
    include($_SERVER['DOCUMENT_ROOT'] . "/template/header.php");
  }

  function footer()
  {
    include($_SERVER['DOCUMENT_ROOT'] . "/template/footer.php");
  }
}
