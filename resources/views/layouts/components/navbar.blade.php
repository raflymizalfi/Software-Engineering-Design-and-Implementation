<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid px-5">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" class="navbar-brand" width="50px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">
                        <span <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') { ?> class="pagination-active" <?php } else { ?> <?php } ?>>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/services">
                        <span <?php if (basename($_SERVER['PHP_SELF']) == 'services') { ?> class="pagination-active" <?php } else { ?> <?php } ?>>Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        <span <?php if (basename($_SERVER['PHP_SELF']) == 'company') { ?> class="pagination-active" <?php } else { ?> <?php } ?>>Company</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">
                        <span <?php if (basename($_SERVER['PHP_SELF']) == 'contact') { ?> class="pagination-active" <?php } else { ?> <?php } ?>>Contact us</span>
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item d-flex me-2">
                    <a class="nav-link" style="align-self: center;" aria-current="page" href="/history">
                        <span>My order</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/img/avatar.jpeg" style="border-radius: 50px;" alt="" width="40px">
                    </a>


                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown" style="background-color : #00C46F; border-radius: 15px">
                        <li><a class="dropdown-item text-white" href="#">Profile</a></li>
                        <li><a class="dropdown-item text-white" href="#">Order History</a></li>
                        <li><a class="dropdown-item text-white" href="#">Settings</a></li>
                        <li><a class="dropdown-item text-white" href="{{ url('user/logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>