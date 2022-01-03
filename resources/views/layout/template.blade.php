<html>

<head>
    <title>SMK Harapan Bangsa</title>
    <link rel="shortcut icon" href="/image/logo-HB.png" type="image/x-icon">
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

        .green {
            background-color: 76b82a;
        }

        .greentext {
            color: 76b82a;
        }

        .blue {
            background-color: 2978B5;
        }

        body,
        html {
            height: 100%;
            margin: 0;
        }

        header {
            transition: background-color 0.5s;
            -webkit-transition: background-color 0.5s;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $(window).scroll(function() {
            var y = $(window).scrollTop()
            if (y <= 100) {
                $('header').css('background-color', 'transparent');
            } else if (y <= 700) {
                $('header').css('background-color', '76b82a');
            }
        });
    </script>

</head>



<body class="font-sans text-gray-800 flex bg-cover bg-no-repeat" style="background-image: url('/image/Gambar.jpg');">


    <div class="">
        <!-- Desktop Header -->
        @include('layout/header')
        <!-- batas header -->

        <!-- isi content -->
        @yield('content')
        <!-- batas content -->
    </div>

</body>

<script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else {
                    userMenuDiv.classList.add("invisible");
                }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }
</script>

</html>