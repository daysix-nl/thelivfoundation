<?php 
/**
 * Template name: Partners
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


    <section class="relative w-full h-[50vh] md:h-[90vh] overflow-hidden items-center">
        <img src="/wp-content/themes/thelivfoundation/img/local/background-partners.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid mt-[20vh] md:mt-[40vh] text-center items-center">
            <div class="title-effect-seven">
                <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-white pb-[12px]">Our partners</h2>
            </div>
        </div>
    </section>

    <section class="h-[100%] background-linear-eleven">
        <div class="container grid grid-cols-10 gap-3 pt-8 pb-8 md:pt-12 md:pb-12">
            <div class="col-span-10 md:col-span-5 md:mr-8">
                <p class="text-18 leading-28 text-white font-oneregular">We work closely with our partners to systematically strengthen beneficiary projects with the goal of long-term success. We have developed 6 project pillars to assist with planning holistic interventions that improve all aspects of a project. They serve as a starting point for discussions on partner cooperation, and funding priorities.</p>
            </div>
            <div class="col-span-10 md:col-span-5">
                <p class="text-18 leading-28 text-white font-oneregular">We believe the most powerful tool for driving change is empathetic knowledge exchange and authentic engagement. To this end we highly encourage all partners to share knowledge with beneficiary projects and get to know the people involved, in person, wherever possible.</p>
            </div>
        </div>
    </section>


    <section class="background-linear-ten">
            <div class="container flex flex-row justify-center gap-5 items-center pt-8 md:pt-12">
                <div class="w-[110px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100px" viewBox="0 0 176.328 162.544" class="heartbeat">
                        <path id="noun-handshake-617750" d="M180.392,57.665a54.6,54.6,0,0,0-20.461-36.413,52.588,52.588,0,0,0-39.344-10.735c-10.6,1.544-19.6,5.486-26.767,11.722a111.648,111.648,0,0,0-10.387-7.25C60.358,2.173,31.929,7.376,15.84,27.344,4.936,40.761,1.832,57.152,6.615,76.063a67.147,67.147,0,0,0,18.9,31.537,17.025,17.025,0,0,0,5.522,13.276,16.026,16.026,0,0,0,10.673,4.47,16.051,16.051,0,0,0,4.843,10.927,15.583,15.583,0,0,0,10.815,4.319A17.513,17.513,0,0,0,62.465,152a22.241,22.241,0,0,0,12.351,5.569c1.6,6.759,4.547,10.43,9.683,12.146a16.764,16.764,0,0,0,5.184.828,14.441,14.441,0,0,0,9.795-3.713c.329-.333.929-.894,1.711-1.625,6.49-6.078,12.628-12.233,14.8-16.873,4.166,1.734,10.064,1.784,13.56-.927a13.123,13.123,0,0,0,5.3-12.792,15.6,15.6,0,0,0,12.2-3.812,14.057,14.057,0,0,0,3.607-12.3c3.795.252,9.145-.379,13.251-4.719,4.034-4.257,3.367-9.766,2.56-12.438C177.174,88.919,182.24,73.064,180.392,57.665ZM33.674,118.046A13.169,13.169,0,0,1,29.4,107.673L48.429,89.25c2.014-1.5,8.477-4.232,13.319,1.573,4.458,5.356,1.774,10.275,1.25,11.122L42.858,121.4A11.8,11.8,0,0,1,33.674,118.046ZM49.22,133.47a12.409,12.409,0,0,1-3.609-9.354l20.064-19.375c1.066-.6,7.684-4.048,11.881.1,4.236,4.189,3.069,9.888,2.637,11.469L58.638,136.64A11.772,11.772,0,0,1,49.22,133.47Zm12.043,6.012,21.579-20.356c1.711-.36,8.15-1.37,11.738,2.875,2.73,3.231,2.024,8.514,1.734,10.1L75.573,153.7c-3.675-.081-8.05-2.314-10.492-4.555A13.412,13.412,0,0,1,61.264,139.482Zm37.278,22.9c-.83.774-1.467,1.372-1.724,1.641-4.365,3.864-9.592,2.529-11.089,2.024-3.849-1.287-5.975-4.183-7.227-9.807l20.811-21.67c3.638-2.274,8.673.507,10.507,2.744,2.347,2.873,2.974,7.088,3.1,8.131C112.266,149.523,101.957,159.182,98.541,162.381Zm62.556-51.26c-4.029,4.259-9.876,3.744-12.587,3.2L113.557,79.062a1.936,1.936,0,0,0-2.75,2.726l35.2,35.515c2.09,3.067.836,8.264-1.676,10.741-2.264,2.233-7.978,4.009-11.223,1.894a1.524,1.524,0,0,0-.153-.068L97.3,93.319a1.935,1.935,0,0,0-2.771,2.7l35.917,36.807c1.31,3.738.855,8.568-3.2,11.473-2.572,1.991-7.649,1.652-10.569.043a20.4,20.4,0,0,0-3.858-9.482c-2.485-3.036-7.614-5.753-12.365-4.841.164-2.984-.192-7.293-2.912-10.517-3.87-4.576-9.652-4.863-13.156-4.524a15.016,15.016,0,0,0-4.106-12.893c-3.92-3.876-8.843-3.5-12.345-2.467a13.51,13.51,0,0,0-3.208-11.273c-6.115-7.337-14.737-5.184-18.737-2.1a1.892,1.892,0,0,0-.164.143l-18.3,17.723A63.036,63.036,0,0,1,10.367,75.117C5.838,57.2,8.61,42.377,18.847,29.78c14.913-18.5,41.283-23.3,62.705-11.407a104.845,104.845,0,0,1,9.416,6.562L60.312,54.944c-.192.161-4.683,3.98-4.721,9.209-.021,3.042,1.42,5.838,4.286,8.307,8.947,7.713,22.494,6.738,32.208-2.32,4.53-4.218,16.053-15.523,20.039-19.439l50.509,51.351C163.085,103.219,164.186,107.863,161.1,111.121ZM113.526,46.606a1.937,1.937,0,0,0-1.364-.579h-.015a1.929,1.929,0,0,0-1.358.557c-.157.157-15.89,15.644-21.343,20.722C81.2,75,69.828,75.927,62.4,69.528c-1.96-1.691-2.951-3.483-2.943-5.331.014-3.427,3.307-6.264,3.446-6.387l32.33-31.643c6.774-6.327,15.492-10.3,25.869-11.815A48.723,48.723,0,0,1,157.537,24.3a50.7,50.7,0,0,1,19.007,33.822c1.683,14.027-2.819,28.479-12.388,39.965Z" transform="translate(-4.437 -7.999)" fill="#f25a38"/>
                    </svg>
                </div>
            </div>
            <div class="justify-around flex mt-4 pb-4 md:pb-6">
                <div class="container md:w-[750px] gap-3 grid grid-cols-2 md:grid-cols-3 text-center">
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">People</p>
                        <p class="text-livred text-14 font-onemedium">Improving the well-being <br>of teachers and students</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Curriculum</p>
                        <p class="text-livred text-14 font-onemedium">Introducing new <br>learning material</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Physical<br>Facilities</p>
                        <p class="text-livred text-14 font-onemedium">Safe and sustainable buildings, <br class="hidden sm:block">sanitation, water and electricity</p>
                    </div>
          
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Technology</p>
                        <p class="text-livred text-14 font-onemedium">Helping beneficiaries fully <br>transition to the digital age</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Awareness</p>
                        <p class="text-livred text-14 font-onemedium">Helping raise awareness for <br>beneficiary initiatives</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Quality</p>
                        <p class="text-livred text-14 font-onemedium">Administrative interventions <br>to improve operations</p>
                    </div>
                </div>
            </div>
    </section>


    <section class="h-[100%] background-linear-twelve">
        <div class="container pt-4 md-pt:6 pb-8 md:pb-12">
            <div class="title-effect-three">
                <P class="text-center text-60 leading-50 md:text-100 md:leading-90 text-livblue font-onemedium pb-[12px]">Meet our <br>partners</P>
            </div>
        </div>
    </section>

    <!-- REPEATER START-->
    <section class="bg-livred">
        <div class="container pb-6">
            <div class="partnerlogo flex justify-around">
                <img class="w-[200px]" src="/wp-content/themes/thelivfoundation/img/local/gapstars-logo.png" alt="">
            </div>
        </div>
        <div class="container md:w-[750px] text-center pb-6 ">
            <div class="videoclick relative">
                    <!--<img class="placeholder" src="/wp-content/themes/thelivfoundation/img/local/placeholder.png" alt="Watch-video">-->
                    <!--<video class="video hidden" autoplay muted controls playsinline>-->
                    <!--    <source src="/wp-content/themes/thelivfoundation/img/local/gapstars.mp4">-->
                    <!--</video>-->
                    <video class="video" muted controls playsinline>
                        <source src="/wp-content/themes/thelivfoundation/img/local/gapstars.mp4">
                    </video>
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-3 pb-8 md:pb-12">
            <div class="col-span-1 md:pr-5">
                <h2 class="text-22 leading-36 text-livblue font-onebold pb-3">Objective</h2>
                <p class="text-white text-22 font-onemono">Uplifting digital literacy & access to the digital economy in Sri Lanka.</p>
            </div>
            <div class="col-span-1">
                <a href="https://gapstars.net" target="_blank" class="text-22 leading-36 text-white font-onebold underline">Gapstars</a>
                <p class="text-18 leading-28 text-white font-oneregular pt-3">Gapstars is the digital transformation lead for the Liv Foundation. With offices in Sri Lanka, Lisbon, and the Netherlands, the company works to help Dutch tech ventures build integrated offshore software development teams in Sri Lanka. Through missions, consultations, and funding, Gapstars helps beneficiaries strengthen their infrastructure and empower staff and students.</p>
            </div>
        </div>
    </section>

    <section class="bg-livred">
        <div class="container pb-6">
        <div class="partnerlogo flex justify-around">
                <img class="w-[160px]" src="/wp-content/themes/thelivfoundation/img/local/remind-logo.png" alt="">
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-3 pb-8 md:pb-12">
            <div class="col-span-1 md:pr-5">
                <h2 class="text-22 leading-36 text-livblue font-onebold pb-3">Objective</h2>
                <p class="text-white text-22 font-onemono">Support projects, organizations & initiatives that directly or indirectly contribute to the quality of education in the Netherlands & around the world.</p>
            </div>
            <div class="col-span-1">
                <a href="https://www.remindlearning.nl/" target="_blank" class="text-22 leading-36 text-white font-onebold underline">The Remind Learning Foundation </a>
                <p class="text-18 leading-28 text-white font-oneregular pt-3">The Remind Learning Foundation is the charity arm of Remind Learning, a Dutch education-focused company that has created an innovative curriculum to promote independent life-long learning. They help students take charge of their learning journeys and train facilitators in the Remind Learning methodology. They focus on helping beneficiaries improve the quality of their educational programmes.</p>
            </div>
        </div>
    </section>
	
	<section class="bg-livred">
        <div class="container pb-6">
            <div class="partnerlogo flex justify-around">
                <img class="w-[160px]" src="/wp-content/uploads/2023/12/racethepearl.png" alt="">
            </div>
        </div>
        <div class="container md:w-[750px] text-center pb-6 ">
            <div class="videoclick relative">
                    <!--<img class="placeholder" src="/wp-content/themes/thelivfoundation/img/local/placeholder.png" alt="Watch-video">-->
                    <video class="video" muted controls playsinline>
                        <source src="/wp-content/uploads/2023/12/reacethepearl.mp4">
                    </video>
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-3 pb-8 md:pb-12">
            <div class="col-span-1 md:pr-5">
                <h2 class="text-22 leading-36 text-livblue font-onebold pb-3">Objective</h2>
                <p class="text-white text-22 font-onemono">Work together to raise awareness for Sri Lanka and help uplift the underprivileged youth</p>
            </div>
            <div class="col-span-1">
                <a href="https://gapstars.net" target="_blank" class="text-22 leading-36 text-white font-onebold underline">Race The Pearl</a>
                <p class="text-18 leading-28 text-white font-oneregular pt-3">Race the Pearl is a 24 Hr Cycling Challenge that will push all known physical and mental boundaries in an attempt to ride a bicycle across Sri Lanka, the Pearl of the Indian Ocean. Some will Race and some will Ride. The route is between the furthest two points of Point Pedro and Dondra head and will almost bisect the island and take you through a varied mix of terrain of pan-flat straight-arrow roads, mild uphills and downhills, green and barren land, while riding through day and night, rain and shine. </p>
            </div>
        </div>
    </section>
	
	 <section class="bg-livred">
        <div class="container pb-6">
        <div class="partnerlogo flex justify-around">
                <img class="w-[160px]" src="/wp-content/uploads/2023/12/fixico.png" alt="">
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-3 pb-8 md:pb-12">
            <div class="col-span-1 md:pr-5">
                <h2 class="text-22 leading-36 text-livblue font-onebold pb-3">Objective</h2>
                <p class="text-white text-22 font-onemono">Help to improve and modernize the Motor Mechanics unit at the CYTC </p>
            </div>
            <div class="col-span-1">
                <a href="https://www.remindlearning.nl/" target="_blank" class="text-22 leading-36 text-white font-onebold underline">Fixico</a>
                <p class="text-18 leading-28 text-white font-oneregular pt-3">In 2014, Fixico was launched as a marketplace for drivers to find the best body repair shops. Today, Fixico has evolved into the digital car repair management platform on a mission to shape the future of car repair by creating a smarter, better and digitally connected marketplace for everyone. Fixico enables businesses to make data-driven repair decisions, and fully optimise, control and track their repairs, while offering exceptional driver journeys.</p>
            </div>
        </div>
    </section>
    
     <section class="bg-livred">
        <div class="container pb-6">
        <div class="partnerlogo flex justify-around">
                <img class="w-[160px]" src="https://thelivfoundation.com/wp-content/uploads/2024/03/sarabel.png" alt="">
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-3 pb-8 md:pb-12">
            <div class="col-span-1 md:pr-5">
                <h2 class="text-22 leading-36 text-livblue font-onebold pb-3">Objective</h2>
                <p class="text-white text-22 font-onemono">Help with sustainable, strategic facility development at the CYTC </p>
            </div>
            <div class="col-span-1">
                <a href="http://sarabel.com/" target="_blank" class="text-22 leading-36 text-white font-onebold underline">Sarabel Capital</a>
                <p class="text-18 leading-28 text-white font-oneregular pt-3">Sarabel Capital is an investment office that mainly focuses on providing growth capital to ambitious and fast-growing international companies. Sarabel has a strong focus on trading companies. They provide support to their portfolio companies on strategy, finance, operations, HR and IT to achieve long-term sustainable growth and profitability.</p>
            </div>
        </div>
    </section>
	
	

    <!-- REPEATER END -->

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