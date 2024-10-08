<?php 
/**
 * Template name: Donate
 */
get_header(); ?>
<style>
#gform_submit_button_4,
#gform_submit_button_2 {
    color: #f25a38 !important;
    border-radius: 9999px !important;
    font-family: "Apercu Pro Regular" !important;
    font-size: 16px !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    padding-left: 50px !important;
    padding-right: 50px !important;
    position: relative !important;
    border: solid #001d63 0px !important;
    z-index: 1 !important;
    transition: all .5s ease-in-out !important;
    background-image: -webkit-linear-gradient(166deg, #F25A38 50%, #001D63 50%) !important;
    background-image: linear-gradient(166deg, #F25A38 50%, #001D63 50%) !important;
    background-size: 400% !important;
    background-color: rgba(0, 0, 0, 0) !important;
    background-repeat: no-repeat !important;
    background-position: 100% !important
}

#gform_submit_button_4,
#gform_submit_button_2:hover {
    background-position: 0% !important;
    color: #001d63 !important;
    border-color: #001d63 !important
}
</style>
<main>


    <section class="relative w-full h-[50vh] md:h-[90vh] overflow-hidden items-center background-contact">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-donate.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid mt-[20vh] md:mt-[40vh] text-center items-center">
            <div class="title-effect-seven">
                <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-white pb-[12px]">Donate now</h2>
            </div>
        </div>
    </section>

    <section class="bg-livpink h-[100%]">
        <div class="container grid grid-cols-10 md:gap-8 py-8 md:py-12">
            <div class="col-span-10 md:col-span-5 relative-float">
                <div class="float-contact-text">
                    <p class="text-26 leading-40 text-livblue font-onemono ">Join us <br>in our effort<br>to truly make <br>an impact</p>
                    <P class="text-18 leading-28 text-livblue font-oneregular pt-3">We work hard to make sure that your funds are channelled to where they are needed most to make a lasting impact. Every little bit helps and has the potential to change someone's life.</p>
                </div>
            </div>
            <div class="col-span-10 md:col-span-5 contactform">
                <?php gravity_form( 4, false, false, false, '', false ); ?>
            </div>
        </div>
    </section>



</main>
<?php get_footer(); ?>