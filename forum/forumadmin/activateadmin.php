<link href="css/bootstrap.min.css" rel="stylesheet">
<?php 
include 'includes/conn.php';
    if((!isset($_SESSION['forum_admin']))||($_SESSION['forumlevel']!=1)){
header('Location:login');
}else{
$id=$_GET['id'];
$st=$_GET['st'];
  if($st==1){
                       mysqli_query($con, "UPDATE forumadmins SET status='0'  WHERE user_id='$id'");    
  }else if($st==0){
         mysqli_query($con, "UPDATE forumadmins SET status='1'  WHERE user_id='$id'");       
  }
                           header('Location:'.$_SERVER['HTTP_REFERER']);           
                       
//               echo '<div class="alert alert-success col-lg-8">Confirmation Message successfully Sent.Click <a href="organisation?id='.$id.'">Here</a> to go back</div>';
}
?>
                             