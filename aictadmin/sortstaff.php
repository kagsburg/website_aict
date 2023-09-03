<?php
include 'includes/conn.php';
  if(!isset($_SESSION['05069'])){
header('Location:leaderlogin.php');
   }
    $id=$_GET['id'];
     $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE diocese_id='$id'");
                                                     $row = mysqli_fetch_array($dioceses);
                                                          $dept_id=$row['diocese_id'];
                                                          $diocese=$row['diocese'];
   ?>
<!DOCTYPE html>
<html>	
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

                <link rel="icon"   type="image/png"    href="assets/images/fav.png" />

		<title>Sort Diocese Staff- Aic Admin</title>
                <script src="ckeditor/ckeditor.js"></script>
      <link rel="stylesheet" href="ckeditor/samples/sample.css">
 <link rel="stylesheet" href="assets/base/jquery.ui.all.css">
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 100%;}
	#sortable li { margin: 0 3px 3px 3px;padding: 1em; padding-left: 1.5em; font-size: 12px; height: 36px;color:#000  }
	#sortable li span { position: absolute; margin-left: -1.3em; }
	</style>


        <script src="assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">
<?php include 'includes/header.php';?>
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
				<div class="container">
					  <div class="row">
                            <div class="col-sm-12">
                               
                                <h4 class="page-title"><?php echo $diocese; ?></h4>
                            </div>
                        </div>


                        <div class="row">
                                      <div class="col-sm-10">
                                          
                                <div class="card-box table-responsive">
                                    <div class="dropdown pull-right">
                                        <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                        </a>
                                    
                                    </div>

                                 

                  
               <h4>Sort Staff Members</h4>  
                         <table  class="table table-responsive table-bordered">
                                
                                <ul id="sortable">
                                <?php
       $leaders=  mysqli_query($con,"SELECT * FROM diocesestaff WHERE diocese_id='$id' AND status=1 ORDER BY level");
                               while ($row=mysqli_fetch_array($leaders)){

             $diocesestaff_id=$row['diocesestaff_id'];
             $fullname=$row['fullnames'];
             $gender=$row['gender'];
             $phone=$row['phone'];
             $position=$row['position'];
             $level=$row['level'];
              
                                 
                     echo '<li class="ui-state-default" id="item_'. $diocesestaff_id.'"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>#'.$level.' '.$fullname.' ('.$position.')</li>';
            }       
                                
            ?>
                    </tbody>   
           </table>
                                    
                                </div>
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                </div> <!-- content -->

            </div>
      

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
<!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/pages/jquery.datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
 <script src="assets/ui/jquery.ui.core.js"></script>
	<script src="assets/ui/jquery.ui.widget.js"></script>
	<script src="assets/ui/jquery.ui.mouse.js"></script>
	<script src="assets/ui/jquery.ui.sortable.js"></script>
        <script type="text/javascript">
          $(function() {
    
    $("#sortable").sortable({stop:function(i) {
 $.ajax({
 type: "GET",
 url: "sort.php",
 data: $("#sortable").sortable("serialize"),
 beforeSend: function() 
			{
				$("#area").html('<img src="img/loading2.gif" >');
			},
			success: function(response)
			{
				$("#area").hide().fadeIn('slow').html(response);
			}
 });
    }
     });
       });
        </script>


	</body>

</html>