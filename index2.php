<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">

</head>

<body>

    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Bootstrap Sidebar</h4>
            </div>
            <ul class="list-unstyled components">
                <p>Dummy Heading</p>
                <li class="active nav-item">
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">Home</a>
                    <ul class="flex-column collapse list-unstyled" id="homeSubmenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home 1</a>
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
                <li class="nav-item">
                    <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page 2</a>
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

       
    </div>

    <!-- <script
  src="https://code.jquery.com/jquery-3.7.1.slim.js"
  integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc="
  crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // $(document).ready(function () {
        //     $('#sidebarCollapse').on('click', function () {
        //         $('#sidebar').toggleClass('active');
        //     });
        // });
    </script>

</body>

</html>