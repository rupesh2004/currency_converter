<?php
	if(ISSET($_GET['btn_submit'])){
		$digit = $_GET['txt_digit'];
		$currency = $_GET['currency'];
		
			switch($currency){
				case "Dollar":
					$output = $digit * 76.52;
					echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
				break;
				
				case "Euro":
					$output = $digit * 63.62;
					echo"<center><label class='text-success' style='font-size:25px;'>&#8364;".$output."</label></center>";
				break;
				
				case "Pound":
					$output = $digit * 72.24;
					echo"<center><label class='text-success' style='font-size:25px;'>&#163;".$output."</label></center>";
				break;
				
				case "Chinese Yuan":
					$output = $digit * 8.12;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
				break;
				
				case "Japanese Yen":
					$output = $digit * 0.47;
					echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
				break;
			}
		}
	
?>