<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 33,
    "next" => "/double-lost-jingdu",
    "title" => "大学一年级高等数学入门",
    "passwd" => "sixty-four"
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
                <div class="question-text">有一个神奇的等式: <math>
                        <mn>1</mn>
                        <mo>&#x00D7;<!-- × --></mo>
                        <msup>
                            <mn>10</mn>
                            <mrow class="MJX-TeXAtom-ORD">
                                <mn>18</mn>
                            </mrow>
                        </msup>
                        <mo>+</mo>
                        <mi>n</mi>
                        <mo>=</mo>
                        <mn>1</mn>
                        <mo>&#x00D7;<!-- × --></mo>
                        <msup>
                            <mn>10</mn>
                            <mrow class="MJX-TeXAtom-ORD">
                                <mn>18</mn>
                            </mrow>
                        </msup>
                    </math></div>
                <div class="question-text">请在区间<math xmlns="http://www.w3.org/1998/Math/MathML">
                        <mo stretchy="false">[</mo>
                        <mn>0</mn>
                        <mo>,</mo>
                        <mn>1</mn>
                        <mo>&#x00D7;<!-- × --></mo>
                        <msup>
                            <mn>10</mn>
                            <mrow class="MJX-TeXAtom-ORD">
                                <mn>18</mn>
                            </mrow>
                        </msup>
                        <mo stretchy="false">]</mo>
                    </math>范围内找到最大的整数的英文（用中划线连接）满足这个等式</div>
                <!-- 提示：ieee啥啥啥 -->
                <div class="question-input"><input id="answer" name="passwd" value="" class="input"></div>
                <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit"
                    class="button" value="提交">
            </div>
        </div>
    </div>
</section>
<?php
$p->footer();
?>