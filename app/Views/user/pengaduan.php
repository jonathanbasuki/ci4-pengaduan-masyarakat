<?= $this->extend('templates/base_dashboard'); ?>
<?= $this->section('content'); ?>

<div class="title-wrapper pt-30">
	<div class="row align-items-center">
		<div class="col-md-6">
			<div class="title mb-30">
				<h2>Aduan Saya</h2>
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
							Aduan Saya
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
				<div class="table-wrapper table-responsive">
					<?php if (count($data['aduan']) == 0): ?>
						<a href="<?= base_url('/aduan/new'); ?>" class="main-btn primary-btn square-btn btn-hover"><i class="lni lni-circle-plus"></i> Buat Aduan</a>
					<?php endif; ?>

					<?php if (count($data['aduan']) > 0): ?>
						<table class="table">
							<thead>
								<tr>
									<th><h6>Foto</h6></th>
									<th><h6>Laporan</h6></th>
									<th><h6>Tanggal</h6></th>
									<th><h6>Status</h6></th>
									<th><h6>Action</h6></th>
								</tr>
								<!-- end table row-->
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach ($data['aduan'] as $row): ?>
									<tr>
										<td>
											<img src="<?= base_url('/uploads/' . $row['foto']); ?>" alt="" width="180px">
										</td>
										<td>
											<?= $row['laporan']; ?>
										</td>
										<td>
											<?= $row['tanggal']; ?>
										</td>
										<td>
											<?php if ($row['status'] == 'Belum Diproses'): ?>
												<span class="status-btn info-btn"><?= $row['status']; ?></span>
											<?php endif; ?>

											<?php if ($row['status'] == 'Diproses'): ?>
												<span class="status-btn active-btn"><?= $row['status']; ?></span>
											<?php endif; ?>

											<?php if ($row['status'] == 'Selesai'): ?>
												<span class="status-btn success-btn"><?= $row['status']; ?></span>
											<?php endif; ?>
										</td>
										<td>
											<div class="action">
												<?php if ($row['status'] == 'Belum Diproses'): ?>
													<a href="<?= base_url('/aduan/' . $row['id'] . '/edit'); ?>" class="text-orange"><i class="lni lni-pencil fs-5"></i></a>
												<?php endif; ?>
												<form action="<?= base_url('/aduan/' . $row['id']); ?>" method="post">
													<input type="hidden" name="_method" value="DELETE">
													<button type="submit" class="text-danger">
														<i class="lni lni-trash-can fs-4"></i>
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
					<?php endif; ?>
				</div>
			</div>
			<!-- end card -->
		</div>
		<!-- end col -->
	</div>
	<!-- end row -->
</div>

<?= $this->endSection(); ?>