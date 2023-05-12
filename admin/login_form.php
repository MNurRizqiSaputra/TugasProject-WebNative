<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- ini dari login.html yang ada di frontend-->
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>LOGIN</h3>
						<form class="row login_form" method="POST" action="./admin/membercontroller.php" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Masukan username anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan username anda'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Masukan password anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan password anda'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->
<!-- <section class="col-lg-6">
<form method="POST" action="./admin/membercontroller.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="text" name="username" type="text" class="form-control" placeholder="Masukan username anda">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="text1" name="password" type="password" class="form-control" placeholder="Masukan password anda">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</section> -->