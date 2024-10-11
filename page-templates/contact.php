<?php 
/**
 * Template name: Contact
 */
get_header(); ?>

<style>
.floating-btn {
    position: fixed;
    width: 90px;
    height: 50px;
    margin-top: 50px;
    transition: all .3s linear;
    box-shadow: 2px 2px 8px 0px #2F241F;
    bottom: 20px;
    right: 20px;
    background: #F25A38;
    color: #fff;
    display: block;
    line-height: 50px;
    border-bottom: 1px solid #36544f;
    transition: all .3s linear;
    border-radius: 5rem;
    z-index: 4;
}
	
.floating-btn:hover {
    background: #F25A38;
    color: #fff;
    z-index: 1;
    width: 220px;
    text-decoration: none;
}
	
.floating-btn svg {
    position: absolute;
    left: 25px;
    font-size: 20px;
    top: 9px;
	transition: all .3s linear;
}
	
@media screen and (min-width: 500px) {
.floating-btn svg {
    position: absolute;
    left: 25px;
    font-size: 20px;
    top: 9px;
	transition: all .3s linear;
}
}
	
.floating-btn:hover svg {
    position: absolute;
    left: 25px;
    font-size: 20px;
    top: 9px;
	transition: all .3s linear;
}
	
@media screen and (min-width: 500px) {
.floating-btn:hover svg {
    position: absolute;
    left: 25px;
    font-size: 20px;
    top: 9px;
	transition: all .3s linear;
}
}
	
	
.floating-btn span {
    display: inline-block;
    letter-spacing: 1px;
        font-family: "Apercu Pro Regular" !important;
	font-size: 16px;
    opacity: 0;
    transition-delay: 0s;
}
	
	.floating-btn:hover span {
    padding-left: 35%;
    display: inline-block;
	    font-family: "Apercu Pro Regular" !important;
	font-size: 16px;
		color: #001D63;
    opacity: 1;
    transition-delay: .2s;
}
</style>


<main>


    <section class="relative w-full h-[50vh] md:h-[90vh] overflow-hidden items-center background-contact">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-contact.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid mt-[20vh] md:mt-[40vh] text-center items-center">
            <div class="title-effect-seven">
                <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-white pb-[12px]">Get in touch</h2>
            </div>
        </div>
    </section>

    <section class="bg-livpink h-[100%]">
        <div class="container grid grid-cols-10 md:gap-8 py-8 md:py-12">
            <div class="col-span-10 md:col-span-5 relative-float">
                <!-- <p class="text-18 leading-28 text-livblue font-oneregular float-contact-text">Learn about our events, projects and their outcomes, and how you can get involved. We are eager to grow our passionate community of changemakers. Whether you’re interested in donating time, money or goods, helping us spread the word, or joining us on a remote mission, there’s always a way to help us make a difference.<br><br>We look forward to meeting you and hearing your ideas. If you represent a potential beneficiary project, please follow the guidelines on our <a href="/projects/" class="underline">Projects page</a>.</p> -->
                <p class="text-18 leading-28 text-livblue font-oneregular float-contact-text">Our goal is to create a dynamic, engaged ecosystem of partners and projects, building frameworks that strengthen these networks and effectively channel development where it’s needed most. We look forward to connecting with you and learning how we can work together. <br><br>If you represent a potential beneficiary project, please refer to the guidelines on <a href="/projects/" class="underline">Our Projects page</a>. While we are not currently accepting new project applications, we will review your submission when opportunities arise.</p>
            </div>
            <div class="col-span-10 md:col-span-5  contactform">
                <?php gravity_form( 2, false, false, false, '', false ); ?>
            </div>
        </div>
    </section>

    <section id="vacancies" class="bg-livblue">
        <div class="title-effect-two container pt-8 md:pt-12">
            <P class="md:text-center text-60 leading-50 md:text-100 md:leading-90 text-white font-onemedium pb-[12px]">Vacancies</P>

        </div>
        <div class="pb-8 md:pb-12 container md:w-[700px] mx-auto">
            <div class="mt-4">
                <p class="text-white text-20 leading-20 mb-2 font-oneregular">We’re seeking team members and consultants to help us deliver transformative change and make a lasting impact. At the heart of our mission is a strong commitment to fostering a diverse, inclusive, and equitable environment. We believe that individuals from all backgrounds should have the opportunity to contribute, grow, and thrive. 
                <br><br>If this resonates with you, we encourage you to reach out—we’d love to welcome you into our international community.
                </p>
            </div>
            <div class="mt-4">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'vacancies',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DECS'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
                <div class="accordion-item mt-[30px]"> 
                    <button class="accordion font-bold text-16 leading-26 lg:text-16 lg:leading-28 xl:text-18 xl:leading-28 pr-2 md:pr-3 lg:pr-4 py-[30px]">
                        <div class="w-full flex items-center justify-between">
                            <h2 class="w-[50%] text-16 leading-18 text-livblue font-onerbold"><?php the_title();?></h2>
                            <p class="w-[25%] text-16 leading-18 text-livblue font-oneregular hidden md:block"><?php echo get_field('job_type');?></p>
                            <p class="w-[25%] justify-end pr-[30px] text-16 leading-18 text-livblue font-oneregular hidden md:flex"><?php echo get_field('location');?></p>
                        </div>
                    </button>
                    <div class="panel">
                        <div class="pb-3 pr-2 md:pb-4 md:pr-3 lg:pb-4  lg:pr-4">
                            <hr class="mb-[30px]">
                            <div class="text-16 leading-26 text-livblue font-onerbold text-editor"><?php the_content();?></div>
                            <button data-vacature-id="<?php the_title();?>" class="open-form text-14 leading-20 xl:text-15 xl:leading-25 font-bold text-[#f25a38] items-center mt-[40px] flex h-fit">Apply now
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.011" height="8.575" viewBox="0 0 6.011 8.575" class="ml-[13px]">
                                    <path id="Path_627" data-name="Path 627" d="M6.011,0,2.3,4.287,6,8.575H3.7L0,4.287,3.7,0Z" transform="translate(6.011 8.575) rotate(180)" fill="#f25a38"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>



