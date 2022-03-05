<?= $this->extend('templates/base_auth'); ?>
<?= $this->section('auth'); ?>

<section class="signin-section">
  <div class="container-fluid p-0 m-0">
    <div class="row g-0 auth-row">
      <div class="col-lg-6 align-top">
        <div class="auth-cover-wrapper bg-primary-100">
          <div class="auth-cover">
            <div class="title text-center">
              <h1 class="text-primary mb-10">Daftar</h1>
              <p class="text-medium">
                Buat akun Anda
              </p>
            </div>
            <div class="cover-image">
              <img src="<?= base_url(); ?>/assets/images/auth/signin-image.svg" alt="" />
            </div>
            <div class="shape-image">
              <img src="<?= base_url(); ?>/assets/images/auth/shape.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- end col -->
      <div class="col-lg-6">
        <div class="signup-wrapper">
          <div class="form-wrapper">
            <h6 class="mb-15">Daftar</h6>
            <p class="text-sm mb-25">
              Buat akun Anda
            </p>
            
            <form action="<?= route_to('register') ?>" method="post">

              <?= csrf_field() ?>

              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="input-style-1">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" value="<?= old('nama'); ?>" placeholder="Nama Lengkap" class="form-control <?php if(session('errors.nama')) : ?>is-invalid<?php endif ?>" />
                    <div class="invalid-feedback">
                      <?= session('errors.nama') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12 col-md-6">
                  <div class="input-style-1">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" id="nik" value="<?= old('nik'); ?>" placeholder="NIK" class="form-control <?php if(session('errors.nik')) : ?>is-invalid<?php endif ?>" />
                    <div class="invalid-feedback">
                      <?= session('errors.nik') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12 col-md-6">
                  <div class="input-style-1">
                    <label for="email"><?=lang('Auth.email')?></label>
                    <input type="email" name="email" id="email" value="<?= old('email'); ?>" placeholder="<?=lang('Auth.email')?>" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" />
                    <div class="invalid-feedback">
                      <?= session('errors.email') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12 col-md-6">
                  <div class="input-style-1">
                    <label for="username"><?=lang('Auth.username')?></label>
                    <input type="text" name="username" id="username" value="<?= old('username'); ?>" placeholder="<?=lang('Auth.username')?>" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" />
                    <div class="invalid-feedback">
                      <?= session('errors.username') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="input-style-1">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" class="form-control <?php if(session('errors.password') || session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off" />
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="input-style-1">
                    <label for="pass_confirm">Ulangi Kata Sandi</label>
                    <input type="password" name="pass_confirm" id="pass_confirm" placeholder="Ulangi Kata Sandi" class="form-control <?php if(session('errors.password') || session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" autocomplete="off" />
                    <div class="invalid-feedback">
                      <?= session('errors.pass_confirm') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div
                  class="
                  button-group
                  d-flex
                  justify-content-center
                  flex-wrap
                  "
                  >
                  <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                    Daftar
                  </button>
                </div>
              </div>
            </div>
            <!-- end row -->
          </form>

          <p class="text-sm text-medium text-dark text-center mt-4">
            Sudah punya akun? <a href="<?= base_url('/login'); ?>">Masuk</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>