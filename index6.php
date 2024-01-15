<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap-select/css/bootstrap-select.css">
    <link rel="stylesheet" href="assets/css/core/layout.css">
</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Bootstrap Sidebar</h4>
            </div>
            <ul class="list-unstyled components">
                <li class="nav-item dropdown">
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="flex-column collapse list-unstyled" id="homeSubmenu">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/home.php">Home 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 1</a>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- <a class="nav-link" href="#">Page 2</a> -->
                            <a href="#homeSubmenu2" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                            <ul class="flex-column collapse list-unstyled" id="homeSubmenu2">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/home.php">Home 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <!-- We'll fill this with dummy content -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="top_nav">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-outline-success btn-sm">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="btn btn-outline-success d-inline-block d-lg-none ml-auto btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content Area Div -->

           <div id="main_area">
             
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/bootstrap-select/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="assets/js/core/layout.js"></script>

</body>

</html>