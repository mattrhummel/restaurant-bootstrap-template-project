<?php $title =  "Our Menu" ?>

<?php include 'includes/header.php' ?>

<?php include 'includes/page-heading.php' ?>

<main id="content">
	<div class="container-fluid bg-light">
		<div class="row py-5">
			<div class="container p-5">
				<div class="row">
					<div class="col-lg-6 p-0 d-flex justify-content-center justify-content-lg-start">
						<?php include 'section-parts/menu-filter.php' ?>
					</div>
					<div class="col-lg-4 d-flex justify-content-center  justify-content-lg-end">
						<?php include 'section-parts/menu-sort.php' ?>
					</div>
					<div class="col-lg-2 d-flex justify-content-center  justify-content-lg-end">
						<?php include 'section-parts/menu-view.php' ?>
					</div>
				</div>
				
				<div class="tab-content">
					<div id="all" class="tab-pane active">
						<div class="row py-5">
							<?php  ?>		
							<?php include 'section-parts/menu-list-view.php' ?>
						</div>
					</div>
					<div id="breakfast" class="tab-pane fade">
						<div class="row py-5">						
							<?php include 'section-parts/menu-list-view.php' ?>			</div>
					</div>
					<div id="dinner" class="tab-pane fade">
						<div class="row py-5">
							<?php include 'section-parts/menu-list-view.php' ?>	
						</div>
					</div>
					<div id="lunch" class="tab-pane fade">
						<div class="row py-5">	
							<?php include 'section-parts/menu-list-view.php' ?>
						</div>
					</div>
					<div id="price" class="tab-pane fade">
						<div class="row py-5">	
							<?php include 'section-parts/menu-list-view.php' ?>
						</div>
					</div>
					<div id="popularity" class="tab-pane fade">
						<div class="row py-5">
							<?php include 'section-parts/menu-list-view.php' ?>
						</div>
					</div>
					<div id="grid-view" class="tab-pane fade">
						<div class="row py-5">
							<?php include 'section-parts/menu-grid-view.php' ?>	
						</div>
					</div>
					<div id="list-view" class="tab-pane fade">
						<div class="row py-5">
							<?php include 'section-parts/menu-list-view.php' ?>	
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<p><a href="" class="btn btn-primary text-uppercase rounded">book a table</a></p>
					</div>
				</div>
			</div>
			
		</main>
		<?php  include 'includes/callto.php'; ?>
		<?php  include 'includes/footer.php'; ?>