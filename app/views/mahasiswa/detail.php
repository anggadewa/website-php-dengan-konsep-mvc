<div class="container">
	
	<div class="card mt-4" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
			<h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
			<p class="card-text"><?= $data['mhs']['kelas']; ?></p>
			<a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
		</div>
	</div>

</div>