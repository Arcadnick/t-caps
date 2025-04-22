
<!DOCTYPE html>
<html data-wf-page="67ece482da1c868e1ac6f211" data-wf-site="640ac50b2e2b1655d9fef5ae" lang="en">
<head>
    <meta charset="utf-8">
    <title>TimeCapsule | Политика конфиденциальности</title>
    <meta content="Узнайте, как мы храним и защищаем ваши данные. Конфиденциальность и безопасность — наш приоритет." property="og:title">
    <meta content="Узнайте, как мы храним и защищаем ваши данные. Конфиденциальность и безопасность — наш приоритет." property="twitter:title">
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
<section class="fix-block-logo">
    <div class="wrapper-logo-header">
        <a href="{{ route('welcome') }}" class="nav-logo w-nav-brand"><img src="{{ asset('images/logo-time-caps.svg') }}" loading="lazy" alt="" class="logo"></a>
    </div>
</section>
{!! $content !!}
@include('components.cookie-banner')
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=640ac50b2e2b1655d9fef5ae" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
</body>
</html>
