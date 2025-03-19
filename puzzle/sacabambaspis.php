<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 15,
  "next" => "alphabet",
  "title" => "济南 青岛 淄博 枣庄 东营 烟台 潍坊",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              长沙 百色 防城港 益阳 长春 吉林 邢台 衡水
              <!-- Hint: 想想为什么title是同一个省份的，有什么顺序关系？ -->
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>