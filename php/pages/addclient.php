<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapping System</title>

    <link rel="icon" type="image/x-icon" href="../../assets/imgs/icons/book16x.ico">


    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- CSS -->
    <link href="../../css/main.css" rel="stylesheet">

</head>

<body class="bg-dark">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="homeIcon" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
            <path fill-rule="evenodd"
                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
        </symbol>
        <symbol id="mapIcon" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
        </symbol>
        <symbol id="dbIcon" viewBox="0 0 16 16">
            <path
                d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />
            <path
                d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />
            <path
                d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
        </symbol>
        <symbol id="userIcon" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="userAddIcon" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            <path fill-rule="evenodd"
                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </symbol>
    </svg>

    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh">
            <a href="#" class="d-flex align-items-center mb2 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="../../assets/imgs/icons/FullBook.png" class="bi pe-none me-2" width="40"
                    height="32"></img>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../../index.php" class="nav-link link-dark">
                        <svg class="bi pe-none me-2" width="16" height="16" fill="Black">
                            <use xlink:href="#homeIcon" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="./map.php" class="nav-link link-dark">
                        <svg class="bi pe-none me-2" width="16" height="16" fill="Black">
                            <use xlink:href="#mapIcon" />
                        </svg>
                        Map
                    </a>
                </li>
                <li>
                    <a href="./addclient.php" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16" fill="Black">
                            <use xlink:href="#userAddIcon" />
                        </svg>
                        Add Client
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link link-dark">
                        <svg class="bi pe-none me-2" width="16" height="16" fill="Black">
                            <use xlink:href="#dbIcon" />
                        </svg>
                        Database
                    </a>
                </li>
            </ul>
            <hr>
            <!-- TODO: Login System With Different Views for Guest/User/Admin -->
            <!-- CURRENT: Admin View -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi pe-none me-2" width="32" height="32" fill="Black">
                        <use xlink:href="#userIcon" />
                    </svg>
                    <strong>Administrator</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" style>
                    <li>
                        <a href="" class="dropdown-item">Settings</a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item">Profile</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a href="" class="dropdown-item">Sign-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>