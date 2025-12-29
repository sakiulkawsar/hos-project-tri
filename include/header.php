<?php
// header.php — plug & play
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// get current file name (e.g. index.php, about.php)
$currentFile = basename($_SERVER['PHP_SELF']);

function navActive($fileName)
{
    global $currentFile;
    return ($currentFile === $fileName) ? 'active' : '';
}
?>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contacts | Hosteller</title>
    <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="https://www.youtube.com/player_api"></script>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

    <link rel="stylesheet" href="css/contacts.min.css" />
<header class="header d-flex align-items-center" data-page="home">
    <div class="container position-relative d-flex justify-content-between align-items-center">
        <a class="brand d-flex align-items-center" href="index.php">
            <span class="brand_logo theme-element">
                <!-- keep your original SVG here -->
                <svg id="brandHeader" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                        fill="currentColor" />
                </svg>
            </span>
            <span class="brand_name">Hosteller</span>
        </a>

        <div class="header_offcanvas offcanvas offcanvas-end" id="menuOffcanvas">
            <div class="header_offcanvas-header d-flex justify-content-between align-content-center">
                <a class="brand d-flex align-items-center" href="index.php">
                    <span class="brand_logo theme-element">
                        <!-- same SVG for offcanvas -->
                        <svg id="brandOffset" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M7.03198 3.80281V7.07652L3.86083 9.75137L0.689673 12.4263L0.667474 6.56503C0.655304 3.34138 0.663875 0.654206 0.686587 0.593579C0.71907 0.506918 1.4043 0.488223 3.87994 0.506219L7.03198 0.529106V3.80281ZM21.645 4.36419V5.88433L17.0383 9.76316C14.5046 11.8966 11.2263 14.6552 9.75318 15.8934L7.07484 18.145V20.3225V22.5H3.85988H0.64502L0.667303 18.768L0.689673 15.036L2.56785 13.4609C3.60088 12.5946 6.85989 9.85244 9.81009 7.36726L15.1741 2.84867L18.4096 2.8464L21.645 2.84413V4.36419ZM21.645 15.5549V22.5H18.431H15.217V18.2638V14.0274L15.4805 13.7882C15.8061 13.4924 21.5939 8.61606 21.6236 8.61248C21.6353 8.61099 21.645 11.7351 21.645 15.5549Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <span class="brand_name">Hosteller</span>
                </a>
                <button class="close" type="button" data-bs-dismiss="offcanvas">
                    <i class="icon-close--entypo"></i>
                </button>
            </div>

            <nav class="header_nav">
                <ul class="header_nav-list">
                    <li class="header_nav-list_item">
                        <a class="nav-item <?= navActive('index.php') ?>" href="index.php">Home</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item <?= navActive('about.php') ?>" href="about.php">About</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item <?= navActive('rooms.php') ?>" href="rooms.php">Rooms</a>
                    </li>
                
                    <li class="header_nav-list_item">
                        <a class="nav-item <?= navActive('gallery.php') ?>" href="gallery.php">Gallery</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item <?= navActive('contacts.php') ?>" href="contacts.php">Appointment</a>
                    </li>

                  
                  
                        <li class="header_nav-list_item">
                            <a class="nav-item" href="admin/index.php">Login</a>
                        </li>
                  

                </ul>
            </nav>

            <ul class="socials d-flex align-items-center">
                <li class="list-item">
                    <a class="link" href=""><i class="icon-facebook"></i></a>
                </li>
                <li class="list-item">
                    <a class="link" href=""><i class="icon-instagram"></i></a>
                </li>
                <li class="list-item">
                    <a class="link" href=""><i class="icon-twitter"></i></a>
                </li>
                <li class="list-item">
                    <a class="link" href=""><i class="icon-whatsapp"></i></a>
                </li>
            </ul>
        </div>

        <button class="header_trigger d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
            <i class="icon-stream"></i>
        </button>
    </div>
</header>

<!-- Minimal CSS to highlight active link (put this in your style.css instead if you prefer) -->
<style>
    .header_nav .nav-item.active {
        color: #007bff;
        font-weight: 600;
        border-bottom: 2px solid #007bff;
    }
</style>
<!-- <script src="js/common.min.js"></script> -->