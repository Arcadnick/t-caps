<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Tue Apr 01 2025 09:40:11 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67e5136bf4d6e968caa5072f" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>Consultation page</title>
    <meta content="Consultation page" property="og:title">
    <meta content="Consultation page" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800,900:cyrillic,cyrillic-ext,latin"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-out" data-easing2="ease-in-out" role="banner" class="navbar w-nav">
    <div class="nav-container">
        <a href="{{ route('welcome') }}" class="nav-logo w-nav-brand"><img src="{{ asset('images/logo-time-caps.svg') }}" loading="lazy" alt="" class="logo"></a>
        <div class="nav-container-col">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-menu-block">
                    <a href="{{ route('landing') }}" class="nav-link-block w-inline-block">
                        <div>Наши AI-капсулы</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <a href="{{ route('welcome') }}#howWorkGrid" class="nav-link-block w-inline-block">
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
                        <a href="{{ route('consultation') }}" aria-current="page" class="button-base navbar-btn w-inline-block w--current">
                            <div>Заказать консультацию</div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="nav-right-col">
                <a href="https://t.me/Time_Capsule_AI" target="_blank" class="button-base w-inline-block"><img src="{{ asset('images/telegram_logo.svg') }}" loading="lazy" alt="" class="icon-whatsapp"></a>
                <a href="{{ route('consultation') }}" aria-current="page" class="button-base w-inline-block w--current">
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
<section class="hero-section min-height top-aling">
    <div class="container">
        <div data-w-id="78795549-880c-569d-71f1-96f409591285" style="opacity:0" class="login-block">
            <div class="heading-login-block">
                <div class="box-center-aling">
                    <img src="{{ asset('images/logo-mark-2.svg') }}" loading="lazy" alt="" class="logo-mark">
                </div>
                <div class="text-block center-aling gap-12">
                    <div class="heading-login">Закажите консультацию</div>
                    <div class="standart-text min-s">Введите свои контактные данные и время когда будет удобно с Вами связаться</div>
                </div>
            </div>
            <div class="form-login-wrapper w-form">
                <form id="email-form" name="email-form" method="POST" action="{{ route('requests.store') }}" class="form-block">
                   @csrf
                    <div class="rows-form-block">
                        <div class="flex-vertical gap-6">
                            <label for="Name-consultation-page" class="input-text">Как к вам обращаться?</label>
                            <input class="text-field w-input" maxlength="256" name="user_name" data-name="Name-consultation-page" placeholder="Введите Ваше имя" type="text" id="Name-consultation-page" required="">
                        </div>
                        <div class="flex-vertical gap-6">
                            <label for="phone" class="input-text">Номер телефона</label>
                            <input class="text-field w-input" maxlength="18" name="phone" data-name="phone" placeholder="+7 (___) ___-__-__" type="text" id="phone" required>
                        </div>

                        <div class="flex-horizontal top-aling mobi-horizontal">
                            <div data-hover="false" data-delay="0" data-w-id="36d58a68-3920-b344-64e6-188e4e4332b7" class="dropdown-calendar w-dropdown">
                                <div class="dropdown-toggle-calendar w-dropdown-toggle">
                                    <div class="flex-horizontal gap-8">
                                        <div class="icon-small-20 w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.25 2.5H14.375V1.875C14.375 1.70924 14.3092 1.55027 14.1919 1.43306C14.0747 1.31585 13.9158 1.25 13.75 1.25C13.5842 1.25 13.4253 1.31585 13.3081 1.43306C13.1908 1.55027 13.125 1.70924 13.125 1.875V2.5H6.875V1.875C6.875 1.70924 6.80915 1.55027 6.69194 1.43306C6.57473 1.31585 6.41576 1.25 6.25 1.25C6.08424 1.25 5.92527 1.31585 5.80806 1.43306C5.69085 1.55027 5.625 1.70924 5.625 1.875V2.5H3.75C3.41848 2.5 3.10054 2.6317 2.86612 2.86612C2.6317 3.10054 2.5 3.41848 2.5 3.75V16.25C2.5 16.5815 2.6317 16.8995 2.86612 17.1339C3.10054 17.3683 3.41848 17.5 3.75 17.5H16.25C16.5815 17.5 16.8995 17.3683 17.1339 17.1339C17.3683 16.8995 17.5 16.5815 17.5 16.25V3.75C17.5 3.41848 17.3683 3.10054 17.1339 2.86612C16.8995 2.6317 16.5815 2.5 16.25 2.5ZM5.625 3.75V4.375C5.625 4.54076 5.69085 4.69973 5.80806 4.81694C5.92527 4.93415 6.08424 5 6.25 5C6.41576 5 6.57473 4.93415 6.69194 4.81694C6.80915 4.69973 6.875 4.54076 6.875 4.375V3.75H13.125V4.375C13.125 4.54076 13.1908 4.69973 13.3081 4.81694C13.4253 4.93415 13.5842 5 13.75 5C13.9158 5 14.0747 4.93415 14.1919 4.81694C14.3092 4.69973 14.375 4.54076 14.375 4.375V3.75H16.25V6.25H3.75V3.75H5.625ZM16.25 16.25H3.75V7.5H16.25V16.25ZM8.75 9.375V14.375C8.75 14.5408 8.68415 14.6997 8.56694 14.8169C8.44973 14.9342 8.29076 15 8.125 15C7.95924 15 7.80027 14.9342 7.68306 14.8169C7.56585 14.6997 7.5 14.5408 7.5 14.375V10.3859L7.15469 10.5594C7.00633 10.6336 6.83459 10.6458 6.67723 10.5933C6.51988 10.5409 6.3898 10.428 6.31562 10.2797C6.24145 10.1313 6.22924 9.95959 6.28169 9.80223C6.33414 9.64488 6.44696 9.5148 6.59531 9.44062L7.84531 8.81562C7.94063 8.76793 8.04657 8.7454 8.15305 8.75018C8.25954 8.75497 8.36303 8.7869 8.45369 8.84296C8.54435 8.89902 8.61916 8.97733 8.67103 9.07045C8.72289 9.16357 8.75008 9.26841 8.75 9.375ZM13.3719 11.7539L11.875 13.75H13.125C13.2908 13.75 13.4497 13.8158 13.5669 13.9331C13.6842 14.0503 13.75 14.2092 13.75 14.375C13.75 14.5408 13.6842 14.6997 13.5669 14.8169C13.4497 14.9342 13.2908 15 13.125 15H10.625C10.5089 15 10.3952 14.9677 10.2964 14.9067C10.1977 14.8456 10.1179 14.7583 10.066 14.6545C10.0141 14.5507 9.9921 14.4345 10.0025 14.3189C10.0129 14.2033 10.0554 14.0929 10.125 14L12.3734 11.0023C12.4246 10.9343 12.4613 10.8564 12.4813 10.7737C12.5012 10.6909 12.5041 10.6049 12.4897 10.521C12.4752 10.4371 12.4438 10.357 12.3973 10.2856C12.3508 10.2143 12.2902 10.1532 12.2192 10.1062C12.1483 10.0591 12.0684 10.027 11.9846 10.0119C11.9008 9.99678 11.8148 9.99895 11.7319 10.0183C11.649 10.0376 11.5709 10.0737 11.5024 10.1243C11.4339 10.1749 11.3764 10.2389 11.3336 10.3125C11.2938 10.3858 11.2397 10.4505 11.1744 10.5026C11.1092 10.5547 11.0343 10.5932 10.9539 10.6158C10.8736 10.6385 10.7895 10.6448 10.7067 10.6344C10.6239 10.624 10.544 10.5972 10.4717 10.5555C10.3995 10.5137 10.3363 10.4579 10.2859 10.3914C10.2356 10.3248 10.1991 10.2488 10.1785 10.1679C10.158 10.087 10.1539 10.0028 10.1664 9.92033C10.179 9.83781 10.2079 9.75865 10.2516 9.6875C10.458 9.33022 10.7766 9.05103 11.1578 8.8932C11.5391 8.73537 11.9618 8.70772 12.3603 8.81453C12.7589 8.92133 13.1111 9.15664 13.3624 9.48397C13.6136 9.8113 13.7499 10.2124 13.75 10.625C13.7513 11.0326 13.6184 11.4293 13.3719 11.7539Z" fill="#717680"></path>
                                            </svg></div>
                                        <div id="selectedDate" class="standart-text">Дата</div>
                                    </div>
                                    <div class="icon-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 7.5L10 12.5L15 7.5" stroke="#717680" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                </div>
                                <nav class="dropdown-list calendar" style="margin-top: 10px">
                                    <input id="calendarInput" type="text" class="calendar-input" style="opacity:0; position:absolute; pointer-events:none;">
                                    <div id="calendarContainer" ></div>
                                </nav>
                            </div>
                            <div data-hover="false" data-delay="0" data-w-id="bdd0a6ec-53da-f7fb-7c29-2bf6e2c1398d" class="dropdown-calendar w-dropdown">
                                <div class="dropdown-toggle-time w-dropdown-toggle">
                                    <div class="flex-horizontal gap-8">
                                        <div class="icon-small-20 w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 1.875C8.39303 1.875 6.82214 2.35152 5.486 3.24431C4.14985 4.1371 3.10844 5.40605 2.49348 6.8907C1.87852 8.37535 1.71762 10.009 2.03112 11.5851C2.34463 13.1612 3.11846 14.6089 4.25476 15.7452C5.39106 16.8815 6.8388 17.6554 8.4149 17.9689C9.99099 18.2824 11.6247 18.1215 13.1093 17.5065C14.594 16.8916 15.8629 15.8502 16.7557 14.514C17.6485 13.1779 18.125 11.607 18.125 10C18.1227 7.84581 17.266 5.78051 15.7427 4.25727C14.2195 2.73403 12.1542 1.87727 10 1.875ZM10 16.875C8.64026 16.875 7.31105 16.4718 6.18046 15.7164C5.04987 14.9609 4.16868 13.8872 3.64833 12.6309C3.12798 11.3747 2.99183 9.99237 3.2571 8.65875C3.52238 7.32513 4.17716 6.10013 5.13864 5.13864C6.10013 4.17716 7.32514 3.52237 8.65876 3.2571C9.99238 2.99183 11.3747 3.12798 12.631 3.64833C13.8872 4.16868 14.9609 5.04987 15.7164 6.18045C16.4718 7.31104 16.875 8.64025 16.875 10C16.8729 11.8227 16.1479 13.5702 14.8591 14.8591C13.5702 16.1479 11.8227 16.8729 10 16.875ZM15 10C15 10.1658 14.9342 10.3247 14.8169 10.4419C14.6997 10.5592 14.5408 10.625 14.375 10.625H10C9.83424 10.625 9.67527 10.5592 9.55806 10.4419C9.44085 10.3247 9.375 10.1658 9.375 10V5.625C9.375 5.45924 9.44085 5.30027 9.55806 5.18306C9.67527 5.06585 9.83424 5 10 5C10.1658 5 10.3247 5.06585 10.4419 5.18306C10.5592 5.30027 10.625 5.45924 10.625 5.625V9.375H14.375C14.5408 9.375 14.6997 9.44085 14.8169 9.55806C14.9342 9.67527 15 9.83424 15 10Z" fill="#717680"></path>
                                            </svg></div>
                                        <div class="standart-text" id="selectedTime">Время</div>
                                        <input type="hidden" name="selected_time" id="selectedTimeInput">
                                    </div>
                                    <div class="icon-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 7.5L10 12.5L15 7.5" stroke="#717680" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                </div>
                                <nav class="dropdown-list time w-dropdown-list">
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>8:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>9:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>10:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>11:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>12:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>13:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>14:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>15:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>16:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>17:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                    <a href="#" class="dropdown-link-time w-inline-block">
                                        <div>18:00</div>
                                        <div class="check-dropdown w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16.6673 5L7.50065 14.1667L3.33398 10" stroke="#56AFD9" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg></div>
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-button-form">
                        <input type="submit" data-wait="Please wait..." class="form-button w-button" value="Оставить заявку">
{{--                        <input type="submit" data-wait="Please wait..." class="form-button white w-button" value="Отмена"></div>--}}
                    <input type="hidden" name="selected_date" id="selectedDateInput">
                    <input type="hidden" name="request_type" value="консультация">
                </form>
                <div class="w-form-fail">
                    <div>Что-то пошло не так. Попробуйте ещё раз.</div>
                </div>
            </div>
            <div class="w-form-done" style="background-color: transparent">
                <div class="form-header-block" style="width: 100%; grid-row-gap: 24px">
                    <div class="wrapper-shapes-benefits">
                        <img src="{{ asset('images/caps-2_1.png') }}" loading="lazy" alt="" class="img-small-caps">
                        <img src="{{ asset('images/success-cap.png') }}" loading="lazy" alt="" class="capsules-page-img">
                        <img src="{{ asset('images/caps-3.png') }}" loading="lazy" alt="" class="img-small-caps _3-v">
                        <img src="{{ asset('images/caps--4.png') }}" loading="lazy" alt="" class="img-small-caps _2-v">
                    </div>
                    <div class="form-heading">Спасибо!</div>
                    <div class="standart-text center-aling">Ваша заявка отправлена</div>
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
                <a href="{{ route('welcome') }}#howWorkGrid" class="footer-link">Как работает</a>
                <a href="{{ route('partners') }}" class="footer-link">Партнерам</a>
            </div>
            <div class="footer-link-block">
                <div class="heading-footer">Контакты</div>
                <a href="tel:+73432435502" class="footer-link">+7 (343) 243-55-02</a>
                <a href="mailto:support@ruyou.ru" class="footer-link">support@ruyou.ru</a>
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
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ru.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#calendarInput", {
            dateFormat: "d.m.Y",
            defaultDate: "today",
            locale:"ru",
            inline: true,
            appendTo: document.getElementById("calendarContainer"),
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById("selectedDate").innerText = dateStr;
                document.getElementById("selectedDateInput").value = dateStr;
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const timeLinks = document.querySelectorAll(".dropdown-link-time");
        const selectedTimeText = document.getElementById("selectedTime");
        const selectedTimeInput = document.getElementById("selectedTimeInput");

        timeLinks.forEach(link => {
            link.addEventListener("click", function (e) {
                e.preventDefault();

                timeLinks.forEach(l => l.classList.remove('is-selected'));

                this.classList.add('is-selected');

                const time = this.querySelector("div").innerText;
                selectedTimeText.innerText = time;
                selectedTimeInput.value = time;
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.form-block').on('submit', function (e) {
            e.preventDefault();

            let $form = $(this);
            let formData = $form.serialize();

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function () {
                    $form.hide();
                    $('.w-form-done').fadeIn();
                },
                error: function () {
                    $('.w-form-fail').fadeIn();
                }
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const phoneInput = document.getElementById('phone');

        phoneInput.addEventListener('input', function (e) {
            let x = phoneInput.value.replace(/\D/g, '').slice(1); // удаляем всё кроме цифр и +7
            let formatted = '+7';

            if (x.length > 0) {
                formatted += ' (' + x.substring(0, 3);
            }
            if (x.length >= 4) {
                formatted += ') ' + x.substring(3, 6);
            }
            if (x.length >= 7) {
                formatted += '-' + x.substring(6, 8);
            }
            if (x.length >= 9) {
                formatted += '-' + x.substring(8, 10);
            }

            phoneInput.value = formatted;
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const headingBlock = document.querySelector('.heading-login-block');
        const formElement = document.querySelector('#email-form');
        const successMessage = document.querySelector('.w-form-done');

        if (!headingBlock || !formElement || !successMessage) return;

        // Проверка при загрузке
        if (getComputedStyle(successMessage).display !== 'none') {
            headingBlock.style.display = 'none';
            formElement.style.display = 'none';
        }

        // Наблюдатель за изменением display: none → block
        const observer = new MutationObserver(() => {
            if (getComputedStyle(successMessage).display !== 'none') {
                headingBlock.style.display = 'none';
                formElement.style.display = 'none';
                observer.disconnect();
            }
        });

        observer.observe(successMessage, {
            attributes: true,
            attributeFilter: ['style'],
        });
    });
</script>



</body>
<style>
    .flatpickr-calendar {
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        width: 260px;
        font-family: Arial, sans-serif;
    }

    .flatpickr-months {
        padding: 10px 0;
    }

    .flatpickr-month {
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .flatpickr-current-month .flatpickr-monthDropdown-months {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        border: none;
        background: transparent;
        cursor: pointer;
        padding-right: 0;
    }

    .flatpickr-current-month .arrowUp,
    .flatpickr-current-month .arrowDown {
        display: none !important;
    }

    .flatpickr-current-month {
        font-size: 18px;
        font-weight: normal;
        color: #333;
    }

    .flatpickr-prev-month,
    .flatpickr-next-month {
        color: #333;
        padding: 5px;
    }

    .flatpickr-weekdays {
        background: transparent;
    }

    .flatpickr-weekday {
        font-size: 14px;
        color: #888;
        font-weight: normal;
        background: transparent;
    }

    .flatpickr-days {
        width: 100% !important;
    }

    .dayContainer {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        display: grid !important;
        grid-template-columns: repeat(7, 1fr) !important;
        justify-items: center !important;
    }

    .flatpickr-day {
        border-radius: 50%;
        max-width: 34px;
        height: 34px;
        line-height: 34px;
        margin: 2px;
        color: #333;
        font-size: 14px;
        width: 34px !important;
        position: relative !important;
        left: auto !important;
        right: auto !important;
        margin: 2px auto !important;
    }

    .flatpickr-day.prevMonthDay,
    .flatpickr-day.nextMonthDay {
        color: #ccc;
    }

    .flatpickr-day.selected {
        background: #4b8bfa;
        border-color: #4b8bfa;
        color: white;
    }

    .flatpickr-day.today {
        border-color: #e6e6e6;
    }

    .flatpickr-day:hover {
        background: #f0f0f0;
    }

    .flatpickr-calendar .flatpickr-day:nth-child(7n),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-1),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-2),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-3),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-4),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-5),
    .flatpickr-calendar .flatpickr-day:nth-child(7n-6) {
        width: 34px !important;
        position: relative !important;
        margin: 2px auto !important;
    }

    .flatpickr-innerContainer {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-right: 0;
    }

    .cur-month {
        font-weight: 500 !important;
    }

    .flatpickr-current-month {
        padding-top: 0;
    }
</style>
</html>
