<?php
   $this->load->view('admin/layout/header');
   ?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/libs/ckeditor/samples/css/samples.css">
    <script src="<?=base_url()?>assets/admin/assets/libs/ckeditor/ckeditor.js"></script>
    <!-- <script src="<?=base_url()?>assets/admin/assets/libs/ckeditor/samples/js/sample.js"></script> -->


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               <div class="row">
                  <div class="col-5 align-self-center">
                     <h4 class="page-name">Master Menu</h4>
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
                                <h4 class="mb-0 text-white">Tambahkan Menu</h4>
                            </div>
                                <div class="card-body">
                                    <h4 class="card-title">Master Menu</h4>
                                </div>
                                <hr>
                                <div class="form-body">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Judul</label>
                                                    <input type="text" id="title" class="form-control" value="<?=$values->title?>" placeholder="">
                                                    <small class="form-control-feedback title-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Thumbnail</label>
                                                    <input type="file" class="form-control" id="thumbnail-upload" >
                                                    <input type="hidden" class="form-control" id="thumbnail" >
                                                    <small class="form-control-feedback icon text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <div class="row pt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Penulis</label>
                                                    <input type="text" id="writer" class="form-control" value="<?=$values->writer?>" placeholder="">
                                                    <small class="form-control-feedback writer-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Tag</label>
                                                    <input type="text" id="tag" class="form-control" value="<?php if($values->tag){echo $values->tag;}else{echo "telkom property, sewa mobil, perusahaan sewa mobil";}?>">
                                                    <small class="form-control-feedback icon tag-text"> </small> </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row ">
                                            <div class="col-md-8">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Kategori</label>
                                                    <select class="form-control custom-select" id="role">
                                                        <option  value="<?=$values->role?>">--Pilih kategori--</option>
                                                        <?php foreach($data_kategori as $list){ ?>
                                                        <option value="<?=$list->id?>"><?=$list->category?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <small class="form-control-feedback text"> </small> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Publish</label>
                                                    <select class="form-control custom-select" id="role">
                                                        <option  value="1">Publish</option>
                                                        <option  value="0">Simpan Dulu</option>
                                                    </select>
                                                    <small class="form-control-feedback text"> </small> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Isi Berita</label>
                                                    <small class="form-control-feedback text"> </small> </div>
                                                    <textarea name="ckeditor" id="ckeditor" cols="50" rows="15" class="ckeditor">

                                                    </textarea>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <div class="card-body">
                                            <!-- <button type="" id="preview" class="btn btn-default">Preview</button> -->
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
                if($('#password').val() != $('#confirm-password').val()){
                    alert_error('Konfirmasi Password Salah');
                    return;
                }
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
                var levelmenu=0;
                if($("#levelmenu1:checked").val()){
                    levelmenu=1;
                }
                if($("#levelmenu2:checked").val()){
                    levelmenu=2;
                }
                $.ajax({
                    url: ROOT+'admin_ajax/adminlist_insert',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        role: $('#role').val(),
                    }
                })
                    .done(function(data) {
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        window.location = ROOT+'admin/adminlist';
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
                    url: ROOT+'admin_ajax/adminlist_update',
                    dataType: 'json',
                    type: 'post',
                    data: {
                        name: $('#name').val(),
                        email: $('#email').val(),
                        password: $('#password').val(),
                        role: $('#role').val(),
                        id:id
                    }
                })
                    .done(function(data) {
                        console.log(data);
                        if(data.is_error){
                            alert_error(data.error_message);
                            return;
                        }
                        // window.location = ROOT+'admin/adminlist';
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
                    url: ROOT+'admin_ajax/adminlist_delete',
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
                        window.location = ROOT+'admin/adminlist';
                    })
                    .always(function(){

                    })
                    .fail(function(data){
                        alert_error("Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                        });
            }
            
            </script>
            <script>
            
            CKEDITOR.replace( 'ckeditor', {
                filebrowserUploadUrl: "<?=base_url()?>admin/upload_ck",
                
            } );
            </script>

<?php
   $this->load->view('admin/layout/footer');
   ?>