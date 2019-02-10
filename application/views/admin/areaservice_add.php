<?php
   $this->load->view('admin/layout/header');
   ?>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-name">Area Service</h4>
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
                              <li class="breadcrumb-item active" aria-current="page">Area Service</li>
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
                                <h4 class="mb-0 text-white">Tambahkan Area</h4>
                            </div>
                                <div class="card-body">
                                    <h4 class="card-title">Area</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Nama Area</label>
                                                    <input type="text" id="name" class="form-control" value="<?=$values->name?>" placeholder="">
                                                    <small class="form-control-feedback name-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Latitude</label>
                                                    <input type="text" id="map_lat" class="form-control" value="<?=$values->map_lat?>" placeholder="">
                                                    <small class="form-control-feedback map_lat-text"> </small> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Longitude</label>
                                                    <input type="text" id="map_long" class="form-control" value="<?=$values->map_long?>" placeholder="">
                                                    <small class="form-control-feedback map_long-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <button type="" id="save" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                            <button type="" id="hapus" class="btn btn-dark">Hapus</button>
                                        </div>
                                    </div>
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
            var id="<?php if($values){echo $values->id;}else{echo '0';}?>";
            $("#save").click(function(){
                if(id !=0){
                    update();
                }else{
                    insert();
                }
            });
            $("#hapus").click(function(){
                delete_();
            });
            function insert(){
                $.ajax({
                    url: ROOT+'admin_ajax/areaservice_insert',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        map_lat: $('#map_lat').val(),
                        map_long: $('#map_long').val(),
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/areaservice';
                    })
                    .always(function(){

                    })
                    .fail(function(data){
                        alert_error("Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                    });
            }
            function update(){
                if(id==0){
                    alert_error("ID tidak boleh kosong");
                    return;
                }
                $.ajax({
                    url: ROOT+'admin_ajax/areaservice_update',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        map_lat: $('#map_lat').val(),
                        map_long: $('#map_long').val(),
                        id:id
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/areaservice';
                    })
                    .always(function(){

                    })
                    .fail(function(data){
                        alert_error("Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                        });
            }
            function delete_(){
                if(id==0){
                    alert_error("ID tidak boleh kosong");
                    return;
                }
                $.ajax({
                    url: ROOT+'admin_ajax/areaservice_delete',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        id:id
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/areaservice';
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