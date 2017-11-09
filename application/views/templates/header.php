<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/assets/css/master.css">
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/jquery-3.2.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <link  href="/assets/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php $this->load->helper('url'); ?>


        <a href="http://providentielcoquillages.my"><img id="logo" src="/assets/img/coquillages.png" alt=""></img></a>
        <a href=<?php echo base_url() ?>index.php/Aproduit>ADMINISTRATEUR</a>
        <div class="container-fluid">

            <div class="row">
        		<div class="col-md-12">
                    <nav id='nav' class="navbar navbar-default">
                        <div class="container">
                            <a class="navbar-text" href="http://providentielcoquillages.my/index.php/Qns">Qui sommes nous?</a>
                            <a class="navbar-text" href="#">Nacre tresor: la nacre</a>
                            <a class="navbar-text" href=<?php echo base_url() ?>>Les produits</a>
                            <a class="navbar-text" href="#">Partenaires / contact</a>

                        </div>
                    </nav>
