<?php require_once 'includes/header.php';?>

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
  



  


      <?php require_once 'includes/footer.php';?>