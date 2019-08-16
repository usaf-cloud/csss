<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Squadron Common Software Suite - USAF Cloud Platform</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased font-sans text-base text-gray-700 bg-gray-300 marketing relative">
    
    <header class="relative text-white py-12">

        <div class="header-bg overflow-hidden"></div>

        <div class="container container-900 mx-auto flex justify-between items-center mb-16 md:mb-24">

            <!-- Logo -->
            <h1 class="font-extrabold leading-none text-4xl font-sans tracking-wider">
                CSSS
            </h1>

            <!-- Auth -->
            <div>
                <a href="#" class="px-3 py-2 mr-3 uppercase text-lg font-bold hover:text-blue-200">Login</a>
                <a href="#signup" class="px-3 py-2 uppercase text-lg font-bold hover:text-blue-200">Sign Up</a>
            </div>

        </div>

        <div class="container container-900 mx-auto -mb-16 md:-mb-12 flex flex-col items-center md:items-start md:flex-row md:justify-around">
            
            <div class="mb-8 md:mr-8 text-center md:text-left">
                <h2 class="font-bold text-3xl md:text-4xl mb-4">Common Squadron Software Suite</h2>
                <p class="font-medium text-xl text-gray-300">Tools built for agile, connected squadrons</p>
            </div>

            <div>
                <img src="{{ asset('img/scss-hero.jpg') }}" alt="Example dashboard" class="shadow-xl max-w-sm md:max-w-lg rounded-lg">
            </div>

        </div>

    </header>
    
    <main>

        <section class="bg-gray-300 mt-8 py-16">
            
            <div class="container container-900 mx-auto">
                
                <h4 class="text-gray-700 font-bold text-2xl text-center">
                    Squadrons are the heart of the Air Force<br>
                    <span class="block mt-2 text-3xl text-center text-indigo-600">They deserve tools designed and built for them.</span>
                </h4>
                
                <hr class="border-t border-2 border-gray-400 mt-16">
                
            </div>
            
        </section>

        <section class="bg-gray-300 pb-12">
            
            <div class="container container-900 mx-auto">
                <p class="text-2xl font-bold">
                    That's why we building the Common Squadron Software Suite.
                </p>

                <ul class="text-xl list-disc my-8 ml-4">
                    <li class="mb-3">
                        Built on the <a href="https://usaf.cloud" class="text-indigo-500 hover:underline">USAF Cloud Platform</a>
                    </li>
                    <li class="mb-3">Infastructure managed by us, you'll never have to think about servers again</li>
                    <li class="mb-3">
                        Integrated with <a href="#" class="text-indigo-500 hover:underline">Google G-Suite</a>, to for rapid productivity
                    </li>
                    <li class="mb-3">
                        Built for extension, need a custom tool? Easily integrate your custom solution
                    </li>
                    <li class="mb-3">
                        And much more!
                    </li>
                </ul>
            </div>

        </section>
        
        <section class="bg-gray-300 pb-4">
            
            <div class="container container-900 mx-auto">

                <p class="text-2xl font-bold" id="signup">
                    Interested? Want to be the first to know when announcements are made?
                </p>

                <p class="text-xl font-medium mt-3">
                    Sign up and we'll keep you in the loop
                </p>

                <div class="shadow rounded-lg bg-gray-100 p-8 my-8">
                    @include('marketing._partials.funnel')
                </div>

            </div>

        </section>
        
    </main>

    <footer class="container container-900 mx-auto mb-8">

        <hr class="border-t border-2 border-gray-400 my-6">

        <div class="flex text-base">
            
            <a href="#" class="mr-3 hover:underline">About Us</a>
            <a href="#" class="mr-3 hover:underline">Certification</a>
            <a href="#" class="mr-3 hover:underline">Terms</a>
            
        </div>

    </footer>

</body>
</html>
