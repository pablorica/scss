<?php
/**
 * CSS Grid
 *
 * @package @pablorica/scss
 */

?>




    <section id = "main" class="mail-signatures">
        
        <h2>CSS Grid</h2> 

        <p>Grid is the very first CSS module created specifically to solve the mosaic problems we've all been hacking our way around for as long as we've been making websites.</p>


        <h3>Mosaic</h3>

        <p><strong>HTML</strong></p>
        <pre><code>&#x3C;div class=&#x22;container&#x22;&#x3E;
    &#x3C;div class=&#x22;tile&#x22;&#x3E;
        &#x3C;img src=&#x22;https://via.placeholder.com/800x600/EE4540/BE3733&#x22; alt=&#x22;&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;tile&#x22;&#x3E;
        &#x3C;img src=&#x22;https://via.placeholder.com/800x600/C72B41/9F2234&#x22; alt=&#x22;&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;tile&#x22;&#x3E;
        &#x3C;img src=&#x22;https://via.placeholder.com/800x600/800834/66062A&#x22; alt=&#x22;&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;tile&#x22;&#x3E;
        &#x3C;img src=&#x22;https://via.placeholder.com/800x600/530332/420228&#x22; alt=&#x22;&#x22;&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;tile&#x22;&#x3E;
        &#x3C;img src=&#x22;https://via.placeholder.com/800x600/2E122D/2A021A&#x22; alt=&#x22;&#x22;&#x3E;
    &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
        </code></pre>

        <p><strong>SCSS</strong></p>
        <pre><code>
        html{
            font-size: 20px;
          }
          body{
            font-family: sans-serif;
            margin: 1rem;
          }
          
          .container{
              display: grid;
              grid-template-columns: repeat(6, 1fr);
              grid-gap: 1rem;
              max-width: 1440px;
              margin: 0 auto;
          }
          
          .tile img{
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
          
          .tile:nth-child(1){
              grid-column: span 4;
              grid-row: span 2;
          }
          
          .tile:nth-child(2),
          .tile:nth-child(3){
              grid-column: span 2;
          }
          
          .tile:nth-child(4),
          .tile:nth-child(5){
              grid-column: span 3;
          }
          @media screen and (max-width: 650px){
              .container{
                  display: block;
              }
              .tile{
                  margin-bottom: 1rem;
              }
          }
</code></pre>
        
        <div class="test-box test-box-1" style="height: 600px;">
            <iframe src="<?=BASE_URL?>/pages/iframes/grid/1.html" width="100%" height="100%"></iframe>
        </div>
        <p><a href="<?=BASE_URL?>/pages/iframes/grid/1.html" target="_blank">Open example in a new page</a></p>


        <ul>
            <li>
                <a 
                    href="https://medium.com/@axel/mosaic-layouts-with-css-grid-d13f4e3ed2ae" 
                    target="_blank"
                >Mosaic Layout</a>
            </li> 
            <li>
                <a 
                    href="https://codepen.io/axelvaldez/pen/wjrGdm?editors=1100#" 
                    target="_blank"
                >CodePen: Mosaic Layout with Grid</a>
            </li>
        </ul>        
            

        <div class="read-more">
            <h3>Read more</h3>
            <p>
                <a 
                    href="https://css-tricks.com/snippets/css/complete-guide-grid/" 
                    target="_blank"
                >A Complete Guide to CSS Grid </a>
            </p>            
        </div>
    
    </section>