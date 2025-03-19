<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 29,
  "next" => "/top-level_domain",
  "title" => "4399小游戏必备连连看",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">Com pany</div>
            <div class="question-text">Edu cation</div>
            <div class="question-text">AI</div>
            <div class="question-text">RIP</div>
            <div class="question-text">我爱你</div>
            <div class="question-text">Org anization</div>
            <div>以上六个单词有某种联系，答案的格式为：“xxx-xxxxx_xxxxxx”（不含引号）</div>
            <div>碎碎念：因为不支持空格，所以就用下划线代替了，呜呜呜</div>
            <!-- 提示：你当前访问的网站是Chinese网站 -->
            <!-- 提示2：它支持中文也支持英文 -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>