<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 12,
    "next" => "255255255",
    "title" => "小学数学必考数一数"
));

$p->header();
?>
<section class="container">
    <div class="card-wrap">
        <div class="card cardIn">
            <div class="question-content">
                <div>
                <canvas id="shapesCanvas" width="250" height="250" style="border:1px solid #000000;"></canvas>
                <script>
                    const canvas = document.getElementById('shapesCanvas');
                    const ctx = canvas.getContext('2d');

                    ctx.fillStyle = 'black';
                    ctx.fillRect(50, 25, 25, 25);
                    ctx.fillRect(37.5, 50, 50, 25);

                    ctx.fillStyle = 'yellow';
                    ctx.beginPath();
                    ctx.moveTo(150, 25);
                    ctx.lineTo(175, 75);
                    ctx.lineTo(125, 75);
                    ctx.closePath();
                    ctx.fill();

                    ctx.fillStyle = 'blue';
                    ctx.beginPath();
                    ctx.arc(75, 150, 20, 0, 2 * Math.PI);
                    ctx.fill();
                    ctx.beginPath();
                    ctx.moveTo(75, 130);
                    ctx.lineTo(75, 110);
                    ctx.lineTo(80, 120);
                    ctx.lineTo(70, 120);
                    ctx.closePath();
                    ctx.fill();
                    ctx.beginPath();
                    ctx.moveTo(75, 170);
                    ctx.lineTo(75, 190);
                    ctx.lineTo(80, 180);
                    ctx.lineTo(70, 180);
                    ctx.closePath();
                    ctx.fill();
                    ctx.beginPath();
                    ctx.moveTo(95, 150);
                    ctx.lineTo(115, 150);
                    ctx.lineTo(105, 155);
                    ctx.lineTo(105, 145);
                    ctx.closePath();
                    ctx.fill();
                    ctx.beginPath();
                    ctx.moveTo(55, 150);
                    ctx.lineTo(35, 150);
                    ctx.lineTo(45, 155);
                    ctx.lineTo(45, 145);
                    ctx.closePath();
                    ctx.fill();

                    ctx.fillStyle = 'green';
                    ctx.beginPath();
                    ctx.moveTo(125, 150);
                    ctx.lineTo(150, 135);
                    ctx.lineTo(160, 160);
                    ctx.lineTo(135, 165);
                    ctx.closePath();
                    ctx.fill();

                    ctx.fillStyle = 'red';
                    ctx.beginPath();
                    ctx.moveTo(200, 150);
                    ctx.bezierCurveTo(195, 135, 175, 135, 175, 150);
                    ctx.bezierCurveTo(175, 165, 195, 175, 200, 190);
                    ctx.bezierCurveTo(205, 175, 225, 165, 225, 150);
                    ctx.bezierCurveTo(225, 135, 205, 135, 200, 150);
                    ctx.closePath();
                    ctx.fill();
                </script>
                </div>
                <div class="question-text">
                    上图给出了若干不同颜色的几何图形，请回答上图中面积最大的几何图形所对应颜色的RGB值（答案是9位正整数）
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>