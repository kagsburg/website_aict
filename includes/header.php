        

        		<!-- Header -->
		<header class="container">
			<div class="col-md-6">
				<div class="nav-left">
					<ul>
						<li class="has-sub-mega">
							<a href="#">About us</a>
							<div class="mega-menu">
								<div class="col-md-9 m1">
									<h4>About Africa Inland Church Tanzania</h4>
									<p>Africa Inland Church Tanzania, was born at Nassa village, Mwanza in 1909. 
    Earlier in 1887 missionaries from Church Missionary Society(CMS) had arrived at Nassa Village to open a church.
    For more than twenty years CMA missionaries had served in the Lake zone of Tanzania (than Tanganyika) opening churches.</p>
    <p>For some reasons they decided to move to Uganda but they did not want to desert the young congregation. They looked for someone to carry on the work from where they had reached.</p>
									<div class="space30"></div>
									<a class="menu-btn" href="<?php echo BASE_URL;?>/aboutus">Learn more</a>
								</div>
								<div class="col-md-4 m2">
									<h5>About Us</h5>
									<a href="<?php echo BASE_URL;?>/aboutus">Our Mission</a>
									<a href="<?php echo BASE_URL;?>/aboutus">Our Vision</a>
									<div class="space25"></div>									
								</div>
								<div class="col-md-3 m3">
									<!-- <img src="demo/8.jpg" class="img-responsive" alt=""/> -->
									<div class="space40"></div>
									<h6>Connect with us</h6>
									<div class="m-social">
										<a href=" https://www.facebook.com/AICTanzania" target="_blank"><i class="fa fa-facebook"></i></a>
										<a href="https://www.youtube.com/@africainlandchurchtanzania2004" target="_blank"><i class="fa fa-youtube"></i></a>
										<a href="https://www.instagram.com/africainlandchurch/" target="_blank"><i class="fa fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</li>
						<li class="has-sub-mega">
							<a href="#">Administration</a>
							<div class="mega-menu mega-menu1">
								<div class="col-md-4 m2">
								<h5>Dioceses</h5>
                                    <?php
                                   $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE status=1");
                                   while ($row = mysqli_fetch_array($dioceses)){
                                                          $diocese_id1=$row['diocese_id'];
                                                          $diocese1=$row['diocese'];
   ?>
                                <a href="<?php echo BASE_URL; ?>/diocese/<?php echo $diocese_id1.'/'.str_replace(' ','-',$diocese1).'.html';?>"><?php echo $diocese1; ?></a>
                                   <?php } ?>
								</div>
								<div class="col-md-4 m2">
									
									<div class="space25"></div>
									<h5>Departments</h5>
                                    <?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
                                                $dept=$row['department'];
                                                $status=$row['status'];
                                                            $dept_id=$row['department_id'];
                                            ?>
                                                <a href="<?php echo BASE_URL; ?>/dept/<?php echo $dept_id.'/'.str_replace(' ','-',$dept).'.html';?>"><?php echo $dept; ?> </a>        
                                                <?php }?>
                                 
									<div class="space25"></div>
									
								</div>
								<div class="col-md-3 m3 m2">
									<h5>Leaders</h5>
									<a href="<?php echo BASE_URL;?>/bishops">Bishops</a>
                                    <a href="<?php echo BASE_URL;?>/pastors">Pastors</a>
                                    <a href="<?php echo BASE_URL;?>/deptleaders">Department Leaders</a>
                                    <a href="<?php echo BASE_URL;?>/secretaries">Secretaries</a>
									<div class="space25"></div>
									
									<!--<a href="./stories.html">Stories View</a>
									<a href="./stories-single.html">Single Story</a> -->
								</div>
								<div class="col-md-3 m3 m2">
								<h5>ACCOUNT</h5>
								<h5><a href="<?php echo BASE_URL;?>/login">LOGIN</a></h5>
									 <h5><a href="<?php echo BASE_URL;?>/register">Sign UP</a></h5>
								</div>
							</div>
						</li>
						<li>
							<a href="<?php echo BASE_URL;?>/event_s">Events</a>
							
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="logo">
					<a href="<?php echo BASE_URL;?>"><img id="logo" src="<?php echo BASE_URL;?>/images/aictlogo2.png" alt="aictanzania.org logo"></a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="nav-right">
					<ul>
					<li class="has-sub">
							<a href="#">Updates </a>
							<div class="subpage">
                                <a href="<?php echo BASE_URL;?>/gallery">Gallery</a>
                                <a href="<?php echo BASE_URL;?>/news">News</a>
                                
                                <!-- <li><a href="<?php echo BASE_URL;?>/media"><i class="fa fa-envelope"></i> Private Messaging</a></li> -->
							</div>
						</li>
						<li class="has-sub">
							<a href="#">Media</a>
							<div class="subpage">
							<a href="http://www.aictanzania.org/forum/ " target="_blank">Forum</a>
							<a href="<?php echo BASE_URL;?>/audios"><i class="fa fa-music"></i> Audios</a>
                                <a href="<?php echo BASE_URL;?>/videos"><i class="fa fa-video-camera"></i> Videos</a>
                                <!-- <a href="<?php echo BASE_URL;?>/sponsorchildren">Sponsor a Child</a>
                                <a href="<?php echo BASE_URL;?>/managementservices">Management services</a>
                                <a href="<?php echo BASE_URL;?>/events/services.html">Services</a> -->
							</div>
						</li>
						<li><a href="<?php echo BASE_URL;?>/contacts">Contact</a></li>
					</ul>
				</div>
			</div>
		</header>
		<!-- Header -->

		<div class="nav-left nav-mobile">
			<ul class="nav-mobile-ul">
				<li class="has-sub-mega">
					<!-- <a href="#">About us</a> -->
						<div class="mega-menu">
						<div class="col-md-9 m1">
								<h4>About Africa Inland Church Tanzania</h4>
								<p>Africa Inland Church Tanzania, was born at Nassa village, Mwanza in 1909. 
    Earlier in 1887 missionaries from Church Missionary Society(CMS) had arrived at Nassa Village to open a church.
    For more than twenty years CMA missionaries had served in the Lake zone of Tanzania (than Tanganyika) opening churches.</p>
    <p>For some reasons they decided to move to Uganda but they did not want to desert the young congregation. They looked for someone to carry on the work from where they had reached.</p>
									<div class="space30"></div>
									<a class="menu-btn" href="<?php echo BASE_URL;?>/aboutus">Learn more</a>
							</div>
							<div class="col-md-4 m2">
                                <!-- <h5>About Us</h5> -->
									<a href="<?php echo BASE_URL;?>/aboutus">About Us </a>
									<!-- <a href="<?php echo BASE_URL;?>/aboutus">Our Vision</a> -->
								<div class="space25"></div>
								
							</div>
							<div class="col-md-3 m3">
								<h5>ACCOUNT</h5>
								<a href="<?php echo BASE_URL;?>/login">Login (Account)</a>
								<a href="<?php echo BASE_URL;?>/register">Sign UP (Account)</a>
								</div>
						</div>
					</li>
					<li class="has-sub-mega">
						<!-- <a href="#">Administration</a> -->
						<div class="mega-menu mega-menu1">
							<!-- <div class="col-md-9 m1">
								<img src="demo/9.jpg" class="img-responsive" alt=""/>
							</div> -->
							<div class="col-md-4 m2">
								<h5>Dioceses</h5>
                                <?php
                                   $dioceses=  mysqli_query($con,"SELECT * FROM dioceses WHERE status=1");
                                   while ($row = mysqli_fetch_array($dioceses)){
                                                          $diocese_id1=$row['diocese_id'];
                                                          $diocese1=$row['diocese'];
   ?>
                                <a href="<?php echo BASE_URL; ?>/diocese/<?php echo $diocese_id1.'/'.str_replace(' ','-',$diocese1).'.html';?>"><?php echo $diocese1; ?> (Diocese)</a>
                                   <?php } ?>
								<div class="space25"></div>
								<h5>Departments</h5>
								<?php 
                                                $depts=  mysqli_query($con,"SELECT * FROM departments  WHERE status='1' ORDER BY department");
                                                                while ($row=mysqli_fetch_array($depts)){
                                                $dept=$row['department'];
                                                $status=$row['status'];
                                                            $dept_id=$row['department_id'];
                                            ?>
                                                <a href="<?php echo BASE_URL; ?>/dept/<?php echo $dept_id.'/'.str_replace(' ','-',$dept).'.html';?>"><?php echo $dept; ?> (Department)</a>        
                                                <?php }?>
								<div class="space25"></div>
							</div>
							<div class="col-md-3 m3 m2">
								<h5>Leaders</h5>
								    <a href="<?php echo BASE_URL;?>/bishops">Bishops</a>
                                    <a href="<?php echo BASE_URL;?>/pastors">Pastors</a>
                                    <a href="<?php echo BASE_URL;?>/deptleaders">Department Leaders</a>
                                    <a href="<?php echo BASE_URL;?>/secretaries">Secretaries</a>
								<div class="space25"></div>
								
							</div>
						</div>
					</li>
					<li>
							<a href="<?php echo BASE_URL;?>/event_s">Events</a>
							
						</li>
					<li class="has-sub">
							<a href="#">Updates </a>
							<div class="subpage">
                                <a href="<?php echo BASE_URL;?>/gallery">Gallery</a>
                                <a href="<?php echo BASE_URL;?>/news">News</a>
                                
                                <!-- <li><a href="<?php echo BASE_URL;?>/media"><i class="fa fa-envelope"></i> Private Messaging</a></li> -->
							</div>
						</li>
						<li class="has-sub">
							<a href="#">Media</a>
							<div class="subpage">
							<a href="http://www.aictanzania.org/forum/ " target="_blank">Forum</a>
							<a href="<?php echo BASE_URL;?>/audios"><i class="fa fa-music"></i> Audios</a>
                                <a href="<?php echo BASE_URL;?>/videos"><i class="fa fa-video-camera"></i> Videos</a>
                                <!-- <a href="<?php echo BASE_URL;?>/sponsorchildren">Sponsor a Child</a>
                                <a href="<?php echo BASE_URL;?>/managementservices">Management services</a>
                                <a href="<?php echo BASE_URL;?>/events/services.html">Services</a> -->
							</div>
						</li>
						<li><a href="<?php echo BASE_URL;?>/contacts">Contact</a></li>
				</ul>
			</div>