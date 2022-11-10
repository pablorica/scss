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
 * Version: 1.5.1.1
 * Author: Pablo Rica
 * Author URI: http://codigo.co.uk/pablo-rica
 * License: GPLv2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt 
*/

define('VERSION','1.5.1.1');
define('BASE_URL','http://localhost/tutorials/scss/');

include('header.php');

if($_GET['page']== 'blend-modes') {
    include('pages/blend-modes.php');
} else {
?>
    <section id = "main">
        
        <ul class="sl-l-grid"> 
            <li class="sl-l-grid__column"> 
                <h2><a href="<?=BASE_URL?>?page=blend-modes">Change Text or Fill Color Based on Background Color Automatically in CSS</a></h2> 
                <p>Blend modes are commonly used in design tools such as Photoshop to create a compositional effect by mixing colors from two or more layers. By changing how colors mix, you can achieve really interesting visual effects.</p> 
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