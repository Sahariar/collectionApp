<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Collection App')</title>
    @vite('resources/css/app.css')
    <!-- plugins:css -->
    @include('partials.styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
    <div class="">
        <div class="bg-teal-50 mt-10">
            <div class="max-w-screen-xl mx-auto px-4 py-3 items-center justify-between text-black sm:flex md:px-8">
                <div class="flex gap-x-4">
                    <div class="w-10 h-10 flex-none rounded-lg bg-gray-200 flex items-center justify-center">
                        <div class="w-6">
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 54 54" xml:space="preserve" width="24px" height="24px" fill="#000000">

                                <g id="SVGRepo_bgCarrier" stroke-width="0" />

                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <path style="fill:#e01010;" d="M38,33.486v4.028C38,38.335,37.335,39,36.514,39H17.486C16.665,39,16,38.335,16,37.514v-4.028 C16,32.665,15.335,32,14.514,32H0.232C0.104,32,0,32.104,0,32.232v16.143C0,49.824,1.176,51,2.626,51h48.749 C52.824,51,54,49.824,54,48.374V32.232C54,32.104,53.896,32,53.768,32H39.486C38.665,32,38,32.665,38,33.486z" />
                                        <path style="fill:#9a133c;" d="M44,3H10L0,32v0.231C0,32.104,0.104,32,0.232,32h14.282C15.335,32,16,32.665,16,33.486v4.028 C16,38.335,16.665,39,17.486,39h19.028C37.335,39,38,38.335,38,37.514v-4.028C38,32.665,38.665,32,39.486,32h14.282 C53.896,32,54,32.104,54,32.231v-0.234L44,3z" />
                                        <path style="fill:#F2ECBF;" d="M14.514,32C15.335,32,16,32.665,16,33.486v4.028C16,38.335,16.665,39,17.486,39h19.028 C37.335,39,38,38.335,38,37.514v-4.028C38,32.665,38.665,32,39.486,32H46v-3v-5H8v5v3H14.514z" />
                                        <rect x="11" y="16" style="fill:#D8D1AB;" width="32" height="8" />
                                        <rect x="14" y="8" style="fill:#BAB395;" width="26" height="8" />
                                    </g>
                                </g>

                            </svg>
                        </div>

                    </div>
                    <p class="py-2 font-medium">
                        Collection Application
                    </p>
                </div>
            </div>
        </div>
        @yield('contents')
    </div>
    @include('partials.scripts')
</body>

</html>