<html>
<body>
<?php $NumCorr = 0;
$Total = 5;?>
Thanks for taking the quiz!<br>
<p>
  Question one: Why did the chicken cross the road?<br>
  You said: <?php
  $chickenAns = $_POST["chicken"];
  echo $chickenAns;
  if($chickenAns == "To get to the otherside")
  {$NumCorr++;}
  ?><br>
  The correct answer is: To get to the otherside.<br></p>
  <p>
    Question two: Which of the following is groovy?<br>
    You said: <?php
    $groovyAns = $_POST["groovy"];
    echo $groovyAns;
    if ($groovyAns == "Lava Lamps")
    {$NumCorr++;}
    ?><br>
    The correct answer is: Lava Lamps.<br></p>

    <p>
      Question three: Which animal is a mammal that lays eggs?<br>
      You said: <?php
      $eggsAns =  $_POST["eggs"];
      echo $eggsAns;
      if ($eggsAns == "Platypus")
      {$NumCorr++;}
      ?><br>
      The correct answer is: Platypus.<br></p>

      <p>Question four: What is a monkey's favorite food?<br>
        You said: <?php
        $monkeyAns = $_POST["monkey"];
        echo $monkeyAns;
        if ($monkeyAns == "Bananas")
        {$NumCorr++;}
        ?><br>
        The correct answer is: Bananas.<br></p>

        <p>
        Question five: Which of the following is a planet?<br>
          You said: <?php
          $planetAns = $_POST["planet"];
          echo $planetAns;
          if ($planetAns == "Mars")
          {$NumCorr++;}
          ?><br>
          The correct answer is: Mars<br></p>
<br>
<?php $percentage = ($NumCorr/5)*100;
?>
<p>
You got <?php echo $NumCorr; ?> questions correct out of 5. <br>
Your percentage correct is <?php echo $percentage; ?>.

</body>
</html>
