<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 13,
  "next" => "1l0vec00k13",
  "title" => "趣多多！"
));

//设置cookie
setcookie("13-answer", "1l0vec00k13", time() + 3600);

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              我想不出来怎么写了，你自己找找这题的答案吧
            </div>
            <!-- Hint: What is Chips Ahoy? -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>