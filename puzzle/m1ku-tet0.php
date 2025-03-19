<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 6,
  "next" => "aptcow",
  "title" => "本???具有超级？力"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              This ??? has Super ??? powers
            </div>
            <div class="question-text">
              ..."Have you mooed today?"...
            </div>
            <!-- Hint: answer is [a-z]{?} -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>