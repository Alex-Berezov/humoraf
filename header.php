<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
<header>
  <!-- Head -->

    <row class="d-none d-sm-none d-md-block">
      <div class="site-header d-flex justify-content-around align-items-center">
        <div class="site-header_social-item">
          <a href="https://www.facebook.com/groups/humoraf/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/humor_af" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://vk.com/humoraf" target="_blank"><i class="fab fa-vk"></i></a>
          <a href="https://ok.ru/humoraf" target="_blank"><i class="fab fa-odnoklassniki"></i></a>
        </div>
        <div class="site-header_logo">
          <h1 class="logotype"><a href="<?php get_home_url(); ?>"><?php  bloginfo('name'); ?></a></h1>
          <span><?php  bloginfo('description'); ?></span>
        </div>
        <div class="site-header_inter-reg">
        <a href="http://localhost/humoraf/wp-login.php?action=login"><button type="button" class="btn btn-outline-info">Вход</button></a>
        <a href="http://localhost/humoraf/wp-login.php?action=register"><button type="button" class="btn btn-outline-primary">Регистрация</button></a>
        </div>
      </div>
    </row>
    <!-- Menu -->
    <div class="row d-block no-gutters">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark special-color-dark">

        <!-- Navbar brand -->
        <a class="navbar-brand d-block d-none d-sm-block d-md-none" href="#">Humor AF</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2"
                aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">

          <!-- Links -->
          <ul class="navbar-nav m-auto d-flex align-items-center">

            <!-- Картинки -->
            <li class="nav-item dropdown mega-dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Картинки
                <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                   aria-labelledby="navbarDropdownMenuLink2">
                <div class="row">
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Картинки с надписями</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Прикольные картинки</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-md-0 mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Смешные картинки</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-0">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Красивые картинки</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          <!-- Конец картинки -->

          <!-- Фото -->
            <li class="nav-item dropdown mega-dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Фото
                <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                   aria-labelledby="navbarDropdownMenuLink2">
                <div class="row">
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Фото приколы</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Смешные фотографии</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-md-0 mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Прикольын фото</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-0">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Красивые фото</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          <!-- Конец Фото -->

          <!-- Видео -->
            <li class="nav-item dropdown mega-dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Видео
                <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                   aria-labelledby="navbarDropdownMenuLink2">
                <div class="row">
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Видео приколы</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Ютуб видео приколы</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          <!-- Конец Видео -->

          <!-- Приколы -->
            <li class="nav-item dropdown mega-dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Приколы
                <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                   aria-labelledby="navbarDropdownMenuLink2">
                <div class="row">
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Смешные приколы</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Приколы про</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-md-0 mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Приколы с девушками</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-0">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Приколы дня</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          <!-- Конец Приколы -->

          <!-- Гифки -->
            <li class="nav-item dropdown mega-dropdown active">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">Гифки
                <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu mega-menu v-2 z-depth-1 special-color py-5 px-3"
                   aria-labelledby="navbarDropdownMenuLink2">
                <div class="row">
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">GIF</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-xl-3 sub-menu mb-xl-0 mb-4">
                    <h6 class="sub-title font-weight-bold white-text"><a href="#" class="font-weight-bold white-text">Скачать гифки</a></h6>
                    <ul class="list-unstyled">
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Последняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Предпоследняя запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                      <li>
                        <a class="menu-item pl-0" href="#">
                          <i class="fas fa-caret-right pl-1 pr-3"></i>Следующая запись в рубрике
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
          <!-- Конец Гифки -->

          <!-- Демотиваторы -->
            <li class="nav-item">
              <a class="nav-link" href="#">Демотиваторы</a>
            </li>
          <!-- Конец Демотиваторы -->

          <!-- Анекдоты -->
            <li class="nav-item">
              <a class="nav-link" href="#">Анекдоты</a>
            </li>
          <!-- Конец Анекдоты -->

          <!-- Links -->

          <!-- Search form -->
          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Search">
            </div>
          </form>

        </div>
        <!-- Collapsible content -->

      </nav>
      <!-- Navbar -->
    </div>

</header>