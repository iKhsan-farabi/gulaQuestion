 <html lang="en" class="scroll-smooth">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Gula Question - Takaran Gula</title>
     <!-- Meta SEO -->
     <meta name="title" content="Landwind - Tailwind CSS Landing Page">
     <meta name="description"
         content="Get started with a free and open-source landing page built with Tailwind CSS and the Flowbite component library.">
     <meta name="robots" content="index, follow">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="language" content="English">
     <meta name="author" content="Themesberg">

     <!-- Social media share -->
     <meta property="og:title" content=Landwind - Tailwind CSS Landing Page>
     <meta property="og:site_name" content=Themesberg>
     <meta property="og:url" content=https://https://demo.themesberg.com/landwind />
     <meta property="og:description" content=Get started with a free and open-source landing page for Tailwind CSS built
         with the Flowbite component library featuring dark mode, hero sections, pricing cards, and more.>
     <meta property="og:type" content="">
     <meta property="og:image"
         content=https://themesberg.s3.us-east-2.amazonaws.com/public/github/landwind/og-image.png>
     <meta name="twitter:card" content="summary" />
     <meta name="twitter:site" content="@themesberg" />
     <meta name="twitter:creator" content="@themesberg" />

     <!-- Favicon -->
     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">
     <meta name="msapplication-TileColor" content="#da532c">
     <meta name="theme-color" content="#ffffff">
     @vite(['resources/css/app.css'])
     <script async defer src="https://buttons.github.io/buttons.js"></script>
 </head>

 <body>
     <header class="fixed w-full">
         <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
             <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                 <a href="#" class="flex items-center">
                     <img src="./images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                     <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Gula
                         Question</span>
                 </a>
                 <div class="flex items-center lg:order-2">
                     <a href="#"
                         class="hidden md:block text-gray-800 dark:text-white hover:text-green-400 hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Register</a>
                     <a href="{{ route('login') }}"
                         class="text-white bg-[#79c39b] hover:bg-green-500 focus:ring-4 focus:ring-green-400 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-green-500 dark:hover:bg-green-500 focus:outline-none dark:focus:ring-green-800">Login</a>
                     <button data-collapse-toggle="mobile-menu-2" type="button"
                         class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-500"
                         aria-controls="mobile-menu-2" aria-expanded="false">
                         <span class="sr-only">Open main menu</span>
                         <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd"
                                 d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                 clip-rule="evenodd"></path>
                         </svg>
                         <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd"
                                 d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                 clip-rule="evenodd"></path>
                         </svg>
                     </button>
                 </div>
                 <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1"
                     id="mobile-menu-2">
                     <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0" id="navMenu">
                         <li>
                             <a href="#"
                                 class="block py-2 pl-3 pr-4 text-white bg-green-500 rounded lg:bg-transparent lg:text-green-500 lg:p-0 dark:text-white"
                                 aria-current="page">Home</a>
                         </li>
                         <li>
                             <a href="#manfaat"
                                 class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Manfaat</a>
                         </li>

                         <li>
                             <a href="#fitur"
                                 class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Fitur</a>
                         </li>
                         <li>
                             <a href="#team"
                                 class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                         </li>
                         <li>
                             <a href="#faq"
                                 class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
     </header>

     <!-- Start block -->
     <section class="bg-white dark:bg-gray-900">
         <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
             <div class="mr-auto place-self-center lg:col-span-7">
                 <div class="lg:hidden mb-6">
                     <img src="./images/hero.png" alt="hero image">
                 </div>
                 <h1
                     class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">
                     Kandungan Gula <br>Dengan Takaran Sendok.</h1>
                 <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                     Pada Era Digital sekarang, Pemanfaatan teknologi sangat berarti pada kehidupan, kesehatan adalah
                     hal yang paling penting untuk diri kita, maka dari itu alangkah baiknya kita <b>Aware</b> pada pola
                     makan kita.</p>

             </div>
             <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                 <img src="./images/hero.png" alt="hero image">
             </div>
         </div>
     </section>
     <!-- End block -->
     <!-- Start block -->
     <section class="bg-gray-50 dark:bg-gray-800" id="manfaat">
         <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
             <!-- Row -->
             <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                 <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                     <div class="lg:hidden mb-6">
                         <img src="./images/feature-1.png" alt="hero image">
                     </div>
                     <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Manfaat Qula
                         Question untukmu</h2>
                     <p class="mb-8 font-light lg:text-xl">Beberapa manfaat yang bisa kamu dapatkan ketika menggunakan
                         Gula Question, pedulilah dengan takaran konsumsi gulamu sebelum hal membahayakan terjadi.</p>
                     <!-- List -->
                     <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-500">
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Temukan
                                 Produk Relevan</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Takar
                                 Kandungan Gula</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span
                                 class="text-base font-medium leading-tight text-gray-900 dark:text-white">Meningkatkan
                                 Awareness</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Beri Saran
                                 Kesehatan</span>
                         </li>
                     </ul>
                     <p class="mb-8 font-light lg:text-xl">Program akan terus dikembangkan supaya benefit yang
                         didapatkan lebih banyak.</p>
                 </div>
                 <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="./images/feature-1.png"
                     alt="dashboard feature image">
             </div>
             <!-- Row -->
             <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                 <img class="hidden w-full mb-4 rounded-lg lg:mb-0 lg:flex" src="./images/feature-2.png"
                     alt="feature image 2">
                 <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                     <div class="lg:hidden mb-6">
                         <img src="./images/feature-2.png" alt="hero image">
                     </div>
                     <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Bahaya Gula
                         Berlebihan</h2>
                     <p class="mb-8 font-light lg:text-xl">Berdasarkan keterangan P2PTM Kemenkes RI , Konsumsi gula
                         berlebihan memiliki banyak efek buruk bagi kesehatan kita, beberapa diantaranya adalah.</p>
                     <!-- List -->
                     <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-500">
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">
                                 Meningkatkan risiko penyakit Diabetes</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span
                                 class="text-base font-medium leading-tight text-gray-900 dark:text-white">Meningkatkan
                                 risiko tekanan darah tinggi</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Penurunan
                                 Daya Ingat</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Penuaan
                                 Dini</span>
                         </li>
                         <li class="flex space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span
                                 class="text-base font-medium leading-tight text-gray-900 dark:text-white">Peningkatan
                                 berat badan</span>
                         </li>
                     </ul>
                     <p class="font-light lg:text-xl">Masih banyak hal buruk akan menimpa kesehatanmu jika komsumsi
                         gulamu terlalu banyak.</p>
                 </div>
             </div>
         </div>
     </section>
     <!-- End block -->
     <!-- Start block -->
     <section class="bg-white dark:bg-gray-900" id="fitur">
         <div
             class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
             <div class="col-span-2 mb-8">
                 <p class="text-lg font-medium text-green-500">Fitur Website</p>
                 <h2
                     class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">
                     Fitur Website Gula Question</h2>
                 <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Beberapa fitur pada website ini bisa
                     menjadi pertimbangan anda menakar gula.</p>
                 <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                     <div>
                         <a href="#"
                             class="inline-flex items-center text-base font-medium text-green-500 hover:text-green-500">
                             Cocok untuk pemula
                             <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </a>
                     </div>
                     <div>
                         <a href="#"
                             class="inline-flex items-center text-base font-medium text-green-500 hover:text-green-500">
                             Responsif dan Interaktif
                             <svg class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                 <div>
                     <svg class="w-10 h-10 mb-2 text-green-500 md:w-12 md:h-12 dark:text-green-500" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                         </path>
                     </svg>
                     <h3 class="mb-2 text-2xl font-bold dark:text-white">Lihat Data Gula</h3>
                     <p class="font-light text-gray-500 dark:text-gray-400">
                         Tampilkan informasi gula pada produk dengan skala sendok
                     </p>
                 </div>
                 <div>
                     <svg class="w-10 h-10 mb-2 text-green-500 md:w-12 md:h-12 dark:text-green-500" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                         </path>
                     </svg>
                     <h3 class="mb-2 text-2xl font-bold dark:text-white">Bantu Isi Data</h3>
                     <p class="font-light text-gray-500 dark:text-gray-400">Merasa data produk tidak lengkap? anda bisa
                         ikut membantu mengisi data untuk membantu sesama</p>
                 </div>
                 <div>
                     <svg class="w-10 h-10 mb-2 text-green-500 md:w-12 md:h-12 dark:text-green-500" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                         </path>
                     </svg>
                     <h3 class="mb-2 text-2xl font-bold dark:text-white">Koreksi Data</h3>
                     <p class="font-light text-gray-500 dark:text-gray-400">Melihat data yang tidak sesuai? anda bisa
                         memberikan koreksi pada data tersebut</p>
                 </div>
                 <div>
                     <svg class="w-10 h-10 mb-2 text-green-500 md:w-12 md:h-12 dark:text-green-500" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                         </path>
                     </svg>
                     <h3 class="mb-2 text-2xl font-bold dark:text-white">Saran Kesehatan</h3>
                     <p class="font-light text-gray-500 dark:text-gray-400">Baca artikel artikel mengenai kesehatan</p>
                 </div>
             </div>
         </div>
     </section>
     <!-- End block -->
     <!-- Start block -->
     <section class="bg-gray-50 dark:bg-gray-800">
         <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
             <figure class="max-w-screen-md mx-auto">
                 <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-500" viewBox="0 0 24 27" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                         d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                         fill="currentColor" />
                 </svg>
                 <blockquote>
                     <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"Yang terbesar dari
                         kebodohan adalah mengorbankan kesehatan untuk jenis lain dari kebahagiaan."</p>
                 </blockquote>
                 <figcaption class="flex items-center justify-center mt-6 space-x-3">
                     <img class="w-6 h-6 rounded-full"
                         src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                         alt="profile picture">
                     <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                         <div class="pr-3 font-medium text-gray-900 dark:text-white">Arthur Schopenhauer</div>
                         <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Tokoh Filsafat</div>
                     </div>
                 </figcaption>
             </figure>
         </div>
     </section>
     <!-- End block -->

     <!-- Start block -->
     <section class="bg-gray-50 dark:bg-gray-800">
         <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
             <div class="max-w-screen-sm mx-auto text-center">
                 <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                     Bantu Kami Menyehatkan Masyarakat</h2>
                 <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Usaha kamu sangat berarti bagi
                     orang lain dengan data gula yang kamu isikan</p>
                 <a href="#"
                     class="text-white bg-[#79c39b] hover:bg-[#79c39b] focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-500 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Tambah
                     Data Gula</a>
             </div>
         </div>
     </section>
     <!-- End block -->

     <!-- Start block -->
     <section class="bg-white dark:bg-gray-900" id="team">
         <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
             <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                 <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Team Creator
                 </h2>
                 <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Website ini dikerjakan dengan
                     beberapa orang yang memiliki job masing - masing.</p>
             </div>
             <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                 <!-- Pricing Card -->
                 <div
                     class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-500 xl:p-8 dark:bg-gray-800 dark:text-white">
                     <h3 class="mb-4 text-xl font-semibold">Nadhif Ali Ikhsani</h3>
                     <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Membuat Tampilan Antarmuka
                         Website supaya interaktif.</p>
                     <!-- List -->
                     <ul role="list" class=" mt-3 mb-8 space-y-4 text-left">
                         <li class="flex justify-center items-center space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span>Front End Developer</span>
                         </li>

                     </ul>
                 </div>
                 <div
                     class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-500 xl:p-8 dark:bg-gray-800 dark:text-white">
                     <h3 class="mb-4 text-xl font-semibold">Chandra Aulia Tama</h3>
                     <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Membuat Struktur Database dan
                         Konfigurasi Data.</p>
                     <!-- List -->
                     <ul role="list" class=" mt-3 mb-8 space-y-4 text-left">
                         <li class="flex justify-center items-center space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span>Back End Developer</span>
                         </li>

                     </ul>
                 </div>
                 <!-- Pricing Card -->
                 <div
                     class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-500 xl:p-8 dark:bg-gray-800 dark:text-white">
                     <h3 class="mb-4 text-xl font-semibold">M.Rehza Pahlevi</h3>
                     <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Membuat Desain Prototype dan
                         Diagram Model.</p>
                     <!-- List -->
                     <ul role="list" class=" mt-3 mb-8 space-y-4 text-left">
                         <li class="flex justify-center items-center space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span class="mx-auto">UI / UX Designer</span>
                         </li>

                     </ul>

                 </div>
                 <!-- Pricing Card -->
                 <div
                     class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-500 xl:p-8 dark:bg-gray-800 dark:text-white">
                     <h3 class="mb-4 text-xl font-semibold">Samy Zaidan</h3>
                     <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Mengumpulkan data komposisi gula
                         dan gizi produk pasar.</p>
                     <!-- List -->
                     <ul role="list" class=" mt-3 mb-8 space-y-4 text-left">
                         <li class="flex justify-center items-center space-x-3">
                             <!-- Icon -->
                             <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                     clip-rule="evenodd"></path>
                             </svg>
                             <span>Data Collector</span>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
     </section>
     <!-- End block -->

     <!-- Start block -->
     <section class="bg-white dark:bg-gray-900" id="faq">
         <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
             <h2
                 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">
                 Frequently asked questions</h2>
             <div class="max-w-screen-md mx-auto">
                 <div id="accordion-flush" data-accordion="collapse"
                     data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                     data-inactive-classes="text-gray-500 dark:text-gray-400">
                     <h3 id="accordion-flush-heading-1">
                         <button type="button"
                             class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white"
                             data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                             aria-controls="accordion-flush-body-1">
                             <span>Apa Latar belakang dibuatnya website?</span>
                             <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </button>
                     </h3>
                     <div id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                         <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                             <p class="mb-2 text-gray-500 dark:text-gray-400">Ide awal dari aplikasi/website kami
                                 adalah untuk mengumpulkan informasi
                                 kandungan gula pada makanan/minuman kemasan. Kami memilih makanan/minuman
                                 kemasan karena biasanya atau hampir pada semua bungkus dari makanan/minuman
                                 tersebut terdapat informasi mengenai kandungan gula produk tersebut. Dari
                                 kandungan gula tersebut yang biasanya dituliskan dalam satuan gram akan kami
                                 visualisasikan ke dalam bentuk sendok..</p>
                         </div>
                     </div>
                     <h3 id="accordion-flush-heading-3">
                         <button type="button"
                             class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                             data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                             aria-controls="accordion-flush-body-3">
                             <span>Komponen apa saja yang digunakan dalam pembuatan website?</span>
                             <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </button>
                     </h3>
                     <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                         <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                             <p class="mb-2 text-gray-500 dark:text-gray-400">Untuk bagian desain kita mengandalkan
                                 tailwind css dan popper.js, sementara untuk akses data dan fungsi kita gunakan laravel
                                 dikolaborasi dengan package filament.</p>
                         </div>
                     </div>
                     <h3 id="accordion-flush-heading-4">
                         <button type="button"
                             class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
                             data-accordion-target="#accordion-flush-body-4" aria-expanded="false"
                             aria-controls="accordion-flush-body-4">
                             <span>Bagaimana alur kerja website ini?</span>
                             <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd"
                                     d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                     clip-rule="evenodd"></path>
                             </svg>
                         </button>
                     </h3>
                     <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                         <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                             <p class="mb-2 text-gray-500 dark:text-gray-400">User bisa melihat komposisi produk
                                 setelah login, user juga bisa mengisikan data gula yang nanti akan ditinjau oleh admin
                                 / pengelola</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End block -->
     <footer class="bg-white dark:bg-gray-800">
         <div class="max-w-screen-xl p-4 py-6 mx-auto lg:pt-8 pb-8 md:p-8 lg:p-10">
             <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
             <div class="text-center">
                 <a href="#"
                     class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                     <img src="./images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                     Gula Question
                 </a>
                 <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2022-2023 Gula Question™.
                     All
                     Rights Reserved. Thanks to ThemeWagon
                 </span>
             </div>
         </div>
         <div>

         </div>
     </footer>
     @vite(['resources/js/app.js'])
     {{-- <script>
         const sections = document.querySelectorAll("section");
         const navLi = document.querySelectorAll("nav div div ul li a");
         window.onscroll = () => {
             var current = "";

             sections.forEach((section) => {
                 const sectionTop = section.offsetTop;
                 if (pageYOffset >= sectionTop - 60) {
                     current = section.getAttribute("id");
                 }
             });
             console.log(navLi)
             navLi.forEach((a) => {
                 console.log(current)
                 a.classList.remove("hidden");
                 if (a.classList.contains(current)) {
                     a.classList.add("hidden");
                 }
             });
         };
     </script> --}}
 </body>

 </html>
