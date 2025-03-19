<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT'] . "/template/puzzle.php");

$p = new puzzle(array(
    "stage" => 42,
    "next" => "/f0b1dd3n-n4m3-15-ju57-4-fun",
    "title" => "Make it Restart! - 重生之我在网页玩Undertale",
));
setcookie("3e4ra5", "", time() + 3600, "/"); // 设置 1 小时有效

$p->header();
?>

<style>
    #name-the-fallen {
        background-color: #000;
    }

    #name-the-fallen-result {
        background-color: #000;
        display: none;
    }

    .question-content {
        top: 10% !important;
    }

    .question-text {
        color: #fff !important;
        display: flex;
        justify-content: center;
    }

    .alphabet {
        width: 50%;
        display: flex;
        justify-content: space-between;
    }

    .alphabet span {
        cursor: pointer;
        width: 14%;
    }

    .btn span {
        cursor: pointer;
        width: 14%;
    }

    .btn {
        width: 50%;
        display: flex;
        justify-content: space-between;
    }

    #exit {
        display: none;
    }
</style>
<!-- 答案位于某个不知道的地方 -->
<section class="container" style="user-select: none;">
    <div class="card-wrap">
        <div class="card cardIn" id="exit">
            <div class="question-content">
                好了，你退出了。
            </div>
        </div>
        <div class="card cardIn" id="name-the-fallen">
            <div class="question-content">
                <div class="question-text">为坠落的人类命名。</div>
                <div class="question-text">&nbsp;<span id="name-field"></span>&nbsp;</div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>A</span>
                        <span>B</span>
                        <span>C</span>
                        <span>D</span>
                        <span>E</span>
                        <span>F</span>
                        <span>G</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>H</span>
                        <span>I</span>
                        <span>J</span>
                        <span>K</span>
                        <span>L</span>
                        <span>M</span>
                        <span>N</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>O</span>
                        <span>P</span>
                        <span>Q</span>
                        <span>R</span>
                        <span>S</span>
                        <span>T</span>
                        <span>U</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>V</span>
                        <span>W</span>
                        <span>X</span>
                        <span>Y</span>
                        <span>Z</span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>a</span>
                        <span>b</span>
                        <span>c</span>
                        <span>d</span>
                        <span>e</span>
                        <span>f</span>
                        <span>g</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>h</span>
                        <span>i</span>
                        <span>j</span>
                        <span>k</span>
                        <span>l</span>
                        <span>m</span>
                        <span>n</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>o</span>
                        <span>p</span>
                        <span>q</span>
                        <span>r</span>
                        <span>s</span>
                        <span>t</span>
                        <span>u</span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="alphabet">
                        <span>v</span>
                        <span>w</span>
                        <span>x</span>
                        <span>y</span>
                        <span>z</span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="question-text">
                    <div class="btn">
                        <span id="exit-btn">退出</span>
                        <span></span>
                        <span id="backspace">退格</span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span id="name-done">完成</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card cardIn" id="name-the-fallen-result">
            <div class="question-content">
                <div class="question-text" id="result">是这个名字没错吗？</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div class="question-text">&nbsp;<span id="name-field-result"></span>&nbsp;</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div class="question-text">
                    <div class="btn">
                        <span id="return">返回</span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span id="confirm">确定</span>
                    </div>
                </div>
            </div>
        </div>

</section>

<script>

