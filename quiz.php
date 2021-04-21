<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


$ans1 = $_POST["ans1"];
$ans2 = $_POST["ans2"];
$ans3 = $_POST["ans3"];
$ans4 = $_POST["ans4"];
$ans5 = $_POST["ans5"];
$score = 0;

function check1()
  {
    global $score;
    global $ans1;
    echo "Question 1: What is the derivative of sin(x) <br>";
    echo " You answered: " . $ans1 . "<br>";

    if($ans1 == "cos(x)")
      {
        $score+=20;
        echo "    Correct! <br>";
      }
    elseif($ans1 !== "cos(x)") {
      echo "    Correct answer: cos(x) <br>";
    }
  }check1();
  echo "<br>";

function check2()
  {
    global $score;
    global $ans2;
    echo "Question 2: What is x^2 + 1 differentiated with respect to v? <br>";
    echo " You answered: " . $ans2 . "<br>";

    if($ans2 == "0")
      {
        $score+=20;
        echo "    Correct! <br>";
      }
    elseif($ans2 !== "cos(x)") {
      echo "    Correct answer: 0 <br>";
    }
  }check2();
  echo "<br>";


  function check3()
    {
      global $score;
      global $ans3;
      echo " Question 3:  Is 0/0 an indeterminate form?<br>";
      echo "  You answered: " . $ans3 . "<br>";

      if($ans3 == "yes")
        {
          $score+=20;
          echo "    Correct! <br>";
        }
      elseif($ans3 !== "cos(x)") {
        echo "    Correct answer: yes <br>";
      }
    }check3();
    echo "<br>";


    function check4()
      {
        global $score;
        global $ans4;
        echo "Question 4: What do we get if we differentiate velocity function? <br>";
        echo " You answered: " . $ans4 . "<br>";

        if($ans4 == "acceleration")
          {
            $score+=20;
            echo "    Correct! <br>";
          }
        elseif($ans4 !== "cos(x)") {
            echo "    Correct answer: acceleration <br>";
        }
      }check4();
      echo "<br>";


      function check5()
        {
          global $score;
          global $ans5;
          echo "Question 5: What is the value of 'Pi'? <br>";
          echo " You answered: " . $ans5 . "<br>";

          if($ans5 == "3.14")
            {
              $score+=20;
              echo "    Correct! <br>";
            }
            elseif($ans5 !== "cos(x)") {
              echo "    Correct answer: 3.14 <br>";
            }
        }check5();
        echo "<br>";

echo "You answered " . $score/20 . " questions correctly. Your total score is " . $score . "%. :)";
?>
