<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PC BUILD</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css" />
  <title>PC BUILD</title>

  <style>
    .extragap {
      margin-top: 5.1%;
    }

    a {
      text-decoration: none;
    }
    
    .extragap1 {
      background-color:black;
      margin-top: 5%;
    }

    p {
      color: black;
    }


  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">PC BUILD</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">

          <li class="nav-item">
            <a href="index.php" class="nav-link">HOME</a>
          </li>
          <li class="nav-item">
            <a href="product.php" class="nav-link">BUILD</a>
          </li>
          <li class="nav-item">
            <a href="question.php" class="nav-link">QUESTIONS</a>
          </li>
          <!-- <li class="nav-item">
            <a href="about.php" class="nav-link">ABOUT US</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

<div class="extragap"></div>
    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
          <h2 class="text-center mb-4">Frequently Asked Questions</h2>
          <div class="accordion accordion-flush" id="questions">
            <!-- Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-one"
                >
                  Where exactly are you located?
                </button>
              </h2>
              <div
                id="question-one"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                   CMR Institute of Technology.
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-two"
                >
                  How much does it cost to build a PC?
                </button>
              </h2>
              <div
                id="question-two"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  It depends on how much performance is required the price also will Increase
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-three"
                >
                  What do I need to Know?
                </button>
              </h2>
              <div
                id="question-three"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  Basic Knowledge of Computer Fundamentals and must be able to Identfy individual components of Computer.
                </div>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button
                  class="accordion-button collapsed"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#question-four"
                >
                  How Do I Build?
                </button>
              </h2>
              <div
                id="question-four"
                class="accordion-collapse collapse"
                data-bs-parent="#questions"
              >
                <div class="accordion-body">
                  You can follow the Slides or can watch the videos linked. 
                </div>
              </div>
            </div>
            <!-- Item 5 -->
            
          </div>
        </div>
      </section>
  



  
<section class="bg-secondary extragap">
</section>
<footer class="p-5 bg-dark text-light text-center position-relative bottom-0 end-0">

  <div class="container">
    <p class="lead text-light">Copyright &copy; 2022-23 <br> DBMS MINI PROJECT</p>

    <a href="#" class="position-absolute bottom-0 end-0 p-5">
      <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>
</footer>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

    <script src="./js/bootstrap.min.js"></script>


</body>

</html>
