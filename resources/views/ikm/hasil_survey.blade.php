<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

</head>
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/bg-content/bg-content2.png);">
      <div class="container position-relative" style="margin-top: 20px;">
        <h1 class="h2upt"><span style="color:#66beeb;">Indeks Kepuasan Masyarakat</span></h1>
         <nav class="breadcrumbs">
          <ol class="h2upt">
            <li><a href="/home">Beranda</a></li>
            <li class="current">IKM</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <section id="blog-posts" class="blog-posts section p-5" style="background-image: url(assets/img/bg-content/bg-content.png);">

      <div class="row text-center">
        <h2 class="huptikm">IKM TAHUN 2025</h2>
        <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Statistik Indeks Kepuasan Masyarakat UPSCPKP BKN Gorontalo</h6>
                        <div>
                          <a href="ikm-form" class="btn btn-primary h2upt">Isi Survey IKM UPSCPKP BKN Gorontalo</a>
                        </div>
                      </div>
                      <!-- Card Body -->
                      <div class="card-body">
                        <div class="chart-area">
                          <canvas id="myAreaChart"></canvas>
                        </div>
                      </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                          
                            <div class="card shadow mb-4">
                              
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Presentase Indeks</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Sangat Puas
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Puas
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Cukup Puas
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Tidak Puas
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>                 
    </section>

</main>

<!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>