<div id="vac_form" class="fixed top-0 md:top-[0px] left-0 right-0 bottom-0 bg-[#00000033] z-[9999] flex justify-center items-start overflow-auto">
    <div class="w-[100vw] md:w-[694px] lg:w-[694px] h-[100dvh] md:h-fit bg-white pb-[30px] md:pb-[70px] lg:pb-[30px] overflow-auto md:mt-[50px]">
        <div class="flex justify-end py-[25px] px-[20px] md:px-[25px] lg:px-[30px]">
            <svg id="close" xmlns="http://www.w3.org/2000/svg" width="12.189" height="11.949" viewBox="0 0 12.189 11.949" class="cursor-pointer">
                <g id="Group_359" data-name="Group 359" transform="translate(-360.586 -22.344)">
                    <line id="Line_21" data-name="Line 21" x2="9.361" y2="8.956" transform="translate(362 23.868)" fill="none" stroke="#202624" stroke-linecap="round" stroke-width="2"/>
                    <line id="Line_23" data-name="Line 23" y1="9.121" x2="9.361" transform="translate(362 23.758)" fill="none" stroke="#202624" stroke-linecap="round" stroke-width="2"/>
                </g>
            </svg>
        </div>
        <div class="px-[20px] md:px-[25px] lg:px-[70px]">
            <h2 class="text-25 leading-35 md:text-30 md:leading-40 lg:text-26 lg:leading-36 xl:text-30 xl:leading-40 font-bold text-[#202624]">Apply now</h2>
            <p class="text-15 leading-28 md:text-15 md:leading-30 lg:text-15 lg:leading-28 xl:text-17 xl:leading-30 font-normal mt-[15px] lg:mt-[20px] mb-[25px]">Send your motivation letter and resume to info@thelivfoundation.com or complete our application form.</p>
            <?php echo do_shortcode('[gravityform id="5" title="false"]'); ?>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.open-form');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var vacatureId = button.getAttribute('data-vacature-id');
            document.getElementById('vacature-id-field').value = vacatureId; // Zet het ID in een hidden field in je formulier
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var buttons = document.querySelectorAll('button[data-vacature-id]');

    buttons.forEach(function (button) {
        button.addEventListener('click', function () {
            var vacatureId = button.getAttribute('data-vacature-id');
            var formField = document.querySelector('#input_5_6'); // Het ID van het Gravity Forms veld (vervang dit met het juiste ID)
            if (formField) {
                formField.value = vacatureId;
            }
        });
    });
});
</script>


	<a href="/donate" class="floating-btn">
