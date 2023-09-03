 <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<?php
include 'includes/conn.php';
$id=$_GET['id'];
$us=$_GET['us'];
$church=$_GET['ch'];
   if(!isset($_SESSION['05069'])){
header('Location:index.php');
   }else{
       if(!empty($church)){
        
               mysqli_query($con, "UPDATE deptleaders SET church_id='$church'  WHERE deptleader_id='$id'") or die(mysqli_error($con));
               mysqli_query($con, "UPDATE registered_users SET church_id='$church'  WHERE username='$us'") or die(mysqli_error($con));
               echo '<div class="span9"><div class="alert alert-success">Church successfully Changed.Click <a href="deptleaders">Here</a> to go back to Leaders</div></div>';
           }else{
               echo '<div class="span9"><div class="alert alert-danger">Church shouldnt be empty. Click <a href="editdeptleader?id='.$id.'">Here</a> to go back</div></div>';
           
       }
       
   }?>