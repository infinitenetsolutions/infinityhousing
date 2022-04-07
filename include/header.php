<?php include "./config.php";

$location = "SELECT * FROM `orexl_apartment_city`";
$location_data = mysqli_query($conn, $location);

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Real Villa - Real Estate HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Infinity Housing</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/select2/select2.css" />
    <link rel="stylesheet" href="css/range-slider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>

    <!--=================================header -->
    <header class="header">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="me-3 d-inline-block">
                                <a href="tel:+919835796743"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>+91 9835796743 </a>
                            </div>
                            <div class="dropdown d-inline-block ps-2 ps-md-0">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Choose location<i class="fas fa-chevron-down ps-2"></i>
                                </a>
                                <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                                    <?php while ($location_result = mysqli_fetch_assoc($location_data)) { ?>
                                        <a class="dropdown-item" href="#"><?php echo $location_result['name_en']; ?></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="me-auto d-inline-block">
                                <!-- <span class="me-2 text-white">Get App:</span>
                                <a class="pe-1" href="#"><i class="fab fa-android"></i></a>
                                <a href="#"><i class="fab fa-apple"></i></a> -->
                            </div>
                            <!-- <div class="dropdown d-inline-block ps-2 ps-md-0">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Choose location<i class="fas fa-chevron-down ps-2"></i>
              </a>
                                <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Global</a>
                                    <a class="dropdown-item" href="#">Arizona</a>
                                    <a class="dropdown-item" href="#">British columbia</a>
                                    <a class="dropdown-item" href="#">Commercial</a>
                                </div>
                            </div> -->
                            <div class="social d-inline-block">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-pinterest"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-instagram"></i> </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="login d-inline-block">
                                <a data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Login<i class="fa fa-user ps-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="index.php">
                    <img class="img-fluid" src="images/logo.png" alt="logo">
                </a>
                <div class="navbar-collapse collapse justify-content-center">
                    <ul class="nav navbar-nav">
                        <li class="dropdown nav-item mega-menu">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Buy<i class="fas fa-chevron-down fa-xs"></i></a>
                            <ul class="dropdown-menu megamenu">

                                <li>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Popular Choices</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-under-banner.html">Ready to Move</a></li>
                                                <li><a href="search-style-above-banner.html">Owner Properties</a></li>
                                                <li><a href="search-style-below-banner.html">Budget Homes</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Property types</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-classic.html">Flats in Jamshedpur</a></li>
                                                <li><a href="search-style-with-filter.html">House for sale in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-02.html">Villa in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-03.html">Plot in Jamshedpur </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Budget</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-feature-box.html">Under Rs 50 Lac</a></li>
                                                <li><a href="element-testimonials.html">50 Lac - 1 Cr</a></li>
                                                <li><a href="element-accordion.html">1 Cr - 1.5 Cr</a></li>
                                                <li><a href="element-tabs.html">Above 1.5 Cr</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Explore </h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-typography.html">Typography</a></li>
                                                <li><a href="element-counter.html">counter</a></li>
                                                <li><a href="element-countdown.html">Countdown</a></li>
                                                <li><a href="element-category.html">Category</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown nav-item mega-menu">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">Rent<i class="fas fa-chevron-down fa-xs"></i></a>
                            <ul class="dropdown-menu megamenu">

                                <li>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Popular Choices</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-under-banner.html">Ready to Move</a></li>
                                                <li><a href="search-style-above-banner.html">Owner Properties</a></li>
                                                <li><a href="search-style-below-banner.html">Budget Homes</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Property types</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-classic.html">Flats in Jamshedpur</a></li>
                                                <li><a href="search-style-with-filter.html">House for sale in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-02.html">Villa in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-03.html">Plot in Jamshedpur </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Budget</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-feature-box.html">Under Rs 50 Lac</a></li>
                                                <li><a href="element-testimonials.html">50 Lac - 1 Cr</a></li>
                                                <li><a href="element-accordion.html">1 Cr - 1.5 Cr</a></li>
                                                <li><a href="element-tabs.html">Above 1.5 Cr</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Explore </h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-typography.html">Typography</a></li>
                                                <li><a href="element-counter.html">counter</a></li>
                                                <li><a href="element-countdown.html">Countdown</a></li>
                                                <li><a href="element-category.html">Category</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sell <i class="fas fa-chevron-down fa-xs"></i>
                            </a>
                            <ul class="dropdown-menu megamenu">

                                <li>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Popular Choices</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-under-banner.html">Ready to Move</a></li>
                                                <li><a href="search-style-above-banner.html">Owner Properties</a></li>
                                                <li><a href="search-style-below-banner.html">Budget Homes</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Property types</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-classic.html">Flats in Jamshedpur</a></li>
                                                <li><a href="search-style-with-filter.html">House for sale in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-02.html">Villa in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-03.html">Plot in Jamshedpur </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Budget</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-feature-box.html">Under Rs 50 Lac</a></li>
                                                <li><a href="element-testimonials.html">50 Lac - 1 Cr</a></li>
                                                <li><a href="element-accordion.html">1 Cr - 1.5 Cr</a></li>
                                                <li><a href="element-tabs.html">Above 1.5 Cr</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Explore </h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-typography.html">Typography</a></li>
                                                <li><a href="element-counter.html">counter</a></li>
                                                <li><a href="element-countdown.html">Countdown</a></li>
                                                <li><a href="element-category.html">Category</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home Loans <i class="fas fa-chevron-down fa-xs"></i>
                            </a>
                            <ul class="dropdown-menu megamenu">

                                <li>
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Popular Choices</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-under-banner.html">Ready to Move</a></li>
                                                <li><a href="search-style-above-banner.html">Owner Properties</a></li>
                                                <li><a href="search-style-below-banner.html">Budget Homes</a></li>

                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Property types</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="search-style-classic.html">Flats in Jamshedpur</a></li>
                                                <li><a href="search-style-with-filter.html">House for sale in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-02.html">Villa in Jamshedpur</a></li>
                                                <li><a href="search-style-advanced-03.html">Plot in Jamshedpur </a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Budget</h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-feature-box.html">Under Rs 50 Lac</a></li>
                                                <li><a href="element-testimonials.html">50 Lac - 1 Cr</a></li>
                                                <li><a href="element-accordion.html">1 Cr - 1.5 Cr</a></li>
                                                <li><a href="element-tabs.html">Above 1.5 Cr</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-lg-3">
                                            <h6 class="mb-3 nav-title">Explore </h6>
                                            <ul class="list-unstyled mt-lg-3">
                                                <li><a href="element-typography.html">Typography</a></li>
                                                <li><a href="element-counter.html">counter</a></li>
                                                <li><a href="element-countdown.html">Countdown</a></li>
                                                <li><a href="element-category.html">Category</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mega-menu">
                            <a href="contact-us.php" class="nav-link" >Contact us</a>
                            
                        </li>
                      
                        <li class="nav-item dropdown mega-menu">
                            <a class="nav-link " href="question-answer.php">
                                Help 
                            </a>
                        
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pay Your Rent 
                            </a></li> -->
                    </ul>
                </div>
                <div class="add-listing d-none d-sm-block">
                    <a class="btn btn-primary btn-md" href="submit-property.php"> <i class="fa fa-plus-circle"></i>Add listing </a>
                </div>
            </div>
        </nav>
    </header>
    <!--=================================
 header -->

    <!--=================================
 Modal login -->
    <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Log in</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form class="row my-4 align-items-center">
                                <div class="mb-3 col-sm-12">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="mb-3 col-sm-12">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                               
                            </form>

                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form class="row mt-4 mb-5 align-items-center">
                                <div class="mb-3 col-sm-6">
                                    <!-- <label  class="form-check-label">Select Type</label> -->
                                    <!-- <input type="text" class="form-control" placeholder="Username"> -->
                                    <select name="" id="" class="form-control">
                                        <option value="" selected disabled>Select Type</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input type="Password" class="form-control" placeholder="Password">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input type="Password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="mb-3 col-sm-6">
                                    <input type="number" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Sign up</button>
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
  Modal login -->




    <!--=================================
 Quick Contact -->
    <div class="modal login fade" id="loginModal1" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="loginModalLabel1">Enquiry form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">

                            <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
                                <!-- <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div> -->
                                <form class="row mt-4 mb-5 align-items-center">
                                    <div class="mb-3 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input type="number" class="form-control" placeholder="Enter Phone">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <!-- <input type="Password" class="form-control" placeholder="Select Property"> -->
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Property Type</option>
                                            <option value="">Flat</option>
                                            <option value="">Bungalow</option>
                                            <option value="">Duplex</option>
                                            <option value="">Mansion</option>
                                            <option value="">Farmhouse</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-sm-6">
                                        <!-- <input type="Password" class="form-control" placeholder="Select Property"> -->
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Property Space</option>
                                            <option value="">2 BHK </option>
                                            <option value="">3 BHK</option>
                                            <option value="">4 BHK</option>
                                            <option value="">5 BHK & Above</option>
                                        </select>
                                    </div>


                                    <div class="mb-3 col-sm-6">
                                        <!-- <input type="Password" class="form-control" placeholder="Select Property"> -->
                                        <select name="" id="" class="form-control">
                                            <option value="" disabled selected>Property Required In</option>
                                            <option value="">Immediate </option>
                                            <option value="">Within 6 months</option>
                                            <option value="">Whithin 1 year</option>
                                            <option value="">Within 2 years</option>
                                            <option value="">Within 3 years</option>
                                            <option value="">Within 4 years</option>
                                            <option value="">Within 5 years</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <input type="number" class="form-control" placeholder="Desired Budget in Lac">
                                    </div>

                                    <div class="mb-3 col-sm-12">
                                        <!-- <input type="number" class="form-control" placeholder="Enter Phone"> -->
                                        <textarea name="" rows="3" class="form-control" placeholder="Enter Message"></textarea>
                                    </div>

                                    <div class="col-sm-6 d-grid">
                                        <button type="submit" class="btn btn-primary">Sign up</button>
                                    </div>
                                    <!-- <div class="col-sm-6">
                                        <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                                            <li class="me-1"><a href="#"><b>Already Registered User? Click here to login</b></a></li>
                                        </ul>
                                    </div> -->
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
  Quick Contact -->