<?php
   $this->load->view('admin/layout/header');
   ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-title">List Transaksi Mobil</h4>
                     <div class="d-flex align-items-center">
                     </div>
                  </div>
                  <div class="col-7 align-self-center">
                     <div class="d-flex no-block justify-content-end align-items-center">
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item">
                                 <a href="#"></a>
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
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table product-overview" id="zero_config">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Nama Menu</th>
                                       <th>Icon</th>
                                       <th>Path</th>
                                       <th>Level</th>
                                       <th>Parent Id</th>
                                       <th style="text-align:center">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($values as $list) {?>
                                    <tr>
                                       <td><?=$list->id?></td>
                                       <td><?=$list->name?></td>
                                       <td><?=$list->icon?></td>
                                       <td><?=$list->path?></td>
                                       <td><?=($list->level==1)? "Menu Utama":"Sub Menu";?></td>
                                       <td><?=$list->parent_id?></td>
                                       <td style="text-align:center"><a href="<?=base_url()?>admin/mastermenu_add/<?=$list->id?>">Edit</a></td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Column -->
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
            <script>
                  var lokasitambah=ROOT+'admin/mastermenu_add';
            </script>

<?php
   $this->load->view('admin/layout/footer');
   ?>