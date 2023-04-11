<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="mejola foods and Drink">
    <title>MEJOLA PRODUCTS | Home</title>
    <?php require_once("./utils/head.php")?>
  </head>
  <body class="">
    <!-- Navigation bar -->
    <?php require_once('./components/navbar.php') ?>

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="bd-placeholder-img hearo-img img-placeholder" width="100%" height="100%" src="https://random.imagecdn.app/1024/1024">

                <div class="container">
                    <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img class="bd-placeholder-img hearo-img img-placeholder" width="100%" height="100%" src="https://random.imagecdn.app/1024/1024">

                <div class="container">
                    <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <img class="bd-placeholder-img hearo-img img-placeholder" width="100%" height="100%" src="https://random.imagecdn.app/1024/1024">

                <div class="container">
                    <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="container my-5">
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
              <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Hello, We are Mejola.</h1>
                <p class="lead">We are Manufacturing foods and Drinks scene over 10 years.Our company was stabilized in 2013.
                                Now we have 20 restaurants around the Country. We are always trying to give good and healthy products to society.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <a class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" href="<?php echo $fixedlink?>products/">Products</a>
                    <a class="btn btn-outline-secondary btn-lg px-4" href="<?php echo $fixedlink?>resturents/">Resturents</a>
                </div>
              </div>
              <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg img-placeholder">
                  <img class="rounded-lg-3 img-placeholder" src="https://random.imagecdn.app/1024/1024" alt="" width="500">
              </div>
            </div>
        </div>

        <!-- Search Section -->
        <?php require_once('components/searchcomp.php') ?>

        <div class="container px-4 py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">Popular Products.
                <a href="" class="btn btn-outline-success">View All</a>
            </h2>
        
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
              
                <div class="col">
                    <div 
                        class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover" 
                        style="background-image:url('https://random.imagecdn.app/900/1350');"
                    >
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold txt-hover">Short title, long jacket</h3>
                            <ul class="d-flex list-unstyled mt-auto">
                            
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container px-4 py-5 resturents_sec" id="">
            <h2 class="pb-2 border-bottom">Our Top Resturents. 
                <a href="" class="btn btn-outline-success">View All</a>
            </h2>
        
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Feastra Resturent. 
                        <span class="text-muted"><i class="bi bi-geo-alt-fill fs-4"></i> Galle</span>
                    </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, iusto? Commodi inventore consequatur assumenda exercitationem at, molestiae ad quasi quaerat odio libero deserunt illo et ipsam facilis autem hic omnis?</p>
                </div>
                <div class="col-md-5">
                    <img 
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-placeholder" 
                        width="500" 
                        height="500"
                        src="https://random.imagecdn.app/400/400" 
                    >
                </div>
            </div>
            
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading fw-normal lh-1">Sanches fort Resturent. 
                    <span class="text-muted"><i class="bi bi-geo-alt-fill fs-4"></i> Matara</span>
                </h2>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio excepturi, perferendis eum tempora in sunt consequatur porro commodi eveniet, possimus sit labore ipsa iure! Quibusdam tempore quos earum sed neque!</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img 
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-placeholder" 
                        width="500" 
                        height="500"
                        src="https://random.imagecdn.app/400/400" 
                    >
        
                </div>
            </div>

        </div>

        <div class="container px-4 py-5" id="">
            <h2 class="pb-2 border-bottom">
                Testimonials.
                <a href="" class="btn btn-outline-success">View All</a>
            </h2>
            <div class="row text-center mt-3">
                <div class="col-lg-4">
                    <img 
                        class="bd-placeholder-img rounded-circle img-placeholder" 
                        width="140" 
                        height="140" 
                        src="https://xsgames.co/randomusers/avatar.php?g=female"    
                    >
            
                    <h2 class="fw-normal">Rebecca</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                </div>
                <div class="col-lg-4">
                    <img 
                        class="bd-placeholder-img rounded-circle img-placeholder" 
                        width="140" 
                        height="140" 
                        src="https://xsgames.co/randomusers/avatar.php?g=male"    
                    >

                    <h2 class="fw-normal">Josmar</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                </div>
                <div class="col-lg-4">
                    <img 
                        class="bd-placeholder-img rounded-circle img-placeholder" 
                        width="140" 
                        height="140" 
                        src="https://xsgames.co/randomusers/avatar.php?g=female"    
                    >

                    <h2 class="fw-normal">Kimberley</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                </div>
            </div>
        </div>

        <!-- contact form -->
        <?php require_once('components/contactform.php') ?>

        <div class="container px-4 py-5 text-center sevices-bg rounded-4" id="featured-3">
            <h2 class="pb-2 border-bottom">Services</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

              <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <i class="bi bi-truck"></i>
                </div>
                <h3 class="fs-2">Fast Delivery</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas quae alias numquam magnam reprehenderit! Eius, itaque eos velit, corrupti optio mollitia tote..</p>
              </div>

              <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <i class="bi bi-piggy-bank-fill"></i>
                </div>
                <h3 class="fs-2">Save Your Money</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit distinctio voluptatem odit nemo rerum.</p>
              </div>

              <div class="feature col">
                <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h3 class="fs-2">24/7 Fast Support</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam similique dignissimos voluptates sequi error ipsam.</p>
              </div>
            </div>
        </div>
    </main>

    <!-- Footer Section -->
    <?php require_once('components/footer.php') ?>

    <!-- Cart Modal -->
    <?php require_once('components/cartmodal.php') ?>

  </body>

  <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/xhrajax.js"></script>
  <script src="assets/js/utils.js"></script>
  <script src="./assets/js/main.js"></script>
</html>
