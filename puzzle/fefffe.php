<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 21,
  "next" => "/one-two-stop",
  "passwd" => "17b25dd3f251529dcde8fe4c2381cb48"
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
            <div class="question-text">32bit lowercase md5 of onestop.mid</div>
            <div class="question-input"><input name="passwd" id="answer" value="" class="input"></div>
            <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>