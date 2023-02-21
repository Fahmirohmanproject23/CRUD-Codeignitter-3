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
<a class="btn btn-sm btn-primary mb-3" href="<?= base_url('crud/tambah') ?>"><i class="fa fa-plus fa-sm"></i>Tambah Data
	</a><br>
Keterangan :

   <?= $this->session->flashdata('message'); ?>
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
 <tr>
    <th>NO</th>
      <th>NAMA</th>
      <th>ALAMAT</th>
      <th>NO HP</th>
      <th>GENDER</th>
      <th>EDIT</th>
      <th>HAPUS</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($tampil as $key ) : ?>

      <tr>
        <td><?= $no++ ?></td>
        <td><?= $key->nama ?></td>
        <td><?= $key->alamat ?></td>
        <td><?= $key->no_hp ?></td>
        <td><?= $key->gender ?></td>
         <td><?php echo anchor('crud/edit/' .$key->id_data, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
        <td><?php echo anchor('crud/hapus/' .$key->id_data, '<div class="btn btn-danger btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
   
      </tr>
    <?php endforeach ; ?>

                                        </tbody>
                                    </table>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>template/login/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>template/login/js/main.js"></script>

	</body>
</html>
