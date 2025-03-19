<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 5,
  "next" => "m1ku-tet0",
  "title" => "好吃的",
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">
              🍭🍪🍫
            </div>
            <div class="question-text">
              ?1?u-?e?0
            </div>
            <div class="question-text">
              ? is alphabet
            </div>
            <!-- Hint: Search it and watch a vocaloid video in youtube or bilibili, but how to search? -->
            <!-- Hint2: There are no relation for audio. -->
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>