<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Webartinfo">
      <meta name="author" content="Webartinfo">
      <title>Realtor Point - Bootstrap Real Estate HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.svg">
      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="vendor/select2/css/select2-bootstrap.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="vendor/select2/css/select2.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- Navbar -->
<?php
   include("includes/header.php");
?>
      <!-- End Navbar -->
      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">ხშირად დასმული შეკითხვები</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">მთავარი</a>  /  <span class="text-success">FAQ</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      <!-- FAQ -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
                  <div class="card padding-card">
                     <div class="card-body">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                           <div class="faq-card mb-3">
                              <div class="faq-card-header mb-2" role="tab" id="headingOne">
                                 <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="mdi mdi-arrow-right-bold-box"></i>   Where can I get access to Capital IQ? 
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                 </p>
                              </div>
                           </div>
                           <div class="faq-card mb-3">
                              <div class="faq-card-header mb-2" role="tab" id="headingTwo">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="mdi mdi-arrow-right-bold-box"></i> Where can I find market research reports? 
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                 </p>
                              </div>
                           </div>
                           <div class="faq-card mb-3">
                              <div class="faq-card-header mb-2" role="tab" id="headingThree">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="mdi mdi-arrow-right-bold-box"></i> How do I get access to case studies? 
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                 </p>
                              </div>
                           </div>
                           <div class="faq-card">
                              <div class="faq-card-header mb-2" role="tab" id="headingThree">
                                 <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="mdi mdi-arrow-right-bold-box"></i>  How much should I capitalize?  
                                    </a>
                                 </h5>
                              </div>
                              <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                 <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End FAQ -->
      <!-- Join Team -->
      <section class="py-5 bg-primary">
         <div class="container">
            <div class="row align-items-center text-center text-md-left">
               <div class="col-md-8">
                  <h2 class="text-white my-2">გახდი ჩვენი გუნდის წევრი</h2>
               </div>
               <div class="col-md-4 text-center text-md-right">
                  <button type="button" class="btn btn-outline-light my-2">წ/მ</button> <button type="button"
                     class="btn btn-light my-2">დაგვიკავშირდით</button>
               </div>
            </div>
         </div>
      </section>
      <!-- End Join Team -->
      <!-- Footer -->
<?php
   include("includes/footer.php");
?>
      <!-- End Footer -->
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>
      <!-- select2 Js -->
      <script src="vendor/select2/js/select2.min.js"></script>
      <!-- Custom -->
      <script src="js/custom.js"></script>
   </body>
</html>