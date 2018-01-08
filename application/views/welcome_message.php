<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CodeIgniter</title>
    <script src="<?php echo site_url('node_modules/jquery/dist/jquery.js')  ?>"></script>
    <link rel="stylesheet" href="<?php echo site_url('node_modules/bootstrap/dist/css/bootstrap.css') ?>">
    <script src="<?php echo site_url('node_modules/bootstrap/dist/js/bootstrap.js') ?>"></script>
    <link rel="stylesheet" href="<?php echo site_url('static/css/main.css')?>">
</head>
<body>
    <?php require_once 'navigation.php'?>
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo site_url('static/images/1500x300_Radar_Lifestyle_Post_TPR._CB490479129_.jpg')?>" alt="Chania">
                </div>
                <div class="item">
                    <img src="<?php echo site_url('static/images/1500x300_Storagecontainers-nov._CB494345345_.jpg')?>" alt="Chania">
                </div>
                <div class="item">
                    <img src="<?php echo site_url('static/images/ID-1092521-Superhero-1x-Best-of-VG._CB490493804_.jpg')?>" alt="Chania">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 product_wrapper">
                <div class="product">
                    <span class="glyphicon glyphicon-heart-empty"></span>
                    <div class="product_img">
                        <img src="<?php echo site_url('static/images/112-e4b3d.jpg')?>" alt="">
                    </div>
                    <span>Dell Inspirion 3567 NoteBook (6th Gen Intel Core i3-4Gb...)</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>