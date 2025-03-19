<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 36,
  "next" => "/alpha-november-sierra-whiskey-echo-romeo",
  "title" => "signal flags: 人员水下工作中,请远离我船并慢速行驶"
));

$p->header();
?>
<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content">
        <div class="question-text">A-N-S-W-E-R</div>
        <div class="question-text">Axxxx-Nxxxxxxx-Sxxxxx-Wxxxxxx-Exxx-Rxxxx</div>
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>