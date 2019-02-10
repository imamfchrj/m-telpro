<?php
   $this->load->view('admin/layout/header');
   ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-title">List Berita</h4>
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
                              <li class="breadcrumb-item active" aria-current="page">List Berita</li>
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
                                       <th>Judul</th>
                                       <th>Penulis</th>
                                       <th>Kategori</th>
                                       <th>Tanggal</th>
                                       <th>Publish</th>
                                       <th style="text-align:center">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach($values as $list) {?>
                                    <tr>
                                       <td><?=$list->id?></td>
                                       <td><?=$list->title?></td>
                                       <td><?=$list->writer?></td>
                                       <td><?=$list->category_name?></td>
                                       <td><?=$list->created_at?></td>
                                       <td><?php if($list->is_publish){echo '<span class="label label-info">Publish</span>';}else{echo '<span class="label label-inverse">Draft</span>';}?></td>
                                       <td style="text-align:center"><a href="<?=base_url()?>admin/listberita_add/<?=$list->id?>">Edit</a> </td>
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
                  var lokasitambah=ROOT+'admin/listberita_add';
            </script>

<?php
   $this->load->view('admin/layout/footer');
   ?>