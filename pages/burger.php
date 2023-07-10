<?php
/**
 * Textify.js
 *
 * @package @pablorica/scss
 */

?>




    <section id = "main" class="mail-signatures">
        
        <h2>Bootstrap Burger Toggler</h2> 

        <h3>Bootstrap burger menu fliping to a cross.</h3>

        <p><strong>HTML</strong></p>
        <pre><code>
            &lt;button
                class=&quot;navbar-toggler collapsed&quot;
                type=&quot;button&quot;
                data-bs-toggle=&quot;collapse&quot;
                data-bs-target=&quot;#navbarNavDropdown&quot;
                aria-controls=&quot;navbarNavDropdown&quot;
                aria-expanded=&quot;false&quot;
                aria-label=&quot;Toggle navigation&quot;
            &gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;
                &lt;span class=&quot;icon-bar&quot;&gt;&lt;/span&gt;                
            &lt;/button&gt;
        </code></pre>

        <p><strong>SCSS</strong></p>
        <pre><code>
            .navbar-toggler {
                .icon-bar {
                    display: block;
                    width: 30px;
                    height: 2px;
                    border-radius: 0px;
                    position: relative;
                    transition: all 500ms ease-in-out;
                    background-color:$white;
        
                    &  + .icon-bar {
                        margin-top: 7px;
                    }
                    
                    &:nth-of-type(1) {
                          top: 0;
                    }
                    &:nth-of-type(2) {
                          top: 0;
                    }
                    &:nth-of-type(3) {
                        top: 0;
                    }
                }
                &[aria-expanded="true"] {
                    .icon-bar {
                        width: 35px;
                        &:nth-of-type(1) {
                            top:7px;
                            transform: rotate(45deg);
                        }
                        &:nth-of-type(2) {
                            opacity:0;
                            border:none;
                        }
                        &:nth-of-type(3) {
                            top: -11px;
                            transform: rotate(-45deg);
                        }
                    }
                }
            }
</code></pre>


        
            

        <div class="read-more">
            <h3>Read more</h3>
            <p>
                <a 
                    href="https://getbootstrap.com/docs/5.2/examples/" 
                    target="_blank"
                >Bootstrap 5 Examples</a>
            </p>            
        </div>
    
    </section>