<?php
require_once("./GFtable.php");
require_once("./poly.php");

function num2exp($num) {
  global  $GaloisFieldTable;
  $num %= 256;
  return ($GaloisFieldTable[$num])[2];
}

function exp2num($exp) {
  global  $GaloisFieldTable;
  $exp %= 256;
  return ($GaloisFieldTable[$exp])[1];
}

// Interactive command processor
    $com="";
    while($com!="q") {
      echo PHP_EOL . "command : ";
      $strin =strtolower(trim(fgets(STDIN))) . " dummy";
      list($com, $arg1) =explode(" ", $strin);
      echo PHP_EOL;
      switch ($com) {
        case "int2exp":
        case "num2exp":
        case "i2e":
        case "n2e":
            $intin = $arg1;
            echo "int2exp(".$intin . ") = ".num2exp($intin) . PHP_EOL;
            printf("(int)%d:(a^%d)\n", $intin, num2exp($intin));
        break;

       case "exp2num":
       case "exp2int":
       case "e2i":
       case "e2n":
           $extin = $arg1;
           echo "exp2num(".$extin . ") = ".exp2num($extin) . PHP_EOL;
           printf("(int)%d:(a^%d)\n", exp2num($extin),$extin);
        break;

      }
    }
?>
