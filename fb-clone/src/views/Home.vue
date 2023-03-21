<template>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Facebook</title>
      <link
        rel="shortcut icon"
        type="image/png"
        href="./images/Facebook_Logo_(2019).png" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

      <link rel="stylesheet" href="./css/custom.css" />
    </head>
    <body>
      <!-- HEADER -->
      <header class="header">
        <div class="header__nav-left">
          <img
            src="../assets/imgs/Facebook_Logo_(2019).png"
            alt=""
            class="header_nav_left-logo-img" />
          <div class="header__nav-left-search">
            <i
              class="header__nav-left-search-icon fa-solid fa-magnifying-glass"></i>
            <input
              type="text"
              placeholder="Tìm kiếm trên facebook"
              class="header__nav-left-search-input" />
          </div>

          <!-- max width -->
          <div class="header__nav-left-search-responsive">
            <i
              class="header__nav-left-search-icon fa-solid fa-magnifying-glass"></i>
          </div>
          <!--  -->
        </div>
        <div class="header__nav-main">
          <div
            class="header__nav-main-icon-wrap header__nav-main-icon-wrap-actived">
            <svg
              viewBox="0 0 28 28"
              class="x1lliihq x1k90msu x2h7rmj x1qfuztq x5e5rjt"
              fill="#2374e1"
              height="28"
              width="28">
              <path
                d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"></path>
            </svg>
          </div>
          <div class="header__nav-main-icon-wrap">
            <svg
              viewBox="0 0 28 28"
              class="header__nav-main-icon"
              fill="currentColor"
              height="30"
              width="30">
              <path
                d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path>
            </svg>
          </div>
          <div class="header__nav-main-icon-wrap">
            <svg
              viewBox="0 0 28 28"
              class="header__nav-main-icon"
              fill="currentColor"
              height="30"
              width="30">
              <path
                d="M17.5 23.75 21.75 23.75C22.164 23.75 22.5 23.414 22.5 23L22.5 14 22.531 14C22.364 13.917 22.206 13.815 22.061 13.694L21.66 13.359C21.567 13.283 21.433 13.283 21.34 13.36L21.176 13.497C20.591 13.983 19.855 14.25 19.095 14.25L18.869 14.25C18.114 14.25 17.382 13.987 16.8 13.506L16.616 13.354C16.523 13.278 16.39 13.278 16.298 13.354L16.113 13.507C15.53 13.987 14.798 14.25 14.044 14.25L13.907 14.25C13.162 14.25 12.439 13.994 11.861 13.525L11.645 13.35C11.552 13.275 11.419 13.276 11.328 13.352L11.155 13.497C10.57 13.984 9.834 14.25 9.074 14.25L8.896 14.25C8.143 14.25 7.414 13.989 6.832 13.511L6.638 13.351C6.545 13.275 6.413 13.275 6.32 13.351L5.849 13.739C5.726 13.84 5.592 13.928 5.452 14L5.5 14 5.5 23C5.5 23.414 5.836 23.75 6.25 23.75L10.5 23.75 10.5 17.5C10.5 16.81 11.06 16.25 11.75 16.25L16.25 16.25C16.94 16.25 17.5 16.81 17.5 17.5L17.5 23.75ZM3.673 8.75 24.327 8.75C24.3 8.66 24.271 8.571 24.238 8.483L23.087 5.355C22.823 4.688 22.178 4.25 21.461 4.25L6.54 4.25C5.822 4.25 5.177 4.688 4.919 5.338L3.762 8.483C3.729 8.571 3.7 8.66 3.673 8.75ZM24.5 10.25 3.5 10.25 3.5 12C3.5 12.414 3.836 12.75 4.25 12.75L4.421 12.75C4.595 12.75 4.763 12.69 4.897 12.58L5.368 12.193C6.013 11.662 6.945 11.662 7.59 12.193L7.784 12.352C8.097 12.609 8.49 12.75 8.896 12.75L9.074 12.75C9.483 12.75 9.88 12.607 10.194 12.345L10.368 12.2C11.01 11.665 11.941 11.659 12.589 12.185L12.805 12.359C13.117 12.612 13.506 12.75 13.907 12.75L14.044 12.75C14.45 12.75 14.844 12.608 15.158 12.35L15.343 12.197C15.989 11.663 16.924 11.663 17.571 12.197L17.755 12.35C18.068 12.608 18.462 12.75 18.869 12.75L19.095 12.75C19.504 12.75 19.901 12.606 20.216 12.344L20.38 12.208C21.028 11.666 21.972 11.666 22.62 12.207L23.022 12.542C23.183 12.676 23.387 12.75 23.598 12.75 24.097 12.75 24.5 12.347 24.5 11.85L24.5 10.25ZM24 14.217 24 23C24 24.243 22.993 25.25 21.75 25.25L6.25 25.25C5.007 25.25 4 24.243 4 23L4 14.236C2.875 14.112 2 13.158 2 12L2 9.951C2 9.272 2.12 8.6 2.354 7.964L3.518 4.802C4.01 3.563 5.207 2.75 6.54 2.75L21.461 2.75C22.793 2.75 23.99 3.563 24.488 4.819L25.646 7.964C25.88 8.6 26 9.272 26 9.951L26 11.85C26 13.039 25.135 14.026 24 14.217ZM16 23.75 16 17.75 12 17.75 12 23.75 16 23.75Z"></path>
            </svg>
          </div>
          <div class="header__nav-main-icon-wrap">
            <svg
              viewBox="0 0 28 28"
              class="header__nav-main-icon"
              fill="currentColor"
              height="30"
              width="30">
              <path
                d="M25.5 14C25.5 7.649 20.351 2.5 14 2.5 7.649 2.5 2.5 7.649 2.5 14 2.5 20.351 7.649 25.5 14 25.5 20.351 25.5 25.5 20.351 25.5 14ZM27 14C27 21.18 21.18 27 14 27 6.82 27 1 21.18 1 14 1 6.82 6.82 1 14 1 21.18 1 27 6.82 27 14ZM7.479 14 7.631 14C7.933 14 8.102 14.338 7.934 14.591 7.334 15.491 6.983 16.568 6.983 17.724L6.983 18.221C6.983 18.342 6.99 18.461 7.004 18.578 7.03 18.802 6.862 19 6.637 19L6.123 19C5.228 19 4.5 18.25 4.5 17.327 4.5 15.492 5.727 14 7.479 14ZM20.521 14C22.274 14 23.5 15.492 23.5 17.327 23.5 18.25 22.772 19 21.878 19L21.364 19C21.139 19 20.97 18.802 20.997 18.578 21.01 18.461 21.017 18.342 21.017 18.221L21.017 17.724C21.017 16.568 20.667 15.491 20.067 14.591 19.899 14.338 20.067 14 20.369 14L20.521 14ZM8.25 13C7.147 13 6.25 11.991 6.25 10.75 6.25 9.384 7.035 8.5 8.25 8.5 9.465 8.5 10.25 9.384 10.25 10.75 10.25 11.991 9.353 13 8.25 13ZM19.75 13C18.647 13 17.75 11.991 17.75 10.75 17.75 9.384 18.535 8.5 19.75 8.5 20.965 8.5 21.75 9.384 21.75 10.75 21.75 11.991 20.853 13 19.75 13ZM15.172 13.5C17.558 13.5 19.5 15.395 19.5 17.724L19.5 18.221C19.5 19.202 18.683 20 17.677 20L10.323 20C9.317 20 8.5 19.202 8.5 18.221L8.5 17.724C8.5 15.395 10.441 13.5 12.828 13.5L15.172 13.5ZM16.75 9C16.75 10.655 15.517 12 14 12 12.484 12 11.25 10.655 11.25 9 11.25 7.15 12.304 6 14 6 15.697 6 16.75 7.15 16.75 9Z"></path>
            </svg>
          </div>
          <div class="header__nav-main-icon-wrap">
            <span class="x1n2onr6"
              ><svg
                fill="currentColor"
                viewBox="0 0 24 24"
                width="30px"
                height="30px"
                class="header__nav-main-icon">
                <g fill-rule="evenodd" transform="translate(-444 -204)">
                  <g>
                    <path
                      fill-rule="nonzero"
                      d="M98.5 5.75v4a.75.75 0 1 0 1.5 0v-4a.75.75 0 1 0-1.5 0z"
                      transform="translate(351.5 208.5)"></path>
                    <path
                      fill-rule="nonzero"
                      d="M97.25 8.5h4a.75.75 0 1 0 0-1.5h-4a.75.75 0 1 0 0 1.5z"
                      transform="translate(351.5 208.5)"></path>
                    <path
                      fill-rule="nonzero"
                      d="M109.5 14.5h-10a7 7 0 0 1 0-14h10a7 7 0 0 1 0 14zm0-1.5a5.5 5.5 0 0 0 0-11h-10a5.5 5.5 0 0 0 0 11h10z"
                      transform="translate(351.5 208.5)"></path>
                    <path
                      d="M109 9.25a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0m3-3a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0"
                      transform="translate(351.5 208.5)"></path>
                  </g>
                </g></svg
              ><!--$--><span class="x10l6tqk x11f4b5y x1v4kod4"></span
              ><!--/$--></span
            >
          </div>
        </div>
        <div class="header__nav-right">
          <div class="header__nav-right-user">
            <img
              src="../assets/imgs/anh_dai_dien.jpg"
              alt=""
              class="header__nav-right-user-img" />
            <span class="header__nav-right-user-name">Quý</span>
          </div>
          <div class="header__nav-righ-btn-wrap">
            <span class="header__nav-right-icon"
              ><span class="header__nav-right-list-icon"
                ><div
                  aria-label="Menu"
                  class="x1i10hfl x6umtig x1b1mbwd xaqea5y xav7gou x1ypdohk xe8uvvx xdj266r x11i5rnm xat24cr x1mh8g0r x16tdsg8 x1hl2dhg xggy1nq x87ps6o x1lku1pv x1a2a7pz x6s0dn4 x14yjl9h xudhj91 x18nykt9 xww2gxu x972fbf xcfux6l x1qhh985 xm0m39n x9f619 x78zum5 xl56j7k xexx8yu x4uap5 x18d9i69 xkhd6sd x1n2onr6 x1vqgdyp x100vrsf x1qhmfi1"
                  role="button"
                  tabindex="0">
                  <svg
                    fill="currentColor"
                    viewBox="0 0 44 44"
                    width="1em"
                    height="1em"
                    class="x1lliihq x1k90msu x2h7rmj x1qfuztq x198g3q0 x1qx5ct2 xw4jnvo">
                    <circle cx="7" cy="7" r="6"></circle>
                    <circle cx="22" cy="7" r="6"></circle>
                    <circle cx="37" cy="7" r="6"></circle>
                    <circle cx="7" cy="22" r="6"></circle>
                    <circle cx="22" cy="22" r="6"></circle>
                    <circle cx="37" cy="22" r="6"></circle>
                    <circle cx="7" cy="37" r="6"></circle>
                    <circle cx="22" cy="37" r="6"></circle>
                    <circle cx="37" cy="37" r="6"></circle>
                  </svg>
                  <div
                    class="x1ey2m1c xds687c xg01cxk x47corl x10l6tqk x17qophe x13vifvy x1ebt8du x19991ni x1dhq9h x1wpzbip x14yjl9h xudhj91 x18nykt9 xww2gxu"
                    data-visualcompletion="ignore"></div></div></span
            ></span>
            <!-- <i class="header__nav-right-icon fa-solid fa-list"></i> -->
            <div class="header__nav-right-icon--notification">
              <i
                class="header__nav-right-icon fa-brands fa-facebook-messenger"></i>
            </div>
            <i class="header__nav-right-icon fa-sharp fa-solid fa-bell"></i>
            <i class="header__nav-right-icon fa-solid fa-caret-down"></i>
          </div>
        </div>
      </header>
      <!-- END HEADER -->
      <!-- CONTAINER -->
      <div class="container">
        <div class="container__left">
          <ul class="container__left-list">
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="../assets/imgs/anh_dai_dien.jpg"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">Quý Dương Ngô</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <div class="size-item container__left-img">
                  <i
                    data-visualcompletion="css-img"
                    class=""
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                      background-position: 0 -296px;
                      background-size: auto;
                      width: 36px;
                      height: 36px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                </div>
                <div class="container__left-name">Bạn bè</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <div class="size-item container__left-img">
                  <img
                    draggable="false"
                    height="36"
                    width="36"
                    alt=""
                    referrerpolicy="origin-when-cross-origin"
                    src="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/JzYamtSussX.png" />
                </div>
                <div class="container__left-name">Chơi game</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/eECk3ceTaHJ.png"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">Gần đây nhất</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <div class="size-item container__left-img">
                  <i
                    data-visualcompletion="css-img"
                    class=""
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                      background-position: 0 -74px;
                      background-size: auto;
                      width: 36px;
                      height: 36px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                </div>
                <div class="container__left-name">Nhóm</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <div class="size-item container__left-img">
                  <i
                    data-visualcompletion="css-img"
                    class=""
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                      background-position: 0 -407px;
                      background-size: auto;
                      width: 36px;
                      height: 36px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                </div>
                <div class="container__left-name">Marketplace</div>
              </a>
            </li>

            <div id="container__left-show-more">
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                        background-position: 0px -333px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Chiến dịch gây quỹ</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                        background-position: 0px -185px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Đã lưu</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/GJ4EaivDaSj.png" />
                  </div>
                  <div class="container__left-name">
                    Đơn đặt hàng và thanh toán
                  </div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/y7/r/z3JoyCWlf8g.png');
                        background-position: -722px -175px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Hiến máu</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/8OasGoQgQgF.png" />
                  </div>
                  <div class="container__left-name">
                    Hoạt động quảng cáo gần đây
                  </div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                        background-position: 0px -444px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Kỷ niệm</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/CQd7aGaFAXB.png');
                        background-position: 0px -37px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Messenger</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yu/r/1Xvrz50fHMF.png" />
                  </div>
                  <div class="container__left-name">Messenger nhí</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/r/xjjUm0K8VyX.png" />
                  </div>
                  <div class="container__left-name">Meta Business Suite</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/yjJFVz39oV-.png');
                        background-position: 0px 0px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Reels</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/WMOYDeEqIYv.png');
                        background-position: 0px 0px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Sự kiện</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <i
                      data-visualcompletion="css-img"
                      class=""
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/BHDNlEdwMgn.png');
                        background-position: 0px -111px;
                        background-size: auto;
                        width: 36px;
                        height: 36px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </div>
                  <div class="container__left-name">Trang</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/fNPcDZC-2PD.png" />
                  </div>
                  <div class="container__left-name">Ứng phó khẩn cấp</div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/DHBHg9MEeSC.png" />
                  </div>
                  <div class="container__left-name">
                    Trình quản lý quảng cáo
                  </div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/Jr0q8qKF2-Y.png" />
                  </div>
                  <div class="container__left-name">
                    Trung tâm khoa học khí hậu
                  </div>
                </a>
              </li>
              <li class="container__left-item">
                <a href="" class="container__left-link">
                  <div class="size-item container__left-img">
                    <img
                      draggable="false"
                      height="36"
                      width="36"
                      alt=""
                      referrerpolicy="origin-when-cross-origin"
                      src="https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/CwKNCefmHON.png" />
                  </div>
                  <div class="container__left-name">Trung tâm quảng cáo</div>
                </a>
              </li>
            </div>

            <li class="container__left-item">
              <button id="my-btn" class="container__left-link">
                <i class="container__left-icon-down fa-solid fa-caret-down"></i>
                <div
                  id="container__left-show-more-text"
                  class="container__left-name">
                  Xem thêm
                </div>
                <div
                  id="container__left-show-less"
                  class="container__left-name">
                  Xem it hon
                </div>
              </button>
            </li>
          </ul>
          <ul class="container__left-list border-bottom-item">
            <div class="container__left-heading-wrap">
              <h3 class="container__left-heading">Lối tắt của bạn</h3>
              <span>Chỉnh sửa</span>
            </div>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=dbb9e7&_nc_ohc=vvZ-RZ-N9xEAX9rImsM&_nc_ht=scontent.fhan3-5.fna&oh=00_AfAAAkEoGm5kSqoCYMpcWzjKee-bDV5d5W4lF2PCyGTGvA&oe=6439D9F8"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">9a mãi mãi như vậy nhé</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="https://scontent.fhan3-3.fna.fbcdn.net/v/t39.30808-6/317898736_2418024581670200_9110335552126692407_n.jpg?stp=c19.0.50.50a_cp0_dst-jpg_p50x50&_nc_cat=1&ccb=1-7&_nc_sid=ac9ee4&_nc_ohc=y20Tv9TQoWkAX8mcdmn&_nc_oc=AQnVa1sX58-9mCt1e4ZS8bOSpWrzQ0YxuaVPoE0kotyXOuF2cA7wzi70K153uC5W17w&_nc_ht=scontent.fhan3-3.fna&oh=00_AfABZthoSULKaX4F8WCkqkKO7OTWB9UZyE4cifmf-hTFyg&oe=641EAAE0"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">J2TEAM Community</div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/128934138_10224505577576256_6863535203052528339_n.jpg?stp=c23.0.50.50a_cp0_dst-jpg_p50x50&_nc_cat=102&ccb=1-7&_nc_sid=ac9ee4&_nc_ohc=RSsMsyPcJo8AX_oaXYa&_nc_ht=scontent.fhan3-1.fna&oh=00_AfCtINqDcOsMrMuJQOfPfp1RcoP0PqMqcnfNB5IAvNP5MQ&oe=64411D0B"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">
                  Cẩm Nang Build PC - Đồ Họa, Render, Giả Lập
                </div>
              </a>
            </li>
            <li class="container__left-item">
              <a href="" class="container__left-link">
                <img
                  src="https://scontent.fhan3-4.fna.fbcdn.net/v/t1.6435-9/72741633_2460896187362687_8504438560688963584_n.jpg?stp=c26.0.50.50a_cp0_dst-jpg_p50x50&_nc_cat=106&ccb=1-7&_nc_sid=ac9ee4&_nc_ohc=TeUlE0RIzlYAX-DdGaV&_nc_ht=scontent.fhan3-4.fna&oh=00_AfAZW726vIbE7rLYCi_iXueRqPO2jMM1LcdETuqGcPRPDQ&oe=643A083A"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">
                  Cho Thuê Nhà & Phòng Trọ Quận Cầu Giấy-Mỹ Đình
                </div>
              </a>
            </li>

            <div id="container__left-show-more-less">
              <a href="" class="container__left-link container__left-item">
                <img
                  src="https://scontent.fhan3-2.fna.fbcdn.net/v/t31.18172-8/17191863_1375179592503606_1051774706197114961_o.jpg?stp=c13.0.50.50a_cp0_dst-jpg_p50x50&_nc_cat=107&ccb=1-7&_nc_sid=ac9ee4&_nc_ohc=WFMW99vZeR4AX9UHt_1&_nc_oc=AQkIIioEYDHSvwrcclPFhnpv5R9p_Zm_bNBWnDLJ3BaBDrNm3QLKqiuGnRWECVJMcBg&_nc_ht=scontent.fhan3-2.fna&oh=00_AfAjQHwrhxar3z9ZHyIJs1XUN8LfRzRXxiJauRsgMXcy6w&oe=643F434B"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">
                  Tuyển dụng & Việc làm Digital Marketing Việt Nam - DigimarkVN
                </div>
              </a>
              <a href="" class="container__left-link container__left-item">
                <img
                  src="https://scontent.fhan3-2.fna.fbcdn.net/v/t31.18172-8/17191863_1375179592503606_1051774706197114961_o.jpg?stp=c13.0.50.50a_cp0_dst-jpg_p50x50&_nc_cat=107&ccb=1-7&_nc_sid=ac9ee4&_nc_ohc=WFMW99vZeR4AX9UHt_1&_nc_oc=AQkIIioEYDHSvwrcclPFhnpv5R9p_Zm_bNBWnDLJ3BaBDrNm3QLKqiuGnRWECVJMcBg&_nc_ht=scontent.fhan3-2.fna&oh=00_AfAjQHwrhxar3z9ZHyIJs1XUN8LfRzRXxiJauRsgMXcy6w&oe=643F434B"
                  alt=""
                  class="size-item container__left-img" />
                <div class="container__left-name">
                  Việc làm Digital Marketing
                </div>
              </a>
            </div>

            <li class="container__left-item">
              <button id="my-btn-bottom" class="container__left-link">
                <i class="container__left-icon-down fa-solid fa-caret-down"></i>
                <div
                  id="container__left-show-more-text-bottom"
                  class="container__left-name">
                  Xem thêm
                </div>
                <div
                  id="container__left-show-less-bottom"
                  class="container__left-name">
                  Xem it hon
                </div>
              </button>
            </li>
          </ul>
          <div class="container__left-footer">
            <a href="">Quyền riêng tư</a> . <a href="">Điều khoản</a> .
            <a href="">Quảng cáo</a> . <a href="">Lựa chọn quảng cáo</a> .
            <a href="">Cookie</a> . <a href="">Xem thêm</a> .
            <span>Meta © 2023 </span>
          </div>
        </div>
        <div class="container__main">
          <div class="container__main-story">
            <div class="story owl-carousel owl-theme">
              <div
                class="story-item item"
                style="
                  background-image: url(https://4.img-dpreview.com/files/p/E~TS590x0~articles/3925134721/0266554465.jpeg);
                  height: 172px;
                ">
                <!-- <div class="rounded">
                        <img src="../assets/imgs/anh_dai_dien.jpg" alt="" class="container__main-story-img">
                      </div> -->
                <div class="container__main-story-create-icon-wrap">
                  <i
                    class="container__main-story-create-icon fa-sharp fa-solid fa-plus"></i>
                </div>
                <span
                  style="
                    position: relative;
                    bottom: -186px;
                    color: #0f0f0f;
                    right: -39px;
                  "
                  >Tạo tin</span
                >
              </div>

              <div
                class="story-item item"
                style="
                  background-image: url(https://cdn.pixabay.com/photo/2015/06/19/17/58/sample-815141_960_720.jpg);
                ">
                <div class="rounded">
                  <img
                    src="../assets/imgs/anh_dai_dien.jpg"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>Tin của bạn</span>
              </div>
              <div
                class="story-item item"
                style="
                  background-image: url(https://petapixel.com/assets/uploads/2012/02/sample1_mini.jpg);
                ">
                <div class="rounded">
                  <img
                    src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/335870946_724956936010511_2861930333391635141_n.jpg?stp=dst-jpg_s280x280&_nc_cat=107&ccb=1-7&_nc_sid=f7b297&_nc_ohc=cd1c7q5vQ7wAX_kX1Tj&_nc_ht=scontent.fhan3-2.fna&oh=00_AfCpH20Ps38s3KQpMVrkUT5jvE7ILUF3kJuEhv7Gsp72jg&oe=6417144A"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>Học Văn</span>
              </div>
              <div
                class="story-item item"
                style="
                  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR1uJ2UBA9SkxbosVbEjCTYo5FIBlVas-niv68Gfr3bam_EU_P);
                ">
                <div class="rounded">
                  <img
                    src="https://scontent.fhan3-3.fna.fbcdn.net/v/t15.5256-10/334923039_1299342990795819_7918449324245887569_n.jpg?stp=dst-jpg_s280x280&_nc_cat=101&ccb=1-7&_nc_sid=ad6a45&_nc_ohc=G7TXWP-Hq-4AX8X1u55&_nc_ht=scontent.fhan3-3.fna&oh=00_AfC8GNptGFSn7fGHTN_QMD5MGbr_FEJ-KrFkofB_nD3h-g&oe=64186BB3"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>Đàn Ông</span>
              </div>
              <div
                class="story-item item"
                style="
                  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEMIHqfMzKRiZed4BUNOKpPpTYLrDxC3hsiICottRQnNXHFaU3UA);
                ">
                <div class="rounded">
                  <img
                    src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/336101142_743689204055890_2217548259638655872_n.jpg?stp=dst-jpg_s280x280&_nc_cat=107&ccb=1-7&_nc_sid=535e6e&_nc_ohc=DseGZZp4DywAX-sespt&_nc_ht=scontent.fhan3-2.fna&oh=00_AfCjO998WDGYqvTULImPSexJMNHcZGX1EZtQ5_uemfhIwg&oe=64186D24"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>Nhớ</span>
              </div>
              <div
                class="story-item item"
                style="
                  background-image: url(https://imaging.nikon.com/lineup/lens/f-mount/singlefocal/normal/af-s_50mmf_18g/img/sample/sample1_l.jpg);
                ">
                <div class="rounded">
                  <img
                    src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/335870946_724956936010511_2861930333391635141_n.jpg?stp=dst-jpg_s280x280&_nc_cat=107&ccb=1-7&_nc_sid=f7b297&_nc_ohc=cd1c7q5vQ7wAX_kX1Tj&_nc_ht=scontent.fhan3-2.fna&oh=00_AfCpH20Ps38s3KQpMVrkUT5jvE7ILUF3kJuEhv7Gsp72jg&oe=6417144A"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>Ru.Mcafé</span>
              </div>
              <div
                class="story-item item"
                style="
                  background-image: url(https://dsim.in/blog/wp-content/uploads/2018/09/Image-3-e1537274947337.jpg);
                ">
                <div class="rounded">
                  <img
                    src="https://scontent.fdad3-3.fna.fbcdn.net/v/t1.18169-1/16426079_965931360208543_4391729910984093088_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=1eb0c7&_nc_ohc=B_arQL0mgFkAX-0Pg13&_nc_ad=z-m&_nc_cid=1229&_nc_ht=scontent.fdad3-3.fna&oh=00_AfC-qBG8bUKh7kiof5lJcqNLySr0oNjelpilXbfFMJmn4w&oe=643F9642"
                    alt=""
                    class="container__main-story-img" />
                </div>
                <span>J2 TEAM</span>
              </div>
            </div>
          </div>
          <div class="container__main-post-wrap">
            <div class="container__main-post">
              <img
                src="../assets/imgs/anh_dai_dien.jpg"
                alt=""
                class="container__main-post-img" />
              <input
                type="text"
                placeholder="Quý ơi, bạn đang nghĩ gì thế?"
                class="container__main-post-input" />
            </div>
            <div class="container__main-post-selection border-bottom-item">
              <div class="container__main-post-selection-item">
                <img
                  src="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/v1iF2605Cb5.png"
                  alt=""
                  class="container__main-post-selection-item-video" />
                <span>Video trực tiếp</span>
              </div>
              <div class="container__main-post-selection-item">
                <img
                  src="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/a6OjkIIE-R0.png"
                  alt=""
                  class="container__main-post-selection-item-images" />
                <span>Ảnh/Video</span>
              </div>
              <div class="container__main-post-selection-item">
                <img
                  src="https://static.xx.fbcdn.net/rsrc.php/v3/yk/r/yMDS19UDsWe.png"
                  alt=""
                  class="container__main-post-selection-item-smile" />
                <span>Cảm xúc/hoạt động</span>
              </div>
            </div>
          </div>
          <div class="container__main-news">
            <div class="container__main-news-head">
              <img
                src="../assets/imgs/anh_dai_dien.jpg"
                alt=""
                class="container__main-news-head-img" />
              <div class="container__main-news-head-info">
                <div class="container__main-news-head-name-wrap">
                  <span class="container__main-news-head-name">
                    Quý Dương Ngô
                  </span>
                  <span class="container__main-news-head-name-icon"
                    ><i
                      data-visualcompletion="css-img"
                      aria-label="Tài khoản đã xác minh"
                      class=""
                      role="img"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/vMsfpbZ419N.png');
                        background-position: -176px -88px;
                        background-size: 190px 190px;
                        width: 12px;
                        height: 12px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                </div>
                <div class="container__main-news-time">
                  <span>1 giờ</span>
                  <i
                    class="container__main-news-time-icon fa-sharp fa-solid fa-earth-americas"></i>
                </div>
              </div>
              <div class="container__main-news-head-icon">
                <i
                  class="container__main-news-head-more-icon fa-solid fa-ellipsis"></i>
                <i
                  class="container__main-news-head-more-icon-cancel fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="container__main-news-content">
              <span>Hay lắm =))</span>
              <img
                src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-6/335157831_755685632611615_5761441528301987573_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5cd70e&_nc_ohc=Tr7yiC95znUAX8nuVB-&_nc_ht=scontent.fhan4-3.fna&oh=00_AfAIpDH2LpAg71QXZaeGlah9noncmtmoHOZB-zhIu-yWMQ&oe=641F7A41"
                alt=""
                class="container__main-news-content-img" />
              <div class="container__main-news-section">
                <div class="container__main-news-feel-wrap">
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <span>999 </span>
                </div>
                <div class="container__main-news-comment">
                  <span>99 bình luận</span>
                </div>
                <div class="container__main-news-share">
                  <span>99 chia sẻ</span>
                </div>
              </div>
              <div class="container__main-border"></div>
              <div class="container__main-news-interact">
                <div class="container__main-news-interact-item">
                  <span class="container__main-news-interact-item-icon"
                    ><i
                      data-visualcompletion="css-img"
                      class="x1b0d499 x1d69dk1"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                        background-position: 0px -232px;
                        background-size: 26px 680px;
                        width: 18px;
                        height: 18px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                  <span>Thích</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                      background-position: 0px -192px;
                      background-size: 26px 680px;
                      width: 18px;
                      height: 18px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Bình luận</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/UOf8uG-5ca6.png');
                      background-position: 0px -22px;
                      background-size: 22px 594px;
                      width: 20px;
                      height: 20px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Gửi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="container__main-news">
            <div class="container__main-news-head">
              <img
                src="../assets/imgs/anh_dai_dien.jpg"
                alt=""
                class="container__main-news-head-img" />
              <div class="container__main-news-head-info">
                <div class="container__main-news-head-name-wrap">
                  <span class="container__main-news-head-name">
                    Quý Dương Ngô
                  </span>
                  <span class="container__main-news-head-name-icon"
                    ><i
                      data-visualcompletion="css-img"
                      aria-label="Tài khoản đã xác minh"
                      class=""
                      role="img"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/vMsfpbZ419N.png');
                        background-position: -176px -88px;
                        background-size: 190px 190px;
                        width: 12px;
                        height: 12px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                </div>
                <div class="container__main-news-time">
                  <span>1 giờ</span>
                  <i
                    class="container__main-news-time-icon fa-sharp fa-solid fa-earth-americas"></i>
                </div>
              </div>
              <div class="container__main-news-head-icon">
                <i
                  class="container__main-news-head-more-icon fa-solid fa-ellipsis"></i>
                <i
                  class="container__main-news-head-more-icon-cancel fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="container__main-news-content">
              <span>Hay lắm =))</span>
              <img
                src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-6/335157831_755685632611615_5761441528301987573_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5cd70e&_nc_ohc=Tr7yiC95znUAX8nuVB-&_nc_ht=scontent.fhan4-3.fna&oh=00_AfAIpDH2LpAg71QXZaeGlah9noncmtmoHOZB-zhIu-yWMQ&oe=641F7A41"
                alt=""
                class="container__main-news-content-img" />
              <div class="container__main-news-section">
                <div class="container__main-news-feel-wrap">
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <span>999 </span>
                </div>
                <div class="container__main-news-comment">
                  <span>99 bình luận</span>
                </div>
                <div class="container__main-news-share">
                  <span>99 chia sẻ</span>
                </div>
              </div>
              <div class="container__main-border"></div>
              <div class="container__main-news-interact">
                <div class="container__main-news-interact-item">
                  <span class="container__main-news-interact-item-icon"
                    ><i
                      data-visualcompletion="css-img"
                      class="x1b0d499 x1d69dk1"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                        background-position: 0px -232px;
                        background-size: 26px 680px;
                        width: 18px;
                        height: 18px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                  <span>Thích</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                      background-position: 0px -192px;
                      background-size: 26px 680px;
                      width: 18px;
                      height: 18px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Bình luận</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/UOf8uG-5ca6.png');
                      background-position: 0px -22px;
                      background-size: 22px 594px;
                      width: 20px;
                      height: 20px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Gửi</span>
                </div>
              </div>
            </div>
          </div>
          <div class="container__main-news">
            <div class="container__main-news-head">
              <img
                src="../assets/imgs/anh_dai_dien.jpg"
                alt=""
                class="container__main-news-head-img" />
              <div class="container__main-news-head-info">
                <div class="container__main-news-head-name-wrap">
                  <span class="container__main-news-head-name">
                    Quý Dương Ngô
                  </span>
                  <span class="container__main-news-head-name-icon"
                    ><i
                      data-visualcompletion="css-img"
                      aria-label="Tài khoản đã xác minh"
                      class=""
                      role="img"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/vMsfpbZ419N.png');
                        background-position: -176px -88px;
                        background-size: 190px 190px;
                        width: 12px;
                        height: 12px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                </div>
                <div class="container__main-news-time">
                  <span>1 giờ</span>
                  <i
                    class="container__main-news-time-icon fa-sharp fa-solid fa-earth-americas"></i>
                </div>
              </div>
              <div class="container__main-news-head-icon">
                <i
                  class="container__main-news-head-more-icon fa-solid fa-ellipsis"></i>
                <i
                  class="container__main-news-head-more-icon-cancel fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="container__main-news-content">
              <span>Hay lắm =))</span>
              <img
                src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-6/335157831_755685632611615_5761441528301987573_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5cd70e&_nc_ohc=Tr7yiC95znUAX8nuVB-&_nc_ht=scontent.fhan4-3.fna&oh=00_AfAIpDH2LpAg71QXZaeGlah9noncmtmoHOZB-zhIu-yWMQ&oe=641F7A41"
                alt=""
                class="container__main-news-content-img" />
              <div class="container__main-news-section">
                <div class="container__main-news-feel-wrap">
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%2318AFFF'/%3e%3cstop offset='100%25' stop-color='%230062DF'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FF6680'/%3e%3cstop offset='100%25' stop-color='%23E61739'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.710144928 0 0 0 0 0 0 0 0 0 0.117780134 0 0 0 0.349786932 0'/%3e%3c/filter%3e%3cpath id='b' d='M8 0a8 8 0 100 16A8 8 0 008 0z'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='white' d='M10.473 4C8.275 4 8 5.824 8 5.824S7.726 4 5.528 4c-2.114 0-2.73 2.222-2.472 3.41C3.736 10.55 8 12.75 8 12.75s4.265-2.2 4.945-5.34c.257-1.188-.36-3.41-2.472-3.41'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <div class="container__main-news-feel-list">
                    <img
                      src="data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'%3e%3cdefs%3e%3clinearGradient id='a' x1='50%25' x2='50%25' y1='10.25%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23FEEA70'/%3e%3cstop offset='100%25' stop-color='%23F69B30'/%3e%3c/linearGradient%3e%3clinearGradient id='d' x1='50%25' x2='50%25' y1='0%25' y2='100%25'%3e%3cstop offset='0%25' stop-color='%23472315'/%3e%3cstop offset='100%25' stop-color='%238B3A0E'/%3e%3c/linearGradient%3e%3clinearGradient id='e' x1='50%25' x2='50%25' y1='0%25' y2='81.902%25'%3e%3cstop offset='0%25' stop-color='%23FC607C'/%3e%3cstop offset='100%25' stop-color='%23D91F3A'/%3e%3c/linearGradient%3e%3cfilter id='c' width='118.8%25' height='118.8%25' x='-9.4%25' y='-9.4%25' filterUnits='objectBoundingBox'%3e%3cfeGaussianBlur in='SourceAlpha' result='shadowBlurInner1' stdDeviation='1'/%3e%3cfeOffset dy='-1' in='shadowBlurInner1' result='shadowOffsetInner1'/%3e%3cfeComposite in='shadowOffsetInner1' in2='SourceAlpha' k2='-1' k3='1' operator='arithmetic' result='shadowInnerInner1'/%3e%3cfeColorMatrix in='shadowInnerInner1' values='0 0 0 0 0.921365489 0 0 0 0 0.460682745 0 0 0 0 0 0 0 0 0.35 0'/%3e%3c/filter%3e%3cpath id='b' d='M16 8A8 8 0 110 8a8 8 0 0116 0'/%3e%3c/defs%3e%3cg fill='none'%3e%3cuse fill='url(%23a)' xlink:href='%23b'/%3e%3cuse fill='black' filter='url(%23c)' xlink:href='%23b'/%3e%3cpath fill='url(%23d)' d='M3 8.008C3 10.023 4.006 14 8 14c3.993 0 5-3.977 5-5.992C13 7.849 11.39 7 8 7c-3.39 0-5 .849-5 1.008'/%3e%3cpath fill='url(%23e)' d='M4.541 12.5c.804.995 1.907 1.5 3.469 1.5 1.563 0 2.655-.505 3.459-1.5-.551-.588-1.599-1.5-3.459-1.5s-2.917.912-3.469 1.5'/%3e%3cpath fill='%232A3755' d='M6.213 4.144c.263.188.502.455.41.788-.071.254-.194.369-.422.371-.78.011-1.708.255-2.506.612-.065.029-.197.088-.332.085-.124-.003-.251-.058-.327-.237-.067-.157-.073-.388.276-.598.545-.33 1.257-.48 1.909-.604a7.077 7.077 0 00-1.315-.768c-.427-.194-.38-.457-.323-.6.127-.317.609-.196 1.078.026a9 9 0 011.552.925zm3.577 0a8.953 8.953 0 011.55-.925c.47-.222.95-.343 1.078-.026.057.143.104.406-.323.6a7.029 7.029 0 00-1.313.768c.65.123 1.363.274 1.907.604.349.21.342.44.276.598-.077.18-.203.234-.327.237-.135.003-.267-.056-.332-.085-.797-.357-1.725-.6-2.504-.612-.228-.002-.351-.117-.422-.37-.091-.333.147-.6.41-.788z'/%3e%3c/g%3e%3c/svg%3e"
                      alt=""
                      class="container__main-news-feel-icon" />
                  </div>
                  <span>999 </span>
                </div>
                <div class="container__main-news-comment">
                  <span>99 bình luận</span>
                </div>
                <div class="container__main-news-share">
                  <span>99 chia sẻ</span>
                </div>
              </div>
              <div class="container__main-border"></div>
              <div class="container__main-news-interact">
                <div class="container__main-news-interact-item">
                  <span class="container__main-news-interact-item-icon"
                    ><i
                      data-visualcompletion="css-img"
                      class="x1b0d499 x1d69dk1"
                      style="
                        background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                        background-position: 0px -232px;
                        background-size: 26px 680px;
                        width: 18px;
                        height: 18px;
                        background-repeat: no-repeat;
                        display: inline-block;
                      "></i>
                  </span>
                  <span>Thích</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3JWeZNah4wg.png');
                      background-position: 0px -192px;
                      background-size: 26px 680px;
                      width: 18px;
                      height: 18px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Bình luận</span>
                </div>
                <div class="container__main-news-interact-item">
                  <i
                    data-visualcompletion="css-img"
                    class="container__main-news-interact-item-icon"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/UOf8uG-5ca6.png');
                      background-position: 0px -22px;
                      background-size: 22px 594px;
                      width: 20px;
                      height: 20px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                  <span>Gửi</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container__right">
          <div class="container__right-list">
            <h3 class="container__right-heading">Được tài trợ</h3>
          </div>
          <ul class="container__right-list">
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://cf.shopee.vn/file/vn-11134201-23020-r1va9fqiulnv7d"
                  alt=""
                  class="container__right-logo" />
                <div class="container__right-info">
                  <div class="container__right-info-name">Shopee</div>
                  <span class="container__right-info-desc"> shopee.vn </span>
                </div>
              </a>
              <div class="container__right-item-more">
                <i
                  class="container__right-item-more-icon fa-solid fa-ellipsis"></i>
              </div>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://lh3.googleusercontent.com/Z7t9Ksd3iT7grmeU7aO16fAuaN_7-RWoCwIjJpUQjWI5MRtuyUv2Tp3nuZOf84Eyx35HeqHhMOPVlp4cGHfMF9ve4QyJczo=w1000-rw"
                  alt=""
                  class="container__right-logo" />
                <div class="container__right-info">
                  <div class="container__right-info-name">Phong Vu</div>
                  <span class="container__right-info-desc"> phongvu.vn </span>
                </div>
              </a>
              <div class="container__right-item-more">
                <i
                  class="container__right-item-more-icon fa-solid fa-ellipsis"></i>
              </div>
            </li>
          </ul>
          <ul class="container__right-list border-bottom-item">
            <div class="container__right-list-mypage">
              <h3 class="container__right-heading">Trang của bạn</h3>
              <i
                class="container__right-item-more-icon-mypage fa-solid fa-ellipsis"></i>
            </div>
          </ul>
          <ul class="container__right-list border-bottom-item">
            <div class="container__right-list-friend-heading">
              <h3 class="container__right-heading">Người liên hệ</h3>
              <div class="container__left-icon">
                <i class="fa-solid fa-video"></i>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-ellipsis"></i>
              </div>
            </div>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-1/322721788_6085783311489484_987062012311785944_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=107&ccb=1-7&_nc_sid=7206a8&_nc_ohc=Xe5795gI_DwAX_n869f&_nc_ht=scontent.fhan3-2.fna&oh=00_AfB0vvcHxxemh4oFKe4582CmcGzhl7EYoqW_KkiGGb-UrA&oe=64180D50"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Khôi</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-1.fna.fbcdn.net/v/t39.30808-1/272899632_477126963926831_8441691813689125119_n.jpg?stp=cp0_dst-jpg_s40x40&_nc_cat=102&ccb=1-7&_nc_sid=7206a8&_nc_ohc=IgI652AInM4AX-AEvVE&_nc_ht=scontent.fhan3-1.fna&oh=00_AfA2EBAuX-F6ipTAO7IX8luWyl-PmT66ORkebIUO3MGRTw&oe=6416F749"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Hạnh Dương Ngô</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-1/328235745_1554581824951191_3350176987484344721_n.jpg?stp=c25.20.36.36a_cp0_dst-jpg_p86x86&_nc_cat=103&ccb=1-7&_nc_sid=7206a8&_nc_ohc=l4NEl1Zsl9kAX9aGdTC&_nc_ht=scontent.fhan4-3.fna&oh=00_AfCgL3PXVSVsMWyNScNiSdZiUloKf5Y_gDZww1kXlhMJZg&oe=64177D44"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Tuấn Hiệp</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t39.30808-1/321575363_734734884658808_5534757172055961578_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=110&ccb=1-7&_nc_sid=7206a8&_nc_ohc=rkQ95xrz42wAX8PJXyr&_nc_ht=scontent.fhan3-5.fna&oh=00_AfAyLCpGVFHHpt8Yh_o9UiqruB6IkyCUcq9FpiouvEw79g&oe=6416F52A"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Đỗ Hiếu</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=f67be1&_nc_ohc=vvZ-RZ-N9xEAX9rImsM&_nc_ht=scontent.fhan3-5.fna&oh=00_AfDMzeVjtLZLW0gz5pRLZkkay-LvuuDGazDJCGSXi0Sc9g&oe=643A1238"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Lợi Liễu</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-4.fna.fbcdn.net/v/t1.6435-1/146887215_1393974470936680_3135886821181417534_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=dO__0SwxT4AAX9e5OPN&_nc_ht=scontent.fhan3-4.fna&oh=00_AfC8jdFkOfLkFppvivj_aH4IBdAh-fWfP2hqQ3VehEIumQ&oe=643A0CC8"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Khương Nguyễn Văn</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-4.fna.fbcdn.net/v/t39.30808-1/335928771_1322423421666938_2197307343427886439_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=104&ccb=1-7&_nc_sid=f67be1&_nc_ohc=A98W4Ts_t-UAX94ogyS&_nc_ht=scontent.fhan3-4.fna&oh=00_AfC7YhO3so-ur3TN8b4Ag-q6DcRf7rEWlWC_QLUBASHUuA&oe=6416FE9C"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Tuan Anh Duong</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan4-2.fna.fbcdn.net/v/t39.30808-1/332889529_1190199031702303_6000696873961784781_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=111&ccb=1-7&_nc_sid=7206a8&_nc_ohc=m_FKVoRLQAoAX9jenJ-&_nc_ht=scontent.fhan4-2.fna&oh=00_AfCVw1Jjit6iF9Z2APgWDwyfPD3V95lWCiV5muuovIKKCg&oe=64174A7F"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Nguyễn Tình</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=7206a8&_nc_ohc=vvZ-RZ-N9xEAX9rImsM&_nc_ht=scontent.fhan3-5.fna&oh=00_AfDMzeVjtLZLW0gz5pRLZkkay-LvuuDGazDJCGSXi0Sc9g&oe=643A1238"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Trần Văn Thắng</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p40x40&_nc_cat=1&ccb=1-7&_nc_sid=7206a8&_nc_ohc=vvZ-RZ-N9xEAX9rImsM&_nc_ht=scontent.fhan3-5.fna&oh=00_AfDMzeVjtLZLW0gz5pRLZkkay-LvuuDGazDJCGSXi0Sc9g&oe=643A1238"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Trương Tuấn</span>
            </li>
          </ul>
          <ul class="container__right-list border-bottom-item">
            <div class="container__right-list-friend-heading">
              <h3 class="container__right-heading">Cuộc trò chuyện nhóm</h3>
            </div>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan4-3.fna.fbcdn.net/v/t1.15752-9/270010791_631579484818064_4861573292911346647_n.jpg?stp=cp0_dst-jpg_s50x50&_nc_cat=103&ccb=1-7&_nc_sid=02e273&_nc_ohc=jalA1lmwsTUAX-vch3M&_nc_ht=scontent.fhan4-3.fna&oh=03_AdRc35PMt_zoX2k4Xh8QYWolYIOZvyWGgiD8qw40c1gSwQ&oe=643A0F62"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Yomost</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan4-3.fna.fbcdn.net/v/t39.30808-1/332499896_713339000445094_7289724405373613673_n.jpg?stp=cp0_dst-jpg_p40x40&_nc_cat=100&ccb=1-7&_nc_sid=7206a8&_nc_ohc=YeuwEpvjl80AX_uAIJe&_nc_ht=scontent.fhan4-3.fna&oh=00_AfDDaMYj8E1LcG0Ha32aWpzBM65H-AbK4WjZbKmEJuNutQ&oe=6416F6DA"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name">Php</span>
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <img
                  src="https://scontent.fhan3-5.fna.fbcdn.net/v/t1.15752-9/298523919_467329561908939_2506068761564451646_n.jpg?stp=cp0_dst-jpg_p50x50&_nc_cat=1&ccb=1-7&_nc_sid=02e273&_nc_ohc=h9uLYoaGwdAAX-3kA0i&_nc_ht=scontent.fhan3-5.fna&oh=03_AdSTgGKKFSoJHBg3ah6IpKtxVDSbYHnC_S8_7vpEMC4m7g&oe=643A392F"
                  alt=""
                  class="size-item container__right-img-friend" />
              </a>
              <span class="container__right-name"
                >Động Share Stock Blend Màu🤭</span
              >
            </li>
            <li class="container__right-item">
              <a href="" class="container__right-link">
                <div class="size-item container__right-img-friend">
                  <i
                    data-visualcompletion="css-img"
                    class="x1b0d499 xep6ejk"
                    style="
                      background-image: url('https://static.xx.fbcdn.net/rsrc.php/v3/yl/r/q2_oQ3h3JtJ.png');
                      background-position: 0 -952px;
                      background-size: auto;
                      width: 20px;
                      height: 20px;
                      background-repeat: no-repeat;
                      display: inline-block;
                    "></i>
                </div>
              </a>
              <span class="container__right-name">Tạo nhóm mới</span>
            </li>
          </ul>
        </div>
      </div>
      <!-- END CONTAINER -->
    </body>
  </html>
</template>

<script>
export default {
  name: "Home",
};
</script>
