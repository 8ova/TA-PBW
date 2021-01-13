<style>
.id {
	
    list-style-type:none;
    margin:0;padding:0;
	justify-self:left;
}
img { 
    width:150px;
    justify-self:center;
}
.container {
    display:grid;
    grid-template-columns: 20% auto;
    padding: 4em 1em;
}
	table { 
	width: 100%; 
	border-collapse: collapse; 
	margin:50px auto;
	}

/* Zebra striping */
tr:nth-of-type(odd) { 
	background: #eee; 
	}

th { 
	background: #3498db; 
	color: white; 
	font-weight: bold; 
	}

td, th { 
	padding: 10px; 
	border: 1px solid #ccc; 
	text-align: left; 
	font-size: 18px;
	}

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	table { 
	  	width: 100%; 
	}

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}

	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
		/* Label the data */
		content: attr(data-column);

		color: #000;
		font-weight: bold;
	}

}
</style>
<!doctype html>
<html class="no-js" lang="en">

<?php 
	include 'cek.php';
	include '../dbconnect.php';
	?>

<html>
<head>

<title>
 Data Stock Bahan
</title>

<link rel="icon" 
      type="image/png" 
      href="logo.png">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>

</head>

<body>
<div class="container">
			<thead>
				
					<img src="../logo.png" alt="logo" width="25%">
					
						<div id="content">
							<center>       
							
							</center>
							</div>
			</thead>
			
	
	</div>
	<ul>
	<hr size="1500px" color="black" />
	<hr  color="black"/>
	</ul>
	<ul>
			<div id="content">
			
			<h3>Stock Bahan</h3>
            </div>
				<div class="data-tables datatable-dark" style="text-align:center">
				<table>
								<thead>
									<tr>
									<th>No</th>
									<th>Nama Barang</th>
									<th>Divisi</th>
									<th>Berat</th>
									<th>Jenis</th>
									<th>Merk</th>
									<th>Stock</th>
									<th>Satuan</th>
									<th>Lokasi</th>
									</tr>
								</thead>
								<tbody>
																			
								<?php 
											$brgs=mysqli_query($conn,"SELECT * from sstock_brg order by nama ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){

												?>
												<tr>
													<td><?php echo $no++ ?></td>
													<td><?php echo $p['nama'] ?></td>
													<td><?php echo $p['divisi'] ?></td>
													<td><?php echo $p['berat'] ?></td>
													<td><?php echo $p['jenis'] ?></td>
													<td><?php echo $p['merk'] ?></td>
													<td><?php echo $p['stock'] ?></td>
													<td><?php echo $p['satuan'] ?></td>
													<td><?php echo $p['lokasi'] ?></td>
												</tr>	
												<?php 
											}
											?>
										</tbody>
										</table>


					
								</div>
						</ul>
						<script>
      window.print()
  </script>



</body>

</html>