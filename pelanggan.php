<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pelanggan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
	<?php 
		include_once("connect.php");
		$pelanggans = mysqli_query($mysqli, "SELECT * FROM pelanggan
										  ORDER BY id ASC");
	 ?>

	<div class="container-xxl">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,64L40,90.7C80,117,160,171,240,197.3C320,224,400,224,480,229.3C560,235,640,245,720,218.7C800,192,880,128,960,90.7C1040,53,1120,43,1200,69.3C1280,96,1360,160,1400,192L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
		</svg>

		<div class="row mt-1" style="margin: 60px;">
			<div class="col-md-3"></div>

			<!-- <ul class="nav nav-pills position-fixed bg-light width">
				  <li class="nav-item">
				    <a class="nav-link active" aria-current="page" href="#"><h6>Active</h6></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><h6>Active</h6></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#"><h6>Active</h6></a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link disabled"><h6>Active</h6></a>
				  </li>
				</ul> -->
				<div class="col-md-2 text-center">
					<h4><a href="index.php" style="text-decoration: none;">BARANG</a></h4>
				</div>
				<div class="col-md-2 text-center">
					<h4><a href="pelanggan.php" style="text-decoration: none;">PELANGGAN</a></h4>
				</div>
				<div class="col-md-2 text-center">
					<h4><a href="transaksi.php" style="text-decoration: none;">TRANSAKSI</a></h4>
				</div>
				</div>

		<div class="row">
			<div class="col-md-12 mb-3">
				<a href="add_cust.php" class="btn btn-primary float-right mr-2">Tambah</a>
			</div>

			<div class="col-md-12">
				<table class="table table-striped table-hover" border="1">
					<thead class="table-info">
						<td class="text-center ">ID</td>
						<td class="text-center ">Nama pelanggan</td>
						<td class="text-center ">Alamat</td>
						<td class="text-center ">Nomor HP</td>
						<td class="text-center ">Action</td>
					</thead>

				<tbody>
					<?php 
						while($pelanggan = mysqli_fetch_array($pelanggans)) {
							echo"
								<tr class='text-center'>	
									<td>".$pelanggan['id']."</td>
									<td>".$pelanggan['nama']."</td>
									<td>".$pelanggan['alamat']."</td>
									<td>".$pelanggan['no_hp']."</td>
									<td class = 'text-center'>
									<a href='edit_cust.php?id=".$pelanggan['id']."' class ='btn btn-secondary'>Edit</a>
									<a href='#' class ='btn btn-danger' onclick = 'confirmation(".$pelanggan['id'].")'>Hapus</a>
									</td>
								</tr>
							";
						}
					 ?>

				</tbody>
			</table>
		</div>
			
	</div>
		
</div>
	
	<script >
		function confirmation(id) {
			if (confirm('Antum yakin mau hapus data pelanggan ini? ')) {
				window.location.href = 'delete_cust.php?id='+id;

			}
			}
	</script>
</body>
</html>