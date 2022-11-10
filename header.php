<?php
/**
 * Header
 *
 * @package @pablorica/scss
 */

 define('BASE_URL','http://localhost/tutorials/scss/')

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sass boilerplate</title>
    <link rel="stylesheet" href="<?=BASE_URL?>/public/css/style.css" />
    </head>
    <body>

        <div class="container">


            <header role="banner"> 
                <div class="banner-container"> 
                    <div class="banner-container__brand"> 
                        <a href="<?=BASE_URL?>"><img alt="Sass" src="<?=BASE_URL?>/public/img/logo.png" height="48"> </a>
                    </div> 
                    <h1 class="banner-container__title"><a href="<?=BASE_URL?>">Sass Boilerplate</a></h1> 
                    <div class="banner-container__menu"></div> 
                </div> 
            </header>

