<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 26,
  "next" => "/minceraft",
  "title" => "工艺桌可以透过橡木日志分解成橡木木材然后制作",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            You should try our sister game
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>