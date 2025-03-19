<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 1,
  "next" => "/stage2"
));

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
          <div class="question-content">
            <div class="question-text">请输入答案</div>
            <div class="question-input"><input id="answer" value="" class="input"></div>
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>


<script>
$(document).ready(function() {
    $('#answer').on('input', function() {
        var inputValue = $(this).val();
        if (inputValue === '答案') {
            window.location.href = '<?=$p->next?>';
        }
    });
});

</script>