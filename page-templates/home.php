<?php 
/**
 * Template name: Home
 */
get_header('home'); ?>

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

.flexitem {
    display: flex;
}
</style>
<main>

    <section class="relative">
        <div class="w-full h-[90vh] md:h-[100vh] overflow-hidden items-center">
            <video autoplay="" loop="" muted="" playsinline  class="absolute left-0 top-0 -z-10 h-[80vh] md:h-full md:w-full object-cover">
                <source src="/wp-content/uploads/2022/10/IMG_2860.mov">
            </video>
            <img src="/wp-content/themes/thelivfoundation/img/local/thumbnail-001.jpg" alt="" class="absolute left-0 top-0 -z-20 h-full w-full object-cover">
           
            <div class="container flex items-end h-full pb-6 md:pb-0 md:h-auto md:mt-[28vh] md:grid md:items-center">
                <div class="title-effect-one">
                    <h1 class="text-70 leading-60 md:text-70 md:leading-60 font-onemedium text-livred">Opening a <br>world of <br>opportunity <br>through <br>education</h1>
                </div>
            </div>
            <div class="container hidden md:block mt-6">
                <div class="flexitem">
                    <a href="/projects" class="border-2 rounded-full text-19 py-1 px-4 font-oneregular btn-livblue">Current projects </a>
                    <a href="/donate" class="border-2 rounded-full text-19 py-1 px-4 font-oneregular btn-livblue ml-2">Support now </a>
                </div>
            </div>
            <div class="absolute -z-10 left-0 right-0 bottom-0 background-linear-home-mobile h-[50vh] md:hidden ">
                <div class="bg-white mt-[27vh] h-[100vh]"></div>
            </div>
        </div>
    </section>

  

    <section class="background-linear-one h-[100%] relative">
        <div class="container grid grid-cols-8 gap-3 md:gap-8 py-8 md:pt-12 pb-[230px] md:pb-[230px]">
            <div class="col-span-8 md:col-span-3">
                <P class="text-18 leading-28 text-livblue font-oneregular">We are born with a gift — the ability to discover, learn, and grow. What nature afforded, community and society enhance. Education is salvation. It allows us to unlock our infinite capacity to find purpose and discover our own inner beauty.  </P>
            </div>
            <div class="col-span-8 md:col-span-4 pb-12">
                <P class="text-18 leading-28 text-livblue font-oneregular">Though life's challenges are never equal, the power of giving allows us to help each other unlock this potential and build a better tomorrow.</P>
            </div>
            <div class="absolute text-right right-3 md:right-8 bottom-6">
                <p class="text-30 leading-40 bold text-white font-onebold">The Liv Foundation</p>
                <p class="text-16 leading-26 text-white font-oneregular">Opening a world of opportunity through education</p>
            </div>
        </div>
    </section>

    <section class="relative w-full h-[90vh] overflow-hidden items-center">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-001.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid mt-[40vh] text-center items-center">
            <div class="title-effect-two">
                <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-white">Who we are</h2>
            </div>
        </div>
    </section>

    <section class="background-linear-two h-[100%] relative">
        <div class="container grid grid-cols-8 gap-y-3  py-3 md:py-4 md:pt-12 relative">
            <div class="col-span-8 md:col-span-3 mt-[220px] md:mt-4">
                <P class="text-18 leading-28 text-livred font-oneregular">Liv is a charitable foundation based in Amsterdam, the Netherlands. We are dedicated to improving the quality and accessibility of education in underserved areas of the developing world through financing and knowledge transfer.</P>
            </div>
            <div class="absolute text-right top-10 md:top-4 eye-right col-span-7 md:col-span-4 pb-12 eye-frame">
                <div class="relative">
                    <img src="/wp-content/themes/thelivfoundation/img/local/eye.svg" alt="" class="eye spin h-[130px] md:h-[180px]">
                    <img src="/wp-content/themes/thelivfoundation/img/local/eye-inside.svg" alt="" class="eye-inside h-[130px] md:h-[180px]">
                </div>
            </div>
        </div>
        <div class="container grid grid-cols-10 gap-y-3 pb-8 md:pb-12">
            <div class="col-span-10 md:col-span-4 md:pr-4">
                <P class="text-18 leading-28 text-livbrown font-oneregular">Our Vision is a future where the most underserved parts of society are empowered to reach their potential and play a crucial role in shaping a better world. We focus on eliminating barriers to high-quality education in the developing world, working toward UN Sustainable Development Goals to build communities that are not just surviving but thriving. To accomplish this, we build global partnerships that channel funds and drive knowledge exchange to where they’re needed most.</P>
            </div>
            <div class="col-span-10 md:col-span-6 md:pl-8">
                <P class="text-18 leading-28 text-livbrown font-oneregular">We believe that a connected and collaborative culture is essential for creating social change. To this end, we’ve set out to build an engaged ecosystem of long-term partners that share our mission and values. Rather than remotely financing projects, we aspire to grow close-knit, compassionate communities that make high-impact, lasting change possible.
                <br><br>Our organisation is totally non-profit. Our board members receive no remuneration and are driven by their passion to empower learners, help vulnerable communities gain the valuable skills, knowledge and resources needed to thrive in today's complex and rapidly changing world. Download our <a href="/resources/" class="underline">Policy Plan</a>. 
                </P>
            </div>
        </div>
    </section>

    <section class="background-linear-three h-[120vh] relative">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-002.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid grid-cols-10 gap-y-3  relative">
            <div class="col-span-10 md:col-span-4 md:pr-4">
            </div>
            <div class="col-span-10 md:col-span-6 md:pl-8 mt-[-15px]">
                <P class="text-26 leading-40 text-livblue font-onemono">Our Mission is to ensure equal opportunity for the developing world by ensuring equal access to quality education.</P>
                <a href="/about-us/" class="text-22 leading-42 text-livblue font-oneregular underline">Read more</a>
            </div>
        </div>
        <div class="container">
            <div class="absolute bottom-10 grid grid-cols-10">
                <div class=" left:3 col-span-8  md:col-span-3 md:pr-4">
                    <p class="text-14 leading-24 text-white font-onemono">Students attending a computerclass at the Cholankande Youth Training Centre</p>
                </div>
            </div>
        </div>
    </section>

    <section class="background-linear-four h-[100%]">
        <div class="container grid grid-cols-10 gap-y-3 py-8 md:py-12">
            <div class="col-span-10 md:col-span-4 order-2 md:order-1">
                <P class="text-18 leading-28 text-livbrown font-oneregular">Improving education is a complex process, so each of our partners brings something special to the table. Our aim is to assemble a highly-engaged group of organisations with specialist knowledge in curriculum development, delivery and industry best-practices to empower learners with the knowledge that makes them job-ready and a capacity and passion for lifelong, independent learning. <br><br>Learn more about our partners and how you can get involved visit our <a href="/partners/" class="underline">Partners page</a>.</P>
            </div>
            <div class="col-span-10 md:col-span-6 md:pl-8 title-effect-three md:pt-3 order-1 md:order-2">
                <h2 class="text-60 leading-50 md:text-100 md:leading-80 text-livblue font-onemedium">Our<br>partners</h2>
            </div>
        </div>
    </section>

    <section class="background-linear-five h-[90vh] relative">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-005.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
    </section>

    <section class="relative">
        <div class="mt-[-160px] md:mt-[-65px] absolute left-0 right-0">
            <div class="title-effect-four container">
                <P class="md:text-center text-60 leading-50 md:text-100 md:leading-110 text-white font-onemedium">Our <br class="md:hidden">projects</P>
            </div>
        </div>
    </section>

    <section class="bg-livblue">
        <div class="container">
            <div class="pt-8 pb-8 md:pt-10 md:pb-12 md:w-[72%] mx-auto">
                <p class="text-18 leading-28 text-livred font-oneregular">We select projects based on how they align with our mission and values and the urgency of the local and national needs. Measurability and accountability are important to us along with the project's capacity for long-term independent operations. We work closely with selected beneficiaries to identify and set priorities in alignment with our partner's wishes and ensure that there is a clear budget and activities plan for the year. We aim to complete at least one collaborative outreach mission each year to maximise engagement and impact.
                <br><br>Learn more about how to become one of our beneficiary projects visit our <a href="/projects/" class="underline">Projects page</a>.</p> 
            </div>
        </div>
    </section>

    <section class="relative w-full h-[90vh] overflow-hidden items-center background-linear-six">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-007.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid h-[90vh] text-center items-center">
            <div class="mx-auto">
                <div class="title-effect-six">
                    <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-livred pb-[12px]">Join us <br>in our effort<br> to truly make<br> an impact</h2>
                </div>
                <div class="mt-6">
                    <a href="/contact/" class="mx-auto border-2 rounded-full text-19 py-1 px-5 font-oneregular btn-livblue">Join us now</a>
                </div>
            </div>
            
        </div>
    </section>

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