<?php
use base\puzzle as puzzle;
include($_SERVER['DOCUMENT_ROOT']."/template/puzzle.php");

$p = new puzzle(array(
  "stage" => 8,
  "next" => "multilang-kotae",
  "title" => "坤坤打字2008",
  "passwd" => "答案答案Answer答え답변ОтветCâu trả lời𒅆𒅖𒈠"
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
          <div class="question-content" style="top: 10%">
            <div class="question-text">
              请以最快的速度，根据输入框提示输入答案
            </div>
            <div class="question-text" style="font-size: 75%">
              将会在开始输入的时候进行计时，剩余时间：<span id="timer">60</span>秒
            </div>
            <div class="question-input">
              <input placeholder="请输入：答案" class="input">
            </div>
            <div class="question-input">
              <input placeholder="請輸入：答案" class="input">
            </div>
            <div class="question-input">
              <input placeholder="Please enter: Answer" class="input">
            </div>
            <div class="question-input">
              <input placeholder="入力してください：答え" class="input">
            </div>
            <div class="question-input">
              <input placeholder="입력하세요: 답변" class="input">
            </div>
            <div class="question-input">
              <input placeholder="Введите: Ответ" class="input">
            </div>
            <div class="question-input">
              <input placeholder="Vui lòng nhập: Câu trả lời" class="input">
            </div>
            <div class="question-input">
              <input placeholder="𒄑𒊓𒍪: 𒅆𒅖𒈠" class="input">
            </div>
            <input hidden name="passwd" class="input">
            <input style="margin: 20px auto; display: block; width: 200px;" type="submit" name="Submit" class="button" value="提交">
          </div>
        </div>
      </div>
    </section>
<?php
$p->footer();
?>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    let timerStarted = false;
    let countdownInterval;

    const timerElement = document.getElementById("timer");
    const inputs = document.querySelectorAll(".input");
    const passwdInput = document.querySelector('input[name="passwd"]');
    const submitButton = document.querySelector('input[type="submit"]');
    const initialTime = 60;

    submitButton.disabled = true;

    const startTimer = () => {
      if (timerStarted) return;
      timerStarted = true;

      let remainingTime = initialTime;
      timerElement.textContent = remainingTime;

      countdownInterval = setInterval(() => {
        remainingTime--;
        timerElement.textContent = remainingTime;

        if (remainingTime <= 0) {
          clearInterval(countdownInterval);
          alert("时间到！请重新尝试。");
          disableInputs();
        }
      }, 1000);
    };

    const updatePasswdValue = () => {
      let combinedValue = "";
      inputs.forEach(input => {
        if (input !== passwdInput) {
          combinedValue += input.value;
        }
      });
      passwdInput.value = combinedValue;
    };

    const resetInputs = () => {
      inputs.forEach(input => {
        input.value = "";
      });
      passwdInput.value = "";
      validateInputs(); 
    };

    const disableInputs = () => {
      timerStarted = false;
      resetInputs();
      clearInterval(countdownInterval);
      timerElement.textContent = initialTime; 
    };

    const validateInputs = () => {
      let allFilled = true;
      inputs.forEach(input => {
        if (input !== passwdInput && input.value.trim() === "") {
          allFilled = false;
        }
      });
      submitButton.disabled = !allFilled; 
    };

    inputs.forEach(input => {
      input.addEventListener("input", () => {
        startTimer();
        updatePasswdValue(); 
        validateInputs(); 
      });
    });
  });
</script>
