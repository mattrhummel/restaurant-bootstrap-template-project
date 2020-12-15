<?php $title =  "Our Recipes" ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/page-heading.php' ?>
<main id="content">
	<div class="container-fluid py-5 bg-light">
		<div class="row py-5">
			<div class="container">
				<div class="row d-flex flex-column align-items-center">
					<h2 class="text-uppercase font-weight-bold h3">The taste of Japan
					<small class="text-primary text-uppercase font-weight-bold text-center h6 d-block" >How to make</small></h2>
					
					<div class="row d-flex flex-column align-items-center">
						<div class="col-md-8">
							<p class="text-center lead">Simply dummy text of the printing and typesetting industry, lorem Ipsum
							has been the industry's standard dummy text.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php  include 'section-parts/recipe-block.php'; ?>
				<?php  include 'section-parts/recipe-block.php'; ?>
				<?php  include 'section-parts/recipe-block.php'; ?>
				<?php  include 'section-parts/recipe-block.php'; ?>
				<?php  include 'section-parts/recipe-block.php'; ?>
				<?php  include 'section-parts/recipe-block.php'; ?>
				
			</div>
			<div class="row d-flex justify-content-center pb-5">
				<p><a href="" class="btn btn-primary text-uppercase rounded">load more</a></p>
			</div>
		</div>
	</div>
</main>
<?php  include 'includes/callto.php'; ?>
<?php  include 'includes/footer.php'; ?>
<!-- build:js -->