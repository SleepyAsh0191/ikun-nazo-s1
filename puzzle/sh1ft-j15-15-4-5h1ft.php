<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 38,
    "next" => "/shengqianshengqigaobai",
    "title" => "鸡批题",
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">我们用【Z2】表示拼音z开头的两个汉字，例如 紫砂 张三 都可以用【Z2】表示。</div>
                <div class="question-text">下面题目是一类填入一个词语，但所填词语并未使用本意，因此令人忍俊不禁的题目。</div>
                <div class="question-text">欢迎新老师【S2】来就餐。</div>
                <div class="question-text">那个女【S2】质很好。</div>
                <div class="question-text">小贩通【G2】菜涨价的消息。</div>
                <div class="question-text">【D2】的长度是22。且不包含本行</div>
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>