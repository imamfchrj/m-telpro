<?php
   $this->load->view('admin/layout/header');
   ?>

<div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-title">E-Sales</h4>
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
                              <li class="breadcrumb-item active" aria-current="page">E-Sales</li>
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
               <!-- Row -->
               <div class="row">
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-body">
                           <button type="submit" class="btn btn-info waves-effect waves-light float-right">Hitung</button>
                           <h4 class="card-title">Calculator Sales</h4>
                           <h6 class="card-subtitle">Gunakan kalkulator dibawah untuk menghirung prakiraan harga</h6>
                           <!-- <div class="form-group row m-b-0">
                              <div class="offset-sm-3 col-sm-9 "> -->
                           <!-- </div>
                              </div> -->
                           <form class="form-horizontal p-t-20">
                              <div class="form-group row">
                                 <label for="harga_dasar" class="col-sm-3 control-label">Harga Dasar*</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="harga_dasar" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="delivery" class="col-sm-3 control-label">Delivery</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="delivery" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="accessories" class="col-sm-3 control-label">Aksesoris / Unit</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="accessories" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="repainting" class="col-sm-3 control-label">Repainting</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="repainting" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="izin_percepatan" class="col-sm-3 control-label">Izin Percepatan</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="izin_percepatan" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="garwil" class="col-sm-3 control-label">Garwil</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="garwil" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="diskon" class="col-sm-3 control-label">Diskon</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">Rp</i></span></div>
                                       <input type="number" class="form-control" id="diskon" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="dp" class="col-sm-3 control-label">DP</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="dp" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="tenor" class="col-sm-3 control-label">Tenor (Bulan)</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">m</i></span></div>
                                       <input type="number" class="form-control" id="tenor" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="suku_bunga" class="col-sm-3 control-label">Suku Bunga</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="suku_bunga" placeholder="0">
                                    </div>
                                    <code>Suku Bunga 9.5%</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="residu" class="col-sm-3 control-label">Residu</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="residu" placeholder="0">
                                    </div>
                                    <code>Jika Sewa beli maka nilai residu tidak ada 0%, Untuk sewa murni jenis Avanza residu 65% Jenis Innova 65%</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="maintenance" class="col-sm-3 control-label">Maintenance</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="maintenance" placeholder="0">
                                    </div>
                                    <code>Maintanance jenis unit 4x2 minimal 3% untuk jenis KBM 4x4 minimal maintanance 5%</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="asuransi" class="col-sm-3 control-label">Asuransi</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="asuransi" placeholder="0">
                                    </div>
                                    <code>Asuransi minimal 2.5%</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="gps" class="col-sm-3 control-label">GPS + FMS</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="gps" placeholder="0">
                                    </div>
                                    <code>GPS + FMS Rp. 250.000</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="hse" class="col-sm-3 control-label">HSE</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="hse" placeholder="0">
                                    </div>
                                    <code>HSE 0.5 %</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="profit" class="col-sm-3 control-label">Profit</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="profit" placeholder="0">
                                    </div>
                                    <code>Profit untuk standar sebesar 10% (sewa murni) Profit minimal untuk sewa beli sebesar 5%</code>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="overhead" class="col-sm-3 control-label">Overhead</label>
                                 <div class="col-sm-9">
                                    <div class="input-group">
                                       <div class="input-group-prepend"><span class="input-group-text"><i class="les">%</i></span></div>
                                       <input type="number" class="form-control" id="overhead" placeholder="0">
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="card-title">Output</h4>
                           <h6 class="card-subtitle">Berubah otomatis</h6>
                           <div class="form-horizontal p-t-20">
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Harga Diskon</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">DP</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Residu</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Delivery Total</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Cicilan</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Maintenance</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Asuransi</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Pajak</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">GPS + FMS</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">HSE</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">HPP</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Profit</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Overhead</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Maintenance</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Harga Sewa Perbulan dg Residu (Sebelum PPN 10%)</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="uname" class="col-sm-5 control-label">Harga Sewa Perbulan dg Residu (Sesudah PPN 10%)</label>
                                 <div class="col-sm-5">
                                    <div class="input-group">
                                       Rp 0,00
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Row -->
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

<?php
   $this->load->view('admin/layout/footer');
   ?>