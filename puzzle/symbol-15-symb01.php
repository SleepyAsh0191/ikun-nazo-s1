<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 20,
  "next" => "fefffe",
  "title" => "kara"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content" style="background-color: #fefffe;">
            カラオケ？カラ？オケた！こたえはカラー！
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>