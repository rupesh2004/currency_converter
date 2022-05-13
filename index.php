<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css_1.css"/>
	</head>
<body style="background-color:#79DAE8;">
<section id="hero">
    <div class="hero container">
      <div>
		<br>	
        <center><h1 id="h1">Currency Converter<span></span></h1></center>
      </div>
    </div>
  </section>
<div class="total">
<img src="img.png" alt="" class="img">
	<div class="col-md-4"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary"><center>Currency Converter</center></h3>
		<hr style="border-top:2px dotted #000;"/>
		<form method="GET" action="">
			<div class="form-inline">
				<label>Enter Amount:</label>
				<input class="form-control" type="number" name="txt_digit" autocomplete="off"/>
				<label>Select Currency: </label>
				<select name="currency" class="form-control">
					<option value="">Select an option</option>
					<option value="Dollar">Dollar</option>
					<option value="Euro">Euro</option>
					<option value="Pound">Pound</option>
					<option value="Chinese Yuan">Chinese Yuan</option>
					<option value="Japanese Yen">Japanese Yen</option>
				</select>
				<br><br>
				<br>
				<center><button type="submit" name="btn_submit" class="btn btn-primary form-control" style="width:30%;">Convert</button></center>
				<br />
				<?php require 'convert.php'?>
			</div>
		</form>
	</div>
	</div>
</body>
</html>