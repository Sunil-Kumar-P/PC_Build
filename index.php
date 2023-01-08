<?php 
    require_once 'includes/header.php';
?>



   <!-- Showcase -->
   <section
   class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
 >
   <div class="container">
     <div class="d-sm-flex align-items-center justify-content-between">
       <div>
         
         <p class="lead my-4 text-light">
           <h3>Want a Better PC? Try Building Your Own.</h3><br>
           Assembling a computer yourself is a good way to learn how they work.
         </p>
         <a href="product.php" class="btn btn-primary btn-lg">CLICK HERE FOR THE LATEST COMBINATIONS!</a>
       </div>
       <img
         class="img-fluid w-50 d-none d-sm-block"
         src="img/pc.jpg"
         alt=""
       />
     </div>
   </div>
 </section>

<!--another-->
 <section class="bg-secondary text-light p-5">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center">
      <h3 class="mb-3 mb-md-0">Latest Offers</h3>

      
    </div>
  </div>
</section>

 <!-- Boxes -->
 <section class="p-5">
   <div class="container">
     <div class="row text-center g-4">
       
  <div class="card" style="width: 18rem;">
    <img src="img/pc2.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PC title</h5>
      <p class="card-text">some content</p>
      <a href="product_view.php" class="btn btn-primary">view</a>
    </div>
  </div>
  
  <div class="card" style="width: 18rem;">
    <img src="img/pc1.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PC title</h5>
      <p class="card-text">some content</p>
      <a href="#" class="btn btn-primary">view</a>
    </div>
  </div>
  
  <div class="card" style="width: 18rem;">
    <img src="img/pc.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PC title</h5>
      <p class="card-text">some content</p>
      <a href="#" class="btn btn-primary">view</a>
    </div>
  </div>
     </div>
   </div>
 </section>
 <!-- MORE Sections -->
 <section id="learn" class="p-5" style="background-color:#F4B746;">
   <div class="container">
     <div class="row align-items-center justify-content-between">
       <div class="col-md">
         <img src="./img/guidebook.png" class="img" alt="" width="700" height="500" />
       </div>
       <div class="col-md p-5">
         <h2>Guide</h2>
         <p class="lead">
           Do what you can, with what you have, where you are
         </p>
         <p>
           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
           reiciendis eius autem eveniet mollitia, at asperiores suscipit
           quae similique laboriosam iste minus placeat odit velit quos,
           nulla architecto amet voluptates?
         </p>
         <a href="guide.php" class="btn btn-light mt-3">
           <i class="bi bi-chevron-right"></i> Read More
         </a>
       </div>
     </div>
   </div>
 </section>

    <?php require_once 'includes/footer.php';?>
