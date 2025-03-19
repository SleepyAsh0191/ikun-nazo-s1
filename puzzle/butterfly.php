<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 25,
  "next" => "/h1dd3n-p1ctur3",
  "title" => "坤坤大定理",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            本来这题目有个png图片的，结果这里的空间太小，我放不下
            <!-- 提示：2 level back picture file name -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>