<?php
/*
 * SCSS Boilerplate
 * 
 * @package @pablorica/scss
 * @author Pablo Rica
 * @copyright 2022 Pablo Rica
 * @license GPL-2.0-or-later 
 * 
 * Description: SCSS boilerplate with common functions, mixins, helpers and patterns
 * Version: 1.5.2.3
 * Author: Pablo Rica
 * Author URI: http://codigo.co.uk/pablo-rica
 * License: GPLv2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt 
*/

define('VERSION','1.5.2.3');
define('BASE_URL','http://localhost/tutorials/scss/');
define('STYLESHEET',BASE_URL.'public/css/style.css?v='.VERSION);
define('JSSCRIPT',BASE_URL.'public/js/main.js?v='.VERSION);


include('header.php');

if(isset($_GET['page'])) {
    include('pages/'.$_GET['page'].'.php');
} else {
?>
    <section id = "main">
        
        <ul class="sl-l-grid"> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=blend-modes">Change Text or Fill Color Based on Background Color Automatically in CSS</a></h2> 
                <p>Blend modes are commonly used in design tools such as Photoshop to create a compositional effect by mixing colors from two or more layers. By changing how colors mix, you can achieve really interesting visual effects.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=lottie-scroll">Lottie animation with parallax effect on page scroll</a></h2> 
                <p>Using sticky position and scroll relative to container to get parallax effect on page scroll</p> 
            </li> 
            <li class="sl-l-grid__column"> 
            <h2><a href="<?=BASE_URL?>?page=mail-signatures">Mail Signatures</a></h2> 
                <p>Manual to create signatures in Outlook and other mail clients</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=textifyjs">Lenis.js & Textify.js</a></h2> 
                <p>Simple scroll based text reveal animation library.</p>
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=bootstrap">Bootstrap Examples</a></h2> 
                <p>Quickly get a project started with any of Bootatrap 5 examples ranging from using parts of the framework to custom components and layouts.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=burger">Burger toggler animations</a></h2> 
                <p>Bootstrap burger menu fliping to a cross.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=grid">CSS GRID</a></h2> 
                <p>CSS Grid Layout (aka “Grid” or “CSS Grid”), is a two-dimensional grid-based layout system that, compared to any web layout system of the past, completely changes the way we design user interfaces.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><span class="caps">CSS</span>&nbsp;Compatible</h2> 
                <p>Sass is completely compatible with all versions of <span class="caps">CSS.</span> We take&nbsp;this compatibility seriously, so that you can seamlessly use any&nbsp;available <span class="caps">CSS</span>&nbsp;libraries.</p> 
            </li> 
            <li class="sl-l-grid__column"> 
                <h2><span class="caps">CSS</span>&nbsp;Compatible</h2> 
                <p>Sass is completely compatible with all versions of <span class="caps">CSS.</span> We take&nbsp;this compatibility seriously, so that you can seamlessly use any&nbsp;available <span class="caps">CSS</span>&nbsp;libraries.</p> 
            </li>
        </ul> 
        
    </section>
<?php 
}

include('footer.php'); ?>