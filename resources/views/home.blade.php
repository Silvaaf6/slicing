<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beyond Measure</title>
    <link rel="icon"
        href="https://cdn.prod.website-files.com/656c5d97d4a1c4e89d27826b/6575f2a47df9aae152f507a4_favicon-bm.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body class="bg-zinc-300">
    <section id="home">
        {{-- NAVBAR --}}
        <header>
            <nav class="flex items-center justify-between p-6 w-full border-b border-gray-300" aria-label="Global">
                <a href="#home  " aria-current="page" class="nav_logo w-inline-block w--current">
                    <div class="nav_logo-img w-embed">
                        <svg width="135" height="46" viewBox="0 0 135 46" fill="none" xmlns="">
                            <path
                                d="M22.9323 17.2646L21.4056 18.7913C19.1407 21.0562 17.571 23.9196 16.8794 27.0482L14.9907 35.5954L26.731 23.8551C29.7951 20.791 31.8701 16.874 32.6872 12.6165L34.988 0.607422L22.9789 2.90817C18.7214 3.72526 14.808 5.80024 11.7403 8.86433L0 20.6046L8.5436 18.7196C11.6722 18.0279 14.5392 16.4583 16.8041 14.1933L18.3344 12.6631C19.4489 11.5486 20.8752 10.7924 22.4234 10.4949L25.7383 9.86062L25.104 13.1756C24.803 14.7237 24.0468 16.1465 22.9323 17.2646Z"
                                fill="currentColor" />
                            <path
                                d="M37.0164 11.8891L34.8948 22.97C34.5974 24.5182 33.8448 25.9445 32.7267 27.0591L31.1964 28.5893C28.9315 30.8542 27.3618 33.7212 26.6702 36.8498L24.7851 45.3934L36.5254 33.6531C39.5895 30.589 41.6645 26.672 42.4816 22.4146L44.7824 10.4055L37.0164 11.8891Z"
                                fill="currentColor" />
                            <path
                                d="M6.35804 25.3962C4.54109 25.7438 3.12193 27.1666 2.77072 28.9835L1.86046 33.7392L6.61606 32.8289C8.43301 32.4812 9.85217 31.0585 10.2034 29.2416L11.1136 24.486L6.35804 25.3962Z"
                                fill="currentColor" />
                            <path
                                d="M64.3014 15.7955C64.3014 18.1142 62.5346 19.777 60.1729 19.777H52.7868V5.08732H59.6855C61.8788 5.08732 63.581 6.66416 63.581 8.83232C63.581 10.2156 62.8571 11.4305 61.8788 11.9824C63.3015 12.4949 64.3014 14.0502 64.3014 15.7955ZM55.6359 7.72852V10.9646H58.958C59.8324 10.9646 60.5564 10.2622 60.5564 9.34479C60.5564 8.43094 59.8754 7.72852 58.958 7.72852H55.6359ZM61.2803 15.283C61.2803 14.2617 60.4919 13.4517 59.449 13.4517H55.6395V17.1358H59.449C60.4919 17.1358 61.2803 16.3259 61.2803 15.283Z"
                                fill="currentColor" />
                            <path
                                d="M76.3281 15.3474H67.9207C68.3042 16.7092 69.4546 17.5836 71.0278 17.5836C72.3466 17.5836 73.4325 16.9672 74.0095 16.2433L75.8623 17.8596C74.7334 19.1999 72.9881 20.0313 70.9454 20.0313C67.4978 20.0313 64.9211 17.5621 64.9211 14.3045C64.9211 11.0899 67.4118 8.6637 70.6909 8.6637C73.9485 8.6637 76.3962 11.0899 76.3962 14.369C76.3926 14.6664 76.3711 15.0499 76.3281 15.3474ZM67.8992 13.3261H73.4361C73.0956 11.9643 72.0098 11.0899 70.6694 11.0899C69.304 11.0899 68.2396 11.9858 67.8992 13.3261Z"
                                fill="currentColor" />
                            <path
                                d="M87.7379 8.91822L82.3731 21.6691C81.7782 23.1599 80.4988 24.0738 79.0725 24.0738C78.0941 24.0738 76.9438 23.6474 76.2198 22.9879L77.2842 20.8162C77.6247 21.1782 78.1371 21.3896 78.603 21.3896C79.1119 21.3896 79.5599 21.1567 79.8358 20.5367L80.2838 19.6013L75.8543 8.91463H79.0044L81.8355 16.3007L84.6452 8.91463H87.7379V8.91822Z"
                                fill="currentColor" />
                            <path
                                d="M87.248 14.3475C87.248 11.1114 89.7602 8.6637 93.0824 8.6637C96.4045 8.6637 98.9167 11.1114 98.9167 14.3475C98.9167 17.5836 96.4045 20.0313 93.0824 20.0313C89.7602 20.0313 87.248 17.5836 87.248 14.3475ZM96.0604 14.3475C96.0604 12.6452 94.8061 11.3443 93.0788 11.3443C91.3765 11.3443 90.0971 12.6416 90.0971 14.3475C90.0971 16.0498 91.3729 17.3507 93.0788 17.3507C94.8061 17.3507 96.0604 16.0498 96.0604 14.3475Z"
                                fill="currentColor" />
                            <path
                                d="M110.706 12.8783V19.7769H107.939V13.7742C107.939 12.3049 107.004 11.348 105.556 11.348C104.044 11.348 103.022 12.3264 103.022 13.8172V19.7769H100.256V8.92183H103.022V10.1367C103.875 9.17984 105.065 8.66738 106.47 8.66738C109.022 8.6638 110.706 10.3231 110.706 12.8783Z"
                                fill="currentColor" />
                            <path
                                d="M123.522 4.44932V19.7769H120.755V18.4796C119.881 19.4365 118.669 20.035 117.222 20.035C114.197 20.035 111.921 17.5873 111.921 14.3512C111.921 11.1151 114.2 8.66737 117.222 8.66737C118.669 8.66737 119.881 9.26226 120.755 10.2227V4.4529H123.522V4.44932ZM120.752 14.3476C120.752 12.6453 119.476 11.3444 117.748 11.3444C116.046 11.3444 114.767 12.6417 114.767 14.3476C114.767 16.0498 116.042 17.3507 117.748 17.3507C119.476 17.3507 120.752 16.0498 120.752 14.3476Z"
                                fill="currentColor" />
                            <path
                                d="M68.4292 22.8268V37.5165H65.4905V27.4247L61.4266 34.8753H59.7673L55.7213 27.4247V37.5165H52.7826V22.8268H56.4452L60.6167 30.4673L64.8096 22.8268H68.4292Z"
                                fill="currentColor" />
                            <path
                                d="M81.3524 33.0868H72.9449C73.3284 34.4486 74.4788 35.3231 76.052 35.3231C77.3708 35.3231 78.4567 34.7067 79.0337 33.9828L80.8865 35.599C79.7576 36.9393 78.0123 37.7708 75.9696 37.7708C72.522 37.7708 69.9453 35.3016 69.9453 32.044C69.9453 28.8293 72.436 26.4032 75.7151 26.4032C78.9728 26.4032 81.4205 28.8293 81.4205 32.1085C81.4169 32.4059 81.3954 32.7894 81.3524 33.0868ZM72.9234 31.0656H78.4603C78.1198 29.7038 77.034 28.8294 75.6936 28.8294C74.3282 28.8294 73.2639 29.7253 72.9234 31.0656Z"
                                fill="currentColor" />
                            <path
                                d="M93.6433 26.9668V37.8219H90.8766V36.5246C90.0022 37.4814 88.7909 38.0799 87.3431 38.0799C84.3184 38.0799 82.0427 35.6322 82.0427 32.3961C82.0427 29.16 84.322 26.7123 87.3431 26.7123C88.7909 26.7123 90.0022 27.3072 90.8766 28.2677V26.9704H93.6433V26.9668ZM90.8766 32.3961C90.8766 30.6938 89.6008 29.393 87.8735 29.393C86.1712 29.393 84.8918 30.6903 84.8918 32.3961C84.8918 34.0984 86.1676 35.3993 87.8735 35.3993C89.5973 35.3957 90.8766 34.0984 90.8766 32.3961Z"
                                fill="currentColor" />
                            <path
                                d="M94.8705 36.1117L96.2108 34.2804C97.0422 35.0043 98.0851 35.4953 99.3824 35.4953C100.49 35.4953 101.3 35.1333 101.3 34.4739C101.3 33.75 100.364 33.4956 99.1709 33.2196C97.4472 32.8361 95.2109 32.3058 95.2109 29.8366C95.2109 27.5358 97.2322 26.4105 99.6404 26.4105C101.493 26.4105 102.877 27.0699 103.855 27.8368L102.515 29.6896C101.726 29.0947 100.812 28.6898 99.7049 28.6898C98.7696 28.6898 98.0026 28.9872 98.0026 29.6251C98.0026 30.349 98.9165 30.582 100.131 30.84C101.855 31.2235 104.091 31.7539 104.091 34.223C104.091 36.5202 102.049 37.7781 99.4505 37.7781C97.4221 37.7709 95.9133 37.004 94.8705 36.1117Z"
                                fill="currentColor" />
                            <path
                                d="M105.13 33.1945V26.6578H107.897V32.811C107.897 34.1943 108.811 35.0903 110.198 35.0903C111.581 35.0903 112.498 34.1943 112.498 32.811V26.6578H115.265V33.1945C115.265 35.9611 113.244 37.7709 110.198 37.7709C107.13 37.7709 105.13 35.9611 105.13 33.1945Z"
                                fill="currentColor" />
                            <path
                                d="M123.457 29.342H122.988C121.009 29.342 119.859 30.5139 119.859 32.3667V37.5165H117.092V26.6614H119.859V28.0626C120.647 27.0627 121.712 26.4858 122.988 26.4858H123.457V29.342Z"
                                fill="currentColor" />
                            <path
                                d="M134.932 33.0868H126.525C126.908 34.4486 128.058 35.3231 129.632 35.3231C130.95 35.3231 132.036 34.7067 132.613 33.9828L134.466 35.599C133.337 36.9393 131.592 37.7708 129.549 37.7708C126.102 37.7708 123.525 35.3016 123.525 32.044C123.525 28.8293 126.016 26.4032 129.295 26.4032C132.552 26.4032 135 28.8293 135 32.1085C134.993 32.4059 134.975 32.7894 134.932 33.0868ZM126.499 31.0656H132.036C131.696 29.7038 130.61 28.8294 129.27 28.8294C127.904 28.8294 126.84 29.7253 126.499 31.0656Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </a>

                <div class="flex lg:hidden bg-slate-700 justify-center items-center rounded-full w-14 h-14 relative">
                    <button type="button"
                        class="relative flex items-center justify-center rounded-full text-white w-12 h-12">
                        <span class="sr-only">Open main menu</span>
                        <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor"
                            class="w-8 h-8 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <path stroke-linecap="" stroke-linejoin="" d="M4 8h16M4 14h16" />
                        </svg>
                        </a>
                    </button>
                </div>

                <div class="hidden lg:flex lg:gap-x-8 lg:justify-end items-center ml-auto">
                    <a href="#home"></a>
                    <a href="#work"
                        class="text-xl font-semibold text-gray-900 transition-colors duration-300 hover:text-gray-600 opacity-100 active:text-gray-900">Work</a>
                    <a href="#reviews"
                        class="text-xl font-semibold text-gray-900 transition-colors duration-300 hover:text-gray-600 opacity-100">Reviews</a>
                    <a href="#contact"
                        class="text-xl font-semibold text-gray-900 transition-colors duration-300 hover:text-gray-600 opacity-100">Contact</a>
                    <div class="relative inline-block">
                        <select
                            class="appearance-none border bg-transparent text-lg font-semibold font-sans text-gray-600 rounded-full px-4 py-3 pr-10">
                            <option value="EN">EN</option>
                            <option value="NL">NL</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2">
                            <svg class="w-4 h-4 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                            </svg>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
        </header>

        <hr class="border-gray-400">

        {{-- HOME --}}
        <div class="isolate overflow-hidden">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mx-auto">
                    <h2 class="text-neutral-700 tracking-tight sm:text-[13rem]">Strategic</h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-6 items-center">
                    <div class="flex justify-start items-center space-x-1 ">
                        <button
                            class="flex justify-center items-center border border-slate-600 rounded-full w-48 h-20 text-xl font-semibold">
                            <a href="#work">View my work</a>
                        </button>

                        <div class="bg-orange-600 flex justify-center items-center rounded-full w-20 h-20">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white align-middle"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7" />
                                <polyline points="7 9 17 7 17 17" />
                            </svg>
                        </div>
                    </div>

                    <!-- Kolom 2: Teks "Websites" -->
                    <div class="flex justify-end items-center">
                        <h2 class="text-neutral-700 tracking-tight text-4xl sm:text-6xl sm:text-[13rem] text-right">
                            Websites
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        {{-- PAGE 2 --}}
        <hr class="absolute w-full h-1 border-gray-400 mt-96 z-0 border-sm">
        <div class="isolate p-4 pl-48 flex items-start justify-between mt-16">
            </hr>
            <img class="origin-bottom -rotate-12 w-80 ml-20 mt-10 relative z-10" src="{{ asset('images/hero.png') }}"
                alt="">
            <div class="pr-36 max-w-lg text-left text-base text-sans space-y-1">
                <p class="text-gray-600">Samen, omdat jij je bedrijf het beste kent,</p>
                <p class="text-gray-600">Zorgen we ervoor dat de ervaring ontworpen</p>
                <p class="text-gray-600">is Om resultaten te behalen.</p>
            </div>
        </div>

        {{-- WORK --}}
        <section id="work">
            <div class="flex justify-around mt-32">
                <div class="">
                    <p class="text-4xl text-9xl text-gray-800">Recent <br> Work</p>
                    <img class="w-[500px] h-auto rounded-2xl mt-24 transition-transform duration-300 transform hover:scale-95 active:scale-90"
                        src="{{ asset('images/serum.png') }}" alt="Serum">
                    <a href="">
                        <p class="mt-4 text-lg text-gray-700">Product & startpagina design</p>
                        <p class="text-lg text-gray-700">voor Blokit</p>
                    </a>
                </div>

                <div class="">
                    <img class="w-[500px] h-auto rounded-2xl transition-transform duration-300 transform hover:scale-95 active:scale-90"
                        src="{{ asset('images/biokit.png') }}" alt="Biokit">
                    <a href="">
                        <p class="mt-4 text-lg text-gray-700">Product & startpagina design</p>
                        <p class="text-lg text-gray-700">voor Blokit</p>
                    </a>
                </div>
            </div>
        </section>

        {{-- PAGE 3 --}}
        <hr class="absolute w-full h-1 border-gray-400 mt-28 z-0 border-sm ">
        <div class="isolate py-24 sm:py-32 flex flex-col sm:flex-row items-start mt-20">
            <p class="text-neutral-700 text-8xl ml-24">
                One-man <br> Studio
            </p>

            <div class="ml-64 max-w-lg text-left text-[20px] text-current space-y-2 mt-32">
                <p class="text-gray-600">The person behind Beyond Measure is Olaf, an 18 year old
                    passionate UX/UI designer and no-code developer. Olaf builds
                    websites using Webflow, a powerful no-code platform that
                    creates websites with clean code and excellent
                    customizability.
                </p>

                <div class="padding-bottom padding-large">
                    <div class="flex items-center space-x-2">
                        <button
                            class="flex items-center text-gray-800 focus:outline-none font-semibold text-lg relative group mt-6">
                            <a href="#contact" class="relative flex items-center">
                                <p class="flex text-xl items-center text-gray-700">
                                    Get in touch
                                </p>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-gray-700 transition-transform duration-300 group-hover:-translate-x-0"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="7" y1="15" x2="15" y2="8" />
                                    <polyline points="7 7 15 7 15 15" />
                                </svg>
                                <span
                                    class="absolute left-0 bottom-0 w-full h-0.5 bg-gray-400 transform scale-x-0 transition-transform duration-300 origin-left group-hover:scale-x-100"></span>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <hr class="absolute w-full h-1 border-gray-400 mt-96 z-10 border-sm ">
        <div class="isolate p-4 flex items-start justify-between ml-48 relative z-10">
            <img class="origin-bottom -rotate-12 w-96 ml-32 mt-10" src="{{ asset('images/strategi.png') }}"
                alt="">
        </div>
    </section>

    {{-- REVIEWS --}}
    <section id="reviews">
        <div class="py-24 px-24 mt-28">
            <div class="flex items-center justify-between mb-10">
                <p class="text-neutral-700 text-8xl">
                    What they say <br> about me
                </p>
                <div class="flex space-x-2 group">
                    <!-- Tombol Panah Kiri -->
                    <button id="prev"
                        class="bg-gray-700 text-white rounded-2xl size-16 flex justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 transition-transform duration-1000 transform group-hover:-translate-x-2"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5M12 19l-7-7 7-7" />
                        </svg> <!-- Panah kiri -->
                    </button>

                    <!-- Tombol Panah Kanan -->
                    <button id="next"
                        class="bg-gray-700 text-white rounded-2xl size-16 flex justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6 transition-transform duration-700 transform group-hover:translate-x-2"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M12 5l7 7-7 7" />
                        </svg> <!-- Panah kanan -->
                    </button>
                </div>
            </div>

            <div class="relative mt-20">
                <div class="relative overflow-hidden">
                    <div id="carousel" class="flex space-x-6 transition-transform duration-300">
                        <!-- Item Carousel 1 -->
                        <div class="min-w-[400px] rounded border border-gray-400 rounded-2xl p-6 cursor-grab">
                            <p class="text-gray-500 text-lg">
                                "Olaf heeft opmerkeljk talent getoond in ontwerp dan Webflow-ontwinkkeling, met een
                                zeldzame mix van creativiteit dan teknis inzicht op slechts 18-jarige leeftijd."
                            </p>
                            <div class="flex justify-between mt-10">
                                <p class="text-gray-700 text-xl font-semibold">Rick Bossenbroek</p>
                                <p class="text-gray-500 text-lg text-right">Founder Uncode</p>
                            </div>
                        </div>

                        <!-- Item Carousel 2 -->
                        <div class="min-w-[400px] rounded border border-gray-400 rounded-2xl p-6 cursor-grab">
                            <p class="text-gray-500 text-lg">
                                "Olaf heeft opmerkeljk talent getoond in ontwerp dan Webflow-ontwinkkeling, met een
                                zeldzame mix van creativiteit dan teknis inzicht op slechts 18-jarige leeftijd."
                            </p>
                            <div class="flex justify-between mt-10">
                                <p class="text-gray-700 text-xl font-semibold">Rick Bossenbroek</p>
                                <p class="text-gray-500 text-lg text-right">Founder Uncode</p>
                            </div>
                        </div>

                        <div class="min-w-[400px] rounded border border-gray-400 rounded-2xl p-6 cursor-grab">
                            <p class="text-gray-500 text-lg">
                                "Olaf heeft opmerkeljk talent getoond in ontwerp dan Webflow-ontwinkkeling, met een
                                zeldzame mix van creativiteit dan teknis inzicht op slechts 18-jarige leeftijd."
                            </p>
                            <div class="flex justify-between mt-10">
                                <p class="text-gray-700 text-xl font-semibold">Rick Bossenbroek</p>
                                <p class="text-gray-500 text-lg text-right">Founder Uncode</p>
                            </div>
                        </div>

                        <div class="min-w-[400px] rounded border border-gray-400 rounded-2xl p-6 cursor-grab">
                            <p class="text-gray-500 text-lg">
                                "Olaf heeft opmerkeljk talent getoond in ontwerp dan Webflow-ontwinkkeling, met een
                                zeldzame mix van creativiteit dan teknis inzicht op slechts 18-jarige leeftijd."
                            </p>
                            <div class="flex justify-between mt-10">
                                <p class="text-gray-700 text-xl font-semibold">Rick Bossenbroek</p>
                                <p class="text-gray-500 text-lg text-right">Founder Uncode</p>
                            </div>
                        </div>

                        <div class="min-w-[400px] rounded border border-gray-400 rounded-2xl p-6 cursor-grab">
                            <p class="text-gray-500 text-lg">
                                "Olaf heeft opmerkeljk talent getoond in ontwerp dan Webflow-ontwinkkeling, met een
                                zeldzame mix van creativiteit dan teknis inzicht op slechts 18-jarige leeftijd."
                            </p>
                            <div class="flex justify-between mt-10">
                                <p class="text-gray-700 text-xl font-semibold">Rick Bossenbroek</p>
                                <p class="text-gray-500 text-lg text-right">Founder Uncode</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute top-0 right-0 h-full w-16 bg-gradient-to-l from-zinc-300 to-transparent pointer-events-none">
                    </div>
                </div>

            </div>
    </section>

    <style>
        #carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
    </style>

    <script>
        const carousel = document.getElementById('carousel');
        const nextButton = document.getElementById('next');
        const prevButton = document.getElementById('prev');
        let currentIndex = 0; // Indeks saat ini

        // Mengatur ukuran item dan margin antar item
        const itemWidth = 400; // Lebar item dalam piksel
        const itemMargin = 24; // Margin antara item dalam piksel
        const totalItems = carousel.children.length; // Total item dalam carousel
        const visibleItems = Math.floor(carousel.parentElement.clientWidth / (itemWidth +
            itemMargin)); // Jumlah item yang terlihat sekaligus

        nextButton.addEventListener('click', () => {
            // Pastikan currentIndex tidak melebihi batas item terakhir
            if (currentIndex < totalItems - visibleItems) {
                currentIndex++;
                updateCarousel();
            }
        });

        prevButton.addEventListener('click', () => {
            // Pastikan currentIndex tidak kurang dari 0
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        function updateCarousel() {
            // Mengatur transformasi untuk menggeser carousel
            carousel.style.transform = `translateX(-${currentIndex * (itemWidth + itemMargin)}px)`;
        }
    </script>

    {{-- BUTTON --}}
    <div class="flex justify-start items-center space-x-1 ml-24">
        <button
            class="flex justify-center items-center border border-gray-400 rounded-full w-40 h-16 text-xl font-semibold">
            Get in touch
        </button>

        <div class="flex gap-10">
            <div class="bg-orange-600 flex justify-center items-center rounded-full w-16 h-16">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-700" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="7" y1="17" x2="17" y2="7" />
                    <polyline points="7 9 17 7 17 17" />
                </svg>
            </div>
            <div class="w-0.5 h-14 bg-gray-400 "></div>
            <p class="text-neutral-600 -tracking-tight text-lg text-start font-semibold">
                Strategically Driven Design & <br> Webflow Development
            </p>
        </div>
    </div>

    {{-- FOOTER --}}
    <section id="contact">
        <footer class="bg-zinc-900 text-white py-32 rounded-tl-3xl mt-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ml-12">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                    <!-- Logo Section -->
                    <div class="flex flex-col space-y-4">
                        <div class="flex items-center space-x-2">
                            <a href="#home">
                                <img src="{{ asset('images/logo0.svg') }}" alt="Logo" class="w-30">
                            </a>
                        </div>
                    </div>

                    <!-- Contact and Services Section -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex gap-24">
                            <!-- Contact Section -->
                            <div class="ml-60">
                                <h4 class="text-2xl mb-4 text-gray-400">Contact</h4>
                                <ul>
                                    <li class="mb-2">
                                        <a href="https://api.whatsapp.com/send/?phone=31612764669&text&type=phone_number&app_absent=0"
                                            class="hover:underline text-xl text-gray-300" target="_blank">Whatsapp</a>
                                    </li>
                                    <li>
                                        <a href="https://myaccount.google.com/?hl=in&utm_source=OGB&utm_medium=act&gar=WzEyMF0&pli=1&nlr=1"
                                            class="hover:underline text-xl text-gray-300">Email</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Services Section -->
                            <div class="text-xl">
                                <h4 class=" mb-4 text-gray-400 text-2xl">Services</h4>
                                <ul>
                                    <li class="mb-2 text-gray-300">
                                        Web Design <br>
                                        <section class="flex gap-1.5 mt-1.5">
                                            <p>Web</p>
                                            <p>Development</p>
                                        </section>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Socials and Email Section -->
                    <div class="ml-64">
                        <h4 class="text-2xl mb-4 text-gray-400">Socials</h4>
                        <div class="footer_socials">
                            <div class="footer_social-icons-container" style="display: flex; margin-left: 0;">
                                <a href="https://www.linkedin.com/in/olaf-van-der-heijden/" target="_blank"
                                    class="footer_social-item w-inline-block">
                                    <div class="footer_social-icon w-embed">
                                        <div
                                            class="bg-neutral-800 flex justify-center items-center rounded-full w-14 h-14">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                class="transform transition-transform duration-500 hover:scale-90"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.539 19.5431H16.578V14.9001C16.578 13.7941 16.555 12.3701 15.034 12.3701C13.49 12.3701 13.254 13.5701 13.254 14.8191V19.5411H10.292V10.0001H13.137V11.3001H13.176C13.4609 10.8132 13.8725 10.4127 14.367 10.1412C14.8614 9.86967 15.4203 9.73728 15.984 9.75811C18.984 9.75811 19.54 11.7331 19.54 14.3041V19.5421L19.539 19.5431ZM6.947 8.69411C6.6069 8.69392 6.2745 8.5929 5.9918 8.40382C5.7091 8.21475 5.48879 7.94612 5.35874 7.63187C5.22868 7.31762 5.1947 6.97187 5.2611 6.63831C5.3275 6.30476 5.49129 5.99838 5.73178 5.75789C5.97226 5.5174 6.27865 5.35361 6.6122 5.28721C6.94575 5.22081 7.29151 5.25479 7.60575 5.38485C7.92 5.51491 8.18864 5.73521 8.37771 6.01791C8.56678 6.30061 8.6678 6.63301 8.668 6.97311C8.66826 7.19919 8.62393 7.4231 8.53753 7.63202C8.45114 7.84094 8.32438 8.03077 8.16452 8.19063C8.00466 8.35049 7.81483 8.47725 7.60591 8.56365C7.39699 8.65004 7.17308 8.69438 6.947 8.69411ZM8.432 19.5431H5.463V10.0001H8.432V19.5431ZM21.021 2.50011H3.976C3.78445 2.49774 3.5943 2.53313 3.41643 2.60427C3.23856 2.67542 3.07646 2.78092 2.93938 2.91474C2.80231 3.04857 2.69295 3.2081 2.61756 3.38421C2.54217 3.56032 2.50222 3.74956 2.5 3.94111V21.0591C2.50222 21.2507 2.54217 21.4399 2.61756 21.616C2.69295 21.7921 2.80231 21.9517 2.93938 22.0855C3.07646 22.2193 3.23856 22.3248 3.41643 22.396C3.5943 22.4671 3.78445 22.5025 3.976 22.5001H21.018C21.4055 22.5052 21.7792 22.3563 22.0571 22.0861C22.3349 21.816 22.4942 21.4466 22.5 21.0591V3.94111C22.4939 3.5537 22.3346 3.18449 22.0568 2.91438C21.779 2.64427 21.4054 2.4953 21.018 2.50011H21.021Z"
                                                    fill="#D0D0D0"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.awwwards.com/olaf-vd-heijden/" target="_blank"
                                    class="footer_social-item w-inline-block">
                                    <div class="footer_social-icon w-embed">
                                        <div
                                            class="bg-neutral-800 flex justify-center items-center rounded-full w-14 h-14 ml-2">
                                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                                class="transform transition-transform duration-500 hover:scale-90"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_929_181)">
                                                    <path
                                                        d="M20.221 5.48242L15.779 19.3404H12.759L10.36 10.3684L7.962 19.3874H4.942L0.5 5.52642H3.965L6.452 15.0314L8.806 5.52642H11.961L14.314 15.0314L16.802 5.52642L20.221 5.48242Z"
                                                        fill="#D0D0D0"></path>
                                                    <path
                                                        d="M22.1889 14.8984C23.5229 14.8984 24.4999 15.8774 24.4999 17.2104C24.4999 18.5404 23.5229 19.5184 22.1889 19.5184C20.8559 19.5184 19.8789 18.5404 19.8789 17.2104C19.8799 15.8774 20.9009 14.8984 22.1889 14.8984Z"
                                                        fill="#D0D0D0"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_929_181">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0.5 0)"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="bg-gray-800 h-0.5 border-0 mt-10">
            </div>

            <div class="mt-10 pl-20 flex">
                <div class="flex flex-col justify-between items-start w-full h-full">
                    <!-- Menambahkan flex-col agar elemen disusun vertikal -->
                    <p class="text-2xl text-gray-400">Send an email! 👋</p>

                    <div class="absolute right-16">
                        <a href="#home">
                            <div class="bg-gray-700 flex justify-center items-center rounded-full w-16 h-16">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-8 h-8 text-white transform transition-transform duration-500 hover:scale-90"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7 7 7M12 3v18" />
                                </svg>
                            </div>
                        </a>
                    </div>

                    <div class="mt-20 flex justify-between items-center w-full h-full">
                        <!-- Menambahkan margin top di sini -->
                        <a href="mailto:olaf@beyondmeasure.nl"
                            class="text-6xl block border-b-2 border-gray-800 inline-block pb-5 text-gray-400 transition-transform duration-300 hover:border-gray-600 focus:border-gray-600 origin-left">
                            olaf@beyondmeasure.nl
                        </a>

                        <div class="absolute right-16 text-xl text-gray-400">
                            <p>
                                &copy; Beyond Measure 2024
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>
