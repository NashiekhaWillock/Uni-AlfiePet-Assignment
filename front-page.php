<?php get_header();?>

<body>
    <div class="min-h-screen">
        <?php $banner = get_field('banner');?>
        <div class="bg-gray-800 dark:bg-gray-900 pl-2 pr-2">
            <!-- Slide -->
            <div
                class="slide-container flex justify-center items-center p-1 max-w-4xl m-auto relative rounded-2xl border-2 border-white dark:border-white">
                <div class="slide fade p-8 pt-0 pb-0">
                    <img src="<?php echo $banner['banner_image_1']['url']; ?>"
                        alt="Text saying become a member join today" alt="Alfie available banner"
                        class=" w-full rounded-2xl">
                </div>
                <div class="slide fade p-8 pt-0 pb-0">
                    <img src="<?php echo $banner['banner_image_2']['url']; ?>" alt="Alfie sales banner"
                        class="w-full rounded-lg">
                </div>
                <div class="slide fade p-8 pt-0 pb-0">
                    <img src="<?php echo $banner['banner_image_3']['url']; ?>" alt="Hills rescue banner"
                        class="w-full rounded-lg">
                </div>
                <a href="#"
                    class="prev left-1 cursor-pointer absolute top-1/2 w-auto -mt-5 p-3 text-white text-xl transition-all ease-in rounded-xl select-none hover:bg-gray-900"
                    title="Previous">&#10094</a>
                <a href="#"
                    class=" next right-1 cursor-pointer absolute top-1/2 w-auto -mt-5 p-3 text-white text-xl transition-all ease-in rounded-xl select-none hover:bg-gray-900"
                    title="Next">&#10095</a>
            </div>
            <!-- Slide-buttons -->
            <div class="dots-container flex justify-center items-center p-2 cursor-pointer bg-gray-800dark:bg-gray-900"
                style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <?php $welcome = get_field('welcome_hero');?>
        <div class="container mx-auto flex flex-col md:flex-row items-center my-12">
            <!--Left Col-->
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pb-10 md:pb-16 px-6">
                <p class="uppercase tracking-loose font-semibold"><?php echo $welcome['small_title'];?></p>
                <p class="font-bold text-xl my-4"><?php echo $welcome['title'];?></p>
                <p class="leading-normal mb-4 text-lg"><?php echo $welcome['description'];?></p>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-6 text-center p-1 md:pr-4">
                <!--Add your product image here-->
                <img class="w-full" src=" <?php echo $welcome['image']['url']; ?>" alt="Alfie Pet Promo"
                    class="w-full rounded-lg">

            </div>

        </div>


        </main>
    </div>
    <?php get_footer();?>