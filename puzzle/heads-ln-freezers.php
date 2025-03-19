<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 18,
  "next" => "recursion",
  "title" => "人戈日口 土口一月金"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">yhyu ywr hapi tlbk yk</div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>