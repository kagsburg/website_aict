<?php
 include 'includes/conn.php';
   if(!isset($_SESSION['05069'])){
header('Location:login.php');
   }else{
       $id=$_GET['id'];
       $pastors=  mysqli_query($con,"SELECT * FROM pastors WHERE pastor_id='$id'");
         $row=mysqli_fetch_array($pastors);
             $pastor_id=$row['pastor_id'];
             $pastorname=$row['fullnames'];
             $status2=$row['status'];
             $church_id1=$row['church_id'];
              $dob=$row['dob'];
                           $date=$row['start_date'];
                   $wife=$row['wife'];
                $bio=$row['bio'];
                  $username=$row['username'];
                      $leaders=  mysqli_query($con,"SELECT * FROM deptleaders  WHERE username='$username'");
                      if(mysqli_num_rows($leaders)>0){ 
                          $change=  mysqli_query($con,"UPDATE deptleaders SET position='diocese secretary',status='active' WHERE username='$username'") or die(mysqli_error($con));
                      }  else {
       mysqli_query($con,"INSERT INTO deptleaders(fullnames,dob,position,dept_id,church_id,start_date,wife,poster_id,bio,ext,username,password,status)  VALUES('$pastorname','$dob','diocese secretary','0','$church_id1','$date','$wife','".$_SESSION['05069']."','$bio','no','$username','".  md5($password)."','$status2')") or die(mysqli_error($con));
                      }
       mysqli_query($con,"UPDATE registered_users SET occupation='diocese secretary' WHERE username='$username'") or die(mysqli_error($con));
       header('Location:'.$_SERVER['HTTP_REFERER']);
   }