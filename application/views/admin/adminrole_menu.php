<?php
   $this->load->view('admin/layout/header');
   ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-name">Admin Menu</h4>
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
                              <li class="breadcrumb-item active" aria-current="page">Master Menu</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Setting Menu</h4>
                            </div>
                                <div class="card-body">
                                    <h4 class="card-title">Setting Menu</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Role</label>
                                                    <input type="text" id="role" class="form-control" value="<?=$values->role?>" placeholder="" disabled>
                                                    <small class="form-control-feedback name-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Menu</label>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>

                                        <div class="row pt-3">
                                        <?php foreach($menu as $list){ ?>
                                            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <fieldset class="checkbox">
                                                        <label>
                                        <input type="checkbox" <?php if(in_array($list->id,$menu_user)) { ?>checked<?php }?> id="settingmenu<?=$list->id?>" onchange="settingmenu('<?=$list->id?>')"> <?=$list->name?>
                                                        </label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        <?php } ?>
                                        </div>
                                    </div>
                                    <!-- <hr> -->
                                    <!-- <div class="form-actions">
                                        <div class="card-body">
                                            <button type="" id="save" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            <button type="" id="hapus" class="btn btn-dark">Hapus</button>
                                        </div>
                                    </div> -->
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

            <script>
            function settingmenu($id_menu){
                console.log($id_menu);
                var value=0;
                if($("#settingmenu"+$id_menu+":checked").val()){
                    value=1;
                }
                $.ajax({
                    url: ROOT+'/admin_ajax/adminrole_menu',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        idmenu: $id_menu,
                        value: value,
                        id:<?=$values->id?>
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                    })
                    .always(function(){

                    })
                    .fail(function(data){
                        alert_error("Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                    });
            }
            </script>

<?php
   $this->load->view('admin/layout/footer');
   ?>