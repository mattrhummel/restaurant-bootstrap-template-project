<?php $title =  "Our News" ?>
<?php include 'includes/header.php' ?>
<?php include 'includes/page-heading.php' ?>
<main id="content">
  <!-- Latest Post Section -->
  <div class="container-fluid bg-light">
    <div class="row p-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 p-0 d-flex justify-content-center d-md-block">
            <?php include 'section-parts/blog-filter.php' ?>        
          </div>
        </div>
        <div class="row py-5">
          <div class="tab-content">
            <div id="all" class="tab-pane active">
              <div class="row">
                <?php include 'section-parts/blog-post-card.php' ?>
              </div>
            </div>
            <div id="food" class="tab-pane fade">
              <div class="row">
                <?php include 'section-parts/blog-post-card.php' ?>
              </div>
            </div>
            <div id="lifestyle" class="tab-pane fade">
              <div class="row">
                <?php include 'section-parts/blog-post-card.php' ?>
              </div>
            </div>
            <div id="recipes" class="tab-pane fade">
              <div class="row">
                <?php include 'section-parts/blog-post-card.php' ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <p><a href="" class="btn btn-primary text-uppercase rounded">load more</a></p>
        </div>
      </div>
    </div>
    <!-- .latest-post-section -->
  </main>
  <?php  include 'includes/callto.php'; ?>
  <?php  include 'includes/footer.php'; ?>
  <!-- build:js -->