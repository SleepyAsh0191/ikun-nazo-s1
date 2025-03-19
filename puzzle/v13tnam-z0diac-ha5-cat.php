<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 46,
    "next" => "/quine",
    "title" => "比蛇年晚会好看",
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <!-- 答案是[a-z]{5} -->
            <div class="question-content">
                <div class="question-text">s='s=%r\nprint(s%%s)'</div>
                <div class="question-text">print(s%s)</div>
                <div class="question-text"></div>
                <div class="question-text">注意：下一题有BGM，请提前注意</div>
            </div>
        </div>
</section>
<?php
$p->footer();
?>