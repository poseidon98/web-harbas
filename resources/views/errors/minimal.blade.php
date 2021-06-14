<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="w-full">
    <div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                <div class="block">
                    <div class="w-full justify-center flex flex-wrap">
                        <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                            @yield('code')
                        </div>

                        <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                            @yield('message')
                        </div>
                    </div>
                    <div class="w-full mt-5 justify-center tracking-wider">
                        @yield('gambar')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>