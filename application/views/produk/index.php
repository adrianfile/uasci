<!DOCTYPE html>
<html>
    <head>
        <title> Tampil Produk </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <style>
            h1 {
                text-align: center;
            }
        </style>
    </head>
    <body>
    <h1 class="header">Tampil Produk</h1>
	<table class="container table-hover text-center" border="1" style="border-collapse: collapse;" align="center" style="text-align: center;">
		<tr>
			<th>
				ID
			</th>
			<th>
				Kode Produk
			</th>
			<th>
                Nama Produk
			</th>
			<th>
            	Harga
			</th>
			<th>
            	Stok
			</th>
			<th colspan="2">
				Aksi
			</th>
        </tr>
		<?php
			foreach($tampil as $key => $value)
				{
					
						echo 
						" 
						<tr>
						<td>".$value->id."</td>
						<td>".$value->kode_produk."</td>
                        <td>".$value->nama_produk."</td>
						<td>".$value->harga."</td>
						<td>".$value->stok."</td>
						<td>".anchor('produk/delete/'.$value->id,'Delete')."</td>
						<td>".anchor('produk/edit/'.$value->id,'Edit')."</td>
						</tr>
						";
				}
            ?>
    </table>
        <button onclick="location.href='produk/input'" style="margin-top: 10px;" type="button" class="btn btn-dark mx-auto d-block" >Input</button>
    </body>
</html>