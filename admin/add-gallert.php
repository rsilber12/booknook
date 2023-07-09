<?php require_once('../config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<style type="text/css">
   .hom{
        background: none;
  }
  .grl{
        background: blue;
        color: white;
        
  }
  .grl hover{
        background: blue;
  }
  .stng{
        background: none;
  }



  .gallery{
    width:100%;
    float:left;
    margin-top:15px;
}
.gallery ul{
    margin:0;
    padding:0;
    list-style-type:none;
}
.gallery ul li{
    padding:7px;
    border:2px solid #ccc;
    float:left;
    margin:10px 7px;
    background:none;
    width:auto;
    height:auto;
}
.gallery img{
    width: 170px;
    height: 170px;
    object-fit: cover;
}

/* notice box */
.notice, .notice a{
    color: #fff !important;
}
.notice {
    z-index: 8888;
    padding: 10px;
    margin-top: 20px;
}
.notice a {
    font-weight: bold;
}
.notice_error {
    background: #E46360;
}
.notice_success {
    background: #657E3F;
}



.gallery ul li .close {
   position: absolute;
    top: 7px;
    right: 7px;
    width: 28px;
    height: 30px;
    background: #da1134;
    color: #fff;
    text-align: center;
    line-height: 29px;
    display: block;
    opacity: 1;
    font-size: 16px;
}

ul, ol, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
</style>
<?php require_once('inc/header.php') ?>
  <body class="layout-fixed layout-footer-fixed text-sm sidebar-mini control-sidebar-slide-open layout-navbar-fixed " data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
     <?php require_once('inc/topBarNav.php') ?>
     <?php require_once('inc/navigation.php') ?>
              
     <?php $page = isset($_GET['page']) ? $_GET['page'] : 'Images';  ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 567.854px;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?php echo ucwords(str_replace("_", " ",$page)) ?></h1>
              </div>
             
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <?php 
              // if(!file_exists($page.".php") && !is_dir($page)){
              //     include '404.html';
              // }else{
              //   if(is_dir($page))
              //     include $page.'/index.php';
              //   else
              //     include $page.'.php';

              // }
            ?>

            <?php
 
// Check if form was submitted
if(isset($_POST['submit'])) {

 	$uploadFolder = 'uploads/';
    foreach ($_FILES['image']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['image']['tmp_name'][$key];
        $imageName = $_FILES['image']['name'][$key];
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$imageName);

        // save to database
        $query = "INSERT INTO images SET img='$imageName' " ;
        $run = $conn->query($query) or die("Error in saving image".$conn->error);
    }
    if ($result) {
        echo '<script>alert_toast("Images uploaded successfully !","success")</script>';
        echo '<script>window.location.href="add-gallert.php";</script>';
    }
  
}
 
?>



            <div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			
	 	<form action="add-gallert.php" method="post" enctype="multipart/form-data" id="uploadded" autocomplete="off" class="form1">
            <div class="form-group row">
                <div class="col-sm-8 col-md-8 p-3">
                <label class="col-sm-12 col-md-12 form-label1 text-left p-0" >  Images:<span class="text-danger">*(Max 5 files are allowed)</span> </label>
                <input type="file" class="form-control border" name="image[]" id="select_file" multiple="multiple" required="" accept="image/*">
                <label id="select_file-error" class="error" for="select_file" style="color: red;"></label>

             <!--  <div class="progress" id="progress_bar" style="display:none; margin-top: 10px; height: 0.5rem; background-color: green;">
              <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%; color: #da1134;"></div>
                  </div> -->

                </div>
                <div class="col-sm-4 col-md-4 mt-sm-5">
                <button type="submit" name="submit" class="btn btn-primary" style="top: 45%;">Upload
                </button>
                </div>
            </div>
      	</form>
			
		</div>
		<div class="card-body">
			<div class="gallery">
        <ul class="reorder_ul reorder-photos-list">
				<?php
				$qry = $conn->query("SELECT * FROM `images` order by `position` ASC");
				while($row= $qry->fetch_assoc()):
					?>
					<li id="<?=$row['id']; ?>" class="ui-sortable-handle position-relative">
            <a href="javascript:void(0);" style="float:none;" class="image_link">
               <img src="uploads/<?php echo $row['img']; ?>" alt="Image" width="150px" height="150px" style="object-fit:scale-down;object-position:center center" class="img-thumbnail">
            </a>
            <button type="button" class="btn btn-danger btn-sm btn-flat close" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['id'] ?>">
            <i class="fa fa-times"></i>
            </button>
          </li>


          <!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle<?php echo $row['id'] ?>">Delete Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are you sure to delete this image ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="delete_service01(<?php echo $row['id'] ?>)">Delete</button>
      </div>
    </div>
  </div>
