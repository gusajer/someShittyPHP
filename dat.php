
<?php
echo "<h3> opg 1. </h3>";
print_r("hello world <br><br> ");
echo "<h3> opg 1.1 </h3>";
date_default_timezone_set("CET");
echo date('l jS \of F Y h:i:s A');
print_r("<br><br>");
echo "<h3> opg 1.3 </h3>";

echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
print_r("<br><br>");

echo "<h3> opg 1.4 </h3>";

$Kej = "hej med dig jeg hedder kej";
$rest = substr("hej med dig jeg hedder kej", 0);
$rest1 = substr("hej med dig jeg hedder kej", 0, 10);
$rest2 = substr("hej med dig jeg hedder kej", 15);
$rest3 = explode(" ", $Kej);
print_r($rest);
print_r("<br>");
print_r($rest1);
print_r("<br>");
print_r($rest2);
print_r("<br>");
print_r($rest3[3]);
print_r($rest3[4]);
print_r($rest3[5]);

echo "<h3> opg 1.5 </h3>";

?>
<!DOCTYPE html>

<html>
    <body>
    <form action="" method="POST">
        <label for="fname">Skriv noget:</label><br>
        <input type="text" id="fname" name="fname" value=""><br>
        <input type="submit" value="Submit">
    </form>
    Hi <?php echo htmlspecialchars($_POST['fname']); ?>.
    </body>
</html>


<?php 

echo "<h3> opg 1.6 </h3>";

echo rand();
print_r("<br>");
echo rand(100, 9999);

echo "<h3> opg 1.7 </h3>";
for ($x = 1; $x <= 100; $x++) {
    if ($x % 3 == 0 && $x % 5 ==0){
        echo " fizzbuzz,";
    }
    elseif ($x % 3 == 0){
        echo " Fizz,";
    }
    elseif($x % 5 == 0){
        echo " Buzz,";
    }
    else{
        echo $x.",";
    }


  } 
  print_r("<br>");
  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <style type="text/css">
      body {
          font-size:12px;
      }
       
      td {
          height: 24px;
          text-align: center;
          width: 24px;
      }
       
      td.gray {
          background-color: #ccc;
      }
       
      td.white {
          background-color: #fff;
      }
       
      td a {
          display: block;
          text-decoration: none;
      }
       
      td a:hover {
          background-color: #faa;
      }
      </style>
  </head>

  <body>
  <table border="1">
<?php

  echo "<h3> opg 1.8 </h3>";

  for ($i = 1; $i < 11; $i++){
      echo '<tr>';
        for ($tr = 1; $tr < 11; $tr++)
        {
            ($i == $tr) ? $bg = "gray" : $bg = "white";
            echo "<td class='$bg'><a href = '#' title = '$i * $tr =". $i * $tr . " ' >". $i * $tr . " </a></td>";
        }
      echo '</tr>';

  }
?>
 </table>
 
 </body>

</html>
<?php

echo "<h3> opg 1.9 </h3>";
$modstande = [1.0, 1.1, 1.2, 1.3, 1.5, 1.6, 1.8, 2.0, 2.2, 2.4, 2.6, 2.9, 3.2, 3.5, 3.8, 4.2, 4.6, 5.1, 5.6, 6.2, 6.8, 7.5, 8.3, 9.1];
$calModstande= [];
$sumAfAlleModstande = [];
print_r($modstande);
print_r('<br><br>');

/*foreach ($modstande as &$value) {
    $value = $value ** 5;
    echo $value;
    print("<br>");
}*/
for ($i = 0; $i < count($modstande); $i++) {

    for ($dekander = 0; $dekander < 6; $dekander++) {
        $calResistences = ($modstande[$i]) * pow(10.0, $dekander);
        array_push($calModstande, $calResistences);
        echo $calResistences;
        echo ", ";
    }
}
echo "<h3> opg 1.9.1 </h3>";
for ($i=0; $i < count($calModstande); $i++) { 

    for ($j=0; $j < count($calModstande); $j++) { 
       if($j != $i){
           $sum = $calModstande[$i] + $calModstande[$j];
           array_push($sumAfAlleModstande,$sum );
       } 
    }
}
echo count($sumAfAlleModstande);
?>