<svg width="38.78px" height="30px" viewBox="0 0 53.4105832 41.3193901" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Group" fill="#001D63" fill-rule="nonzero">
            <g id="Layer_1" transform="translate(0, -0)">
                <path d="M42.0705765,21.2492172 C42.1680745,21.2497596 42.2640054,21.2246796 42.3487583,21.176481 C42.7993038,20.909572 53.4105832,14.6052083 53.4105832,6.50884469 C53.4144336,3.81191984 51.7523124,1.39282205 49.2333928,0.42925455 C46.7144731,-0.534312947 43.8621841,0.157878232 42.0651219,2.16884469 C40.2672263,0.16204017 37.4175277,-0.527337475 34.9011673,0.435794709 C32.384807,1.39892689 30.7236475,3.81482697 30.725121,6.50920832 C30.725121,9.02448105 31.7545765,11.617572 33.7909401,14.2212083 C33.9131899,14.3782753 34.1099476,14.4581916 34.3070965,14.4308537 C34.5042453,14.4035157 34.6718338,14.2730768 34.7467328,14.0886719 C34.8216319,13.904267 34.7924627,13.6939116 34.6702129,13.5368447 C32.7894856,11.1332083 31.8378492,8.76666287 31.8378492,6.50920832 C31.8348796,4.16419582 33.3494777,2.08674299 35.5830031,1.37228069 C37.8165286,0.657818379 40.2556429,1.47055385 41.6142129,3.38193559 C41.7203955,3.52744679 41.8904565,3.61254502 42.0705765,3.61029923 L42.0705765,3.61029923 C42.2485849,3.61075166 42.4160623,3.52599916 42.5211219,3.38229923 C43.8796919,1.47091748 46.3188062,0.658182016 48.5523317,1.37264432 C50.7858571,2.08710663 52.3004552,4.16455946 52.2974856,6.50957196 C52.2974856,13.2757538 43.7396674,18.9902992 42.0647583,20.0368447 C41.0775959,19.4068672 40.1230353,18.7272055 39.2047583,18.000481 C39.0502985,17.8699922 38.8372029,17.8335769 38.648176,17.9053683 C38.4591492,17.9771597 38.3239532,18.1458543 38.2950591,18.34598 C38.2661649,18.5461057 38.348122,18.7461528 38.5091219,18.868481 C39.5525018,19.7039511 40.6471243,20.4733324 41.7865765,21.1721174 C41.8726082,21.2228384 41.9707065,21.2494669 42.0705765,21.2492172 Z" id="Path_497"></path>
                <path d="M35.9945765,41.3193901 C38.0155979,41.2974554 39.6788792,39.7229612 39.8115397,37.7061792 C39.9442001,35.6893971 38.5014928,33.9105964 36.5007583,33.6241174 L25.8683947,32.2219356 L42.1327583,15.9517538 C43.5247154,14.4508094 43.480072,12.1176942 42.0317146,10.6710984 C40.5833572,9.22450252 38.2501895,9.1826984 36.7509401,10.576481 L24.8716674,22.456481 C24.6810738,22.6771051 24.6931197,23.0074433 24.8992761,23.2135997 C25.1054325,23.419756 25.4357706,23.431802 25.6563947,23.2412083 L37.5411219,11.3557538 C38.5936763,10.3048062 40.2989015,10.3061086 41.3498492,11.3586629 C42.4007968,12.4112172 42.3994944,14.1164425 41.3469401,15.1673901 L24.2818492,32.2273901 C24.1329376,32.3752183 24.0820247,32.5953596 24.1509094,32.7935584 C24.2197941,32.9917571 24.3962627,33.1328711 24.6047583,33.156481 L36.3563947,34.7146629 C37.805478,34.89795 38.858152,36.1825593 38.7530758,37.6394037 C38.6479995,39.0962481 37.4218729,40.2164967 35.9614856,40.1899356 L14.0269401,39.9226629 C11.9890521,39.8993476 10.0414496,39.0783493 8.60184922,37.6357538 L4.61748559,33.6517538 C-0.0575645294,28.964934 -0.0575645294,21.3785735 4.61748559,16.6917538 L12.5022129,8.82375378 C13.5547672,7.7728061 15.2599925,7.77410855 16.3109401,8.82666287 C17.3618878,9.87921718 17.3605854,11.5844425 16.308031,12.6353901 L15.1563947,13.7870265 C14.938192,14.003723 14.936971,14.3562784 15.1536674,14.574481 C15.3703639,14.7926837 15.7229193,14.7939048 15.9411219,14.5772083 L17.0982129,13.4197538 C18.5843609,11.9324007 18.583384,9.52190185 17.096031,8.03575382 C15.608678,6.54960578 13.1981791,6.55058259 11.712031,8.03793559 L3.83203104,15.9237538 C-1.27734368,21.0434394 -1.27734368,29.333159 3.83203104,34.4528447 L7.81712195,38.4379356 C9.46049031,40.0852854 11.6834991,41.023776 14.0102129,41.052481 L35.9447583,41.3193901 L35.9945765,41.3193901 Z" id="Path_498"></path>
                <path d="M25.2611219,23.4019437 C25.408983,23.4027326 25.5510793,23.3446379 25.656031,23.240481 L30.7363947,18.1608447 C31.8037464,17.2234763 32.2602196,15.7696976 31.9202646,14.3904479 C31.5803096,13.0111982 30.5005174,11.9360753 29.1198074,11.6021008 C27.7390974,11.2681262 26.2873105,11.7308953 25.3545765,12.8022992 L20.2756674,17.8881174 C20.0796835,18.1080213 20.089064,18.4425722 20.2970621,18.6511488 C20.5050601,18.8597254 20.8395836,18.8700351 21.060031,18.6746629 L26.1458492,13.5648447 C26.8167025,12.8423576 27.8287277,12.5441999 28.7841358,12.7875661 C29.7395439,13.0309324 30.4856,13.7769172 30.7290575,14.732302 C30.972515,15.6876868 30.674454,16.6997406 29.952031,17.3706629 L24.8716674,22.456481 C24.7160709,22.6154641 24.6701321,22.8518498 24.7548594,23.0575369 C24.8395866,23.263224 25.0386917,23.3986705 25.2611219,23.4019437 L25.2611219,23.4019437 Z" id="Path_499"></path>
                <path d="M20.6702129,18.8062992 C20.8161847,18.8056556 20.9560564,18.7476696 21.0596674,18.6448447 L23.7749401,15.9350265 C24.8422919,14.9976581 25.298765,13.5438794 24.95881,12.1646297 C24.6188551,10.78538 23.5390629,9.71025713 22.1583529,9.37628258 C20.7776428,9.04230803 19.3258559,9.5050771 18.3931219,10.576481 L15.1545765,13.8150265 C15.0134241,13.9552045 14.957778,14.1600383 15.0085995,14.3523688 C15.0594211,14.5446994 15.2089893,14.6953072 15.4009632,14.7474597 C15.5929371,14.7996123 15.7981514,14.7453863 15.9393038,14.6052083 L19.1778492,11.3666629 C20.2390506,10.3786074 21.8920333,10.4080987 22.9173142,11.4333797 C23.9425952,12.4586606 23.9720865,14.1116433 22.984031,15.1728447 L20.2742129,17.8881174 C20.1060836,18.0394093 20.0530815,18.2810306 20.1424456,18.4888063 C20.2318097,18.6965819 20.4436602,18.8242904 20.6691219,18.8062992 L20.6702129,18.8062992 Z" id="Path_500"></path>
            </g>
        </g>
    </g>
</svg><span>Donate here</span></a>

</main>
<?php get_footer(); ?>