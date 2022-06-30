<?php get_header();?>

<body>

    <main
        class="flex-grow m-auto lg:px-4 px-2 lgLg:px-8 font-opensans landscape:lg:p-11 landscape:sm:pt-20 landscape:lg:pt-20 landscape:lgLg:pt-24 mt-6 pt-28 lg:pt-24">

        <div class="text-white mb-10 bg-[ bg-white ]">
            <div class="z-[1] w-full max-w-[1300px] mr-auto ml-auto pr-[30px] pl-[30px] lg:pr-[50px] lg:pl-[50px]">
                <div class="flex m-[0px_-15px_-15px_-15px] sm:pt-8 flex-wrap items-center flex-col lg:flex-row ">
                    <div
                        class="sm:max-w-full basis-full flex justify-center landscape:max-w-[50%] mb-[15px]  lgLg:pr-[15px] lg:pl-[15px] lg:pr-[15px] lg:basis-[50%] landscape:sm:p-1">
                        <div class="max-w-[540px] pt-0 px-6 py-4">
                            <?php $hero = get_field('hero');?>
                            <div class="text-[ text-black ] text-[18px] leading-[16px] tracking-[1.4px] mb-[16px]">
                                <?php echo $hero['small_title'];?></div>
                            <h1 class="mb-[24px] text-[35px] lg:text-[45px] leading-[1.1] text-[ text-black ]">
                                <?php echo $hero['title'];?></h1>
                            <p class="text-[18px] leading-[24px] text-[ text-black ]">
                                <?php echo $hero['description'];?></p>
                        </div>
                    </div>
                    <div
                        class="sm:max-w-full basis-full flex justify-center landscape:max-w-[50%] mb-[15px] lg:pr-[15px] lgLg:pr-[15px] lg:pl-[15px] landscape:sm:p-1">
                        <div class="mx-auto my-3 overflow-hidden shadow-lg bg-gray-900 lg:pt-6 rounded-2xl">
                            <div class="max-w-[350px] flex justify-[ justify-end ] m-auto">
                                <img class="w-full" src=" <?php echo $hero['inner_card']['image']['url']; ?>"
                                    alt="Hills rescue banner" class="w-full rounded-lg">

                            </div>
                            <div class="max-w-[540px] pt-0 px-6 py-4">
                                <h1 light="false"
                                    class="mb-[24px] text-[35px] lg:text-3xl xl:text-[35px] leading-[1.1] text-white mt-4">
                                    <?php echo $hero['inner_card']['title'];?></h1>
                                <p light="false" class="text-[18px] leading-[24px] text-[ text-white ]">
                                    <?php echo $hero['inner_card']['description'];?></p>
                            </div>
                            <div class="py-4 m-auto flex justify-center"><span
                                    class="inline-block bg-secondary px-6 py-2 text-sm font-semibold mr-2 rounded-full">#Loyal</span><span
                                    class="inline-block bg-secondary px-6 py-2 text-sm font-semibold mr-2 rounded-full">#Playful</span><span
                                    class="inline-block bg-secondary px-6 py-2 text-sm font-semibold mr-2 rounded-full">#Cuddly</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $rescue = get_field('rescue_pets');?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 pb-10">
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_1']['image']['url']; ?>" alt="Ben"
                    class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_1']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_1']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_2']['image']['url']; ?>"
                    alt="Abbey" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_2']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_2']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_3']['image']['url']; ?>" alt="Aria"
                    class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_3']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_3']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_4']['image']['url']; ?>"
                    alt="Arthur" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_4']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_4']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_5']['image']['url']; ?>"
                    alt="Barney" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_5']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_5']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_6']['image']['url']; ?>"
                    alt="Chapo" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_6']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_6']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_7']['image']['url']; ?>"
                    alt="Mouse" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_7']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_7']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_8']['image']['url']; ?>"
                    alt="Thelma and Louise" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_8']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_8']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_9']['image']['url']; ?>"
                    alt="Thumper" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_9']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_9']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_10']['image']['url']; ?>"
                    alt="Astra" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_10']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_10']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_11']['image']['url']; ?>" alt="Bee"
                    class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_11']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_11']['description'];?>
                </div>
            </div>
            <div class="flex w-full bg-white rounded-xl shadow overflow-hidden flex-col even-columns">
                <img class="w-full" src=" <?php echo $rescue['rescue_cards']['animal_12']['image']['url']; ?>"
                    alt="Archie" class="w-full rounded-lg">
                <div class="text-center text-2xl font-bold pt-2">
                    <?php echo $rescue['rescue_cards']['animal_12']['name'];?>
                </div>
                <div class="text-lg font-poppins p-3"> <?php echo $rescue['rescue_cards']['animal_12']['description'];?>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer();?>