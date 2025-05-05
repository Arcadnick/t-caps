<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Apr 25 2025 10:36:56 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6806454b5418165bd2a633e0" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>Time Caps | AI-капсула: решение под задачу</title>
    <meta content="Узнайте, как капсула автоматизирует ваш процесс. Готовое решение с понятным интерфейсом и быстрой пользой." property="og:title">
    <meta content="Узнайте, как капсула автоматизирует ваш процесс. Готовое решение с понятным интерфейсом и быстрой пользой." property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/normalize-talkinghead.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow-talkinghead.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/t-caps-talkinghead.webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700,800,900:cyrillic,cyrillic-ext,latin"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    @include('partials.favicons')
    <style>
        .wrapper-image {
            aspect-ratio: 1 / 1;
            pointer-events: auto;
        }
    </style>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(101620938, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/101620938" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease-out" data-easing2="ease-in-out" role="banner" class="navbar w-nav">
    <div class="nav-container">
        <a href="{{ route('welcome') }}" aria-current="page" class="nav-logo w-nav-brand w--current"><img src="{{ asset('images/logo-time-caps.svg') }}" loading="lazy" alt="" class="logo"></a>
        <div class="nav-container-col">
            <nav role="navigation" class="nav-menu w-nav-menu">
                <div class="nav-menu-block">
                    <a href="{{ route('talkinghead') }}" class="sales-and-content nav-link-block w-inline-block">
                        <div>Продажи и контент</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <a href="{{ route('talkinghead') }}" class="how-it-works-link nav-link-block w-inline-block">
                        <div>Как работает</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <a href="{{ route('talkinghead') }}" class="more-ideas nav-link-block w-inline-block">
                        <div>Больше идей</div>
                        <div class="icon-nav-arrow w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#56A0D9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </a>
                    <div class="button-nav-block">
                        <a href="https://t.me/AI_Talking_Head_bot" target="_blank" class="button-base navbar-btn blue-color w-inline-block">
                            <div>Перейти в бота</div>
                        </a>
                        <a href="#" class="button-base navbar-btn w-inline-block">
                            <div>Заказать внедрение</div>
                        </a>
                    </div>
                </div>
            </nav>
            <div class="nav-right-col">
                <a href="#" class="button-base w-inline-block">
                    <div>Заказать внедрение</div>
                </a>
                <a href="https://t.me/AI_Talking_Head_bot" target="_blank" class="button-base header-btn w-inline-block">
                    <div>Перейти в бота</div>
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
    <div class="fix-block-logo border-bottom"></div>
    <section class="hero-section more-top-padding-mobi">
        <div class="container">
            <div class="hero-grid _2-column">
                <div class="flex-vertical gap-48">
                    <div class="h1-block">
                        <h1 class="left-aling"><span class="focus-blue">AI-аватар,</span> который<br>говорит за вас</h1>
                        <div class="subheader left-aling">Оживите фото, озвучьте текст или аудио — и получите видео с говорящим аватаром за 1 минуту. Всё прямо в Telegram.</div>
                    </div>
                    <div class="wrapper-btn left-aling width-auto">
                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button w-inline-block">
                            <div>Запустить бота в Telegram</div>
                        </a>
                    </div>
                </div>
                <div id="w-node-c131c758-c822-2911-506f-e45f19736631-d2a633e0" class="wrapper-image">
                    <img id="video-poster"
                         src="{{asset('images/head-1.jpg')}}"
                         loading="lazy" sizes="(max-width: 997px) 100vw, 997px"
                         srcset="{{asset('images/head-1-p-500.jpg')}} 500w, {{asset('images/head-1-p-800.jpg')}} 800w, {{asset('images/head-1.jpg')}} 997w"
                         alt=""
                         class="img-main-head"
                         style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 2;">
                    <video id="main-video" class="img-main-head" preload="metadata" playsinline style="position: relative; z-index: 2; clip-path: circle(50%)">
                        <source src="{{asset('vid/Brian.mp4')}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <a data-w-id="19d01da6-523f-ee92-5ce5-7592e05ade43" href="#" class="play-block w-inline-block">
                        <div class="elipse-1">
                            <div class="elipse-2">
                                <div style="display:block;opacity:1" class="play-icon w-embed">
                                    <svg viewbox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="none" height="100%" width="100%"></rect>
                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                    </svg>
                                </div>
                                <div style="opacity:0;display:none" class="pause-btn w-embed">
                                    <svg viewbox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                        <rect fill="none" height="100%" width="100%"></rect>
                                        <path d="M216,48V208a16,16,0,0,1-16,16H164a16,16,0,0,1-16-16V48a16,16,0,0,1,16-16h36A16,16,0,0,1,216,48ZM92,32H56A16,16,0,0,0,40,48V208a16,16,0,0,0,16,16H92a16,16,0,0,0,16-16V48A16,16,0,0,0,92,32Z" fill="#4BAEEB"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="rectangle-radius"></div>
                </div>
            </div>
        </div>
        <div class="shape-blur-blue bottom-left"></div>
        <div class="shape-blur-blue bottom-right"></div>
        <div class="shape-blur-green bottom-position"></div>
    </section>
    <section class="section" id="howWorkGrid">
        <div class="container">
            <div class="h2-block">
                <div class="shield-bl">
                    <div>Создание занимает 1 минуту</div>
                </div>
                <h2 class="center-aling">AI-видео, которое продаёт</h2>
                <div class="subheader">Используйте говорящего аватара, чтобы усилить карточки товара, лендинги, рассылки и FAQ. Это работает как видеопродавец — 24/7, без затрат на съёмки.</div>
            </div>
            <div class="w-layout-grid grid-card">
                <div class="card-item">
                    <div class="inf-block-card">
                        <div class="size-14 semibold">Загружаете фото для аватара</div>
                        <div class="size-14 gray-color">Возьмите реальное фото или сгенерируйте с помощью AI</div>
                    </div>
                    <div class="wrapper-img-card"><img src="{{asset('images/card-img-1.svg')}}" loading="lazy" alt="" class="image-card"></div>
                </div>
                <div class="card-item">
                    <div class="inf-block-card">
                        <div class="size-14 semibold">Создайте голос на основе аудио или голосовых сообщений</div>
                        <div class="size-14 gray-color">Синтезируйте любой голос</div>
                    </div>
                    <div class="wrapper-img-card"><img src="{{asset('images/card-img-2.svg')}}" loading="lazy" alt="" class="image-card"></div>
                </div>
                <div class="card-item">
                    <div class="inf-block-card">
                        <div class="size-14 semibold">Введите необходий текст</div>
                        <div class="size-14 gray-color">Сообщение реклама товара или услуг, презентация, рассказ</div>
                    </div>
                    <div class="wrapper-img-card"><img src="{{asset('images/card-img-3.svg')}}" loading="lazy" alt="" class="image-card"></div>
                </div>
                <div class="card-item">
                    <div class="inf-block-card">
                        <div class="size-14 semibold">Аватар готов!</div>
                        <div class="size-14 gray-color">Теперь ваш AI аватар будет помогать вам</div>
                    </div>
                    <div class="wrapper-img-card"><img src="{{asset('images/card-img-4.svg')}}" loading="lazy" alt="" class="image-card"></div>
                </div>
            </div>
        </div>
        <div class="shape-blur-blue bottom-left"></div>
    </section>
    <section class="section radius" id="SalesAndContent">
        <div class="container">
            <div class="h2-block">
                <h2 class="center-aling">Говорящий аватар — под любую задачу</h2>
                <div class="subheader">Смотрите, как можно использовать наш сервис прямо сейчас</div>
            </div>
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs-cases w-tabs">
                <div class="tabs-menu cases w-tab-menu">
                    <a data-w-tab="Tab 1" class="tabs-link-cases w-inline-block w-tab-link w--current">
                        <div class="icon-tab w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.375 6.99766V6.5625C14.375 4.60312 11.4195 3.125 7.5 3.125C3.58047 3.125 0.625 4.60312 0.625 6.5625V9.6875C0.625 11.3195 2.67578 12.6164 5.625 13.0047V13.4375C5.625 15.3969 8.58047 16.875 12.5 16.875C16.4195 16.875 19.375 15.3969 19.375 13.4375V10.3125C19.375 8.69531 17.3891 7.39687 14.375 6.99766ZM4.375 11.4742C2.84453 11.0469 1.875 10.343 1.875 9.6875V8.58828C2.5125 9.03984 3.36641 9.40391 4.375 9.64844V11.4742ZM10.625 9.64844C11.6336 9.40391 12.4875 9.03984 13.125 8.58828V9.6875C13.125 10.343 12.1555 11.0469 10.625 11.4742V9.64844ZM9.375 15.2242C7.84453 14.7969 6.875 14.093 6.875 13.4375V13.1117C7.08047 13.1195 7.28828 13.125 7.5 13.125C7.80312 13.125 8.09922 13.1148 8.38984 13.0977C8.7127 13.2132 9.04157 13.3113 9.375 13.3914V15.2242ZM9.375 11.7383C8.75422 11.83 8.12751 11.8757 7.5 11.875C6.87249 11.8757 6.24578 11.83 5.625 11.7383V9.87969C6.2467 9.96069 6.87304 10.0009 7.5 10C8.12696 10.0009 8.7533 9.96069 9.375 9.87969V11.7383ZM14.375 15.4883C13.1316 15.6706 11.8684 15.6706 10.625 15.4883V13.625C11.2465 13.7085 11.8729 13.7503 12.5 13.75C13.127 13.7509 13.7533 13.7107 14.375 13.6297V15.4883ZM18.125 13.4375C18.125 14.093 17.1555 14.7969 15.625 15.2242V13.3984C16.6336 13.1539 17.4875 12.7898 18.125 12.3383V13.4375Z" fill="currentcolor"></path>
                            </svg></div>
                        <div class="tab-text">Продажи</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tabs-link-cases w-inline-block w-tab-link">
                        <div class="icon-tab w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1245 2.5C18.1245 2.33424 18.0586 2.17527 17.9414 2.05806C17.8242 1.94085 17.6652 1.875 17.4995 1.875C14.0557 1.875 10.5221 5.75859 8.55961 8.33047C7.85873 8.11582 7.11727 8.06853 6.3948 8.1924C5.67233 8.31628 4.98897 8.60786 4.39963 9.04374C3.81028 9.47961 3.33137 10.0476 3.00137 10.7022C2.67136 11.3567 2.49945 12.0795 2.49946 12.8125C2.49946 15.225 0.972895 16.307 0.900238 16.357C0.78937 16.4319 0.705449 16.5404 0.660814 16.6665C0.616179 16.7926 0.613187 16.9297 0.652277 17.0576C0.691367 17.1856 0.770477 17.2976 0.877973 17.3772C0.985469 17.4568 1.11568 17.4999 1.24946 17.5H7.18696C7.91997 17.5 8.64277 17.3281 9.2973 16.9981C9.95183 16.6681 10.5198 16.1892 10.9557 15.5998C11.3916 15.0105 11.6832 14.3271 11.8071 13.6047C11.9309 12.8822 11.8836 12.1407 11.669 11.4398C14.2416 9.47734 18.1245 5.94375 18.1245 2.5ZM9.71977 8.87109C9.98748 8.52422 10.2502 8.1974 10.508 7.89062C11.1391 8.31696 11.6825 8.86037 12.1088 9.49141C11.8015 9.7487 11.4747 10.0115 11.1284 10.2797C10.7642 9.71548 10.284 9.2353 9.71977 8.87109ZM13.0557 8.66172C12.5839 7.99594 12.0027 7.41481 11.337 6.94297C13.8198 4.24531 15.6924 3.42734 16.7979 3.2C16.5752 4.30625 15.7534 6.17891 13.0557 8.66172Z" fill="currentcolor"></path>
                            </svg></div>
                        <div class="tab-text">Контент</div>
                    </a>
                </div>
                <div class="tabs-content cases w-tab-content">
                    <div data-w-tab="Tab 1" class="tab-pane-cases w-tab-pane w--tab-active">
                        <div class="wrapper-slider">
                            <div data-delay="4000" data-animation="slide" class="slider-cases w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true" id="mainSlider">
                                <div class="slider-mask w-slider-mask">
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Товары</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Реклама</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Контент</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>AI-продавец: усиливает товар через видео и голос</h3>
                                                            <div class="size-14 trout-color">Аватар помогает презентовать товар: озвучивает преимущества, усиливает доверие, выделяет главное</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-advantage w-embed"><svg width="24" height="24" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11.6925 10.8078C11.6345 10.7497 11.5656 10.7036 11.4897 10.6722C11.4138 10.6407 11.3325 10.6245 11.2503 10.6245C11.1682 10.6245 11.0869 10.6407 11.011 10.6722C10.9351 10.7036 10.8662 10.7497 10.8082 10.8078L9.37535 12.2414L7.75894 10.625L9.19254 9.19219C9.30981 9.07492 9.3757 8.91586 9.3757 8.75C9.3757 8.58415 9.30981 8.42509 9.19254 8.30782C9.07526 8.19054 8.9162 8.12466 8.75035 8.12466C8.5845 8.12466 8.42544 8.19054 8.30816 8.30782L6.87535 9.74141L5.44254 8.30782C5.32526 8.19054 5.1662 8.12466 5.00035 8.12466C4.8345 8.12466 4.67544 8.19054 4.55816 8.30782C4.44088 8.42509 4.375 8.58415 4.375 8.75C4.375 8.91586 4.44088 9.07492 4.55816 9.19219L5.05425 9.6875L3.23238 11.5086C3.00017 11.7408 2.81597 12.0164 2.6903 12.3197C2.56463 12.6231 2.49994 12.9482 2.49994 13.2766C2.49994 13.6049 2.56463 13.9301 2.6903 14.2334C2.81597 14.5368 3.00017 14.8124 3.23238 15.0445L3.65269 15.4641L1.43316 17.6828C1.37509 17.7409 1.32903 17.8098 1.2976 17.8857C1.26618 17.9616 1.25 18.0429 1.25 18.125C1.25 18.2071 1.26618 18.2884 1.2976 18.3643C1.32903 18.4402 1.37509 18.5091 1.43316 18.5672C1.55044 18.6845 1.7095 18.7504 1.87535 18.7504C1.95747 18.7504 2.03879 18.7342 2.11466 18.7027C2.19053 18.6713 2.25947 18.6253 2.31754 18.5672L4.53629 16.3477L4.95582 16.768C5.18797 17.0002 5.46359 17.1844 5.76694 17.3101C6.0703 17.4357 6.39543 17.5004 6.72378 17.5004C7.05214 17.5004 7.37727 17.4357 7.68063 17.3101C7.98398 17.1844 8.2596 17.0002 8.49175 16.768L10.3128 14.9461L10.8082 15.4422C10.8662 15.5003 10.9352 15.5463 11.011 15.5777C11.0869 15.6092 11.1682 15.6254 11.2503 15.6254C11.3325 15.6254 11.4138 15.6092 11.4897 15.5777C11.5655 15.5463 11.6345 15.5003 11.6925 15.4422C11.7506 15.3841 11.7967 15.3152 11.8281 15.2393C11.8595 15.1634 11.8757 15.0821 11.8757 15C11.8757 14.9179 11.8595 14.8366 11.8281 14.7607C11.7967 14.6848 11.7506 14.6159 11.6925 14.5578L10.2589 13.125L11.6925 11.6922C11.7506 11.6341 11.7967 11.5652 11.8282 11.4893C11.8597 11.4135 11.8758 11.3321 11.8758 11.25C11.8758 11.1679 11.8597 11.0865 11.8282 11.0107C11.7967 10.9348 11.7506 10.8659 11.6925 10.8078ZM7.60738 15.8859C7.37298 16.1202 7.05516 16.2518 6.72378 16.2518C6.39241 16.2518 6.07459 16.1202 5.84019 15.8859L4.11675 14.1602C3.88251 13.9258 3.75093 13.6079 3.75093 13.2766C3.75093 12.9452 3.88251 12.6274 4.11675 12.393L5.93785 10.5711L9.42925 14.0625L7.60738 15.8859ZM18.5675 1.43282C18.5095 1.37471 18.4406 1.32861 18.3647 1.29715C18.2888 1.2657 18.2075 1.24951 18.1253 1.24951C18.0432 1.24951 17.9619 1.2657 17.886 1.29715C17.8101 1.32861 17.7412 1.37471 17.6832 1.43282L15.4644 3.65235L15.0449 3.23203C14.5755 2.76403 13.9397 2.50121 13.2769 2.50121C12.6141 2.50121 11.9783 2.76403 11.5089 3.23203L9.68785 5.05391L9.19254 4.55782C9.07526 4.44054 8.9162 4.37466 8.75035 4.37466C8.5845 4.37466 8.42544 4.44054 8.30816 4.55782C8.19089 4.67509 8.125 4.83415 8.125 5C8.125 5.16586 8.19088 5.32492 8.30816 5.44219L14.5582 11.6922C14.6162 11.7503 14.6852 11.7963 14.761 11.8277C14.8369 11.8592 14.9182 11.8754 15.0003 11.8754C15.0825 11.8754 15.1638 11.8592 15.2397 11.8277C15.3155 11.7963 15.3845 11.7503 15.4425 11.6922C15.5006 11.6341 15.5467 11.5652 15.5781 11.4893C15.6095 11.4134 15.6257 11.3321 15.6257 11.25C15.6257 11.1679 15.6095 11.0866 15.5781 11.0107C15.5467 10.9348 15.5006 10.8659 15.4425 10.8078L14.9464 10.3125L16.7683 8.49141C17.0005 8.25926 17.1847 7.98363 17.3104 7.68028C17.4361 7.37693 17.5008 7.05179 17.5008 6.72344C17.5008 6.39509 17.4361 6.06995 17.3104 5.7666C17.1847 5.46325 17.0005 5.18763 16.7683 4.95547L16.348 4.53594L18.5675 2.31719C18.6256 2.25915 18.6717 2.19021 18.7032 2.11434C18.7347 2.03847 18.7508 1.95714 18.7508 1.875C18.7508 1.79287 18.7347 1.71154 18.7032 1.63567C18.6717 1.55979 18.6256 1.49086 18.5675 1.43282ZM15.8839 7.60469L14.0628 9.42891L10.5714 5.9375L12.3933 4.11641C12.6277 3.88217 12.9455 3.75058 13.2769 3.75058C13.6083 3.75058 13.9261 3.88217 14.1605 4.11641L15.8839 5.83516C16.0006 5.95131 16.0932 6.08936 16.1564 6.2414C16.2196 6.39344 16.2521 6.55646 16.2521 6.7211C16.2521 6.88574 16.2196 7.04876 16.1564 7.20079C16.0932 7.35283 16.0006 7.49089 15.8839 7.60703V7.60469Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Подходит для маркетплейсов и магазинов</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-advantage w-embed"><svg width="24" height="24" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.8759 8.12498H7.97666L16.4071 5.8992C16.4869 5.87817 16.5618 5.84155 16.6273 5.79144C16.6929 5.74134 16.7479 5.67875 16.7892 5.60728C16.8304 5.53581 16.8571 5.45687 16.8677 5.37503C16.8783 5.29319 16.8726 5.21006 16.8509 5.13045L16.2134 2.7867C16.1256 2.47137 15.9172 2.20331 15.6332 2.04056C15.3493 1.87781 15.0126 1.83348 14.6962 1.91716L2.79853 5.05779C2.64012 5.09891 2.4915 5.17123 2.36137 5.27049C2.23125 5.36976 2.12224 5.49399 2.04072 5.63591C1.95875 5.77609 1.90579 5.93132 1.88498 6.09237C1.86418 6.25342 1.87596 6.41701 1.91963 6.57341L2.50088 8.7156C2.50088 8.72654 2.50088 8.73826 2.50088 8.74998V15.625C2.50088 15.9565 2.63257 16.2744 2.86699 16.5089C3.10141 16.7433 3.41936 16.875 3.75088 16.875H16.2509C16.5824 16.875 16.9003 16.7433 17.1348 16.5089C17.3692 16.2744 17.5009 15.9565 17.5009 15.625V8.74998C17.5009 8.58422 17.435 8.42525 17.3178 8.30804C17.2006 8.19083 17.0416 8.12498 16.8759 8.12498ZM15.0134 3.12498L15.4821 4.8492L13.7149 5.31795L11.5181 4.0492L15.0134 3.12498ZM9.80322 4.49998L12.0001 5.76873L9.11416 6.53045L6.91728 5.26326L9.80322 4.49998ZM3.6001 7.98592L3.13135 6.26091L5.20166 5.71404L7.39853 6.98435L3.6001 7.98592ZM16.2509 15.625H3.75088V9.37498H16.2509V15.625Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Загрузите видео и получите живой аватар</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case1.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img alt="" src="{{asset('images/slide-image-25.jpg')}}" loading="lazy" class="image-cases height-auto">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Услуги</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Объяснение</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Личность</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Аватар для презентации услуг</h3>
                                                            <div class="size-14 trout-color">AI-аватар презентует услугу: рассказывает о подходе, ценностях, процессе</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M11.6925 10.8078C11.6345 10.7497 11.5656 10.7036 11.4897 10.6722C11.4138 10.6407 11.3325 10.6245 11.2503 10.6245C11.1682 10.6245 11.0869 10.6407 11.011 10.6722C10.9351 10.7036 10.8662 10.7497 10.8082 10.8078L9.37535 12.2414L7.75894 10.625L9.19254 9.19219C9.30981 9.07492 9.3757 8.91586 9.3757 8.75C9.3757 8.58415 9.30981 8.42509 9.19254 8.30782C9.07526 8.19054 8.9162 8.12466 8.75035 8.12466C8.5845 8.12466 8.42544 8.19054 8.30816 8.30782L6.87535 9.74141L5.44254 8.30782C5.32526 8.19054 5.1662 8.12466 5.00035 8.12466C4.8345 8.12466 4.67544 8.19054 4.55816 8.30782C4.44088 8.42509 4.375 8.58415 4.375 8.75C4.375 8.91586 4.44088 9.07492 4.55816 9.19219L5.05425 9.6875L3.23238 11.5086C3.00017 11.7408 2.81597 12.0164 2.6903 12.3197C2.56463 12.6231 2.49994 12.9482 2.49994 13.2766C2.49994 13.6049 2.56463 13.9301 2.6903 14.2334C2.81597 14.5368 3.00017 14.8124 3.23238 15.0445L3.65269 15.4641L1.43316 17.6828C1.37509 17.7409 1.32903 17.8098 1.2976 17.8857C1.26618 17.9616 1.25 18.0429 1.25 18.125C1.25 18.2071 1.26618 18.2884 1.2976 18.3643C1.32903 18.4402 1.37509 18.5091 1.43316 18.5672C1.55044 18.6845 1.7095 18.7504 1.87535 18.7504C1.95747 18.7504 2.03879 18.7342 2.11466 18.7027C2.19053 18.6713 2.25947 18.6253 2.31754 18.5672L4.53629 16.3477L4.95582 16.768C5.18797 17.0002 5.46359 17.1844 5.76694 17.3101C6.0703 17.4357 6.39543 17.5004 6.72378 17.5004C7.05214 17.5004 7.37727 17.4357 7.68063 17.3101C7.98398 17.1844 8.2596 17.0002 8.49175 16.768L10.3128 14.9461L10.8082 15.4422C10.8662 15.5003 10.9352 15.5463 11.011 15.5777C11.0869 15.6092 11.1682 15.6254 11.2503 15.6254C11.3325 15.6254 11.4138 15.6092 11.4897 15.5777C11.5655 15.5463 11.6345 15.5003 11.6925 15.4422C11.7506 15.3841 11.7967 15.3152 11.8281 15.2393C11.8595 15.1634 11.8757 15.0821 11.8757 15C11.8757 14.9179 11.8595 14.8366 11.8281 14.7607C11.7967 14.6848 11.7506 14.6159 11.6925 14.5578L10.2589 13.125L11.6925 11.6922C11.7506 11.6341 11.7967 11.5652 11.8282 11.4893C11.8597 11.4135 11.8758 11.3321 11.8758 11.25C11.8758 11.1679 11.8597 11.0865 11.8282 11.0107C11.7967 10.9348 11.7506 10.8659 11.6925 10.8078ZM7.60738 15.8859C7.37298 16.1202 7.05516 16.2518 6.72378 16.2518C6.39241 16.2518 6.07459 16.1202 5.84019 15.8859L4.11675 14.1602C3.88251 13.9258 3.75093 13.6079 3.75093 13.2766C3.75093 12.9452 3.88251 12.6274 4.11675 12.393L5.93785 10.5711L9.42925 14.0625L7.60738 15.8859ZM18.5675 1.43282C18.5095 1.37471 18.4406 1.32861 18.3647 1.29715C18.2888 1.2657 18.2075 1.24951 18.1253 1.24951C18.0432 1.24951 17.9619 1.2657 17.886 1.29715C17.8101 1.32861 17.7412 1.37471 17.6832 1.43282L15.4644 3.65235L15.0449 3.23203C14.5755 2.76403 13.9397 2.50121 13.2769 2.50121C12.6141 2.50121 11.9783 2.76403 11.5089 3.23203L9.68785 5.05391L9.19254 4.55782C9.07526 4.44054 8.9162 4.37466 8.75035 4.37466C8.5845 4.37466 8.42544 4.44054 8.30816 4.55782C8.19089 4.67509 8.125 4.83415 8.125 5C8.125 5.16586 8.19088 5.32492 8.30816 5.44219L14.5582 11.6922C14.6162 11.7503 14.6852 11.7963 14.761 11.8277C14.8369 11.8592 14.9182 11.8754 15.0003 11.8754C15.0825 11.8754 15.1638 11.8592 15.2397 11.8277C15.3155 11.7963 15.3845 11.7503 15.4425 11.6922C15.5006 11.6341 15.5467 11.5652 15.5781 11.4893C15.6095 11.4134 15.6257 11.3321 15.6257 11.25C15.6257 11.1679 15.6095 11.0866 15.5781 11.0107C15.5467 10.9348 15.5006 10.8659 15.4425 10.8078L14.9464 10.3125L16.7683 8.49141C17.0005 8.25926 17.1847 7.98363 17.3104 7.68028C17.4361 7.37693 17.5008 7.05179 17.5008 6.72344C17.5008 6.39509 17.4361 6.06995 17.3104 5.7666C17.1847 5.46325 17.0005 5.18763 16.7683 4.95547L16.348 4.53594L18.5675 2.31719C18.6256 2.25915 18.6717 2.19021 18.7032 2.11434C18.7347 2.03847 18.7508 1.95714 18.7508 1.875C18.7508 1.79287 18.7347 1.71154 18.7032 1.63567C18.6717 1.55979 18.6256 1.49086 18.5675 1.43282ZM15.8839 7.60469L14.0628 9.42891L10.5714 5.9375L12.3933 4.11641C12.6277 3.88217 12.9455 3.75058 13.2769 3.75058C13.6083 3.75058 13.9261 3.88217 14.1605 4.11641L15.8839 5.83516C16.0006 5.95131 16.0932 6.08936 16.1564 6.2414C16.2196 6.39344 16.2521 6.55646 16.2521 6.7211C16.2521 6.88574 16.2196 7.04876 16.1564 7.20079C16.0932 7.35283 16.0006 7.49089 15.8839 7.60703V7.60469Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Идеально для ремонта, дизайна, консультаций, салонов, обучения</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.8759 8.12498H7.97666L16.4071 5.8992C16.4869 5.87817 16.5618 5.84155 16.6273 5.79144C16.6929 5.74134 16.7479 5.67875 16.7892 5.60728C16.8304 5.53581 16.8571 5.45687 16.8677 5.37503C16.8783 5.29319 16.8726 5.21006 16.8509 5.13045L16.2134 2.7867C16.1256 2.47137 15.9172 2.20331 15.6332 2.04056C15.3493 1.87781 15.0126 1.83348 14.6962 1.91716L2.79853 5.05779C2.64012 5.09891 2.4915 5.17123 2.36137 5.27049C2.23125 5.36976 2.12224 5.49399 2.04072 5.63591C1.95875 5.77609 1.90579 5.93132 1.88498 6.09237C1.86418 6.25342 1.87596 6.41701 1.91963 6.57341L2.50088 8.7156C2.50088 8.72654 2.50088 8.73826 2.50088 8.74998V15.625C2.50088 15.9565 2.63257 16.2744 2.86699 16.5089C3.10141 16.7433 3.41936 16.875 3.75088 16.875H16.2509C16.5824 16.875 16.9003 16.7433 17.1348 16.5089C17.3692 16.2744 17.5009 15.9565 17.5009 15.625V8.74998C17.5009 8.58422 17.435 8.42525 17.3178 8.30804C17.2006 8.19083 17.0416 8.12498 16.8759 8.12498ZM15.0134 3.12498L15.4821 4.8492L13.7149 5.31795L11.5181 4.0492L15.0134 3.12498ZM9.80322 4.49998L12.0001 5.76873L9.11416 6.53045L6.91728 5.26326L9.80322 4.49998ZM3.6001 7.98592L3.13135 6.26091L5.20166 5.71404L7.39853 6.98435L3.6001 7.98592ZM16.2509 15.625H3.75088V9.37498H16.2509V15.625Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Показывает лицо бизнеса и помогает выделиться среди конкурентов</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Cais3.MOV')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais3.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Видеообзор</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Маркетплейсы</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Промо</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Аватар для маркетплейсов</h3>
                                                            <div class="size-14 trout-color">Видео, где продукт показывается в действии, а AI-аватар объясняет, почему это решение работает</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M16.25 10.625H13.75V8.125H15C15.3315 8.125 15.6495 7.9933 15.8839 7.75888C16.1183 7.52446 16.25 7.20652 16.25 6.875V3.125C16.25 2.79348 16.1183 2.47554 15.8839 2.24112C15.6495 2.0067 15.3315 1.875 15 1.875H5C4.66848 1.875 4.35054 2.0067 4.11612 2.24112C3.8817 2.47554 3.75 2.79348 3.75 3.125V6.875C3.75 7.20652 3.8817 7.52446 4.11612 7.75888C4.35054 7.9933 4.66848 8.125 5 8.125H6.25V10.625H3.75C3.41848 10.625 3.10054 10.7567 2.86612 10.9911C2.6317 11.2255 2.5 11.5435 2.5 11.875V13.125C2.5 13.4565 2.6317 13.7745 2.86612 14.0089C3.10054 14.2433 3.41848 14.375 3.75 14.375H4.375V17.5C4.375 17.6658 4.44085 17.8247 4.55806 17.9419C4.67527 18.0592 4.83424 18.125 5 18.125C5.16576 18.125 5.32473 18.0592 5.44194 17.9419C5.55915 17.8247 5.625 17.6658 5.625 17.5V14.375H14.375V17.5C14.375 17.6658 14.4408 17.8247 14.5581 17.9419C14.6753 18.0592 14.8342 18.125 15 18.125C15.1658 18.125 15.3247 18.0592 15.4419 17.9419C15.5592 17.8247 15.625 17.6658 15.625 17.5V14.375H16.25C16.5815 14.375 16.8995 14.2433 17.1339 14.0089C17.3683 13.7745 17.5 13.4565 17.5 13.125V11.875C17.5 11.5435 17.3683 11.2255 17.1339 10.9911C16.8995 10.7567 16.5815 10.625 16.25 10.625ZM5 3.125H15V6.875H5V3.125ZM7.5 8.125H12.5V10.625H7.5V8.125ZM16.25 13.125H3.75V11.875H16.25V13.125Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Используется для демонстрации техники, одежды, предметов интерьера</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M19.0086 10.625L11.25 2.86641C11.1344 2.74983 10.9967 2.65741 10.845 2.59451C10.6933 2.5316 10.5306 2.49948 10.3664 2.50001H3.12501C2.95925 2.50001 2.80027 2.56585 2.68306 2.68306C2.56585 2.80027 2.50001 2.95925 2.50001 3.12501V10.3664C2.49948 10.5306 2.5316 10.6933 2.59451 10.845C2.65741 10.9967 2.74983 11.1344 2.86641 11.25L10.625 19.0086C10.7411 19.1247 10.8789 19.2168 11.0306 19.2796C11.1822 19.3425 11.3448 19.3748 11.509 19.3748C11.6732 19.3748 11.8357 19.3425 11.9874 19.2796C12.1391 19.2168 12.2769 19.1247 12.393 19.0086L19.0086 12.393C19.1247 12.2769 19.2168 12.1391 19.2796 11.9874C19.3425 11.8357 19.3748 11.6732 19.3748 11.509C19.3748 11.3448 19.3425 11.1822 19.2796 11.0306C19.2168 10.8789 19.1247 10.7411 19.0086 10.625ZM11.5086 18.125L3.75001 10.3664V3.75001H10.3664L18.125 11.5086L11.5086 18.125ZM7.50001 6.56251C7.50001 6.74793 7.44502 6.92918 7.34201 7.08335C7.239 7.23752 7.09258 7.35769 6.92127 7.42864C6.74997 7.4996 6.56147 7.51817 6.37961 7.48199C6.19775 7.44582 6.03071 7.35653 5.89959 7.22542C5.76848 7.09431 5.67919 6.92726 5.64302 6.7454C5.60685 6.56355 5.62541 6.37505 5.69637 6.20374C5.76733 6.03243 5.88749 5.88602 6.04166 5.783C6.19583 5.67999 6.37709 5.62501 6.56251 5.62501C6.81115 5.62501 7.0496 5.72378 7.22542 5.89959C7.40123 6.07541 7.50001 6.31387 7.50001 6.56251Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Идеально для добавления в галерею товара на маркетплейсах</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case2.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais2.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Услуги</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Реклама</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#КороткийРолик</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Видео-аватар в шортсах</h3>
                                                            <div class="size-14 trout-color">AI-аватар в коротком ролике подаёт суть вашей услуги — просто, эффектно и с акцентом на выгодах. Продающий формат для соцсетей</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M13.75 1.25H6.25C5.75272 1.25 5.27581 1.44754 4.92417 1.79917C4.57254 2.15081 4.375 2.62772 4.375 3.125V16.875C4.375 17.3723 4.57254 17.8492 4.92417 18.2008C5.27581 18.5525 5.75272 18.75 6.25 18.75H13.75C14.2473 18.75 14.7242 18.5525 15.0758 18.2008C15.4275 17.8492 15.625 17.3723 15.625 16.875V3.125C15.625 2.62772 15.4275 2.15081 15.0758 1.79917C14.7242 1.44754 14.2473 1.25 13.75 1.25ZM14.375 16.875C14.375 17.0408 14.3092 17.1997 14.1919 17.3169C14.0747 17.4342 13.9158 17.5 13.75 17.5H6.25C6.08424 17.5 5.92527 17.4342 5.80806 17.3169C5.69085 17.1997 5.625 17.0408 5.625 16.875V3.125C5.625 2.95924 5.69085 2.80027 5.80806 2.68306C5.92527 2.56585 6.08424 2.5 6.25 2.5H13.75C13.9158 2.5 14.0747 2.56585 14.1919 2.68306C14.3092 2.80027 14.375 2.95924 14.375 3.125V16.875ZM13.125 4.375C13.125 4.54076 13.0592 4.69973 12.9419 4.81694C12.8247 4.93415 12.6658 5 12.5 5H7.5C7.33424 5 7.17527 4.93415 7.05806 4.81694C6.94085 4.69973 6.875 4.54076 6.875 4.375C6.875 4.20924 6.94085 4.05027 7.05806 3.93306C7.17527 3.81585 7.33424 3.75 7.5 3.75H12.5C12.6658 3.75 12.8247 3.81585 12.9419 3.93306C13.0592 4.05027 13.125 4.20924 13.125 4.375Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Идеально для TikTok, Instagram, YouTube Shorts</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M18.75 9.37503C18.749 8.38078 18.3535 7.42755 17.6505 6.72452C16.9475 6.02148 15.9942 5.62606 15 5.62503H11.8906C11.6633 5.61174 7.70156 5.33284 3.92891 2.16878C3.74672 2.01577 3.52466 1.91793 3.2888 1.88676C3.05294 1.85558 2.81309 1.89236 2.59741 1.99278C2.38173 2.09319 2.19918 2.25307 2.07122 2.45363C1.94325 2.6542 1.87518 2.88712 1.875 3.12503V15.625C1.87503 15.863 1.943 16.096 2.0709 16.2967C2.19881 16.4974 2.38135 16.6574 2.59705 16.7579C2.81276 16.8584 3.05268 16.8953 3.28861 16.8641C3.52454 16.833 3.74667 16.7351 3.92891 16.5821C6.87969 14.1071 9.94453 13.3977 11.25 13.1992V15.6774C11.2497 15.8833 11.3004 16.0862 11.3974 16.2679C11.4945 16.4496 11.6349 16.6045 11.8062 16.7188L12.6656 17.2914C12.8317 17.4023 13.022 17.4718 13.2204 17.494C13.4189 17.5162 13.6198 17.4906 13.8063 17.4192C13.9928 17.3478 14.1595 17.2328 14.2925 17.0837C14.4254 16.9347 14.5207 16.756 14.5703 16.5625L15.4898 13.0969C16.392 12.9769 17.2198 12.5333 17.8195 11.8487C18.4191 11.1642 18.7498 10.2851 18.75 9.37503ZM3.125 15.6196V3.12503C6.46953 5.93049 9.89297 6.64065 11.25 6.81565V11.9313C9.89453 12.1094 6.47188 12.818 3.125 15.6196ZM13.3594 16.2446V16.2531L12.5 15.6805V13.125H14.1875L13.3594 16.2446ZM15 11.875H12.5V6.87503H15C15.663 6.87503 16.2989 7.13842 16.7678 7.60726C17.2366 8.0761 17.5 8.71198 17.5 9.37503C17.5 10.0381 17.2366 10.674 16.7678 11.1428C16.2989 11.6116 15.663 11.875 15 11.875Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Отлично привлекает тёплую аудиторию</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case4.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais4.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#КП</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Рассылка</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#B2B</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Продажи</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Аватар для рассылок КП или E-mail</h3>
                                                            <div class="size-14 trout-color">AI-аватар озвучивает ключевые преимущества вашего предложения в видеоформате.</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17.76 2.24083C17.6028 2.08375 17.4066 1.97141 17.1915 1.91538C16.9765 1.85935 16.7504 1.86167 16.5366 1.92208H16.5248L1.52952 6.47208C1.28543 6.54228 1.0685 6.68517 0.907646 6.88173C0.746787 7.07829 0.649622 7.31919 0.629091 7.57235C0.60856 7.82551 0.665637 8.07892 0.79272 8.29883C0.919804 8.51874 1.11086 8.69472 1.34046 8.80333L8.02952 11.9713L11.1975 18.6604C11.2975 18.8746 11.4567 19.0557 11.6563 19.1824C11.856 19.309 12.0876 19.3759 12.3241 19.3752C12.36 19.3752 12.3959 19.3736 12.4319 19.3705C12.6841 19.3501 12.9241 19.253 13.1196 19.0923C13.3151 18.9315 13.4568 18.7149 13.5256 18.4713L18.0725 3.47599C18.0725 3.47208 18.0725 3.46818 18.0725 3.46427C18.1337 3.25096 18.137 3.0252 18.0821 2.81019C18.0272 2.59518 17.916 2.39866 17.76 2.24083ZM12.3311 18.1135L12.3272 18.1244L9.25218 11.633L12.9428 7.94161C13.0551 7.82345 13.1167 7.66611 13.1146 7.50313C13.1126 7.34015 13.0469 7.18444 12.9316 7.06919C12.8164 6.95394 12.6607 6.88827 12.4977 6.88618C12.3347 6.8841 12.1774 6.94576 12.0592 7.05802L8.3678 10.7486L1.87562 7.67365H1.88655L16.8756 3.12521L12.3311 18.1135Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Идеально для B2B и B2C-коммуникаций и автоматизированных, персональных рассылок</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M15.7727 4.27031C15.025 3.51514 14.1357 2.91486 13.1558 2.50383C12.1758 2.09281 11.1244 1.87912 10.0617 1.875H10C7.84512 1.875 5.77849 2.73102 4.25476 4.25476C2.73102 5.77849 1.875 7.84512 1.875 10V14.375C1.875 14.8723 2.07254 15.3492 2.42417 15.7008C2.77581 16.0525 3.25272 16.25 3.75 16.25H5C5.49728 16.25 5.97419 16.0525 6.32583 15.7008C6.67746 15.3492 6.875 14.8723 6.875 14.375V11.25C6.875 10.7527 6.67746 10.2758 6.32583 9.92417C5.97419 9.57254 5.49728 9.375 5 9.375H3.15313C3.27366 8.07182 3.76315 6.83 4.56424 5.79508C5.36532 4.76016 6.44481 3.97502 7.67617 3.53169C8.90753 3.08836 10.2398 3.0052 11.5167 3.29196C12.7936 3.57872 13.9624 4.22352 14.8859 5.15078C16.0148 6.28539 16.7091 7.78052 16.8477 9.375H15C14.5027 9.375 14.0258 9.57254 13.6742 9.92417C13.3225 10.2758 13.125 10.7527 13.125 11.25V14.375C13.125 14.8723 13.3225 15.3492 13.6742 15.7008C14.0258 16.0525 14.5027 16.25 15 16.25H16.875C16.875 16.7473 16.6775 17.2242 16.3258 17.5758C15.9742 17.9275 15.4973 18.125 15 18.125H10.625C10.4592 18.125 10.3003 18.1908 10.1831 18.3081C10.0658 18.4253 10 18.5842 10 18.75C10 18.9158 10.0658 19.0747 10.1831 19.1919C10.3003 19.3092 10.4592 19.375 10.625 19.375H15C15.8288 19.375 16.6237 19.0458 17.2097 18.4597C17.7958 17.8737 18.125 17.0788 18.125 16.25V10C18.1291 8.93717 17.9234 7.88398 17.5197 6.90077C17.1161 5.91757 16.5224 5.02368 15.7727 4.27031ZM5 10.625C5.16576 10.625 5.32473 10.6908 5.44194 10.8081C5.55915 10.9253 5.625 11.0842 5.625 11.25V14.375C5.625 14.5408 5.55915 14.6997 5.44194 14.8169C5.32473 14.9342 5.16576 15 5 15H3.75C3.58424 15 3.42527 14.9342 3.30806 14.8169C3.19085 14.6997 3.125 14.5408 3.125 14.375V10.625H5ZM15 15C14.8342 15 14.6753 14.9342 14.5581 14.8169C14.4408 14.6997 14.375 14.5408 14.375 14.375V11.25C14.375 11.0842 14.4408 10.9253 14.5581 10.8081C14.6753 10.6908 14.8342 10.625 15 10.625H16.875V15H15Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Работает как цифровой менеджер — понятно, уверенно, с нужной интонацией</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case5.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais5.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Автоворонка</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Лидмагнит</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Маркетинг</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Аватар в автоворонке или как живая визитка</h3>
                                                            <div class="size-14 trout-color">Аватар встречает клиента в автоцепочке, приветствует, подогревает интерес и вызывает эмоцию</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M18.0132 4.36955C17.917 4.14729 17.7576 3.95822 17.5548 3.82584C17.352 3.69347 17.1147 3.62363 16.8725 3.62502H3.12254C2.88061 3.6255 2.64402 3.69617 2.44146 3.82846C2.23891 3.96076 2.0791 4.14899 1.98142 4.37032C1.88374 4.59165 1.85238 4.83658 1.89116 5.07538C1.92994 5.31418 2.03718 5.53659 2.19988 5.71565L2.20613 5.72268L7.49754 11.3727V17.375C7.49749 17.6013 7.55883 17.8233 7.67503 18.0174C7.79124 18.2115 7.95794 18.3704 8.15737 18.4772C8.3568 18.584 8.58148 18.6347 8.80745 18.6239C9.03343 18.613 9.25222 18.5411 9.44051 18.4156L11.9405 16.7485C12.1119 16.6343 12.2524 16.4796 12.3496 16.298C12.4468 16.1165 12.4976 15.9137 12.4975 15.7078V11.3727L17.7897 5.72268L17.796 5.71565C17.9604 5.53741 18.0687 5.3147 18.1073 5.07531C18.1459 4.83592 18.1132 4.59045 18.0132 4.36955ZM11.5866 10.5219C11.3695 10.752 11.2482 11.0563 11.2475 11.3727V15.7078L8.74754 17.375V11.3727C8.74826 11.0551 8.62752 10.7494 8.41004 10.518L3.12254 4.87502H16.8725L11.5866 10.5219Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Идеально для воронок в Telegram, WhatsApp, Instagram</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M17.7594 5.73184L14.268 2.24122C14.1519 2.12511 14.0141 2.03301 13.8624 1.97018C13.7107 1.90734 13.5482 1.875 13.384 1.875C13.2198 1.875 13.0572 1.90734 12.9056 1.97018C12.7539 2.03301 12.6161 2.12511 12.5 2.24122L2.86641 11.8748C2.74983 11.9905 2.65741 12.1281 2.59451 12.2798C2.5316 12.4315 2.49948 12.5942 2.50001 12.7584V16.2498C2.50001 16.5813 2.6317 16.8993 2.86612 17.1337C3.10054 17.3681 3.41849 17.4998 3.75001 17.4998H16.875C17.0408 17.4998 17.1997 17.434 17.3169 17.3168C17.4342 17.1995 17.5 17.0406 17.5 16.8748C17.5 16.7091 17.4342 16.5501 17.3169 16.4329C17.1997 16.3157 17.0408 16.2498 16.875 16.2498H9.00938L17.7594 7.49981C17.8755 7.38373 17.9676 7.24592 18.0304 7.09425C18.0933 6.94257 18.1256 6.78 18.1256 6.61583C18.1256 6.45165 18.0933 6.28908 18.0304 6.13741C17.9676 5.98573 17.8755 5.84792 17.7594 5.73184ZM10.625 5.8834L11.9289 7.18731L5.31251 13.8037L4.0086 12.4998L10.625 5.8834ZM3.75001 16.2498V14.0084L5.99141 16.2498H3.75001ZM7.50001 15.9912L6.19688 14.6873L12.8125 8.0709L14.1164 9.37481L7.50001 15.9912ZM15 8.49122L11.5094 4.99981L13.3844 3.12481L16.875 6.61622L15 8.49122Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Можно персонализировать под сегмент или действие</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case6.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais6.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Боты</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Персонализация</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Поддержка</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-24">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Аватар для автоответов и ботов</h3>
                                                            <div class="size-14 trout-color">AI-аватар автоматически отвечает клиенту от имени бренда: приветствует, информирует, уточняет детали.</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="flex-vertical gap-6">
                                                                    <div class="grid-icon-cases">
                                                                        <div class="wrapper-icon-cases">
                                                                            <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path d="M17.76 2.24083C17.6028 2.08375 17.4066 1.97141 17.1915 1.91538C16.9765 1.85935 16.7504 1.86167 16.5366 1.92208H16.5248L1.52952 6.47208C1.28543 6.54228 1.0685 6.68517 0.907646 6.88173C0.746787 7.07829 0.649622 7.31919 0.629091 7.57235C0.60856 7.82551 0.665637 8.07892 0.79272 8.29883C0.919804 8.51874 1.11086 8.69472 1.34046 8.80333L8.02952 11.9713L11.1975 18.6604C11.2975 18.8746 11.4567 19.0557 11.6563 19.1824C11.856 19.309 12.0876 19.3759 12.3241 19.3752C12.36 19.3752 12.3959 19.3736 12.4319 19.3705C12.6841 19.3501 12.9241 19.253 13.1196 19.0923C13.3151 18.9315 13.4568 18.7149 13.5256 18.4713L18.0725 3.47599C18.0725 3.47208 18.0725 3.46818 18.0725 3.46427C18.1337 3.25096 18.137 3.0252 18.0821 2.81019C18.0272 2.59518 17.916 2.39866 17.76 2.24083ZM12.3311 18.1135L12.3272 18.1244L9.25218 11.633L12.9428 7.94161C13.0551 7.82345 13.1167 7.66611 13.1146 7.50313C13.1126 7.34015 13.0469 7.18444 12.9316 7.06919C12.8164 6.95394 12.6607 6.88827 12.4977 6.88618C12.3347 6.8841 12.1774 6.94576 12.0592 7.05802L8.3678 10.7486L1.87562 7.67365H1.88655L16.8756 3.12521L12.3311 18.1135Z" fill="#4BAEEB"></path>
                                                                                </svg></div>
                                                                        </div>
                                                                        <div class="size-14 trout-color">Идеально для Telegram-ботов, WhatsApp и автоответов на сайте</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M15.7727 4.27031C15.025 3.51514 14.1357 2.91486 13.1558 2.50383C12.1758 2.09281 11.1244 1.87912 10.0617 1.875H10C7.84512 1.875 5.77849 2.73102 4.25476 4.25476C2.73102 5.77849 1.875 7.84512 1.875 10V14.375C1.875 14.8723 2.07254 15.3492 2.42417 15.7008C2.77581 16.0525 3.25272 16.25 3.75 16.25H5C5.49728 16.25 5.97419 16.0525 6.32583 15.7008C6.67746 15.3492 6.875 14.8723 6.875 14.375V11.25C6.875 10.7527 6.67746 10.2758 6.32583 9.92417C5.97419 9.57254 5.49728 9.375 5 9.375H3.15313C3.27366 8.07182 3.76315 6.83 4.56424 5.79508C5.36532 4.76016 6.44481 3.97502 7.67617 3.53169C8.90753 3.08836 10.2398 3.0052 11.5167 3.29196C12.7936 3.57872 13.9624 4.22352 14.8859 5.15078C16.0148 6.28539 16.7091 7.78052 16.8477 9.375H15C14.5027 9.375 14.0258 9.57254 13.6742 9.92417C13.3225 10.2758 13.125 10.7527 13.125 11.25V14.375C13.125 14.8723 13.3225 15.3492 13.6742 15.7008C14.0258 16.0525 14.5027 16.25 15 16.25H16.875C16.875 16.7473 16.6775 17.2242 16.3258 17.5758C15.9742 17.9275 15.4973 18.125 15 18.125H10.625C10.4592 18.125 10.3003 18.1908 10.1831 18.3081C10.0658 18.4253 10 18.5842 10 18.75C10 18.9158 10.0658 19.0747 10.1831 19.1919C10.3003 19.3092 10.4592 19.375 10.625 19.375H15C15.8288 19.375 16.6237 19.0458 17.2097 18.4597C17.7958 17.8737 18.125 17.0788 18.125 16.25V10C18.1291 8.93717 17.9234 7.88398 17.5197 6.90077C17.1161 5.91757 16.5224 5.02368 15.7727 4.27031ZM5 10.625C5.16576 10.625 5.32473 10.6908 5.44194 10.8081C5.55915 10.9253 5.625 11.0842 5.625 11.25V14.375C5.625 14.5408 5.55915 14.6997 5.44194 14.8169C5.32473 14.9342 5.16576 15 5 15H3.75C3.58424 15 3.42527 14.9342 3.30806 14.8169C3.19085 14.6997 3.125 14.5408 3.125 14.375V10.625H5ZM15 15C14.8342 15 14.6753 14.9342 14.5581 14.8169C14.4408 14.6997 14.375 14.5408 14.375 14.375V11.25C14.375 11.0842 14.4408 10.9253 14.5581 10.8081C14.6753 10.6908 14.8342 10.625 15 10.625H16.875V15H15Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Как живой менеджер — сокращает время ответа и повышает доверие</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper-btn left-aling">
                                                            <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                                <div>Сделать похожее</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case7.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/Cais7.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-arrow-left w-slider-arrow-left">
                                    <div class="w-icon-slider-left"></div>
                                </div>
                                <div class="slider-arrow-right w-slider-arrow-right">
                                    <div class="w-icon-slider-right"></div>
                                </div>
                                <div class="flex-vertical gap-24 margin-48">
                                    <div class="box-center-aling vertical-flex gap-24">
                                        <div class="thumbnails-wrapper">
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais3.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais2.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais4.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais5.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais6.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                            <div class="thumbnails-item"><img loading="lazy" src="{{asset('images/Cais7.jpg')}}" alt="" class="thumbnails-img">
                                                <div class="white-color-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-nav w-slider-nav w-slider-nav-invert w-round"></div>
                            </div>
                            <div data-delay="4000" data-animation="slide" class="thumbnail-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true" data-thumbs-for="#mainSlider">
                                <div class="slider-mask-thumbnail w-slider-mask">
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item active-preview">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img sizes="(max-width: 997px) 100vw, 997px" srcset="{{asset('images/head-2-p-500.jpg')}} 500w, {{asset('images/head-2-p-800.jpg')}} 800w, {{asset('images/head-2.jpg')}} 997w" alt="" src="{{asset('images/head-2.jpg')}}" loading="lazy" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14 active">AI-консультант</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/Cais3_1.jpg')}}" alt="" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Презентация</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/Cais5_1.jpg')}}" alt="" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Маркетплейсы</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img sizes="(max-width: 997px) 100vw, 997px" srcset="{{asset('images/head-1-p-500.jpg')}} 500w, {{asset('images/head-1-p-800.jpg')}} 800w, {{asset('images/head-1.jpg')}} 997w" alt="" src="{{asset('images/head-1.jpg')}}" loading="lazy" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Шортсы</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/content-img-3.jpg')}}" alt="" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Рассылки</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/Cais6_1.jpg')}}" alt="" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Живая визитика</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/Cais7_1.jpg')}}" alt="" class="thumbnails-img"><img src="{{asset('images/Star.svg')}}" loading="lazy" alt="" class="star-img"></div>
                                                <div class="size-14">Автоответы</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-arrow w-slider-arrow-left">
                                    <div class="w-icon-slider-left"></div>
                                </div>
                                <div class="right-arrow w-slider-arrow-right">
                                    <div class="w-icon-slider-right"></div>
                                </div>
                                <div class="slider-nav thumbnail w-slider-nav w-slider-nav-invert w-round"></div>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Tab 2" class="tab-pane-cases w-tab-pane">
                        <div class="wrapper-slider">
                            <div data-delay="4000" data-animation="slide" class="slider-cases w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true" id="mainSlidertab">
                                <div class="slider-mask w-slider-mask">
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Образование</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#История</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Персонажи</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-32">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Говорящий исторический персонаж для обучения</h3>
                                                            <div class="size-14 trout-color">AI-аватар оживляет образ известного исторического деятеля</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M19.6686 6.94843L10.2936 1.94843C10.2031 1.90027 10.1023 1.87509 9.9998 1.87509C9.89736 1.87509 9.79648 1.90027 9.70605 1.94843L0.331055 6.94843C0.231058 7.00172 0.14743 7.08119 0.0891172 7.17834C0.0308042 7.2755 0 7.38668 0 7.49999C0 7.6133 0.0308042 7.72448 0.0891172 7.82163C0.14743 7.91879 0.231058 7.99826 0.331055 8.05155L2.4998 9.20858V12.9914C2.49916 13.2984 2.61214 13.5948 2.81699 13.8234C3.84043 14.9633 6.1334 16.875 9.9998 16.875C11.2818 16.8856 12.5542 16.6534 13.7498 16.1906V18.75C13.7498 18.9157 13.8157 19.0747 13.9329 19.1919C14.0501 19.3091 14.209 19.375 14.3748 19.375C14.5406 19.375 14.6995 19.3091 14.8167 19.1919C14.934 19.0747 14.9998 18.9157 14.9998 18.75V15.5867C15.8148 15.1162 16.5513 14.5213 17.1826 13.8234C17.3875 13.5948 17.5005 13.2984 17.4998 12.9914V9.20858L19.6686 8.05155C19.7686 7.99826 19.8522 7.91879 19.9105 7.82163C19.9688 7.72448 19.9996 7.6133 19.9996 7.49999C19.9996 7.38668 19.9688 7.2755 19.9105 7.17834C19.8522 7.08119 19.7686 7.00172 19.6686 6.94843ZM9.9998 15.625C6.61934 15.625 4.63105 13.9734 3.7498 12.9914V9.87499L9.70605 13.0515C9.79648 13.0997 9.89736 13.1249 9.9998 13.1249C10.1023 13.1249 10.2031 13.0997 10.2936 13.0515L13.7498 11.2086V14.8289C12.7654 15.2883 11.5248 15.625 9.9998 15.625ZM16.2498 12.9883C15.8752 13.404 15.456 13.7773 14.9998 14.1016V10.5414L16.2498 9.87499V12.9883ZM14.6873 9.29218L14.6701 9.28202L10.2951 6.94843C10.1491 6.87387 9.97974 6.85964 9.82338 6.90879C9.66702 6.95795 9.53623 7.06656 9.45918 7.21123C9.38213 7.3559 9.365 7.52504 9.41147 7.68222C9.45794 7.8394 9.56429 7.97204 9.70762 8.05155L13.3592 9.99999L9.9998 11.7914L1.95293 7.49999L9.9998 3.20858L18.0467 7.49999L14.6873 9.29218Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Используется в образовательных видео, музейных экспозициях и YouTube</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1.875 8.12498H3.75V13.125H2.5C2.33424 13.125 2.17527 13.1908 2.05806 13.308C1.94085 13.4252 1.875 13.5842 1.875 13.75C1.875 13.9157 1.94085 14.0747 2.05806 14.1919C2.17527 14.3091 2.33424 14.375 2.5 14.375H17.5C17.6658 14.375 17.8247 14.3091 17.9419 14.1919C18.0592 14.0747 18.125 13.9157 18.125 13.75C18.125 13.5842 18.0592 13.4252 17.9419 13.308C17.8247 13.1908 17.6658 13.125 17.5 13.125H16.25V8.12498H18.125C18.261 8.12484 18.3932 8.08035 18.5016 7.99827C18.6101 7.91618 18.6887 7.80097 18.7258 7.67012C18.7628 7.53927 18.7561 7.39992 18.7068 7.2732C18.6574 7.14648 18.5681 7.03931 18.4523 6.96795L10.3273 1.96795C10.2289 1.90741 10.1156 1.87537 10 1.87537C9.88442 1.87537 9.77111 1.90741 9.67266 1.96795L1.54766 6.96795C1.4319 7.03931 1.34257 7.14648 1.29323 7.2732C1.24388 7.39992 1.23722 7.53927 1.27424 7.67012C1.31126 7.80097 1.38994 7.91618 1.49836 7.99827C1.60678 8.08035 1.73901 8.12484 1.875 8.12498ZM5 8.12498H7.5V13.125H5V8.12498ZM11.25 8.12498V13.125H8.75V8.12498H11.25ZM15 13.125H12.5V8.12498H15V13.125ZM10 3.23357L15.9172 6.87498H4.08281L10 3.23357ZM19.375 16.25C19.375 16.4157 19.3092 16.5747 19.1919 16.6919C19.0747 16.8091 18.9158 16.875 18.75 16.875H1.25C1.08424 16.875 0.925268 16.8091 0.808058 16.6919C0.690848 16.5747 0.625 16.4157 0.625 16.25C0.625 16.0842 0.690848 15.9252 0.808058 15.808C0.925268 15.6908 1.08424 15.625 1.25 15.625H18.75C18.9158 15.625 19.0747 15.6908 19.1919 15.808C19.3092 15.9252 19.375 16.0842 19.375 16.25Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Персонаж может «рассказывать» о себе, эпохе или научных открытиях, делая обучение ярким и запоминающимся</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-btn left-aling">
                                                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                            <div>Сделать похожее</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case9.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img sizes="100vw" srcset="{{asset('images/content-img-2-p-500.jpg')}} 500w, {{asset('images/content-img-2.jpg')}} 566w" alt="" src="{{asset('images/content-img-2.jpg')}}" loading="lazy" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Образование</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Объяснение</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Мультиязычность</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-32">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>AI-спикер: объясняет сложное простыми словами</h3>
                                                            <div class="size-14 trout-color">Аватар помогает донести даже самые сложные идеи — чётко, просто и на любом языке.</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M19.6686 6.94843L10.2936 1.94843C10.2031 1.90027 10.1023 1.87509 9.9998 1.87509C9.89736 1.87509 9.79648 1.90027 9.70605 1.94843L0.331055 6.94843C0.231058 7.00172 0.14743 7.08119 0.0891172 7.17834C0.0308042 7.2755 0 7.38668 0 7.49999C0 7.6133 0.0308042 7.72448 0.0891172 7.82163C0.14743 7.91879 0.231058 7.99826 0.331055 8.05155L2.4998 9.20858V12.9914C2.49916 13.2984 2.61214 13.5948 2.81699 13.8234C3.84043 14.9633 6.1334 16.875 9.9998 16.875C11.2818 16.8856 12.5542 16.6534 13.7498 16.1906V18.75C13.7498 18.9157 13.8157 19.0747 13.9329 19.1919C14.0501 19.3091 14.209 19.375 14.3748 19.375C14.5406 19.375 14.6995 19.3091 14.8167 19.1919C14.934 19.0747 14.9998 18.9157 14.9998 18.75V15.5867C15.8148 15.1162 16.5513 14.5213 17.1826 13.8234C17.3875 13.5948 17.5005 13.2984 17.4998 12.9914V9.20858L19.6686 8.05155C19.7686 7.99826 19.8522 7.91879 19.9105 7.82163C19.9688 7.72448 19.9996 7.6133 19.9996 7.49999C19.9996 7.38668 19.9688 7.2755 19.9105 7.17834C19.8522 7.08119 19.7686 7.00172 19.6686 6.94843ZM9.9998 15.625C6.61934 15.625 4.63105 13.9734 3.7498 12.9914V9.87499L9.70605 13.0515C9.79648 13.0997 9.89736 13.1249 9.9998 13.1249C10.1023 13.1249 10.2031 13.0997 10.2936 13.0515L13.7498 11.2086V14.8289C12.7654 15.2883 11.5248 15.625 9.9998 15.625ZM16.2498 12.9883C15.8752 13.404 15.456 13.7773 14.9998 14.1016V10.5414L16.2498 9.87499V12.9883ZM14.6873 9.29218L14.6701 9.28202L10.2951 6.94843C10.1491 6.87387 9.97974 6.85964 9.82338 6.90879C9.66702 6.95795 9.53623 7.06656 9.45918 7.21123C9.38213 7.3559 9.365 7.52504 9.41147 7.68222C9.45794 7.8394 9.56429 7.97204 9.70762 8.05155L13.3592 9.99999L9.9998 11.7914L1.95293 7.49999L9.9998 3.20858L18.0467 7.49999L14.6873 9.29218Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Используйте для курсов, обучения, презентаций или YouTube-контента</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M10 13.75C10.9942 13.749 11.9475 13.3535 12.6505 12.6505C13.3535 11.9475 13.749 10.9942 13.75 10V5C13.75 4.00544 13.3549 3.05161 12.6517 2.34835C11.9484 1.64509 10.9946 1.25 10 1.25C9.00544 1.25 8.05161 1.64509 7.34835 2.34835C6.64509 3.05161 6.25 4.00544 6.25 5V10C6.25103 10.9942 6.64645 11.9475 7.34949 12.6505C8.05253 13.3535 9.00576 13.749 10 13.75ZM7.5 5C7.5 4.33696 7.76339 3.70107 8.23223 3.23223C8.70107 2.76339 9.33696 2.5 10 2.5C10.663 2.5 11.2989 2.76339 11.7678 3.23223C12.2366 3.70107 12.5 4.33696 12.5 5V10C12.5 10.663 12.2366 11.2989 11.7678 11.7678C11.2989 12.2366 10.663 12.5 10 12.5C9.33696 12.5 8.70107 12.2366 8.23223 11.7678C7.76339 11.2989 7.5 10.663 7.5 10V5ZM10.625 16.2188V18.125C10.625 18.2908 10.5592 18.4497 10.4419 18.5669C10.3247 18.6842 10.1658 18.75 10 18.75C9.83424 18.75 9.67527 18.6842 9.55806 18.5669C9.44085 18.4497 9.375 18.2908 9.375 18.125V16.2188C7.8341 16.062 6.40607 15.3393 5.36707 14.1907C4.32806 13.042 3.7519 11.5489 3.75 10C3.75 9.83424 3.81585 9.67527 3.93306 9.55806C4.05027 9.44085 4.20924 9.375 4.375 9.375C4.54076 9.375 4.69973 9.44085 4.81694 9.55806C4.93415 9.67527 5 9.83424 5 10C5 11.3261 5.52678 12.5979 6.46447 13.5355C7.40215 14.4732 8.67392 15 10 15C11.3261 15 12.5979 14.4732 13.5355 13.5355C14.4732 12.5979 15 11.3261 15 10C15 9.83424 15.0658 9.67527 15.1831 9.55806C15.3003 9.44085 15.4592 9.375 15.625 9.375C15.7908 9.375 15.9497 9.44085 16.0669 9.55806C16.1842 9.67527 16.25 9.83424 16.25 10C16.2481 11.5489 15.6719 13.042 14.6329 14.1907C13.5939 15.3393 12.1659 16.062 10.625 16.2188Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Переводите и озвучивайте информацию голосом, понятным вашей аудитории</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-btn left-aling">
                                                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                            <div>Сделать похожее</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case8.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/content-img-1.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Поздравление</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Личное</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Контент</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-32">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Индивидуальное видео-поздравление</h3>
                                                            <div class="size-14 trout-color">AI-аватар поздравляет с днём рождения, праздником или любым событием</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17.76 2.24083C17.6028 2.08375 17.4066 1.97141 17.1915 1.91538C16.9765 1.85935 16.7504 1.86167 16.5366 1.92208H16.5248L1.52952 6.47208C1.28543 6.54228 1.0685 6.68517 0.907646 6.88173C0.746787 7.07829 0.649622 7.31919 0.629091 7.57235C0.60856 7.82551 0.665637 8.07892 0.79272 8.29883C0.919804 8.51874 1.11086 8.69472 1.34046 8.80333L8.02952 11.9713L11.1975 18.6604C11.2975 18.8746 11.4567 19.0557 11.6563 19.1824C11.856 19.309 12.0876 19.3759 12.3241 19.3752C12.36 19.3752 12.3959 19.3736 12.4319 19.3705C12.6841 19.3501 12.9241 19.253 13.1196 19.0923C13.3151 18.9315 13.4568 18.7149 13.5256 18.4713L18.0725 3.47599C18.0725 3.47208 18.0725 3.46818 18.0725 3.46427C18.1337 3.25096 18.137 3.0252 18.0821 2.81019C18.0272 2.59518 17.916 2.39866 17.76 2.24083ZM12.3311 18.1135L12.3272 18.1244L9.25218 11.633L12.9428 7.94161C13.0551 7.82345 13.1167 7.66611 13.1146 7.50313C13.1126 7.34015 13.0469 7.18444 12.9316 7.06919C12.8164 6.95394 12.6607 6.88827 12.4977 6.88618C12.3347 6.8841 12.1774 6.94576 12.0592 7.05802L8.3678 10.7486L1.87562 7.67365H1.88655L16.8756 3.12521L12.3311 18.1135Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Подходит для email-рассылок, мессенджеров, поздравлений и соцсетей</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M16.9531 2.71881C16.7857 2.6038 16.5926 2.53149 16.3908 2.50821C16.189 2.48492 15.9846 2.51136 15.7953 2.58522C14.6992 3.01178 12.4859 3.72741 10 3.72741C7.51406 3.72741 5.3 3.01178 4.20234 2.58522C4.01296 2.5117 3.8085 2.48545 3.60669 2.50875C3.40487 2.53204 3.21177 2.60417 3.04411 2.71889C2.87645 2.83362 2.73928 2.98748 2.64447 3.16715C2.54966 3.34683 2.50007 3.54691 2.5 3.75006V8.1071C2.5 10.9071 3.25391 13.5485 4.62344 15.543C6.04219 17.6102 7.95156 18.7462 10 18.7462C12.0484 18.7462 13.9578 17.6079 15.3766 15.543C16.7461 13.5501 17.5 10.9087 17.5 8.10866V3.75006C17.4996 3.54665 17.4496 3.34639 17.3543 3.16668C17.259 2.98697 17.1213 2.83324 16.9531 2.71881ZM16.25 8.10944C16.25 10.6594 15.5734 13.0493 14.3461 14.8383C13.1672 16.5548 11.6242 17.5001 10 17.5001C8.37578 17.5001 6.83281 16.5548 5.65391 14.8376C4.42656 13.0469 3.75 10.6587 3.75 8.10866V3.75006C4.93047 4.20866 7.31094 4.97741 10 4.97741C12.6891 4.97741 15.0703 4.20866 16.25 3.75006V8.11022V8.10944ZM14.8438 9.58366C14.9542 9.70798 15.0107 9.87108 15.0009 10.0371C14.9911 10.2031 14.9157 10.3584 14.7914 10.4688C14.6671 10.5793 14.504 10.6358 14.338 10.626C14.172 10.6161 14.0167 10.5408 13.9062 10.4165C13.6969 10.1821 13.2148 10.0001 12.8125 10.0001C12.4102 10.0001 11.925 10.1829 11.7188 10.4165C11.6082 10.5408 11.4528 10.6161 11.2867 10.6258C11.1207 10.6356 10.9575 10.579 10.8332 10.4684C10.7089 10.3579 10.6336 10.2025 10.6238 10.0364C10.6141 9.87034 10.6707 9.7072 10.7812 9.58288C11.2273 9.08444 12.0422 8.75006 12.8125 8.75006C13.5828 8.75006 14.3945 9.08444 14.8438 9.58288V9.58366ZM7.1875 10.0001C6.78203 10.0001 6.3 10.1829 6.09375 10.4165C5.98321 10.5408 5.82781 10.6161 5.66174 10.6258C5.49566 10.6356 5.33252 10.579 5.2082 10.4684C5.08388 10.3579 5.00857 10.2025 4.99882 10.0364C4.98908 9.87034 5.04571 9.7072 5.15625 9.58288C5.60547 9.08444 6.42031 8.75006 7.1875 8.75006C7.95469 8.75006 8.76953 9.08444 9.21875 9.58288C9.32929 9.7072 9.38592 9.87034 9.37618 10.0364C9.36643 10.2025 9.29112 10.3579 9.1668 10.4684C9.10524 10.5232 9.0335 10.5652 8.95569 10.5922C8.87787 10.6193 8.79549 10.6307 8.71326 10.6258C8.54719 10.6161 8.39179 10.5408 8.28125 10.4165C8.075 10.1829 7.59297 10.0001 7.1875 10.0001ZM13.1602 13.5305C12.7722 13.9908 12.2884 14.3608 11.7425 14.6146C11.1967 14.8685 10.602 15 10 15C9.39802 15 8.80331 14.8685 8.25746 14.6146C7.7116 14.3608 7.22779 13.9908 6.83984 13.5305C6.78655 13.4681 6.74607 13.3958 6.72072 13.3177C6.69536 13.2396 6.68564 13.1573 6.6921 13.0755C6.69855 12.9937 6.72106 12.9139 6.75834 12.8408C6.79563 12.7677 6.84695 12.7026 6.90938 12.6493C6.9718 12.596 7.04412 12.5555 7.12219 12.5302C7.20027 12.5048 7.28257 12.4951 7.3644 12.5015C7.44623 12.508 7.52599 12.5305 7.59912 12.5678C7.67225 12.6051 7.73733 12.6564 7.79063 12.7188C8.06113 13.0418 8.39914 13.3015 8.78087 13.4797C9.16259 13.6579 9.57873 13.7502 10 13.7502C10.4213 13.7502 10.8374 13.6579 11.2191 13.4797C11.6009 13.3015 11.9389 13.0418 12.2094 12.7188C12.2627 12.6564 12.3277 12.6051 12.4009 12.5678C12.474 12.5305 12.5538 12.508 12.6356 12.5015C12.7174 12.4951 12.7997 12.5048 12.8778 12.5302C12.9559 12.5555 13.0282 12.596 13.0906 12.6493C13.1531 12.7026 13.2044 12.7677 13.2417 12.8408C13.2789 12.9139 13.3014 12.9937 13.3079 13.0755C13.3144 13.1573 13.3046 13.2396 13.2793 13.3177C13.2539 13.3958 13.2135 13.4681 13.1602 13.5305Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Используйте не только своё фото, но и образы знаменитостей, исторических или даже вымышленных персонажей</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-btn left-aling">
                                                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                            <div>Сделать похожее</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case10.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/image-sllide.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Инфо</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Контент</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Новости</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-32">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>Информационное видео от цифрового спикера</h3>
                                                            <div class="size-14 trout-color">AI-аватар рассказывает новость, даёт полезную информацию или комментирует события</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17.76 2.24083C17.6028 2.08375 17.4066 1.97141 17.1915 1.91538C16.9765 1.85935 16.7504 1.86167 16.5366 1.92208H16.5248L1.52952 6.47208C1.28543 6.54228 1.0685 6.68517 0.907646 6.88173C0.746787 7.07829 0.649622 7.31919 0.629091 7.57235C0.60856 7.82551 0.665637 8.07892 0.79272 8.29883C0.919804 8.51874 1.11086 8.69472 1.34046 8.80333L8.02952 11.9713L11.1975 18.6604C11.2975 18.8746 11.4567 19.0557 11.6563 19.1824C11.856 19.309 12.0876 19.3759 12.3241 19.3752C12.36 19.3752 12.3959 19.3736 12.4319 19.3705C12.6841 19.3501 12.9241 19.253 13.1196 19.0923C13.3151 18.9315 13.4568 18.7149 13.5256 18.4713L18.0725 3.47599C18.0725 3.47208 18.0725 3.46818 18.0725 3.46427C18.1337 3.25096 18.137 3.0252 18.0821 2.81019C18.0272 2.59518 17.916 2.39866 17.76 2.24083ZM12.3311 18.1135L12.3272 18.1244L9.25218 11.633L12.9428 7.94161C13.0551 7.82345 13.1167 7.66611 13.1146 7.50313C13.1126 7.34015 13.0469 7.18444 12.9316 7.06919C12.8164 6.95394 12.6607 6.88827 12.4977 6.88618C12.3347 6.8841 12.1774 6.94576 12.0592 7.05802L8.3678 10.7486L1.87562 7.67365H1.88655L16.8756 3.12521L12.3311 18.1135Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Используется в сообществах, шортсах, на лендингах или внутри видеоконтента</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M15.436 10.0828L11.404 8.59844L9.91958 4.56328C9.83168 4.32448 9.67264 4.11838 9.46393 3.9728C9.25521 3.82722 9.00687 3.74917 8.75239 3.74917C8.49792 3.74917 8.24958 3.82722 8.04086 3.9728C7.83215 4.11838 7.67311 4.32448 7.58521 4.56328L6.09927 8.59375L2.06411 10.0781C1.82531 10.166 1.61921 10.3251 1.47363 10.5338C1.32806 10.7425 1.25 10.9908 1.25 11.2453C1.25 11.4998 1.32806 11.7481 1.47363 11.9568C1.61921 12.1656 1.82531 12.3246 2.06411 12.4125L6.0938 13.9062L7.57818 17.9391C7.66608 18.1779 7.82512 18.384 8.03383 18.5295C8.24255 18.6751 8.49089 18.7532 8.74536 18.7532C8.99983 18.7532 9.24818 18.6751 9.45689 18.5295C9.66561 18.384 9.82465 18.1779 9.91255 17.9391L11.3969 13.907L15.4321 12.4227C15.6709 12.3348 15.877 12.1757 16.0226 11.967C16.1681 11.7583 16.2462 11.5099 16.2462 11.2555C16.2462 11.001 16.1681 10.7527 16.0226 10.5439C15.877 10.3352 15.6709 10.1762 15.4321 10.0883L15.436 10.0828ZM10.968 12.7344C10.7991 12.7964 10.6457 12.8944 10.5185 13.0216C10.3913 13.1488 10.2933 13.3022 10.2313 13.4711L8.74693 17.4914L7.26568 13.468C7.20364 13.3 7.10594 13.1474 6.9793 13.0208C6.85266 12.8941 6.70009 12.7964 6.53208 12.7344L2.51177 11.25L6.53208 9.76562C6.70009 9.70359 6.85266 9.60589 6.9793 9.47925C7.10594 9.35261 7.20364 9.20004 7.26568 9.03203L8.75005 5.01172L10.2344 9.03203C10.2964 9.20093 10.3944 9.35431 10.5216 9.48153C10.6489 9.60875 10.8022 9.70676 10.9711 9.76875L14.9915 11.2531L10.968 12.7344ZM11.2501 3.125C11.2501 2.95924 11.3159 2.80027 11.4331 2.68306C11.5503 2.56585 11.7093 2.5 11.8751 2.5H13.1251V1.25C13.1251 1.08424 13.1909 0.925268 13.3081 0.808058C13.4253 0.690848 13.5843 0.625 13.7501 0.625C13.9158 0.625 14.0748 0.690848 14.192 0.808058C14.3092 0.925268 14.3751 1.08424 14.3751 1.25V2.5H15.6251C15.7908 2.5 15.9498 2.56585 16.067 2.68306C16.1842 2.80027 16.2501 2.95924 16.2501 3.125C16.2501 3.29076 16.1842 3.44973 16.067 3.56694C15.9498 3.68415 15.7908 3.75 15.6251 3.75H14.3751V5C14.3751 5.16576 14.3092 5.32473 14.192 5.44194C14.0748 5.55915 13.9158 5.625 13.7501 5.625C13.5843 5.625 13.4253 5.55915 13.3081 5.44194C13.1909 5.32473 13.1251 5.16576 13.1251 5V3.75H11.8751C11.7093 3.75 11.5503 3.68415 11.4331 3.56694C11.3159 3.44973 11.2501 3.29076 11.2501 3.125ZM19.3751 6.875C19.3751 7.04076 19.3092 7.19973 19.192 7.31694C19.0748 7.43415 18.9158 7.5 18.7501 7.5H18.1251V8.125C18.1251 8.29076 18.0592 8.44973 17.942 8.56694C17.8248 8.68415 17.6658 8.75 17.5001 8.75C17.3343 8.75 17.1753 8.68415 17.0581 8.56694C16.9409 8.44973 16.8751 8.29076 16.8751 8.125V7.5H16.2501C16.0843 7.5 15.9253 7.43415 15.8081 7.31694C15.6909 7.19973 15.6251 7.04076 15.6251 6.875C15.6251 6.70924 15.6909 6.55027 15.8081 6.43306C15.9253 6.31585 16.0843 6.25 16.2501 6.25H16.8751V5.625C16.8751 5.45924 16.9409 5.30027 17.0581 5.18306C17.1753 5.06585 17.3343 5 17.5001 5C17.6658 5 17.8248 5.06585 17.942 5.18306C18.0592 5.30027 18.1251 5.45924 18.1251 5.625V6.25H18.7501C18.9158 6.25 19.0748 6.31585 19.192 6.43306C19.3092 6.55027 19.3751 6.70924 19.3751 6.875Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Можно выбрать серьёзного или яркого персонажа — под формат новостей, обзоров, научных фактов или инструкций</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-btn left-aling">
                                                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                            <div>Сделать похожее</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case11.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/content-img-4.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide w-slide">
                                        <div class="wrapper-content-cases">
                                            <div class="grid-cases">
                                                <div class="inf-presentation-block">
                                                    <div class="flex-horizontal gap-8">
                                                        <div class="teg-item">
                                                            <div>#Инфо</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Контент</div>
                                                        </div>
                                                        <div class="teg-item">
                                                            <div>#Новости</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-vertical gap-32">
                                                        <div class="flex-vertical gap-12">
                                                            <h3>AI-Пушкин читает своё легендарное стихотворение</h3>
                                                            <div class="size-14 trout-color">AI-аватар оживляет образ Александра Сергеевича Пушкина и читает знаменитое стихотворение</div>
                                                        </div>
                                                        <div class="flex-vertical gap-12">
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M19.6686 6.94843L10.2936 1.94843C10.2031 1.90027 10.1023 1.87509 9.9998 1.87509C9.89736 1.87509 9.79648 1.90027 9.70605 1.94843L0.331055 6.94843C0.231058 7.00172 0.14743 7.08119 0.0891172 7.17834C0.0308042 7.2755 0 7.38668 0 7.49999C0 7.6133 0.0308042 7.72448 0.0891172 7.82163C0.14743 7.91879 0.231058 7.99826 0.331055 8.05155L2.4998 9.20858V12.9914C2.49916 13.2984 2.61214 13.5948 2.81699 13.8234C3.84043 14.9633 6.1334 16.875 9.9998 16.875C11.2818 16.8856 12.5542 16.6534 13.7498 16.1906V18.75C13.7498 18.9157 13.8157 19.0747 13.9329 19.1919C14.0501 19.3091 14.209 19.375 14.3748 19.375C14.5406 19.375 14.6995 19.3091 14.8167 19.1919C14.934 19.0747 14.9998 18.9157 14.9998 18.75V15.5867C15.8148 15.1162 16.5513 14.5213 17.1826 13.8234C17.3875 13.5948 17.5005 13.2984 17.4998 12.9914V9.20858L19.6686 8.05155C19.7686 7.99826 19.8522 7.91879 19.9105 7.82163C19.9688 7.72448 19.9996 7.6133 19.9996 7.49999C19.9996 7.38668 19.9688 7.2755 19.9105 7.17834C19.8522 7.08119 19.7686 7.00172 19.6686 6.94843ZM9.9998 15.625C6.61934 15.625 4.63105 13.9734 3.7498 12.9914V9.87499L9.70605 13.0515C9.79648 13.0997 9.89736 13.1249 9.9998 13.1249C10.1023 13.1249 10.2031 13.0997 10.2936 13.0515L13.7498 11.2086V14.8289C12.7654 15.2883 11.5248 15.625 9.9998 15.625ZM16.2498 12.9883C15.8752 13.404 15.456 13.7773 14.9998 14.1016V10.5414L16.2498 9.87499V12.9883ZM14.6873 9.29218L14.6701 9.28202L10.2951 6.94843C10.1491 6.87387 9.97974 6.85964 9.82338 6.90879C9.66702 6.95795 9.53623 7.06656 9.45918 7.21123C9.38213 7.3559 9.365 7.52504 9.41147 7.68222C9.45794 7.8394 9.56429 7.97204 9.70762 8.05155L13.3592 9.99999L9.9998 11.7914L1.95293 7.49999L9.9998 3.20858L18.0467 7.49999L14.6873 9.29218Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Используется для образовательных и культурных проектов, музейных инсталляций и творческих проектов</div>
                                                                </div>
                                                            </div>
                                                            <div class="step-item radius-16">
                                                                <div class="grid-icon-cases">
                                                                    <div class="wrapper-icon-cases">
                                                                        <div class="icon-small w-embed"><svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M15.6852 4.21016C14.1724 2.71218 12.1289 1.87282 10 1.875H9.91641C7.77604 1.89703 5.73083 2.76276 4.22513 4.28412C2.71943 5.80547 1.87489 7.85953 1.875 10C1.875 13.3594 3.95156 16.1766 7.29375 17.357C7.67071 17.4899 8.07404 17.5305 8.46992 17.4754C8.86581 17.4202 9.24269 17.271 9.56898 17.0401C9.89527 16.8092 10.1614 16.5035 10.3452 16.1485C10.5289 15.7936 10.6249 15.3997 10.625 15C10.625 14.6685 10.7567 14.3505 10.9911 14.1161C11.2255 13.8817 11.5435 13.75 11.875 13.75H15.4852C16.0522 13.7527 16.6032 13.5615 17.0466 13.2079C17.49 12.8543 17.7991 12.3597 17.9227 11.8063C18.0624 11.1912 18.1303 10.562 18.125 9.93125C18.117 8.86365 17.8973 7.80823 17.4785 6.82617C17.0597 5.84411 16.4501 4.95493 15.6852 4.21016ZM16.7008 11.5313C16.6387 11.807 16.4844 12.0533 16.2634 12.2294C16.0423 12.4056 15.7678 12.501 15.4852 12.5H11.875C11.212 12.5 10.5761 12.7634 10.1072 13.2322C9.63839 13.7011 9.375 14.337 9.375 15C9.37471 15.1997 9.3266 15.3963 9.23469 15.5736C9.14278 15.7508 9.00975 15.9035 8.84674 16.0188C8.68372 16.1341 8.49546 16.2086 8.29772 16.2362C8.09998 16.2638 7.8985 16.2436 7.71016 16.1773C4.88203 15.1797 3.125 12.8125 3.125 10C3.1249 8.18889 3.83946 6.4509 5.11344 5.16361C6.38742 3.87632 8.11789 3.14373 9.92891 3.125H9.99922C11.8103 3.13204 13.5461 3.85061 14.8322 5.12576C16.1183 6.40091 16.8517 8.13045 16.8742 9.94141C16.8789 10.4761 16.8217 11.0096 16.7039 11.5313H16.7008ZM10.9375 5.9375C10.9375 6.12292 10.8825 6.30418 10.7795 6.45835C10.6765 6.61252 10.5301 6.73268 10.3588 6.80364C10.1875 6.8746 9.99896 6.89316 9.8171 6.85699C9.63525 6.82082 9.4682 6.73153 9.33709 6.60042C9.20598 6.46931 9.11669 6.30226 9.08051 6.1204C9.04434 5.93854 9.06291 5.75004 9.13386 5.57874C9.20482 5.40743 9.32498 5.26101 9.47915 5.158C9.63332 5.05499 9.81458 5 10 5C10.2486 5 10.4871 5.09878 10.6629 5.27459C10.8387 5.45041 10.9375 5.68886 10.9375 5.9375ZM7.5 7.8125C7.5 7.99792 7.44502 8.17918 7.342 8.33335C7.23899 8.48752 7.09257 8.60768 6.92127 8.67864C6.74996 8.7496 6.56146 8.76816 6.3796 8.73199C6.19775 8.69582 6.0307 8.60653 5.89959 8.47542C5.76848 8.34431 5.67919 8.17726 5.64301 7.9954C5.60684 7.81354 5.62541 7.62504 5.69636 7.45374C5.76732 7.28243 5.88748 7.13601 6.04165 7.033C6.19582 6.92999 6.37708 6.875 6.5625 6.875C6.81114 6.875 7.0496 6.97378 7.22541 7.14959C7.40123 7.32541 7.5 7.56386 7.5 7.8125ZM7.5 12.1875C7.5 12.3729 7.44502 12.5542 7.342 12.7084C7.23899 12.8625 7.09257 12.9827 6.92127 13.0536C6.74996 13.1246 6.56146 13.1432 6.3796 13.107C6.19775 13.0708 6.0307 12.9815 5.89959 12.8504C5.76848 12.7193 5.67919 12.5523 5.64301 12.3704C5.60684 12.1885 5.62541 12 5.69636 11.8287C5.76732 11.6574 5.88748 11.511 6.04165 11.408C6.19582 11.305 6.37708 11.25 6.5625 11.25C6.81114 11.25 7.0496 11.3488 7.22541 11.5246C7.40123 11.7004 7.5 11.9389 7.5 12.1875ZM14.375 7.8125C14.375 7.99792 14.32 8.17918 14.217 8.33335C14.114 8.48752 13.9676 8.60768 13.7963 8.67864C13.625 8.7496 13.4365 8.76816 13.2546 8.73199C13.0727 8.69582 12.9057 8.60653 12.7746 8.47542C12.6435 8.34431 12.5542 8.17726 12.518 7.9954C12.4818 7.81354 12.5004 7.62504 12.5714 7.45374C12.6423 7.28243 12.7625 7.13601 12.9167 7.033C13.0708 6.92999 13.2521 6.875 13.4375 6.875C13.6861 6.875 13.9246 6.97378 14.1004 7.14959C14.2762 7.32541 14.375 7.56386 14.375 7.8125Z" fill="#4BAEEB"></path>
                                                                            </svg></div>
                                                                    </div>
                                                                    <div class="size-14 trout-color">Также подходит для социальных сетей, посвящённых поэзии и искусству</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wrapper-btn left-aling">
                                                        <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="blue-button cases-block w-inline-block">
                                                            <div>Сделать похожее</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="content-presentation" data-video-src="{{asset('vid/Case12.mp4')}}">
                                                    <a href="#" class="pause-block w-inline-block open-video">
                                                        <div class="elipse-1 white">
                                                            <div class="elipse-2">
                                                                <div class="play-icon w-embed">
                                                                    <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect fill="none" height="100%" width="100%"></rect>
                                                                        <path d="M232.3,114.3,88.3,26.4a15.5,15.5,0,0,0-16.1-.3A15.8,15.8,0,0,0,64,40V216a15.8,15.8,0,0,0,8.2,13.9,15.5,15.5,0,0,0,16.1-.3l144-87.9a16,16,0,0,0,0-27.4Z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <img loading="lazy" src="{{asset('images/content-img-5.jpg')}}" alt="" class="image-cases">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-arrow-left w-slider-arrow-left">
                                    <div class="w-icon-slider-left"></div>
                                </div>
                                <div class="slider-arrow-right w-slider-arrow-right">
                                    <div class="w-icon-slider-right"></div>
                                </div>
                                <div class="slider-nav w-slider-nav w-slider-nav-invert w-round"></div>
                            </div>
                            <div data-delay="4000" data-animation="slide" class="thumbnail-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true" data-thumbs-for="#mainSlidertab">
                                <div class="slider-mask-thumbnail w-slider-mask">
                                    <div class="slide-preview w-slide">
                                        <div id="thumb-1" class="thumbnails-item active-preview">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img sizes="100vw" srcset="{{asset('images/content-img-2-p-500.jpg')}} 500w, {{asset('images/content-img-2.jpg')}} 566w" alt="" src="{{asset('images/content-img-2.jpg')}}" loading="lazy" class="thumbnails-img"><img loading="lazy" src="{{asset('images/Star.svg')}}" alt="" class="star-img"></div>
                                                <div class="size-14">Лекция</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div id="thumb-5" class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img sizes="100vw" srcset="{{asset('images/content-img-2-p-500.jpg')}} 500w, {{asset('images/content-img-2.jpg')}} 566w" alt="" src="{{asset('images/content-img-2.jpg')}}" loading="lazy" class="thumbnails-img"><img loading="lazy" src="{{asset('images/Star.svg')}}" alt="" class="star-img"></div>
                                                <div class="size-14">История</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div id="thumb-3" class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/content-img-3.jpg')}}" alt="" class="thumbnails-img"><img loading="lazy" src="{{asset('images/Star.svg')}}" alt="" class="star-img"></div>
                                                <div class="size-14">Поздравление</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div id="thumb-4" class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/content-img-4.jpg')}}" alt="" class="thumbnails-img"><img loading="lazy" src="{{asset('images/Star.svg')}}" alt="" class="star-img"></div>
                                                <div class="size-14">Новости</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-preview w-slide">
                                        <div id="thumb-5" class="thumbnails-item">
                                            <div class="wrap-content-preview">
                                                <div class="relative-bl"><img loading="lazy" src="{{asset('images/content-img-5.jpg')}}" alt="" class="thumbnails-img"><img loading="lazy" src="{{asset('images/Star.svg')}}" alt="" class="star-img"></div>
                                                <div class="size-14">Стихи</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-arrow w-slider-arrow-left">
                                    <div class="w-icon-slider-left"></div>
                                </div>
                                <div class="right-arrow w-slider-arrow-right">
                                    <div class="w-icon-slider-right"></div>
                                </div>
                                <div class="slider-nav thumbnail w-slider-nav w-slider-nav-invert w-round"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-blur-blue"></div>
        <div class="bg-circle-fon">
            <div class="circle-1"></div>
            <div class="circle-2 center-position"></div>
            <div class="circle-4"></div>
            <div class="circle-3 bottom-position"></div>
        </div>
    </section>
    <section class="section white-bg border-top overflow-vis" id="MoreIdeas">
        <div class="container">
            <div class="w-layout-grid ideas-grid">
                <div class="sticky-block">
                    <div class="h2-block left-align">
                        <h2 class="left-aling mobi-center-aling">Другие идеи с TalkingHead</h2>
                        <div class="subheader left-aling mobi-center-aling">Не нашли нужный пример? Вот ещё 10 идей, которые вы можете реализовать прямо сейчас.</div>
                    </div>
                </div>
                <div class="ideas-block">
                    <div class="w-layout-hflex ideas-item">
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Ответ на частый вопрос от вашего имени</div>
                                <div class="size-14 trout-color"><span class="semibold">Пример:</span> «Как оформить возврат? Я сейчас всё объясню!»</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Бизнес</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Продажи</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Оффер</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Видео-презентация товара с озвучкой</div>
                                <div class="size-14 trout-color">Загрузите фото, напишите описание — и получите продающее видео.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Товары</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Продажи</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-hflex ideas-item">
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Автоответ для Telegram-бота или сайта</div>
                                <div class="size-14 trout-color">Приветствие, помощь или FAQ от лица живого аватара.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Бизнес</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Автоответ</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Онбординг</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Обращение от бренда/компании</div>
                                <div class="size-14 trout-color"><span class="semibold">Пример:</span> «Спасибо за покупку! Мы с вами 24/7».</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Лояльность</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Маркетинг</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-hflex ideas-item">
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Перевод ролика с голосом для другой страны</div>
                                <div class="size-14 trout-color">Озвучьте текст на другом языке голосом нейросети.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Мультиязычность</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Контент</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Юмористический ролик от вымышленного персонажа</div>
                                <div class="size-14 trout-color"><span class="semibold">Пример: </span>пират, маг, робот, инопланетянин поздравляет с ДР.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Лояльность</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Маркетинг</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-hflex ideas-item">
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Обучающий мини-ролик<br>(до 1 минуты)</div>
                                <div class="size-14 trout-color">Объяснение инструкции, курса, внутреннего обучения</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Образование</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Маркетинг</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Отзыв от клиента (реальный или анимированный)</div>
                                <div class="size-14 trout-color">Превратите текстовый отзыв в видео с лицом и голосом.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Отзывы</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Соцдоказательство</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-layout-hflex ideas-item">
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Видео от «эксперта» или «гуру» вашей темы</div>
                                <div class="size-14 trout-color"><span class="semibold">Пример:</span> ф«психолог объясняет, почему важно отдыхать»</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Личныйбренд</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Экспертность</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="w-layout-vflex flex-vertical gap-12">
                                <div class="size-14 semibold">Персональное приглашение на мероприятие</div>
                                <div class="size-14 trout-color">Аватар зовёт на вебинар, концерт, встречу.</div>
                            </div>
                            <div class="teg-block">
                                <div class="teg-item">
                                    <div>#Ивенты</div>
                                </div>
                                <div class="teg-item">
                                    <div>#Промо</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle-fon">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-4"></div>
            <div class="circle-3 bottom-position"></div>
        </div>
        <div class="shape-blur-blue top-left"></div>
        <div class="shape-blur-green circle min-bg-color"></div>
    </section>
    <footer class="footer-talking-head">
        <div class="footer-container">
            <div class="flex-vertical gap-40">
                <div class="h2-block left-align">
                    <h2 class="left-aling white">Как работает <span class="focus-blue">Talking</span>Head?</h2>
                    <div class="subheader left-aling light-gray">Очень просто, всего 4 шага</div>
                </div>
                <div class="wrapper-btn left-aling mobi-hide">
                    <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="white-button w-inline-block">
                        <div>Запустить бота в Telegram</div>
                    </a>
                </div>
            </div>
            <div class="how-work-footer">
                <div class="flex-horizontal grid">
                    <div class="how-work-item footer">
                        <div class="grid-icon gap-12">
                            <div class="wrapper-number-step">
                                <div>1</div>
                            </div>
                            <div class="size-14 semibold white">Загрузите фото — создайте аватар</div>
                        </div>
                    </div>
                    <div class="track-block">
                        <div class="track-item">
                            <div class="elipse-track-1">
                                <div class="elipse-track"></div>
                            </div>
                        </div>
                        <div class="track-line"></div>
                        <div class="track-item">
                            <div class="elipse-track-1">
                                <div class="elipse-track"></div>
                            </div>
                        </div>
                    </div>
                    <div class="how-work-item footer">
                        <div class="grid-icon gap-12">
                            <div class="wrapper-number-step">
                                <div>2</div>
                            </div>
                            <div class="size-14 semibold white">Синтезируйте или клонируйте голос</div>
                        </div>
                    </div>
                </div>
                <div class="flex-horizontal grid">
                    <div class="how-work-item footer">
                        <div class="grid-icon gap-12">
                            <div class="wrapper-number-step">
                                <div>3</div>
                            </div>
                            <div class="size-14 semibold white">Введите текст или добавьте аудио</div>
                        </div>
                    </div>
                    <div class="track-block">
                        <div class="track-item">
                            <div class="elipse-track-1">
                                <div class="elipse-track"></div>
                            </div>
                        </div>
                        <div class="track-line"></div>
                        <div class="track-item">
                            <div class="elipse-track-1">
                                <div class="elipse-track"></div>
                            </div>
                        </div>
                    </div>
                    <div class="how-work-item footer">
                        <div class="grid-icon gap-12">
                            <div class="wrapper-number-step">
                                <div>4</div>
                            </div>
                            <div class="size-14 semibold white">Получите видео с говорящим аватаром</div>
                        </div>
                    </div>
                </div>
                <div class="track-block rotate">
                    <div class="track-item">
                        <div class="elipse-track-1">
                            <div class="elipse-track"></div>
                        </div>
                    </div>
                    <div class="track-line more-width"></div>
                    <div class="track-item">
                        <div class="elipse-track-1">
                            <div class="elipse-track"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper-btn left-aling mobi-vis">
                <a href="https://t.me/AI_Talking_Head_bot" target='_blank' class="white-button w-inline-block">
                    <div>Запустить бота в Telegram</div>
                </a>
            </div>
        </div>
        <div class="circle-footer"></div>
        <div class="circle-footer-2"></div>
        <div class="circle-footer-3"></div>
    </footer>
    <section class="footer-section">
        <div class="container footer">
            <div class="w-layout-grid footer-grid">
                <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756eab4-b756eab1" class="footer-logo-block">
                    <div class="heading mirage-f">дщпщ</div>
                    <a href="{{ route('welcome') }}" class="footer-logo-link w-inline-block"><img
                            src="{{ asset('images/logo-time-caps-white.svg') }}" loading="lazy" alt=""
                            class="logo-footer"></a>
                </div>
                <div class="footer-link-block">
                    <div class="heading-footer">Навигация</div>
                    <a href="{{ route('talkinghead') }}" class="sales-and-content footer-link">Продажи и контент</a>
                    <a href="{{ route('talkinghead') }}" class="how-it-works-link footer-link">Как работает</a>
                    <a href="{{ route('talkinghead') }}" class="more-ideas footer-link">Больше идей</a>
                </div>
                <div class="footer-link-block">
                    <div class="heading-footer">Контакты</div>
                    <a href="mailto:hello@timecaps.pro" class="footer-link">hello@timecaps.pro</a>
                </div>
                <div id="w-node-_1f0a659d-6d2e-bea8-4ca6-e4a4b756ead3-b756eab1" class="footer-link-block">
                    <div class="wrapper-btn left-aling">
                        <a href="#" class="popap-show button-base footer w-button">Заказать внедрение</a>
                        <button type="button" onclick="document.querySelector('.popup-section').classList.add('popap-show')">
                            Оставить заявку
                        </button>
                        <a href="https://t.me/AI_Talking_Head_bot" target="_blank" class="button-base footer w-button">Перейти в бота</a>
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
    <div id="video-popup" class="video-popup">
        <div class="video-popup-inner">
            <button id="video-popup-close" class="video-popup-close">×</button>
            <div class="video-popup-content">
                <video id="popup-video" playsinline></video>
            </div>
        </div>
    </div>
    <section class="popup-section">
        <div class="popup-overflow">
            <div class="popup-bg"></div>
            <div class="popup-container">
                <div class="popup-form-grid">
                    <div class="form-header-block">
                        <div class="form-heading">Заявка на внедрение</div>
                        <div class="standart-text center-aling">Заполните свои данные и мы свяжемся с вами по вопросам внедрения данного AI агента в ваш бизнес.</div>
                    </div>
                    <div class="popup-form-block w-form">
                        <form method="POST" action="{{ route('requests.store') }}" class="form-block">
                            @csrf

                            <input type="hidden" name="request_type" value="разработка">
{{--                            <input type="hidden" name="capsule_id" value="{{$capsuleId}}">--}}

                            <div class="form-row-grid">
                                <div class="field-block">
                                    <div class="input-text">Как к вам обращаться? <span style="color: #d76364">*</span></div>
                                    <input class="text-field w-input" maxlength="256" name="user_name" placeholder="Введите Ваше имя" type="text" required>
                                </div>

                                <div class="field-block">
                                    <div class="input-text">Почта <span style="color: #d76364">*</span></div>
                                    <input class="text-field w-input" maxlength="256" name="email" placeholder="Введите Вашу почту" type="email" required>
                                </div>

                                <div class="field-block">
                                    <div class="input-text">Номер телефона</div>
                                    <input class="text-field w-input" maxlength="18" name="phone" placeholder="+7 (___) ___-__-__" type="text" id="popupPhoneInput">
                                </div>

                                <div class="field-block">
                                    <div class="input-text">Что бы вы хотели автоматизировать с помощью AI?</div>
                                    <textarea name="message" placeholder="Описание" maxlength="5000"  class="text-field message-field w-input" style="resize: none; height: auto"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="form-button w-button" value="Оставить заявку">
                        </form>
                        <div class="success-messagge w-form-done">
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
                        <div class="error-message w-form-fail">
                            <div>Что-то пошло не так. Попробуйте ещё раз.</div>
                        </div>
                    </div>
                </div>
                <div data-w-id="4ee6f207-47d2-888e-2b36-068482ba3c34" class="close-popup-btn">
                    <div class="icon-close w-embed">
                        <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="none" height="100%" width="100%"></rect>
                            <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="56" y2="200"></line>
                            <line fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" x1="200" x2="56" y1="200" y2="56"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('components.cookie-banner')
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('js/webflow.js')}}" type="text/javascript"></script>

