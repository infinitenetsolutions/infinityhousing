<?php include "include/header.php" ?>
<!--=================================
breadcrumb -->
<div class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="index.php"> <i class="fas fa-home"></i> </a></li>
          <!-- <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li> -->
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Submit Property</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
breadcrumb -->

<!--=================================
Submit Property -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title d-flex align-items-center">
          <h2>Submit Property</h2>
        </div>
        <div class="row">
          <div class="col-12">
            <ul class="nav nav-tabs nav-tabs-03 nav-fill" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab-01-tab" data-bs-toggle="tab" href="#tab-01" role="tab" aria-controls="tab-01" aria-selected="true">
                  <span>01</span>
                  Basic Information
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-02-tab" data-bs-toggle="tab" href="#tab-02" role="tab" aria-controls="tab-02" aria-selected="false">
                  <span>02</span>
                  Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-03-tab" data-bs-toggle="tab" href="#tab-03" role="tab" aria-controls="tab-03" aria-selected="false"><span>03</span>
                  Location</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-04-tab" data-bs-toggle="tab" href="#tab-04" role="tab" aria-controls="tab-04" aria-selected="false">
                  <span>04</span>
                  Detailed Information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-05-tab" data-bs-toggle="tab" href="#tab-05" role="tab" aria-controls="tab-05" aria-selected="false">
                  <span>05</span>
                  Brochure</a>
              </li>
            </ul>
            <div class="tab-content mt-4" id="myTabContent">
              <div class="tab-pane fade show active" id="tab-01" role="tabpanel" aria-labelledby="tab-01-tab">
                <form>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Type </label>
                      <!-- <input type="text" class="form-control" placeholder="Awesome family home"> -->
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>Select Type</option>
                      </select>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">Property Type </label>
                      <!-- <input type="text" class="form-control" placeholder="Awesome family home"> -->
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>Select Property Type</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Select City </label>
                      <!-- <input type="text" class="form-control" placeholder="Awesome family home"> -->
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>Select City</option>
                      </select>
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Property Title</label>
                      <input class="form-control" placeholder="Property Title">
                    </div>
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Address</label>
                      <!-- <input class="form-control" placeholder="Type (sq ft)"> -->
                      <textarea name="" id="" rows="3" class="form-control" placeholder="Address"></textarea>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">Property Description</label>
                      <!-- <input class="form-control" placeholder="Type (sq ft)"> -->
                      <textarea name="" id="" rows="3" class="form-control" placeholder="Property Description"></textarea>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">No of Bed Rooms</label>
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>Select no of bed rooms</option>
                      </select>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">No of Floors</label>
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>No of Floors</option>
                      </select>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">Enter Square Area</label>
                      <input class="form-control" placeholder="Enter Square Area">
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">Near By View</label>
                      <select name="" id="" class="form-control">
                        <option value="" selected disabled>Near By View</option>
                      </select>
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">What is near ?</label>
                      <input class="form-control" placeholder="What is near ?">
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">No of beds</label>
                      <input class="form-control" placeholder="No of beds">
                    </div>

                    <div class="mb-3 col-md-6">
                      <label class="form-label">Owner Phone Number</label>
                      <input class="form-control" placeholder="Owner Phone Number">
                    </div>


                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="tab-02" role="tabpanel" aria-labelledby="tab-02-tab">
              <div class="mb-3 col-md-6">
                      <label class="form-label">Upload Images</label>
                      <input type="file" class="form-control" id="customFile">
                    </div>

                <!-- <div class="input-group file-upload">
                  <input type="file" class="form-control" id="customFile">
                  <label class="input-group-text" for="customFile">Choose file</label>
                </div> -->
              </div>
              <div class="tab-pane fade" id="tab-03" role="tabpanel" aria-labelledby="tab-03-tab">

              <div class="mb-3 col-md-6">
                      <label class="form-label">Input Location Url</label>
                      <input type="file" class="form-control" id="customFile">
                    </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 250px;"></iframe>

              </div>
              <div class="tab-pane fade" id="tab-04" role="tabpanel" aria-labelledby="tab-04-tab">
                <form>
                  <div class="row mt-4">
                    <label class="form-check-label">Security</label>
                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> coded lock
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> metal door to the vestibule
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> metal front door
                      </label>
                    </div>

                    <hr>
                    <label class="form-check-label">Comfort</label>
                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> plastic windows
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> splendid view
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> quiet area
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> intercom
                      </label>
                    </div>


                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> air conditioner
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> furnished
                      </label>
                    </div>
                    <hr>
                    <label class="form-check-label">Kitchen</label>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> extract
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> plate
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> refrigerator
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> furnished kitchen
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> built-in appliances
                      </label>
                    </div>

                    <hr>
                    <label class="form-check-label">Bathroom</label>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> washing machine
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> bath
                      </label>
                    </div>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> water heater
                      </label>
                    </div>
                    <hr>
                    <label class="form-check-label">Entertainment</label>

                    <div class="mb-3 col-md-3 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> internet
                      </label>
                    </div>
                    <hr>
                    <label class="form-check-label">Services</label>

                    <div class="mb-3 col-md-12 select-border">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value=""> The prices are specified in USD. You can find the current rate of a currency exchange on the site of the Central Bank of the Russian Federation.
                      </label>
                    </div>


                   
                  
                  </div>
                </form>
              </div>
              <div class="tab-pane fade" id="tab-05" role="tabpanel" aria-labelledby="tab-05-tab">
                <form>
                  <div class="row">
                    <div class="mb-3 col-md-6">
                      <label class="form-label">Browser file</label>
                      <div class="input-group file-upload">
                        <input type="file" class="form-control" id="customFile">
                        <label class="input-group-text" for="customFile">Choose file</label>
                      </div>
                    </div>
                  
                   
                  
                  </div>
                </form>
                <a class="btn btn-primary mt-3" href="#"><i class="fas fa-plus-circle"></i> Upload Brochure</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Submit Property -->
<?php include "include/footer.php" ?>