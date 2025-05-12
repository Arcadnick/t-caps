<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Tue Apr 01 2025 09:40:11 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6613afc0b9b7fac29d9941ce" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>Time Caps | Умные AI-решения для бизнеса</title>
    <meta content="Создавайте, настраивайте и запускайте AI-капсулы для автоматизации задач. Повышайте эффективность с первого дня!" property="og:title">
    <meta content="Создавайте, настраивайте и запускайте AI-капсулы для автоматизации задач. Повышайте эффективность с первого дня!" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800,900:cyrillic,cyrillic-ext,latin"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    @include('partials.favicons')
</head>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-out" data-easing2="ease-in-out" role="banner" class="navbar w-nav">
    <div class="nav-container">
        <a href="{{ route('welcome') }}" aria-current="page" class="nav-logo w-nav-brand w--current"><img src="{{ asset('images/logo-time-caps.svg') }}" loading="lazy" alt="" class="logo"></a>
        <div class="nav-container-col">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-menu-block">
                    <a href="{{ route('landing') }}" class="nav-link-block w-inline-block">
                        <div>Наши AI-капсулы</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <a href="{{ route('welcome') }}" class="how-it-works-link nav-link-block w-inline-block">
                        <div>Как работает</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <a href="{{ route('partners') }}" class="nav-link-block w-inline-block">
                        <div>Разработчикам</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <div class="button-nav-block">
                        <a href="{{ route('login') }}" class="button-base navbar-btn blue-color w-inline-block">
                            <div>Войти</div>
                        </a>
                        <a href="https://t.me/Time_Capsule_AI" target="_blank" class="button-base navbar-btn w-inline-block"><img src="{{ asset('images/telegram_logo.svg') }}" loading="lazy" alt="" class="icon-whatsapp">
                            <div>Связаться в Telegram</div>
                        </a>
                        <a href="{{ route('consultation') }}" class="button-base navbar-btn w-inline-block">
                            <div>Заказать консультацию</div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="nav-right-col">
                <a href="https://t.me/Time_Capsule_AI" target="_blank" class="button-base w-inline-block"><img src="{{ asset('images/telegram_logo.svg') }}" loading="lazy" alt="" class="icon-whatsapp"></a>
                <a href="{{ route('consultation') }}" class="button-base w-inline-block">
                    <div>Заказать консультацию</div>
                </a>
                <a href="{{ route('login') }}" class="button-base header-btn w-inline-block">
                    <div>Войти</div>
                </a>
            </div>
            <div class="menu-btn w-nav-button">
                <div class="burger-icon">
                    <div class="line-burger"></div>
                    <div class="line-burger"></div>
                    <div class="line-burger"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper-block">
    <div class="baground-fon-body">
        <div class="line-baground mobi-hide"></div>
        <div class="line-baground mobi-hide"></div>
        <div class="line-baground"></div>
        <div class="line-baground"></div>
        <div class="line-baground"></div>
    </div>
    <section data-w-id="45997f92-ae36-e406-96bb-e1c177f3833c" class="hero-section">
        <div class="hero-container">
            <div class="hero-shapes-wrapper"><img src="{{ asset('images/caps-9.png') }}" loading="lazy" alt="" class="hero-img"><img src="{{ asset('images/caps-small-3.png') }}" loading="lazy" alt="" class="hero-img small"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" alt="" class="hero-img small _2-v"></div>
            <div data-w-id="40d73393-22b4-d096-3a54-967fb7d7998d" style="opacity:0" class="hero-left-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-9.png') }}" loading="lazy" data-w-id="7cf3eb8f-e337-8583-c65d-444fdc400f49" alt="" class="hero-img _1-v"></div>
            </div>
            <div data-w-id="696c1e16-ba6b-4170-72cf-81fcfc352401" style="opacity:0" class="h1-block">
                <h1><span class="blue-font-color">Ускорьте</span> свою <span class="blue-font-color">работу</span><br>с AI Капсулой!</h1>
                <div class="subheader">Выберите сферу и процесс, который хотите автоматизировать, и получите AI-Капсулу с готовым решением по ускорению выбранной задачи.</div>
            </div>
            <div data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb2" style="opacity:0" class="hero-right-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-small-3.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb5" alt="" class="hero-img _2-v"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb6" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb7" alt="" class="hero-img _3-v"></div>
            </div>
            <div data-w-id="461cf999-21af-51ca-de1a-ba683fb3ca87" style="opacity:0" class="h2-block max-width top-margin-mobi">
                <div class="search-block">
                    <div class="form-search w-form">
                        <form id="search-ai-capsules" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="6613afc0b9b7fac29d9941ce" data-wf-element-id="4b4bddf6-e556-2086-e2c1-b0b96f37ba9d">
                            <div class="flex-vertical">
                                <input class="search-item w-input" maxlength="256" name="name" data-name="Name" placeholder="Ваша сфера деятельности" type="text" id="name">
                                <div data-hover="false" data-delay="0" data-w-id="1ee6e070-e726-66b8-b843-f061940eec87" class="dropdown-categories w-dropdown">
                                    <div class="dropdown-toggle w-dropdown-toggle">
                                        <div class="category-item"><img src="{{ asset('images/marketing-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                            <div>Продажи</div>
                                        </div>
                                        <div class="icon-dropdown w-embed">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 7.5L10 12.5L15 7.5" stroke="#717680" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <nav class="dropdown-list categories w-dropdown-list">
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Продажи">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/marketing-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Продажи</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Контент">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/sales-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Контент</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Рекрутинг">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/recruitment-and-hiring.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Рекрутинг</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Бизнес">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/finances-шьп.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Бизнес</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="IT">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/it-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>IT</div>
                                            </div>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                            <div class="wrapper-btn left-aling width-auto">
                                <button type="button" id="submit-capsule-search" class="blue-button w-inline-block" style="min-width: 232px">
                                    <span class="button-text">Подобрать AI капсулу</span>
                                    <span class="button-spinner" style="display: none;">
                                        <svg class="spinner" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-outside-1_1072_3231" maskUnits="userSpaceOnUse" x="7.16016" y="1" width="12" height="24" fill="black">
                                                <rect fill="white" x="7.16016" y="1" width="12" height="24"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7153 11.1342C14.4036 11.3969 14.1411 11.634 13.9771 11.8422C13.6949 12.201 13.5539 12.6732 13.4882 13H13.4921C13.5578 13.33 13.6988 13.7048 13.981 14.0637C14.145 14.2751 14.4108 14.5122 14.7192 14.7717C14.8467 14.8787 14.9823 14.9898 15.123 15.1051C16.1659 15.9594 17.4818 17.0372 17.7507 18.2992C17.754 18.312 17.754 18.3216 17.754 18.3312C17.8065 18.6067 17.836 18.8919 17.836 19.1834C17.836 20.2247 17.4685 21.2051 16.8845 21.9868L16.9042 21.9612C16.025 23.137 14.6076 23.9059 13 23.9059C11.3924 23.9059 9.98493 23.153 9.10566 21.9772L9.09582 21.9612C8.51183 21.1826 8.16406 20.2247 8.16406 19.1834C8.16406 18.8919 8.19359 18.6067 8.24608 18.3312C8.24936 18.3184 8.24936 18.3088 8.24936 18.2992C8.5186 17.0383 9.8378 15.957 10.8815 15.1016C11.0205 14.9876 11.1547 14.8776 11.2809 14.7717C11.5925 14.509 11.855 14.2719 12.019 14.0637C12.3012 13.7048 12.4423 13.3268 12.5079 13H12.504C12.4384 12.67 12.2973 12.201 12.0151 11.8422C11.8511 11.6308 11.5854 11.3937 11.277 11.1342C11.1495 11.0272 11.0138 10.916 10.8731 10.8008C9.83019 9.94653 8.51432 8.86867 8.24546 7.60673C8.24218 7.59392 8.24218 7.5843 8.24218 7.57469C8.21265 7.4177 8.19296 7.25751 8.17984 7.09732C8.16672 6.97237 8.16016 6.85062 8.16016 6.72247C8.16016 4.11454 10.3255 2 12.9961 2C15.6667 2 17.8321 4.11454 17.8321 6.72247C17.8321 6.84742 17.8222 6.97237 17.8124 7.09732C17.7993 7.25751 17.7796 7.4177 17.7501 7.57469C17.7468 7.58751 17.7468 7.59712 17.7468 7.60673C17.4775 8.86762 16.1583 9.9489 15.1147 10.8043C14.9756 10.9183 14.8414 11.0283 14.7153 11.1342Z"/>
                                            </mask>
                                            <path d="M13.9771 11.8422L13.1915 11.2234L13.191 11.2241L13.9771 11.8422ZM14.7153 11.1342L14.0725 10.3681L14.0708 10.3696L14.7153 11.1342ZM13.4882 13L12.5078 12.8031L12.2675 14H13.4882V13ZM13.4921 13L14.4729 12.805L14.3129 12H13.4921V13ZM13.981 14.0637L14.7711 13.4507L14.7671 13.4456L13.981 14.0637ZM14.7192 14.7717L14.0753 15.5369L14.0764 15.5377L14.7192 14.7717ZM15.123 15.1051L14.4893 15.8787L14.4893 15.8787L15.123 15.1051ZM17.7507 18.2992L16.7726 18.5075L16.7769 18.5275L16.7819 18.5472L17.7507 18.2992ZM17.754 18.3312H16.754V18.4256L16.7716 18.5184L17.754 18.3312ZM16.8845 21.9868L16.0834 21.3883L17.6776 22.5959L16.8845 21.9868ZM16.9042 21.9612L17.7051 22.56L16.1111 21.352L16.9042 21.9612ZM9.10566 21.9772L8.25364 22.5007L8.27751 22.5395L8.30482 22.576L9.10566 21.9772ZM9.09582 21.9612L9.94785 21.4377L9.92359 21.3982L9.89578 21.3611L9.09582 21.9612ZM8.24608 18.3312L7.27733 18.0832L7.26959 18.1134L7.26375 18.1441L8.24608 18.3312ZM8.24936 18.2992L7.27141 18.0903L7.24936 18.1936V18.2992H8.24936ZM10.8815 15.1016L11.5154 15.875L11.5154 15.875L10.8815 15.1016ZM11.2809 14.7717L11.9237 15.5377L11.9254 15.5363L11.2809 14.7717ZM12.019 14.0637L12.8046 14.6825L12.8051 14.6818L12.019 14.0637ZM12.5079 13L13.4883 13.1969L13.7286 12H12.5079V13ZM12.504 13L11.5232 13.195L11.6833 14H12.504V13ZM12.0151 11.8422L11.225 12.4552L11.2291 12.4603L12.0151 11.8422ZM11.277 11.1342L11.9208 10.369L11.9198 10.3681L11.277 11.1342ZM10.8731 10.8008L11.5068 10.0272L11.5068 10.0272L10.8731 10.8008ZM8.24546 7.60673L9.22351 7.39835L9.21926 7.37844L9.21422 7.35872L8.24546 7.60673ZM8.24218 7.57469H9.24218V7.48147L9.22494 7.38985L8.24218 7.57469ZM8.17984 7.09732L9.1765 7.01567L9.17557 7.00426L9.17437 6.99287L8.17984 7.09732ZM17.8124 7.09732L18.8091 7.17897L18.8093 7.17585L17.8124 7.09732ZM17.7501 7.57469L18.7188 7.82269L18.7268 7.79134L18.7328 7.75954L17.7501 7.57469ZM17.7468 7.60673L18.7247 7.81556L18.7468 7.71231V7.60673H17.7468ZM15.1147 10.8043L15.7486 11.5777H15.7486L15.1147 10.8043ZM14.7626 12.461C14.8556 12.343 15.0435 12.1654 15.3598 11.8988L14.0708 10.3696C13.7637 10.6284 13.4267 10.9249 13.1915 11.2234L14.7626 12.461ZM14.4687 13.1969C14.4931 13.0751 14.5306 12.9323 14.5842 12.7936C14.6388 12.6525 14.7007 12.5398 14.7632 12.4603L13.191 11.2241C12.7654 11.7654 12.5849 12.4192 12.5078 12.8031L14.4687 13.1969ZM13.4921 12H13.4882V14H13.4921V12ZM14.7671 13.4456C14.5974 13.2297 14.513 13.0065 14.4729 12.805L12.5113 13.195C12.6025 13.6535 12.8003 14.18 13.1949 14.6818L14.7671 13.4456ZM15.363 14.0066C15.0452 13.7392 14.8605 13.5659 14.7711 13.4507L13.1909 14.6766C13.4296 14.9843 13.7763 15.2853 14.0753 15.5369L15.363 14.0066ZM15.7567 14.3315C15.615 14.2154 15.4841 14.1082 15.362 14.0057L14.0764 15.5377C14.2092 15.6492 14.3497 15.7643 14.4893 15.8787L15.7567 14.3315ZM18.7287 18.0908C18.5396 17.203 18.0043 16.4585 17.4619 15.8709C16.9137 15.2771 16.2687 14.7509 15.7567 14.3315L14.4893 15.8787C15.0202 16.3135 15.5546 16.7534 15.9923 17.2275C16.4358 17.708 16.6929 18.1334 16.7726 18.5075L18.7287 18.0908ZM18.754 18.3312C18.754 18.3123 18.7561 18.1945 18.7194 18.0511L16.7819 18.5472C16.7679 18.4926 16.7603 18.441 16.7566 18.3949C16.7535 18.3552 16.754 18.3223 16.754 18.3312H18.754ZM18.836 19.1834C18.836 18.8243 18.7996 18.4764 18.7363 18.144L16.7716 18.5184C16.8133 18.7371 16.836 18.9594 16.836 19.1834H18.836ZM17.6857 22.5853C18.3862 21.6475 18.836 20.4605 18.836 19.1834H16.836C16.836 19.9889 16.5508 20.7626 16.0834 21.3883L17.6857 22.5853ZM16.1111 21.352L16.0915 21.3777L17.6776 22.5959L17.6973 22.5703L16.1111 21.352ZM13 24.9059C14.9336 24.9059 16.6435 23.9796 17.7051 22.56L16.1034 21.3623C15.4064 22.2943 14.2817 22.9059 13 22.9059V24.9059ZM8.30482 22.576C9.36937 23.9996 11.0713 24.9059 13 24.9059V22.9059C11.7135 22.9059 10.6005 22.3063 9.90651 21.3783L8.30482 22.576ZM8.24379 22.4847L8.25364 22.5007L9.95769 21.4537L9.94785 21.4377L8.24379 22.4847ZM7.16406 19.1834C7.16406 20.4525 7.58903 21.6189 8.29586 22.5612L9.89578 21.3611C9.43463 20.7463 9.16406 19.9969 9.16406 19.1834H7.16406ZM7.26375 18.1441C7.20043 18.4764 7.16406 18.8243 7.16406 19.1834H9.16406C9.16406 18.9594 9.18675 18.7371 9.22841 18.5184L7.26375 18.1441ZM7.24936 18.2992C7.24936 18.3081 7.24892 18.2751 7.25204 18.2355C7.25567 18.1894 7.26334 18.1378 7.27733 18.0832L9.21484 18.5792C9.25154 18.4358 9.24936 18.3181 9.24936 18.2992H7.24936ZM10.2475 14.3282C9.73511 14.7482 9.08927 15.2754 8.54033 15.8699C7.99744 16.4578 7.46091 17.2029 7.27141 18.0903L9.22732 18.508C9.30706 18.1345 9.56475 17.7086 10.0097 17.2267C10.4486 16.7515 10.9841 16.3104 11.5154 15.875L10.2475 14.3282ZM10.638 14.0057C10.5171 14.1072 10.3876 14.2134 10.2475 14.3282L11.5154 15.875C11.6535 15.7618 11.7923 15.648 11.9237 15.5377L10.638 14.0057ZM11.2335 13.4449C11.1405 13.5629 10.9526 13.7405 10.6364 14.0071L11.9254 15.5363C12.2325 15.2775 12.5695 14.981 12.8046 14.6825L11.2335 13.4449ZM11.5275 12.8031C11.487 13.0047 11.4017 13.2309 11.233 13.4456L12.8051 14.6818C13.2007 14.1788 13.3976 13.6489 13.4883 13.1969L11.5275 12.8031ZM12.504 14H12.5079V12H12.504V14ZM11.2291 12.4603C11.3683 12.6374 11.4696 12.9255 11.5232 13.195L13.4848 12.805C13.4071 12.4145 13.2263 11.7647 12.8012 11.2241L11.2291 12.4603ZM10.6331 11.8993C10.9509 12.1667 11.1356 12.34 11.225 12.4552L12.8053 11.2293C12.5666 10.9216 12.2198 10.6206 11.9208 10.369L10.6331 11.8993ZM10.2395 11.5744C10.3811 11.6905 10.512 11.7977 10.6341 11.9002L11.9198 10.3681C11.7869 10.2567 11.6465 10.1416 11.5068 10.0272L10.2395 11.5744ZM7.26741 7.81511C7.45655 8.70287 7.99185 9.4474 8.53423 10.0349C9.08239 10.6288 9.72743 11.155 10.2395 11.5744L11.5068 10.0272C10.9759 9.59235 10.4415 9.15253 10.0038 8.67835C9.56029 8.19791 9.30323 7.77254 9.22351 7.39835L7.26741 7.81511ZM7.24218 7.57469C7.24218 7.59359 7.24 7.71138 7.2767 7.85474L9.21422 7.35872C9.2282 7.41335 9.23587 7.46489 9.2395 7.51098C9.24262 7.55065 9.24218 7.5836 9.24218 7.57469H7.24218ZM7.18318 7.17897C7.19846 7.36551 7.22209 7.56113 7.25941 7.75954L9.22494 7.38985C9.20321 7.27428 9.18747 7.14952 9.1765 7.01567L7.18318 7.17897ZM7.16016 6.72247C7.16016 6.88615 7.16861 7.04277 7.18531 7.20177L9.17437 6.99287C9.16482 6.90197 9.16016 6.81509 9.16016 6.72247H7.16016ZM12.9961 1C9.79575 1 7.16016 3.54 7.16016 6.72247H9.16016C9.16016 4.68908 10.8553 3 12.9961 3V1ZM18.8321 6.72247C18.8321 3.54 16.1965 1 12.9961 1V3C15.137 3 16.8321 4.68908 16.8321 6.72247H18.8321ZM18.8093 7.17585C18.8186 7.05754 18.8321 6.89333 18.8321 6.72247H16.8321C16.8321 6.80151 16.8258 6.8872 16.8155 7.01879L18.8093 7.17585ZM18.7328 7.75954C18.7701 7.56113 18.7938 7.36551 18.809 7.17897L16.8157 7.01567C16.8048 7.14951 16.789 7.27427 16.7673 7.38985L18.7328 7.75954ZM18.7468 7.60673C18.7468 7.59782 18.7472 7.63077 18.7441 7.67044C18.7405 7.71653 18.7328 7.76806 18.7188 7.82269L16.7813 7.3267C16.7446 7.47005 16.7468 7.58784 16.7468 7.60673H18.7468ZM15.7486 11.5777C16.261 11.1577 16.9069 10.6305 17.4558 10.036C17.9987 9.4481 18.5352 8.703 18.7247 7.81556L16.7688 7.39791C16.6891 7.77136 16.4314 8.19734 15.9865 8.67915C15.5476 9.15442 15.012 9.59551 14.4808 10.0309L15.7486 11.5777ZM15.3581 11.9002C15.479 11.7987 15.6086 11.6925 15.7486 11.5777L14.4808 10.0309C14.3427 10.1441 14.2038 10.2579 14.0725 10.3681L15.3581 11.9002Z" fill="white" mask="url(#path-1-outside-1_1072_3231)"/>
                                            <path d="M13.0008 11.5382C12.9384 11.4421 12.8728 11.346 12.8006 11.2563C12.571 10.9615 12.2429 10.6732 11.9247 10.4041C11.7934 10.2951 11.6524 10.1798 11.508 10.058C10.9306 9.58387 10.2613 9.03601 9.79212 8.46572C9.49684 8.10689 9.66417 7.56224 10.1202 7.44049C11.0552 7.1938 12.0165 7.06885 13.0008 7.06885C13.985 7.06885 14.9496 7.1938 15.8814 7.44049C16.3374 7.56224 16.508 8.10689 16.2094 8.46572C15.7403 9.03281 15.071 9.58066 14.4936 10.0548C14.3492 10.1734 14.2081 10.2887 14.0769 10.4008C13.7587 10.67 13.4306 10.9583 13.2009 11.2531C13.1287 11.3428 13.0631 11.4389 13.0008 11.535V11.5382Z" fill="white"/>
                                            <path d="M13.0134 22.9451C12.3212 22.9451 11.6552 22.7336 11.0449 22.3331C10.8678 22.2178 10.8776 21.8141 11.0646 21.7244C11.4714 21.529 11.9668 21.2406 12.4426 20.8241C12.7936 20.5198 13.2201 20.5742 13.5679 20.8978C13.9813 21.2823 14.4111 21.5578 14.8376 21.7468C15.0344 21.8333 15.0344 22.2627 14.8376 22.362C14.2995 22.6343 13.5318 22.9419 13.0134 22.9419V22.9451Z" fill="white"/>
                                        </svg>
                                        Генерируем…
                                    </span>
                                </button>
                            </div>
                        </form>
{{--                        <div class="w-form-done">--}}
{{--                            <div>Thank you! Your submission has been received!</div>--}}
{{--                        </div>--}}
{{--                        <div class="w-form-fail">--}}
{{--                            <div>Oops! Something went wrong while submitting the form.</div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="w-layout-grid favors-grid">
                        <button type="button" class="favors-item w-inline-block first" data-category="Продажи">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-1.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Продажи</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Контент">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-5.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Контент</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Рекрутинг">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-2.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Рекрутинг</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Бизнес">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-3.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Бизнес</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="IT">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-4.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">IT</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-blur-blue left"></div>
        <div class="shape-blur-blue bottom-right"></div>
        <div class="shape-blur-green more-top-margin"></div>
    </section>
    <section id="howWorkGrid" class="section border-top">
        <div class="container">
            <div  class="w-layout-grid how-work-grid">
                <div class="sticky-block">
                    <div class="h2-block left-align min-w">
                        <div class="flex-vertical center-aling-mobi">
                            <div class="focus-blue">3 простых шага</div>
                            <h2>Как это работает?</h2>
                        </div>
                        <div class="subheader center-aling-mobi">Запустите AI-Капсулу в 3 шага. Увеличьте свою продуктивность или автоматизируйте работу команды — <span class="focus-blue">больше времени, больше возможностей, больше прибыли!</span></div>
                    </div>
                </div>
                <div class="rows-block-how-we-work">
                    <div class="how-work-item">
                        <div class="heading-block fix-width">
                            <div class="heading center-aling-mobi">Вы выбираете сферу<br>и процесс</div>
                            <p class="center-aling-mobi">Выберите сферу и процесс — AI покажет, что можно <span class="focus-blue">автоматизировать и ускорить</span> с помощью технологий прямо сейчас. 🚀</p>
                        </div>
                        <div id="w-node-_8a29d9ff-1a91-5dba-2d95-7e29cd3a1450-9d9941ce" class="wrapper-image"><img src="{{ asset('images/capsules-1.png') }}" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" srcset="images/capsules-1-p-500.png 500w, {{ asset('images/capsules-1.png') }} 800w" alt="" class="how-work-img"></div>
                    </div>
                    <div class="how-work-item">
                        <div class="heading-block fix-width">
                            <div class="heading center-aling-mobi">Открываете AI капсулу</div>
                            <p class="center-aling-mobi">Внутри <span class="focus-blue">готовый AI-агент</span>, который сразу работает в вашем бизнесе. Интегрируйте его самостоятельно или с нашей помощью.</p>
                            <p class="center-aling-mobi">Еще <span class="focus-blue">нет нужной AI-Капсулы</span>? Мы создадим её под ваши задачи!</p>
                        </div>
                        <div id="w-node-_04bd535f-d738-8227-3c80-45ca6495b472-9d9941ce" class="wrapper-image"><img src="{{ asset('images/capsules-3.png') }}" loading="lazy" sizes="(max-width: 760px) 100vw, 760px" srcset="images/capsules-3-p-500.png 500w, {{ asset('images/capsules-3.png') }} 760w" alt="" class="how-work-img"></div>
                    </div>
                    <div class="how-work-item">
                        <div class="heading-block fix-width">
                            <div class="heading center-aling-mobi">Запускаете и комбинируете AI капсулы</div>
                            <p class="center-aling-mobi">AI берет на себя рутину, освобождая вам время для роста — как вашего <span class="focus-blue">бизнеса</span>, так и <span class="focus-blue">вас самих</span>.</p>
                        </div>
                        <div id="w-node-f9f06d7a-c496-cc25-6de8-463babb4fe9c-9d9941ce" class="wrapper-image"><img src="{{ asset('images/capsules-2.png') }}" loading="lazy" sizes="(max-width: 800px) 100vw, 800px" srcset="images/capsules-2-p-500.png 500w, {{ asset('images/capsules-2.png') }} 800w" alt="" class="how-work-img"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div data-w-id="b5ea0ea1-cfa2-e66a-7c81-9a006383d584" style="opacity:0" class="h2-block">
                <h2 class="center-aling">Почему AI — это прорыв для бизнеса?</h2>
                <div class="subheader">Каждая капсула — это готовое решение, которое автоматизирует рутину, экономит время вашей команды и повышает эффективность.</div>
            </div>
            <div class="w-layout-grid rows-grid gap-32">
                @if($capsules && $capsules->count())
                    @foreach($capsules as $capsule)
                        @php $isReady = $capsule->type === 'готовая'; @endphp
                        <div class="w-layout-grid blog-post-grid"
                             style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            <div class="blog-post-card-inf">
                                <div class="h2-block padding-left">
                                    <h3 class="more-size">{{ $capsule->title }}</h3>
                                    <div class="standart-text">{{ strip_tags( $capsule->content ) }}</div>
                                </div>
                                <div class="w-layout-grid advantages-grid">
                                    <div class="advantages-item">
                                        <div class="heading">Что автоматизирует?</div>
                                        <div class="flex-vertical gap-16">
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12.8796 2.25567C12.6724 2.2376 12.4637 2.26282 12.2668 2.32971C12.0699 2.3966 11.889 2.50372 11.7357 2.64424C11.5824 2.78477 11.46 2.95564 11.3763 3.14601C11.2925 3.33637 11.2493 3.54208 11.2493 3.75005V7.56286C11.2467 7.91665 11.3703 8.25978 11.598 8.53059C11.8257 8.8014 12.1425 8.98214 12.4915 9.04036C13.0491 9.13391 13.5689 9.38312 13.991 9.75926C14.4131 10.1354 14.7203 10.6232 14.8772 11.1663C15.0341 11.7095 15.0344 12.286 14.8779 12.8293C14.7214 13.3726 14.4146 13.8606 13.9928 14.2371C13.571 14.6136 13.0514 14.8632 12.4939 14.9572C11.9364 15.0513 11.3637 14.9858 10.8418 14.7685C10.3198 14.5511 9.86994 14.1907 9.54396 13.7287C9.21797 13.2668 9.02916 12.7221 8.99928 12.1575C8.96084 11.3869 9.11834 10.7513 9.46803 10.2582C9.67355 9.97149 9.77045 9.62107 9.74143 9.26953C9.7124 8.91798 9.55934 8.58821 9.30959 8.33911L6.72022 5.6888C6.57262 5.54119 6.39584 5.42602 6.20119 5.35065C6.00654 5.27527 5.79829 5.24135 5.58978 5.25106C5.38127 5.26076 5.17708 5.31388 4.99027 5.40701C4.80346 5.50015 4.63815 5.63125 4.5049 5.79192C2.94207 7.66503 2.14133 10.0577 2.26187 12.4941C2.38242 14.9306 3.41543 17.2325 5.15553 18.9422C6.97502 20.7474 9.43624 21.7572 11.9993 21.75H12.139C14.6745 21.7069 17.094 20.6804 18.8871 18.8872C20.6801 17.094 21.7064 14.6743 21.7493 12.1388C21.8196 7.04817 17.9233 2.70755 12.8796 2.25567ZM5.65428 6.74442L8.24272 9.38723V9.39286C7.8585 9.94424 7.61721 10.5824 7.54053 11.25H3.78303C3.93323 9.59262 4.58611 8.02061 5.65428 6.74442ZM3.78396 12.75H7.56209C7.71762 13.6716 8.15621 14.5218 8.81695 15.1827C9.47769 15.8436 10.3278 16.2824 11.2493 16.4382V20.2163C9.32838 20.0408 7.5297 19.1978 6.16585 17.8338C4.802 16.4698 3.95921 14.671 3.78396 12.75ZM17.8249 17.8257C16.4664 19.1936 14.6693 20.0391 12.7493 20.2135V16.4382C13.6184 16.2935 14.4252 15.8945 15.0677 15.2916C15.682 14.7193 16.1239 13.9866 16.3435 13.1763C16.5631 12.366 16.5517 11.5105 16.3105 10.7063C16.0693 9.90217 15.608 9.18154 14.9786 8.62587C14.3493 8.07021 13.5771 7.70167 12.7493 7.56192V3.75005C17.0168 4.13255 20.3121 7.80755 20.2493 12.1172C20.2198 14.2641 19.3493 16.3137 17.8249 17.8257Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21.4163 8.37562L12.4163 2.37562C12.293 2.29339 12.1482 2.24951 12 2.24951C11.8518 2.24951 11.707 2.29339 11.5837 2.37562L2.58375 8.37562C2.48101 8.44417 2.39679 8.53703 2.33857 8.64595C2.28034 8.75488 2.24992 8.87649 2.25 9V18.75C2.25 19.1478 2.40804 19.5294 2.68934 19.8107C2.97064 20.092 3.35218 20.25 3.75 20.25H20.25C20.6478 20.25 21.0294 20.092 21.3107 19.8107C21.592 19.5294 21.75 19.1478 21.75 18.75V9C21.7501 8.87649 21.7197 8.75488 21.6614 8.64595C21.6032 8.53703 21.519 8.44417 21.4163 8.37562ZM9.0675 14.25L3.75 18V10.4559L9.0675 14.25ZM10.6022 15H13.3978L18.7069 18.75H5.29312L10.6022 15ZM14.9325 14.25L20.25 10.4559V18L14.9325 14.25ZM12 3.90094L19.6791 9.02062L13.3978 13.5H10.6041L4.32281 9.02062L12 3.90094Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="standart-text">{{ $capsule->automates[0] }}</div>
                                            </div>
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21.4163 8.37562L12.4163 2.37562C12.293 2.29339 12.1482 2.24951 12 2.24951C11.8518 2.24951 11.707 2.29339 11.5837 2.37562L2.58375 8.37562C2.48101 8.44417 2.39679 8.53703 2.33857 8.64595C2.28034 8.75488 2.24992 8.87649 2.25 9V18.75C2.25 19.1478 2.40804 19.5294 2.68934 19.8107C2.97064 20.092 3.35218 20.25 3.75 20.25H20.25C20.6478 20.25 21.0294 20.092 21.3107 19.8107C21.592 19.5294 21.75 19.1478 21.75 18.75V9C21.7501 8.87649 21.7197 8.75488 21.6614 8.64595C21.6032 8.53703 21.519 8.44417 21.4163 8.37562ZM9.0675 14.25L3.75 18V10.4559L9.0675 14.25ZM10.6022 15H13.3978L18.7069 18.75H5.29312L10.6022 15ZM14.9325 14.25L20.25 10.4559V18L14.9325 14.25ZM12 3.90094L19.6791 9.02062L13.3978 13.5H10.6041L4.32281 9.02062L12 3.90094Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.2753 3.55599C14.3008 3.46081 14.3447 3.37158 14.4047 3.29339C14.4647 3.2152 14.5394 3.1496 14.6248 3.10032C14.7101 3.05104 14.8043 3.01906 14.902 3.0062C14.9996 2.99334 15.0989 2.99985 15.1941 3.02537C16.5844 3.38813 17.853 4.11497 18.869 5.13103C19.8851 6.14708 20.6119 7.41562 20.9747 8.80599C21.0002 8.90116 21.0067 9.00042 20.9939 9.09811C20.981 9.19579 20.949 9.28999 20.8997 9.37531C20.8505 9.46063 20.7849 9.53541 20.7067 9.59536C20.6285 9.65532 20.5393 9.69928 20.4441 9.72474C20.3807 9.74138 20.3155 9.74989 20.25 9.75005C20.0847 9.75005 19.9241 9.69545 19.793 9.59475C19.662 9.49405 19.5679 9.35288 19.5253 9.19318C19.2295 8.05817 18.6363 7.02259 17.8069 6.1932C16.9775 5.36381 15.9419 4.77061 14.8069 4.47474C14.7116 4.44938 14.6223 4.40549 14.544 4.34558C14.4657 4.28566 14.4 4.2109 14.3506 4.12557C14.3013 4.04024 14.2692 3.94601 14.2563 3.84828C14.2433 3.75054 14.2498 3.65122 14.2753 3.55599ZM14.0569 7.47474C15.3497 7.81974 16.1803 8.65037 16.5253 9.94318C16.5679 10.1029 16.662 10.244 16.793 10.3448C16.9241 10.4455 17.0847 10.5 17.25 10.5001C17.3155 10.4999 17.3807 10.4914 17.4441 10.4747C17.5393 10.4493 17.6285 10.4053 17.7067 10.3454C17.7849 10.2854 17.8505 10.2106 17.8997 10.1253C17.949 10.04 17.981 9.94579 17.9939 9.84811C18.0067 9.75042 18.0002 9.65116 17.9747 9.55599C17.4947 7.75974 16.2403 6.50537 14.4441 6.02537C14.3489 5.99994 14.2497 5.99351 14.152 6.00644C14.0544 6.01938 13.9602 6.05141 13.8749 6.10073C13.7897 6.15005 13.7149 6.21568 13.655 6.29387C13.5951 6.37207 13.5512 6.46129 13.5258 6.55646C13.5004 6.65163 13.4939 6.75087 13.5069 6.84852C13.5198 6.94617 13.5518 7.04032 13.6012 7.12559C13.6505 7.21086 13.7161 7.28559 13.7943 7.34549C13.8725 7.4054 13.9617 7.44932 14.0569 7.47474ZM21.7388 16.4138C21.5716 17.6841 20.9477 18.8502 19.9837 19.6942C19.0196 20.5382 17.7813 21.0023 16.5 21.0001C9.05626 21.0001 3.00001 14.9438 3.00001 7.50005C2.99771 6.21876 3.4619 4.98045 4.30588 4.01639C5.14986 3.05234 6.31592 2.42847 7.58626 2.2613C7.9075 2.22208 8.2328 2.2878 8.51362 2.44865C8.79444 2.60951 9.0157 2.85686 9.14438 3.1538L11.1244 7.57412V7.58537C11.2229 7.81267 11.2636 8.06083 11.2428 8.30769C11.222 8.55455 11.1404 8.79242 11.0053 9.00005C10.9884 9.02537 10.9706 9.0488 10.9519 9.07224L9.00001 11.386C9.7022 12.8129 11.1947 14.2922 12.6403 14.9963L14.9222 13.0547C14.9446 13.0359 14.9681 13.0184 14.9925 13.0022C15.2 12.8639 15.4387 12.7794 15.687 12.7565C15.9353 12.7336 16.1854 12.7729 16.4147 12.871L16.4269 12.8766L20.8434 14.8557C21.1409 14.9839 21.3889 15.205 21.5503 15.4858C21.7116 15.7667 21.7778 16.0922 21.7388 16.4138ZM20.25 16.2263C20.25 16.2263 20.2434 16.2263 20.2397 16.2263L15.8334 14.2529L13.5506 16.1944C13.5285 16.2132 13.5053 16.2307 13.4813 16.2469C13.2654 16.3909 13.0159 16.4765 12.7571 16.4952C12.4983 16.5139 12.239 16.4652 12.0047 16.3538C10.2488 15.5054 8.49845 13.7682 7.64907 12.031C7.5366 11.7984 7.48613 11.5406 7.50255 11.2827C7.51898 11.0249 7.60174 10.7756 7.74282 10.5591C7.75872 10.5337 7.77659 10.5096 7.79626 10.4869L9.75001 8.17037L7.78126 3.76412C7.78089 3.76038 7.78089 3.75661 7.78126 3.75287C6.87212 3.87146 6.03739 4.31739 5.43339 5.00716C4.8294 5.69693 4.49755 6.58322 4.50001 7.50005C4.50348 10.6816 5.76888 13.7318 8.01856 15.9815C10.2682 18.2312 13.3185 19.4966 16.5 19.5001C17.4163 19.5032 18.3023 19.1725 18.9925 18.5698C19.6827 17.9671 20.1297 17.1337 20.25 16.2254V16.2263Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="standart-text">{{ $capsule->automates[1] }}</div>
                                            </div>
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.4994 7.50002C13.4994 7.30111 13.5784 7.11034 13.719 6.96969C13.8597 6.82904 14.0504 6.75002 14.2494 6.75002H23.2494C23.4483 6.75002 23.639 6.82904 23.7797 6.96969C23.9203 7.11034 23.9994 7.30111 23.9994 7.50002C23.9994 7.69893 23.9203 7.8897 23.7797 8.03035C23.639 8.171 23.4483 8.25002 23.2494 8.25002H14.2494C14.0504 8.25002 13.8597 8.171 13.719 8.03035C13.5784 7.8897 13.4994 7.69893 13.4994 7.50002ZM23.2494 11.25H14.2494C14.0504 11.25 13.8597 11.329 13.719 11.4697C13.5784 11.6103 13.4994 11.8011 13.4994 12C13.4994 12.1989 13.5784 12.3897 13.719 12.5304C13.8597 12.671 14.0504 12.75 14.2494 12.75H23.2494C23.4483 12.75 23.639 12.671 23.7797 12.5304C23.9203 12.3897 23.9994 12.1989 23.9994 12C23.9994 11.8011 23.9203 11.6103 23.7797 11.4697C23.639 11.329 23.4483 11.25 23.2494 11.25ZM23.2494 15.75H16.4994C16.3004 15.75 16.1097 15.829 15.969 15.9697C15.8284 16.1103 15.7494 16.3011 15.7494 16.5C15.7494 16.6989 15.8284 16.8897 15.969 17.0304C16.1097 17.171 16.3004 17.25 16.4994 17.25H23.2494C23.4483 17.25 23.639 17.171 23.7797 17.0304C23.9203 16.8897 23.9994 16.6989 23.9994 16.5C23.9994 16.3011 23.9203 16.1103 23.7797 15.9697C23.639 15.829 23.4483 15.75 23.2494 15.75ZM14.2259 17.8125C14.2504 17.9079 14.2559 18.0072 14.242 18.1048C14.2282 18.2023 14.1952 18.2962 14.1451 18.3809C14.0949 18.4657 14.0286 18.5398 13.9498 18.599C13.871 18.6581 13.7813 18.7012 13.6859 18.7256C13.6248 18.7421 13.5617 18.7503 13.4984 18.75C13.3321 18.7501 13.1704 18.6949 13.0389 18.5931C12.9074 18.4912 12.8134 18.3486 12.7719 18.1875C12.1944 15.9431 9.92748 14.25 7.49841 14.25C5.06935 14.25 2.80248 15.9422 2.22498 18.1875C2.17525 18.3802 2.05101 18.5453 1.87959 18.6464C1.70817 18.7475 1.50361 18.7763 1.31092 18.7266C1.11822 18.6769 0.953169 18.5526 0.852075 18.3812C0.750981 18.2098 0.722125 18.0052 0.771853 17.8125C1.29592 15.7772 2.81935 14.1291 4.75248 13.3125C4.00813 12.7392 3.4619 11.9473 3.1904 11.0478C2.9189 10.1484 2.93573 9.18648 3.23855 8.29707C3.54137 7.40766 4.11498 6.63535 4.87893 6.08843C5.64289 5.54152 6.55887 5.24744 7.49841 5.24744C8.43796 5.24744 9.35394 5.54152 10.1179 6.08843C10.8819 6.63535 11.4555 7.40766 11.7583 8.29707C12.0611 9.18648 12.0779 10.1484 11.8064 11.0478C11.5349 11.9473 10.9887 12.7392 10.2444 13.3125C12.1784 14.1291 13.7019 15.7772 14.2259 17.8125ZM7.49935 12.75C8.0927 12.75 8.67272 12.5741 9.16606 12.2444C9.65941 11.9148 10.0439 11.4462 10.271 10.8981C10.4981 10.3499 10.5575 9.74669 10.4417 9.16475C10.326 8.58281 10.0402 8.04826 9.62067 7.6287C9.20112 7.20914 8.66657 6.92342 8.08462 6.80766C7.50268 6.69191 6.89948 6.75132 6.3513 6.97838C5.80312 7.20545 5.33459 7.58996 5.00494 8.08331C4.6753 8.57666 4.49935 9.15668 4.49935 9.75002C4.49935 10.5457 4.81542 11.3087 5.37803 11.8713C5.94064 12.434 6.7037 12.75 7.49935 12.75Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.4994 7.50002C13.4994 7.30111 13.5784 7.11034 13.719 6.96969C13.8597 6.82904 14.0504 6.75002 14.2494 6.75002H23.2494C23.4483 6.75002 23.639 6.82904 23.7797 6.96969C23.9203 7.11034 23.9994 7.30111 23.9994 7.50002C23.9994 7.69893 23.9203 7.8897 23.7797 8.03035C23.639 8.171 23.4483 8.25002 23.2494 8.25002H14.2494C14.0504 8.25002 13.8597 8.171 13.719 8.03035C13.5784 7.8897 13.4994 7.69893 13.4994 7.50002ZM23.2494 11.25H14.2494C14.0504 11.25 13.8597 11.329 13.719 11.4697C13.5784 11.6103 13.4994 11.8011 13.4994 12C13.4994 12.1989 13.5784 12.3897 13.719 12.5304C13.8597 12.671 14.0504 12.75 14.2494 12.75H23.2494C23.4483 12.75 23.639 12.671 23.7797 12.5304C23.9203 12.3897 23.9994 12.1989 23.9994 12C23.9994 11.8011 23.9203 11.6103 23.7797 11.4697C23.639 11.329 23.4483 11.25 23.2494 11.25ZM23.2494 15.75H16.4994C16.3004 15.75 16.1097 15.829 15.969 15.9697C15.8284 16.1103 15.7494 16.3011 15.7494 16.5C15.7494 16.6989 15.8284 16.8897 15.969 17.0304C16.1097 17.171 16.3004 17.25 16.4994 17.25H23.2494C23.4483 17.25 23.639 17.171 23.7797 17.0304C23.9203 16.8897 23.9994 16.6989 23.9994 16.5C23.9994 16.3011 23.9203 16.1103 23.7797 15.9697C23.639 15.829 23.4483 15.75 23.2494 15.75ZM14.2259 17.8125C14.2504 17.9079 14.2559 18.0072 14.242 18.1048C14.2282 18.2023 14.1952 18.2962 14.1451 18.3809C14.0949 18.4657 14.0286 18.5398 13.9498 18.599C13.871 18.6581 13.7813 18.7012 13.6859 18.7256C13.6248 18.7421 13.5617 18.7503 13.4984 18.75C13.3321 18.7501 13.1704 18.6949 13.0389 18.5931C12.9074 18.4912 12.8134 18.3486 12.7719 18.1875C12.1944 15.9431 9.92748 14.25 7.49841 14.25C5.06935 14.25 2.80248 15.9422 2.22498 18.1875C2.17525 18.3802 2.05101 18.5453 1.87959 18.6464C1.70817 18.7475 1.50361 18.7763 1.31092 18.7266C1.11822 18.6769 0.953169 18.5526 0.852075 18.3812C0.750981 18.2098 0.722125 18.0052 0.771853 17.8125C1.29592 15.7772 2.81935 14.1291 4.75248 13.3125C4.00813 12.7392 3.4619 11.9473 3.1904 11.0478C2.9189 10.1484 2.93573 9.18648 3.23855 8.29707C3.54137 7.40766 4.11498 6.63535 4.87893 6.08843C5.64289 5.54152 6.55887 5.24744 7.49841 5.24744C8.43796 5.24744 9.35394 5.54152 10.1179 6.08843C10.8819 6.63535 11.4555 7.40766 11.7583 8.29707C12.0611 9.18648 12.0779 10.1484 11.8064 11.0478C11.5349 11.9473 10.9887 12.7392 10.2444 13.3125C12.1784 14.1291 13.7019 15.7772 14.2259 17.8125ZM7.49935 12.75C8.0927 12.75 8.67272 12.5741 9.16606 12.2444C9.65941 11.9148 10.0439 11.4462 10.271 10.8981C10.4981 10.3499 10.5575 9.74669 10.4417 9.16475C10.326 8.58281 10.0402 8.04826 9.62067 7.6287C9.20112 7.20914 8.66657 6.92342 8.08462 6.80766C7.50268 6.69191 6.89948 6.75132 6.3513 6.97838C5.80312 7.20545 5.33459 7.58996 5.00494 8.08331C4.6753 8.57666 4.49935 9.15668 4.49935 9.75002C4.49935 10.5457 4.81542 11.3087 5.37803 11.8713C5.94064 12.434 6.7037 12.75 7.49935 12.75Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div
                                                    class="standart-text">{{ $capsule->automates[2] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advantages-item">
                                        <div class="heading">Ожидаемый эффект:</div>
                                        <div class="flex-vertical gap-16">
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M22.25 19.5C22.25 19.6989 22.171 19.8897 22.0303 20.0303C21.8897 20.171 21.6989 20.25 21.5 20.25H3.5C3.30109 20.25 3.11032 20.171 2.96967 20.0303C2.82902 19.8897 2.75 19.6989 2.75 19.5V4.5C2.75 4.30109 2.82902 4.11032 2.96967 3.96967C3.11032 3.82902 3.30109 3.75 3.5 3.75C3.69891 3.75 3.88968 3.82902 4.03033 3.96967C4.17098 4.11032 4.25 4.30109 4.25 4.5V14.6897L8.96937 9.96937C9.03903 9.89964 9.12175 9.84432 9.21279 9.80658C9.30384 9.76884 9.40144 9.74941 9.5 9.74941C9.59856 9.74941 9.69616 9.76884 9.78721 9.80658C9.87825 9.84432 9.96097 9.89964 10.0306 9.96937L12.5 12.4397L17.4397 7.5H15.5C15.3011 7.5 15.1103 7.42098 14.9697 7.28033C14.829 7.13968 14.75 6.94891 14.75 6.75C14.75 6.55109 14.829 6.36032 14.9697 6.21967C15.1103 6.07902 15.3011 6 15.5 6H19.25C19.4489 6 19.6397 6.07902 19.7803 6.21967C19.921 6.36032 20 6.55109 20 6.75V10.5C20 10.6989 19.921 10.8897 19.7803 11.0303C19.6397 11.171 19.4489 11.25 19.25 11.25C19.0511 11.25 18.8603 11.171 18.7197 11.0303C18.579 10.8897 18.5 10.6989 18.5 10.5V8.56031L13.0306 14.0306C12.961 14.1004 12.8783 14.1557 12.7872 14.1934C12.6962 14.2312 12.5986 14.2506 12.5 14.2506C12.4014 14.2506 12.3038 14.2312 12.2128 14.1934C12.1217 14.1557 12.039 14.1004 11.9694 14.0306L9.5 11.5603L4.25 16.8103V18.75H21.5C21.6989 18.75 21.8897 18.829 22.0303 18.9697C22.171 19.1103 22.25 19.3011 22.25 19.5Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M22.25 19.5C22.25 19.6989 22.171 19.8897 22.0303 20.0303C21.8897 20.171 21.6989 20.25 21.5 20.25H3.5C3.30109 20.25 3.11032 20.171 2.96967 20.0303C2.82902 19.8897 2.75 19.6989 2.75 19.5V4.5C2.75 4.30109 2.82902 4.11032 2.96967 3.96967C3.11032 3.82902 3.30109 3.75 3.5 3.75C3.69891 3.75 3.88968 3.82902 4.03033 3.96967C4.17098 4.11032 4.25 4.30109 4.25 4.5V13.3472L9.00594 9.1875C9.13536 9.07421 9.29978 9.00885 9.47165 9.00236C9.64353 8.99587 9.81241 9.04866 9.95 9.15188L15.4634 13.2872L21.0059 8.4375C21.0786 8.36556 21.1652 8.30925 21.2605 8.27201C21.3557 8.23478 21.4575 8.21741 21.5597 8.22097C21.6619 8.22454 21.7623 8.24896 21.8547 8.29275C21.9471 8.33653 22.0296 8.39875 22.0971 8.47558C22.1645 8.5524 22.2156 8.64222 22.2471 8.7395C22.2786 8.83678 22.2899 8.93948 22.2802 9.04128C22.2706 9.14307 22.2402 9.24182 22.191 9.33146C22.1418 9.42109 22.0748 9.49972 21.9941 9.5625L15.9941 14.8125C15.8646 14.9258 15.7002 14.9912 15.5283 14.9976C15.3565 15.0041 15.1876 14.9513 15.05 14.8481L9.53656 10.7147L4.25 15.3403V18.75H21.5C21.6989 18.75 21.8897 18.829 22.0303 18.9697C22.171 19.1103 22.25 19.3011 22.25 19.5Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="standart-text">{{ $capsule->expected[0] }}</div>
                                            </div>
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.75 2.25H7.25C6.85218 2.25 6.47064 2.40804 6.18934 2.68934C5.90804 2.97064 5.75 3.35218 5.75 3.75V7.125C5.75051 7.35778 5.80495 7.58727 5.90905 7.79548C6.01315 8.00368 6.16408 8.18493 6.35 8.325L11.2503 12L6.35 15.675C6.16408 15.8151 6.01315 15.9963 5.90905 16.2045C5.80495 16.4127 5.75051 16.6422 5.75 16.875V20.25C5.75 20.6478 5.90804 21.0294 6.18934 21.3107C6.47064 21.592 6.85218 21.75 7.25 21.75H17.75C18.1478 21.75 18.5294 21.592 18.8107 21.3107C19.092 21.0294 19.25 20.6478 19.25 20.25V16.9088C19.2495 16.6769 19.1955 16.4482 19.0922 16.2406C18.989 16.033 18.8393 15.8519 18.6547 15.7116L13.7441 12L18.6547 8.2875C18.8393 8.14742 18.9891 7.96658 19.0924 7.75908C19.1957 7.55158 19.2496 7.32303 19.25 7.09125V3.75C19.25 3.35218 19.092 2.97064 18.8107 2.68934C18.5294 2.40804 18.1478 2.25 17.75 2.25ZM17.75 3.75V5.25H7.25V3.75H17.75ZM17.75 20.25H7.25V16.875L12.5 12.9375L17.75 16.9078V20.25ZM12.5 11.0625L7.25 7.125V6.75H17.75V7.09125L12.5 11.0625Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.75 2.25H7.25C6.85218 2.25 6.47064 2.40804 6.18934 2.68934C5.90804 2.97064 5.75 3.35218 5.75 3.75V7.125C5.75051 7.35778 5.80495 7.58727 5.90905 7.79548C6.01315 8.00368 6.16408 8.18493 6.35 8.325L11.2503 12L6.35 15.675C6.16408 15.8151 6.01315 15.9963 5.90905 16.2045C5.80495 16.4127 5.75051 16.6422 5.75 16.875V20.25C5.75 20.6478 5.90804 21.0294 6.18934 21.3107C6.47064 21.592 6.85218 21.75 7.25 21.75H17.75C18.1478 21.75 18.5294 21.592 18.8107 21.3107C19.092 21.0294 19.25 20.6478 19.25 20.25V16.9088C19.2495 16.6769 19.1955 16.4482 19.0922 16.2406C18.989 16.033 18.8393 15.8519 18.6547 15.7116L13.7441 12L18.6547 8.2875C18.8393 8.14742 18.9891 7.96658 19.0924 7.75908C19.1957 7.55158 19.2496 7.32303 19.25 7.09125V3.75C19.25 3.35218 19.092 2.97064 18.8107 2.68934C18.5294 2.40804 18.1478 2.25 17.75 2.25ZM17.75 3.75V5.25H7.25V3.75H17.75ZM17.75 20.25H7.25V16.875L12.5 12.9375L17.75 16.9078V20.25ZM12.5 11.0625L7.25 7.125V6.75H17.75V7.09125L12.5 11.0625Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="standart-text">{{ $capsule->expected[1] }}</div>
                                            </div>
                                            <div class="grid-icon gap-12">
                                                <div class="icon-advantage w-embed">
                                                    @if($isReady)
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M19.1103 5.25844C17.9787 3.31875 16.43 2.25 14.75 2.25H10.25C8.57 2.25 7.02125 3.31875 5.88969 5.25844C4.83219 7.07062 4.25 9.46875 4.25 12C4.25 14.5312 4.83219 16.9294 5.88969 18.7416C7.02125 20.6812 8.57 21.75 10.25 21.75H14.75C16.43 21.75 17.9787 20.6812 19.1103 18.7416C20.1678 16.9294 20.75 14.5312 20.75 12C20.75 9.46875 20.1678 7.07062 19.1103 5.25844ZM19.2303 11.25H16.2303C16.1717 9.71096 15.8653 8.19145 15.3228 6.75H18.1906C18.7644 8.00437 19.1431 9.5625 19.2303 11.25ZM17.2991 5.25H14.6056C14.2924 4.70655 13.9146 4.2029 13.4806 3.75H14.75C15.6875 3.75 16.5688 4.3125 17.2991 5.25ZM5.75 12C5.75 7.52812 7.8125 3.75 10.25 3.75C12.6875 3.75 14.75 7.52812 14.75 12C14.75 16.4719 12.6875 20.25 10.25 20.25C7.8125 20.25 5.75 16.4719 5.75 12ZM14.75 20.25H13.4834C13.9174 19.7971 14.2952 19.2935 14.6084 18.75H17.3019C16.5688 19.6875 15.6875 20.25 14.75 20.25ZM18.1906 17.25H15.3237C15.8662 15.8085 16.1727 14.289 16.2313 12.75H19.2313C19.1431 14.4375 18.7644 15.9956 18.1906 17.25Z" fill="#60c987"></path>
                                                        </svg>
                                                    @else
                                                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.75 2.25H7.25C6.85218 2.25 6.47064 2.40804 6.18934 2.68934C5.90804 2.97064 5.75 3.35218 5.75 3.75V7.125C5.75051 7.35778 5.80495 7.58727 5.90905 7.79548C6.01315 8.00368 6.16408 8.18493 6.35 8.325L11.2503 12L6.35 15.675C6.16408 15.8151 6.01315 15.9963 5.90905 16.2045C5.80495 16.4127 5.75051 16.6422 5.75 16.875V20.25C5.75 20.6478 5.90804 21.0294 6.18934 21.3107C6.47064 21.592 6.85218 21.75 7.25 21.75H17.75C18.1478 21.75 18.5294 21.592 18.8107 21.3107C19.092 21.0294 19.25 20.6478 19.25 20.25V16.9088C19.2495 16.6769 19.1955 16.4482 19.0922 16.2406C18.989 16.033 18.8393 15.8519 18.6547 15.7116L13.7441 12L18.6547 8.2875C18.8393 8.14742 18.9891 7.96658 19.0924 7.75908C19.1957 7.55158 19.2496 7.32303 19.25 7.09125V3.75C19.25 3.35218 19.092 2.97064 18.8107 2.68934C18.5294 2.40804 18.1478 2.25 17.75 2.25ZM17.75 3.75V5.25H7.25V3.75H17.75ZM17.75 20.25H7.25V16.875L12.5 12.9375L17.75 16.9078V20.25ZM12.5 11.0625L7.25 7.125V6.75H17.75V7.09125L12.5 11.0625Z" fill="#56A0D9"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                                <div class="standart-text">{{ $capsule->expected[2] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-btn left-aling padding-left">
                                    @if($capsule->landing_url)
                                        <a href="{{ route('redirect-developed', ['id' => $capsule->id]) }}"
                                           class="blue-button {{$isReady ? 'green-color' : ''}} w-inline-block">
                                            <div class="icon-btn w-embed">
                                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div>Подключить капсулу</div>
                                        </a>
                                    @else
                                        <a href="{{route('capsule.default', ['slug' => $capsule->slug]) }}"
                                           class="blue-button {{$isReady ? 'green-color' : ''}} w-inline-block">
                                            <div class="icon-btn w-embed">
                                                <svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                                </svg>
                                            </div>
                                            <div>Подключить капсулу</div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="wrapper-post-card-image">
                                <img loading="lazy" src="{{ asset('images/' . $capsule->image . '.jpg') }}" alt="" class="post-card-image">
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div data-w-id="f4826863-4ad5-c810-80fb-e046826f1e82" style="opacity:0" class="wrapper-btn">
                <a href="{{ route('landing') }}" class="blue-button w-inline-block">
                    <div class="icon-btn w-embed"><svg width="27" height="26" viewbox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                            <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                            <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                        </svg></div>
                    <div>Все AI-Капсулы</div>
                </a>
            </div>
        </div>
    </section>
    <section class="section border-top">
        <div class="container">
            <div data-w-id="c2b06c12-5518-1341-374b-5f52c581daf6" style="opacity:0" class="h2-block max-width">
                <h2 class="center-aling">Откройте AI-Капсулу и начните<br>автоматизацию уже сегодня</h2>
                <div class="search-block">
                    <div class="form-search w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" data-wf-page-id="6613afc0b9b7fac29d9941ce" data-wf-element-id="7ed3e0c8-df03-323a-64f6-5f3992fc24db">
                            <div class="flex-vertical">
                                <input class="search-item w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Ваша сфера деятельности" type="text" id="name-2">
                                <div data-hover="false" data-delay="0" data-w-id="1ee6e070-e726-66b8-b843-f061940eec87" class="dropdown-categories w-dropdown">
                                    <div class="dropdown-toggle w-dropdown-toggle">
                                        <div class="category-item"><img src="{{ asset('images/marketing-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                            <div>Продажи</div>
                                        </div>
                                        <div class="icon-dropdown w-embed">
                                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 7.5L10 12.5L15 7.5" stroke="#717680" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <nav class="dropdown-list categories w-dropdown-list">
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Продажи">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/marketing-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Продажи</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Контент">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/sales-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Контент</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Рекрутинг">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/recruitment-and-hiring.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Рекрутинг</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="Бизнес">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/finances-шьп.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>Бизнес</div>
                                            </div>
                                        </button>
                                        <button type="button" class="dropdown-link w-inline-block" data-category="IT">
                                            <div class="flex-horizontal gap-8">
                                                <img src="{{ asset('images/it-img.png') }}" loading="lazy" alt="" class="image-dropdown">
                                                <div>IT</div>
                                            </div>
                                        </button>
                                    </nav>
                                </div>
                            </div>
                            <div class="wrapper-btn left-aling width-auto">
                                <button type="button" class="blue-button w-inline-block" id="submit-capsule-search2" style="min-width: 232px">
                                    <span class="button-text">Подобрать AI капсулу</span>
                                    <span class="button-spinner" style="display: none;">
                                        <svg class="spinner" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <mask id="path-1-outside-1_1072_3231" maskUnits="userSpaceOnUse" x="7.16016" y="1" width="12" height="24" fill="black">
                                                <rect fill="white" x="7.16016" y="1" width="12" height="24"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7153 11.1342C14.4036 11.3969 14.1411 11.634 13.9771 11.8422C13.6949 12.201 13.5539 12.6732 13.4882 13H13.4921C13.5578 13.33 13.6988 13.7048 13.981 14.0637C14.145 14.2751 14.4108 14.5122 14.7192 14.7717C14.8467 14.8787 14.9823 14.9898 15.123 15.1051C16.1659 15.9594 17.4818 17.0372 17.7507 18.2992C17.754 18.312 17.754 18.3216 17.754 18.3312C17.8065 18.6067 17.836 18.8919 17.836 19.1834C17.836 20.2247 17.4685 21.2051 16.8845 21.9868L16.9042 21.9612C16.025 23.137 14.6076 23.9059 13 23.9059C11.3924 23.9059 9.98493 23.153 9.10566 21.9772L9.09582 21.9612C8.51183 21.1826 8.16406 20.2247 8.16406 19.1834C8.16406 18.8919 8.19359 18.6067 8.24608 18.3312C8.24936 18.3184 8.24936 18.3088 8.24936 18.2992C8.5186 17.0383 9.8378 15.957 10.8815 15.1016C11.0205 14.9876 11.1547 14.8776 11.2809 14.7717C11.5925 14.509 11.855 14.2719 12.019 14.0637C12.3012 13.7048 12.4423 13.3268 12.5079 13H12.504C12.4384 12.67 12.2973 12.201 12.0151 11.8422C11.8511 11.6308 11.5854 11.3937 11.277 11.1342C11.1495 11.0272 11.0138 10.916 10.8731 10.8008C9.83019 9.94653 8.51432 8.86867 8.24546 7.60673C8.24218 7.59392 8.24218 7.5843 8.24218 7.57469C8.21265 7.4177 8.19296 7.25751 8.17984 7.09732C8.16672 6.97237 8.16016 6.85062 8.16016 6.72247C8.16016 4.11454 10.3255 2 12.9961 2C15.6667 2 17.8321 4.11454 17.8321 6.72247C17.8321 6.84742 17.8222 6.97237 17.8124 7.09732C17.7993 7.25751 17.7796 7.4177 17.7501 7.57469C17.7468 7.58751 17.7468 7.59712 17.7468 7.60673C17.4775 8.86762 16.1583 9.9489 15.1147 10.8043C14.9756 10.9183 14.8414 11.0283 14.7153 11.1342Z"/>
                                            </mask>
                                            <path d="M13.9771 11.8422L13.1915 11.2234L13.191 11.2241L13.9771 11.8422ZM14.7153 11.1342L14.0725 10.3681L14.0708 10.3696L14.7153 11.1342ZM13.4882 13L12.5078 12.8031L12.2675 14H13.4882V13ZM13.4921 13L14.4729 12.805L14.3129 12H13.4921V13ZM13.981 14.0637L14.7711 13.4507L14.7671 13.4456L13.981 14.0637ZM14.7192 14.7717L14.0753 15.5369L14.0764 15.5377L14.7192 14.7717ZM15.123 15.1051L14.4893 15.8787L14.4893 15.8787L15.123 15.1051ZM17.7507 18.2992L16.7726 18.5075L16.7769 18.5275L16.7819 18.5472L17.7507 18.2992ZM17.754 18.3312H16.754V18.4256L16.7716 18.5184L17.754 18.3312ZM16.8845 21.9868L16.0834 21.3883L17.6776 22.5959L16.8845 21.9868ZM16.9042 21.9612L17.7051 22.56L16.1111 21.352L16.9042 21.9612ZM9.10566 21.9772L8.25364 22.5007L8.27751 22.5395L8.30482 22.576L9.10566 21.9772ZM9.09582 21.9612L9.94785 21.4377L9.92359 21.3982L9.89578 21.3611L9.09582 21.9612ZM8.24608 18.3312L7.27733 18.0832L7.26959 18.1134L7.26375 18.1441L8.24608 18.3312ZM8.24936 18.2992L7.27141 18.0903L7.24936 18.1936V18.2992H8.24936ZM10.8815 15.1016L11.5154 15.875L11.5154 15.875L10.8815 15.1016ZM11.2809 14.7717L11.9237 15.5377L11.9254 15.5363L11.2809 14.7717ZM12.019 14.0637L12.8046 14.6825L12.8051 14.6818L12.019 14.0637ZM12.5079 13L13.4883 13.1969L13.7286 12H12.5079V13ZM12.504 13L11.5232 13.195L11.6833 14H12.504V13ZM12.0151 11.8422L11.225 12.4552L11.2291 12.4603L12.0151 11.8422ZM11.277 11.1342L11.9208 10.369L11.9198 10.3681L11.277 11.1342ZM10.8731 10.8008L11.5068 10.0272L11.5068 10.0272L10.8731 10.8008ZM8.24546 7.60673L9.22351 7.39835L9.21926 7.37844L9.21422 7.35872L8.24546 7.60673ZM8.24218 7.57469H9.24218V7.48147L9.22494 7.38985L8.24218 7.57469ZM8.17984 7.09732L9.1765 7.01567L9.17557 7.00426L9.17437 6.99287L8.17984 7.09732ZM17.8124 7.09732L18.8091 7.17897L18.8093 7.17585L17.8124 7.09732ZM17.7501 7.57469L18.7188 7.82269L18.7268 7.79134L18.7328 7.75954L17.7501 7.57469ZM17.7468 7.60673L18.7247 7.81556L18.7468 7.71231V7.60673H17.7468ZM15.1147 10.8043L15.7486 11.5777H15.7486L15.1147 10.8043ZM14.7626 12.461C14.8556 12.343 15.0435 12.1654 15.3598 11.8988L14.0708 10.3696C13.7637 10.6284 13.4267 10.9249 13.1915 11.2234L14.7626 12.461ZM14.4687 13.1969C14.4931 13.0751 14.5306 12.9323 14.5842 12.7936C14.6388 12.6525 14.7007 12.5398 14.7632 12.4603L13.191 11.2241C12.7654 11.7654 12.5849 12.4192 12.5078 12.8031L14.4687 13.1969ZM13.4921 12H13.4882V14H13.4921V12ZM14.7671 13.4456C14.5974 13.2297 14.513 13.0065 14.4729 12.805L12.5113 13.195C12.6025 13.6535 12.8003 14.18 13.1949 14.6818L14.7671 13.4456ZM15.363 14.0066C15.0452 13.7392 14.8605 13.5659 14.7711 13.4507L13.1909 14.6766C13.4296 14.9843 13.7763 15.2853 14.0753 15.5369L15.363 14.0066ZM15.7567 14.3315C15.615 14.2154 15.4841 14.1082 15.362 14.0057L14.0764 15.5377C14.2092 15.6492 14.3497 15.7643 14.4893 15.8787L15.7567 14.3315ZM18.7287 18.0908C18.5396 17.203 18.0043 16.4585 17.4619 15.8709C16.9137 15.2771 16.2687 14.7509 15.7567 14.3315L14.4893 15.8787C15.0202 16.3135 15.5546 16.7534 15.9923 17.2275C16.4358 17.708 16.6929 18.1334 16.7726 18.5075L18.7287 18.0908ZM18.754 18.3312C18.754 18.3123 18.7561 18.1945 18.7194 18.0511L16.7819 18.5472C16.7679 18.4926 16.7603 18.441 16.7566 18.3949C16.7535 18.3552 16.754 18.3223 16.754 18.3312H18.754ZM18.836 19.1834C18.836 18.8243 18.7996 18.4764 18.7363 18.144L16.7716 18.5184C16.8133 18.7371 16.836 18.9594 16.836 19.1834H18.836ZM17.6857 22.5853C18.3862 21.6475 18.836 20.4605 18.836 19.1834H16.836C16.836 19.9889 16.5508 20.7626 16.0834 21.3883L17.6857 22.5853ZM16.1111 21.352L16.0915 21.3777L17.6776 22.5959L17.6973 22.5703L16.1111 21.352ZM13 24.9059C14.9336 24.9059 16.6435 23.9796 17.7051 22.56L16.1034 21.3623C15.4064 22.2943 14.2817 22.9059 13 22.9059V24.9059ZM8.30482 22.576C9.36937 23.9996 11.0713 24.9059 13 24.9059V22.9059C11.7135 22.9059 10.6005 22.3063 9.90651 21.3783L8.30482 22.576ZM8.24379 22.4847L8.25364 22.5007L9.95769 21.4537L9.94785 21.4377L8.24379 22.4847ZM7.16406 19.1834C7.16406 20.4525 7.58903 21.6189 8.29586 22.5612L9.89578 21.3611C9.43463 20.7463 9.16406 19.9969 9.16406 19.1834H7.16406ZM7.26375 18.1441C7.20043 18.4764 7.16406 18.8243 7.16406 19.1834H9.16406C9.16406 18.9594 9.18675 18.7371 9.22841 18.5184L7.26375 18.1441ZM7.24936 18.2992C7.24936 18.3081 7.24892 18.2751 7.25204 18.2355C7.25567 18.1894 7.26334 18.1378 7.27733 18.0832L9.21484 18.5792C9.25154 18.4358 9.24936 18.3181 9.24936 18.2992H7.24936ZM10.2475 14.3282C9.73511 14.7482 9.08927 15.2754 8.54033 15.8699C7.99744 16.4578 7.46091 17.2029 7.27141 18.0903L9.22732 18.508C9.30706 18.1345 9.56475 17.7086 10.0097 17.2267C10.4486 16.7515 10.9841 16.3104 11.5154 15.875L10.2475 14.3282ZM10.638 14.0057C10.5171 14.1072 10.3876 14.2134 10.2475 14.3282L11.5154 15.875C11.6535 15.7618 11.7923 15.648 11.9237 15.5377L10.638 14.0057ZM11.2335 13.4449C11.1405 13.5629 10.9526 13.7405 10.6364 14.0071L11.9254 15.5363C12.2325 15.2775 12.5695 14.981 12.8046 14.6825L11.2335 13.4449ZM11.5275 12.8031C11.487 13.0047 11.4017 13.2309 11.233 13.4456L12.8051 14.6818C13.2007 14.1788 13.3976 13.6489 13.4883 13.1969L11.5275 12.8031ZM12.504 14H12.5079V12H12.504V14ZM11.2291 12.4603C11.3683 12.6374 11.4696 12.9255 11.5232 13.195L13.4848 12.805C13.4071 12.4145 13.2263 11.7647 12.8012 11.2241L11.2291 12.4603ZM10.6331 11.8993C10.9509 12.1667 11.1356 12.34 11.225 12.4552L12.8053 11.2293C12.5666 10.9216 12.2198 10.6206 11.9208 10.369L10.6331 11.8993ZM10.2395 11.5744C10.3811 11.6905 10.512 11.7977 10.6341 11.9002L11.9198 10.3681C11.7869 10.2567 11.6465 10.1416 11.5068 10.0272L10.2395 11.5744ZM7.26741 7.81511C7.45655 8.70287 7.99185 9.4474 8.53423 10.0349C9.08239 10.6288 9.72743 11.155 10.2395 11.5744L11.5068 10.0272C10.9759 9.59235 10.4415 9.15253 10.0038 8.67835C9.56029 8.19791 9.30323 7.77254 9.22351 7.39835L7.26741 7.81511ZM7.24218 7.57469C7.24218 7.59359 7.24 7.71138 7.2767 7.85474L9.21422 7.35872C9.2282 7.41335 9.23587 7.46489 9.2395 7.51098C9.24262 7.55065 9.24218 7.5836 9.24218 7.57469H7.24218ZM7.18318 7.17897C7.19846 7.36551 7.22209 7.56113 7.25941 7.75954L9.22494 7.38985C9.20321 7.27428 9.18747 7.14952 9.1765 7.01567L7.18318 7.17897ZM7.16016 6.72247C7.16016 6.88615 7.16861 7.04277 7.18531 7.20177L9.17437 6.99287C9.16482 6.90197 9.16016 6.81509 9.16016 6.72247H7.16016ZM12.9961 1C9.79575 1 7.16016 3.54 7.16016 6.72247H9.16016C9.16016 4.68908 10.8553 3 12.9961 3V1ZM18.8321 6.72247C18.8321 3.54 16.1965 1 12.9961 1V3C15.137 3 16.8321 4.68908 16.8321 6.72247H18.8321ZM18.8093 7.17585C18.8186 7.05754 18.8321 6.89333 18.8321 6.72247H16.8321C16.8321 6.80151 16.8258 6.8872 16.8155 7.01879L18.8093 7.17585ZM18.7328 7.75954C18.7701 7.56113 18.7938 7.36551 18.809 7.17897L16.8157 7.01567C16.8048 7.14951 16.789 7.27427 16.7673 7.38985L18.7328 7.75954ZM18.7468 7.60673C18.7468 7.59782 18.7472 7.63077 18.7441 7.67044C18.7405 7.71653 18.7328 7.76806 18.7188 7.82269L16.7813 7.3267C16.7446 7.47005 16.7468 7.58784 16.7468 7.60673H18.7468ZM15.7486 11.5777C16.261 11.1577 16.9069 10.6305 17.4558 10.036C17.9987 9.4481 18.5352 8.703 18.7247 7.81556L16.7688 7.39791C16.6891 7.77136 16.4314 8.19734 15.9865 8.67915C15.5476 9.15442 15.012 9.59551 14.4808 10.0309L15.7486 11.5777ZM15.3581 11.9002C15.479 11.7987 15.6086 11.6925 15.7486 11.5777L14.4808 10.0309C14.3427 10.1441 14.2038 10.2579 14.0725 10.3681L15.3581 11.9002Z" fill="white" mask="url(#path-1-outside-1_1072_3231)"/>
                                            <path d="M13.0008 11.5382C12.9384 11.4421 12.8728 11.346 12.8006 11.2563C12.571 10.9615 12.2429 10.6732 11.9247 10.4041C11.7934 10.2951 11.6524 10.1798 11.508 10.058C10.9306 9.58387 10.2613 9.03601 9.79212 8.46572C9.49684 8.10689 9.66417 7.56224 10.1202 7.44049C11.0552 7.1938 12.0165 7.06885 13.0008 7.06885C13.985 7.06885 14.9496 7.1938 15.8814 7.44049C16.3374 7.56224 16.508 8.10689 16.2094 8.46572C15.7403 9.03281 15.071 9.58066 14.4936 10.0548C14.3492 10.1734 14.2081 10.2887 14.0769 10.4008C13.7587 10.67 13.4306 10.9583 13.2009 11.2531C13.1287 11.3428 13.0631 11.4389 13.0008 11.535V11.5382Z" fill="white"/>
                                            <path d="M13.0134 22.9451C12.3212 22.9451 11.6552 22.7336 11.0449 22.3331C10.8678 22.2178 10.8776 21.8141 11.0646 21.7244C11.4714 21.529 11.9668 21.2406 12.4426 20.8241C12.7936 20.5198 13.2201 20.5742 13.5679 20.8978C13.9813 21.2823 14.4111 21.5578 14.8376 21.7468C15.0344 21.8333 15.0344 22.2627 14.8376 22.362C14.2995 22.6343 13.5318 22.9419 13.0134 22.9419V22.9451Z" fill="white"/>
                                        </svg>
                                        Генерируем…
                                    </span>
                                </button>

                            </div>
                        </form>
{{--                        <div class="w-form-done">--}}
{{--                            <div>Thank you! Your submission has been received!</div>--}}
{{--                        </div>--}}
{{--                        <div class="w-form-fail">--}}
{{--                            <div>Oops! Something went wrong while submitting the form.</div>--}}
{{--                        </div>--}}
                    </div>
                    <div class="w-layout-grid favors-grid">
                        <button type="button" class="favors-item w-inline-block first" data-category="Продажи">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-1.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Продажи</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Контент">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-5.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Контент</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Рекрутинг">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-2.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Рекрутинг</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="Бизнес">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-3.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">Бизнес</div>
                        </button>
                        <button type="button" class="favors-item w-inline-block" data-category="IT">
                            <div class="wrap-img-favors">
                                <img src="{{ asset('images/small-4.jpg') }}" loading="lazy" alt="" class="image-favors">
                            </div>
                            <div class="heading min-h">IT</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container footer">
            <div class="w-layout-grid footer-grid">
                <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756eab4-b756eab1" class="footer-logo-block">
                    <div class="heading mirage-f">дщпщ</div>
                    <a href="{{ route('welcome') }}" class="footer-logo-link w-inline-block"><img src="{{ asset('images/logo-time-caps-white.svg') }}" loading="lazy" alt="" class="logo-footer"></a>
                </div>
                <div class="footer-link-block">
                    <div class="heading-footer">Навигация</div>
                    <a href="{{ route('landing') }}" class="footer-link">Наши AI-капсулы</a>
                    <a href="{{ route('welcome') }}" class="how-it-works-link footer-link">Как работает</a>
                    <a href="{{ route('partners') }}" class="footer-link">Партнерам</a>
                </div>
                <div class="footer-link-block">
                    <div class="heading-footer">Контакты</div>
                    <a href="tel:+73432435502" class="footer-link">+7 (343) 243-55-02</a>
                    <a href="mailto:hello@timecaps.pro" class="footer-link">hello@timecaps.pro</a>
                    <div class="footer-text">г. Екатеринбург, ул.<br>Библиотечная 25</div>
                    <div class="footer-text">ИНН: 6658420044</div>
                    <a href="https://t.me/Time_Capsule_AI" target="_blank" class="social-block w-inline-block"><img src="{{ asset('images/telegram-png.png') }}" loading="lazy" alt="" class="social-png"></a>
                </div>
                <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756ead3-b756eab1" class="footer-link-block">
                    <div class="wrapper-btn left-aling">
                        <a href="{{ route('consultation') }}" class="button-base footer w-button">Заказать консультацию</a>
                        <a href="{{ route('login') }}" class="button-base footer w-button">Войти</a>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-block">
                <div class="small-text-footer">© Since 2012 ООО &quot;РУ-Ю&quot;</div>
                <div class="legal-link-bl">
                    <a href="{{ route('privacypolicy') }}" class="legal-link">Политика конфиденциальности</a>
                    <a href="{{ route('termsandconditions') }}" class="legal-link">Условия обслуживания</a>
                </div>
            </div>
        </div>
    </section>
    @include('components.cookie-banner')
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>

<script>
    document.querySelectorAll('.how-it-works-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            var targetId = 'howWorkGrid';

            var targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({ behavior: 'smooth' });

            var navOverlay = document.querySelector('.w-nav-overlay');
            if (navOverlay) {
                navOverlay.style.display = 'none';
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var hash = window.location.hash;

        if (hash) {
            var targetElement = document.querySelector(hash);

            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputField = document.getElementById('name');
        const inputField2= document.getElementById('name-2');

        const submitButton = document.getElementById('submit-capsule-search');
        const submitButton2 = document.getElementById('submit-capsule-search2');

        const form1 = document.querySelector('#search-ai-capsules');
        const form2 = document.querySelector('#email-form');

        const clickableButtons = document.querySelectorAll('.dropdown-link, .favors-item');

        let selectedCategory = "Продажи";
        const defaultPlaceholder = "Ваша сфера деятельности";

        clickableButtons.forEach((btn) => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();

                clickableButtons.forEach((b) => b.classList.remove('first'));
                this.classList.add('first');

                selectedCategory = this.getAttribute('data-category');

                const newText = this.querySelector('div.flex-horizontal div')?.textContent.trim();
                const newImageSrc = this.querySelector('img')?.getAttribute('src');

                if (newText && newImageSrc) {
                    const parentDropdown = this.closest('.dropdown-categories');
                    if (parentDropdown) {
                        const categoryItem = parentDropdown.querySelector('.category-item');
                        if (categoryItem) {
                            categoryItem.querySelector('div').textContent = newText;
                            categoryItem.querySelector('img').setAttribute('src', newImageSrc);
                        }
                    }
                }
            });
        });

        inputField.addEventListener('input', () => {
            inputField.classList.remove('error');
            inputField.placeholder = defaultPlaceholder;
        });

        submitButton.addEventListener('click', function (e) {
            e.preventDefault();
            const industry = inputField.value.trim();

            if (!industry) {
                inputField.classList.add('error');
                inputField.value = "";
                inputField.placeholder = "Пожалуйста, введите сферу деятельности";
                return;
            }

            submitButton.classList.add('generating');
            submitButton.querySelector('.button-text').style.display = 'none';
            submitButton.querySelector('.button-spinner').style.display = 'flex';

            const params = new URLSearchParams({
                category: selectedCategory,
                industry: industry
            });

            window.location.href = `/capsules-page?${params.toString()}`;
        });

        form1.addEventListener('submit', function (e) {
            e.preventDefault();
            submitButton.click();
        });

        inputField2.addEventListener('input', () => {
            inputField2.classList.remove('error');
            inputField2.placeholder = defaultPlaceholder;
        });

        submitButton2.addEventListener('click', function (e) {
            e.preventDefault();
            const industry = inputField2.value.trim();

            if (!industry) {
                inputField2.classList.add('error');
                inputField2.value = "";
                inputField2.placeholder = "Пожалуйста, введите сферу деятельности";
                return;
            }

            submitButton2.classList.add('generating');
            submitButton2.querySelector('.button-text').style.display = 'none';
            submitButton2.querySelector('.button-spinner').style.display = 'flex';

            const params = new URLSearchParams({
                category: selectedCategory,
                industry: industry
            });

            window.location.href = `/capsules-page?${params.toString()}`;
        });

        form2.addEventListener('submit', function (e) {
            e.preventDefault();
            submitButton2.click();
        });
    });
</script>
</body>
<style>
    .search-item.error {
        border: 1px solid #EF4444 !important;
        background-color: #FFF8F7;
        color: #EF4444;
        font-size: 20px;
        box-shadow: 0 0 0 4px #eff0f6;
    }

    .search-item:focus{
        color: #4baeeb;
    }

    .w-input{
        font-size: 20px;
    }

    .search-item.error::placeholder {
        color: #EF4444;
    }

    /* Стили для серой кнопки */
    .generating {
        background-color: #ADB9C385 !important; /* Светло-серая */
        color: #FFFFFF !important; /* Текст серый */
        pointer-events: none;
    }

    /* Спиннер */
    .spinner {
        animation: spin 1s linear infinite;
        margin-right: 8px;
    }

    .button-spinner {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>
<style>
    @media (max-width: 768px) {
        .wrapper-post-card-image {
            order: -1;
        }
    }

    @media (max-width: 991px) {
        .wrapper-post-card-image {
            order: -1;
        }
    }
</style>
</html>
