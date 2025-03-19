<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 44,
    "next" => "/dawankuanmian",
    "title" => "楷敤档牡s",
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">湡睳牥⼺慤慷歮慵浮慩n</div>
            </div>
        </div>
</section>
<?php
$p->footer();
?>