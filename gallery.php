<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Gallery | Hosteller</title>
        <script id="www-widgetapi-script" src="https://s.ytimg.com/yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
        <script src="https://www.youtube.com/player_api"></script>
        <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

        <link rel="stylesheet" href="css/gallery.min.css" />
    </head>
    <body>
      <?php include_once('include/header.php') ?>
        <header class="page">
            <div class="container">
                <ul class="breadcrumbs d-flex flex-wrap align-content-center">
                    <li class="list-item">
                        <a class="link" href="index.html">Home</a>
                    </li>

                    <li class="list-item">
                        <a class="link" href="#">Photo Gallery of Our Hostel</a>
                    </li>
                </ul>
                <h1 class="page_title">Gallery</h1>
            </div>
        </header>
        <main>
            <!-- gallery content start -->
            <div class="gallery section">
                <div class="container">
                    <ul class="gallery_filters d-flex flex-wrap align-items-baseline">
                        <li class="list-item">
                            <a data-target="all" class="gallery_filters-filter underlined underlined--accent active" href="#">All</a>
                        </li>
                        <li class="list-item">
                            <a data-target="apartment" class="gallery_filters-filter underlined underlined--accent" href="#">Apartment</a>
                        </li>
                        <li class="list-item">
                            <a data-target="standard" class="gallery_filters-filter underlined underlined--accent" href="#"
                                >Standard Room</a
                            >
                        </li>
                        <li class="list-item">
                            <a data-target="kitchen" class="gallery_filters-filter underlined underlined--accent" href="#">Kitchen</a>
                        </li>
                        <li class="list-item">
                            <a data-target="living" class="gallery_filters-filter underlined underlined--accent" href="#">Living Room</a>
                        </li>
                    </ul>
                    <div class="gallery_masonry row g-0">
                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["apartment"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture style="width:400px; height:500px; display:block;">
                                        <source data-srcset="img/room.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                          
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["standard", "apartment"]'>
                            <a
                                class="aspect aspect--sm"
                                href="img/placeholder.jpg"
                                data-caption="Image caption"
                                data-role="gallery-link"
                            >
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room2.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["living"]'>
                            <a class="aspect" href="img/download15.jfif" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room4.webp"  />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["standard", "apartment"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/housing.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                       <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["standard", "apartment"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/libary.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["kitchen", "apartment"]'>
                            <a
                                class="aspect aspect--sm"
                                href="img/placeholder.jpg"
                                data-caption="Image caption"
                                data-role="gallery-link"
                            >
                                <div class="aspect__inner">
                                 <picture style="width:400px; height:400px; display:block;">
                                        <source data-srcset="img/room5.webp"/>
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["standard", "apartment"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room6.webp"/>
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["living", "apartment"]'>
                            <a
                                class="aspect aspect--sm"
                                href="img/placeholder.jpg"
                                data-caption="Image caption"
                                data-role="gallery-link"
                            >
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room7.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["standard", "apartment"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room8.webp"/>
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["kitchen"]'>
                            <a class="aspect" href="img/placeholder.jpg" data-caption="Image caption" data-role="gallery-link">
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room9.webp" />
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                        <figure class="gallery_masonry-item col-sm-6 col-lg-4" data-groups='["kitchen", "living"]'>
                            <a
                                class="aspect aspect--sm"
                                href="img/placeholder.jpg"
                                data-caption="Image caption"
                                data-role="gallery-link"
                            >
                                <div class="aspect__inner">
                                    <picture>
                                        <source data-srcset="img/room10.webp"/>
                                        <img
                                            class="gallery_masonry-item_img lazy"
                                           
                                            alt="media"
                                        />
                                    </picture>
                                </div>
                                <div class="overlay d-flex align-items-center justify-content-center">
                                    <div class="overlay_focus">
                                        <svg width="105" height="106" viewBox="0 0 105 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M103.514 28.944C102.693 28.944 102.028 28.2795 102.028 27.4598V3.712H78.2507C77.43 3.712 76.7646 3.04749 76.7646 2.22777C76.7646 1.40805 77.43 0.74353 78.2507 0.74353H103.514C104.335 0.74353 105 1.40805 105 2.22777V27.4598C105 28.2795 104.335 28.944 103.514 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M26.7492 105.614H1.48607C0.665335 105.614 0 104.95 0 104.13V78.8978C0 78.0781 0.665335 77.4136 1.48607 77.4136C2.3068 77.4136 2.97214 78.0781 2.97214 78.8978V102.646H26.7492C27.57 102.646 28.2353 103.31 28.2353 104.13C28.2353 104.95 27.57 105.614 26.7492 105.614Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M1.48607 28.944C0.665335 28.944 0 28.2795 0 27.4598V2.22777C0 1.40805 0.665335 0.74353 1.48607 0.74353H26.7492C27.57 0.74353 28.2353 1.40805 28.2353 2.22777C28.2353 3.04749 27.57 3.712 26.7492 3.712H2.97214V27.4598C2.97214 28.2795 2.3068 28.944 1.48607 28.944Z"
                                                fill="currentColor"
                                            />
                                            <path
                                                d="M103.514 105.614H78.2507C77.43 105.614 76.7646 104.95 76.7646 104.13C76.7646 103.31 77.43 102.646 78.2507 102.646H102.028V78.8978C102.028 78.0781 102.693 77.4136 103.514 77.4136C104.335 77.4136 105 78.0781 105 78.8978V104.13C105 104.95 104.335 105.614 103.514 105.614Z"
                                                fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </figure>

                       
                    </div>
                
                </div>
            </div>
            <!-- gallery content end -->
        </main>
      <?php include_once('include/footer.php') ?>
        <script src="js/common.min.js"></script>
        <script src="js/gallery.min.js"></script>
    </body>
</html>
