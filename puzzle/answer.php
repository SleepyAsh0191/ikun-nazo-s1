<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => -1,
));

if($p->check())
{
  $p->next();
}

$p->header();
?>

<style>
section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20vh;
    text-align: center; 
    font-size: 1.2rem; 
}
</style>

<section>
    不是哥们 这只是个样例链接
</section>

<?php
$p->footer();
?>
