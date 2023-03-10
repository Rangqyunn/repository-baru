<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>

</head>
<body class="form">
<form action="<?php echo base_url('data/saveData')?>" method="post">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('data/') ?>">Daftar Data</a>
            <a class="navbar-brand" href="<?= base_url() ?>">Nuke Venezuela</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<!-- <li class="nav-item">
						<a class="nav-link" href="<?= base_url('data/insertData/') ?>">Add Student</a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
    <header>
</header>
    <table > 
    <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td><input type="text" name="fakultas"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" values="submit" name="submit"></td>
            <td><input type="reset" values="reset" ></td>
        </tr>

    </table>
    </form>
</body>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
></script>
<script
  type="text/javascript"
  src="js/jquery.min.js"
></script>
<script
  type="text/javascript"
  src="js/bootstrap.js"
></script>
</html>