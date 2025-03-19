<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 43,
    "next" => "/hehehe-tongtongtong-xuexuexue",
    "title" => "我用108天出了道题",
    "passwd" => "hhhhhhZZZZZZ+tttooodddZZZ+|||uuuZZZ|||uuuZZZ|||uuuZZZ"
));

if($p->check())
{
  $p->next();
}

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content" style="top: 0;">
                <!-- 灵感来自：https://github.com/Kangnakamuyii/HeLang -->
                <div class="question-text">Helang, 来自理塘的下一代赛博编程语言！</div>
                <div class="question-text">我觉得 Helang 牛逼，不觉得这很酷吗？</div>
                <div class="question-text">有人认为 Helang 无法打印出 Hello, world. 意味着它太垃圾了，实则不然。</div>
                <div class="question-text">Helang 专注于单片机应用的开发，哪里有时间顾及字符串？</div>
                <div class="question-text">为了打破这种窘境，来自理塘的另一位年轻人 JD Perl 发明了基于 Helang 的 Litang 编程语言</div>
                <div class="question-text">Litang 专注于字符串处理，哪里有时间顾及单片机？</div>
                <div class="question-text">Helang 和 Litang 之间的矛盾，导致了理塘的分裂</div>
                <div class="question-text">算了，我编不下去了，这里有个用 Litang 编写的一段程序，输出的就是答案</div>
                <div class="question-text">你自己访问/images/question-43.litang下载吧</div>
                <div class="question-input"><input id="answer" name="passwd" value="" class="input"></div>
                <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
            </div>
        </div>
</section>
<?php
$p->footer();
?>