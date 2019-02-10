<?php
   $this->load->view('admin/layout/header');
   ?>


<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
<!-- <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/assets/libs/ckeditor/samples/css/samples.css"> -->
<script src="<?=base_url()?>assets/admin/assets/libs/ckeditor/ckeditor.js"></script>
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-5 align-self-center">
         <h4 class="page-name">Kategori Berita</h4>
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
                  <li class="breadcrumb-item active" aria-current="page">Kategori Berita</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>


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
                           <small class="form-control-feedback title-text"> </small> 
                        </div>
                     </div>
                     <!--/span-->
                     <div class="col-md-6">
                        <div class="form-group has-danger">
                           <label class="control-label">Thumbnail</label>
                           <input type="file" class="form-control" name="upload" id="thumbnail-upload" >
                           <input type="hidden" class="form-control" id="thumbnail" value="<?=$values->thumbnail?>">
                           <img class="loader loader-img" src="<?=base_url()?>images/loading-preloader.gif"/>
                           <small class="form-control-feedback icon thumbnail-text"> </small> 
                        </div>
                     </div>
                     <!--/span-->
                  </div>
                  <div class="row pt-3">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="control-label">Penulis</label>
                           <input type="text" id="writer" class="form-control" value="<?=$values->writer?>" placeholder="">
                           <small class="form-control-feedback writer-text"> </small> 
                        </div>
                     </div>
                     <!--/span-->
                     <div class="col-md-6">
                        <div class="form-group has-danger">
                           <label class="control-label">Tag</label>
                           <input type="text" id="tag" class="form-control" value="<?php if($values->tag){echo $values->tag;}else{echo "telkom property, sewa mobil, perusahaan sewa mobil";}?>">
                           <small class="form-control-feedback icon tag-text"> </small> 
                        </div>
                     </div>
                     <!--/span-->
                  </div>
                  <!--/row-->
                  <div class="row pt-3 ">
                     <div class="col-md-8">
                        <div class="form-group has-danger">
                           <label class="control-label">Kategori</label>
                           <select class="form-control custom-select" id="category_id">
                              <option  value="<?=$values->category_id?>">--Pilih kategori--</option>
                              <?php foreach($kategoriberita as $list){ ?>
                              <option value="<?=$list->id?>"><?=$list->category_name?></option>
                              <?php } ?>
                           </select>
                           <small class="form-control-feedback text"> </small> 
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group has-danger">
                           <label class="control-label">Publish</label>
                           <select class="form-control custom-select" id="is_publish">
                              <option  value="1">Publish</option>
                              <option  value="0">Draft</option>
                           </select>
                           <small class="form-control-feedback text"> </small> 
                        </div>
                     </div>
                     <!--/span-->
                  </div>
                  <!--/row pt-3-->
                  <div class="row pt-3 ">
                     <div class="col-md-12">
                        <div class="form-group has-danger">
                           <label class="control-label">Isi Berita</label>
                           <small class="form-control-feedback text"> </small> 
                        </div>
                        <textarea name="ckeditor" id="ckeditor" cols="50" rows="15" class="ckeditor"><?=$values->news_text?></textarea>
                     </div>
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
                  <img class="loader loader-save" src="<?=base_url()?>images/loading-preloader.gif"/>
                  <button type="" id="hapus" class="btn btn-dark">Hapus</button>
               </div>
            </div>
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
<script>
   var id="<?php if($values){echo $values->id;}else{echo '0';}?>";
   $("#save").click(function(){
       if($('#password').val() != $('#confirm-password').val()){
           alert_error('Konfirmasi Password Salah');
           return;
       }
   
       $('.loader-img').show();
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
           url: ROOT+'admin_ajax/listberita_insert',
           dataType: 'json',
           type: 'post',
           data: {
               title: $('#title').val(),
               thumbnail: $('#thumbnail').val(),
               writer: $('#writer').val(),
               tag: $('#tag').val(),
               is_publish: $('#is_publish').val(),
               category_id: $('#category_id').val(),
               news_text: CKEDITOR.instances.ckeditor.getData()
           }
       })
       .done(function(data) {
               $('.loader-img').hide();                      
               if(data.is_error){
                   alert_error(data.error_message);
                   return;
               }
               window.location = ROOT+'admin/listberita';
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
           url: ROOT+'admin_ajax/listberita_update',
           dataType: 'json',
           type: 'post',
           data: {
               title: $('#title').val(),
               thumbnail: $('#thumbnail').val(),
               writer: $('#writer').val(),
               tag: $('#tag').val(),
               is_publish: $('#is_publish').val(),
               category_id: $('#category_id').val(),
               news_text: CKEDITOR.instances.ckeditor.getData(),
               id:id
           }
       })
           .done(function(data) {
               $('.loader-img').hide();
               if(data.is_error){
                   alert_error(data.error_message);
                   return;
               }
               window.location = ROOT+'admin/listberita';
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
           url: ROOT+'admin_ajax/listberita_delete',
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
               window.location = ROOT+'admin/listberita';
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
<script>
   $("#thumbnail-upload").change(function(){
       $('.loader-img').show();
       upload_data(ROOT+'admin/upload_ck',"#thumbnail-upload","#thumbnail");
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