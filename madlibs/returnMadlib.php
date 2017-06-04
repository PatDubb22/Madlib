<?php


$nounOne = $_GET['nounOne']; 
$nounTwo = $_GET['nounTwo']; 
$nounThree = $_GET['nounThree']; 
$animal = $_GET['animal']; 
$nounFour = $_GET['nounFour']; 
$nounFive = $_GET['nounFive']; 
$verbOne = $_GET['verbOne']; 
$nounSix = $_GET['nounSix']; 
$nounSeven = $_GET['nounSeven']; 
$nounEight = $_GET['nounEight'];
$verbTwo = $_GET['verbTwo'];




/* $myfile = fopen("madlib_entries.txt", "w") or die("Unable to open file!");*/
   /* fwrite($myfile, $txt);*/
  /* fwrite($myfile, $txt);*/
   /*  echo  readfile("madlib_entries.txt");*/
   /*	fclose($myfile);*/ 

   
/* $myfile = fopen("madlib_entries.txt", "w") or die("Unable to open file!");
echo fread($myfile("madlib_entries.txt"));
fclose($myfile);*/
    
//$file = fopen("madlib_entries.txt","w")or die("Unable to open file!");
//fwrite($file)
//echo readfile("madlib_entries.txt");

//echo fread($file,("madlib_entries.txt"));
$file = "./madlib_entries.txt";	
//$write =  "final.php";


file_put_contents($file, $write, FILE_APPEND);
//fclose($file);

//echo file_get_contents("", w);

echo ' "Outer Space Poetry" <br><br> 

   Twinkle, twinkle little <span style="color:blue">'.$nounOne.', </span><br>
	How I wonder what you are.<br>
	Up above the <span style="color:blue"> '.$nounTwo.' </span> so high.<br>
	Just like a <span style="color:blue"> '.$nounThree.' </span>in the sky.<br>
	<br>
	Hey diddle diddle, the <span style="color:blue"> '.$animal.'</span><br>
	and the <span style="color:blue"> '.$nounFour.'. </span><br>
	The cow jumped over the <span style="color:blue"> '.$nounFive.'.</span><br>
	The little dog <span style="color:blue">'.$verbOne.' </span>to see such a sport,<br>
	and the <span style="color:blue">'.$nounSix.' </span>ran away with the spoon.<br>
	<br>
	Star light, star bright, first <span style="color:blue">'.$nounSeven.' </span>I see tonight.<br>
	I wish I may, I wish I might,<br>
	Have the <span style="color:blue">'.$nounEight.'</span> I <span style="color:blue">'.$verbTwo.' </span>tonight.'
	 

	
?>      

