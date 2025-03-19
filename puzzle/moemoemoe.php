<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 11,
  "next" => "mysqlpythonrustdockerphp",
  "title" => "我会自己逛动物园",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
          <div class="question-text">
              length=24, 是技术栈
            </div>
            <div class="question-text">
             🐬🐍🦀🐋🐘
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>