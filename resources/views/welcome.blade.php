<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>شمیران وب</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>

<body class="font-sans leading-normal tracking-normal">
    <div id="app">

        <!--Header-->
        <header class="top-header">
            <nav class="flex items-center justify-between flex-wrap py-6 px-24 nav-bg">
                <div class="flex items-center flex-shrink-0 text-white ml-6">
                    <img src="{{asset('images/logo.png')}}" class=" h-16 w-16" alt="">
                    {{-- <svg class="fill-current  text-blue-500 h-8 w-8 ml-2" width="54" height="54" viewBox="0 0 54 54"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                </svg> --}}
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
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            خانه
                        </a>
                        <a href="#responsive-header"
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            خدمات ما
                        </a>
                        <a href="#responsive-header"
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            اخبار و مقالات
                        </a>

                        <a href="#responsive-header"
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            همایش‌ها
                        </a>

                        <a href="#responsive-header"
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            درباره‌ی ما
                        </a>

                        <a href="#responsive-header"
                            class="block px-3 py-1 rounded lg:inline-block lg:mt-0 text-blue-500 hover:text-blue-300 hover:shadow transition-all ml-6">
                            تماس با ما
                        </a>
                    </div>
                    <div>
                        <a href="#"
                            class="inline-block text-sm px-4 py-2 hover:shadow text-blue-500 leading-none rounded text-white rounded-lg hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">ورود</a>

                        <a href="#"
                            class="btn-register inline-block text-sm hover:shadow px-4 py-2 leading-none  text-white  bg-blue-500 border-blue-500 rounded text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">ثبت
                            نام</a>
                    </div>
                </div>
            </nav>
            {{-- End of navigation --}}


            {{-- Doctor's information --}}
            <div class="flex flex-col w-3/4 lg:w-1/4 my-auto mt-20 mx-auto">
                <div class="flex items-center justify-between text-blue-main text-center  py-1">
                    <img src="{{asset('images/heartbeat.png')}}" alt="">
                    <h1 class="text-2xl text-center">اطلاعات پزشک</h1>
                    <img src="{{asset('images/heartbeat.png')}}" alt="">
                </div>
                <div class="text-blue-main text-center py-1 pb-3 border-b-2">
                    <p>نوبت‌دهی از بهترین پزشکان سامانه جامع</p>
                </div>
                <div class="text-blue-main text-center  py-1">
                    <div class="flex flex-row items-center">
                        <div class="text-blue-main text-center">
                            <img src="{{asset('images/avatar.png')}}" alt="">
                        </div>
                        <div class="text-blue-main text-center m-2 text-right">
                            <h2 class="flex items-center font-bold"><img class="ml-1"
                                    src="{{asset('images/verified.png')}}" alt=""> دکتر علیرضا شاه‌دوستی</h2>
                            <div class="mr-5">
                                <p class="font-light text-sm text-gray-600">متخصص و جراح بیماری‌های چشم</p>
                                <p class="font-light text-sm text-gray-600">کد نظام پزشکی: ۹۷۱۲۴۵</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- End of doctor's information --}}



        </header>

        <!--Container-->
        <div class="container mx-auto">

            {{-- About doctor card --}}
            <div
                class="flex flex-col shadow-blue w-full lg:w-3/5 my-auto mt-20 mx-auto py-4 px-8 rounded-lg bg-white about-card">
                <p class="flex text-blue-heading font-bold items-center mb-2">
                    <img src="{{asset('images/about-doctor.png')}}" class="ml-2" alt="">
                    درباره‌ی پزشک</p>
                <p class="text-gray-600 text-justify text-sm">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                    و با
                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                    برای
                    شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی
                    در
                    شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                    بیشتری
                    را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت
                    می
                    توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد
                    نیاز
                    شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار
                    گیرد.</p>

            </div>

            {{-- End of about doctor card --}}



            {{-- Some cards about what are we offering --}}
            <div class="flex flex-row justify-between w-full lg:w-3/5 my-auto mt-20 mx-auto ">

                <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                    <div class="bg-icon flex p-6 items-center">
                        <img src="{{asset('images/icons/3.png')}}" class="h-10 mx-auto my-auto " alt="">
                    </div>
                    <p class="text-blue-main font-bold text-sm">دریافت نوبت</p>
                </div>


                <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                    <div class="bg-icon flex p-6 items-center">
                        <img src="{{asset('images/icons/4.png')}}" class="h-10 mx-auto my-auto" alt="">
                    </div>
                    <p class="text-blue-main font-bold text-sm">موقعیت مطب</p>
                </div>


                <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                    <div class="bg-icon flex p-6 items-center">
                        <img src="{{asset('images/icons/2.png')}}" class="h-10 mx-auto my-auto" alt="">
                    </div>
                    <p class="text-blue-main font-bold text-sm">دوره‌های آموزشی</p>
                </div>


                <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                    <div class="bg-icon flex p-6 items-center">
                        <img src="{{asset('images/icons/6.png')}}" class="h-10 mx-auto my-auto" alt="">
                    </div>
                    <p class="text-blue-main font-bold text-sm">مقالات پزشک</p>
                </div>


                <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                    <div class="bg-icon flex p-6 items-center">
                        <img src="{{asset('images/icons/7.png')}}" class="h-10 mx-auto my-auto" alt="">
                    </div>
                    <p class="text-blue-main font-bold text-sm">پرسش و پاسخ</p>
                </div>

            </div>

            {{-- End of the offerings card --}}



            {{-- Reserve doctor heading --}}
            <div class="flex flex-col w-full lg:w-3/5 mt-20 mx-auto">
                <h2 class="flex items-center text-blue-heading font-bold mb-4">
                    <img src="{{asset('images/about-doctor.png')}}" class="ml-2" alt="">
                    دریافت نوبت از دکتر علیرضا شاهدوستی
                </h2>

            </div>

            {{-- End of Reserve doctor heading --}}


            {{-- Our vue component for reservation goes here --}}
            <reserve-component></reserve-component>
            {{-- End of component --}}

        </div>


        {{-- Footer goes here --}}
        <footer class="bottom-footer mt-20  justify-between text-sm">
            <div class="container mx-auto">
                <div class="flex flex-row justify-between">
                    <div class="text-blue-normal  px-4 py-2 m-2">
                        <img src="images/logo.png" class="w-24" alt="">
                        <p class="my-3">سامانه‌ی جامع، بستری مناسب جهت پیشگیری، کنترل و درمان بیماری</p>

                        <div class="flex items-center irsans mb-1">
                            <img src="images/phone.png" class="ml-3 w-5" alt="">
                            ۰۲۱-۳۴۴-۹۵۲۰
                        </div>

                        <div class="flex items-center irsans mb-1">
                            <img src="images/envelope.png" class="ml-3 w-5" alt="">
                            email@gmail.com
                        </div>

                        <div class="flex items-center irsans">
                            <img src="images/map.png" class="ml-3 w-5" alt="">
                            تهران، خیابان ولی‌عصر، خیابان بزرگمهر، کلینیک تخصصی دکتر علی حسین‌پور
                        </div>
                    </div>
                    <div class="text-gray-700  text-right px-4 py-2 m-2">
                        <h3 class="text-base font-bold text-blue-heading mb-5">خدمات</h3>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/doctor-2.png" class="ml-1 w-5" alt="">
                            نوبت‌دهی آنلاین
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/doctor-2.png" class="ml-1 w-5" alt="">
                            دریافت رژیم غذایی
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/doctor-2.png" class="ml-1 w-5" alt="">
                            پرسش و پاسخ از پزشک
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/doctor-2.png" class="ml-1 w-5" alt="">
                            دوره‌های آموزشی ویژه
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500">
                            <img src="images/doctor-2.png" class="ml-1 w-5" alt="">
                            خرید اشتراک ویژه
                        </a>
                    </div>
                    <div class="text-gray-700  text-right px-4 py-2 m-2">
                        <h3 class="text-base font-bold text-blue-heading mb-5">صفحات مفید</h3>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/arrow-left.png" class="ml-1 w-1" alt="">
                            خانه
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/arrow-left.png" class="ml-1 w-1" alt="">
                            لیست پزشکان
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/arrow-left.png" class="ml-1 w-1" alt="">
                            اخبار و مقالات
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500 mb-2">
                            <img src="images/arrow-left.png" class="ml-1 w-1" alt="">
                            همایش‌ها
                        </a>

                        <a href="#" class="flex items-center irsans py-1 text-gray-700 hover:text-gray-500">
                            <img src="images/arrow-left.png" class="ml-1 w-1" alt="">
                            درباره‌ی ما
                        </a>
                    </div>
                    <div class=" text-gray-700  text-right px-4 py-2 m-2">
                        <h3 class="text-base font-bold text-blue-heading mb-5">شبکه‌های اجتماعی</h3>
                        <div class="flex items-center text-center justify-between">
                            <a href="#" class="hover:shadow">
                                <img src="{{asset('images/facebook.png')}}" class=" w-5" alt="">
                            </a>

                            <a href="#" class="hover:shadow">
                                <img src="{{asset('images/instagram.png')}}" class=" w-5" alt="">
                            </a>

                            <a href="#" class="hover:shadow">
                                <img src="{{asset('images/twitter.png')}}" class=" w-5" alt="">
                            </a>


                        </div>


                    </div>
                </div>
            </div>

        </footer>


    </div>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@4"></script>
    <script>
        //Init tooltips
        tippy('.avatar')

    </script>
</body>

</html>
