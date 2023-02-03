<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?= $data['judul']; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>

	
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
	    <a class="navbar-brand" href="#">PHP MVC</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
	        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
			<a class="nav-link" href="<?= BASEURL; ?>/about">Profil</a>
      </div>
    </div>
  </div>
</nav>