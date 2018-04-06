<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Teman</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	p{
		font-size: 17px;
		font-family: "Times New Roman", Times, serif;
	}

	body {
		background-color:#f1f1f1;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a:link, a:visited {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
	display: inline-block;
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 15px;
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
    font-size: 75px;
	}

	/* Style the top navigation bar */
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

	table, td, th {    
    border: 3px solid #ddd;
    font-size: 17px;
    font-color: black;
    
}

table {
    border-collapse: collapse;
    text-align: center;
    width: 100%;
}

th, td {
    padding: 15px;
    text-align: justify;
}

.footer {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 10px;
    padding: 0.001px;
    text-align: center;
    background: #ddd;
    margin-top: 100px;
}
	</style>
</head>
<body>

<div class="header">
	<h1 >Data Alamat Temanku</h1>
	<p>Selamat Datang, temannya Intan! Silahkan mengisi data dibawah ini.</p>
</div>

	<br>
	<br>
	<div class="topnav">
		<a href="<?php echo site_url('welcome/form_input') ?>">Input Your Data Here</a>
		<br>
		<br>
		<table border="3">
			<tr style="background-color:#3cb371;">
				<td style="width: 20px">No</td>
				<td>Nama Lengkap</td>
				<td>Alamat</td>
				<td style="width: 75px">Opsi</td>
			</tr>
			<?php 
			$no = 1;
			foreach($hasil as $r){ ?>
			<tr style="background-color:rgb(240, 240,240);">
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['nama_lengkap'] ?></td>
				<td><?php echo $r['alamat'] ?></td>
				<td><a href="<?php echo site_url('welcome/form_edit/'.$r['kode_user']) ?>">Edit</a> 
					<a href="<?php echo site_url('welcome/delete/'.$r['kode_user']) ?>" onclick="return confirm('Are You Sure?')">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table> 
		
	</div>
</div>

<div class="footer">
  <h2>Copyright @2018, Risa Intan Komaraasih.</h2>
</div>

</body>
</html>