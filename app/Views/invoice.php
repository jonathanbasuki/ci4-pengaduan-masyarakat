<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
  <title>Invoice | PlainAdmin Demo</title>

  <!-- ========== All CSS files linkup ========= -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/lineicons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fullcalendar.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dashboard.css">
</head>
<body>
  <main class="main-wrapper m-0">
    <section>
      <div class="container-fluid">
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper mt-5">
          <div class="row">
            <div class="col-12">
              <div class="invoice-card card-style mb-30">
                <div class="invoice-header">
                  <div class="invoice-for">
                    <h2 class="mb-10">Invoice</h2>
                    <p class="text-sm">
                      Admin Dashboard Design &amp; Development
                    </p>
                  </div>
                  <div class="invoice-logo">
                    <img src="assets/images/invoice/uideck-logo.svg" alt="">
                  </div>
                  <div class="invoice-date">
                    <p><span>Date Issued:</span> 20/02/2024</p>
                    <p><span>Date Due:</span> 20/02/2028</p>
                    <p><span>Order ID:</span> #5467</p>
                  </div>
                </div>
                <div class="invoice-address">
                  <div class="address-item">
                    <h5 class="text-bold">From</h5>
                    <h1>John Doe</h1>
                    <p class="text-sm">
                      3891 Ranchview Dr. Richardson, California 62639
                    </p>
                    <p class="text-sm">
                      <span class="text-medium">Email:</span>
                      admin@example.com
                    </p>
                  </div>
                  <div class="address-item">
                    <h5 class="text-bold">To</h5>
                    <h1>Santa Gosh</h1>
                    <p class="text-sm">
                      2972 Westheimer Rd. Santa Ana, Illinois 85486
                    </p>
                    <p class="text-sm">
                      <span class="text-medium">Email:</span>
                      admin@example.com
                    </p>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="invoice-table table">
                    <thead>
                      <tr>
                        <th class="service">
                          <h6 class="text-sm text-medium">Service</h6>
                        </th>
                        <th class="desc">
                          <h6 class="text-sm text-medium">Descriptions</h6>
                        </th>
                        <th class="qty">
                          <h6 class="text-sm text-medium">Qty</h6>
                        </th>
                        <th class="amount">
                          <h6 class="text-sm text-medium">Amounts</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <p class="text-sm">Admin Dashboard</p>
                        </td>
                        <td>
                          <p class="text-sm">
                            Design and Development Service
                          </p>
                        </td>
                        <td>
                          <p class="text-sm">3</p>
                        </td>
                        <td>
                          <p class="text-sm">$700</p>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <h6 class="text-sm text-medium">Subtotal</h6>
                        </td>
                        <td>
                          <h6 class="text-sm text-bold">$5700</h6>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>
                          <h4>Total</h4>
                        </td>
                        <td>
                          <h4>$3135</h4>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                  <div class="alert">
                    <h5 class="text-bold mb-15">Notes:</h5>
                    <p class="text-sm text-gray">
                      All accounts are to be paid within 7 days from receipt
                      of invoice. To be paid by cheque or credit card or
                      direct payment online. If account is not paid within 7
                      days the credits details supplied as confirmation of
                      work undertaken will be charged the agreed quoted fee
                      noted above.
                    </p>
                  </div>
                </div>
              </div>
              <!-- End Card -->
            </div>
            <!-- ENd Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- Invoice Wrapper End -->
      </div>
      <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========== footer start =========== -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 order-last order-md-first">
            <div class="copyright text-center text-md-start">
              <p class="text-sm">
                &copy;
                <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                  Jonathan Basuki
                </a>.
              </p>
            </div>
          </div>
          <!-- end col-->
          <div class="col-md-6">
            <div class="
            terms
            d-flex
            justify-content-center justify-content-md-end
            ">
            <a href="#0" class="text-sm">Term &amp; Conditions</a>
            <a href="#0" class="text-sm ml-15">Privacy &amp; Policy</a>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </footer>
  <!-- ========== footer end =========== -->
</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/Chart.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/dynamic-pie-chart.js"></script>
<script src="<?= base_url(); ?>/assets/js/moment.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/fullcalendar.js"></script>
<script src="<?= base_url(); ?>/assets/js/jvectormap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/world-merc.js"></script>
<script src="<?= base_url(); ?>/assets/js/polyfill.js"></script>
<script src="<?= base_url(); ?>/assets/js/dashboard.js"></script>


</body></html>
