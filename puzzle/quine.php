<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$requestUri = $_SERVER['REQUEST_URI'];

$urlParts = parse_url($requestUri);
parse_str($urlParts['query'] ?? '', $queryParams);

// 判断是否存在 'seed' 参数
if (!isset($queryParams['seed']) || !is_numeric($queryParams['seed'])) {
    $seed = rand(100000, 10000000000);
    $queryParams['seed'] = $seed;
    $newQuery = http_build_query($queryParams);
    $newUrl = $urlParts['path'] . '?' . $newQuery;
    header("Location: " . $newUrl);
    exit();
}

function generateRandomArray($seed, $length)
{
    mt_srand($seed);
    $min = 2147483648;
    $max = 9000000000;
    $uniqueNumbers = [];
    while (count($uniqueNumbers) < $length) {
        $randomNumber = mt_rand($min, $max);
        if (!in_array($randomNumber, $uniqueNumbers)) {
            $uniqueNumbers[] = $randomNumber;
        }
    }
    return $uniqueNumbers;
}

//快速排序 返回逗号连接的字符串
function quicksort($arr)
{
    if (count($arr) <= 1) {
        return $arr;
    }
    $pivot = $arr[0];
    $left = [];
    $right = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $sorted = array_merge(quicksort($left), [$pivot], quicksort($right));
    return $sorted;
}

function quicksortToString($arr)
{
    $sortedArray = quicksort($arr);
    return implode(",", $sortedArray);
}

$p = new puzzle(array(
    "stage" => 47,
    "next" => "/51m83rnana-m0nk3y",
    "title" => "睡蕉小猴真是好",
    "passwd" => quicksortToString(generateRandomArray($queryParams['seed'], 20)),
));

if ($p->check()) {
    $p->next();
}

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div class="question-text">睡蕉小猴排序</div>
                <div class="question-text" id="sequences"
                    style="word-wrap: break-word; word-break: break-word; white-space: normal;">
                    <?= implode(',', generateRandomArray($queryParams['seed'], 20)) ?>
                </div>
                <div class="question-text">进入下一关条件：成功从小到大排序</div>
                <!-- 希望你是欧皇 -->
                <input id="sort" style="margin: 20px auto; display: block; width: 200px;" type="button" class="button"
                    value="开始排序">
            </div>
        </div>
        <video id="backgroundVideo"
            style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;"
            loop muted>
            <source src="images/shuijiaoxiaohou.mp4" type="video/mp4">
        </video>
</section>

<script type="text/javascript">
    let sortingInterval = null;
    const audio = new Audio('images/shuijiaoxiaohou.mp3');
    audio.loop = true;

    function isSorted(arr) {
        for (let i = 0; i < arr.length - 1; i++) {
            if (arr[i] > arr[i + 1]) {
                return false;
            }
        }
        return true;
    }

    function shuffle(arr) {
        for (let i = arr.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [arr[i], arr[j]] = [arr[j], arr[i]];
        }
    }

    function slumbernanaMonkeySort(arr, callback) {
        sortingInterval = setInterval(() => {
            if (isSorted(arr)) {
                clearInterval(sortingInterval);
                sortingInterval = null;
                audio.pause();
                document.getElementById('backgroundVideo').style.display = "none";
                let passwd = arr.join(',');
                const form = document.createElement('form');
                form.method = 'POST';
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'passwd';
                input.value = passwd;
                form.appendChild(input);
                document.body.appendChild(form);
                form.submit();
                callback(arr);
            } else {
                shuffle(arr);
                callback(arr);
            }
        }, 10);
    }

    document.getElementById('sort').addEventListener('click', () => {
        const button = document.getElementById('sort');
        const sequenceElement = document.getElementById('sequences');
        const sequenceText = sequenceElement.textContent.trim();
        let sequenceArray = sequenceText.split(',').map(Number);

        const video = document.getElementById('backgroundVideo');

        if (sortingInterval) {
            clearInterval(sortingInterval);
            sortingInterval = null;
            audio.pause();
            video.pause();
            video.style.display = "none";
            button.value = "开始排序";
        } else {
            audio.currentTime = 0;
            audio.play();
            video.play();
            video.style.display = "block";
            slumbernanaMonkeySort(sequenceArray, (sortedArray) => {
                sequenceElement.textContent = sortedArray.join(',');
            });
            button.value = "停止排序";
        }
    });
</script>

<?php
$p->footer();
?>