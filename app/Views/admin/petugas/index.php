<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="title mb-30">
				<h2>Petugas</h2>
			</div>
		</div>
		<!-- end col -->
		<div class="col-md-6">
			<div class="breadcrumb-wrapper mb-30">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item" aria-current="page">
							<a href="<?= base_url('/dashboard'); ?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Data Petugas
						</li>
					</ol>
				</nav>
			</div>
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<div class="tables-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<?= view('templates/_partials/_message'); ?>
			<div class="card-style mb-30">
				<a href="<?= base_url('/petugas/new'); ?>" class="main-btn primary-btn square-btn btn-hover mb-4"><i class="lni lni-circle-plus"></i> Tambah Petugas</a>
				<div class="table-wrapper table-responsive">
					<table class="table">
						<thead>
							<?php if (count($data['petugas']) > 0): ?>
								<tr>
									<th><h6></h6></th>
									<th><h6>Username</h6></th>
									<th><h6>Nama Petugas</h6></th>
									<th><h6>Nomor Telp</h6></th>
									<th><h6>Role</h6></th>
									<th><h6>Action</h6></th>
								</tr>
							<?php endif; ?>
							<!-- end table row-->
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data['petugas'] as $row): ?>
								<tr>
									<td>
										<h6><?= $i++; ?></h6>
									</td>
									<td>
										<p><?= $row['username']; ?></p>
									</td>
									<td>
										<p><?= $row['nama']; ?></p>
									</td>
									<td>
										<p><?= $row['telp']; ?></p>
									</td>
									<td>
										<span class="status-btn active-btn">Petugas</span>
									</td>
									<td>
										<div class="action">
											<form action="<?= base_url('/petugas/' . $row['id']); ?>" method="post">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="text-danger">
													<i class="lni lni-trash-can"></i>
												</button>
											</form>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
							<!-- end table row -->
						</tbody>
					</table>
					<!-- end table -->
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<?= $this->endSection(); ?>