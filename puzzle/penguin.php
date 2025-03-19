<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 24,
  "next" => "/butterfly",
  "jsCode" => "hint='輕飛如影，穿花逐風；春夏之時，翩然戲中。身柔翼薄，五彩爛然；非禽非鳥，爾能道名？'",
  "title" => "Ancient nazo",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">Rǣd þis giedd:</div>
            <div class="question-text">Flēogende sceadugenga,</div>
            <div class="question-text">Blāc ond sōft, hēofon-stīgan.</div>
            <div class="question-text">Þonne sumor cumeð, ic līċ þissa blōstma frætwe,</div>
            <div class="question-text">Nǣfre hearde, ac hlūtor ond lēohte.</div>
            <div class="question-text">Hwæt eom iċ?</div>
            <!-- Hint: This riddle is English and answer is in English too! -->
             <!-- but there is another hint here, can you find it? -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>