<script>
    function closePopup() {
        document.querySelectorAll('.popap-show').forEach(el => {
            el.classList.remove('popap-show');
        });
    }
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
    document.addEventListener('DOMContentLoaded', () => {
        const formBlock = document.querySelector('.popup-form-block form');
        const formHeader = document.querySelector('.form-header-block');
        const successMessage = document.querySelector('.success-messagge.w-form-done');

        if (successMessage && successMessage.offsetParent !== null) {
            formHeader.style.display = 'none';
        }

        formBlock?.addEventListener('submit', function () {
            const observer = new MutationObserver(() => {
                if (successMessage.offsetParent !== null) {
                    formHeader.style.display = 'none';
                    observer.disconnect();
                }
            });

            observer.observe(successMessage, { attributes: true, childList: true, subtree: true });
        });
    });
</script>

{{--Скроллинг--}}
<script>
    document.querySelectorAll('.sales-and-content').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            var targetId = 'SalesAndContent';

            var targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({ behavior: 'smooth' });

            var navOverlay = document.querySelector('.w-nav-overlay');
            if (navOverlay) {
                navOverlay.style.display = 'none';
            }
        });
    });

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

    document.querySelectorAll('.more-ideas').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            var targetId = 'MoreIdeas';

            var targetElement = document.getElementById(targetId);

            targetElement.scrollIntoView({ behavior: 'smooth' });

            var navOverlay = document.querySelector('.w-nav-overlay');
            if (navOverlay) {
                navOverlay.style.display = 'none';
            }
        });
    });
