<!DOCTYPE html>
<html>
<head>
	<title>Pembelian</title>
	<link rel="stylesheet" type="text/css" href="order.css">
</head>
<script type="text/javascript">
	function membeli(){
		var yes = confirm("Yakin membeli?");
		if(yes){
			alert("Anda berhasil membeli, silahkan ditunggu barang dirumah anda")
			window.location = "beranda.html";
		}
		else{
			window.location = "order.php";
		}
	}
</script>
<script type="text/javascript">
	function jumlahtotal() {
		var nama = (document.aform.bnama.value);
		var alamat = (document.aform.balamat.value);
		var telepon = (document.aform.btelepon.value);
		var pesanan = (document.aform.bpesanan.value);
		var jumlahpesanan = (document.aform.bjumlahpesanan.value);
		var harga = 0.0;
		var total = 0.0;
		if (pesanan== "Kaos01"){
			harga = 100000;
		}
		else if (pesanan== "Kaos02"){
			harga = 90000;
		}
		else if (pesanan== "Kaos03") {
			harga = 95000;
		}
		else if (pesanan== "Hoodie1"){
			harga = 180000;
		}
		else if (pesanan== "Hoodie2"){
			harga = 200000;
		}
		else if (pesanan== "Celpan1"){
			harga = 150000;
		}
		else if (pesanan== "Celpan2"){
			harga = 120000;
		}
		else if (pesanan== "Sepatuadidas"){
			harga = 500000;
		}
		else if (pesanan== "Sepatunike"){
			harga = 950000;
		}
		total = jumlahpesanan*harga;
		document.aform.xpaket.value=eval(harga);
		document.aform.xtotal.value=eval(total);
	}

</script>
<body>
	<div class="atas">
		<ul class="atas1">
			<li><a href="beranda.html">Home</a></li>
			<li><a href="order.php">Order</a></li>
		</ul>
	</div>
	<br><br><br><br>
	<center>
		<form name="aform">
		<h1 align="center">Order Here</h1>
			
		<table>
		<tr>
			<td>Nama Pembeli</td><td><input type="text" name="bnama" id="bnama"></td>
		</tr>
		<tr>
			<td>Alamat Tujuan</td><td><input type="text" name="balamat" id="balamat"></td>
		</tr>
		<tr>
			<td>Nomer Telepon</td><td><input type="text" name="btelepon" id="btelepon"></td>
		</tr>
		<tr>
			<td>Pilihan Barang</td><td></label><select name="bpesanan" id="bpesanan">
				<option value="null">Pilih Item Yang Ingin Dibeli</option>
				<option value="Kaos01">Kaos Code "DragonLord"</option>
				<option value="Kaos02">Kaos Code "Freedom"</option>
				<option value="Kaos03">Kaos Code "Black Lives Matter"</option>
				<option value="Hoodie1">Hoodie Wolhaiksong</option>
				<option value="Hoodie2">Hoodie Star</option>
				<option value="Celpan1">Celana Jeans</option>
				<option value="Celpan2">Celana Chinos</option>
				<option value="Sepatuadidas">Sepatu Adidas</option>
				<option value="Sepatunike">Sepatu Nike</option>
				</select>
			</td>
		</tr>
			<tr>
				<td>Jumlah</td><td><input type="text" name="bjumlahpesanan" id="bjumlahpesanan"></td>
			</tr>
			<br><br>
		<tr>
			<td colspan="2" align="center" class="button">
				<input type="button" name="Order" value="Order" class="order" onclick="jumlahtotal()">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="reset" name="Reset" value="Cancel" class="reset">
			</td>
		</tr>
		</tr>
			</table>
		<table>
			<tr>
				<td>Harga Barang</td><td></td><td><input type="text" name="xpaket" id="xpaket"></td>
			</tr>
			<tr>
				<td>Total Harga</td><td></td><td><input type="text" name="xtotal" id="xtotal"></td>
			</tr>
		</table>
		<tr>
			<td colspan="2">
				<input type="submit" name="Beli" value="Beli" onclick="membeli()" ></a>>
			</td>
		</tr>
	</center>
	</form>
	<div class="footer">
		<center>
		<ul class="a">
			<li><a href="https://www.instagram.com/hafizzlol/?hl=id" title="Instagram"><i class="fa fa-instagram"></i></a></li>
			<li><a href="https://www.youtube.com/channel/UC71APWULIO-zF7HzISzK5gw?view_as=subscriber" title="Yucub"><i class="fa fa-youtube"></i></a></li>
				<li><a href="https://mail.google.com/mail/u/0/?tab=wm&ogbl#inbox" title="Gugel"><i class="fa fa-google"></i></a></li>
			</ul>
		</center>
	</div>
</body>
</html> 