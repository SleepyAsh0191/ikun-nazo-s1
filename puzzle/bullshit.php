<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 31,
  "next" => "/7h3_5m411357_n0n_pr1m3_F3rm47_numb3r",
  "passwd" => "4294967297",
  "title" => "高考语文基础知识冲刺"
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
          <div class="question-content" style="text-align: left; overflow: auto; height: 100%; top: 0%">
            <div class="question-text">1、论语中记载，孔子的弟子向孔子问鬼神之事，孔子正色答曰：“不知生，焉知死？”即是在规劝弟子，我们连活人的学问都无法穷尽研究，怎么就开始研究死人的学问了呢？</div>
            <div class="question-text">2、石室诗士施氏，嗜狮，誓食十狮。施氏时时适市视狮。十时，适十狮适市。是时，适施氏适市。施氏视是十狮，恃矢势，使是十狮逝世。氏拾是十狮尸，适石室。石室湿，氏使侍拭石室。石室拭，施氏始试食是十狮尸。食时，始识是十狮尸，实十石狮尸。试释是事。</div>
            <div class="question-text">3、坤坤生了个孩子（记为爱坤，禁止简写），坤坤希望爱坤能德体美劳全面发展</div>
            <div class="question-text">4、小明偏科，语文考了98，数学考了67，英语考了91</div>
            <div class="question-text">5、在放学回家的路上，李贞璟开心的唱着歌、高兴的蹦蹦跳跳，结果不小心滑倒了，一跤摔的很惨，新书包都摔的乱七八糟，李贞璟也疼的直叫唤。</div>
            <div class="question-text">6、OOO棰，XXOO，OOO竭。return 爻</div>
            <div class="question-text">7、尖⊕尛⊕夶⊕夶⊕夵</div>
            <div class="question-text">8、为了准备这次重要的演讲，李添煞废苦心地搜集资料，反复修改稿件，终于得到了大家的认可。</div>
            <div class="question-text">9、本题主要考查了中国传统文化：0.58333...</div>
            <div class="question-text">10、=4</div>
            <div class="question-input">请输入答案<input id="answer" name="passwd" value="" class="input"></div>
            <!-- 提示 这题的答案你能在网上搜到 一个题是一个字 不是？数的最小？？？ -->
            <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
        </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>