</script>

{{--Круглое видео--}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('main-video');
        const playIcon = document.querySelector('.play-icon');
        const pauseIcon = document.querySelector('.pause-btn');
        const playButton = document.querySelector('.play-block');

        if (!video || !playIcon || !pauseIcon || !playButton) {
            console.error('Не найден один из элементов');
            return;
        }

        playIcon.classList.add('visible');
        pauseIcon.classList.add('hidden');

        playButton.addEventListener('click', function(event) {
            event.preventDefault();

            if (video.paused) {
                video.play();
                playIcon.classList.remove('visible');
                playIcon.classList.add('hidden');

                pauseIcon.classList.remove('hidden');
                pauseIcon.classList.add('visible');
            } else {
                video.pause();
                playIcon.classList.remove('hidden');
                playIcon.classList.add('visible');

                pauseIcon.classList.remove('visible');
                pauseIcon.classList.add('hidden');
            }
        });

        video.addEventListener('ended', function() {
            playIcon.classList.remove('hidden');
            playIcon.classList.add('visible');

            pauseIcon.classList.remove('visible');
            pauseIcon.classList.add('hidden');
        });

        video.addEventListener('click', function () {
            if (video.paused) {
                video.play();
                playIcon.classList.remove('visible');
                playIcon.classList.add('hidden');

                pauseIcon.classList.remove('hidden');
                pauseIcon.classList.add('visible');
            } else {
                video.pause();
                playIcon.classList.remove('hidden');
                playIcon.classList.add('visible');

                pauseIcon.classList.remove('visible');
                pauseIcon.classList.add('hidden');
            }
        });
    });
