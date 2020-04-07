<!DOCTYPE html>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="Admin_default.css" rel="stylesheet" type="text/css" media="all" />
<link href="Admin_fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a>Admin</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="{{ URL::to('logout') }}" accesskey="5" title="">Log Out</a></li>
				<input type="hidden" value="{{ csrf_token() }}" name="_token">
			</ul>
		</div>
	</div>
</div>
<div id="header-featured"> </div>
<div id="wrapper">
	<div id="featured-wrapper">
		
		<div class="extra2 margin-btm container">
			<div class="ebox1">
				<div class="title">
					<h2>Add a product to the stock</h2>

				</div>
				<a href="Add_product" class="button">Add Product</a>
			</div>		

			<div class="ebox2">
				<div class="title">
					<h2>Delete a product from the stock</h2>
					
				</div>
				<a href="delete_product" class="button">Delete Product</a>
			</div>		

		</div>	

		
		</div>	

	</div>
</div>
<div id="copyright" class="container">
	<p>&copy; SoftWare Enginering 2 Project <a>SW2</a>.</p>
</div>
</div>
</body>
</html>
