<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>


  <style>
      @font-face {
        font-family: Aclonica;
        src: url({{asset('font/Aclonica/Aclonica-Regular.ttf')}});
      }
  </style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css"  rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])


    <x-rich-text-trix-styles />



</head>

<body class=" overflow-x-hidden">
   <div class="bg-fuchsia-50">
    <div class="top" id="top">
        <div>
            <img src="{{ asset('static/img/logo.jpg') }}" class="h-20 mb-1" alt="" srcset="">
        </div>
        <ul class="font-nano">
            <li>
                <div class="in-box">
                    <div class="">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <title>gmail</title>
                            <path
                                d="M20,18H18V9.25L12,13L6,9.25V18H4V6H5.2L12,10.25L18.8,6H20M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
                        </svg>
                    </div>
                    <div class="flex flex-col p-2">
                        <span>minaaviation@yahoo.com</span>
                        <span>minaaviation@yahoo.com</span>
                    </div>
                    
                </div>

                
                
                
            </li>

            <li>
                <div class="in-box">
                    <div class="">
                        <svg aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                    </svg>
                    </div>
                    <div class="flex flex-col p-2">
                        <span>017145444555</span>
                        <span>017145444555</span>
                    </div>
                    
                </div>

                
                
                
            </li>
          

        </ul>
    </div>
   </div>


    <nav id="nav">
        <div class="nav-inner">

            <div class="btn-bar">

                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden
                     hover:bg-gray-100 focus:outline-none  ring-2 ring-gray-200 focus:ring-2 focus:ring-gray-200 dark:text-gray-400
                      dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="list-box" id="navbar-cta">
                <ul>
                    <li>
                        <a href="{{route('home')}}" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page">Hajj</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" aria-current="page">About</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}" aria-current="page">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <main style="min-height: 350px">

        {{-- Start Carosole  --}}

        {{$slot}}
        

    
    </main>



    <footer class="relative overflow-hidden ring-4 ring-cyan-100">
        <x-icon.foot-bg></x-icon.foot-bg>
        <div class="container mx-auto py-10 my-10 relative z-10">
            
            <div class="grid grid-cols-2 gap-3 relative">
                <div class="text-lime-50 font-semibold flex justify-center col-span-2 md:col-span-1">
                    <div
                        class="bg-cyan-600 rounded-3xl p-3  border-2 border-fuchsia-400 ring-4 border-spacing-2 ring-fuchsia-100">
                        <h3 class="text-2xl hover:text-orange-400 py-3">Quick Links</h3>
                        <ul>
                            <li class="hover:text-orange-400"><a href="http://" target="_blank"
                                    rel="noopener noreferrer" class="flex items-center p-1">
                                    <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                    </svg>
                                    <span class="ml-2">Hajj Agencies Association of Bangladesh</span></a></li>
                            <li class="hover:text-orange-400"><a href="http://" target="_blank"
                                    rel="noopener noreferrer" class="flex items-center p-1">
                                    <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                    </svg>
                                    <span class="ml-2">Association of Travel Agents of BD</span></a></li>
                            <li class="hover:text-orange-400"><a href="http://" target="_blank"
                                    rel="noopener noreferrer" class="flex items-center p-1">
                                    <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                    </svg>
                                    <span class="ml-2">
                                        International Air Transport Association</span></a></li>
                            <li class="hover:text-orange-400"><a href="http://" target="_blank"
                                    rel="noopener noreferrer" class="flex items-center p-1">
                                    <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                                    </svg>
                                    <span class="ml-2">Biman Bangladesh Airlines</span></a></li>
                        </ul>
                    </div>
                </div>


                <div class="text-lime-50 font-semibold flex justify-center col-span-2 md:col-span-1 px-3 md:px-0">
                    <div
                        class="bg-cyan-600 rounded-3xl p-5  border-2 border-fuchsia-400 ring-4 border-spacing-2 ring-fuchsia-100">
                        <h3 class="text-2xl hover:text-orange-400 py-3">Contacts</h3>

                        <ul>
                            <li class="hover:text-orange-400 flex items-center p-1">
                                <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm9-10v.4A3.6 3.6 0 0 1 8.4 9H6.61A3.6 3.6 0 0 0 3 12.605M14.458 3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z" />
                                </svg>
                                <span class="ml-2"> মিনা এভিয়েশন </span>
                            </li>

                            <li class="hover:text-orange-400 flex items-center p-1">
                                <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                                </svg>
                                <span class="ml-2">+880 1933-225533</span>
                            </li>

                            <li class="hover:text-orange-400 flex items-center p-1">
                                <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z" />
                                </svg>
                                <span class="ml-2">+880 01552451768</span>
                            </li>
                            <li class="hover:text-orange-400 flex items-center p-1">
                                <svg class="w-5 h-5 text-fuchsia-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                                <span class="ml-2">৩/৪ এ পুরানা পল্টন সাব্বির টাওয়ার ১ ম তলা ঢাকা -১০০০</span>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>

          
        </div>

        <div class=" bg-[#CDDC39] text-[#271712] py-3 relative z-20">
           <div class="container">
            <div class="grid gap-2 grid-cols-12">
                <span class="col-span-12 md:col-span-5 flex items-center justify-center pb-5 md:pb-0 border-b md:border-none border-fuchsia-500">© 2023 {{config('app.name')}}, Dhaka, Bangladesh</span>
            <span class="col-span-12 md:col-span-7 text-center md:text-right">
                Licensed Hajj, Umrah and Air Travel Agency. Hajj License #297, Umrah License #266. Travel Agency Website Design & Hosting by <a class=" text-orange-400" href="https://iqrasot.net" target="_blank" rel="noopener noreferrer">Iqra Soft</a>
            </span>
            </div>
           </div>
        </div>
    </footer>



</body>

</html>
