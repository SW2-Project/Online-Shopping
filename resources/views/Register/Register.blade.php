
<!DOCTYPE html>
<html>
<head>
<title>Creative Colorlib SignUp Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="Register.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="main-w3layouts wrapper">
		<h1>Creative SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
<<<<<<< HEAD
				<form action="{{ URL::to('Registerr') }}" method="post" enctype="multipart/form-data">
=======
				<form action="Registerr" method="post" enctype="multipart/form-data">
>>>>>>> a86620542b0c479a8977c227e0c016a11d03bccf
					<input class="text" type="text" name="Username" placeholder="Username" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="pass" placeholder="Confirm Password" required="">
					<input type="hidden" value="{{ csrf_token() }}" name="_token">
					<div class="wthree-text">
				
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="Login"> Login Now!</a></p>
			</div>
		</div>
		<div class="colorlibcopy-agile">
		<p>&copy; SoftWare Enginering 2 Project <a>SW2</a>.</p>
		</div>
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
