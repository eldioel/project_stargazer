<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>fellow</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/assets/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>/assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-secondary mb-3">CV FELLOW CULTURE INDONESIA</span>
            <span class="site-heading-lower">FELLOW COFFEE</span>
            <div class="col-12">
                <img src="<?= base_url(); ?>/assets/assets/logo.png" class="px-3" alt="lg" style="width:5vw; background:white; border-radius: 50%;">
            </div>
        </h1>

    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="<?= base_url('/welcome'); ?>">FELLOW COFFEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?= base_url('/welcome'); ?>">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?= base_url('/about'); ?>">About</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?= base_url('/product'); ?>">Products</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="<?= base_url('/store'); ?>">Store</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" id="container" style="z-index: 1">
        <div class="row">
            <main id="main" role="main" class="ml-sm-auto col-lg-12 pl-0 pr-0 pl-4">
                <?php (isset($page_content)) ? $this->load->view($page_content) : '' ?>
            </main>
        </div>
    </div>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; CV FELLOW CULTURE INDONESIA 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>