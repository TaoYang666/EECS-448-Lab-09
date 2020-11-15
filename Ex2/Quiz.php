<?php

$Q1s = $_POST["Q1"];
$Q2s = $_POST["Q2"];
$Q3s = $_POST["Q3"];
$Q4s= $_POST["Q4"];
$Q5s = $_POST["Q5"];

$count=0;
if($Q1s=="Yoshiyuki Tomino")
{
    $count++;
}
if($Q2s=="Amuro Ray")
{
    $count++;
}
if($Q3s=="Char Aznable")
{
    $count++;
}
if($Q4s=="1988")
{
    $count++;
}
if($Q5s=="Beyond the Time ~Möbius no Sora wo Koete~")
{
    $count++;
}

$score =$count*20;
echo "Question 1: Who is the director of “Mobile Suit Gundam: Char's Counterattack”:<br>";
echo "You answered:" .$Q1s. "<br>";
echo "Correct answer: Yoshiyuki Tomino<br>";

echo "Question 2: Who drives ν-Gundam of “Mobile Suit Gundam: Char's Counterattack”:<br>";
echo "You answered:" .$Q2s. "<br>";
echo "Correct answer: Amuro Ray<br>";

echo "Question 3: Who drives Sazabi of “Mobile Suit Gundam: Char's Counterattack”:<br>";
echo "You answered:" .$Q3s. "<br>";
echo "Correct answer: Char Aznable<br>";

echo "Question 4: When did “Mobile Suit Gundam: Char's Counterattack” release:<br>";
echo "You answered:" .$Q4s. "<br>";
echo "Correct answer: 1988<br>";

echo "Question 5: What is the theme music of “Mobile Suit Gundam: Char's Counterattack”:<br>";
echo "You answered:" .$Q5s. "<br>";
echo "Correct answer: Beyond the Time ~Möbius no Sora wo Koete~<br>";

echo "The total answered correctlty: " .$count."<br>";
echo "The score: " .$score."% <br>";
?>