</div>

						
				<?php endwhile; ?>
			</ul>
		</div>
		</div>
	</div>
</div>


          </div>
        </section>
        <!-- /.content -->
        
  
 
  
      </div>
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>

<?php if($_settings->chk_flashdata('success')): ?>
<script>
  alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
      <script>

function _(element)
{
    return document.getElementById(element);
}

_('select_file').onchange = function(event){

    if ($("#select_file")[0].files.length > 5) {

        // alert("");
        alert_toast("You can select only 5 images",'error')
        location.reload();
    }
    else
    {
      var form_data = new FormData();
      var image_number = 1;
      var error = '';
    for(var count = 0; count < _('select_file').files.length; count++)  
    {
        if(!['image/jpeg', 'image/png', 'image/jpg','image/webp','image/gif'].includes(_('select_file').files[count].type))
        {
            error += '<div class="alert alert-danger"><b>'+image_number+'</b> Selected File must be .jpg or .png Only.</div>';
        }
        else
        {
            form_data.append("images[]", _('select_file').files[count]);
        }

        image_number++;
    }

    if(error != '')
    {
        _('uploaded_image').innerHTML = error;

        _('select_file').value = '';
    }
    else
    {
        _('progress_bar').style.display = 'block';

         var ajax_request = new XMLHttpRequest();

         ajax_request.open("POST", "upload.php");

        ajax_request.upload.addEventListener('progress', function(event){

            var percent_completed = Math.round((event.loaded / event.total) * 100);

            _('progress_bar_process').style.width = percent_completed + '%';

            _('progress_bar_process').innerHTML = percent_completed + '% completed';

        });

        ajax_request.addEventListener('load', function(event){

             _('uploaded_image').innerHTML = '<div class="alert alert-success">Files Uploaded Successfully</div>';

            _('select_file').value = '';

        });

        ajax_request.send(form_data);
    }
  }

};
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){ 
       $(".form1").validate({
        rules: {
          image:{
            required:true,
            extension: "jpg|jpeg|JPEG|JPG|PNG|png|WEBP|webp|gif|GIF",
            filesize : 50000
          }
        }
      });

     });
 </script>




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



<script type="text/javascript">
$(document).ready(function(){
  $( ".reorder-photos-list" ).sortable({                 
        delay: 150,
        tolerance: 'pointer',
        cursor: 'move',
        stop: function() {
            var selectedData = new Array();
            $('.reorder-photos-list>li').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder01(selectedData);
        }
    });

    function updateOrder01(data){
     // alert(data);
        $.ajax({
            url:"ajaxPro.php",
            type:'post',
            data:{data:data},
            success:function(){
                //alert('your change successfully saved');
               alert_toast("Your Change Successfully Saved.","success")
            }
        })
    }
      
});
</script>
<script type="text/javascript">
 function delete_service01($id){
    start_loader()
    $.ajax({
      url:'delete.php',
      type:'POST',
      data:{id:$id},
      success:function(resp){
          alert_toast("Images successfully deleted",'success');
          location.reload();
        end_loader();

      }
    });
  }
</script>
 

    
  </body>
</html>
