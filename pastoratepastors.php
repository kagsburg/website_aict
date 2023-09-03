<?php 
  include 'includes/conn2.php';
  $id=$_GET['p'];
                $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$id' ");
                $row3=mysqli_fetch_array($pastorates);
             $pastorate=$row3['pastorate'];
          
  ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<head>
    <title><?php echo $pastorate; ?> Pastors-AICT</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="All AIC tanzania Pastors,profiles of AIC tanzania Pastors,all you need to know about AIC Pastors">
    <meta name="author" content="">    
    <link rel="icon"   type="image/png"    href="<?php echo BASE_URL;?>/assets/images/favicon.PNG" />   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>    
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/css/prettyPhoto.css">    
      <link href="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.css" rel="stylesheet">
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/styles-red.css">
     <script language="JavaScript" src="<?php echo BASE_URL;?>/js/gen_validatorv4.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body>
<div class="wrapper">
        <!-- ******HEADER****** --> 
  <?php include 'includes/header.php';?>
        <!-- ******HEADER****** --> 
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left"><?php echo $pastorate;?> Pastors</h1>
                    <div class="breadcrumbs pull-right">
                        
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">  
                    
                    <div class="row page-row">                     
                        <div class="team-wrapper col-lg-9">    
                                 <div class="box box-border" style="margin-bottom:20px">
                              <section class="course-finder">
                        <h1 class="section-heading text-highlight" style="font-size: 20px;margin-top:0px"><span class="line">Pastor Quick Search</span></h1>
                        <div class="section-content">
                              <div class="row">
                                  <form class="course-finder-form" action="" name="form" method="POST">
                                    <div class="col-md-4 col-sm-4 keywords">
                                                                                   <select id="filter1" data-placeholder="Choose a pa." class=" form-control subject" >
                                        <option value="" selected="selected">Filter By</option>
                                        <option value="name">Name</option>
                                        <option value="diocese">Diocese</option>
                                        <option value="pastorate">Pastorate</option>
                                        <option value="church">Church</option>
                                                                                                                      </select>
                                    </div> 
                                    <div class="col-md-4 col-sm-4 subject">
                                        <select name="pastorname" id="pastorname" data-placeholder="." class=" form-control subject" >
                                        <option value="" selected="selected">choose Value... </option>
                                            </select>
                                        
                                        <select name="id" id="filtername" data-placeholder="Choose a pastor..."class="form-control subject filterresults" style="display: none" >
                                        <option value="" selected="selected">choose Pastors... </option>
                                        <?php
                                           $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  status='active' ORDER BY pastor_id DESC LIMIT 50");
           if(mysqli_num_rows($pastors)>0)
               {               
                   while ($row=mysqli_fetch_array($pastors)){
//$subject=$row['article_title'];

             $past_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $postorate=$row['postorate_name'];
              $dob=$row['dob'];
               $diocese=$row['diocese'];
                $date=$row['start_date'];     
                                        ?>
                                        <option value="pastor?id=<?php echo $past_id;?>"><?php echo $pastorname;?></option>
                                           <?php }}?>
                                                                                  </select>
                                   <select name="id" id="filterdiocese" data-placeholder="Choose a pastor..."class="form-control subject filterresults" style="display: none" >
                                                          <option value="">Select Diocese..</option>
                                                         <?php 
                                                $dioceses=  mysqli_query($con,"SELECT * FROM dioceses  WHERE status='1' ORDER BY diocese");
                                                                while ($row=mysqli_fetch_array($dioceses)){
$diocese=$row['diocese'];
$status=$row['status'];
             $diocese_id=$row['diocese_id'];
                                            ?>
                                                        <option value="diocesepastors?d=<?php echo $diocese_id; ?>"><?php echo $diocese;?></option>
                                                <?php }?>
                                                    </select>
                                         <select name="id" id="filterpastorate" data-placeholder="Choose a pastor..."class="form-control subject filterresults" style="display: none" >
					<option value="">Select Pastorate ...</option>
				  <?php                        
                               $dioceses=  mysqli_query($con,"SELECT * FROM pastorates  WHERE status='1' ORDER BY pastorate");
                                 while ($row=mysqli_fetch_array($dioceses)){
$pastorate=$row['pastorate'];
$status=$row['status'];
             $pastorate_id=$row['pastorate_id'];
            ?>
            <option value="pastoratepastors?p=<?php echo $pastorate_id; ?>"><?php echo $pastorate; ?></option>
            <?php } ?>					
</select>
                                          <select name="id" id="filterchurch" data-placeholder="Choose a pastor..."class="form-control subject filterresults" style="display: none" >
					<option value="">Select Local Church</option>
				  <?php                        
                                  $churches=  mysqli_query($con,"SELECT * FROM churches ORDER BY church");
                                 while ($row=mysqli_fetch_array($churches)){
$church=$row['church'];
$status=$row['status'];
             $church_id=$row['church_id'];
            ?>
        
            <option value="churchpastors?c=<?php echo $church_id; ?>" class="mine"><?php echo $church; ?></option>
            <?php } ?>					
