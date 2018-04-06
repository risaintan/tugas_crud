<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Input</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}




	a:link, a:visited {
    background-color: black;
    color: white;
    padding: 7px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
}

	a:hover, a:active {
    background-color: black;
}

	

		.header {
    padding: 30px;
    text-align: center;
    background: white;
	}

	.header h1 {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 50px;
	}


form {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 20px;
    border-collapse: collapse;
    text-align: justify;
    width: 50%;
}

.rightcolumn {
    float: middle;
    width: 50%;
    background-color: white;
    padding-left: 520px;
}

.footer {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 10px;
    padding: 0.001px;
    text-align: center;
    background: black;
    margin-top: 100px;
}


	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	input[type=button], input[type=submit], input[type=reset] {
    background-color: black;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    width: 100%;
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
}

	input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid black;
}
	</style>
</head>
<body>

<div class="header">
	<h1>Input Your Data Here!</h1>
	<br>
	<br>


	<div id="body">
		<div class="rightcolumn">
		<a href="<?php echo site_url('welcome/index') ?>">Back to Page</a>
		<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
			Nama Lengkap <br>
			<input type="text" name="nama" /><br>
			<br>
			Alamat Lengkap <br>
			<input type="text" name="alamat" /><br>
			<input type="submit" name="simpan" value="Simpan" />
		</form>
		</div>
	</div>
</div>

<div class="footer">
  <h2>Copyright @2018, Risa Intan Komaraasih.</h2>
</div>

</body>
</html>