<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 49,
  "next" => "/31-45",
  "title" => "强迫症",
));

$p->header();
?>
<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content">
        <div class="question-text">
           在本场游戏中，你会发现，其中有一些题目的题号使用了同一数字，请从小到大按照类似于10-11-12的顺序作为答案提交。
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>