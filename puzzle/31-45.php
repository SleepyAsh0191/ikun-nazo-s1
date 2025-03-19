<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 50,
  "next" => "/",
  "title" => "你过关",
));

$p->header();
?>
<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content">
        <div class="question-text">
           你过关！
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>