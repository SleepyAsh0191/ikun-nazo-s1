<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => -404,
  "next" => "",
  "title" => "找不到网页",
  "requireLogin" => false
));

$p->header();
?>

<style>
section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 20vh; /* 使 section 高度占满整个视窗 */
    text-align: center; /* 文本水平居中 */
    font-size: 1.2rem; /* 可选：调整字体大小 */
}
</style>

<section>
<?php
$q42_answer = "/random-failure";
$normal = "/example";

//判断是否达到了q41，也就是说检查cookie['3e4ra5'] == 038shx7vbwefds9bs9vsdv
if (isset($_COOKIE["3e4ra5"]) && $_COOKIE["3e4ra5"] == "038shx7vbwefds9bs9vsdv") {
  $is_q41 = true;
} else {
  $is_q41 = false;
}

$result = $is_q41 ? $q42_answer : $normal;

$texts = array(
  "Answer not found. Did you mean: {$result}",
  "正确答案，不存在的",
  "你确定？这道问题？那么好，不对。",
  "解释 answer.py 的第 1 行时出现回答错误异常，其代码为 404。",
  "这个答案好奇怪，我们不能理解",
  "你答对了一个错误的答案, 请返回重试..",
  "你落入了虚无世界",
  "请不要放弃，保持你的决心！",
  "502 bad gay",
  "Roses are Red, Violets are Blue. Unexpected '{' on line 32.",
  "胜败乃兵家常事，大侠请重新来过",
  "你的答案不在这里",
  "恭喜你获得了错误答案锦标赛的冠军！",
  "你的答案触发了宇宙 bug，请重启现实世界",
  "你的答案被 404 了",
  "Oops, 你的答案居然不存在于所有已知维度",
  "你的答案被吃掉了",
  "答案已进入量子叠加态，同时对又错，但更错一些",
  "解析错误：你的答案让服务器怀疑人生",
  "你打开了错误的正确之门，下一步是走回去",
  "答案已被外星人劫持，请尝试与地球保持同步",
  "你的答案被选为了今天的诺贝尔最迷惑奖，请上台领奖",
  "你的答案被送到了黑洞里，再也找不到了",
  "这答案有亿点点意思，但服务器拒绝提供评论",
  "This answer is a masterpiece of misunderstanding",
  "Compilation failed: 未知符号 '正确答案'",
  "SyntaxError: 你的答案在逻辑上缺少一个分号",
  "你的答案被归类为「不明飞行物」",
  "你的答案触及了真理的边缘，但真理本身或许是不可知的",
  "答案是相对的，而错误是绝对的，你的回答站在绝对的一侧",
  "这道题的答案已经被你的提问本身解构了",
  "你说的对，但是《Kunkun Nazo》是由某个不知名程序员临时拼凑的一款在线解谜游戏。游戏发生在一个被称作「互联网」的幻想世界，在这里，所有被题目选中的人都被授予了「一脸懵逼」，并被导向更大的谜团。你将扮演一位名为「什么鬼」的迷惑角色，在解谜中碰到更复杂的错误、无解的任务、以及对你毫无帮助的题目们，和他们一起越解越乱，最终失去所有的线索与希望。",
  "答案已经准备好，但它要先去拿杯咖啡，稍等100年",
  "你的答案引发了鸡和蛋的终极争论，问题决定罢工",
  "题目哭了：‘我只是想要一个简单的答案啊！’",
  "宇宙深处的猫听到你的答案后，开始思考狗的意义",
  "你的答案被送到了未来，但未来的人们也没看懂",
  "这里的文字只是随便写的",
  "你知道吗？用GPT-4o-mini生成这些随机句子很方便",
);

if ($is_q41) {
  // 从全部内容中随机选一个
  echo $texts[array_rand($texts)];
} else {
  // 取前 6 条内容，然后随机选一个
  $subset = array_slice($texts, 0, 6); // 截取前 6 条
  echo $subset[array_rand($subset)];
}
?>
</section>

<?php
$p->footer();
?>
