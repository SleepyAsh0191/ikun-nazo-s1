<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 4,
  "next" => "/stage-five",
  "jsCode" => "console.log('answer: level-five')"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">请进入第五关</div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>