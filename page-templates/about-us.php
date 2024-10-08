<?php 
/**
 * Template name: About us
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
        <img src="/wp-content/themes/thelivfoundation/img/local/about-tijdelijk-2.jpg" alt="" class="absolute left-0 top-0 -z-10 h-full w-full object-cover">
        <div class="container grid mt-[20vh] md:mt-[40vh] text-center items-center">
            <div class="title-effect title-effect-seven">
                <h2 class="text-60 leading-50 md:text-100 md:leading-90 font-onemedium text-white pb-[12px]">About us</h2>
            </div>
        </div>
    </section>

    <section class="h-[100%] background-linear-eight">
        <div class="container pt-12 md:pt-12 grid grid-cols-1 md:grid-cols-10">
            <div class="col-span-10 md:col-span-6 mb-3">
                <h2 class="text-22 leading-36 text-livpink font-onebold">Our Story</h2>
            </div>
        </div>
        <div class="container grid grid-cols-10 gap-3 pb-8 md:pb-8">
            <div class="col-span-10 md:col-span-6 md:mr-8">
                <p class="text-18 leading-28 text-white font-oneregular">During years of traveling to Sri Lanka for both business and pleasure, Liv founders Hugo and Elaine have developed a strong connection with the land and its people. After the birth of their daughter Livia, the Foundation’s namesake, they were inspired to give something back and began looking for a way to make a difference in the lives of disadvantaged children of Sri Lanka. The solution revealed itself after a visit to the Rainbow Foundation sponsored Cholankande Youth Training Centre. The CYTC is a Jesuit-run school working to deliver vocational training programs and fight the discrimination and inequality faced by impoverished plantation worker communities. This was the perfect starting point.</p>
            </div>
            <div class="col-span-10 md:col-span-4">
                <div class="relative">
                    <img class="" src="/wp-content/themes/thelivfoundation/img/local/hugo_elaine.jpg" alt="">
                    <div class="absolute left-0 top-0 right-0 h-[100%] background-linear-nine"></div>
                    <div class="absolute bottom-1 left-2 grid grid-cols-1">
                        <div class="col-span-1">
                            <p class="text-14 leading-24 text-white font-onemono">Hugo, Elaine and Livia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container grid grid-cols-10 gap-3 pb-8 md:pb-12">
        <div class="col-span-10 md:col-span-4 order-2 md:order-1">
                <div class="relative">
                    <img class="" src="/wp-content/themes/thelivfoundation/img/local/about-us-small.jpg" alt="">
                    <div class="absolute left-0 top-0 right-0 h-[100%] background-linear-fifteen"></div>
                    <div class="absolute top-1 left-2 grid grid-cols-1">
                        <div class="col-span-1">
                            <p class="text-14 leading-24 text-white font-onemono">Jos & Inge Busscher</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-10 md:col-span-6 md:ml-8 order-1 md:order-2">
                <p class="text-18 leading-28 text-white font-oneregular">The Liv Foundation was created in 2022 to continue and advance the work of Jos and Inge Busscher’s Rainbow Foundation, which for 25 years has funded charitable projects in underserved areas of India, Indonesia and Sri Lanka. By focusing primarily on marginalized communities in Sri Lanka, The Liv Foundation is working to build a large family of highly engaged global partners determined to help advance equality of opportunity through quality education.</p>
            </div>
  
        </div>
    </section>

    <section class="h-[100%] background-linear-four pb-5">
        <div class="container pt-8 md:pt-12 grid grid-cols-1 md:grid-cols-10">
            <div class="col-span-10 md:col-span-6 md:mb-3 title-effect-three">
                <h2 class="text-60 leading-50 md:text-100 md:leading-80 text-livblue font-onemedium pb-[12px]">Our<br>purpose</h2>
            </div>
        </div>
        <div class="container grid grid-cols-10 gap-3 pb-3 md:pb-12 mt-3">
            <div class="col-span-10 md:col-span-6 md:mr-8">
                <p class="text-18 leading-28 text-livbrown font-oneregular">We face unprecedented existential challenges – climate change is driving economic instability. As the divide between the “haves” and the “have nots” grows, we believe that learning empowered communities are needed to adapt to and collectively overcome the complex challenges of the 21st century. It is our collective responsibility to foster and empower this change. Success means a future, where a closer, more equal global community will not just survive, but thrive and cooperate to create a better tomorrow.</p>
            </div>
            <div class="col-span-10 md:col-span-4 pb-8">
                <h2 class="text-22 leading-36 text-livblue font-onebold">Vision</h2>
                <p class="text-26 leading-40 text-white font-onemono">A flourishing global community on a healthy planet.</p>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="mt-[-65px] md:mt-[-65px] absolute left-0 right-0">
            <div class="title-effect-four container">
                <P class="md:text-center text-60 leading-50 md:text-100 md:leading-90 text-white font-onemedium pb-[12px]">Our <br class="md:hidden">mission</P>
            </div>
        </div>
    </section>

    <section class="background-our-mission">
        <div class="background-our-mission-overlay">
            <div class="container grid grid-cols-1 md:grid-cols-2 items-center py-8 md:py-12">
                <div class="col-span-1">
                    <p class="text-26 leading-40 text-white font-onemono md:pr-8 pb-3 md:pb-0">Ensure equal opportunity for the developing world by ensuring equal access to quality education.</p>
                </div>
                <div class="col-span-1">
                    <p class="text-18 leading-28 text-white font-oneregular md:pl-8">We are committed to building global partnerships that drive funding and knowledge exchange to improve education in developing countries. Our focus is on supporting and initiating projects that equip underserved communities with the skills and knowledge to succeed in an increasingly complex, and connected world. By targeting the most vulnerable populations, we aim to close the opportunity gap and help end the cycle of poverty. Critical thinking, digital literacy and fostering a passion for independent learning will help individuals build resilience and play key roles in future innovation. </p>
                </div>
            </div>
        </div>
    </section>

    <section id="our-values" class="background-linear-ten">
        <div class="title-effect-three container pt-8 md:pt-12">
            <P class="md:text-center text-60 leading-50 md:text-100 md:leading-90 text-livblue font-onemedium pb-[12px]">Our values</P>
        </div>
        <div class="pb-8 md:pb-12">
            <div class="container flex flex-col md:flex-row md:w-[700px] justify-center md:gap-5 md:items-center mt-3">
                <div class="md:w-[20%]">
                    <svg width="100px" height="100px" viewBox="0 0 161 161" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="value" transform="translate(0.000000, -0.000000)" fill="#F25A38" fill-rule="nonzero">
                                <path d="M9.29787628,29.836836 C7.69165767,29.801256 6.1180318,30.2930141 4.81787628,31.236836 C3.66362566,32.1458663 2.77864495,33.3519982 2.25787628,34.725836 C1.14687628,37.434836 0.847876281,40.725836 0.628876281,44.085836 C0.628876281,44.105836 0.628876281,44.124836 0.628876281,44.143836 C-0.039274234,53.8577868 -0.17514419,63.6010314 0.221876281,73.329836 C0.879876281,89.462836 3.16387628,108.637836 10.5218763,121.294836 C17.6798763,133.611836 24.7878763,141.107836 32.3978763,146.585836 C36.1128763,149.259836 38.3978763,150.679836 39.4978763,151.992836 C40.5978763,153.305836 40.9528763,154.658836 40.9528763,158.213836 C40.9528762,158.707577 41.1490826,159.181081 41.4983041,159.530115 C41.8475256,159.879149 42.3211352,160.074836 42.8148763,160.074836 L79.6978763,160.074836 C79.7558763,160.074836 79.8142096,160.074836 79.8728763,160.074836 L80.0478763,160.074836 C80.1058763,160.074836 80.1642096,160.074836 80.2228763,160.074836 L117.283876,160.074836 C117.777444,160.074836 118.250902,159.879287 118.600095,159.530469 C118.949288,159.181651 119.145611,158.708404 119.145876,158.214836 C119.145876,154.659836 119.501876,153.306836 120.599876,151.993836 C121.697876,150.680836 123.982876,149.260836 127.699876,146.586836 C135.308876,141.109836 142.417876,133.612836 149.575876,121.295836 C156.931876,108.637836 159.215876,89.462836 159.875876,73.330836 C160.272899,63.6020314 160.137029,53.8587867 159.468876,44.144836 C159.468876,44.124836 159.468876,44.105836 159.468876,44.086836 C159.249876,40.724836 158.950876,37.435836 157.839876,34.726836 C157.319108,33.3529982 156.434127,32.1468663 155.279876,31.237836 C153.979754,30.2939474 152.406105,29.8021821 150.799876,29.837836 C142.769876,29.837836 137.615876,33.721836 136.021876,38.500836 C134.914876,41.820836 134.511876,47.345836 134.276876,52.279836 C134.102876,55.933836 134.113876,57.633836 134.101876,59.079836 C128.589385,57.0441456 122.408327,59.2167539 119.381876,64.253836 L102.567876,94.311836 C100.995876,97.119836 96.6438763,99.711836 91.9788763,102.911836 C87.3138763,106.111836 82.3428763,110.111836 80.1678763,116.632836 C80.1278763,116.753836 80.0898763,116.912836 80.0518763,117.039836 C80.0138763,116.911836 79.9758763,116.753836 79.9358763,116.632836 C77.7618763,110.113836 72.7908763,106.113836 68.1248763,102.911836 C63.4588763,99.709836 59.1078763,97.111836 57.5358763,94.311836 L40.7218763,64.253836 C37.6935079,59.2166988 31.5103209,57.0460323 25.9978763,59.084836 C25.9858763,57.636836 25.9978763,55.935836 25.8228763,52.284836 C25.5878763,47.350836 25.1848763,41.825836 24.0778763,38.505836 C22.4818763,33.724836 17.3278763,29.836836 9.29787628,29.836836 Z M9.29887628,33.5567213 C16.1628763,33.5567213 19.5468763,36.605836 20.5858763,39.720836 C21.3398763,41.981836 21.8678763,47.620836 22.0988763,52.453836 C22.3298763,57.286836 22.3318763,61.465836 22.3318763,61.465836 C22.3318763,61.484836 22.3318763,61.504836 22.3318763,61.523836 C18.8118072,65.2792002 18.1511826,70.8906564 20.7028763,75.360836 L20.7028763,75.418836 L46.7678763,121.872836 C47.2815319,122.737402 48.3888739,123.037893 49.269108,122.551576 C50.1493422,122.065258 50.4843776,120.967874 50.0258763,120.072836 L23.9608763,73.560836 C21.8608763,69.946836 22.7998763,64.805836 26.2878763,62.804836 C29.7198763,60.835836 35.5088763,62.579836 37.4588763,66.060836 L54.3308763,96.118836 C56.7238763,100.392836 61.5418763,102.925836 66.0248763,106.002836 C70.5078763,109.079836 74.6608763,112.532836 76.4388763,117.863836 C77.1558763,120.011836 77.7198763,126.646836 77.9518763,134.263836 C78.1648763,141.284836 78.1828763,149.250836 78.1848763,156.356836 L44.4978763,156.356836 C44.2978763,153.556836 43.7548763,151.297836 42.3448763,149.612836 C40.6138763,147.543836 38.1698763,146.173836 34.5448763,143.566836 C27.3448763,138.384836 20.7268763,131.401836 13.7748763,119.438836 C7.08587628,107.928836 4.58987628,89.038836 3.94287628,73.159836 C3.55269954,63.5666041 3.68856995,53.9591976 4.34987628,44.380836 C4.40285241,41.5977093 4.8534097,38.8364464 5.68787628,36.180836 C5.9688187,35.4082183 6.45237153,34.7253726 7.08787628,34.203836 C7.72617089,33.7361757 8.50951242,33.5097826 9.29887628,33.564836 L9.29887628,33.5567213 Z M150.793876,33.557836 C151.58324,33.5027826 152.366582,33.7291757 153.004876,34.196836 C153.640381,34.7183726 154.123934,35.4012183 154.404876,36.173836 C155.23933,38.8294495 155.689886,41.5907105 155.742876,44.373836 C156.404173,53.952198 156.540043,63.559604 156.149876,73.152836 C155.502876,89.032836 153.006876,107.921836 146.316876,119.431836 C139.364876,131.395836 132.745876,138.377836 125.546876,143.559836 C121.924876,146.166836 119.481876,147.536836 117.746876,149.606836 C116.336876,151.291836 115.793876,153.551836 115.593876,156.350836 L81.9068763,156.350836 C81.9068763,149.244836 81.9258763,141.278836 82.1398763,134.257836 C82.3708763,126.645836 82.9398763,120.010836 83.6528763,117.857836 C85.4308763,112.527836 89.5838763,109.073836 94.0668763,105.996836 C98.5498763,102.919836 103.366876,100.386836 105.760876,96.112836 L122.632876,66.054836 C124.581876,62.573836 130.370876,60.830836 133.803876,62.798836 C137.291876,64.798836 138.231876,69.940836 136.130876,73.554836 L110.065876,120.066836 C109.607375,120.961874 109.94241,122.059258 110.822645,122.545576 C111.702879,123.031893 112.810221,122.731402 113.323876,121.866836 L139.388876,75.412836 L139.388876,75.354836 C141.94057,70.8846564 141.279945,65.2732002 137.759876,61.517836 C137.750876,61.508836 137.768876,61.468836 137.759876,61.459836 C137.750876,61.450836 137.759876,57.281836 137.992876,52.447836 C138.225876,47.613836 138.750876,41.975836 139.505876,39.714836 C140.544876,36.599836 143.928876,33.551836 150.792876,33.551836 L150.793876,33.557836 Z" id="Path_408"></path>
                                <path class="float z-10" d="M77.9508763,0.0148360235 C76.9920131,0.134569881 76.2843135,0.968256481 76.3218763,1.93383602 L76.3218763,11.233836 L67.0128763,11.233836 C66.3057212,11.1661623 65.6213362,11.5052345 65.2467608,12.1088414 C64.8721854,12.7124484 64.8721854,13.4762237 65.2467608,14.0798306 C65.6213362,14.6834376 66.3057212,15.0225097 67.0128763,14.954836 L76.3218763,14.954836 L76.3218763,24.254836 C76.3218763,25.2831902 77.1555221,26.116836 78.1838763,26.116836 C79.2122305,26.116836 80.0458763,25.2831902 80.0458763,24.254836 L80.0458763,14.954836 L89.3548763,14.954836 C90.0298519,14.9704856 90.6603615,14.6193388 91.0024479,14.0372616 C91.3445343,13.4551845 91.3445343,12.7334876 91.0024479,12.1514104 C90.6603615,11.5693332 90.0298519,11.2181865 89.3548763,11.233836 L80.0458763,11.233836 L80.0458763,1.93383602 C80.0672868,1.38711343 79.8470229,0.858669732 79.4436472,0.48900497 C79.0402715,0.119340209 78.4946596,-0.054086013 77.9518763,0.0148360235 L77.9508763,0.0148360235 Z" id="Path_408-path"></path>
                                <path class="float2 z-10" d="M53.7478763,33.499836 C52.7890131,33.6195699 52.0813135,34.4532565 52.1188763,35.418836 L52.1188763,44.718836 L42.8098763,44.718836 C42.1027212,44.6511623 41.4183362,44.9902345 41.0437608,45.5938414 C40.6691854,46.1974484 40.6691854,46.9612237 41.0437608,47.5648306 C41.4183362,48.1684376 42.1027212,48.5075097 42.8098763,48.439836 L52.1188763,48.439836 L52.1188763,57.739836 C52.1188763,58.7681902 52.9525221,59.601836 53.9808763,59.601836 C55.0092305,59.601836 55.8428763,58.7681902 55.8428763,57.739836 L55.8428763,48.439836 L65.1518763,48.439836 C66.1794021,48.439836 67.0123763,47.6068618 67.0123763,46.579336 C67.0123763,45.5518102 66.1794021,44.718836 65.1518763,44.718836 L55.8428763,44.718836 L55.8428763,35.418836 C55.8643323,34.8719156 55.6439366,34.3432816 55.2403259,33.9735781 C54.8367152,33.6038746 54.2908199,33.4305933 53.7478763,33.499836 L53.7478763,33.499836 Z" id="Path_408-path"></path>
                                <path class="float1 z-10" d="M105.877876,33.499836 C104.919013,33.6195699 104.211314,34.4532565 104.248876,35.418836 L104.248876,44.718836 L94.9398763,44.718836 C94.2327212,44.6511623 93.5483362,44.9902345 93.1737608,45.5938414 C92.7991854,46.1974484 92.7991854,46.9612237 93.1737608,47.5648306 C93.5483362,48.1684376 94.2327212,48.5075097 94.9398763,48.439836 L104.248876,48.439836 L104.248876,57.739836 C104.248876,58.7681902 105.082522,59.601836 106.110876,59.601836 C107.13923,59.601836 107.972876,58.7681902 107.972876,57.739836 L107.972876,48.439836 L117.281876,48.439836 C118.309402,48.439836 119.142376,47.6068618 119.142376,46.579336 C119.142376,45.5518102 118.309402,44.718836 117.281876,44.718836 L107.972876,44.718836 L107.972876,35.418836 C107.994287,34.8721134 107.774023,34.3436697 107.370647,33.974005 C106.967271,33.6043402 106.42166,33.430914 105.878876,33.499836 L105.877876,33.499836 Z" id="Path_408-path"></path>
                                <path class="float3 z-10" d="M79.8138763,66.987836 C78.8550131,67.1075699 78.1473135,67.9412565 78.1848763,68.906836 L78.1848763,78.206836 L68.8748763,78.206836 C68.7587893,78.1961291 68.6419633,78.1961291 68.5258763,78.206836 C67.8515972,78.2572286 67.257114,78.6678782 66.9713228,79.2806711 C66.6855316,79.893464 66.7530026,80.6128324 67.1477572,81.1617956 C67.5425119,81.7107587 68.2029865,82.0037033 68.8748763,81.927836 L78.1838763,81.927836 L78.1838763,91.227836 C78.1838763,92.2561902 79.0175221,93.089836 80.0458763,93.089836 C81.0742305,93.089836 81.9078763,92.2561902 81.9078763,91.227836 L81.9078763,81.927836 L91.2168763,81.927836 C92.2444021,81.927836 93.0773763,81.0948618 93.0773763,80.067336 C93.0773763,79.0398102 92.2444021,78.206836 91.2168763,78.206836 L81.9068763,78.206836 L81.9068763,68.906836 C81.9282868,68.3601134 81.7080229,67.8316697 81.3046472,67.462005 C80.9012715,67.0923402 80.3556596,66.918914 79.8128763,66.987836 L79.8138763,66.987836 Z" id="Path_408-path"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="md:w-[80%]">
                    <p class="text-26 leading-40 text-livblue font-oneregular mt-2 md:mt-0md:pr-8">Our guiding principles that determine how and with whom we work</p>
                </div>
            </div>
            <div class="container flex flex-col md:flex-row justify-center gap-2 md:gap-8 mt-3 md:mt-6 md:text-center">
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Impact</p>
                        <p class="text-livred text-14 font-onemedium">Long-term outcomes that matter</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Compassion</p>
                        <p class="text-livred text-14 font-onemedium">Taking action for a better world</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Trust</p>
                        <p class="text-livred text-14 font-onemedium">Transparency & accountability</p>
                    </div>
                </div>
                <div class="container flex flex-col md:flex-row justify-center mt-2 gap-2 md:gap-8 md:mt-6 md:items-center md:text-center">
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Growth</p>
                        <p class="text-livred text-14 font-onemedium">Striving to do better each day</p>
                    </div>
                    <div class="col-span-1">
                        <p class="text-livblue text-22 font-onemono">Inclusivity</p>
                        <p class="text-livred text-14 font-onemedium">Diverse & safe communities</p>
                    </div>
                </div>
        </div>
    </section>

    <section id="target-sdgs" class="bg-livblue">
        <div class="title-effect-two container pt-8 md:pt-12">
            <P class="md:text-center text-60 leading-50 md:text-100 md:leading-90 text-white font-onemedium pb-[12px]">Target SDGs</P>
        </div>
        <div class="pb-8 md:pb-12 container md:w-[700px] mx-auto">
            <div class="flex flex-row gap-3 md:gap-5 items-center mt-6">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="0 0 156.497 156.507" class="flower">
                        <g id="noun-flower-1091586" transform="translate(-214.286 -214.311)">
                            <path id="Path_402" data-name="Path 402" d="M358.132,297.139a43.952,43.952,0,0,0-5.369-4.561,43.423,43.423,0,0,0,5.369-4.57,43.166,43.166,0,1,0-65.615-55.675,43.833,43.833,0,0,0-4.563-5.373A43.172,43.172,0,1,0,226.9,288.013a41.748,41.748,0,0,0,5.382,4.553,43.923,43.923,0,0,0-5.382,4.578,43.173,43.173,0,0,0,30.568,73.663h0a42.823,42.823,0,0,0,30.475-12.616,44.079,44.079,0,0,0,4.579-5.38,41.861,41.861,0,0,0,4.553,5.38,43.17,43.17,0,1,0,61.052-61.052Zm-2.544,58.446a39.569,39.569,0,0,1-55.934.03,37.264,37.264,0,0,1-5.549-7.039,1.824,1.824,0,0,0-1.544-.88h-.015a1.828,1.828,0,0,0-1.544.852,40.268,40.268,0,0,1-5.634,7.067,39.188,39.188,0,0,1-27.9,11.547h0a39.526,39.526,0,0,1-27.991-67.44,40.4,40.4,0,0,1,7.065-5.634,1.822,1.822,0,0,0-.026-3.1,37.183,37.183,0,0,1-7.037-5.547,39.6,39.6,0,0,1,.03-55.932,39.522,39.522,0,0,1,55.871.032,40.227,40.227,0,0,1,5.6,7.031,1.822,1.822,0,0,0,1.544.855h0a1.811,1.811,0,0,0,1.542-.859,39.522,39.522,0,1,1,54.462,54.465,1.821,1.821,0,0,0,0,3.09,40.259,40.259,0,0,1,7.031,5.6,39.522,39.522,0,0,1,.036,55.867Z" transform="translate(0 0)" fill="#f25a38"/>
                        </g>
                    </svg>
                    <div class="absolute top-0 left-0 right-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="0 0 156.497 156.507" class="flower-inner">
                        <g id="noun-flower-1091586" transform="translate(-214.286 -214.311)">
                            <path id="Path_403" data-name="Path 403" d="M264.534,246.235a18.191,18.191,0,0,0-12.949,5.349,18.4,18.4,0,0,0,13,31.392h0a18.37,18.37,0,0,0-.054-36.741ZM275,275a14.633,14.633,0,0,1-10.414,4.332h0A14.719,14.719,0,1,1,275,275Z" transform="translate(27.968 27.967)" fill="#f25a38"/>
                        </g>
                    </svg>
                </div>
                </div>
    
                <div class="">
                    <p class="text-26 leading-40 text-livred font-oneregular md:pr-8">The global goals we focus on through our projects</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-white text-20 leading-20 mb-2 font-onemono">No Poverty</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Quality Education  </p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Gender Equality</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Affordable Clean Energy</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Decent Work and Economic Growth</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Reduced Inequalities</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Responsible Production and Consumption</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Peace, Justice and Strong Institutions</p>
                <p class="text-white text-20 leading-20 mb-2 font-onemono">Partnerships for the Goals</p>
            </div>
        </div>
    </section>

    <!-- VERSIE VIER TEAMLEDEN START -->
    <section class="h-[100%] items-center bg-livpink grid grid-flow-row lg:grid-flow-col justify-around md:justify-around">
        <!-- <div class="pt-8 relative-float">
            <h2 class="text-60 leading-50 md:text-80 md:leading-60 lg:text-90 lg:leading-80 text-livblue font-onemedium float-team-title title-effect-eight pb-[12px] ml-2 sm:ml-[5vw] mb-3 md:mb-10">Meet<br>our<br>team</h2>
        </div> -->

        <div class="h-[100%] lg:w-[100vw] md:min-w-[768px] max-w-[1687px] grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center gap-y-2 md:gap-y-0 mx-2 md:mx-0 pb-6 md:pb-0">


            <div class="teammember relative overflow-hidden bg-livpink pt-8 md:pt-0">
                <h2 class="text-60 leading-50 md:text-80 md:leading-60 lg:text-90 lg:leading-80 text-livblue font-onemedium title-effect-eight pb-[12px] ml-2 sm:ml-[5vw]">Meet<br>our<br>team</h2>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/elaine.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Elaine Blijdorp</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Founder & Advisor</p>
                        </div>
                        <div class="absolute bottom-0 top-none right-0 mb-[10%] mx-3 z-50 flex gap-1">
                            <a href="mailto:elaine@thelivefoundation.com"><?php include get_template_directory() . '/img/icons/mail.php'; ?></a>
                            <a href="https://www.linkedin.com/in/elaine-b-09a24885/" target="_blank"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Elaine Blijdorp                            </p>
                                <p class="text-14 leading-16 font-oneregular text-white">Founder & Advisor</p>
                            </div>
                            <p class="text-12 leading-16 sm:text-14 sm:leading-18 font-oneregular text-white mt-[20%] personal-text">Elaine (1986)  grew up in Groningen, in the North of Holland. After completing her bachelor's degree in International Communication, she relocated to Amsterdam, where she continues to live today with her partner and daughter Livia.<br><br>She spent her entire working life in marketing communications, and has a particular interest in visual identity and branding. Elaine believes strong, considered visual communication has the power to create strong emotional connections with their audience.<br><br>Elaine has always been passionate about travel, and “getting beyond the surface” in her understanding of cultures around the world. She has lived in Spain, Australia and Japan. Traveling around the globe has allowed her to understand that not everybody has the same opportunities in life. Becoming a mother brought her the clear realization that it was time to give back.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/hugo.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Hugo Hemmen</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Founder & Chairman</p>
                        </div>
                        <div class="absolute bottom-0 top-none right-0 mb-[10%] mx-3 z-50 flex gap-1">
                            <a href="mailto:hugo@thelivefoundation.com"><?php include get_template_directory() . '/img/icons/mail.php'; ?></a>
                            <a href="https://www.linkedin.com/in/hugohemmen/" target="_blank"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Hugo Hemmen</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Founder & Chairman</p>
                            </div>
                            <p class="text-12 leading-16 sm:text-14 sm:leading-18 font-oneregular text-white mt-[20%] personal-text">Hugo Hemmen (1991) was born and raised in Friesland, The Netherlands. Throughout his education, he has traveled the world, studying and completing field work in Chicago, Cape Town, Shanghai, Curacao, and Warsaw. After obtaining bachelor’s of International Business Management in Groningen, he continued his studies at the University of Amsterdam, eventually completing master’s degrees in International Relations and Contemporary Asian studies.<br><br>During this time Hugo and a team of Dutch software entrepreneurs founded Gapstars, an IT hub in Colombo, Sri Lanka. Under Hugo’s leadership as CEO, Gapstars has grown to over +200 employees, — the majority still based in Colombo Sri Lanka. After years of working closely with this community he has developed an undeniable urge to support them.  Hugo understands a quality education is the key to opportunity. His experience in international business, and his passion to play a role in elevating this community help make the Liv Foundation make him a powerful force for positive change.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/marieke.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Marieke de Vries</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Treasurer</p>
                        </div>
                        <div class="absolute bottom-0 top-none right-0 mb-[10%] mx-3 z-50 flex gap-1">
                            <a href="mailto:marieke@thelivefoundation.com"><?php include get_template_directory() . '/img/icons/mail.php'; ?></a>
                            <a href="https://www.linkedin.com/in/marieke-de-vries45/" target="_blank"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Marieke de Vries</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Treasurer</p>
                            </div>
                            <p class="text-12 leading-16 sm:text-14 sm:leading-18 font-oneregular text-white mt-[20%] personal-text">Marieke de Vries (1990), was born in Zwolle, the Netherlands and currently lives in Weesp with her son and partner. After finishing her study in Nautical Business Management at IVA Driebergen Marieke started her career in sales at a major car dealership in The Netherlands. While there, she met a superyacht owner who was searching for a project lead to handle a full refit of a 77 meter icebreaker tug. This brought the opportunity to transition into the career she had trained for.<br><br>Today head of sales at Superyacht Times, the leading media agency for the superyacht industry. Throughout her career, Marieke has always been a hardworking, motivated and enthusiastic part of every team. With her experience in the industry and her impressive network of customers Marieke is a strong addition to The Liv Foundation. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/matthijs.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Matthijs Wolf</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Secretary</p>
                        </div>
                        <div class="absolute bottom-0 top-none right-0 mb-[10%] mx-3 z-50 flex gap-1">
                            <a href="mailto:matthijs@thelivefoundation.com"><?php include get_template_directory() . '/img/icons/mail.php'; ?></a>
                            <a href="https://www.linkedin.com/in/matthijswolf/" target="_blank"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Matthijs Wolf</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Secretary</p>
                            </div>
                            <p class="text-12 leading-16 sm:text-14 sm:leading-18 font-oneregular text-white mt-[20%] personal-text">Matthijs Wolf (1985) was born and raised in Amsterdam. After completing his master’s degree in Labour Law at the University of Amsterdam, Matthijs started his career in recruitment. He has since held several different positions in both the recruitment and advertising fields. <br><br>Currently, he is a member of the Management team at Gapstars. Gapstars builds dedicated IT teams for fast growing software companies in Europe. After many working trips to the Gapstar teams in Sri Lanka, he fell in love with the country and its people. With his expertise, passion and energy, Matthijs is certain to make a positive contribution to The Liv Foundation.<br><br>Matthijs lives in Amsterdam with his girlfriend Elke and their little dachshund Ollie. Matthijs and Elke are expecting their first daughter in December 2022. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/sohanya-1.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Sohanya Aziz</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Program Manager</p>
                        </div>
                        <div class="absolute bottom-0 top-none right-0 mb-[10%] mx-3 z-50 flex gap-1">
                            <a href="mailto:sohanya@thelivefoundation.com"><?php include get_template_directory() . '/img/icons/mail.php'; ?></a>
                            <a href="https://www.linkedin.com/in/sohanyaaziz/" target="_blank"><?php include get_template_directory() . '/img/icons/linkedin.php'; ?></a>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Sohanya Aziz</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Program Manager</p>
                            </div>
                            <p class="text-12 leading-16 sm:text-14 sm:leading-18 font-oneregular text-white mt-[20%] personal-text">Sohanya (1990) was born and raised in Colombo, Sri Lanka. She studied Genetics at the University College London in the UK. After spending a year in New Zealand at the University of Auckland and completing her Masters in Evolutionary Biology, she returned to Sri Lanka to be closer to her family and home.<br><br>She's been working in research and development and communications roles since to help businesses take strategic action to be a force for good. Her background in evolutionary biology makes her process-oriented and outcomes-focused. And her mission to help organisations be a part of the solution rather than the problem makes her a committed team member dedicated to helping the Foundation drive meaningful change. </p>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
    <!-- VERSIE VIER TEAMLEDEN END -->

    <!-- VERSIE DRIE TEAMLEDEN START -->
    <!-- <section class="h-[100%] items-center bg-livpink grid grid-flow-row lg:grid-flow-col justify-around md:justify-between">
        <div class="pt-8 relative-float">
            <h2 class="text-60 leading-50 md:text-80 md:leading-60 lg:text-90 lg:leading-80 text-livblue font-onemedium float-team-title title-effect-eight pb-[12px] ml-2 sm:ml-[5vw] mb-3 md:mb-10">Meet<br>our<br>team</h2>
        </div>

        <div class="h-[100%] lg:w-[60vw] md:min-w-[768px] max-w-[1125px] grid grid-cols-1 md:grid-cols-2 items-center gap-y-2 sm:gap-y-0 mx-2 sm:mx-0 pb-6 sm:pb-0">


            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/hugo.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Hugo Hemmen</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Founder & Chairman</p>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Hugo Hemmen</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Founder & Chairman</p>
                            </div>
                            <p class="text-14 leading-18 font-oneregular text-white mt-[20%] personal-text">Hugo Hemmen (1991) was born and raised in Friesland, The Netherlands. Throughout his education, he has traveled the world, studying and completing field work in Chicago, Cape Town, Shanghai, Curacao, and Warsaw. After obtaining bachelor’s of International Business Management in Groningen, he continued his studies at the University of Amsterdam, eventually completing master’s degrees in International Relations and Contemporary Asian studies.<br><br>During this time Hugo and a team of Dutch software entrepreneurs founded Gapstars, an IT hub in Colombo, Sri Lanka. Under Hugo’s leadership as CEO, Gapstars has grown to over +200 employees, — the majority still based in Colombo Sri Lanka. After years of working closely with this community he has developed an undeniable urge to support them.  Hugo understands a quality education is the key to opportunity. His experience in international business, and his passion to play a role in elevating this community help make the Liv Foundation make him a powerful force for positive change.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/elaine.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Elaine Blijdorp</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Founder & Advisor</p>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Elaine Blijdorp                            </p>
                                <p class="text-14 leading-16 font-oneregular text-white">Founder & Advisor</p>
                            </div>
                            <p class="text-14 leading-18 font-oneregular text-white mt-[20%] personal-text">Elaine (1986)  grew up in Groningen, in the North of Holland. After completing her bachelor's degree in International Communication, she relocated to Amsterdam, where she continues to live today with her partner and daughter Livia.<br><br>She spent her entire working life in marketing communications, and has a particular interest in visual identity and branding. Elaine believes strong, considered visual communication has the power to create strong emotional connections with their audience.<br><br>Elaine has always been passionate about travel, and “getting beyond the surface” in her understanding of cultures around the world. She has lived in Spain, Australia and Japan. Traveling around the globe has allowed her to understand that not everybody has the same opportunities in life. Becoming a mother brought her the clear realization that it was time to give back.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/matthijs.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Matthijs Wolf</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Secretary</p>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Matthijs Wolf</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Secretary</p>
                            </div>
                            <p class="text-14 leading-18 font-oneregular text-white mt-[20%] personal-text">Matthijs Wolf (1985) was born and raised in Amsterdam. After completing his master’s degree in Labour Law at the University of Amsterdam, Matthijs started his career in recruitment. He has since held several different positions in both the recruitment and advertising fields. <br><br>Currently, he is a member of the Management team at Gapstars. Gapstars builds dedicated IT teams for fast growing software companies in Europe. After many working trips to the Gapstar teams in Sri Lanka, he fell in love with the country and its people. With his expertise, passion and energy, Matthijs is certain to make a positive contribution to The Liv Foundation.<br><br>Matthijs lives in Amsterdam with his girlfriend Elke and their little dachshund Ollie. Matthijs and Elke are expecting their first daughter in December 2022. </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="teammember relative overflow-hidden">
                <img src="/wp-content/themes/thelivfoundation/img/local/marieke.jpg" alt="">
                <div class="teammember-layer absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute bottom-0 top-none left-0 mb-[10%] mx-3">
                            <p class="text-18 leading-22 font-oneregular text-white">Marieke de Vries</p>
                            <p class="text-14 leading-16 font-oneregular text-white">Treasurer</p>
                        </div>
                    </div>
                </div>
                <div class="teammember-layer-hover absolute top-0 left-0 right-0 h-[100%]">
                    <div class="relative h-[100%]">
                        <div class="absolute top-0 left-0 mx-3">
                            <div class="mt-[10%]">
                                <p class="text-18 leading-22 font-oneregular text-white">Marieke de Vries</p>
                                <p class="text-14 leading-16 font-oneregular text-white">Treasurer</p>
                            </div>
                            <p class="text-14 leading-18 font-oneregular text-white mt-[20%] personal-text">Marieke de Vries (1990), was born in Zwolle, the Netherlands and currently lives in Weesp with her son and partner. After finishing her study in Nautical Business Management at IVA Driebergen Marieke started her career in sales at a major car dealership in The Netherlands. While there, she met a superyacht owner who was searching for a project lead to handle a full refit of a 77 meter icebreaker tug. This brought the opportunity to transition into the career she had trained for.<br><br>Today head of sales at Superyacht Times, the leading media agency for the superyacht industry. Throughout her career, Marieke has always been a hardworking, motivated and enthusiastic part of every team. With her experience in the industry and her impressive network of customers Marieke is a strong addition to The Liv Foundation. </p>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section> -->
    <!-- VERSIE DRIE TEAMLEDEN END -->
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