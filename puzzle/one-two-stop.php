<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 22,
  "next" => "/3-for-five-stop",
  "passwd" => "342606f84606974189b0dea23fd20052",
  "title" => "又是密码"
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
          <div class="question-content">
            <div class="question-text">32bit lowercase md5 of twostop.mid</div>
            <div class="question-input"><input name="passwd" id="answer" value="" class="input"></div>
            <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>