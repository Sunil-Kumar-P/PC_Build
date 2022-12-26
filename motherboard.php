<?php 
    require_once 'includes/header.php';
?>
  <div class="extragap"></div>
  
  <section class="bg-dark text-light">
    <div class="container">
        all our products are certified.
    </div>
  </section>

  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/mb1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/mb1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/mb1.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>


    <div class="container">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam molestias aperiam facere 
        et hic quae facilis deserunt commodi. Dignissimos temporibus 
        incidunt asperiores tenetur, consequatur magni nostrum quaerat velit id quos?</p>
      <h1><mark>$100/-</mark></h1>
    </div>











    <!--buy button-->
    <!-- <div class="container">
    


        <div class="d-grid gap-2 mx-auto">
          <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#reg" type="button">BUY</button>
          <button class="btn btn-light" type="button">CART</button>
        </div>

</div> -->

      <!-- Modal TO BUY -->
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
            <p class="lead">Fill out this form and we will send a otp to confirm the ORDER</p>
            <form>
              <div class="mb-3">
                <label for="name" class="col-form-label">
                  FULL Name:
                </label>
                <input type="text" class="form-control" id="name" />
              </div>
              <div class="mb-3">
                <label for="address" class="col-form-label">Address:</label>
                <input type="text" class="form-control" id="address" />
              </div>
              <div class="mb-3">
                <label for="pin" class="col-form-label">pin code</label>
                <input type="text" class="form-control" id="pin" />
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