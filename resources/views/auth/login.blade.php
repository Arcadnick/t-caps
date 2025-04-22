<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Tue Apr 01 2025 09:40:11 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="67e50b5295fa03bbbc021d82" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>TimeCapsule | Войти в личный кабинет</title>
    <meta content="Доступ к вашим капсулам, настройкам и результатам в один клик. Войдите и управляйте AI-решениями." property="og:title">
    <meta content="Доступ к вашим капсулам, настройкам и результатам в один клик. Войдите и управляйте AI-решениями." property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
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
                        <a href="{{ route('login') }}" aria-current="page" class="button-base navbar-btn blue-color w-inline-block w--current">
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
                <a href="{{ route('login') }}" aria-current="page" class="button-base header-btn w-inline-block w--current">
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
                <div class="box-center-aling"><img src="{{ asset('images/logo-mark-2.svg') }}" loading="lazy" alt="" class="logo-mark"></div>
                <div class="text-block center-aling gap-12">
                    <div class="heading-login">Войдите в свой аккаунт</div>
                    <div class="standart-text">С возвращением! Введите данные аккаунта</div>
                </div>
            </div>
            <div class="form-login-wrapper w-form">
                <form method="POST" action="{{ route('login') }}" class="form-block">
                    @csrf

                    <div class="rows-form-block">
                        <!-- Email Address -->
                        <div class="flex-vertical gap-6">
                            <label for="email" class="input-text">Почта</label>
                            <input class="text-field w-input" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="Введите почту">
                            @error('email')
                            <div class="small-text error-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="flex-vertical gap-6">
                            <label for="password" class="input-text">Пароль</label>
                            <input class="text-field w-input" id="password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••">
                            @error('password')
                            <div class="small-text error-text">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="small-text gray-color">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="remember" checked>
                                <span class="checkmark">
                                    <svg class="check-icon" width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.6673 1.5L4.25065 7.91667L1.33398 5" stroke="#4BAEEB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                Запомнить меня
                            </label>
                        </div>

                        <!-- Forgot Password -->
                        <div class="small-text gray-color center-aling">
                            <a href="{{ route('password.request') }}" class="forget-password-link">Забыли пароль?</a>
                        </div>
                    </div>

                    <div class="action-block">
                        <button type="submit" class="form-button w-button">Войти</button>
                        <div class="small-text gray-color center-aling">
                            Доступ получают пользователи, подключившие хотя бы одну AI-Капсулу.
                            Самостоятельная регистрация недоступна.
                        </div>
                        <div class="small-text gray-color center-aling">
                            Ознакомьтесь с <a href="{{ route('privacypolicy') }}" class="small-link">Политикой конфиденциальности</a> и <a href="{{ route('termsandconditions') }}" class="small-link">пользовательским соглашением</a>
                        </div>
                    </div>
                </form>
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
@include('components.cookie-banner')
<script src="{{ asset('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae') }}" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
<style>
    .custom-checkbox {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: #414651;
        gap: 10px;
    }

    .custom-checkbox input {
        display: none;
    }

    .checkmark {
        width: 20px;
        height: 20px;
        border: 1px solid #63aeee;
        border-radius: 6px;
        background-color: #f0f7fd;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .check-icon {
        display: none;
    }

    .custom-checkbox input:checked + .checkmark .check-icon {
        display: block;
    }
</style>
</html>