</script>

{{-- Открыть видео --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('video-popup');
        const popupVideo = document.getElementById('popup-video');
        const closeButton = document.getElementById('video-popup-close');

        document.querySelectorAll('.content-presentation').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const parent = this.closest('.content-presentation');
                const videoSrc = parent.getAttribute('data-video-src');
                if (videoSrc) {
                    popupVideo.src = videoSrc;
                    popup.classList.add('active');
                    popupVideo.play();
                }
            });
        });

        function closePopup() {
            popupVideo.pause();
            popupVideo.currentTime = 0;
            popupVideo.src = '';
            popup.classList.remove('active');
        }

        closeButton.addEventListener('click', closePopup);

        popup.addEventListener('click', function(event) {
            if (event.target === popup) {
                closePopup();
            }
        });
    });
</script>

<script>
    Webflow.push(function() {
        // When a thumbnail is clicked, update target slider
        $('[data-thumbs-for]').on('click', '.w-slide', function() {
            // Find target slider, if not found exit
            var target = $($(this).parents('.w-slider').attr('data-thumbs-for'));
            if(target.length == 0) return;
            // Update target slider by triggering a "tap" event on the targetNav corresponding slide button
            target.find('.w-slider-nav').children().eq($(this).index()).trigger('tap');
        }); // End click function
    }); // End ready function
