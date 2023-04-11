<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEJOLA PRODUCTS | Our Products</title>
    <?php require_once('../utils/head.php') ?>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require_once("../components/navbar.php") ?>

    <!-- Search Bar -->
    <?php require_once("../components/searchcomp.php") ?>

    <div class="container">
        <div class="row">

            <div class="col-sm-2 col-lg-2">
                <div class="sticky-xl-top text-muted align-self-start mb-3 mb-xl-5 px-2 bg-success bg-opacity-10">
                    <a class="d-flex align-items-center pb-1 mb-3 link-dark text-decoration-none border-bottom">
                        <i class="bi bi-cup-straw fs-4"></i>
                        <span class="fs-5 fw-semibold">Categories</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                            Foods
                            </button>
                            <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
                            </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Drinks
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
                                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
                            </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-10 col-lg-10">
                <div class="album py-5 ">
                    <div class="row g-3" id="product_section">

                        <!-- <div class="col-sm-12 col-lg-4">
                            <div class="card shadow-sm">
                                <img 
                                    class="bd-placeholder-img card-img-top" 
                                    width="100%" 
                                    height="225"
                                    src="https://random.imagecdn.app/500/500"
                                >
                                <div class="card-body">
                                    <h3 class="card-text">
                                        Snack Shorteats
                                    </h3>
                                    <p class="text-wrap">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center p-2">
                                        <div title="Current Price">RS: 140.00</div>
                                        <div title="Stoke">10 in Stoke</div>
                                        <div title="Customers Ratings For this Product">
                                            <i class="bi bi-star text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button 
                                                type="button" 
                                                onclick="changeordercount('inc','sdsf123')" 
                                                class="btn btn-outline-success" 
                                                title="Increase"
                                            >+</button>
                                            <div class="btn btn-warning" id="count_sdsf123">0</div>
                                            <button 
                                                type="button" 
                                                onclick="changeordercount('dec','sdsf123')" 
                                                class="btn btn-outline-danger" 
                                                title="Decrease"
                                            >-</button>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn btn-warning" title="Total" id="total_sdsf123">0/-</div>
                                            <button 
                                                class="btn btn-success" 
                                                onclick="addtocart(this)" 
                                                title="Addto Your Cart"
                                                uprice="140"
                                                itemcode = 'sdsf123'
                                                ccount="0"
                                                id="atc_sdsf123"
                                                stokecount="10"
                                            >
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php require_once('../components/footer.php') ?>

    <!-- Cart Modal -->
    <?php require_once('../components/cartmodal.php') ?>
</body>

<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/xhrajax.js" ></script>
<script src="../assets/js/utils.js"></script>
<script src="../assets/js/product.js"></script>
<script src="../assets/js/main.js"></script>

</html>