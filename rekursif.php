<?php 
	$brs= 8;
    printPyramidaa(0);
	 function printPyramidaa($f){
	  global $brs;
	  printSpace(0,$f);
	  printStar($brs,$f);
	  echo "<br>";
	if (++$f <$brs);
	  printPyramidaa($f);
    }
	 function printSpace($i,$f){
		global $brs;
	if ($i > $brs - $f - 1){
	echo "&nbsp;";
	printSpace($i + 1,$f);
	}
	}
	 function printStar($r,$f){
		global $brs;
		if ($r > $brs - $f -1){
		echo " *&nbsp; " ;
		printStar($r - 1,$f);
		}
	}



 ?>
