<html lang="fa">>
	<title>
		Melika Alizadeh
	</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
	.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
	.fa-anchor,.fa-coffee {font-size:200px}
	</style>
	
	<body dir="rtl" class="w3-container w3-indigo">
		<div class="w3-top">
		<nav class="w3-bar w3-red w3-card w3-right-align w3-large">
			<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
			<a class="w3-bar-item w3-button w3-padding-large w3-white" href="./index.html">معرفی</a>
			<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="./Skills.html">مهارت ها و توانمندی ها</a>
			<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="./Achievement.html">افتخارات و دستاوردها</a>
			<a class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" href="./contact.html">تماس با من</a>
		</nav>
		
		<!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
	

	

 <form method="post">
 <p>
 <td>&nbsp;&nbsp;</td>
   <table> <tr> <td>نام</td> 
   <td>&nbsp;&nbsp;<input type="text" value="" name="fname" /></td></tr> 
   <tr> <td>نام خانوادگی</td>
   <td>&nbsp;&nbsp;<input type="text" value="" name="lname" /></td> </tr>
   <tr> <td>ایمیل</td>
   <td>&nbsp;&nbsp;<input type="text" value="" name="email" /></td> </tr>
   <tr> <td>متن پیام</td>
   <td>&nbsp;&nbsp;<input type="text" value="" name="description" /></td> </tr>
   </table>
   <br><br><br><br>
   <input type="submit" name="submit" value="ثبت"/>
  </p>
 </form> 
 </html>
	
	<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <a href="http://instagram.com/melikaofficial.1"><i class="fa fa-instagram w3-hover-opacity"></i>
    <a href="http://t.me/melikaofficial"><i class="fa fa-telegram w3-hover-opacity"></i>
    <a href="mailto:melikaalizadeh7@gmail.com"><i class="fa fa-envelope w3-hover-opacity"></i>
    <a href="https://github.com/MelikaAlizadeh"><i class="fa fa-github w3-hover-opacity"></i>
 </div>
 <p>Designed by <a href="index.html" target="_parent">Melika Alizadeh</a></p>
</footer>
	
	</body>
</html>

<html>
<head></head>
<body>
	<?php
	if(isset($_POST['submit']))
	{
	if(!is_dir("C://wamp64//www//CW//texts")){
	mkdir("C://wamp64//www//CW//texts");}
	$i=count(scandir("C://wamp64//www//CW//texts"))-1;
	$firstname = $_POST['fname'];
	$lastname = $_POST["lname"];
	$email = $_POST["email"];
	$text = $_POST["description"];
	$file = fopen("C://wamp64//www//CW//texts/$i.txt","w");
	echo fwrite($file, "$firstname\n$lastname\n$email\n$text");
	fclose($file);}
	?>
</body>
</html>































