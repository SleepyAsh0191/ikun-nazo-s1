<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 45,
    "next" => "/v13tnam-z0diac-ha5-cat",
    "title" => "十二生肖哪来的猫？"
));

$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

function getBrowserLanguage() {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); 
    }
    return 'zh';
}

$lang = getBrowserLanguage();

$zodiacs = [
    'zh' => ['鼠', '牛', '虎', '兔', '龙', '蛇', '马', '羊', '猴', '鸡', '狗', '猪'], 
    'vi' => ['鼠', '牛', '虎', '猫', '龙', '蛇', '马', '羊', '猴', '鸡', '狗', '猪'], 
];

$zodiacList = isset($zodiacs[$lang]) ? $zodiacs[$lang] : $zodiacs['zh']; 

function getZodiac($year, $zodiacList) {
    $index = ($year - 1900) % 12;
    return $zodiacList[$index];
}

$zodiac = getZodiac($year, $zodiacList);

if($p->check())
{
  $p->next();
}

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <?php if ($zodiac === '猫'): ?>
                    <div class="question-text">猫年快乐！</div>
                    <div class="question-text">恭喜！答案是：<?=$p->next?></div>
                <?php else: ?>
                    <div class="question-text">猫年快乐！</div>
                    <div class="question-text">但是今年不是猫年，你计算机的时间是<?=$zodiac?>年，所以我不能给你答案！</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    (function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (!urlParams.has('year')) {
            const currentYear = new Date().getFullYear(); 
            urlParams.set('year', currentYear);
            window.location.search = urlParams.toString();
        }
    })();
</script>



<?php
$p->footer();
?>