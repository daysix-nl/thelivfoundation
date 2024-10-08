<?php 
/**
 * The page template file
 * 
 * @package Day Six theme
 */


get_header(); ?>

<main>
<section class="bg-livred pt-12 pb-12">
        <div class="container text-wit home-header-section flex flex-col justify-center">
            <h1 class="text-65 leading-65 md:text-100 md:leading-100 text-livblue font-onemedium row-center"><?php the_title();?></h1>
            <p class="text-22 leading-30 md:text-28 md:leading-38 text-livblue font-oneregular pr-4 mt-3"><?php the_content();?></p>
        </div>
</section>
</main>
<?php get_footer(); ?>