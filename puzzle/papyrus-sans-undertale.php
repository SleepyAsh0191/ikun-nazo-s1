<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 32,
    "next" => "/234312",
    "title" => "狂乱睦要日"
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content" style="text-align: left; overflow: auto; height: 100%; top: 0%">
                <div class="question-text">在除夕夜 hhmmss 秒准时开始看《BanG Dream! Ave Mujica!》第四集，就可以在新的一年准时看到可爱的小睦探头。</div>
                <img src="images/9b6b0a23-912b-4111-adea-2df8467faecd.png" width="25%" style="margin: 0 auto" />
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>