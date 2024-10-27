<?php include 'calc.php' ?>
<?php include 'db.php' ?>
<?php include 'search.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Gold Calculator</title>
	</head>
		<body>
			<header>
				<nav>
					<i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
					<div class="nav-links">
						<ul>
							<i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
							<li><a href="#welcome">Home</a></li>
							<li><a href="#chart">Chart</a></li>
							<li><a href="#calculator">Calculator</a></li>
							<li><a href="#rates">Rates</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<br><br> 
			
			<section id="welcome">
				<div class="text-box">
					<img class="logo" src="logo.png" alt="">
					<h1>Find Gold Price</h1><br>
					<a href="#calculator" class="scroll">Let's Calculate</a>
				</div>
			</section>
			
			<section id="chart">
				<h1 align="center">Gold Chart</h1>
				<table id="table" border="1">
					<tr>
						<th>Quantity</th>
						<th>Equals</th>
					</tr>
					<tr>
						<td>1 Vori</td>
						<td>11.66 Gram</td>
					</tr>
					<tr>
						<td>1 Vori</td>
						<td>16 Ana</td>
					</tr>
					<tr>
						<td>1 Ana</td>
						<td>6 Roti</td>
					</tr>
					<tr>
						<td>1 Roti</td>
						<td>10 Point</td>
					</tr>
				</table>
			</section>
			
			<section id="calculator">
				<h1>Gold Calculator</h1>
				<form action="" method="post" id="myForm">
						<label for="voriprice">Enter Vori Price in Total</label><br>
						<input type="number" name="voriprice" id="voriprice" required="required" value="<?php echo $voriprice; ?>" />
					<br>
						<label for="voriquantity">Enter Vori Quantity</label><br>
						<input type="number" name="voriquantity" id="voriquantity" required="required" value="<?php echo $voriquantity; ?>" />
					<br>
						<label for="anaquantity">Enter Ana Quantity</label><br>
						<input type="number" name="anaquantity" id="anaquantity" required="required" value="<?php echo $anaquantity; ?>" /> 
					<br>
						<label for="rotiquantity">Enter Roti Quantity</label><br>
						<input type="number" name="rotiquantity" id="rotiquantity" required="required" value="<?php echo $rotiquantity; ?>" />
					<br>
						<label for="pointquantity">Enter Point Quantity</label><br>
						<input type="number" name="pointquantity" id="pointquantity" required="required" value="<?php echo $pointquantity; ?>" />
					<br>
						<button type="submit" name="submit">Total</button>

					<p align="center">Total Taka<p>
					<?php if(isset($_POST['submit'])){ ?>
					<input readonly="readonly" id="result" name="result" value="<?php echo $result; ?>" /> 
					<?php }else{ ?>
						<input readonly="readonly" id="result" value="0">
					<?php } ?>
				</form>	
				<script>
					if (window.history.replaceState ){
						window.history.replaceState( null, null, window.location.href );
					}
				</script>
			</section>
			
			<section id="rates">
				<h1 align="center">Gold Price Updates Chart</h1>
					<label for="datetosearch" id="lbl">Check rate of a date</label>
					<input type="date" name="datetosearch" id="datetosearch">
					<button type="submit" name="submit" id="search"><i class="fa fa-search"></i></button>
					
				<table id="table" border="1">
					<tr>
						<th>CARAT | স্বর্ণের ক্যারেট</th>
						<th>Per Gram Price | প্রতি গ্রাম স্বর্ণের দাম</th>
						<th>Per Bhori / Vori Price | প্রতি ভরি স্বর্ণের দাম</th>
						<th>Date</th>
					</tr>
					<tr> 
                        <th>22/22 CARAT</th>
						<th>৳ 6,300</th>
						<th>৳ 73,483</th>
						<th>22 August 2021 </th>

					</tr>
					<tr> 
                        <th>21/21 CARAT</th>
						<th>৳ 6,030</th>
						 <th>৳ 70,334</th>
						<th>22 August 2021 </th>

					</tr>
					<tr> 
                        <th>18/18 CARAT</th>
						<th>৳ 5,280</th>
						<th>৳ 61,586</th>
						<th>22 August 2021 </th>
					</tr>
				</table>
			</section>
				
			<section id="contact">
				<div class="contact-content">
					<h1>Contact Us</h1>
					<p>try any...</p>
				</div>
				<div class="contact-links">
					<a href="https://www.facebook.com/mohammadrahman.khan.75/" target="_blank" id="profile-link"><i class="fa fa-facebook"></i> Facebook</a>
					<a href="https://github.com/mrkhandipu393" target="_blank" id="profile-link"><i class="fa fa-github"></i> Github</a>
					<a href="https://www.linkedin.com/in/m-r-khan-dipu-0b379220a/" target="_blank" id="profile-link"><i class="fa fa-linkedin"></i> Linkedin</a>
					<a href="mailto: mrkhandipubijoy@gmail.com" target="_blank" id="profile-link"><i class="fa fa-at"></i> Send Mail</a>
					<a href="#" target="_blank" id="profile-link"><i class="fa fa-mobile-phone"></i> Call Us</a>
				</div>
			</section>	
			<script type="text/javascript" src="script.js"></script>
	</body>
</html>