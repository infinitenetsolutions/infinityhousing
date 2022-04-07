<?php include "include/header.php";

$questions = "SELECT * FROM `orexl_articles`";
$questions_data = mysqli_query($conn, $questions);

?>

<!--=================================
breadcrumb -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php"> <i class="fas fa-home"></i> </a></li>
          <!-- <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li> -->
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Q & A</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
breadcrumb -->

<!--=================================
Accordion -->





<section class="space-ptb">
  <div class="container">
    <div class="row">

      <div class="col-md-12 mt-3 mt-md-0">
        <div class="section-title text-start">
          <h2>Question & Answer</h2>
        </div>
        <div class="accordion-style-2" id="accordion-02">
          <?php
          while ($question_result  = mysqli_fetch_assoc($questions_data)) { ?>


            <div class="card">
              <div class="card-header" id="headingfour1">
                <h5 class="accordion-title mb-0">
                  <button class="btn btn-link d-flex ms-auto align-items-center" data-bs-toggle="collapse" data-bs-target="#collapsefour<?php echo $question_result['id']?>" aria-expanded="true" aria-controls="collapsefour<?php echo $question_result['id']?>">First Floor <i class="fas fa-chevron-down fa-xs"></i></button>
                </h5>
              </div>
              <div id="collapsefour<?php echo $question_result['id']?>" class="collapse accordion-content" aria-labelledby="headingfour<?php echo $question_result['id']?>" data-bs-parent="#accordion-02">
                <div class="card-body">
                  <p class="mb-0">Positive pleasure-oriented goals are much more powerful motivators than negative fear-based ones. Although each is successful separately, the right combination of both is the most powerful motivational force known to humankind.</p>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Accordion -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php include "include/footer.php" ?>