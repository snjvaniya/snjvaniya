
<!-- login -->
<div class="modal fade" id="siModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">
                    Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal" method="POST" action="process_login.php">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="email1" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            
                        </div>
                       <br>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- login -->



<!-- register -->





<div class="modal fade" id="suModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">
                    Sign Up</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <!-- <ul class="nav nav-tabs">
                            
                            <li class="active"><a href="#Registration" data-toggle="tab">Registration</a></li>
						</ul> -->
						<br>
                        <!-- Tab panes -->
                        <div class="tab-content">
                           
                            <div class="tab-pane active" id="Registration">
                                <form role="form" class="form-horizontal" method="POST" action="process_register.php">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control" name="ma" id="ma">
                                                    <option value="Mr." name="Mr">Mr.</option>
                                                    <option value="Ms." name="Ms">Ms.</option>
                                                    <option value="Mrs." name="Mrs">Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" name="name" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            Submit</button>
                                        <button type="reset" class="btn btn-default btn-sm">
                                            Reset</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                       <br>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- register -->



<!--Header-->

<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php" style="text-shadow: -1px -1px 1px rgba(255,255,255,.1), 1px 1px 1px rgba(0,0,0,.5), 15px 4px 20px #FFBF00;">
					<!-- <img width="190px" height="66px" src="blogadmin/images/<?php geticon("titles"); ?>"/>	<i class="fab fa-linode"></i> -->&nbsp;&nbsp;SNJVANIYA</a> 
				</div>
				
				<div class="col-md-5 log-icons text-center">

					<ul class="social_list1 mt-3">

						<li>
							<a href="<?php getlinks("links","facebook");?>" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","twitter");?>" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","dribble");?>" class="dribble3 mx-2">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
						<li>
							<a href="<?php getlinks("links","pinterest");?>" class="pin">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span></span>
                    <?php if(isset($_SESSION['name'])){?>
					<span class="mx-lg-4 mx-md-2  mx-1">
                    
						<a href="#">
							<i class="fas fa-lock"></i> <strong><?php echo $_SESSION['name']; ?></strong></a>
					</span>
					<span>
						<a href="logout.php">
							<i class="far fa-user"></i> <strong>Logout</strong></a>
                            
					</span>
                    <?php }else{?>
                        <span class="mx-lg-4 mx-md-2  mx-1">
                    
                    <a href="#" data-toggle="modal" data-target="#siModal">
                        <i class="fas fa-lock"></i> <strong>Login</strong></a>
                    </span>
                    <span>
                    <a href="#" data-toggle="modal" data-target="#suModal">
                        <i class="far fa-user"></i> <strong>Register</strong></a>
                        
                </span>
                <?php } ?>
				</div>
			</div>
		</div>

			<div class="header_top" id="home">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
									Blog
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"></a>
									<?php getcategoriesmenu("blog_categories"); ?>
								</div>
							</li>
							
							
							<li class="nav-item">
								<a class="nav-link" href="under.php">DonateBlood</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="under.php">Job</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="bulkemail.php">BulkEmail</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a></li>
								
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About</a>
							</li>

						</ul>
							<form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form">
								<input class="form-control mr-sm-2" type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
    <br>
	<!--//header-->