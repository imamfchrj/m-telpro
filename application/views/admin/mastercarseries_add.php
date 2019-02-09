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
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Kategori Mobil</label>
                                                    <select class="form-control custom-select" id="category_car_id">
                                                        <option  value="<?=$values->category_car_id?>">--Pilih Kategori Mobil--</option>
                                                        <?php foreach($data_category as $list){ ?>
                                                        <option value="<?=$list->id?>"><?=$list->name?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <small class="form-control-feedback text"> </small> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Brand Mobil</label>
                                                    <select class="form-control custom-select" id="brand_id">
                                                        <option  value="<?=$values->brand_id?>">--Pilih Brand Mobil--</option>
                                                        <?php foreach($data_brand as $list){ ?>
                                                        <option value="<?=$list->id?>"><?=$list->name?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <small class="form-control-feedback text"> </small> </div>
                                            </div>
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Serie Mobil</label>
                                                    <input type="text" id="name_series" class="form-control" value="<?=$values->name_series?>" placeholder="">
                                                    <small class="form-control-feedback name_series-text"> </small> </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Tempat duduk</label>
                                                    <input type="text" id="seat" class="form-control" value="<?=$values->seat?>" placeholder="">
                                                    <small class="form-control-feedback name-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-2">
                                                <div class="form-group has-danger">
                                                    
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="manual" name="is_manual" class="custom-control-input" <?php echo ($values->is_manual==1) ?  "checked": ""; ?>>
                                                        <label class="custom-control-label" for="manual">Manual</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="matic" name="is_manual" class="custom-control-input" <?php echo ($values->is_manual==0) ?  "checked": ""; ?>>
                                                        <label class="custom-control-label" for="matic">Matic</label>
                                                    </div>
                                                    <small class="form-control-feedback level text"> </small> </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <fieldset class="checkbox">
                                                        <label>
                                                <input type="checkbox" <?php if($values->is_airbags) { ?>checked<?php }?> id="is_airbags"> Memiliki Airbag
                                                        </label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <fieldset class="checkbox">
                                                        <label>
                                                <input type="checkbox" <?php if($values->is_ac) { ?>checked<?php }?> id="is_ac"> AC
                                                        </label>
                                                    </fieldset>
                                                </div>
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
                var is_manual;
                var is_airbags=0;
                var is_ac=0;
                if($("#manual:checked").val()){
                    is_manual=1;
                }
                if($("#matic:checked").val()){
                    is_manual=0;
                }
                if($("#is_airbags:checked").val()){
                    is_airbags=1;
                }
                if($("#is_ac:checked").val()){
                    is_ac=1;
                }
                $.ajax({
                    url: ROOT+'admin_ajax/mastercarseries_insert',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        category_car_id: $('#category_car_id').val(),
                        brand_id: $('#brand_id').val(),
                        name_series: $('#name_series').val(),
                        seat: $('#seat').val(),
                        is_manual: is_manual,
                        is_airbags: is_airbags,
                        is_ac: is_ac
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/mastercarseries';
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
                var is_manual;
                var is_airbags=0;
                var is_ac=0;
                if($("#manual:checked").val()){
                    is_manual=1;
                }
                if($("#matic:checked").val()){
                    is_manual=0;
                }
                if($("#is_airbags:checked").val()){
                    is_airbags=1;
                }
                if($("#is_ac:checked").val()){
                    is_ac=1;
                }
                $.ajax({
                    url: ROOT+'admin_ajax/mastercarseries_update',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        category_car_id: $('#category_car_id').val(),
                        brand_id: $('#brand_id').val(),
                        name_series: $('#name_series').val(),
                        seat: $('#seat').val(),
                        is_manual: is_manual,
                        is_airbags: is_airbags,
                        is_ac: is_ac,
                        id:id
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/mastercarseries';
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
                    url: ROOT+'admin_ajax/mastercarseries_delete',
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
                        window.location = ROOT+'admin/mastercarseries';
                    })
                    .always(function(){

                    })
                    .fail(function(data){
                        alert_error("Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                        });
            }
            
            </script>

            <script>
            $("#image-upload").change(function(){
                $('.loader-img').show();
                upload_data(ROOT+'admin/upload_ck',"#image-upload","#image");
            });
            
            function upload_data($url,$name_input,$nameput){
                var myFormData = new FormData();
                myFormData.append('upload',$($name_input).prop('files')[0]);
            
                $.ajax({
                    url: $url,
                    type: 'POST',
                    processData: false, // important
                    contentType: false, // important
                    dataType : 'json',
                    data: myFormData
                }).done(function(data) {
                    $('.loader-img').hide();
                    if(data.uploaded==0){ 
                        alert_error(data.error);
                        return; 
                    }
                    $($nameput).val(data.filename);
            
                })
                .fail(function() {
                    if(tmp){
                        alert_error( "Server tidak merespon. Mohon cek koneksi internet anda.\nServer not responding. Please check your internet connection." );
                        tmp = false;
                    }
                })
                .always(function() {
                    
                }) ;
            }
            </script>

<?php
   $this->load->view('admin/layout/footer');
   ?>