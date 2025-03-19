<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");
$requestUri = $_SERVER['REQUEST_URI'];

$urlParts = parse_url($requestUri);
parse_str($urlParts['query'] ?? '', $queryParams);

if (!isset($queryParams['seed']) || !is_numeric($queryParams['seed'])) {
    $seed = rand(100000, 10000000000);
    $queryParams['seed'] = $seed;
    $newQuery = http_build_query($queryParams);
    $newUrl = $urlParts['path'] . '?' . $newQuery;
    header("Location: " . $newUrl);
    exit();
}

$seed = (int) $queryParams['seed'];
$passwd = "";

// Generate a 10x10 matrix with 16-character hex strings and a randomly selected password
function generateRandomMatrix($seed)
{
    mt_srand($seed); // Set the random seed
    $matrix = [];
    $passwordIndex = mt_rand(0, 99); // Select a random index for the correct password

    for ($i = 0; $i < 10; $i++) {
        $row = [];
        for ($j = 0; $j < 10; $j++) {
            $row[] = substr(md5(mt_rand()), 0, 16); // 使用种子生成固定的16字符字符串 // Generate a 16-character hex string
        }
        $matrix[] = $row;
    }

    $passwd = $matrix[(int) ($passwordIndex / 10)][$passwordIndex % 10]; // Get the password
    return ['matrix' => $matrix, 'password' => $passwd];
}

$matrixData = generateRandomMatrix($seed);
$passwd = $matrixData['password'];

$p = new puzzle(array(
    "stage" => 48,
    "next" => "/unicode-dajiao",
    "title" => "神级视力表",
    "passwd" => $passwd
));

if ($p->check()) {
    $p->next();
} else {

    //判断有没有passwd
    if (isset($_POST['passwd'])) {
        $requestUri = $_SERVER['REQUEST_URI'];

        $urlParts = parse_url($requestUri);
        parse_str($urlParts['query'] ?? '', $queryParams);
        $seed = rand(100000, 10000000000);
        $queryParams['seed'] = $seed;
        $newQuery = http_build_query($queryParams);
        $newUrl = $urlParts['path'] . '?' . $newQuery;
        header("Location: " . $newUrl);
        exit();
    }
}

$p->header();
?>
<section class="container" style="display: flex; justify-content: center; align-items: center;">
    <div class="card-wrap" style="text-align: center;">
        <div class="card cardIn">
            <div class="question-content" style="top: 20px !important;">
                <div class="question-text" style="margin-bottom: 20px;">请在“㬵”中找到“胶”</div>
                <div class="matrix" style="display: inline-block;">
                    <?php
                    $correctValue = $matrixData['password']; // 正确答案
                    foreach ($matrixData['matrix'] as $row): ?>
                        <div class="matrix-row" style="display: flex; justify-content: center;">
                            <?php foreach ($row as $cell): ?>
                                <!-- <form method="POST" action="" style="margin: 2px;"> -->
                                <button type="submit" name="passwd" value="<?= htmlspecialchars($cell) ?>" class="matrix-cell"
                                    style="width: 50px; height: 50px; font-size: 25px; text-align: center;">
                                    <?= $cell === $correctValue ? '胶' : '㬵' ?>
                                </button>
                                <!-- </form> -->
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$p->footer();
?>