</script>
<script>
    Webflow.push(function() {
        document.querySelectorAll('.thumbnail-slider.w-slider .slide-preview.w-slide').forEach(preview => {
            preview.addEventListener('click', () => {
                document.querySelectorAll('.thumbnail-slider.w-slider .slide-preview.w-slide .thumbnails-item')
                    .forEach(item => item.classList.remove('active-preview'));
                const clickedThumb = preview.querySelector('.thumbnails-item');
                if (clickedThumb) {
                    clickedThumb.classList.add('active-preview');
                }
            });
        });
        document.querySelectorAll('.slider-nav.w-slider-nav .w-slider-dot').forEach((dot, index) => {
            dot.addEventListener('click', () => {
                document.querySelectorAll('.thumbnail-slider.w-slider .slide-preview.w-slide .thumbnails-item')
                    .forEach(item => item.classList.remove('active-preview'));
                const previewSlides = document.querySelectorAll('.thumbnail-slider.w-slider .slide-preview.w-slide');
                const targetThumb = previewSlides[index]?.querySelector('.thumbnails-item');
                if (targetThumb) {
                    targetThumb.classList.add('active-preview');
                }
            });
        });
    }); // End ready function
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('main-video');
        const poster = document.getElementById('video-poster');

        video.addEventListener('canplaythrough', function() {
            poster.style.opacity = '0';
            poster.style.visibility = 'hidden';
            poster.style.transition = 'opacity 0.5s ease';
        });
    });
