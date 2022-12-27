<?php 
    require_once 'includes/header.php';
?>


<div class="extragap"></div>
<section class="bg-dark text-light">
    <div class="container">
        all our products are certified.
    </div>
  </section>

<div class="container align-center card-group">
<?php for ($i = 0; $i < 4; $i++) { ?>
  <div class="card gap-2" style="width: 18rem;">
    <img src="img/pc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">laptop title</h5>
      <p class="card-text">some content</p>
      <a href="product_view.php" class="btn btn-primary">view</a>
    </div>
  </div>
  <?php } ?>
</div>

 
<?php require_once 'includes/footer.php';?>


  