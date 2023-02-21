
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>template/login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
      <?php foreach ($data_edit as $key) : ?>
<form method="post" action="<?php echo base_url(). 'Crud/update/' ?> mb-3">
 <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="hidden" name="id_data" class="form-control" value="<?php echo $key->id_data?>">
            <input type="text" name="nama" value="<?= $key->nama ?>" class="form-control" >
 
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $key->alamat ?>" class="form-control" >
          </div>

          <div class="form-group">
            <label>Nomer Hp</label>
            <input type="text" name="no_hp" value="<?= $key->no_hp ?>" class="form-control" >
          </div>


          <div class="form-group">
            <label>Gender</label>
            <p><input type="radio" value="laki-laki" name="gender" <?php echo $key->gender=='laki-laki'?'checked':'' ?>>Laki-laki
           <input type="radio" value="perempuan" name="gender" <?php echo $key->gender=='perempuan'?'checked':'' ?> >perempuan</p>
          </div>


<?php endforeach ; ?>


<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
</div>
</form>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>template/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/main.js"></script>

	</body>
</html>