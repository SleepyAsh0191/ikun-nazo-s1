<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 41,
    "next" => "/random-failure",
    "title" => "Random",
));
setcookie("3e4ra5", "038shx7vbwefds9bs9vsdv", time() + 3600, "/"); // 设置 1 小时有效

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">Поражение — мать успеха</div>
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>