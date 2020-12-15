<?php $title =  "Contact Us" ?>

<?php include 'includes/header.php' ?>

<?php include 'includes/page-heading.php' ?>
<main id="content">
	<div class="container-fluid bg-light">
		<div class="row py-5">
			<div class="container">
				<div class="row py-5">
					<div class="col-md-6">
						
						<h2 class="text-uppercase font-weight-bold">Let's get together</h2>
						<p class="mb-5 font-weight-bold text-primary text-uppercase">get in touch</p>
						<p>Reservations can be made from two months in advance, up to 5:00pm
						three days before the desired date.</p>
						<p>Simply dummy text of the printing and typesetting industry, lorem Ipsum
						has been the industry's standard dummy text.</p>
						<div class="row py-lg-4">
							<div class="col-lg-6 p-0">
								<div class="col-4 d-inline-block">
									<div class="d-flex justify-content-between">
										<img src="/restaurant-bootstrap-template-project/assets/img/address-icon.svg" alt="..." height="80" width="80">
									</div>
								</div>
								<div class="col-7 d-inline-block no-gutters">
									<h5 class="text-uppercase text-primary font-weight-bold h6">Address</h5>
									<p>7 Saginomiya Nerima<br/>
									Tokyo Japan</p>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="col-4 d-inline-block pl-0">
									<div class="d-flex justify-content-between">
										<img src="/restaurant-bootstrap-template-project/assets/img/phone-icon.svg" alt="..." height="80" width="80">
									</div>
								</div>
								<div class="col-7 d-inline-block no-gutters">
									<h5 class="text-uppercase text-primary font-weight-bold h6">Phone</h5>
									<p>+ 156 879 456 213 <br/>
									+ 156 879 456 468</p>
								</div>
							</div>
						</div>
						<div class="row py-lg-3">
							<div class="col-lg-6 p-0">
								<div class="col-4 d-inline-block">
									<div class="d-flex justify-content-between">
										<img src="/restaurant-bootstrap-template-project/assets/img/email-icon.svg" alt="..." height="80" width="80">
									</div>
								</div>
								<div class="col-7 d-inline-block no-gutters">
									<h5 class="text-uppercase text-primary font-weight-bold h6">Email</h5>
									<p>7 Saginomiya Nerima <br/>
									Tokyo Japan</p>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="col-4 d-inline-block pl-0">
									<div class="d-flex justify-content-between">
										<img src="/restaurant-bootstrap-template-project/assets/img/hours-icon.svg" alt="..." height="80" width="80">
									</div>
								</div>
								<div class="col-7 d-inline-block no-gutters">
									<h5 class="text-uppercase text-primary font-weight-bold h6">Opening Hours</h5>
									
									<p>+ 156 879 456 213 <br/>
									+ 156 879 456 468</p>
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<form action="#" method="post" class="pt-4 pt-md-0">
							<div class="form-group">
								<label for="nameInput" class="text-uppercase">Name</label>
								<input type="text" class="form-control" name="nameInput" id="nameInput" placeholder="FULL NAME">
							</div>
							<div class="form-group">
								<label for="emailInput" class="text-uppercase">Email</label>
								<input type="email" class="form-control" id="emailInput" placeholder="EMAIL ADDRESS">
							</div>
							<div class="form-group">
								<label for="messageInput" class="uppercase">Message</label>
								<textarea id="messageInput" name="messageInput" rows="6" cols="50" class="form-control" placeholder="YOUR MESSAGE">
								</textarea>
							</div>
							<div class="form-group d-flex justify-content-end py-3">
								<input type="submit" value="SEND" class="btn btn-primary rounde">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:300px;">
				<div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=22401&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemap-enabler" rel="nofollow" href="https://sucks.hosting" id="make-mapdata">look</a><style>#embeddedmap-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style>
			</div>
		</div>
			</div>
		</div>
	</main>
	<?php  include 'includes/callto.php'; ?>
	<?php  include 'includes/footer.php'; ?>
	<!-- build:js -->