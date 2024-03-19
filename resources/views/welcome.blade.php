<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Systeme D information du Congo</title>

  <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>SI du Congo</title>
            <meta content="" name="description">
            <meta content="" name="keywords">

            <!-- Favicons -->
            <link href="assets/img/favicon.png" rel="icon">
            <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

            <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="assets/vendor/aos/aos.css" rel="stylesheet">
            <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
            <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href="assets/css/main.css" rel="stylesheet">

            <!-- =======================================================
            * Template Name: UpConstruction
            * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
            * Updated: Mar 17 2024 with Bootstrap v5.3.3
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
          </head>

          <body>

            <!-- ======= Header ======= -->
            <header id="header" class="header d-flex align-items-center">
              <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

                <a href="index.html" class="logo d-flex align-items-center">
                  <!-- Uncomment the line below if you also wish to use an image logo -->
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <h1>Systeme d'Information<span></span></h1>
                </a>

                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
                <nav id="navbar" class="navbar">
                  <ul>
                    @if (Route::has('login'))
                    <nav class="-mx-3 flex flex-1 justify-end">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                              <button type="submit" class="btn btn-primary">
                                {{ __('Connexion') }}
                               </button>
                            </a>


                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Inscription') }}
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
                    <li><a href="index.html" class="active">Home</a></li>
                    <li><a href="about.html">A Propos</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Projets</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                        <li><a href="#">Details</a></li>
                        <li class="dropdown"><a href=""><span>Vision du chef de l'etat</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                          <ul>
                            <li><a href="#">informatique</a></li>
                            <li><a href="#">Deep Dropdown 2</a></li>
                            <li><a href="#">Deep Dropdown 3</a></li>
                            <li><a href="#">Deep Dropdown 4</a></li>
                            <li><a href="#">Deep Dropdown 5</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                      </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </nav><!-- .navbar -->

              </div>
            </header><!-- End Header -->

            <!-- ======= Hero Section ======= -->
            <section id="hero" class="hero">

              <div class="info d-flex align-items-center">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                      <h2 data-aos="fade-down">Bienvenue sur  <span>le Systeme d'information du Congo</span></h2>
                      <p data-aos="fade-up"></p>
                      <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Welcome</a>
                    </div>
                  </div>
                </div>
              </div>

              <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
                <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

              </div>

            </section><!-- End Hero Section -->

            <main id="main">

              <!-- ======= Get Started Section ======= -->
              <section id="get-started" class="get-started section-bg">
                <div class="container">

                  <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                      <div class="content">
                        <h3>Le SI du Congo.</h3>
                        <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.
                        <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                      </div>
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                      <form action="forms/quote.php" method="post" class="php-email-form">
                        <h3>Newsletter</h3>
                        <p>vous pouvez nous ecrire pour les suggestions </p>
                        <div class="row gy-3">

                          <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="Nom" required>
                          </div>

                          <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                          </div>

                          <div class="col-md-12">
                            <input type="text" class="form-control" name="phone" placeholder="Telephone" required>
                          </div>

                          <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                          </div>

                          <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre requete a été envoyé.Merci!</div>

                            <button type="submit">Envoyez</button>
                          </div>

                        </div>
                      </form>
                    </div><!-- End Quote Form -->

                  </div>

                </div>
              </section><!-- End Get Started Section -->

              <!-- ======= Constructions Section ======= -->
              <section id="constructions" class="constructions">
                <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Organigrame</h2>
                    <p></p>
                  </div>

                  <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="card-item">
                        <div class="row">
                          <div class="col-xl-5">
                            <div class="card-bg" style="background-image: url(assets/img/constructions-1.jpg);"></div>
                          </div>
                          <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                              <h4 class="card-title">Information sur l'obtention des permis.</h4>
                              <p>pour l obtention de vos permis de constructions vous pouvez nous contactez.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="card-item">
                        <div class="row">
                          <div class="col-xl-5">
                            <div class="card-bg" style="background-image: url(assets/img/constructions-2.jpg);"></div>
                          </div>
                          <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                              <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                              <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="card-item">
                        <div class="row">
                          <div class="col-xl-5">
                            <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                          </div>
                          <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                              <h4 class="card-title">Error beatae dolor inventore aut</h4>
                              <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="card-item">
                        <div class="row">
                          <div class="col-xl-5">
                            <div class="card-bg" style="background-image: url(assets/img/constructions-4.jpg);"></div>
                          </div>
                          <div class="col-xl-7 d-flex align-items-center">
                            <div class="card-body">
                              <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                              <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- End Card Item -->

                  </div>

                </div>
              </section><!-- End Constructions Section -->

              <!-- ======= Services Section ======= -->
              <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Nos Services</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
                  </div>

                  <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="service-item  position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-mountain-city"></i>
                        </div>
                        <h3>Nesciunt Mete</h3>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Eosle Commodi</h3>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-compass-drafting"></i>
                        </div>
                        <h3>Ledo Markt</h3>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-trowel-bricks"></i>
                        </div>
                        <h3>Asperiores Commodit</h3>
                        <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-helmet-safety"></i>
                        </div>
                        <h3>Velit Doloremque</h3>
                        <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                      <div class="service-item position-relative">
                        <div class="icon">
                          <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                        </div>
                        <h3>Dolori Architecto</h3>
                        <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                        <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                      </div>
                    </div><!-- End Service Item -->

                  </div>

                </div>
              </section><!-- End Services Section -->

              <!-- ======= Alt Services Section ======= -->
              <section id="alt-services" class="alt-services">
                <div class="container" data-aos="fade-up">

                  <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                      <h3>La Blibliotheque Numerique</h3>
                      <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi</p>

                      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                          <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>
                      </div><!-- End Icon Box -->

                      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                          <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                      </div><!-- End Icon Box -->

                      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                          <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                          <p>Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div>
                      </div><!-- End Icon Box -->

                      <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                          <h4><a href="" class="stretched-link">Tride clov</a></h4>
                          <p>Est voluptatem labore deleniti quis a delectus et. Saepe dolorem libero sit non aspernatur odit amet. Et eligendi</p>
                        </div>
                      </div><!-- End Icon Box -->

                    </div>
                  </div>

                </div>
              </section><!-- End Alt Services Section -->

              <!-- ======= Features Section ======= -->
              <section id="features" class="features section-bg">
                <div class="container" data-aos="fade-up">

                  <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                      <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Modeles</h4>
                      </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Entrepreneurs</h4>
                      </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Actionnaires</h4>
                      </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4>Service Client</h4>
                      </a>
                    </li><!-- End tab nav item -->

                  </ul>

                  <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                      <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                          <h3>Voluptatem dignissimos provident</h3>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                          </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                          <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                      <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3>Neque exercitationem debitis</h3>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                          </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                      <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3>Voluptatibus commodi accusamu</h3>
                          <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                          </ul>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                      <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                          <h3>Omnis fugiat ea explicabo sunt</h3>
                          <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                          </p>
                          <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                          </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                          <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
                        </div>
                      </div>
                    </div><!-- End tab content item -->

                  </div>

                </div>
              </section><!-- End Features Section -->

              <!-- ======= Our Projects Section ======= -->
              <section id="projects" class="projects">
                <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Nos Projets</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
                  </div>

                  <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-remodeling">Remodeling</li>
                      <li data-filter=".filter-construction">Construction</li>
                      <li data-filter=".filter-repairs">Repairs</li>
                      <li data-filter=".filter-design">Design</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                      <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Remodeling 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Construction 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Repairs 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Design 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Remodeling 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Construction 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Repairs 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Design 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Remodeling 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Construction 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Repairs 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                      <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                        <div class="portfolio-content h-100">
                          <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                          <div class="portfolio-info">
                            <h4>Design 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                          </div>
                        </div>
                      </div><!-- End Projects Item -->

                    </div><!-- End Projects Container -->

                  </div>

                </div>
              </section><!-- End Our Projects Section -->

              <!-- ======= Testimonials Section ======= -->
              <section id="testimonials" class="testimonials section-bg">
                <div class="container" data-aos="fade-up">

                  <div class="section-header">
                    <h2>Temoignage</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
                  </div>

                  <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                      <div class="swiper-slide">
                        <div class="testimonial-wrap">
                          <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                              <i class="bi bi-quote quote-icon-left"></i>
                              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                              <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                          </div>
                        </div>
                      </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                  </div>

                </div>
              </section><!-- End Testimonials Section -->

              <!-- ======= Recent Blog Posts Section ======= -->
              <section id="recent-blog-posts" class="recent-blog-posts">
                <div class="container" data-aos="fade-up"">



            <div class=" section-header">
                  <h2>Recent Blog Posts</h2>
                  <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
                </div>

                <div class="row gy-5">

                  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                        <span class="post-date">December 12</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
                          </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-item position-relative h-100">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
                          </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                  <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                      <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                      </div>

                      <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                        <div class="meta d-flex align-items-center">
                          <div class="d-flex align-items-center">
                            <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                          </div>
                          <span class="px-3 text-black-50">/</span>
                          <div class="d-flex align-items-center">
                            <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                          </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                      </div>

                    </div>
                  </div><!-- End post item -->

                </div>

                </div>
              </section>
              <!-- End Recent Blog Posts Section -->

            </main><!-- End #main -->

            <!-- ======= Footer ======= -->
            <footer id="footer" class="footer">

              <div class="footer-content position-relative">
                <div class="container">
                  <div class="row">

                    <div class="col-lg-4 col-md-6">
                      <div class="footer-info">
                        <h3>Systeme d'Information du Congo</h3>
                        <p>
                          12 rue du jardin <br>
                          Brazzaville,Congo<br><br>
                          <strong>Phone:</strong>+242069343152<br>
                          <strong>Email:</strong>jeanvalere@gmail.com<br>
                        </p>
                        <div class="social-links d-flex mt-3">
                          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                          <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                      </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                      <h4>Nos Services</h4>
                      <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Permis de Construction</a></li>

                      </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                      <h4>Hic solutasetp</h4>
                      <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                      </ul>
                    </div><!-- End footer links column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                      <h4>Nobis illum</h4>
                      <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                      </ul>
                    </div><!-- End footer links column-->

                  </div>
                </div>
              </div>

              <div class="footer-legal text-center position-relative">
                <div class="container">
                  <div class="copyright">
                    &copy; Copyright <strong><span>Systeme d'Information</span></strong>. All Rights Reserved
                  </div>
                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">Jernhice le Developpeur</a>
                  </div>
                </div>
              </div>

            </footer>
            <!-- End Footer -->

            <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

            <div id="preloader"></div>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

          </body>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <body class="font-sans antialiased dark:bg-black dark:text-white/50">
            <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">

                <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                    <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                            <div class="flex lg:justify-center lg:col-start-2">

                            </div>

                        </header>




                    </div>
                </div>
            </div>
        </body>



        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>

</html>