</select>
                                       
                                    </div> 
                                      
                                    <div class="col-md-1 col-sm-1 keywords">
                                                                               <button type="submit" class="btn btn-theme">Select</button>
                                    </div> 
                                              
                            </form><!--//course-finder-form-->                       
                        
                              
                        </div><!--//section-content-->
                        </div><!--//section-content-->
                    </section>
                    </div>
                            <div class="row page-row" >
                                  <?php
                                  $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE  status='active' ORDER BY pastor_id DESC");
           if(mysqli_num_rows($pastors)>0)
               {
               
                   while ($row=mysqli_fetch_array($pastors)){
//$subject=$row['article_title'];

             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                $ext=$row['ext'];
                $getchurch=  mysqli_query($con,"SELECT * FROM churches WHERE status='1'  AND church_id='$church_id'");
                      $row2=  mysqli_fetch_array($getchurch);
                      $church=$row2['church'];
                      $pastorate_id=$row2['pastorate_id'];
                         $pastorates=  mysqli_query($con,"SELECT * FROM pastorates  WHERE pastorate_id='$pastorate_id' ");
                           $row3=mysqli_fetch_array($pastorates);
             $pastorate=$row3['pastorate'];
             $diocese_id=$row3['diocese_id'];
                           if($id==$pastorate_id){
                        ?>
                            <div class="col-lg-6" style="margin-bottom:10px">
                                <figure class="thumb col-lg-5" style="max-height:120px;overflow: hidden">
                                      <a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <img class="img-responsive" src="<?php echo BASE_URL;?>/leaders/pastors/<?php echo md5($pastor_id).'.'.$ext;?>" alt="Pastor <?php echo $pastorname; ?>" />
                                </a>
                                </figure>
                                <div class="details col-lg-7">
                                    <a href="<?php echo BASE_URL; ?>/pastor/<?php echo $pastor_id.'/'.str_replace(' ','-',$pastorname).'.html';?>">
                                    <h3 class="title">Pastor <?php echo $pastorname; ?></h3></a>
                                    <h4><?php echo $church; ?></h4>
                                  
                                </div>                               
                            </div>
                   <?php }}} ?>
                                
                            </div>
                            
                                                        
                        </div><!--//team-wrapper-->
                      <aside class="page-sidebar  col-lg-3">   
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAICTanzania&amp;width=250&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=462377847232869" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:290px;" allowTransparency="true"></iframe>
                    <section class="testimonials" style="margin-top: 20px">
                        <h1 class="section-heading text-highlight"><span class="line">Bible Quotes</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->
                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">
                                     <?php
                    $verses=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  ORDER BY verse_id DESC");
                           $row=mysqli_fetch_array($verses);
$verse=$row['verse'];
             $id1=$row['verse_id'];
                          $published=$row['published'];
         ?> 
                                   
                 
                     
                                    <div class="item active">
                                        <blockquote class="quote">                                  
                                            <p><i class="fa fa-quote-left"></i><?php echo $verse;  ?></p>
                                        </blockquote>                
                                                                    
                                    </div><!--//item-->
                                       <?php
                    $verses2=  mysqli_query($con,"SELECT * FROM verses WHERE published='published'  AND verse_id!='$id1' ORDER BY verse_id DESC");
                         while($row=mysqli_fetch_array($verses2)){
$verse2=$row['verse'];
             $id2=$row['verse_id'];
                          $published2=$row['published'];
         ?> 
                                    <div class="item">
                                        <blockquote class="quote">
                                            <p><i class="fa fa-quote-left"></i>    <?php echo $verse2;  ?>            </p>
                                        </blockquote>
                                                      
                                    </div><!--//item-->
                                  <?php }?>
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

        <?php include 'includes/footer.php'; ?>
    <!-- Javascript -->          
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
    <script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/main.js"></script>  
      <script src="<?php echo BASE_URL;?>/assets/plugins/chosen/chosen.jquery.js"></script>
    
</body>
  <script>
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
  
 $('#pastorname').click(function() {
        if ( $('#filter1').val() === '') {
        	alert("Please Select a Filter First");
        }     
    });   
    
          $('#filter1').change(function() {
        if ( $(this).val() !== '') {
//       	 $(this).closest("form").attr('action',  $(this).val());
        	 $("#pastorname").hide();
                 $( ".filterresults" ).each(function( index ) {

		        		// console.log(this.id);
		                 $("#"+this.id).hide();
		            

		        });

             $("#filter"+ $('#filter1').val()).show();
            var filterval=$("#filter"+ $('#filter1').val()).show();
         $(".filterresults").change(function() {
        if ( $(this).val() !== '') {
       	 $(this).closest("form").attr('action',  $(this).val());
        }
        });
        }
               else {
       	
             $("#pastorname").show();
                 $( ".filterresults" ).hide();
                
            
                     }
    });
            
              //            frmvalidator.addValidation("repeat","eqelmnt=password", "*The passwords dont match");

        </script>

</html>	

