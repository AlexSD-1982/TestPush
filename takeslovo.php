<?php

setlocale(LC_ALL, "ru_RU.CP1251");
//var_dump(setlocale(LC_ALL, "ru_RU.CP1251"));

require_once ('Library/NCL.NameCase.ru.php');

$nc = new NCLNameCaseRu(); 

$slovo = $_POST['slovo'];

//$slovo = mb_strtolower($slovo);

$x = similar_text($var1, $var2);

if (x )


//echo $slovo;

if ($slovo == 'устав')
            {
                $slovo = $nc->q($slovo, NCL::$RODITLN);
            }
            else
            {
                $slovo = $nc->q($slovo, NCL::$RODITLN, NCL::$WOMAN);
            }

//print_r($slovo); 


            //echo sprintf("%015.2f", floatval($slovo));

            echo mb_convert_case($slovo, MB_CASE_LOWER, 'UTF-8');


?>


