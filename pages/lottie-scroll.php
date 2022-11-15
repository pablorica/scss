<?php
/**
 * Blend modes
 *
 * @package @pablorica/scss
 */

?>


    <section id = "main" class="lottie-scroll">
        
        <h2>Lottie animation with parallax effect on page scroll</h2> 
        <p>Using sticky position and scroll relative to container to get parallax effect on page scroll:</p>

<pre><code>&lt;div class=&quot;entry-content&quot;&gt;
    &lt;div class=&quot;content-lottie&quot; 
        style=&quot;background-color:transparent; height:1px; position:sticky; top:0&quot; &gt;
        &lt;lottie-player
            id=&quot;firstLottie&quot;
            src=&quot;https://assets2.lottiefiles.com/packages/lf20_i9mxcD.json&quot;
            style=&quot;width:100%; height: auto;&quot;
            class=&quot;&quot;
        &gt;
        &lt;/lottie-player&gt;
    &lt;/div&gt;

    &lt;div style=&quot;height:200vh; background-color:transparent&quot; id=&quot;lottieGuide&quot;&gt;&lt;/div&gt;


    &lt;script&gt;
        LottieInteractivity.create({
            mode: 'scroll',
            player: '#firstLottie',
            container: &quot;#lottieGuide&quot;,
            actions: [
            {
                visibility: [0, 1],
                type: 'seek',
                frames: [0, 100],
            },
            ],
        });

    &lt;/script&gt;
&lt;/div&gt;
&lt;div style=&quot;height:200vh; background-color:wheat&quot; id=&quot;lottieBottom&quot;&gt;&lt;/div&gt;
</code></pre>
        
        



        <div class="test-box test-box-1">
            <iframe src="<?=BASE_URL?>/pages/iframes/lottie-scroll/1.html" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/lottie-scroll/1.html" target="_blank">Open example in a new page</a></p>



        <h3><a href="https://stackoverflow.com/questions/69303726/lottie-animation-with-parrallax-effect-on-page-scroll" target="_blank">Lottie animation with parrallax effect on page scroll</a></h3>
        <p>Sample Code with sticky position: (animates but hides from screen) ->fixed</p>

        <div class="test-box test-box-2">
            <iframe src="<?=BASE_URL?>/pages/iframes/lottie-scroll/2.html" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/lottie-scroll/2.html" target="_blank">Open example in a new page</a></p>


        <div class="read-more">
            <h3>Lottie Files: Interactivity</h3>
            <p><a href="https://lottiefiles.com/interactivity#second" target="_blank">Lottie scroll relative to container </a></p>
        </div>

        <div class="read-more">
            <h3>Read more:</h3>
            <p><a href="https://lottiefiles.com/" target="_blank">Lottie Files </a></p>
            <p><a href="https://github.com/LottieFiles" target="_blank">Lottie Files: github</a></p>
            <p><a href="https://stackoverflow.com/questions/69303726/lottie-animation-with-parrallax-effect-on-page-scroll" target="_blank">Lottie animation with parallax effect on page scroll</a></p>
            <hr>
            
            <p><a href="https://www.youtube.com/watch?v=bNT5CX6izAc" target="_blank">VIDEO ON SCROLL - Tutorial con Elementor, Lottie, Blender, After Effects y Bodymovin </a></p>
            <p><a href="https://stackoverflow.com/questions/70791333/scroll-and-let-content-stick-while-animating" target="_blank">Scroll and let content stick while animating </a></p>
            <p><a href="https://medium.com/geekculture/how-to-jazz-up-your-website-like-apple-with-javascript-eed2bf227fec" target="_blank">How to jazz up your website like Apple with JavaScript</a></p>
            <p><a href="https://www.apple.com/airpods-3rd-generation/" target="_blank">AirPods </a></p>
            
        </div>
        <div class="read-more">
            <h3>Laravel manual:</h3>
            <p><a href="http://localhost/tutorials/laravel-vue-crud/public/posts/show/68#scroll_animation" target="_blank">Scroll animation</a></p>
        </div>
        
    </section>