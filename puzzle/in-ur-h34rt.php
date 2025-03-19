<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 35,
  "next" => "/r2k-a4y",
  "title" => "k4n n2o",
));


$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">internationalization = i18n. 谁发明的这个缩写？烂死了，我要把所有单词都变成i18n的，看看我的厉害！</div>
            <div class="question-text">N17p N18n N29u N18y N18e N26u N17p N18n N29u N18y N18e N26u</div>
            <div class="question-text">哎呀，我不小心把空格删了，就这么看吧</div>
            <div class="question-text">T1e a4r is t2s s2g's a4r b1t i18n ed (p4e r5e s3e w2h -)</div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>