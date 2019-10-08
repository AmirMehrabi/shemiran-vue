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
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

</head>

<body class="font-sans leading-normal tracking-normal" id="app">

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
        <div class="flex flex-col shadow-blue w-3/5 my-auto mt-20 mx-auto py-4 px-8 rounded-lg bg-white about-card">
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


        <div class="flex flex-row justify-between w-3/5 my-auto mt-20 mx-auto ">

            <div class="rect-icon text-center hover:shadow-blue transition-all p-1 rounded w-32">
                <div class="bg-icon flex p-6 items-center">
                    <img src="{{asset('images/icons/3.png')}}" class="h-10 mx-auto my-auto" alt="">
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


        <div class="flex flex-col w-3/5 mt-20 mx-auto">
            <h2 class="text-blue-main font-bold mb-3">دریافت نوبت از دکتر علیرضا شاهدوستی</h2>

        </div>


        <div class="flex flex-row w-4/5 my-auto">
            <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
                <p class="text-sm text-blue-normal">مرحله اول</p>
                <p class="font-bold text-blue-main">انتخاب بخش</p>
            </div>
            <div class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft">
                <div class="flex flex-row items-center">
                    <div class="flex-1">
                        <p class="text-blue-normal">لطفاً بخش مورد نظر خود را انتخاب کنید
                        </p>

                    </div>
                    <div class="flex-1 text-left">
                        <select name="" id=""
                            class="bg-white px-2 rounded w-48 irsans focus:outline-none border border-transparent active:border-gray-300">
                            <option value="" class="bg-white">انتخاب بخش</option>
                            <option value="" class="bg-white">بخش قلب</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row w-4/5 my-auto mt-4">
            <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
                <p class="text-sm text-blue-normal">مرحله دوم</p>
                <p class="font-bold text-blue-main">زمان حضور در مطب</p>
            </div>
            <div class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft">
                <p class="text-blue-normal">لطفا زمان نوبت دلخواه خود را از میان نوبت‌های خالی انتخاب کنید</p>
                <img src="{{asset('images/nobat.png') }}" class="w-full" alt="">

                <div class="text-center my-6">
                    <a href="#"
                        class="btn-register  text-sm hover:shadow-blue font-bold shadow-blue-lg hover:shadow-blue transition-all px-10 py-2 leading-none  text-white  bg-blue-500 border-blue-500 rounded-large text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">انتخاب
                        نوبت</a>
                </div>

            </div>
        </div>

        <div class="flex flex-row w-4/5 my-auto mt-4">
            <div class="text-left w-1/4 py-2 px-4 ml-2 section-line animated bounceInRight">
                <p class="text-sm text-blue-normal">مرحله سوم</p>
                <p class="font-bold text-blue-main">تائید اطلاعات</p>
            </div>
            <div class="w-3/4 border-2 border-blue-light my-auto p-4 rounded-lg bg-white animated bounceInLeft">
                <p class="text-blue-normal mb-4">مشخصات زیر را به دقت بخوانید و مطمئن شوید که همه چیز مورد تائید شماست
                </p>
                <div class="flex flex-row ">
                    <div class="flex-1">
                        <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">تاریخ نوبت
                            <span class="font-bold text-base text-blue-main mr-4">دوشنبه ۲۵ شهریور ۱۳۹۸</span>
                        </p>

                        <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">ساعت مراجعه
                            <span class="font-bold text-base text-blue-main mr-4">۱۶:۳۰ بعد از ظهر</span>
                        </p>

                        <p class="text-blue-normal text-sm border-b border-gray-400 inline-block py-1 mb-3">نام پزشک
                            <span class="font-bold text-base text-blue-main mr-4">دکتر علیرضا بخشی - قلب و عروق</span>
                        </p>

                    </div>
                    <div class="flex-1">
                        <p class="text-blue-normal text-sm  inline-block py-1 mb-3">هزینه‌ی قابل پرداخت
                            <span class="font-bold text-base text-blue-main mr-4">۲۵۰،۰۰۰ ریال</span>
                        </p>


                        <div class="flex items-center w-full">

                            <!-- Toggle Button -->
                            <label for="toogleA" class="flex items-center cursor-pointer">
                                <p class="text-blue-normal text-sm  inline-block py-1 ml-2">به صورت اینترنتی پرداخت
                                    می‌کنم

                                </p>
                                <!-- toggle -->
                                <div class="relative">
                                    <!-- input -->
                                    <input id="toogleA" type="checkbox" class="hidden" />
                                    <!-- line -->
                                    <div class="toggle__line w-10 h-4  rounded-full bg-white shadow-blue-lg"></div>
                                    <!-- dot -->
                                    <div
                                        class="toggle__dot absolute w-6 h-6 bg-white rounded-full shadow inset-y-0 left-0">
                                    </div>
                                </div>
                                <!-- label -->
                                <div class="mr-3 text-blue-main text-sm irsans font-bold">
                                    بله
                                </div>
                            </label>


                        </div>


                        <p class="font-bold text-blue-normal text-sm mt-6">توصیه‌های پیش از حضور در مرکز:</p>
                        <p class="text-gray-600 text-xs">در زمان مراجعه حتما شماره پیگیری نوبت را به همراه داشته باشید
                        </p>
                        <p class="text-gray-600 text-xs">در صورت عدم مراجعه در زمان مقرر، نوبت شما لغو خواهد شد</p>



                    </div>

                </div>
                <div class="text-center my-6">
                    <a href="#"
                        class="btn-register  text-sm hover:shadow-blue font-bold shadow-blue-lg hover:shadow-blue transition-all px-10 py-2 leading-none  text-white  bg-blue-500 border-blue-500 rounded-large text-white rounded-lg hover:border-transparent hover:text-teal-100 hover:bg-white mt-4 lg:mt-0">ثبت
                        نهایی و پرداخت</a>
                </div>

            </div>


        </div>


        <div>
            <div
                class="flex flex-col w-3/5 mt-20 mx-auto bg-blue-light irsans font-bold text-blue-main border-r-4 border-blue-normal text-center p-1 text-xs rounded-l-full">
                <p>روزبه بمانی عزیز، نوبت شما با موفقیت در سامانه نوبت دهی ثبت شد. جهت ویرایش آن می‌توانید به قسمت <span
                        class="text-red-700 hover:text-red-800"><a href="#">نوبت‌های من</a></span> در پروفایل خود مراجعه
                    کنید.</p>
            </div>
            <div class="text-center">
                <p class="text-blue-normal text-xs border-b border-gray-400 inline-block py-1 mb-3">شماره‌ی پیگیری
                    <span class="font-bold text-xs text-blue-main mr-4">۹۷۱۳۱۰۹۸</span>
                </p>
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
