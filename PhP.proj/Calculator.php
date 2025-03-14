<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Calculator
	</title>
	<style type="text/css">		
         #div1{
         	width: 300px;
             height: 400px;
         	  background-color: skyblue;
         	  border-style: double;
         }           
	</style>
</head>

  <body style="background-color:azure;" >
  	<ins><h4 style="font-family:cursive;">Calculator</h4>
<div id="div1">
  <form  action="" method="POST">	

    <input style="background-color: beige;"  type="text" name="val1" placeholder="Enter number..." required><br>
    <select name="operator">
    	<option value="adunare">+</option>
    	<option value="scadere">-</option>
         <option value="inmultire">*</option>
         <option value="impartire">/</option>
    </select><br>

    <input style="background-color: beige;" type="text" name="val2" placeholder="Enter number..." required>
    <br><br>
    <button  style="font-family:cursive;" style="background-color: beige;" type="submit" value="Enter">Calculeaza</button> <br>
</form>
</div>
 </body>

</html>


<?php
     function insert_value(){

     	$val1= $_POST['val1'];
     	$val2 = $_POST['val2'];

     	switch ($_POST["operator"]) {

     		case 'adunare':
     			$ad=$val1 + $val2;
     			return $ad;
     			break;

                  case 'scadere':
     			$sc=$val1 - $val2;
     			return $sc;
     			break;

               case 'inmultire':
     			$inm=$val1 * $val2;
     			return $inm;
     			break;

                case 'impartire':
     			$imp=$val1 / $val2;
     			return $imp;
     			break;
     		
     		default:
     			echo "Invalid Operation";
     			
     	}
     }

      echo "The result is:".insert_value();

?>





