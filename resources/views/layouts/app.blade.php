<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@0;900&display=swap" rel="stylesheet">
    <title>Daily.com</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        .navbar .nav-link {
            color: black !important;
        }

        .navbar .nav-link.active span {
            font-weight: bold;
            border-bottom: 3px #00C46F solid;
        }

        .fs-30 {
            font-size: 24px;
        }

        .fs-20 {
            font-size: 20px;
        }

        .fs-15 {
            font-size: 16px;
        }

        .fs-45 {
            font-size: 36px;
        }

        .continue-button {
            transform: translate(-20%, 35%);
        }

        .order-services {
            transform: translate(0, -50%)
        }

        .hero {
            background-image: url("img/hero.jpg");
            height: 1013px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .vertical-line {
            display: inline-block;
            border-left: 3px solid #ccc;

            height: 125px;
        }

        .sub-hero {
            margin: 0 0 15em 5em;
        }

        .sub-hero span {
            color: #00C46F
        }

        .icon-order .card {
            width: 90px;
            height: 90px;
        }

        .card {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            cursor: pointer;
        }

        .gray-text {
            color: #C4C4C4;
        }

        .pagination-active {
            border-bottom: 3px #00C46F solid;
            color: #00C46F;
        }

        .active-order {
            color: #00C46F;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #00C46F;
        }

        .page-link {
            border: none;
            color: #8C8C8C;
        }

        .order .card {
            box-shadow: none;
            border: none;
        }

        .active-payment {
            background-color: #00C46F;
        }

        .pointer {
            cursor: pointer;
        }

        .payment input,
        .icon-order input,
        .order input {
            display: none;
        }

        .order .shadow {
            padding: 1em;
        }
    </style>
</head>

<body>
    @include("layouts.components.navbar")

    @yield("content")

    @include("layouts.components.footer")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
        const arr_service = <?= json_encode(App\Models\Service::pluck("short_name")); ?>;
        const arr_cleaner = <?= json_encode(App\Models\Cleaner::pluck("name")); ?>;

        function activeClass(params) {
            const arr = ["home", "bedroom", "bathroom", "living", "kitchen", "yard", "garage", "warehouse"]
            for (let i = 0; i < arr.length; i++) {
                if (arr[i] === params) {
                    let nowParams = document.querySelector(`.${params}-icon`)
                    nowParams.classList.add('active-order')
                } else {
                    let remove = document.querySelector(`.${arr[i]}-icon`)
                    remove.classList.remove('active-order')
                }
            }
        }

        function activeClassPayment(params) {
            const cash = document.querySelector('.cash')
            const bank = document.querySelector('.bank')
            if (params === 'bank') {
                bank.classList.add('active-payment')
                cash.classList.remove('active-payment')
            } else if (params === 'cash') {
                cash.classList.add('active-payment')
                bank.classList.remove('active-payment')
            }
        }

        function activeClassCleaner(params) {

            const arr = arr_cleaner
            for (let i = 0; i < arr.length; i++) {
                if (arr[i] === params) {
                    let nowParams = document.querySelector(`.${params}`)
                    nowParams.classList.add(`shadow`)
                } else {
                    let remove = document.querySelector(`.${arr[i]}`)
                    remove.classList.remove(`shadow`)
                }
            }
        }
    </script>
</body>

</html>