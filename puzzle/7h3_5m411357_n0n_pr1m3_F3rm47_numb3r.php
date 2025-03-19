<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 31,
  "next" => "/captcha",
  "title"=> "人机检测",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
          <img src="images/captcha_meme.png" width="25%" style="margin: 0 auto"/>
            <div class="question-text">请访问：<?=$p->next?></div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>