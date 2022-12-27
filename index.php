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
           We focus on our customers fundamental needs and try to make this place as easily accessable as it can.
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
 <section id="learn" class="p-5">
   <div class="container">
     <div class="row align-items-center justify-content-between">
       <div class="col-md">
         <img src="" class="img-responsive" alt="" />
       </div>
       <div class="col-md p-5">
         <h2>Latest DESKTOPS</h2>
         <p class="lead">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Similique deleniti possimus magnam corporis ratione facere!
         </p>
         <p>
           Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque
           reiciendis eius autem eveniet mollitia, at asperiores suscipit
           quae similique laboriosam iste minus placeat odit velit quos,
           nulla architecto amet voluptates?
         </p>
         <a href="#" class="btn btn-light mt-3">
           <i class="bi bi-chevron-right"></i> Read More
         </a>
       </div>
     </div>
   </div>
 </section>

    





    <!-- Modal -->
    <div
      class="modal fade"
      id="reg"
      tabindex="-1"
      aria-labelledby="regLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="regLabel">TO ORDER</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form and we will get back to you</p>
            <form>
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  First Name:
                </label>
                <input type="text" class="form-control" id="first-name" />
              </div>
              <div class="mb-3">
                <label for="last-name" class="col-form-label">Last Name:</label>
                <input type="text" class="form-control" id="last-name" />
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" />
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone:</label>
                <input type="tel" class="form-control" id="phone" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

    


    <?php require_once 'includes/footer.php';?>
