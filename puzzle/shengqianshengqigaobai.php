<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 39,
    "next" => "/OMG",
    "title" => "恶魔鸡",
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">《🍎🍎🍎》</div>
                <div class="question-text">🥢🥢口口</div>
                <div class="question-text">...</div>
                <div class="question-text">😳😳😳😳😳👶口口①の♥♥</div>
                <div class="question-text">口口口口口口🔥</div>
                <div class="question-text">🔥🔥🔥🔥🔥</div>
                <div class="question-text">口口口②口口口🍎🍎👶</div>
                <div class="question-text">口口③口口口口☁️☁️</div>
                <div class="question-text">🌱🌱口口口口 ❀❀口⛰️口</div>
                <div class="question-text">英语中，常用哪三个大写字母表示①②③的意思？</div>
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>