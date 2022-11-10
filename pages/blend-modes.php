<?php
/**
 * Blend modes
 *
 * @package @pablorica/scss
 */

include('../header.php');
?>


    <section id = "main" class="blend-modes">
        
        <h2>Reverse Text Color Based on Background Color Automatically in CSS </h2> 
        <p>Blend modes are commonly used in design tools such as Photoshop to create a compositional effect by mixing colors from two or more layers. By changing how colors mix, you can achieve really interesting visual effects.</p>
        <p>Mix blend options:</p>
<pre><code>
mix-blend-mode: color-dodge;
mix-blend-mode: color-burn;
mix-blend-mode: hard-light;
mix-blend-mode: soft-light;
mix-blend-mode: difference;
</code></pre>
        
        


        <div class="test-box test-box-1">
            <div class="wrapper">
                <div class="bg">
                    <div class="el"></div>
                </div>
            </div>
        </div>

        <h3>Blend modes in SVG.</h3>


        <div class="test-box test-box-2">
            <div class="wrapper">
                <div class="bg">
                    <div class="elsvg">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 115 85.6" enable-background="new 0 0 115 85.6" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M25.2,50.4C11.3,50.4,0,39.1,0,25.2C0,11.3,11.3,0,25.2,0v15.7c-5.2,0-9.5,4.3-9.5,9.5c0,5.2,4.3,9.5,9.5,9.5V50.4z"></path>
                                    <path d="M24.8,85.6c-8.1,0-16.2-3.1-22.4-9.3l11.1-11.1c3,3,7,4.7,11.3,4.7s8.3-1.7,11.3-4.7c3-3,4.7-7,4.7-11.3 c0-4.3-1.7-8.3-4.7-11.3l11.1-11.1c6,6,9.3,13.9,9.3,22.4c0,8.5-3.3,16.4-9.3,22.4C41.1,82.5,33,85.6,24.8,85.6"></path>
                                </g>
                                <path d="M72.3,85.5V69.8c14.9,0,27-12.1,27-27s-12.1-27-27-27V0C95.8,0,115,19.2,115,42.7C115,66.3,95.8,85.5,72.3,85.5"></path>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <p>The white effect works only in <b>Firefox</b> with colours with "0" in their rgb code:</p>
<pre><code>
rgb(255,0,0);
rgb(0,255,0);
rgb(0,0,255);
rgb(255,255,0);
rgb(255,0,255);
rgb(0,255,255);
</code></pre>

        <h3><a href="https://dev.to/kaos/dynamic-text-effects-with-css-mix-blend-mode-242a" target="_blank">Dynamic text effects with css mix-blend-mode</a></h3>
        <p>A slightly more advanced method is used in the following pen. It uses a mask with a background image, fixed text and mix-blend-mode: color-dodge.</p>


        <div class="test-box test-box-3">
            <iframe src="<?=BASE_URL?>/pages/iframe-blend-modes.html" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframe-blend-modes.html" target="_blank">Open example in a new page</a></p>
        <p>Saddly this effect works well with <code>--color: tomate;</code>, but not with other colour.<br/>
        It works also with <code>background: wheat;</code>, but not with <code>background: red;</code></p>


        <h3><a href="https://stackoverflow.com/questions/54621367/how-to-get-mix-blend-mode-scroll-effect-using-javascript" target="_blank">How to get a similar mix-blend-mode scroll effect</a></h3>
        <p>Here is a trick where you can put the coloration of the fixed element within the different block considering background-attachment:fixed</p>


        <div class="test-box test-box-4">
            <iframe src="<?=BASE_URL?>/pages/iframe-blend-modes-2.html" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframe-blend-modes-2.html" target="_blank">Open example in a new page</a></p>
        <p>&nbsp;</p>
        <p>Same effect using a SVG image</p>
        <div class="test-box test-box-4">
            <iframe src="<?=BASE_URL?>/pages/iframe-blend-modes-3.html" width="100%" height="100%"></iframe>
        </div>






        <div class="read-more">
            <h3>Laravel manual:</h3>
            <p><a href="http://localhost/tutorials/laravel-vue-crud/public/posts/show/68" target="_blank">CSS ans SCSS Tips </a></p>
        </div>

        <div class="read-more">
            <h3>Read more:</h3>
            <p><a href="https://css-tricks.com/reverse-text-color-mix-blend-mode/" target="_blank">Reverse Text Color Based on Background Color Automatically in CSS </a></p>
            <p><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/mix-blend-mode" target="_blank">mix-blend-mode</a></p>
            <p><a href="https://codepen.io/danieledesantis/pen/QWWrLWE" target="_blank">Change text color based on background color</a></p>
            <p><a href="https://codepen.io/maddesigns/pen/dpGVGw" target="_blank">CSS mix-blend-mode - black/white text - with pseudo elements</a></p>
            <p><a href="https://stackoverflow.com/questions/67544643/css-mix-blend-mode-only-white-or-black" target="_blank">CSS mix blend mode / only white or black</a></p>
            <p><a href="https://dev.to/kaos/dynamic-text-effects-with-css-mix-blend-mode-242a" target="_blank">Dynamic text effects with css mix-blend-mode</a></p>
            <p><a href="https://pinetools.com/invert-color" target="_blank">Invert colours online</a></p>
        </div>
        
    </section>


<?php include('../footer.php'); ?>