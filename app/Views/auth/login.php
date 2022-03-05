<?= $this->extend('templates/base_auth'); ?>
<?= $this->section('auth'); ?>

<section class="signin-section">
  <div class="container-fluid p-0 m-0 h-100">
    <div class="row g-0 auth-row">
      <div class="col-lg-6">
        <div class="auth-cover-wrapper bg-primary-100">
          <div class="auth-cover">
            <div class="title text-center">
              <h1 class="text-primary mb-10">Selamat Datang</h1>
              <p class="text-medium">
                Silahkan masuk menggunakan akun Anda.
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
        <div class="signin-wrapper">
          <div class="form-wrapper">
            <h6 class="mb-15">Masuk</h6>
            <p class="text-sm mb-25">
              Silahkan masukkan akun Anda.
            </p>

            <?= view('templates/_partials/_message') ?>

            <form action="<?= route_to('login') ?>" method="post">

              <?= csrf_field() ?>

              <div class="row">
                <div class="col-12">
                  <div class="input-style-1">
                    <label for="login">Email atau username</label>
                    <input type="text" name="login" id="login" placeholder="Email atau username" class="form-control" value="<?= old('login'); ?>" />
                    <div class="invalid-feedback">
                      <?= session('errors.login') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="input-style-1">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" class="form-control" />
                    <div class="invalid-feedback">
                      <?= session('errors.password') ?>
                    </div>
                  </div>
                </div>
                <!-- end col -->
              </div>
              <!-- end col -->
              <div class="col-12">
                <div class="button-group d-flex justify-content-center flex-wrap">
                  <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">Masuk</button>
                </div>
              </div>
              <!-- end col -->
            </form>

            <p class="text-sm text-medium text-dark text-center mt-4">
              Belum punya akun?
              <a href="<?= base_url('/register'); ?>">Buat akun</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>