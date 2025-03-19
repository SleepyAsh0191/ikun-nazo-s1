<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 40,
    "next" => "/equationprepare",
    "title" => "what missing?",
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">「生而为人，应该能够换尿布、策划入侵、杀猪、开船、造房子、写十四行诗、算账、建墙、正骨、抚慰临终之人、接受命令、下达命令、合作、独行、解决、分析新问题、清理马粪、编程、烹饪美食、高效战斗、英勇牺牲。专业分工是给昆虫的。」—罗伯特·海莱恩</div>
                <div class="question-text">是不是少了点什么？</div>
                <!-- 答案记得用英文哈 如果缺少多个直接拼在一起即可 记得按照顺序 -->
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>