<div class="container-fluid">
	<!-- xe 4 cho -->
<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 4 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =4";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) {$i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<div class="">
						<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
					</div>
					
			</h2>
		</div>
<?php } ?>
	</div>
<!-- xe 8 cho -->
	<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 8 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =8";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>
	

<!-- xe 16 cho-->
<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 16 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =16";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>

<!-- xe 35 cho -->
<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 35 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =35";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>

	<!-- xe 45 cho -->
	<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 45 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =45";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>
</div>