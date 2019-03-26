<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>PHP Quiz</h1>
<form action='process.php?id=1' method='post' id='quizForm' id='1'></form>
    <?php

    $questions = array(
        '
            <h3>Who is the person that knocked out a man in 4 sceonds in 2011?</h3>
        <input type="radio" name="q1" value="A">Khabib Nurmagomedov0<br>
        <input type="radio" name="q1" value="B">Jon Jones<br>
        <input type="radio" name="q1" value="C">Conor Mcgregor<br>
        <input type="radio" name="q1" value="D">Darren Till<br>',
        '
            <h3>Who is the South African respresenting our country in the UFC?</h3><br>
        <input type="radio" name="q2" value="A">Stuart Austin<br>
        <input type="radio" name="q2" value="B">Tony Mustard<br>
        <input type="radio" name="q2" value="C">Don Madge<br>
        <input type="radio" name="q2" value="D">Cyril Asker<br>',
        '
        <h3>What did Russia do during the elections of the USA?</h3><br>
        <input type="radio" name="q3" value="A">Vote Hillary<br>
        <input type="radio" name="q3" value="B">Nothing<br>
        <input type="radio" name="q3" value="C">Tamper with elections<br>
        <input type="radio" name="q3" value="D">Nuke New York<br>',
        '
        <h3>What was the nickname of President Duvalier of Haiti, who died in 1971?</h3><br>
        <input type="radio" name="q4" value="A">Papa Dude<br>
        <input type="radio" name="q4" value="B">Papa Dad<br>
        <input type="radio" name="q4" value="C">Papa Doc<br>
        <input type="radio" name="q4" value="D">Papa Cat<br>',
        '
        <h3>Name the second largest city in Britain during the Black Death?</h3><br>
        <input type="radio" name="q5" value="A">London<br>
        <input type="radio" name="q5" value="B">Blackpool<br>
        <input type="radio" name="q5" value="C">Bristol<br>
        <input type="radio" name="q5" value="D">Manchester<br>',
        '
        <h3>What is the strongest currency?</h3><br>
        <input type="radio" name="q6" value="A">Dollar<br>
        <input type="radio" name="q6" value="B">Euro<br>
        <input type="radio" name="q6" value="C">Kuwaiti Dinar<br>
        <input type="radio" name="q6" value="D">Rand<br>',
        '
        <h3>Who created Vue.js?</h3><br>
        <input type="radio" name="q7" value="A">Evan Michaels<br>
        <input type="radio" name="q7" value="B">Evan Li<br>
        <input type="radio" name="q7" value="C">Evan You<br>
        <input type="radio" name="q7" value="D">Elon Musk<br>',
        '
        <h3>What nationality was Karl Marx?</h3><br>
        <input type="radio" name="q8" value="A">French<br>
        <input type="radio" name="q8" value="B">English<br>
        <input type="radio" name="q8" value="C">German<br>
        <input type="radio" name="q8" value="D">Turkish<br>',
        '
        <h3>In which year did the Titanic sink?</h3><br>
        <input type="radio" name="q9" value="A">1911<br>
        <input type="radio" name="q9" value="B">1913<br>
        <input type="radio" name="q9" value="C">1912<br>
        <input type="radio" name="q9" value="D">1914<br>',
        '
        <h3>In which year was Abraham Lincoln assassinated?</h3><br>
        <input type="radio" name="q10" value="A">1866<br>
        <input type="radio" name="q10" value="B">1867<br>
        <input type="radio" name="q10" value="C">1865<br>
        <input type="radio" name="q10" value="D">1866<br>',
        '
        <h3>In which year was the Wall Street Crash?</h3><br>
        <input type="radio" name="q11" value="A">1932<br>
        <input type="radio" name="q11" value="B">1945<br>
        <input type="radio" name="q11" value="C">1939<br>
        <input type="radio" name="q11" value="D">1940<br>',
        '
        <h3>In which decade did compulsory driving testing begin?</h3><br>
        <input type="radio" name="q12" value="A">1920s<br>
        <input type="radio" name="q12" value="B">1940s<br>
        <input type="radio" name="q12" value="C">1930s<br>
        <input type="radio" name="q12" value="D">1950s<br>',
        '
        <h3>Who was the last British monarch of the House of Hanover?</h3><br>
        <input type="radio" name="q13" value="A">King James II<br>
        <input type="radio" name="q13" value="B">Queen Elizebeth<br>
        <input type="radio" name="q13" value="C">Queen Victoria<br>
        <input type="radio" name="q13" value="D">King Richard III<br>',
        '
        <h3>Who was king before Queen Victoria?</h3><br>
        <input type="radio" name="q14" value="A">William III<br>
        <input type="radio" name="q14" value="B">William I<br>
        <input type="radio" name="q14" value="C">William IV<br>
        <input type="radio" name="q14" value="D">William V<br>',
        '
        <h3>Which killer was also known as ‘The Whitechapel Murderer’? </h3><br>
        <input type="radio" name="q15" value="A">Stefan<br>
        <input type="radio" name="q15" value="B">Hilter<br>
        <input type="radio" name="q15" value="C">Jack The Ripper<br>
        <input type="radio" name="q15" value="D">Jack The Killer<br>',
        '
        <h3>What country led all Arab nations in the number of troops participating in Operation Desert Storm?</h3><br>
        <input type="radio" name="q16" value="A">Kuwait<br>
        <input type="radio" name="q16" value="B">Oman<br>
        <input type="radio" name="q16" value="C">Saudi Arabia<br>
        <input type="radio" name="q16" value="D">UAE<br>',
        '
        <h3> Nearly how many years did it take Sir Francis Drake to complete the first circumnavigation of the globe in 1580?</h3><br>
        <input type="radio" name="q17" value="A">12<br>
        <input type="radio" name="q17" value="B">4<br>
        <input type="radio" name="q17" value="C">3<br>
        <input type="radio" name="q17" value="D">14<br>',
        '
        <h3>In 1816 which US state was admitted to the Union as the 20th state?</h3><br>
        <input type="radio" name="q18" value="A">Texas<br>
        <input type="radio" name="q18" value="B">Hawaii<br>
        <input type="radio" name="q18" value="C">Mississippi<br>
        <input type="radio" name="q18" value="D">Alabama<br>',
        '
        <h3>In which year was the death of Queen Elizabeth I?</h3><br>
        <input type="radio" name="q19" value="A">1601<br>
        <input type="radio" name="q19" value="B">1602<br>
        <input type="radio" name="q19" value="C">1603<br>
        <input type="radio" name="q19" value="D">1604<br>',
        '
        <h3> In which European city did composer Richard Wagner die in 1883?</h3><br>
        <input type="radio" name="q20" value="A">Paris<br>
        <input type="radio" name="q20" value="B">London<br>
        <input type="radio" name="q20" value="C">Venice<br>
        <input type="radio" name="q20" value="D">Rome<br>',);
  
    ?>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> methods="post">
    <?php
    echo $questions[0];
        $countLength = count($questions);
        for($u = 0; $u < $countLength; $u++){
            echo $questions[$u];
            echo "<br>";
    };

    $correctanswer = 0;

    if(!empty($_POST)){
        $questions1 = $_POST["q1"];
        $questions2 = $_POST["q2"];
        $questions3 = $_POST["q3"];
        $questions4 = $_POST["q4"];
        $questions5 = $_POST["q5"];
        $questions6 = $_POST["q6"];
        $questions7 = $_POST["q7"];
        $questions8 = $_POST["q8"];
        $questions9 = $_POST["q9"];
        $questions10 = $_POST["q10"];
        $questions11 = $_POST["q11"];
        $questions12 = $_POST["q12"];
        $questions13 = $_POST["q13"];
        $questions14 = $_POST["q14"];
        $questions15 = $_POST["q15"];
        $questions16 = $_POST["q16"];
        $questions17 = $_POST["q17"];
        $questions18 = $_POST["q18"];
        $questions19 = $_POST["q19"];
        $questions20 = $_POST["q20"];


        if($questions1 == "C"){$correctanswer++;};

        if($questions2 == "C"){$correctanswer++;};

        if($questions3 == "C"){$correctanswer++;};  

        if($questions4 == "C"){$correctanswer++;}; 

        if($questions5 == "C"){$correctanswer++;};

        if($questions6 == "C"){$correctanswer++;};

        if($questions7 == "C"){$correctanswer++;};

        if($questions8 == "C"){$correctanswer++;}; 

        if($questions9 == "C"){$correctanswer++;};

        if($questions10 == "C"){$correctanswer++;};

        if($questions11 == "C"){$correctanswer++;};

        if($questions12 == "C"){$correctanswer++;};

        if($questions13 == "C"){$correctanswer++;};

        if($questions14 == "C"){$correctanswer++;};

        if($questions15 == "C"){$correctanswer++;};

        if($questions16 == "C"){$correctanswer++;};

        if($questions17 == "C"){$correctanswer++;};

        if($questions18 == "C"){$correctanswer++;};

        if($questions19 == "C"){$correctanswer++;};

        if($questions20 == "C"){$correctanswer++;};       
    ?>
    
    </form>
    <?php
    
        if($correctanswer != 0){
            echo "<br>";
            echo "<p>Well Done, your score is ".$correctanswer." / 20</p>";

            if(0 < $correctanswer && $correctanswer < 10){
                echo "<br>";
                echo "<p>Yo WTF less than 10, Do it again.</p>";
            }else{
                echo "<br>";
                "<p>AWE BRO more than 15.</p>";
            };
        };
    }
    ?>
    <p><input type="submit" id="submitID" name="submitBtn" value="Submit"></p>
</body>
</html>