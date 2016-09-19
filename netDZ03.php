<?php
//ini_set('default_charset', 'UTF-8');
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,400i,700&subset=cyrillic" rel="stylesheet">
        <title>Домашнее задание №3 | Рамис Касимов</title>
		<style>
			body {
				font-family: 'Roboto Condensed', sans-serif;
			}
			h1, h2 {
				line-height: 0.5;
			}
		</style>
    </head>
    <body>
<?php

// Жестокое обращение с животными п. 1---------------------------------
$fauna = array (
"Africa"        => array ("Testudinidae",     "Potamochoerus porcus",     "Chamaeleonidae",     "Crocodylus niloticus"),
"Australia"     => array ("Macropus eugenii", "Ornithorhynchus anatinus", "Tiliqua",            "Thylacinus cynocephalus"),
"Eurasia"       => array ("Mustela nivalis",  "Neomys schelkovnikovi",    "Lacerta viridis",    "Coronella"),
"North America" => array ("Chaetura",         "Enhydra lutris",           "Eumetopias jubatus", "Oreamnos americanus")
);

// Жестокое обращение с животными п. 2---------------------------------
$animalsOfTwoWords = array();
foreach($fauna as $animals) {
    foreach($animals as $animal) {
        $space = strpos($animal, " ");
        if($space!==FALSE) {
            $animalsOfTwoWords[] = $animal;
        }
    }
}

// Жестокое обращение с животными п. 3---------------------------------
$aotwCount = count($animalsOfTwoWords);
$aotwMixed = array();
for($i=0; $i<$aotwCount; $i++) {
    $space = strpos($animalsOfTwoWords[$i], " ");
    $lenOfWord2 = strlen($animalsOfTwoWords[$i])-$space;
    $word1 = substr($animalsOfTwoWords[$i], 0, $space);
    $word2 = substr($animalsOfTwoWords[$i], $space, $lenOfWord2);
	$q = rand(0, $aotwCount-1);
	for($k=0; $k<$aotwCount; $k++) {
		if(!isset($aotwMixed[$q])) {
			$aotwMixed[$q] = $word1."rplc";
			break;
		}
		else {
			$posOfRplc = strpos($aotwMixed[$q], "rplc");
			if($posOfRplc===0) {
				$aotwMixed[$q] = str_replace("rplc", $word1, $aotwMixed[$q]);
				break;
			}
			else {
				$q++;
				if($q===$aotwCount) $q = 0;
			}
		}	
	}
	$q = rand(0, $aotwCount-1);
	for($k=0; $k<$aotwCount; $k++) {
		if(!isset($aotwMixed[$q])) {
			$aotwMixed[$q] = "rplc".$word2;
			break;
		}
		else {
			$posOfRplc = strpos($aotwMixed[$q], "rplc");
			if($posOfRplc>0) {
				$aotwMixed[$q] = str_replace("rplc", $word2, $aotwMixed[$q]);
				break;
			}
			else {
				$q++;
				if($q===$aotwCount) $q = 0;
			}
		}
	}
}

// Дополнительно п. 1--------------------------------------------------
$aotwWithCont = array();
foreach($aotwMixed as $animalMixed) {
    $space = strpos($animalMixed, " ");
    $word = substr($animalMixed, 0, $space);
    $b = FALSE;
    foreach($fauna as $continent=>$animals) {
        foreach($animals as $animal) {
            if($word===substr($animal, 0, $space)) {
                $aotwWithCont[$continent][] = $animalMixed;
                $b = TRUE;
                break;
            }
        }
        if($b===TRUE) break;
    }
}

// Дополнительно п. 2--------------------------------------------------
echo "<h1>ДЗ №3. Выполнил Рамис Касимов</h1>";

echo "<br/><h2>----------------------------------------------------------------------------------------------------------</h2>";

echo "<h1><br/>Жестокое обращение с животными п. 1</h1>";
foreach($fauna as $continent => $animals) {
    echo "<h2><br/>$continent<br/></h2>";
    $k = 1;
    $t = count($animals);
    foreach($animals as $animal) {
        echo $animal;
        if($k<$t) echo ", "; else echo ".";
        $k++;
    }
}

echo "<br/><h2>----------------------------------------------------------------------------------------------------------</h2>";

echo "<h1><br/>Жестокое обращение с животными п. 2<br/></h1>";
$k = 1;
$t = count($animalsOfTwoWords);
foreach($animalsOfTwoWords as $animal) {
    echo $animal;
    if($k<$t) echo ", "; else echo ".";
    $k++;
}

echo "<br/><h2>----------------------------------------------------------------------------------------------------------</h2>";

echo "<h1><br/>Жестокое обращение с животными п. 3<br/></h1>";
$k = 1;
$t = count($aotwMixed);
foreach($aotwMixed as $animal) {
    echo $animal;
    if($k<$t) echo ", "; else echo ".";
    $k++;
}

echo "<br/><h2>----------------------------------------------------------------------------------------------------------</h2>";

echo "<h1><br/>Дополнительно п. 1<br/></h1>";
foreach($aotwWithCont as $continent => $animals) {
    echo "<h2><br/>$continent<br/></h2>";
    $k = 1;
    $t = count($animals);
    foreach($animals as $animal) {
        echo $animal;
        if($k<$t) echo ", "; else echo ".";
        $k++;
    }
}

echo "<br/><h2>----------------------------------------------------------------------------------------------------------</h2>";

echo "<h1><br/>Дополнительно п. 2<br/></h1>";
echo "<h2>Выполнен<br/><br/><br/></h2>";

?>
    </body>
</html>