<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEJOLA PRODUCTS | Contact US</title>
    <?php require_once('../utils/head.php') ?>
</head>
<body class="contact-us-bg">
    <!-- Navigation Bar -->
    <?php require_once("../components/navbar.php") ?>

    <main>
        <!-- Search Section -->
        <div style="margin-top:100px">
            <?php require_once('../components/searchcomp.php') ?>
        </div>
        
        <!-- Contact us form -->
        <?php require_once('../components/contactform.php') ?>
    </main>

    <!-- Footer Section -->
    <div class="bg-white">
        <?php require_once('../components/footer.php') ?>
    </div>

    <!-- Cart Modal -->
    <?php require_once('../components/cartmodal.php') ?>
</body>

    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/xhrajax.js"></script>
    <script src="../assets/js/utils.js"></script>
    <script src="../assets/js/main.js"></script>
</html>