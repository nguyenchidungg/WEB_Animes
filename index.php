<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Anime Website">
    <meta name="keywords" content="Anime, Onime">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Onime</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/reponsive.css">
    
  </head>
  <body>
    <!-- Page Preloader -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

  
    <!-- Header Begin -->
    <header>
      <div class="container">     
      <div class="header">
        <nav class="navbar navbar-expand-lg  header__nav ">
            <button class="navbar-toggler navbar__button" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="./assets/images/feather_menu.png" alt="">
            </button>

            <a class="navbar-brand mr-auto" href="index.php">
              <img src="./assets/images/Logo.svg" alt="logo">
            </a>
            <ul class="navbar-nav navbar__icon-collapse ml-auto navbar__icon-collapse1" >
                <li class="nav-item header__navbar-icon header__navbar-icon-search">
                  <div class="nav-link"  id="icon__search__">
                    <img src="./assets/images/icons/icon-search.png" alt="search icon " class="navbar__search-img">
                  </div>
                    
                    <div class="navbar__search" id="navbar__search-modal">
                        <div >
                            <button  class="navbar__close-button">
                                <img src="./assets/images/icons/Button-Close.png" alt="close icon" class="navbar__search-closeIcon"> 
                            </button>
                        </div>
                       
                        <div>
                            <input type="text" placeholder="Search Here..."  class="navbar__search-input">
                        </div>
                        
                    </div>
                </li>
    
                <li class="nav-item header__navbar-icon header__navbar-icon-user">
                    <a class="nav-link" href="#">
                        <img src="./assets/images/icons/icon-user.png" alt="user icon" class="navbar__login-img">
                    </a>
                    <?php   
                        if(isset($_SESSION["user"])){
                          echo '<div class="navbar__user navbar__user-signIn profile_user">
                          <img src="./assets/images/Polygon 1.png" alt="" class="user__boder-icon">
                          <img src="./assets/images/comment-1 2.png" alt="" class="navbar__user-icon">
                          <a href="" class="nav-link">';
                            echo '<h1 class="user__name">'; echo $_SESSION["user"]; echo '</h1>';
                            echo ' <h3 class="user__profile">See your profile</h3>
                          </a>
                          <ul class="user__list">
                              <li class="nav-item">
                                  <a href="" class="nav-link user__log">
                                      <img src="./assets/images/Icon - Following Animes.png" alt="">
                                      Following Animes
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="" class="nav-link user__log">
                                      <img src="./assets/images/Icon - Change Password.png" alt="">
                                      Change Password
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="sign-out.php" class="nav-link user__log">
                                      <img src="./assets/images/Icon - Log Out.png" alt="">
                                      Sign Out
                                  </a>
                              </li>
                          </ul>
                      </div>';
                        }else{
                          echo '<div class="navbar__user navbar__user-noSignIn profile_user" >
                          <img src="./assets/images/icons/Polygon1.png" alt="" class="user__boder-icon">
                          <img src="./assets/images/carbon_user-avatar-filled.png" alt="" class="navbar__user-icon">
                          <a href="" class="nav-link">
                              <h1 class="user__name">Unknow</h1>
                              <h3 class="user__profile">Unknow profile</h3>
                          </a>
                          <ul class="user__list">
                              <li class="nav-item d-block">
                                  <a href="sign-in.php" class="nav-link user__log">
                                      <img src="./assets/images/Icon - Change Password.png" alt="">
                                      Sign In
                                  </a>
                              </li>
                              <li class="nav-item d-block">
                                  <a href="sign-up.php" class="nav-link user__log">
                                      <img src="./assets/images/Icon - Sign up.png" alt="">
                                      Sign Up
                                  </a>
                              </li>
                          </ul>
                        </div>';
                        }
                      ?>
                </li>
            </ul>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav navbar__menu">
                    <li class="nav-item header__navbar-item ">
                        <a class="nav-link header__navbar-item-link  active" href="index.php" id="HomePage">
                          HomePage
                        </a>
                    </li>
                    <li class="nav-item dropdown header__navbar-item ">
                        <a class="nav-link dropdown-toggle header__menu-item-link header__navbar-item-link Categories " href="categories.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Categories
                        </a>
                        
                        <div class="dropdown-menu dropdown__menu" aria-labelledby="navbarDropdown">  
                            <div class="navbar__category" >
                                <ul class="dropdown__list">
                                    <img src="./assets/images/icons/Polygon1.png" alt="" class="dropdown__icon">
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Action</a> 
                                    </li>
                                    <li  class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Dementia</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Ecchi</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Hentai</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Magic</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Music</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Romance</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Seinen</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Shounen</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Suspense</a>
                                    </li>
                                </ul>
                                <ul class="dropdown__list">
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php"> Adventure</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Demons</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Fantasy</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Histirical</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Matial Arts</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Mystery</a>
                                    </li>
                                    <li class="nav-item header__menu-item">   
                                        <a class="nav-link header__menu-item-link" href="categories.php">School</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Shoujo</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Slice of life</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Thriller</a>
                                    </li>
                                </ul>
                                <ul class="dropdown__list">
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="" >Comedy</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Drama</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Harem</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Hornor</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Mecha</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Psycological</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Sci-fi</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Shoujo Ai</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Supermatural</a>
                                    </li>
                                    <li class="nav-item header__menu-item">
                                        <a class="nav-link header__menu-item-link" href="categories.php">Vampire</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </li>
                        
                    </li>
                    <li class="nav-item header__navbar-item">
                        <a class="nav-link header__navbar-item-link" href="anime-news.php"id="Trending" >News</a>
                    </li>
                    <li class="nav-item header__navbar-item">
                        <a class="nav-link header__navbar-item-link" href="contact-us.php">Contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar__icon-collapse ml-auto  navbar__collapse" >
                    <li class="nav-item header__navbar-icon header__navbar-icon-search">
                        <div class="nav-link" id="icon__search__">
                            <img src="./assets/images/icons/icon-search.png" alt="search icon " class="navbar__search-img">
                        </div>
                        <div class="navbar__search"  id="navbar__search-modal">
                            <div >
                                <button  class="navbar__close-button">
                                    <img src="./assets/images/icons/Button-Close.png" alt="close icon" class="navbar__search-closeIcon"> 
                                </button>
                            </div>
                           
                            <div>
                                <input type="text" placeholder="Search Here..."  class="navbar__search-input">
                            </div>
                            
                        </div>
                    </li>
        
                    <li class="nav-item header__navbar-icon header__navbar-icon-user">
                        <a class="nav-link" href="#">
                            <img src="./assets/images/icons/icon-user.png" alt="user icon" class="navbar__login-img">
                        </a>
                        <?php   
                          if(isset($_SESSION["user"])){
                            echo '<div class="navbar__user navbar__user-signIn profile_user">
                            <img src="./assets/images/Polygon 1.png" alt="" class="user__boder-icon">
                            <img src="./assets/images/comment-1 2.png" alt="" class="navbar__user-icon">
                            <a href="" class="nav-link">';
                              echo '<h1 class="user__name">'; echo $_SESSION["user"]; echo '</h1>';
                              echo ' <h3 class="user__profile">See your profile</h3>
                            </a>
                            <ul class="user__list">
                                <li class="nav-item">
                                    <a href="" class="nav-link user__log">
                                        <img src="./assets/images/Icon - Following Animes.png" alt="">
                                        Following Animes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link user__log">
                                        <img src="./assets/images/Icon - Change Password.png" alt="">
                                        Change Password
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="sign-out.php" class="nav-link user__log">
                                        <img src="./assets/images/Icon - Log Out.png" alt="">
                                        Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>';
                          }else{
                            echo '<div class="navbar__user navbar__user-noSignIn profile_user" >
                            <img src="./assets/images/icons/Polygon1.png" alt="" class="user__boder-icon">
                            <img src="./assets/images/carbon_user-avatar-filled.png" alt="" class="navbar__user-icon">
                            <a href="" class="nav-link">
                                <h1 class="user__name">Unknow</h1>
                                <h3 class="user__profile">Unknow profile</h3>
                            </a>
                            <ul class="user__list">
                                <li class="nav-item d-block">
                                    <a href="sign-in.php" class="nav-link user__log">
                                        <img src="./assets/images/Icon - Change Password.png" alt="">
                                        Sign In
                                    </a>
                                </li>
                                <li class="nav-item d-block">
                                    <a href="sign-up.php" class="nav-link user__log">
                                        <img src="./assets/images/Icon - Sign up.png" alt="">
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                          </div>';
                          }
                      ?>
                    </li>
                </ul>
            </div>
            
        </nav>
      </div>
    </div>
    </header>
    <!-- Header End -->

    <div class="container">

    <!-- Carousel Begin -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./assets/images/carousel/KnY_Wall2.jpg" alt="First slide">
          <div class="carousel-caption">
            <h1>Kimetsu no Yaiba: Mugen Ressha-hen</h1>
            <p>After his family was brutally murdered and his sister...</p>
            <div class="btn-group">
              <a class="btn btn-watchnow" href="anime-watching.php">WATCH NOW</a>
              <a class="btn btn-side" href="anime-watching.php">
                <img src="./assets/images/icon-angle-left.svg" alt="icon-angle-left" style="width: 4px; height: 12px;">
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./assets/images/carousel/hero-1.jpg" alt="Second slide">
          <div class="carousel-caption">
            <h1>Fate / Stay Night: Unlimited Blade Works</h1>
            <p>After 30 days of travel across the world...</p>
            <div class="btn-group">
              <a class="btn btn-watchnow" href="anime-watching.php">WATCH NOW</a>
              <a class="btn btn-side" href="anime-watching.php">
                <img src="./assets/images/icon-angle-left.svg" alt="icon-angle-left" style="width: 4px; height: 12px;">
              </a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./assets/images/carousel/KnY.jpg" alt="Third slide">
          <div class="carousel-caption">
            <h1>Demon Slayer: Kimetsu no Yaiba</h1>
            <p>Ever since the death of his father, the burden...</p>
            <div class="btn-group">
              <a class="btn btn-watchnow" href="anime-watching.php">WATCH NOW</a>
              <a class="btn btn-side" href="anime-watching.php">
                <img src="./assets/images/icon-angle-left.svg" alt="icon-angle-left" style="width: 4px; height: 12px;">
              </a>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <img src="./assets/images/carousel/icon-angle-left.svg" aria-hidden="true">
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <img src="./assets/images/carousel/icon-angle-right.svg" aria-hidden="true">
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel End-->

    <main class="row">
      <!-- Main Article Begin -->
      <article class="col-lg-8">
        <section class="post top-trending">
          <div class="row">
            <div class="col-12 post__tittle">
              <h2 class="post__tittle-categories">Top trending</h2>
              <a href="categories.php" class="post__tittle-viewall">View all</a>
            </div> 
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
                  <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-5.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
                  <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-3.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-4.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-1.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-2.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/top_trending/trend-6.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="post latest-updates">
          <div class="row">
            <div class="col-12 post__tittle">
              <h2 class="post__tittle-categories">LATEST UPDATES</h2>
              <a href="categories.php" class="post__tittle-viewall">View all</a>
            </div> 
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-1.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-2.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-3.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-4.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-5.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/latest_update/recent-6.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="post recommendations">
          <div class="row">
            <div class="col-12 post__tittle">
              <h2 class="post__tittle-categories">RECOMMENDATIONS</h2>
              <a href="categories.php" class="post__tittle-viewall">View all</a>
            </div> 
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-1.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-2.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-3.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-4.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-5.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/recommendations/popular-6.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="post live-action">
          <div class="row">
            <div class="col-12 post__tittle">
              <h2 class="post__tittle-categories">LIVE ACTION</h2>
              <a href="categories.php" class="post__tittle-viewall">View all</a>
            </div> 
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-1.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-2.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-3.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-4.jpg" alt="trending-anime">
                  <div class="ep">18 / 18</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-5.jpg" alt="trending-anime">
                  <div class="ep">12 / 12</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="post__item">
                <div class="post__item-thumnail">
									<a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
                  <img src="./assets/images/live_action/live-6.jpg" alt="trending-anime">
                  <div class="ep">24 / 24</div>
                  <div class="comment"><i class="fa fa-comments"></i> 11</div>
                  <div class="view"><i class="fa fa-eye"></i> 9141</div>
                </div>
                <div class="post__item-tag">
                  <ul>
                    <li>Active</li>
                    <li>Movie</li>
                  </ul>
                  <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                </div>
              </div>
            </div>
          </div>
        </section>
      </article>
      <!-- Main Article End -->


      <!-- Sidebar Begin -->
      <aside class="col-lg-4 col-md-6 col-sm-8 sidebar">
        <section class="sidebar__topview">
          <div class="row">
            <div class="col-12 sidebar__tittle">
              <h2 class="sidebar__tittle-categories">TOP VIEWS</h2>
              <ul class="sidebar__tittle-filter">
                <li class="active" data-filter=".day">Day</li>
                <li data-filter=".week">Week</li>
                <li data-filter=".month">Month</li>
                <li data-filter=".years">Years</li>
              </ul>
            </div> 
          </div>
          <div class="sidebar__tittle-filter-gallery">
            <div class="sidebar__topview__item day year">
              <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
              <img src="./assets/images/sidebar/tv-1.jpg" alt="sidebar-anime">
              <div class="ep">18 / ?</div>
              <div class="view"><i class="fa fa-eye"></i> 9141</div>
              <h5><a href="#">Boruto: Naruto next generations</a></h5>
            </div>
            <div class="sidebar__topview__item month week">
              <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
              <img src="./assets/images/sidebar/tv-2.jpg" alt="sidebar-anime">
              <div class="ep">18 / ?</div>
              <div class="view"><i class="fa fa-eye"></i> 9141</div>
              <h5><a href="#">Boruto: Naruto next generations</a></h5>
            </div>
            <div class="sidebar__topview__item week month years">
              <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
              <img src="./assets/images/sidebar/tv-3.jpg" alt="sidebar-anime">
              <div class="ep">18 / ?</div>
              <div class="view"><i class="fa fa-eye"></i> 9141</div>
              <h5><a href="#">Boruto: Naruto next generations</a></h5>
            </div>
            <div class="sidebar__topview__item years month">
              <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
              <img src="./assets/images/sidebar/tv-4.jpg" alt="sidebar-anime">
              <div class="ep">18 / ?</div>
              <div class="view"><i class="fa fa-eye"></i> 9141</div>
              <h5><a href="#">Boruto: Naruto next generations</a></h5>
            </div>
            <div class="sidebar__topview__item day">
              <a href="anime-detail.php" class="overlay"><i class="far fa-play-circle"></i></a>
              <img src="./assets/images/sidebar/tv-5.jpg" alt="sidebar-anime">
              <div class="ep">18 / ?</div>
              <div class="view"><i class="fa fa-eye"></i> 9141</div>
              <h5><a href="#">Boruto: Naruto next generations</a></h5>
            </div>
          </div>

        </section>

        <section class="sidebar__topupcomming">
          <div class="row">
            <div class="col-12 sidebar__tittle">
              <h2 class="sidebar__tittle-categories">TOP UPCOMMING</h2>
            </div> 
          </div>
          
          <div class="sidebar__topupcomming__item">
            <img src="./assets/images/sidebar/comment-2.jpg" alt="">
            <div class="description">
              <ul class="tag">
                  <li>Active</li>
                  <li>Movie</li>
              </ul>
              <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
              <span class="view"><i class="fa fa-eye"></i> 23.456 Viewes</span>
            </div>
          </div>

          <div class="sidebar__topupcomming__item">
            <img src="./assets/images/sidebar/comment-1.jpg" alt="">
            <div class="description">
              <ul class="tag">
                  <li>Active</li>
                  <li>Movie</li>
              </ul>
              <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
              <span class="view"><i class="fa fa-eye"></i> 23.456 Viewes</span>
            </div>
          </div>

          <div class="sidebar__topupcomming__item">
            <img src="./assets/images/sidebar/comment-3.jpg" alt="">
            <div class="description">
              <ul class="tag">
                  <li>Active</li>
                  <li>Movie</li>
              </ul>
              <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
              <span class="view"><i class="fa fa-eye"></i> 23.456 Viewes</span>
            </div>
          </div>

          <div class="sidebar__topupcomming__item">
            <img src="./assets/images/sidebar/comment-4.jpg" alt="">
            <div class="description">
              <ul class="tag">
                  <li>Active</li>
                  <li>Movie</li>
              </ul>
              <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
              <span class="view"><i class="fa fa-eye"></i> 23.456 Viewes</span>
            </div>
          </div>

        </section>
      </aside>
      <!-- Sidebar End -->
    </main>
  </div>

    <!-- Footer begin -->
    <footer>
      <div class="container">
        <button id="scrollToTop">
          <img src="./assets/images/arrow-up.png" alt="">
        </button>
        <div class="row">
          <div class="col-lg-4 col-md-6 copyright">
            <a href="index.php"><img src="./assets/images/Logo.svg" alt="Logo"></a>  
            <p>Copyright Onime &copy;<script>document.write(new Date().getFullYear());</script> | All rights reserved</p>
            <p>Disclaimer: This site Onime does not store any files on its server. All contents are provided by non-affiliated third parties.</p>
          </div>
          <div class="col-lg-2 col-md-6 navigation">
            <h5>NAVIGATION</h5>
            <ul class="links">
              <li><a href="index.php">Homepage</a></li>
              <li><a href="categories.php">Categories</a></li>
              <li><a href="anime-news.php">News</a></li>
              <li><a href="contact-us.php">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 contact">
            <h5>CONTACT US</h5>
            <ul class="links">
              <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i>Facebook</a></li>
              <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>Instagram</a></li>
              <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i>Twitter</a></li>
              <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 feedback">
            <p><span class="strong">Any problem?</span> We'd love to help. Type your message below and we'll get right back to you...</p>
            <form action="response_mess.php" method="POST">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your message..."name="response_mess" require></textarea>
                <button type="submit" name="submit" class="btn">Send<i class="fas fa-paper-plane"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
  </footer>
    <!-- Footer End -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!--script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script src="./assets/js/main.js"></script>
  </body>
</html>