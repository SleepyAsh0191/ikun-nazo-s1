<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 17,
  "next" => "heads-ln-freezers",
  "title" => "Google神秘数字",
  "passwd" => "241543903",
));

if($p->check())
{
  $p->next();
}

$p->header();
?>
<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content" style="top: 10%">
      <div class="question-text">敬请欣赏: 脑袋放在冰箱里(Head in Freezers) 作者：拆特 鸡皮提</div>
        <img src="images/fridge.png" width="25%" style="margin: 0 auto" alt="尝试Google下某串数字或者关键词？"/>
        <div class="question-text">（图片使用ChatGPT生成，密码是一串数字）</div>
        <div class="question-input"><input id="answer" name="passwd" value="" class="input"></div>
        <!-- Hint: search the prompt? -->
        <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>