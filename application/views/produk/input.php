<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<style type="text/css">
			p {
				text-align: center;
				font-size: 20px;
			}
</style>
<body >
    <p><b>Daftar Produk</b></p>
    <div class="col-md-6 mx-auto d-block" align="center">
                <div data-form-type="formoid">
                    <?php echo form_open('produk/save'); ?>
                        <div class="row">
                            <div class="col-md-12" data-for="email" style="margin-top:10px;">
                                <input type="text" class="form-control input" name="kode_produk" data-form-field="Email" placeholder="Kode produk" required="" id="email-form4-4v">
                            </div>
                            <div class="col-md-12" data-for="email" style="margin-top:10px;">
                                <input type="text" class="form-control input" name="nama_produk" data-form-field="Email" placeholder="Nama Produk" required="" id="email-form4-4v">
                            </div>
                        
                            <div style="margin-top:30px" class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="harga" data-form-field="Name" placeholder="Harga" required="" id="name-form4-4v">
                            </div>
                            
                            <div style="margin-top:30px" class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="stok" data-form-field="Phone" placeholder="Stok" required="" id="phone-form4-4v">
                            </div>
                            <br style="margin-top:10px;">
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-primary btn-form display-4">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	<?php echo form_close(); ?>
</body>
</html>