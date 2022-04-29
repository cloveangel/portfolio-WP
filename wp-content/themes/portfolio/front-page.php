<?php get_header(); ?>
<main>
    <section id="welcome">
        <div class="content ">
            <img class="avatar bounceInDown" src="<?php echo get_theme_file_uri('/images/avatar.jpg'); ?> "
                alt="avatar">
            <h1>Welcome! </h1>
            <p>This is my super neat portfolio. </br> I'm glad you're here.</p>
        </div>
    </section>
    <section id="aboutMe">
        <div class="content">
            <h2>About</h2>
            <div class="underline"></div>
            <p>Hey, I’m Louise, a Front-End Web Developer with user-centered design perspective. </p>
            <p><span class="iconfont icon-start star"> </span>My past working experience as technical support has given
                me strong empathy and ability to understand
                others’ differing perspectives and values. </p>
            <p><span class="iconfont icon-start star"> </span>Combining my empathy with design thinking methods allow me
                to sharp intuitive user journeys, which
                not
                only benefit businesses and users, but could also have a positive impact on society. </p>
            <p><span class="iconfont icon-start star"> </span>In my free time, I like to walk with my dog, cook, read,
                draw, travel (before pandemic) and make small things. </p>
            <p><span class="iconfont icon-start star"> </span>I want to make products that can make me proud, and add
                value and grow with the company, is that what
                you are looking for?</p>
        </div>
        <div class="image_right clearfloat">
            <img src="<?php echo get_theme_file_uri('/images/louise.jpg'); ?> " alt="my photo">
        </div>
    </section>
    <section id="works">
        <a href="<?php echo get_post_type_archive_link('portfolio');?>">
            <h2>Works</h2>
        </a>
        <div class="underline"></div>
        <div id="wrap">
            <div class="project">
                <a href="https://www.pqlabs.com/g5-series-touch-screen.html" id="inline-block" target="_blank">
                    <p class="project-more">PQ Labs</p>
                    <img class="project-image" src="<?php echo get_theme_file_uri('/images/pqlabs.jpg'); ?> "
                        alt="my_works" />
                </a>
            </div>
            <div class="project">
                <a href="https://cloveangel.github.io/sandbox/require/index.html" id="inline-block" target="_blank">
                    <p class="project-more">Requirejs</p>
                    <img class="project-image" src="<?php echo get_theme_file_uri('/images/require.jpg'); ?> "
                        alt="my_works" />
                </a>
            </div>
            <div class="project">
                <a href="https://cloveangel.github.io/sandbox/diandian/index.html" id="inline-block" target="_blank">
                    <p class="project-more">Dian Dian</p>
                    <img class="project-image" src="<?php echo get_theme_file_uri('/images/diandian.jpg'); ?> "
                        alt="my_works" />
                </a>
            </div>
            <div class="project">
                <a href="http://cloveangel.github.io/" id="inline-block" target="_blank">
                    <p class="project-more">My Blog</p>
                    <img class="project-image" src="<?php echo get_theme_file_uri('/images/ideas.png'); ?> "
                        alt="my_works" />
                </a>
            </div>
        </div>
    </section>

    <?php   get_footer(); ?>