var _0xbbe0c2=_0x33b6;(function(_0x224438,_0x1b1e37){var _0x4fc0f2={_0x246089:0x1c6,_0x1f15d4:0x192,_0x1e66ac:0x191,_0x51f123:0x1e3,_0x571f6c:0x1c0},_0x2ca2a7=_0x33b6,_0xd92e59=_0x224438();while(!![]){try{var _0x29dc54=-parseInt(_0x2ca2a7(_0x4fc0f2._0x246089))/0x1+-parseInt(_0x2ca2a7(_0x4fc0f2._0x1f15d4))/0x2*(-parseInt(_0x2ca2a7(_0x4fc0f2._0x1e66ac))/0x3)+parseInt(_0x2ca2a7(0x1dc))/0x4+parseInt(_0x2ca2a7(0x1d5))/0x5*(parseInt(_0x2ca2a7(0x1e2))/0x6)+parseInt(_0x2ca2a7(_0x4fc0f2._0x51f123))/0x7*(parseInt(_0x2ca2a7(_0x4fc0f2._0x571f6c))/0x8)+-parseInt(_0x2ca2a7(0x18d))/0x9*(parseInt(_0x2ca2a7(0x1ad))/0xa)+-parseInt(_0x2ca2a7(0x1d8))/0xb;if(_0x29dc54===_0x1b1e37)break;else _0xd92e59['push'](_0xd92e59['shift']());}catch(_0x2935dc){_0xd92e59['push'](_0xd92e59['shift']());}}}(_0x2b06,0xe0136),$(document)[_0xbbe0c2(0x1df)](function(){var _0x315489={_0x19c044:0x1b0,_0x225eef:0x1b6},_0x1bb79e={_0x270279:0x1a2,_0x3f4505:0x1b8,_0xa72b12:0x1ca,_0x3364b1:0x1c3},_0x5d2099={_0x75477f:0x1a2,_0x4405e7:0x1a8,_0x5083b9:0x1ca,_0x31ec97:0x1c2,_0x2dea2d:0x1ce},_0x698e07=_0xbbe0c2,_0x84a88=0x6,_0x2cac4d=0x0;$(_0x698e07(_0x315489._0x19c044)+'\x65\x74\x20\x73\x70\x61\x6e')['\x6f\x6e']('\x63\x6c\x69\x63\x6b',function(){var _0x320ddf=_0x698e07,_0x17b6a8=$(this)['\x74\x65\x78\x74']()[_0x320ddf(0x1cd)]();if(_0x17b6a8!==''&&_0x2cac4d<_0x84a88){var _0x3a8ea9=$('\x23\x6e\x61\x6d\x65\x2d\x66'+_0x320ddf(_0x5d2099._0x75477f))[_0x320ddf(0x1ca)]();$(_0x320ddf(0x1a8)+_0x320ddf(0x1a2))[_0x320ddf(0x1ca)](_0x3a8ea9+_0x17b6a8),_0x2cac4d++;}else{if(_0x17b6a8===''){}else{}}$(_0x320ddf(_0x5d2099._0x4405e7)+'\x69\x65\x6c\x64')[_0x320ddf(_0x5d2099._0x5083b9)]()[_0x320ddf(0x1cd)]()[_0x320ddf(_0x5d2099._0x31ec97)+_0x320ddf(0x1d6)]()==_0x320ddf(0x1a1)&&location[_0x320ddf(_0x5d2099._0x2dea2d)]();}),$('\x23\x62\x61\x63\x6b\x73\x70'+'\x61\x63\x65')['\x6f\x6e'](_0x698e07(_0x315489._0x225eef),function(){var _0x4507e0=_0x698e07,_0x58fdcd=$('\x23\x6e\x61\x6d\x65\x2d\x66'+_0x4507e0(_0x1bb79e._0x270279))[_0x4507e0(0x1ca)]();_0x58fdcd[_0x4507e0(_0x1bb79e._0x3f4505)]>0x0&&($('\x23\x6e\x61\x6d\x65\x2d\x66'+'\x69\x65\x6c\x64')[_0x4507e0(_0x1bb79e._0xa72b12)](_0x58fdcd[_0x4507e0(0x1af)](0x0,-0x1)),_0x2cac4d=Math[_0x4507e0(_0x1bb79e._0x3364b1)](0x0,_0x2cac4d-0x1));});}),$('\x23\x65\x78\x69\x74\x2d\x62'+'\x74\x6e')['\x6f\x6e']('\x63\x6c\x69\x63\x6b',function(){var _0x408660={_0x3d9c81:0x1ae,_0x4578ef:0x1b4,_0x26adcc:0x1b5},_0x27e520=_0xbbe0c2;$(_0x27e520(_0x408660._0x3d9c81)+'\x68\x65\x2d\x66\x61\x6c\x6c'+'\x65\x6e')[_0x27e520(_0x408660._0x4578ef)](),$('\x23\x65\x78\x69\x74')[_0x27e520(_0x408660._0x26adcc)]();}),$(_0xbbe0c2(0x1e9)+_0xbbe0c2(0x1bf))['\x6f\x6e'](_0xbbe0c2(0x1b6),function(){var _0x5d5fcd={_0x49204b:0x1b8,_0x51dd8d:0x1a8,_0x28accb:0x1a2,_0x560b62:0x1a3,_0x48a84e:0x1cc,_0x28479c:0x1ca,_0x966996:0x1c2,_0x55c92e:0x1d6,_0x56fd09:0x1cf,_0x5206d6:0x1b2,_0x3736a6:0x1d9,_0x1d7145:0x1da,_0x4b4071:0x19d,_0x83f6d0:0x1db,_0x2cfe97:0x1cf,_0x3cde22:0x1c8,_0x1eea5e:0x1b4,_0x5ddf88:0x18e,_0x3a3096:0x1b2,_0x1c5529:0x196,_0x264124:0x1e4,_0x2af4e6:0x1b2,_0x24aa17:0x1bd,_0x343a92:0x195,_0x2b18b8:0x19e,_0x1b28e5:0x1b7,_0x444f9f:0x1a1,_0x5aa75a:0x193,_0x3e407d:0x1bc,_0x47a401:0x1cf,_0x6f3182:0x1ca,_0xb7cbc3:0x1de,_0x1a0781:0x1cb,_0x58d728:0x1b1,_0x22baf0:0x1ca,_0x20ed02:0x1c7,_0x56bd07:0x1d2,_0x216b37:0x1b2,_0x5283be:0x1e0,_0x4e88ce:0x1cf,_0x5efb44:0x194,_0x449724:0x19f,_0x5a88be:0x1a0,_0x11901d:0x1d0,_0x52e9c2:0x1ca,_0x55dc26:0x1a6,_0x5077d1:0x1cf,_0x3c7afe:0x1e5,_0x5add84:0x1b4,_0x302894:0x19c,_0x3918b6:0x1cf,_0x500e11:0x1a9,_0x3b5df5:0x1b4,_0x5e021d:0x1e8,_0x27c8e9:0x190},_0x32fcf9=_0xbbe0c2;if($(_0x32fcf9(0x1a8)+'\x69\x65\x6c\x64')[_0x32fcf9(0x1ca)]()[_0x32fcf9(_0x5d5fcd._0x49204b)]==0x0)return;var _0xdd1ca9=$(_0x32fcf9(_0x5d5fcd._0x51dd8d)+_0x32fcf9(_0x5d5fcd._0x28accb))['\x74\x65\x78\x74']();$(_0x32fcf9(0x1ae)+'\x68\x65\x2d\x66\x61\x6c\x6c'+'\x65\x6e')['\x68\x69\x64\x65'](),$('\x23\x6e\x61\x6d\x65\x2d\x74'+_0x32fcf9(_0x5d5fcd._0x560b62)+_0x32fcf9(_0x5d5fcd._0x48a84e)+'\x6c\x74')[_0x32fcf9(0x1b5)](),$(_0x32fcf9(0x1a8)+_0x32fcf9(0x1c5)+'\x73\x75\x6c\x74')[_0x32fcf9(_0x5d5fcd._0x28479c)](_0xdd1ca9),_0xdd1ca9=_0xdd1ca9[_0x32fcf9(_0x5d5fcd._0x966996)+_0x32fcf9(_0x5d5fcd._0x55c92e)]();switch(_0xdd1ca9){case'\x63\x68\x61\x72\x61':$(_0x32fcf9(_0x5d5fcd._0x56fd09))[_0x32fcf9(0x1ca)](_0x32fcf9(0x1a6)),$(_0x32fcf9(_0x5d5fcd._0x5206d6)+'\x6d')['\x73\x68\x6f\x77']();break;case _0x32fcf9(_0x5d5fcd._0x3736a6):$(_0x32fcf9(0x1cf))[_0x32fcf9(_0x5d5fcd._0x28479c)](_0x32fcf9(_0x5d5fcd._0x1d7145)+_0x32fcf9(0x1a7)+_0x32fcf9(0x1c1)+_0x32fcf9(_0x5d5fcd._0x4b4071)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(0x1b5)]();break;case'\x61\x73\x72\x69\x65\x6c':$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(0x1ca)](_0x32fcf9(0x1dd)),$(_0x32fcf9(0x1b2)+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(_0x5d5fcd._0x83f6d0):$(_0x32fcf9(0x1cf))[_0x32fcf9(0x1ca)](_0x32fcf9(0x1ab)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')[_0x32fcf9(0x1b4)]();break;case _0x32fcf9(0x1aa):$(_0x32fcf9(0x1cf))[_0x32fcf9(_0x5d5fcd._0x28479c)]('\u627e\u81ea\u5df1\u7684\u540d\u5b57\u53bb'+'\uff01'),$(_0x32fcf9(0x1b2)+'\x6d')['\x68\x69\x64\x65']();break;case'\x74\x6f\x72\x69\x65\x6c':$(_0x32fcf9(_0x5d5fcd._0x2cfe97))['\x74\x65\x78\x74'](_0x32fcf9(0x1a5)+_0x32fcf9(0x1b3)+_0x32fcf9(_0x5d5fcd._0x3cde22)),$(_0x32fcf9(_0x5d5fcd._0x5206d6)+'\x6d')[_0x32fcf9(_0x5d5fcd._0x1eea5e)]();break;case'\x70\x61\x70\x79\x72\x75':$(_0x32fcf9(_0x5d5fcd._0x56fd09))['\x74\x65\x78\x74'](_0x32fcf9(_0x5d5fcd._0x5ddf88)),$(_0x32fcf9(_0x5d5fcd._0x3a3096)+'\x6d')['\x73\x68\x6f\x77']();break;case _0x32fcf9(_0x5d5fcd._0x1c5529):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(_0x5d5fcd._0x28479c)](_0x32fcf9(_0x5d5fcd._0x264124)),$(_0x32fcf9(_0x5d5fcd._0x2af4e6)+'\x6d')[_0x32fcf9(_0x5d5fcd._0x1eea5e)]();break;case'\x6d\x65\x74\x74\x61':case _0x32fcf9(0x1b9):case _0x32fcf9(_0x5d5fcd._0x24aa17):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(0x1ca)](_0x32fcf9(_0x5d5fcd._0x343a92)+_0x32fcf9(_0x5d5fcd._0x2b18b8)+'\u5417\uff1f'),$(_0x32fcf9(_0x5d5fcd._0x3a3096)+'\x6d')[_0x32fcf9(0x1b5)]();break;case'\x6e\x61\x70\x73\x74\x61':case _0x32fcf9(0x1e1):$(_0x32fcf9(0x1cf))[_0x32fcf9(0x1ca)]('\x2e\x2e\x2e\x2e\x2e\x2e\x2e'+_0x32fcf9(0x19b)+_0x32fcf9(_0x5d5fcd._0x1b28e5)+'\x29'),$(_0x32fcf9(_0x5d5fcd._0x5206d6)+'\x6d')['\x73\x68\x6f\x77']();break;case _0x32fcf9(_0x5d5fcd._0x444f9f):$(_0x32fcf9(0x1cf))[_0x32fcf9(_0x5d5fcd._0x28479c)](_0x32fcf9(0x1d4)+'\x20\x2f\x66\x30\x62\x31\x64'+_0x32fcf9(0x1ec)+_0x32fcf9(0x18f)+_0x32fcf9(_0x5d5fcd._0x5aa75a)+'\x6e\x20\u6539\u8d77\u6765\u5f88\u7b80'+_0x32fcf9(_0x5d5fcd._0x3e407d)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(0x197):$(_0x32fcf9(_0x5d5fcd._0x47a401))[_0x32fcf9(_0x5d5fcd._0x6f3182)]('\u6211\u5df2\u7ecf\u9009\u4e86\u90a3\u4e2a'+_0x32fcf9(0x1e7)),$(_0x32fcf9(_0x5d5fcd._0x2af4e6)+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(0x1c9):$('\x23\x72\x65\x73\x75\x6c\x74')['\x74\x65\x78\x74'](_0x32fcf9(_0x5d5fcd._0xb7cbc3)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(0x1b4)]();break;case _0x32fcf9(_0x5d5fcd._0x1a0781):case _0x32fcf9(_0x5d5fcd._0x58d728):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(_0x5d5fcd._0x22baf0)](_0x32fcf9(0x1c4)+'\u662f\u4e48\x2e\x2e\x2e\uff1f'),$(_0x32fcf9(0x1b2)+'\x6d')['\x68\x69\x64\x65']();break;case'\x63\x61\x74\x74\x79':$(_0x32fcf9(_0x5d5fcd._0x2cfe97))[_0x32fcf9(_0x5d5fcd._0x28479c)](_0x32fcf9(_0x5d5fcd._0x20ed02)+_0x32fcf9(0x1eb)+'\x21\x20\u90a3\u53ef\u662f\u6211\u7684'+_0x32fcf9(_0x5d5fcd._0x56bd07)),$(_0x32fcf9(_0x5d5fcd._0x216b37)+'\x6d')[_0x32fcf9(0x1b4)]();break;case _0x32fcf9(_0x5d5fcd._0x5283be):$(_0x32fcf9(_0x5d5fcd._0x4e88ce))[_0x32fcf9(0x1ca)](_0x32fcf9(0x1d3)+'\u4f30\u8ba1\u3002'),$(_0x32fcf9(0x1b2)+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(_0x5d5fcd._0x5efb44):$(_0x32fcf9(0x1cf))['\x74\x65\x78\x74'](_0x32fcf9(_0x5d5fcd._0x449724)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')[_0x32fcf9(_0x5d5fcd._0x1eea5e)]();break;case _0x32fcf9(_0x5d5fcd._0x5a88be):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(0x1ca)](_0x32fcf9(0x198)+'\u5417\uff1f\x3b\x29'),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(0x1b4)]();break;case'\x77\x6f\x73\x68\x75\x61':$(_0x32fcf9(0x1cf))['\x74\x65\x78\x74']('\u5e72\u51c0\u7684\u540d\u5b57\u3002'),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(_0x5d5fcd._0x11901d):$(_0x32fcf9(0x1cf))[_0x32fcf9(_0x5d5fcd._0x52e9c2)](_0x32fcf9(_0x5d5fcd._0x55dc26)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(0x1b4)]();break;case _0x32fcf9(0x1be):$(_0x32fcf9(0x1cf))[_0x32fcf9(0x1ca)](_0x32fcf9(0x19a)+_0x32fcf9(0x1ea)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')[_0x32fcf9(_0x5d5fcd._0x1eea5e)]();break;case _0x32fcf9(0x1bb):$(_0x32fcf9(_0x5d5fcd._0x5077d1))['\x74\x65\x78\x74'](_0x32fcf9(_0x5d5fcd._0x3c7afe)+_0x32fcf9(0x1ba)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(_0x5d5fcd._0x5add84)]();break;case _0x32fcf9(0x1e6):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(_0x5d5fcd._0x22baf0)](_0x32fcf9(0x1d1)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')['\x68\x69\x64\x65']();break;case _0x32fcf9(_0x5d5fcd._0x302894):$(_0x32fcf9(_0x5d5fcd._0x3918b6))[_0x32fcf9(_0x5d5fcd._0x6f3182)](_0x32fcf9(0x199)+_0x32fcf9(_0x5d5fcd._0x500e11)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(_0x5d5fcd._0x3b5df5)]();break;case _0x32fcf9(_0x5d5fcd._0x5e021d):$(_0x32fcf9(0x1cf))[_0x32fcf9(0x1ca)](_0x32fcf9(0x1a4)),$(_0x32fcf9(0x1b2)+'\x6d')[_0x32fcf9(0x1b4)]();break;case _0x32fcf9(0x1d7):$('\x23\x72\x65\x73\x75\x6c\x74')[_0x32fcf9(0x1ca)](_0x32fcf9(_0x5d5fcd._0x27c8e9)),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')[_0x32fcf9(0x1b4)]();break;default:$(_0x32fcf9(0x1cf))[_0x32fcf9(0x1ca)]('\u662f\u8fd9\u4e2a\u540d\u5b57\u6ca1\u9519'+'\u5417\uff1f'),$('\x23\x63\x6f\x6e\x66\x69\x72'+'\x6d')['\x73\x68\x6f\x77']();break;}}),$(_0xbbe0c2(0x1ac))['\x6f\x6e'](_0xbbe0c2(0x1b6),function(){var _0x4ed8c4={_0x38a0ce:0x1a3},_0x543875=_0xbbe0c2;$('\x23\x6e\x61\x6d\x65\x2d\x74'+_0x543875(_0x4ed8c4._0x38a0ce)+'\x65\x6e')['\x73\x68\x6f\x77'](),$(_0x543875(0x1ae)+_0x543875(0x1a3)+'\x65\x6e\x2d\x72\x65\x73\x75'+'\x6c\x74')['\x68\x69\x64\x65']();}));function _0x33b6(_0x4f6468,_0x37e6c5){var _0x2b0699=_0x2b06();return _0x33b6=function(_0x33b64c,_0x5da11b){_0x33b64c=_0x33b64c-0x18d;var _0x1428ed=_0x2b0699[_0x33b64c];if(_0x33b6['\x4a\x61\x4f\x7a\x6c\x71']===undefined){var _0x3c3d87=function(_0x84a88){var _0x2cac4d='\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6a\x6b\x6c\x6d\x6e\x6f\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7a\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4a\x4b\x4c\x4d\x4e\x4f\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5a\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39\x2b\x2f\x3d';var _0x17b6a8='',_0x3a8ea9='';for(var _0x58fdcd=0x0,_0xdd1ca9,_0x56a8d3,_0x2eb0e7=0x0;_0x56a8d3=_0x84a88['\x63\x68\x61\x72\x41\x74'](_0x2eb0e7++);~_0x56a8d3&&(_0xdd1ca9=_0x58fdcd%0x4?_0xdd1ca9*0x40+_0x56a8d3:_0x56a8d3,_0x58fdcd++%0x4)?_0x17b6a8+=String['\x66\x72\x6f\x6d\x43\x68\x61\x72\x43\x6f\x64\x65'](0xff&_0xdd1ca9>>(-0x2*_0x58fdcd&0x6)):0x0){_0x56a8d3=_0x2cac4d['\x69\x6e\x64\x65\x78\x4f\x66'](_0x56a8d3);}for(var _0x5a154b=0x0,_0x4d4bfc=_0x17b6a8['\x6c\x65\x6e\x67\x74\x68'];_0x5a154b<_0x4d4bfc;_0x5a154b++){_0x3a8ea9+='\x25'+('\x30\x30'+_0x17b6a8['\x63\x68\x61\x72\x43\x6f\x64\x65\x41\x74'](_0x5a154b)['\x74\x6f\x53\x74\x72\x69\x6e\x67'](0x10))['\x73\x6c\x69\x63\x65'](-0x2);}return decodeURIComponent(_0x3a8ea9);};_0x33b6['\x51\x52\x46\x6a\x63\x75']=_0x3c3d87,_0x4f6468=arguments,_0x33b6['\x4a\x61\x4f\x7a\x6c\x71']=!![];}var _0x47d97d=_0x2b0699[0x0],_0x484053=_0x33b64c+_0x47d97d,_0x10b618=_0x4f6468[_0x484053];return!_0x10b618?(_0x1428ed=_0x33b6['\x51\x52\x46\x6a\x63\x75'](_0x1428ed),_0x4f6468[_0x484053]=_0x1428ed):_0x1428ed=_0x10b618,_0x1428ed;},_0x33b6(_0x4f6468,_0x37e6c5);}function _0x2b06(){var _0xb7ebb3=['\x35\x6c\x49\x6e\x36\x6b\x67\x6d\x34\x34\x63\x63','\x69\x33\x6a\x4c\x44\x68\x76\x59\x42\x47','\x6f\x64\x61\x57\x77\x76\x7a\x4f\x76\x76\x62\x31','\x69\x32\x35\x48\x42\x77\x75\x54\x44\x61','\x43\x32\x58\x50\x79\x32\x75','\x6c\x4d\x66\x53\x43\x67\x48\x48\x79\x47','\x42\x77\x76\x59\x79\x33\x4b','\x69\x32\x6e\x56\x42\x4d\x7a\x50\x43\x47','\x35\x6c\x49\x51\x35\x42\x67\x45\x35\x6c\x51\x6f\x36\x69\x45\x51\x35\x42\x45\x58\x35\x35\x51\x65\x35\x7a\x63\x6e','\x41\x67\x4c\x4b\x7a\x71','\x43\x32\x48\x56\x44\x57','\x79\x32\x58\x50\x79\x32\x53','\x35\x6c\x55\x77\x35\x50\x45\x47\x35\x79\x51\x42\x36\x7a\x49\x37\x35\x51\x32\x49\x35\x6c\x32\x47\x34\x34\x63\x63','\x42\x67\x76\x55\x7a\x33\x72\x4f','\x42\x77\x76\x30\x44\x61','\x35\x79\x4d\x50\x35\x6c\x49\x6c\x35\x35\x51\x65\x34\x34\x63\x63','\x79\x4e\x62\x48\x42\x4e\x72\x5a','\x35\x79\x32\x76\x37\x37\x59\x6d\x35\x41\x2b\x35\x35\x7a\x63\x4e\x37\x37\x59\x46','\x42\x78\x72\x30','\x79\x77\x66\x48\x79\x77\x66\x48','\x42\x32\x35\x4c','\x6f\x65\x6e\x6e\x42\x66\x44\x58\x44\x61','\x35\x34\x55\x58\x37\x37\x59\x6d\x35\x50\x45\x47\x36\x6b\x36\x36\x35\x41\x41\x63\x35\x6c\x32\x76\x36\x79\x6f\x39','\x44\x67\x39\x6d\x42\x33\x44\x4c\x43\x47','\x42\x77\x66\x34','\x36\x6c\x2b\x79\x35\x4f\x59\x36\x35\x79\x45\x67\x35\x36\x67\x55\x35\x35\x51\x65\x37\x37\x59\x6d\x35\x6c\x49\x6e','\x41\x77\x76\x53\x7a\x63\x31\x59\x7a\x71','\x6d\x5a\x47\x30\x6d\x64\x66\x64\x44\x33\x4c\x41\x74\x75\x4f','\x71\x4e\x6a\x48\x44\x68\x72\x35\x69\x71','\x35\x41\x32\x78\x37\x37\x59\x6d\x35\x4f\x49\x72\x35\x35\x51\x65\x35\x41\x32\x50\x35\x41\x32\x71\x34\x34\x63\x63','\x79\x78\x6e\x4e\x42\x33\x6a\x4c','\x44\x67\x76\x34\x44\x61','\x42\x78\x76\x59\x7a\x67\x76\x59','\x7a\x77\x34\x54\x43\x4d\x76\x5a\x44\x71','\x44\x68\x6a\x50\x42\x71','\x43\x4d\x76\x53\x42\x32\x66\x4b','\x69\x33\x6a\x4c\x43\x33\x76\x53\x44\x61','\x79\x32\x48\x48\x43\x4d\x65','\x35\x7a\x67\x64\x6c\x49\x34\x55\x36\x6b\x67\x6d\x37\x37\x59\x46','\x35\x7a\x63\x6e\x35\x41\x32\x78\x37\x37\x59\x62','\x36\x79\x6b\x4a\x35\x7a\x77\x4c\x37\x37\x59\x6d\x35\x79\x2b\x56\x35\x6c\x55\x4c\x35\x7a\x63\x4e\x35\x4f\x49\x72','\x79\x77\x35\x5a\x44\x32\x76\x59\x6f\x47','\x6e\x4a\x76\x72\x44\x4b\x48\x62\x42\x31\x47','\x71\x32\x66\x5a\x7a\x71','\x41\x4d\x76\x59\x43\x4e\x4b','\x6e\x64\x75\x59\x6d\x64\x75\x33\x6e\x64\x6e\x67\x41\x4b\x6e\x58\x72\x77\x30','\x7a\x4e\x6a\x50\x43\x32\x53','\x36\x6b\x32\x4d\x35\x7a\x67\x6b\x6f\x49\x64\x4f\x56\x35\x4e\x4b\x55\x6b\x52\x4c\x4b\x69\x30','\x43\x32\x66\x55\x43\x57','\x6e\x64\x75\x31\x6f\x74\x79\x31\x6e\x4d\x6a\x77\x77\x78\x66\x77\x41\x47','\x6c\x49\x34\x55','\x35\x6c\x32\x47\x35\x6c\x49\x6e\x36\x69\x6f\x39\x34\x34\x63\x63','\x43\x4d\x76\x48\x7a\x68\x4b','\x79\x4e\x6a\x48\x44\x68\x72\x35','\x79\x4d\x58\x56\x42\x32\x54\x35','\x6e\x4a\x47\x59\x6e\x74\x6d\x57\x43\x78\x4c\x5a\x43\x4e\x72\x4a','\x6e\x4a\x71\x33\x6f\x64\x6d\x58\x6d\x76\x50\x67\x76\x75\x4c\x30\x75\x57','\x35\x79\x49\x52\x6c\x45\x77\x69\x51\x2b\x49\x2f\x4d\x45\x41\x47\x54\x2b\x6f\x61\x47\x47','\x35\x6c\x32\x47\x36\x6c\x2b\x79\x35\x35\x59\x46\x35\x6c\x59\x41\x35\x4f\x59\x72\x35\x79\x49\x52\x35\x6c\x51\x36','\x79\x77\x58\x57\x41\x68\x4b','\x35\x7a\x63\x6e\x35\x41\x32\x78\x34\x34\x63\x63','\x43\x32\x48\x35\x43\x4d\x76\x55','\x69\x32\x35\x48\x42\x77\x75\x54\x7a\x61','\x6c\x49\x34\x55\x37\x37\x59\x46','\x69\x65\x6a\x59\x79\x78\x72\x30\x45\x71','\x7a\x64\x6e\x55\x6c\x77\x34\x30\x42\x71','\x6d\x74\x69\x30\x6d\x5a\x48\x67\x42\x33\x6e\x4a\x7a\x75\x30','\x35\x4f\x49\x72\x35\x79\x45\x67\x35\x6c\x51\x67\x37\x37\x59\x62\x37\x37\x59\x62\x37\x37\x59\x62','\x6d\x59\x30\x58\x6e\x73\x31\x51\x44\x71','\x35\x50\x32\x57\x35\x35\x67\x45\x34\x34\x63\x63','\x6d\x4a\x44\x5a\x42\x4e\x66\x6a\x76\x32\x38','\x6d\x5a\x79\x59\x6e\x5a\x61\x34\x45\x4d\x6e\x68\x43\x32\x50\x56','\x6e\x74\x43\x54\x6e\x63\x31\x4d\x44\x71','\x44\x67\x76\x54\x42\x77\x4c\x4c','\x35\x7a\x4d\x49\x35\x7a\x4d\x49\x35\x7a\x4d\x49\x37\x37\x59\x62\x37\x37\x59\x62\x37\x37\x59\x62\x35\x6c\x32\x47','\x79\x77\x58\x57\x41\x68\x4c\x5a','\x7a\x4d\x58\x56\x44\x32\x76\x35','\x35\x50\x49\x56\x36\x6c\x2b\x7a\x35\x6c\x49\x51\x35\x7a\x63\x6e\x35\x41\x32\x78\x35\x52\x6b\x48\x36\x7a\x73\x7a','\x35\x7a\x6f\x68\x35\x7a\x6f\x69\x35\x7a\x6f\x69\x37\x37\x59\x62\x35\x6c\x49\x36\x35\x6c\x55\x61\x35\x6c\x4d\x69','\x35\x6c\x49\x6e\x35\x50\x49\x56\x35\x42\x36\x69\x35\x50\x59\x6a\x35\x79\x49\x42\x36\x79\x63\x47\x35\x4f\x63\x4e','\x6c\x49\x34\x55\x6c\x49\x34\x55\x6b\x61','\x7a\x32\x76\x59\x43\x32\x39\x55','\x36\x6b\x41\x62\x35\x37\x55\x4e\x35\x37\x55\x54\x35\x7a\x63\x78\x37\x37\x59\x46','\x35\x7a\x59\x4f\x35\x4f\x36\x4f\x35\x42\x4d\x2f\x35\x4f\x49\x72\x35\x35\x51\x65\x35\x7a\x6f\x62\x35\x34\x4d\x6d','\x35\x6c\x32\x47\x35\x7a\x63\x38\x37\x37\x59\x62','\x71\x77\x66\x59\x42\x32\x34','\x7a\x32\x66\x5a\x44\x67\x76\x59','\x41\x77\x76\x53\x7a\x61','\x41\x67\x75\x54\x7a\x4d\x66\x53\x42\x61','\x6c\x49\x34\x55\x70\x57','\x35\x4f\x49\x72\x36\x6b\x45\x6a\x35\x42\x36\x78\x35\x6c\x32\x47\x36\x6b\x2b\x4c\x35\x4f\x6f\x5a\x35\x6c\x49\x61','\x35\x35\x59\x46\x35\x51\x32\x4a\x35\x35\x51\x65\x35\x7a\x63\x6e\x35\x41\x32\x78\x34\x34\x63\x63','\x35\x41\x32\x78\x35\x6c\x59\x41\x35\x6c\x32\x2f\x35\x6c\x32\x47\x35\x41\x41\x63\x35\x41\x63\x76\x35\x7a\x59\x57','\x69\x32\x35\x48\x42\x77\x75\x54\x7a\x47','\x35\x6c\x49\x6e\x35\x7a\x67\x49\x37\x37\x59\x46','\x44\x77\x35\x4b\x45\x77\x35\x4c'];_0x2b06=function(){return _0xb7ebb3;};return _0x2b06();}
<?php

    // $(document).ready(function () {
    //     var maxCount = 6; // 最大追加次数
    //     var currentCount = 0; // 当前追加次数

    //     // 点击 .alphabet span 追加文本
    //     $('.alphabet span').on('click', function () {
    //         var text = $(this).text().trim();

    //         if (text !== "" && currentCount < maxCount) {
    //             // 追加文本
    //             var currentText = $('#name-field').text();
    //             $('#name-field').text(currentText + text);
    //             currentCount++; // 增加计数
    //         } else if (text === "") {
    //         } else {
    //         }

    //         if ($('#name-field').text().trim().toLowerCase() == "gaster") {
    //             //刷新网页
    //             location.reload();
    //         }
    //     });

    //     // 点击 #backspace 实现退格功能
    //     $('#backspace').on('click', function () {
    //         var currentText = $('#name-field').text();
    //         if (currentText.length > 0) {
    //             $('#name-field').text(currentText.slice(0, -1)); // 移除最后一个字符
    //             currentCount = Math.max(0, currentCount - 1); // 更新追加次数计数
    //         }
    //     });
    // });

    // $('#exit-btn').on('click', function () {
    //     $('#name-the-fallen').hide();
    //     $('#exit').show();
    // });

    // $('#name-done').on('click', function () {
    //     //判断name长度
    //     if ($('#name-field').text().length == 0) {
    //         return;
    //     }
    //     var name = $('#name-field').text();
    //     $('#name-the-fallen').hide();
    //     $('#name-the-fallen-result').show();
    //     $('#name-field-result').text(name);
    //     name = name.toLowerCase();
    //     //判断特殊名字
    //     switch (name) {
    //         case "chara":
    //             $('#result').text("真正的名字。");
    //             $('#confirm').show();
    //             break;
    //         case "frisk":
    //             $('#result').text("警告: 这个名字会使你如堕地狱，无论如何都要继续吗？");
    //             $('#confirm').show();
    //             break;
    //         case "asriel":
    //             $('#result').text("...");
    //             $('#confirm').hide();
    //             break;
    //         case "sans":
    //             $('#result').text("不行。");
    //             $('#confirm').hide();
    //             break;
    //         case "undyne":
    //             $('#result').text("找自己的名字去！");
    //             $('#confirm').hide();
    //             break;
    //         case "toriel":
    //             $('#result').text("我觉得你该想一个属于自己的名字，我的孩子。");
    //             $('#confirm').hide();
    //             break;
    //         case "papyru":
    //             $('#result').text("我准了！！！");
    //             $('#confirm').show();
    //             break;
    //         case "alphys":
    //             $('#result').text("别-别这样。");
    //             $('#confirm').hide();
    //             break;
    //         case "metta":
    //         case "mett":
    //         case "mtt":
    //             $('#result').text("噢噢噢！！！你在推广我的品牌吗？");
    //             $('#confirm').show();
    //             break;
    //         case "napsta":
    //         case "blooky":
    //             $('#result').text(".............(他无力阻止你。)");
    //             $('#confirm').show();
    //             break;
    //         case "gaster":
    //             $('#result').text("answer: /f0b1dd3n-n4m3-15-ju57-4-fun 改起来很简单，对吧？");
    //             $('#confirm').hide();
    //             break;
    //         case "flowey":
    //             $('#result').text("我已经选了那个名字。");
    //             $('#confirm').hide();
    //             break;
    //         case "asgore":
    //             $('#result').text("你不能。");
    //             $('#confirm').hide();
    //             break;
    //         case "murder":
    //         case "mercy":
    //             $('#result').text("还挺准确的，不是么...？");
    //             $('#confirm').hide();
    //             break;
    //         case "catty":
    //             $('#result').text("Bratty! Bratty! 那可是我的名字！");
    //             $('#confirm').hide();
    //             break;
    //         case "bratty":
    //             $('#result').text("那啥，可以吧我估计。");
    //             $('#confirm').hide();
    //             break;
    //         case "temmie":
    //             $('#result').text("你吼！");
    //             $('#confirm').hide();
    //             break;
    //         case "Aaron":
    //             $('#result').text("是这个名字没错吗？;)");
    //             $('#confirm').hide();
    //             break;
    //         case "woshua":
    //             $('#result').text("干净的名字。");
    //             $('#confirm').hide();
    //             break;
    //         case "chara":
    //             $('#result').text("真正的名字。");
    //             $('#confirm').hide();
    //             break;
    //         case "aaaaaa":
    //             $('#result').text("不是很有创造性...？");
    //             $('#confirm').hide();
    //             break;
    //         case "bpants":
    //             $('#result').text("你还真会挑别人剩下的。");
    //             $('#confirm').hide();
    //             break;
    //         case "alphy":
    //             $('#result').text("呃...行？");
    //             $('#confirm').hide();
    //             break;
    //         case "gerson":
    //             $('#result').text("哇哈哈！为什么不呢？");
    //             $('#confirm').hide();
    //             break;
    //         case "shyren":
    //             $('#result').text("...?");
    //             $('#confirm').hide();
    //             break;
    //         case "jerry":
    //             $('#result').text("杰瑞。");
    //             $('#confirm').hide();
    //             break;
    //         default:
    //             $('#result').text("是这个名字没错吗？");
    //             $('#confirm').show();
    //             break;
    //     }
    // });

    // $('#return').on('click', function () {
    //     $('#name-the-fallen').show();
    //     $('#name-the-fallen-result').hide();
    // });

?>


</script>


<?php
$p->footer();
?>