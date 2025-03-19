<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 7,
  "next" => "53788078",
  "title" => "Riddle School"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
            <img src="images/riddle-school.png" width="45%" style="margin: 0 auto"/>
            <!-- This is a web flash game, you can try it in this website https://www.newgrounds.com/portal/view/430459 -->
            </div>
            <div class="question-text">为什么这只山羊会说BLOBBLES</div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>