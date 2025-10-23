


 <?php
echo "Hello, World!";
var_dump("This is a debug message.");
$promenna = "Jsem string";
$floatHodnota = 3.14;
$booleanHodnota = true;
$nullHodnota = null;
$integerHodnota = 42;
$arrayIndex = array(1, 2, 3, 4, 5);   
$arrayAsociat = ["jmeno" => "Jan",
                 "prijmeni" => "Novak",
                 "vek" => 30
                ];   

echo $promenna;
echo $floatHodnota;     
echo $booleanHodnota;
echo $nullHodnota;

function pozdrav($jmeno) {
    return "Ahoj, " . $jmeno . "!";
}
echo pozdrav("Petre");


echo $integerHodnota;
print_r($arrayIndex); 
?>
 <form action="/test.php" method="POST">
   <input type="text" name="name" id="name">
   <button type="submit">Odeslat na test.php</button>
 </form



