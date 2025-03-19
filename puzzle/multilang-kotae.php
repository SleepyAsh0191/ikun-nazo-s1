<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 9,
  "next" => "yuanshenqidong",
  "title" => "我是盲人，我看不到这道题",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              我不懂盲文啊，找个盲人帮我摸摸？
            </div>
            <div class="question-text">      
              <?php
              // 二阶段：  ⠌⠢⠆	⠙⠖⠆	⠞⠊⠂	⠙⠢	⠙⠔⠂⠧⠆	⠱⠆⠤ ⠯⠂	⠱⠴⠂	⠅⠊⠄⠙⠲⠆	⠙⠢	⠏⠣⠁⠣⠁
              ?>
              		<!-- /52	d62	ti1	d5	d91v2	:2-
                  &1	:01	ki'd42	d5	p&lt;a&lt;a -->
                  ⠌⠢⠆	⠙⠖⠆	⠞⠊⠂	⠙⠢	⠙⠔⠂⠧⠆	⠱⠆⠤ ⠯⠂	⠱⠴⠂	⠅⠊⠄⠙⠲⠆	⠙⠢	⠏⠣⠁⠣⠁
            </div>
            <!-- Hint: GBT 15720-2008 -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>