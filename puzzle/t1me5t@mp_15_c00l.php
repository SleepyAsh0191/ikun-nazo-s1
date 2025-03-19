<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 28,
  "next" => "/n_sq__4_9_16_25_36",
  "title" => "Enchant",
  "jsCode" => "n=114514",
  "passwd" => "10010101001001110110010110101110111100000111000110101100001000010000"
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
          <div class="question-content">
          <img src="images/ench.png" width="60%" style="margin: 0 auto"/>
          <div class="question-input"><input id="answer" name="passwd" value="" class="input"></div>
          <!-- where is n? -->
        <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="ᓭ⚍ ʖᒲ╎ℸ ̣">
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>