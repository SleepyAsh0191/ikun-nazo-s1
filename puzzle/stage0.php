<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 0,
  "next" => "/stage1",
  "requireLogin" => false
));

$p->header();
session_start();
?>
<section>
  <div>
    <div class="rule">
      <ol>
        <!-- 
              更新日志：
              0.6版本：新增防止跳关机制
              0.5版本：新增续关功能
              0.4版本：扩充到50关
              0.3版本：扩充到40关
              0.2版本：扩充到20关，更新网页样式
              0.1版本：初次发布
              鸣谢：https://github.com/szisa/puzzle
            -->
        <li>这个游戏的目标就只有一个：进入下一关。在大部分关卡中，你需要利用网页上的提示进入下一关。</li>
        <li>在不少的关卡中，你需要利用 <a href="http://www.google.com/">Google</a> 来搜寻数据以破关。<a
            href="https://www.wikipedia.org/">Wikipedia</a>(即维基百科)里也许也有较直接的信息，当然有可能会用到部分计算机知识。</li>
        <li>其次，请务必使用Windows系统与最新的浏览器进行游戏</li>
        <li>为保证游戏公平，请不要将答案分享至网络，并且网站已添加禁止跳关，先前进行闯关的玩家请从第一关重新挑战，为其带来的不便请谅解</li>
        <li>您可以使用游戏本身的漏洞进行闯关，也允许使用大语言模型解题（加密JS不允许）</li>
        <li>QQ讨论群：2168027613</li>
        <?php if (isset($_COOKIE["auth_token"]) && $p->getUser($_COOKIE["auth_token"])): ?>
          <li>欢迎回来！<?= $p->getUser($_COOKIE["auth_token"])['username'] ?>，您的当前进度是第<?=$p->getStoredStage($p->getUser($_COOKIE["auth_token"])['id'])?>关</li>
          <p><a href="<?= $p->next ?>">【点击这里开始】</a>
          </p>
          <?php else: ?>
          <li><a href="/user/login">请点击登录后才可以开始</a></li>
        <?php endif; ?>
      </ol>

    </div>
  </div>
</section>
<?php
$p->footer();
?>