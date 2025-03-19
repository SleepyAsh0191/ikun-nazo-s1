<?php
session_start();

include($_SERVER['DOCUMENT_ROOT'] . "/template/config.php");

$_SESSION["stage"] = $this->stage;
unset($_SESSION["jsCode"]);
if ($this->jsCode != "")
  $_SESSION["jsCode"] = $this->jsCode;
unset($_SESSION["cssCode"]);
if ($this->cssCode != "")
  $_SESSION["cssCode"] = $this->cssCode;

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="<?= $this->unicode ?>" />
  <meta name="robots" content="noindex, nofollow, nosnippet, noarchive">
  <title><?= $_CONFIG["name"] ?> -
    <?= ($this->stage == 0) ? "Game Rule" : "Stage " . $this->stage ?><?= ("" == $this->title ? "" : " - ") ?><?= $this->title ?>
  </title>
  <link type="text/css" rel="stylesheet" href="/css/?/common.css" />
  <script type="text/javascript" src="/js/?/common.js"></script>
  <script type="text/javascript" src="/js/jquery.min.js"></script>
</head>

<body>
  <form action="" method="post">
    <?php if (!$this->sub) { ?>
      <header>
        <h1 class="title">
          <?php
          switch ($this->stage) {
            case 0:
              echo $_CONFIG["name"] . "<span style='font-size: 50%;'> v0.95</span>";
              break;
            case -1:
              echo "Login";
              break;
            case -2:
              echo "Register";
              break;
            case -404:
              echo "404 Wrong Answer";
              break;
            default:
              echo "Stage " . $this->stage;
          }
          ?>
        </h1>
      </header>
      </header>
    <?php } ?>
    <!-- 以上代码与关卡无关 -->