</script>
</body>
<style>
    .w-slider-dot {
        background-color: #adb9c380 !important;
    }
    .w-slider-dot.w-active {
        background-color: #4baeeb !important;
    }
    .hidden {
        display: none !important;
        opacity: 0 !important;
    }

    .visible {
        display: block !important;
        opacity: 1 !important;
    }

    .content-presentation:hover .play-icon path {
        fill: #4baeeb;
    }

    .img-main-head:hover ~ .play-block .play-icon svg path {
        fill: #4baeeb !important;
    }

    #main-video {
        cursor: pointer;
        pointer-events: auto;
    }
</style>

<style>
    .content-presentation{
        cursor: pointer;
    }

    .video-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #535862b3;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .video-popup.active {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
    }

    .video-popup-inner {
        display: inline-flex;
        flex-direction: column;
        align-items: flex-end;
        /*max-height: 90vh;*/
        max-width: 90vw;
    }

    .video-popup-close {
        background: none;
        border: none;
        font-size: 32px;
        color: white;
        cursor: pointer;
        margin-bottom: 8px;
        margin-right: 8px;
        align-self: flex-end;
    }

    .video-popup-content {
        width: 100%;
        background: transparent;
        border-radius: 10px;
        overflow: hidden;
    }

    .video-popup-content video {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .video-popup-inner {
            width: 95%;
        }
        .video-popup-close {
            font-size: 28px;
            margin-bottom: 8px;
        }
    }

    .video-popup-content {
        background: transparent;
        border-radius: 10px;
        overflow: hidden;
    }

    .video-popup-content video {
        max-height: 90vh;
        max-width: 90vw;
        width: auto;
        height: auto;
        border-radius: 10px;
        display: block;
    }
</style>
</html>
