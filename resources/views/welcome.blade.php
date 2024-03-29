<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HishU - Best movie collections</title>

  <!-- - favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- - custom css link -->
  <link rel="stylesheet" href="style.css">

  <!--  - google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">




  <!--  - #HEADER starts-->
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="./images/logo.svg" alt="HishaU logo">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">TIG</option>
            <option value="ar">AR</option>
            <option value="tu">SV</option>
          </select>
        </div>
       

 <!-- logged In or register button joint-->
 <button class="btn btn-primary" method="post" >   <a href="login"> Sign In </a> </button>

       
      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./images/logo.svg" alt="HishaU logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href=" #" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Movie</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Tv Show</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Web Series</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Pricing</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>

   <!--  - #HEADER ends-->


  <main>
    <article>

      <!-- - #HERO starts-->
      <section class="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">HishaU</p>

            <h1 class="h1 hero-title">
              Unlimited <strong>Movie</strong>, TVs Shows, & More.
            </h1>

            <div class="meta-wrapper">

              <div class="badge-wrapper">
                <div class="badge badge-fill">PG 18</div>

                <div class="badge badge-outline">HD</div>
              </div>

              <div class="ganre-wrapper">
                <a href="#">Romance,</a>

                <a href="#">Drama</a>
              </div>

              <div class="date-time">

                <div>
                  <ion-icon name="calendar-outline"></ion-icon>

                  <time datetime="2024">2022</time>
                </div>

                <div>
                  <ion-icon name="time-outline"></ion-icon>

                  <time datetime="PT128M">128 min</time>
                </div>

              </div>

            </div>

            <button class="btn btn-primary">
              <ion-icon name="play"></ion-icon>

              <span>Watch now</span>
            </button>

          </div>

        </div>
      </section>

       <!-- - #HERO ends-->

      <!-- - #UPCOMING starts-->
      <section class="upcoming">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle">Online Streaming</p>

              <h2 class="h2 section-title">Upcoming Movies</h2>
            </div>

            <ul class="filter-list">

              <li>
                <button class="filter-btn">Movies</button>
              </li>

              <li>
                <button class="filter-btn">TV Shows</button>
              </li>

              <li>
                <button class="filter-btn">Anime</button>
              </li>

            </ul>

          </div>

          <ul class="movies-list  has-scrollbar">

            <li>
              <div class="movie-card">

                <a href="login">
                  <figure class="card-banner">
                    <img src="./images/upcoming-1.png" alt="The Witcher">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">The Witcher</h3>
                  </a>

                  <time datetime="2024">2019</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M">serie S1E1</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.1</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/upcoming-2.png"
                      alt="The Creator">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">The Creator</h3>
                  </a>

                  <time datetime="2024">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT126M">134 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>7.1</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/upcoming-3.png" alt="Welcome to the Jungle">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Welcome to the Jungle</h3>
                  </a>

                  <time datetime="2024">2013</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="">N/A</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>5.1</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/upcoming-4.png"
                      alt="Air Force One ">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Air Force One Is Down</h3>
                  </a>

                  <time datetime="2024">2013</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT107M">93 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>5.1</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- - #UPCOMING ends-->

      <!--  - #SERVICE starts-->
      <section class="service">
        <div class="container">

          <div class="service-banner">
            <figure>
              <img src="./images/service-banner.jpg" alt="HD 4k resolution! only $3.99">
            </figure>

            <a href="./images/service-banner.jpg" width="10px" height="25px" download class="service-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>
          </div>

          <div class="service-content">

            <p class="service-subtitle">Our Services</p>

            <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

            <p class="service-text">
              Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of
              passages of lorem
              Ipsum available, but the majority have suffered alteration in some injected humour.
            </p>

            <ul class="service-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="tv"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="videocam"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Watch Everywhere.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>

       <!--  - #SERVICE ends-->


      <!--  - #TOP RATED starts-->
      <section class="top-rated">
        <div class="container">

          <p class="section-subtitle">Online Streaming</p>

          <h2 class="h2 section-title">Top Rated Movies</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn">Movies</button>
            </li>

            <li>
              <button class="filter-btn">TV Shows</button>
            </li>

            <li>
              <button class="filter-btn">Documentary</button>
            </li>

            <li>
              <button class="filter-btn">Sports</button>
            </li>

          </ul>

          <ul class="movies-list">

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-1.png" alt="Sonic the Hedgehog 2 movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Sonic the Hedgehog 2</h3>
                  </a>

                  <time datetime="2024">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT122M">122 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>7.8</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="login ">
                  <figure class="card-banner">
                    <img src="./images/movie-2.png" alt="American Fiction">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="login ">
                    <h3 class="card-title">Morbius</h3>
                  </a>

                  <time datetime="2024">2022</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT104M">104 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>5.9</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-3.png" alt="Anyone but You">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Anyone But You</h3>
                  </a>

                  <time datetime="2024">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT106M">104 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>7.0</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="login ">
                  <figure class="card-banner">
                    <img src="./images/movie-4.png" alt="Aqua man">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Aquaman and The Lost Kingdom</h3>
                  </a>

                  <time datetime="2024">2024</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT115M">124 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>6.9</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-5.png" alt="Boudica Queen Of War">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Boudica Queen Of War</h3>
                  </a>

                  <time datetime="2024">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT176M">101 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>5.9</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-6.png" alt="Ballerina">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Ballerina</h3>
                  </a>

                  <time datetime="2024">2023</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT116M">93 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>7.0</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-7.png" alt="Mom">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Mom</h3>
                  </a>

                  <time datetime="2024">2013</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT127M">00.. min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>7.1</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/movie-8.png" alt="Outlander">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">The Outlander</h3>
                  </a>

                  <time datetime="2024">2014</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">HD</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT131M">00.. min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.0</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

       <!--  - #TOP RATED starts-->


      <!--  - #TV SERIES starts-->
      <section class="tv-series">
        <div class="container">

          <p class="section-subtitle">Best TV Series</p>

          <h2 class="h2 section-title">World Best TV Series</h2>

          <ul class="movies-list">

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/series-1.png" alt="Suits">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">Suits</h3>
                  </a>

                  <time datetime="2024">2011</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT47M">00.. min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.2</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href="login ">
                  <figure class="card-banner">
                    <img src="./images/series-2.png" alt="BlackList">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">BlackList</h3>
                  </a>

                  <time datetime="2024">2013</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT59M">00.. min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>6.4</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/series-3.png" alt="Game Of Thrones">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">GAME OF THRONES</h3>
                  </a>

                  <time datetime="2024">2011</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">2K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT51M">00.. min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.4</data>
                  </div>
                </div>

              </div>
            </li>

            <li>
              <div class="movie-card">

                <a href=" login">
                  <figure class="card-banner">
                    <img src="./images/series-4.png" alt="F.R.I.E.N.D.S">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href=" login">
                    <h3 class="card-title">F.R.I.E.N.D.S</h3>
                  </a>

                  <time datetime="2024">1994</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">4K</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT70M">70 min</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>8.2</data>
                  </div>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

      <!--  - #TV SERIES starts-->


      <!-- - #CTA starts-->
      <section class="cta">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">Trial start you first month free.</h2>

            <p class="cta-text">
              Enter your email to create or restart your membership.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

        </div>
      </section>

       <!-- - #CTA ends-->

    </article>
  </main>

 

  <!--  - #FOOTER starts-->
  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="#" class="logo">
            <img src="./images/logo.svg" alt="HishaU logo">
          </a>

          <ul class="footer-list">

            <li>
              <a href="#" class="footer-link">Home</a>
            </li>

            <li>
              <a href="#" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="#" class="footer-link">TV Show</a>
            </li>

            <li>
              <a href="#" class="footer-link">Web Series</a>
            </li>

            <li>
              <a href="#" class="footer-link">Pricing</a>
            </li>

          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          All Rights Reserved &copy; 2024 <a href="#">Chasacademy U0-5 By WilliamBG</a>. 
        </p>

        <img src="./images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>

   <!--  - #FOOTER ends-->

  <!-- - #GO TO TOP -->
  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>

  <!--   - custom js link -->
  <script src="mScript.js"></script>

  <!-- - ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>