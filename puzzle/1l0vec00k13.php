<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 14,
  "next" => "sacabambaspis",
  "title" => "Who is me?",
));

setcookie("13-answer", "", time() - 3600);

$p->header();
?>
<section class="container">
  <div class="card-wrap">
    <div class="card cardIn">
      <div class="question-content">
        <div class="question-text">这是什么？怎么看不全？</div>
        <canvas id="myCanvas" width="800" height="800"></canvas>
        <script>
          window.onload = function () {
            const canvas = document.getElementById("myCanvas");
            const ctx = canvas.getContext("2d");
            ctx.save();
            ctx.beginPath();
            ctx.fillStyle = "#999999";
            ctx.moveTo(682.3, 368.15);
            ctx.lineTo(682.3 - 564.58, 368.15 - 3.55);
            ctx.bezierCurveTo(119.62, 210.33, 245.27, 85.85, 400, 85.85);
            ctx.bezierCurveTo(555.91, 85.85, 682.3, 212.24, 682.3, 368.15);
            ctx.closePath();
            ctx.fill();
            ctx.restore();
            ctx.save();
            ctx.beginPath();
            ctx.fillStyle = "#FFFFFF";
            ctx.moveTo(117.72, 364.6);
            ctx.lineTo(682.3, 368.15);
            ctx.bezierCurveTo(
              682.3, 524.06,
              555.91, 650.45,
              400, 650.45
            );
            ctx.bezierCurveTo(
              400 - (555.91 - 400), 
              650.45 - (650.45 - 650.45), 
              400 - 282.3, 650.45 - 126.39, 
              400 - 282.3, 650.45 - 282.3
            );

            ctx.bezierCurveTo(
              117.7, 366.97,
              117.71, 365.78,
              117.72, 364.6
            );
            ctx.closePath();
            ctx.fill();
            ctx.restore();
            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = 10;
            ctx.strokeStyle = "#000000";

            ctx.moveTo(682.3, 368.15);
            ctx.bezierCurveTo(682.3, 524.06, 555.91, 650.45, 400, 650.45);

            ctx.bezierCurveTo(
              400 - (555.91 - 400), 650.45,
              117.7, 524.06,
              117.7, 368.15
            );

            ctx.bezierCurveTo(
              117.7, 366.97,
              117.71, 365.78,
              117.72, 364.6
            );

            ctx.bezierCurveTo(119.62, 210.33, 245.27, 85.85, 400, 85.85);

            ctx.bezierCurveTo(555.91, 85.85, 682.3, 212.24, 682.3, 368.15);

            ctx.closePath();
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(117.72, 364.6);
            ctx.lineTo(682.3, 368.15);
            ctx.stroke();
            ctx.restore();

            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = 10;
            ctx.fillStyle = "#FFFFFF";
            ctx.strokeStyle = "#000000";
            ctx.arc(324.9, 329.59, 31.19, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(324.9, 329.59, 9.9, 0, 2 * Math.PI);
            ctx.stroke();
            ctx.restore();

            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = 10;
            ctx.fillStyle = "#FFFFFF";
            ctx.strokeStyle = "#000000";
            ctx.arc(474.03, 329.59, 31.19, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(474.03, 329.59, 9.9, 0, 2 * Math.PI);
            ctx.stroke();
            ctx.restore();

            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = 10;
            ctx.strokeStyle = "#000000";
            ctx.moveTo(376.04, 357.76);
            ctx.lineTo(386.56, 357.76);
            ctx.stroke();

            ctx.beginPath();
            ctx.moveTo(413.54, 357.76);
            ctx.lineTo(424.07, 357.76);
            ctx.stroke();
            ctx.restore();

            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = 10;
            ctx.strokeStyle = "#000000";
            ctx.moveTo(433.6, 366.37);
            ctx.lineTo(399.46, 400.5);
            ctx.lineTo(365.33, 366.37);
            ctx.stroke();
            ctx.restore();
          };
        </script>
      </div>
    </div>
  </div>
</section>
<?php
$p->footer();
?>