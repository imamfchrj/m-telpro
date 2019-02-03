<?php
   $this->load->view('users/layout/header');
   ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-Car-Wheel"></i><span class="hide-menu">Penyewaan </span></a>
                            
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-Increase-Inedit"></i><span class="hide-menu">History</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Sedang berjalan</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> Lampau</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">List Penyewaan</h4>
                        <div class="d-flex align-items-center">

                        </div>
                    </div>


                    <div class="col-7 align-self-center">
                        <div class="d-flex no-block justify-content-end align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                        <!-- Column -->
                        <div class="col-md-9 col-lg-9">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h5 class="m-b-0 text-white">Daftar Sewa (4 items)</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <thead>
                                                <tr>
                                                    <th>TRX-ID</th>
                                                    <th>Subjek</th>
                                                    <th>Lokasi Deliveri</th>
                                                    <th>Jenis Mobil</th>
                                                    <th>Tahun Mobil</th>
                                                    <th>Warna Mobil</th>
                                                    <th>Transmisi</th>
                                                    <th>Pickup Date</th>
                                                    <th>Return Date</th>
                                                    <th>Jenis Plat</th>
                                                    <th>Branding</th>
                                                    <th style="text-align:center">Catatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                            <td>TELPRO-20190120-001</td>
                                                            <td>Penyewaan Mobil A</td>
                                                            <td>Margonda Raya Depok</td>
                                                            <td>Avanza</td>
                                                            <td>2018</td>
                                                            <td>Hitam</td>
                                                            <td>Manual</td>
                                                            <td>24 Januari 2019 09:00</td>
                                                            <td>24 Januari 2020 09:00</td>
                                                            <td>Ganjil</td>
                                                            <td>Ya</td>
                                                            <td width="150px">Kalau bisa di antar ke rumah ya?</td>
                                                    </tr>
                                                    <tr>
                                                            <td>TELPRO-20190120-001</td>
                                                            <td>Penyewaan Mobil A</td>
                                                            <td>Margonda Raya Depok</td>
                                                            <td>Avanza</td>
                                                            <td>2018</td>
                                                            <td>Hitam</td>
                                                            <td>Manual</td>
                                                            <td>24 Januari 2019 09:00</td>
                                                            <td>24 Januari 2020 09:00</td>
                                                            <td>Ganjil</td>
                                                            <td>Ya</td>
                                                            <td width="150px">Kalau bisa di antar ke rumah ya?</td>
                                                    </tr>
                                                    <tr>
                                                            <td>TELPRO-20190120-001</td>
                                                            <td>Penyewaan Mobil A</td>
                                                            <td>Margonda Raya Depok</td>
                                                            <td>Avanza</td>
                                                            <td>2018</td>
                                                            <td>Hitam</td>
                                                            <td>Manual</td>
                                                            <td>24 Januari 2019 09:00</td>
                                                            <td>24 Januari 2020 09:00</td>
                                                            <td>Ganjil</td>
                                                            <td>Ya</td>
                                                            <td width="150px">Kalau bisa di antar ke rumah ya?</td>
                                                    </tr>
                                                
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="d-flex no-block align-items-center">
                                            <button class="btn btn-dark btn-outline"><i class="fas fa-arrow-left"></i> Beranda</button>
                                            <div class="ml-auto">
                                                <button class="btn btn-danger"><i class="fa fa fa-car"></i> Sewa Mobil</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-3 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">For Any Support</h5>
                                    <hr>
                                    <h4><i class="ti-mobile"></i> 9998979695 (Toll Free)</h4> <small>Please contact with us if you have any questions. We are avalible 24h.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php
   $this->load->view('users/layout/footer');
   ?>