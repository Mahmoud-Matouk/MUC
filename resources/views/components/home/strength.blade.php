<div class="bg-strengthBack bg-cover bg-center  w-full py-8">

    <div class=" container py-6">
        <div class="text-center self-center space-y-4">
            <div class="text-2xl leading-9 relative font-bold -left-1/2 translate-x-1/2 text-secondary-800 w-fit">
                <span class=" text-primary-900">{{ explode(' ', __('strength.head'), 2)[0] }} </span>
                <img class="absolute   bottom-1/2 translate-y-1/2 text-primary-800"
                    src="{{ asset('assets/img/home/strength/Remotely- 1.svg') }}" alt="word background">
                {{ explode(' ', __('strength.head'), 2)[1] }}
            </div>
            <p class="text-base leading-[27px] font-normal text-[#808080] mx-auto w-3/4">{{ __('strength.description') }}
            </p>
        </div>



        <div class="  relative py-6 my-6 ">
            <div class="grid grid-rows-2 grid-cols-2 gap-4 md:gap-6 relative z-0" id="strength-container">
                <div class=" relative bg-[#FAFAFA] md:h-[372px] group border border-[#EAEAEA] rounded-2xl mask1" id="strength-1">
                    <!-- <div class="absolute [clip-path:circle(20%_at_0%_100%)] w-full h-full  bg-transparent transition duration-300 z-10  " >
                    <img src="{{ asset('assets/img/home/strength/strip.svg') }}" alt="strip image">
                </div> -->
                    <!-- <div class="absolute [clip-path:circle(25%_at_0%_100%)] w-full h-full  bg-[#F8F8F8] z-10 " >
                </div> -->
                    <div class="relative flex flex-col mb-3  mx-2 md:mt-6  md:mx-[16px]">
                        <div
                            class="mb-2 md:mb-4 flex md:flex-row gap-4 md:items-center md:justify-start flex-col justify-center items-center text-center">
                            <div
                                class="bg-[#F3F3F3] transition duration-300  group-hover:bg-primary-700 h-[40px] w-[40px] md:h-[70px] md:w-[70px] rounded-2xl shadow-inner shadow-black/[7%] relative">
                                <img class="transition duration-300  group-hover:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon1.svg') }}" alt="icon">
                                <img class="hidden transition duration-300  group-hover:inline-block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon1White.svg') }}" alt="icon">
                            </div>
                            <h3
                                class="text-base md:text-2xl md:leading-[36px]  font-bold text-[#232D50] group-hover:text-secondary-800">
                                {{ __('strength.s1.head') }}</h3>
                        </div>
                        <p class="text-sm  md:text-base font-normal text-[#959595] text-center md:text-start">
                            {{ __('strength.s1.description') }}</p>

                        <img id="image1_White" class="transition duration-300     h-[150px] md:h-[250px] w-fit mx-auto "
                            src="{{ asset('assets/img/home/strength/image1.svg') }}" alt="strength image">
                        <img id="image1_Red"
                            class="transition duration-300 opacity-100  h-[150px] md:h-[250px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image1Red.svg') }}" alt="strength image">
                    </div>
                </div>

                <div class="relative bg-[#FAFAFA] md:h-[372px] group border border-[#EAEAEA] rounded-2xl mask2" id="strength-2">
                    <!-- <div class="absolute [clip-path:circle(20%_at_100%_100%)] w-full h-full  bg-transparent group-hover:bg-primary-800   transition duration-300 z-10 " >

                </div>-->
                    <!-- <div class="absolute [clip-path:circle(25%_at_100%_100%)] w-full h-full  bg-[#F8F8F8] z-10 " >
                </div>  -->
                    <div class="relative flex flex-col mb-3  mx-2 md:mt-6  md:mx-[16px]  ">
                        <div
                            class="mb-2 md:mb-4 flex md:flex-row gap-4 md:items-center md:justify-start flex-col justify-center items-center text-center">
                            <div
                                class="bg-[#F3F3F3] transition duration-300  group-hover:bg-primary-700 h-[40px] w-[40px] md:h-[70px] md:w-[70px] rounded-2xl shadow-inner shadow-black/[7%] relative">
                                <img class="group-hover:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon2.svg') }}" alt="icon">
                                <img class="hidden group-hover:inline-block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon2White.svg') }}" alt="icon">
                            </div>
                            <h3
                                class="text-base md:text-2xl md:leading-[36px] font-bold text-[#232D50] group-hover:text-secondary-800">
                                {{ __('strength.s2.head') }}</h3>
                        </div>
                        <p class="text-sm  md:text-base font-normal  text-[#959595] text-center md:text-start">
                            {{ __('strength.s2.description') }}</p>
                        <img id="image2_White" class="transition duration-300  h-[150px] md:h-[230px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image2.svg') }}" alt="strength image">
                        <img id="image2_Red" class="  transition duration-300   h-[150px] md:h-[230px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image2Red.svg') }}" alt="strength image">
                    </div>
                </div>

                <div class="relative bg-[#FAFAFA] md:h-[372px]  group border border-[#EAEAEA] rounded-2xl mask3" id="strength-3">
                    <!-- <div class="absolute [clip-path:circle(20%_at_0%_0%)] w-full h-full  bg-transparent group-hover:bg-primary-800 transition duration-300 z-10 " >

                </div>-->
                    <!-- <div class="absolute [clip-path:circle(25%_at_0%_0%)] w-full h-full  bg-[#F8F8F8] z-10 " >
                </div>  -->
                    <div class=" relative flex flex-col mt-4 mx-2 md:mb-6 md:mx-[16px]">
                        <img id="image3_White" class=" transition duration-300   h-[150px] md:h-[200px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image3.svg') }}" alt="strength image">
                        <img id="image3_Red" class=" transition duration-300   h-[150px] md:h-[200px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image4Red.svg') }}" alt="strength image">
                        <div
                            class="flex md:flex-row gap-4 md:items-center md:justify-start flex-col justify-center items-center text-center">
                            <div
                                class="bg-[#F3F3F3] transition duration-300  group-hover:bg-primary-700 h-[40px] w-[40px] md:h-[70px] md:w-[70px] rounded-2xl shadow-inner shadow-black/[7%] relative">
                                <img class="group-hover:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon3.svg') }}" alt="icon">
                                <img class="hidden group-hover:inline-block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon3White.svg') }}" alt="icon">
                            </div>
                            <h3
                                class="text-base md:text-2xl md:leading-[36px] font-bold text-[#232D50] group-hover:text-secondary-800">
                                {{ __('strength.s3.head') }}</h3>
                        </div>
                        <p class="text-sm  md:text-base font-normal text-[#959595] text-center md:text-start">
                            {{ __('strength.s3.description') }}</p>

                    </div>
                </div>

                <div class="relative bg-[#FAFAFA] md:h-[372px] group border border-[#EAEAEA] rounded-2xl mask4" id="strength-4">
                    <!-- <div class="absolute [clip-path:circle(20%_at_100%_0%)] w-full h-full  bg-transparent group-hover:bg-primary-800 transition duration-300 z-10 " >
                </div>-->
                    <!-- <div class="absolute [clip-path:circle(25%_at_100%_0%)] w-full h-full  bg-[#F8F8F8] z-10 " >
                </div>  -->
                    <div class="relative flex flex-col mt-4 mx-2 md:mb-6  md:mx-[16px]  ">
                        <img id="image4_White"
                            class="  transition duration-300   h-[150px] md:h-[200px] w-fit mx-auto my-auto"
                            src="{{ asset('assets/img/home/strength/image4.svg') }}" alt="strength image">
                        <img id="image4_Red" class=" transition duration-300   h-[150px] md:h-[200px] w-fit mx-auto"
                            src="{{ asset('assets/img/home/strength/image3Red.svg') }}" alt="strength image">
                        <div
                            class="flex md:flex-row gap-4 md:items-center md:justify-start flex-col justify-center items-center text-center">
                            <div
                                class="bg-[#F3F3F3] transition duration-300  group-hover:bg-primary-700 h-[40px] w-[40px] md:h-[70px] md:w-[70px] rounded-2xl shadow-inner shadow-black/[7%] relative">
                                <img class="group-hover:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon4.svg') }}" alt="icon">
                                <img class="hidden group-hover:inline-block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[20px] h-[20px] md:w-[30px] md:h-[30px]"
                                    src="{{ asset('assets/img/home/strength/icon4White.svg') }}" alt="icon">
                            </div>
                            <h3
                                class="text-base md:text-2xl md:leading-[36px] font-bold text-[#232D50]  group-hover:text-secondary-800">
                                {{ __('strength.s4.head') }}</h3>
                        </div>
                        <p class="text-sm  md:text-base font-normal  text-[#959595] text-center md:text-start ">
                            {{ __('strength.s4.description') }}</p>

                    </div>
                </div>


                <!-- <div id="strength-circleP" class="absolute bg-transparent  top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2 rounded-full w-[190px] h-[190px] md:w-[280px] md:h-[280px] z-20 "> -->
                <div id="strength-circle"
                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white   border-[6px] border-[#F2F2F2] drop-shadow-md rounded-full w-[150px] h-[150px] md:w-[230px] md:h-[230px] z-50">
                    <img class="relative top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2"
                        src="{{ asset('assets/img/home/strength/logo.svg') }}" alt="logo background">
                </div>
                <!-- </div> -->
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#image1_Red").hide();
        $("#image2_Red").hide();
        $("#image3_Red").hide();
        $("#image4_Red").hide();

        $("#strength-1").hover(
            function() {
                // Mouse enters the image area
                $("#image1_White").hide();
                $("#image1_Red").show();
            },
            function() {
                // Mouse leaves the image area
                $("#image1_Red").hide();
                $("#image1_White").show();
            }
        );
        $("#strength-2").hover(
            function() {
                // Mouse enters the image area
                $("#image2_White").hide();
                $("#image2_Red").show();
            },
            function() {
                // Mouse leaves the image area
                $("#image2_Red").hide();
                $("#image2_White").show();
            }
        );
        $("#strength-3").hover(
            function() {
                // Mouse enters the image area
                $("#image3_White").hide();
                $("#image3_Red").show();
            },
            function() {
                // Mouse leaves the image area
                $("#image3_Red").hide();
                $("#image3_White").show();
            }
        );
        $("#strength-4").hover(
            function() {
                // Mouse enters the image area
                $("#image4_White").hide();
                $("#image4_Red").show();
            },
            function() {
                // Mouse leaves the image area
                $("#image4_Red").hide();
                $("#image4_White").show();
            }
        );
    });
</script>
