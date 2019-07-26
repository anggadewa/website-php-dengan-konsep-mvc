<div class="container mt-3">
	<div class="row">
		<div class="col-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formModal">
				Tambah Data Mahasiswa
			</button>

			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs ) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary">Detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="ModalTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="ModalTitle">Tambah Data Mahsiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
					</div>

					<div class="form-group">
						<label for="npm">NPM</label>
						<input type="text" class="form-control" id="npm" name="npm" placeholder="Masukan NPM Anda">
					</div>

					<div class="form-group">
						<label for="kelas">Kelas</label>
						<select class="form-control" id="kelas" name="kelas">
							<option disabled selected>Pilihan Kelas</option>
							<option value="4IA18">4IA18</option>
							<option value="4IA19">4IA19</option>
							<option value="4IA20">4IA20</option>
							<option value="4IA21">4IA21</option>
							<option value="4IA22">4IA23</option>
							<option value="4IA23">4IA23</option>
							<option value="4IA24">4IA24</option>
							<option value="4IA25">4IA25</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</div>
				</form>
		</div>
	</div>
</div>