<?php
/* 
Template Name: Home
*/
?>

<?php get_header() ?>
<section class="leadingMed text--center py--10">
            <div class="container">
                <h2 class="text--secondary">Leading Medicine</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the 
                    two major realms of Classical 
                    physics: Newtonian mechanics
                </p>

                <div class="leadingMed__wrapper">
                    <?php
                        $args = array(
                            'post_type' => 'physionic',
                            'posts_per_page' => 3,
                            'tax_query'       => array(
                             array(
                               'taxonomy'      => 'post_tag',
                               'field'         => 'slug',
                               'terms'         => 'emergency'
                             )
                           )
                             );
                        $newQuery = new WP_Query($args);
                     ?>

                    <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
                    <div class="leadingMed__items">
                        <div class="leadingMed__title d--flex align--center">
                            <img src="<?php echo get_template_directory_uri()?> /img/icn-circle circle-md.jpeg" alt="">
                            
                            <h4>Emergency Case</h4>
                        </div>
                        <div class="leadingMed__scope">
                            <ul>
                                <li>The Best products start with Figma</li>
                                <li>Design with real data</li>
                                <li>Lightning fast prototyping</li>
                                <li>Fastest way to organize</li>
                                <li>work at the speed of thought</li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    endwhile;
                        else :
                            echo "no available post yet";
                    endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </section>

        <section class="testimonials text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">What Clients Say</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the two major 
                    realms of Classical physics: 
                    Newtonian mechanics
                </p>
                <div class="testimonials__wrapper">
                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <p class="mb--3">
                            Slate helps you see how many 
                            more days you need to work to 
                            reach your financial goal.
                        </p>
                        <img src="<?php echo get_template_directory_uri()?> /img/dr.A.jpeg" alt="">
                    </div>

                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <p class="mb--3">
                            Slate helps you see how many 
                            more days you need to work to 
                            reach your financial goal.
                        </p>
                        <img src="<?php echo get_template_directory_uri()?> /img/dr.B.jpeg" alt="">
                    </div>

                    <div class="testimonials__items text--left bg--light">
                        <ul class="stars d--flex mb--2">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-regular fa-star"></i></li>
                        </ul>
                        <p class="mb--3">
                            Slate helps you see how many 
                            more days you need to work to 
                            reach your financial goal.
                        </p>
                        <img src="<?php echo get_template_directory_uri()?> /img/dr.C.jpeg" alt="">
                    </div>

                </div>
            </div>
        </section>

        <section class="faq text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">FAQ</h2>
                <p class="mb--5">
                    Problems trying to resolve 
                    the conflict between the 
                    two major realms of Classical 
                    physics: Newtonian mechanics
                </p>
                <div class="faq__wrapper">
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="/img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="faq__items text--left bg--light">
                        <ul class="d--flex">
                            <li><img src="<?php echo get_template_directory_uri()?> /img/arrow-right.jpeg" alt=""></li>
                            <li>
                                <h4 class="text--secondary">the qucik fox jumps over the lazy dog</h4>
                                <p>Things on a very small scale ...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>

        <section class="pricing text--center py--10 bg--gray">
            <div class="container">
                <h2 class="mb--2 text--secondary">Pricing</h2>
                <p class="t--bold mb--5">
                    Problems trying to resolve 
                    the conflict between the two major 
                    realms of Classical physics: 
                    Newtonian mechanics
                </p>
            
                <div class="pricing__wrapper">
                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3">FREE</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>0</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--secondary">
                        <h3 class="text--secondary mb--3">STANDARD</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>9.99</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>

                    <div class="pricing__items p--3 my--3 bg--light">
                        <h3 class="text--secondary mb--3">PREMIUM</h3>
                        <p class="t--bold mb--2">Organize across all apps by hand</p>
                        <ul class="amount text--primary d--flex justify--center align--center mb--2">
                            <li><h4>19.99</h4></li>
                            <li class="text--left">
                                <p class="t--bold"><small>$</small></p>
                                <p><small>Per Month</small></p>
                            </li>
                        </ul>
                        <ul class="includes mb--3">
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-main.jpeg" alt="">
                                <p class="text--secondary">Unlimited product updates</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">1GB Cloud storage</p>
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri()?> /img/list-style-gray.jpeg" alt="">
                                <p class="text--secondary">Email and community support</p>
                            </li>
                        </ul>
                        <a href="#" class="btn bg--primary">Try for free</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="subscribe text--center py--10 bg--secondary text--light">
            <div class="container">
                <div class="subscribe__wrapper">
                    <div class="subscribe__intro mb--2">
                        <h2>Get In Touch</h2>
                        <p class="text--light">
                            <small>
                                The gradual accumulation of information about atomic and 
                                small-scale behaviour during the first quarter of the 20th 
                            </small>
                        </p>
                    </div>
                    <div class="groupInput">
                        <input type="text" name="" id="" placeholder="Your Email">
                        <input type="button" value="Subscribe">
                    </div>
                </div>
            </div>
        </div>


<?php get_footer() ?>

