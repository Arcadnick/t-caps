<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Tue Apr 01 2025 09:40:11 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67e29442a77d567009f1f460" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>Auto-response page</title>
    <meta content="Auto-response page" property="og:title">
    <meta content="Auto-response page" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('https://fonts.googleapis.com') }}" rel="preconnect">
    <link href="{{ asset('https://fonts.gstatic.com') }}" rel="preconnect" crossorigin="anonymous">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js') }}" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800,900:cyrillic,cyrillic-ext,latin"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-out" data-easing2="ease-in-out" role="banner" class="navbar w-nav">
    <div class="nav-container">
        <a href="{{ route('welcome') }}" class="nav-logo w-nav-brand"><img src="{{ asset('images/logo-time-caps.svg') }}" loading="lazy" alt="" class="logo"></a>
        <div class="nav-container-col">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-menu-block">
                    <a href="{{ route('landing') }}" class="nav-link-block w-inline-block">
                        <div>AI-капсулы</div>
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
            <div class="hero-shapes-wrapper"><img src="{{ asset('images/caps-1_1.png') }}" loading="lazy" alt="" class="hero-img"><img src="{{ asset('images/caps-small-3.png') }}" loading="lazy" alt="" class="hero-img small"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" alt="" class="hero-img small _2-v"></div>
            <div data-w-id="696c1e16-ba6b-4170-72cf-81fcfc352401" style="opacity:0" class="h1-block">
                <h1><span class="focus-blue">Всё готово!</span> Запустите AI-Капсулу и начните автоматизацию</h1>
                <div class="subheader">Вы выбрали процесс, который можно автоматизировать<br>с AI-капсулой. Теперь осталось только её активировать!</div>
                <div class="subheader">Готовый AI-ассистент уже обучен и протестирован – просто<br>подключите его к вашим инструментам.</div>
            </div>
            <div data-w-id="40d73393-22b4-d096-3a54-967fb7d7998d" style="opacity:0" class="hero-left-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-2_3.png') }}" loading="lazy" data-w-id="7cf3eb8f-e337-8583-c65d-444fdc400f49" sizes="(max-width: 931px) 100vw, 931px" alt="" srcset="images/caps-2_3-p-500.png 500w, images/caps-2_3-p-800.png 800w, {{ asset('images/caps-2_3.png') }} 931w" class="hero-img _1-v"></div>
            </div>
            <div data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb2" style="opacity:0" class="hero-right-shapes">
                <div class="wrapper-hero-img"><img src="{{ asset('images/caps-small-3.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb5" alt="" class="hero-img _2-v"><img src="{{ asset('images/caps-small-2.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb6" alt="" class="hero-img left-aling"><img src="{{ asset('images/caps-small-1.png') }}" loading="lazy" data-w-id="47c5de10-abc2-c2fc-2cea-72157c1a3eb7" alt="" class="hero-img _3-v"></div>
            </div>
        </div>
        <div class="shape-blur-blue"></div>
        <div class="shape-blur-blue top-right"></div>
    </section>
    <section class="section white-bg border-top">
        <div class="container">
            <div data-w-id="663b2468-0223-0ab9-df01-307c6705376d" style="opacity:0" class="h2-block">
                <h2 class="center-aling">Как подключить и сколько стоит?</h2>
                <div class="subheader">Прозрачное ценообразование</div>
            </div>
            <div data-w-id="f2d57f30-2b71-e5c2-8f17-5fcf6e110ca7" style="opacity:0" class="w-layout-grid price-grid">
                <div class="content-price-item">
                    <div class="flex-vertical gap-8">
                        <p class="focus-blue">Самостоятельное подключение</p>
                        <div class="price-heading">Бесплатно</div>
                        <div class="standart-text">Далее 1 900 руб./мес.</div>
                    </div>
                    <div class="block-included">
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Войдите в личный кабинет</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Выберите инструменты, с которыми работаете</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Следуйте пошаговой инструкции</div>
                        </div>
                    </div>
                    <div class="wrapper-btn">
                        <a href="#" class="blue-button w-inline-block">
                            <div class="icon-btn w-embed"><svg width="27" height="26" viewbox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                </svg></div>
                            <div>Начать автоматизацию</div>
                        </a>
                    </div>
                </div>
                <div class="content-price-item">
                    <div class="flex-vertical gap-8">
                        <p class="focus-blue">Заказать интеграцию</p>
                        <div class="price-heading">18 000 руб.</div>
                        <div class="standart-text">Далее 1 900 руб./мес.</div>
                    </div>
                    <div class="block-included">
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Мы подключим AI-Капсулу к вашим бизнес-инструментам</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Настроим автоматизацию под ваш бизнес процесс</div>
                        </div>
                        <div class="w-layout-grid item-included">
                            <div class="wrapper-check-icon">
                                <div class="icon-check w-embed"><svg width="13" height="11" viewbox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.096 0.390037L3.93602 7.30004L2.03602 5.27004C1.68602 4.94004 1.13602 4.92004 0.736015 5.20004C0.346015 5.49004 0.236015 6.00004 0.476015 6.41004L2.72602 10.07C2.94602 10.41 3.32601 10.62 3.75601 10.62C4.16601 10.62 4.55602 10.41 4.77602 10.07C5.13602 9.60004 12.006 1.41004 12.006 1.41004C12.906 0.490037 11.816 -0.319963 11.096 0.380037V0.390037Z" fill="#56A0D9"></path>
                                    </svg></div>
                            </div>
                            <div class="standart-text">Проверим корректность работы</div>
                        </div>
                    </div>
                    <div class="wrapper-btn">
                        <a href="#" class="blue-button w-inline-block">
                            <div class="icon-btn w-embed"><svg width="27" height="26" viewbox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.34783 2.0066C8.65601 1.10415 9.93234 1.10415 10.2405 2.0066L11.5688 5.89635C11.6689 6.18935 11.899 6.41948 12.192 6.51953L16.0818 7.84783C16.9842 8.15601 16.9842 9.43234 16.0818 9.74052L12.192 11.0688C11.899 11.1689 11.6689 11.399 11.5688 11.692L10.2405 15.5818C9.93234 16.4842 8.65601 16.4842 8.34783 15.5818L7.01953 11.692C6.91948 11.399 6.68935 11.1689 6.39635 11.0688L2.5066 9.74052C1.60415 9.43234 1.60415 8.15601 2.5066 7.84783L6.39635 6.51953C6.68935 6.41948 6.91948 6.18935 7.01953 5.89635L8.34783 2.0066Z" fill="white"></path>
                                    <path d="M19.429 12.1887C19.7236 11.2577 21.0411 11.2577 21.3357 12.1887L21.8803 13.9093C21.9785 14.2196 22.2216 14.4627 22.5319 14.5609L24.2525 15.1055C25.1835 15.4001 25.1835 16.7176 24.2525 17.0123L22.5319 17.5568C22.2216 17.6551 21.9785 17.8981 21.8803 18.2085L21.3357 19.929C21.0411 20.86 19.7236 20.86 19.429 19.929L18.8844 18.2085C18.7862 17.8981 18.5431 17.6551 18.2328 17.5568L16.5122 17.0123C15.5812 16.7176 15.5812 15.4002 16.5122 15.1055L18.2328 14.5609C18.5431 14.4627 18.7862 14.2196 18.8844 13.9093L19.429 12.1887Z" fill="white"></path>
                                    <path d="M11.8656 19.7535C11.9827 19.2334 12.7239 19.2334 12.8411 19.7535L13.0571 20.7124C13.0995 20.9007 13.2466 21.0478 13.435 21.0903L14.3938 21.3062C14.914 21.4234 14.914 22.1646 14.3938 22.2818L13.435 22.4978C13.2466 22.5402 13.0995 22.6873 13.0571 22.8757L12.8411 23.8345C12.7239 24.3547 11.9827 24.3547 11.8656 23.8345L11.6496 22.8757C11.6071 22.6873 11.46 22.5402 11.2717 22.4978L10.3128 22.2818C9.79268 22.1646 9.79268 21.4234 10.3128 21.3062L11.2717 21.0903C11.46 21.0478 11.6071 20.9007 11.6496 20.7124L11.8656 19.7535Z" fill="white"></path>
                                </svg></div>
                            <div>Начать автоматизацию</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle-fon">
            <div class="circle-1">
                <div class="circle-2"></div>
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
                    <a href="{{ route('landing') }}" class="footer-link">AI-капсулы</a>
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
</div>
<script src="{{ asset('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>
