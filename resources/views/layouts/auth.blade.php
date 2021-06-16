<?php

use Illuminate\Support\Facades\Session;
?>
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
        html,
        body,
        #auth,
        #auth>div {
            height: 100%;
            font-family: 'Poppins', sans-serif;
        }

        #auth__left input {
            border-width: 0 0 1px 0 !important;
            border-radius: 0;
        }

        #auth__right {
            background: url("img/home.jpeg"), #777;
            background-blend-mode: multiply;
            background-position: center;
            background-size: cover;
            font-size: 3em;
            font-weight: 600;
            text-align: right;
            color: white;
            display: flex;
            align-items: center;
            justify-content: end;
            padding: 0 1em 0 0;
        }

        .color-light-accent {
            color: #00e883;
        }

        .color-accent {
            color: #00C46F;
        }

        .bg-accent {
            background: #00C46F;
        }
    </style>
</head>

<body>
    <div id="auth" class="container-fluid">
        <div class="row">
            <div id="auth__left" class="col text-center my-5">
                @yield("content")
            </div>
            <div id="auth__right" class="col-5">
                <div>
                    the best
                    <br>
                    <span class="color-light-accent">cleaning</span>
                    <br>
                    <span class="color-light-accent">services</span> for
                    <br>
                    your daily
                    <br>
                    needs
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        if (<?= Session::has("message") ?>) {
            alert("<?= Session::get("message") ?>")
        }
    </script>
</body>

</html>