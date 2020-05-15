<?php 
    $symbol="USD";
      switch($symbol){
	  case "USD": $sign = "$"; $multiplier = 1;break;
	  case "INR": $sign = "₹"; $multiplier = 75;break;
  }
  echo $sign?>