<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Pro-technology electronics nudi veliki izbor lemilica, sistema za montažu pcb komponenti, robota kao i antistaički program odeće i podova.">
    <meta name="robots" content="index,follow">
    <meta name="author" content="rdDesign">
    <meta name="keywords" content="">
    <meta name="google-site-verification" content="pMiLlWc0tbntvS3Ky6VZVY9rHKxaVqnqZHD8daTZEus" />
    <link rel="canonical" href="http://telcontrol.net" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/ptefavicon.png">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/ptefavicon.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
    <title><?php echo isset($title) ? $title : ''; ?></title>

</head>


<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top d-block">
            <div class="container">
                <div id="logo">
                    <a class="" href="<?php echo base_url(); ?>"><img
                            src="<?php echo base_url(); ?>assets/img/tel-logo.png" alt="Telcontrol"></a>
                </div>
                <!-- <button id="triangle-up" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation" class="hamburger" title="MENU">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#services">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#about">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php#contact">CONTACT</a>
                        </li>
                        <li class="nav-item dropdown dropdown-menu-right">
                            <a class="nav-link dropdown-toggle"
                                onClick="window.location.href = '<?php echo base_url(); ?>products';return false;"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu dropleft">
                                <li class="dropdown-submenu dropleft">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=1">Hydronic controls</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=1">Pressurization
                                                controller</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=3">Expansion
                                                Board</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=2">Filter
                                                controller</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=2">Compressed air
                                        treatment</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=4">Refrigerated Air
                                                controller</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=5">Absorbtion dryer
                                                controlle</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=3">HVAC controls</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=13">DEK series</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=4">Electrical heating
                                        controls</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=10">Display GSM
                                                thermostat</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=6">On Board
                                                thermostat</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=7">Plug in
                                                thermostat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=5">Cooling and
                                        refrigeration</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=12">REK digital
                                                controllers</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=11">LEK & TEK
                                                series</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=9">REK series</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu dropleft"><a class="dropdown-item dropdown-toggle"
                                        href="<?php echo base_url(); ?>products/?category=6">Remote controls</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="<?php echo base_url(); ?>products/?subcategory=14">OMD Telcom</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php if ($this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>products/create">Unesi proizvod</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Izloguj se</a>
                        </li>
                        <?php endif;?>
                        <?php if (!$this->session->userdata('logged_in')): ?>
                        <li class="nav-item">
                            <a title="samo za admina" class="nav-link" href="<?php echo base_url(); ?>users/login"><i
                                    class="far fa-user-circle"></i></a>
                        </li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php if ($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_created')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_created') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_updated')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_updated') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('product_deleted')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('product_deleted') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedin') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success"  style="z-index:500000000000">' . $this->session->flashdata('user_loggedout') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>
    <?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p></p>'; ?>
    <?php endif;?>

    <input type="hidden" name="adminovo" id="adminovo" value="<?php echo $this->session->userdata('user_id'); ?>">