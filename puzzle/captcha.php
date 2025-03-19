<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

// 获取当前完整的请求 URL（包括查询参数）
$requestUri = $_SERVER['REQUEST_URI'];

// 检查是否存在查询参数部分
$urlParts = parse_url($requestUri);
parse_str($urlParts['query'] ?? '', $queryParams);

// 判断是否存在 'seed' 参数
if (!isset($queryParams['seed']) || !is_numeric($queryParams['seed'])) {
    // 如果 'seed' 参数不存在或者不是数字，生成新的 seed 参数
    $seed = rand(100000, 10000000000); // 生成一个随机整数作为 seed 值

    // 构建新的查询参数
    $queryParams['seed'] = $seed;
    $newQuery = http_build_query($queryParams);

    // 构建重定向的完整 URL
    $newUrl = $urlParts['path'] . '?' . $newQuery;

    // 执行重定向
    header("Location: " . $newUrl);
    exit();
}

function generateRandomString($seed, $length)
{
    // Define the character set
    $characters = 'IJl|1O0()i!';
    $charLength = strlen($characters);

    // Initialize the seed for the random number generator
    mt_srand($seed);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $charLength - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

function generateDynamicHTML($text)
{
    $tags = ['<span>', '<i>', '<b>', '<u>', '<div style="display:inline;">'];
    $html = '';

    for ($i = 0; $i < strlen($text); $i++) {
        // 随机选择一个标签
        $tag = $tags[array_rand($tags)];
        // 根据标签生成 HTML
        $html .= $tag . htmlspecialchars($text[$i]) . str_replace('<', '</', $tag);
    }

    return $html;
}

$p = new puzzle(array(
    "stage" => 31,
    "next" => "/papyrus-sans-undertale",
    "title" => "不会吧，不会真有网站用 CSS 显示验证码吧？",
    "passwd" => generateRandomString($queryParams['seed'], 100),
));

if ($p->check()) {
    $p->next();
}

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content" style="height: 80%; top: 5%; justify-content: center;">
                <div class=question-text>请输入验证码：</div>
                <div style="
                font-family: 'Papyrus'; 
                word-wrap: break-word;
                overflow: auto;
                border: 3px solid transparent; 
                border-image: linear-gradient(45deg, red, orange, yellow, green, blue, indigo, violet, red); 
                border-image-slice: 1;
                padding: 10px; 
                height: 50%;
                background: linear-gradient(90deg, #444, #666, #444);
                background-size: 200% 200%;
                animation: gradientBackground 3s infinite alternate;
                scrollbar-width: none; 
                -ms-overflow-style: none; 
                user-select: none;
                width: 80%;
                margin: 0 auto;
                position: relative;
             " id="captcha" oncopy="return false" oncut="return false" onpaste="return false"
                    oncontextmenu="return false">
                    <div id="flipping-div"><?= generateDynamicHTML(generateRandomString($queryParams['seed'], 100)) ?></div>
                </div>
                <div class="question-input"><input id="answer" name="passwd" value="" class="input"></div>
                <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit"
                    class="button" value="提交">
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes gradientBackground {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
    }

    .question-text::-webkit-scrollbar {
        display: none;
    }
    #flipping-div {
    animation: flipAnimation 1s linear infinite;
  }

  @keyframes flipAnimation {
    0% {
      transform: rotateY(0deg) rotateX(0deg);
    }
    50% {
      transform: rotateY(180deg) rotateX(-180deg);
    }
    100% {
      transform: rotateY(360deg) rotateX(-360deg);
    }
  }
</style>

<script>
</script>

<?php
$p->footer();
?>

<script>
    document.addEventListener('keydown', function (event) {
        if (event.key === "F12" || event.keyCode === 123) {
            event.preventDefault();
        }
        if (event.ctrlKey && event.shiftKey && event.key === 'I') {
            event.preventDefault();
        }
        if (event.ctrlKey && event.key === 'u') {
            event.preventDefault();
        }
    });

    document.addEventListener('contextmenu', function (event) {
        event.preventDefault();
    });

    (function () {
        const threshold = 160; 
        function detectDevTools() {
            const start = new Date();
            debugger;
            const end = new Date();
            if (end - start > threshold) {
                window.location.reload();
            }
        }
        setInterval(detectDevTools, 1000);
    })();
    document.getElementById('answer').addEventListener('paste', function (event) {
        event.preventDefault();
    });

</script>