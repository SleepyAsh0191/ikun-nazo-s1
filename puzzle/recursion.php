<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 19,
  "next" => "symbol-15-symb01"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content" style="font-size: 30px;">
            <div class="question-text">
              STL是什么呢？它有好几个意思！
            </div>
            <div class="question-text">
              1. Standard Template Library（标准模板库）
            </div>
            <div class="question-text">
              2. Stereo Lithography（立体光刻<span id="wenjian">文件</span>格式）
            </div>
            <div class="question-text">
              3. St. Louis（圣路易斯）
            </div>
            <div class="question-text">
              4. Short-Term Loan（短期贷款）
            </div>
            <div class="question-text">
              5. Software Testing Lab（软件测试实验室）
            </div>
            <div class="question-text">
              6. Satellite Telemetry Link（卫星遥测链路）
            </div>
            <div class="question-text">
              7. Shielded Twisted Line（屏蔽双绞线）
            </div>
            <div class="question-text">
              8. Speech Transmission Loss（语音传输损耗）
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>

<script>
$(document).ready(function() {
    $('#wenjian').on('click', function() {
        window.location.href = '/images/wenjian.stl';
    });
});
</script>