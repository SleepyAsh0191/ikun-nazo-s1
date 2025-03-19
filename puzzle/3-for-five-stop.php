<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 23,
  "next" => "/penguin",
  "title" => "knee chong q bi ma?",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <img src="images/q23.jpg" width="35%" style="margin: 0 auto" alt="Which animal is wrong?" class="question-image">
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>