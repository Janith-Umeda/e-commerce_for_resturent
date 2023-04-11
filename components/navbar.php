<!-- The $fixedlink and $uriloc variables are coming from head.php file -->
<?php
    function navactive($pagename){
        global $uriloc;

        if($uriloc === $pagename || (!$uriloc && $pagename === "home")){
            return 'active nav-txt';
        }else{
            return "";
        }
    }

?>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top nav-effect">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img
                src="<?php echo $fixedlink ?>assets/images/brand_logo.jpg"
                class="brand_logo img-fluid d-inline-block align-text-top img-placeholder"
                alt="mejola logo"
                width="30"
                height="24"
                />
                MEJOLA Products
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <div class="d-flex flex-row-reverse w-100" id="nav_items">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo navactive(($uriloc === "mejolaweb")? $uriloc :"home" ) ?>" 
                            aria-current="page" 
                            href="<?php echo $fixedlink?>"
                        >   
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            href="<?php echo $fixedlink?>products/" 
                            class="nav-link <?php echo navactive("products") ?>"
                        >
                            Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo navactive("aboutus") ?>" 
                            href="<?php echo $fixedlink?>aboutus/"
                        >
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a 
                            class="nav-link <?php echo navactive("contactus") ?>" 
                            href="<?php echo $fixedlink?>contactus/"
                        >
                            Contact Us
                        </a>
                    </li>
                    
                </ul>
                </div>
            </div>

            <div class="d-flex flex-row-reverse">
                <div class="p-2 text-white" title="Cart">
                    <button 
                        class="btn btn-primary position-relative" 
                        data-bs-toggle="modal" 
                        data-bs-target="#cartModal"
                        id="cartbtn"
                    >
                        <i class="bi bi-cart"></i>
                        <span 
                            class="position-absolute top-0 start-100 translate-middle badge border border-light bg-danger"
                            hidden
                            id="cartindicator"
                            style="font-size:10px;"
                        >   
                            
                            <span class="visually-hidden">Unchecked Items</span>
                        </span>
                    </button>
                </div>
                <div class="p-2 text-white">
                    <button class="btn btn-dark" title="Login">
                        <i class="bi bi-person-circle"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>