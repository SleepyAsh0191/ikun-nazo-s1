<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 34,
  "next" => "/in-ur-h34rt",
  "title" => "答案在哪里啊答案在哪里？",
));

// 返回的头中加一个 answer: in-ur-h34rt
header("answer: in-ur-h34rt");

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">Where is the answer?</div>
            <div class="question-text">I've already responsed to you.</div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>