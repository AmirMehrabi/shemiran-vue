<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Ghostwind CSS : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>

<body class="font-sans leading-normal tracking-normal">

    <!--Header-->
    <header class="top-header">
        <nav class="flex items-center justify-between flex-wrap py-6 px-24 nav-bg">
            <div class="flex items-center flex-shrink-0 text-white ml-6">
                <svg class="fill-current  text-blue-500 h-8 w-8 ml-2" width="54" height="54" viewBox="0 0 54 54"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                </svg>
                {{-- <span class="font-semibold text-xl tracking-tight  text-blue-500">Tailwind CSS</span> --}}
            </div>
            <div class="block lg:hidden">
                <button
                    class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm mx-auto">
                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        خانه
                    </a>
                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        خدمات ما
                    </a>
                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        اخبار و مقالات
                    </a>

                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        همایش‌ها
                    </a>

                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        درباره‌ی ما
                    </a>

                    <a href="#responsive-header"
                        class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-white hover:bg-blue-main ml-6">
                        تماس با ما
                    </a>
                </div>
                <div>
                    <a href="#"
                        class="inline-block text-sm px-4 py-2  text-blue-500 leading-none rounded text-white rounded-lg hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">ورود</a>

                    <a href="#"
                        class="btn-register inline-block text-sm px-4 py-2 leading-none  text-white  bg-blue-500 border-blue-500 rounded text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">ثبت
                        نام</a>
                </div>
            </div>
        </nav>
        {{-- End of navigation --}}


        <div class="flex flex-col w-1/4 my-auto mt-20 mx-auto">
            <div class="text-blue-main text-center  py-1">
                <h1 class="text-2xl">اطلاعات پزشک</h1>
            </div>
            <div class="text-blue-main text-center py-1 pb-3 border-b-2">
                <p>نوبت‌دهی از بهترین پزشکان سامانه جامعه</p>
            </div>
            <div class="text-blue-main text-center  py-1">
                <div class="flex flex-row items-center">
                    <div class="text-blue-main text-center">
                        <img src="{{asset('images/avatar.png')}}" alt="">
                    </div>
                    <div class="text-blue-main text-center m-2 text-right">
                        <h2 class=" font-bold">دکتر علیرضا شاه‌دوستی</h2>
                        <p class="font-light text-sm text-gray-600">متخصص و جراح بیماری‌های چشم</p>
                        <p class="font-light text-sm text-gray-600">کد نظام پزشکی: ۹۷۱۲۴۵</p>
                    </div>
                </div>
            </div>
        </div>



    </header>

    <!--Container-->
    <div class="container mx-auto">
        <div class="flex flex-col shadow-blue w-2/4 my-auto mt-20 mx-auto py-4 px-8 rounded-lg bg-white about-card">
            <p class=" mb-2">درباره‌ی پزشک</p>
            <p class="text-gray-600 text-justify text-sm">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری
                را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می
                توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز
                شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                گیرد.</p>

        </div>


        <div class="flex flex-row justify-between w-2/4 my-auto mt-20 mx-auto ">

            <div class="rect-icon text-center hover:shadow-xl p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/3.png')}}" class="h-10 mx-auto my-auto" alt="">
                </div>
                <p class="text-blue-main font-bold text-sm">دریافت نوبت</p>
            </div>


            <div class="rect-icon text-center hover:shadow-xl p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/4.png')}}" class="h-10 mx-auto my-auto" alt="">
                </div>
                <p class="text-blue-main font-bold text-sm">موقعیت مطب</p>
            </div>


            <div class="rect-icon text-center hover:shadow-xl p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/2.png')}}" class="h-10 mx-auto my-auto" alt="">
                </div>
                <p class="text-blue-main font-bold text-sm">دوره‌های آموزشی</p>
            </div>


            <div class="rect-icon text-center hover:shadow-xl p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/6.png')}}" class="h-10 mx-auto my-auto" alt="">
                </div>
                <p class="text-blue-main font-bold text-sm">مقالات پزشک</p>
            </div>


            <div class="rect-icon text-center hover:shadow-xl p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/7.png')}}" class="h-10 mx-auto my-auto" alt="">
                </div>
                <p class="text-blue-main font-bold text-sm">پرسش و پاسخ</p>
            </div>

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div>


    <footer class="bg-gray-900">

    </footer>

    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
        //Init tooltips
        tippy('.avatar')

    </script>
</body>

</html>
