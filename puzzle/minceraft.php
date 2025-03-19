<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");
$status = "";

function check_ts() {
    global $status; // Add this line to make $status accessible inside the function

    // Check if the input is a valid timestamp within the range
    if (!isset($_POST["passwd"]) || !is_numeric($_POST["passwd"])) {
        $status = "请输入一个数字";
        return false;
    }

    $ts = intval($_POST["passwd"]);

    // Update the status only if the condition fails
    if ($ts < time() - 5 || $ts > time() + 5) {
        if ($ts < time() - 5) {
            $status = "答案太小了";
        } else {
            $status = "答案太大了";
        }
        return false;
    }

    $status = "答案正确！"; // Optional success message
    return true;
}

$p = new puzzle(array(
  "stage" => 27,
  "next" => "/t1me5t@mp_15_c00l",
  "title" => "幼儿园必备猜数字小游戏",
));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && check_ts()) {
    $p->next();
}

$p->header();
?>
    <section class="container">
      <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">你需要猜一个会变的数字x，它有以下特点：</div>
                <div class="question-text">1. 它是一个正整数。</div>
                <div class="question-text">2. 它的取值范围在[1,1e18]内。</div>
                <div class="question-text">3. 它会随着时间的流逝而线性增加。</div>
                <div class="question-text">请提交你猜的数字。</div>
                <div class="question-text"><?=$status ?></div>
                <form method="post">
                    <div class="question-input">
                        <input id="answer" name="passwd" value="" class="input">
                    </div>
                    <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
                </form>
            </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>