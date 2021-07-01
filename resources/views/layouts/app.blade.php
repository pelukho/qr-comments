<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('css/coreui.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo" id="full" viewBox="0 0 458 178">
            <g class="signet" style="fill: currentColor">
                <path class="cls-2"
                      d="M128,56.1244,89,33.6077a12,12,0,0,0-12,0L38,56.1243a12.0339,12.0339,0,0,0-6,10.3924V111.55a12.0333,12.0333,0,0,0,6,10.3923L77,144.459a12,12,0,0,0,12,0l39-22.5167a12.0333,12.0333,0,0,0,6-10.3923V66.5167A12.0336,12.0336,0,0,0,128,56.1244ZM126,111.55a4,4,0,0,1-2,3.4641L85,137.5308a4,4,0,0,1-4,0L42,115.0141a4,4,0,0,1-2-3.4641V66.5167a4,4,0,0,1,2-3.4641L81,40.5359a4,4,0,0,1,4,0l39,22.5167a4,4,0,0,1,2,3.4641Z"></path>
                <path class="cls-2"
                      d="M106.0216,102.0713h-2.866a3.9993,3.9993,0,0,0-1.9246.4935L83.95,112.05,64,100.5315V77.554L83.95,66.0354,101.239,75.49a4.0007,4.0007,0,0,0,1.9192.4905h2.8633a2,2,0,0,0,2-2V71.2691a2,2,0,0,0-1.04-1.7547L87.793,59.0188a8.0391,8.0391,0,0,0-7.8428.09L60,70.6262A8.0245,8.0245,0,0,0,56,77.5549v22.976a8,8,0,0,0,4,6.9283l19.95,11.5186a8.0429,8.0429,0,0,0,7.8433.0879l19.19-10.5312a2,2,0,0,0,1.0377-1.7533v-2.71A2,2,0,0,0,106.0216,102.0713Z"></path>
            </g>
            <g class="text" style="fill: currentColor">
                <path class="cls-2"
                      d="M200.7446,65.4285a15.0166,15.0166,0,0,0-15,14.9995V97.7054a15,15,0,0,0,30,0V80.428A15.0166,15.0166,0,0,0,200.7446,65.4285Zm7,32.2769a7,7,0,0,1-14,0V80.428a7,7,0,0,1,14,0Z"></path>
                <path class="cls-2"
                      d="M164.0789,73.4878a7.01,7.01,0,0,1,7.868,6.0752.9894.9894,0,0,0,.9843.865h6.0305a1.0108,1.0108,0,0,0,.9987-1.0971,15.0182,15.0182,0,0,0-15.7163-13.8837A15.2881,15.2881,0,0,0,150,80.8635V97.27a15.2881,15.2881,0,0,0,14.2441,15.4163A15.0183,15.0183,0,0,0,179.96,98.8025a1.0107,1.0107,0,0,0-.9987-1.0971h-6.0305a.9894.9894,0,0,0-.9843.865,7.01,7.01,0,0,1-7.868,6.0757A7.1643,7.1643,0,0,1,158,97.4612V80.6724A7.1639,7.1639,0,0,1,164.0789,73.4878Z"></path>
                <path class="cls-2"
                      d="M246.9221,92.9944a12.1584,12.1584,0,0,0,7.1843-11.0771V78.2161A12.1494,12.1494,0,0,0,241.957,66.0667H225a1,1,0,0,0-1,1v44a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1v-17h6.6216l7.9153,17.4138a1,1,0,0,0,.91.5862h6.591a1,1,0,0,0,.91-1.4138Zm-.8157-11.0771a4.1538,4.1538,0,0,1-4.1489,4.1494h-9.8511v-12h9.8511a4.1538,4.1538,0,0,1,4.1489,4.1494Z"></path>
                <path class="cls-2"
                      d="M289,66.0667H263a1,1,0,0,0-1,1v44a1,1,0,0,0,1,1h26a1,1,0,0,0,1-1v-6a1,1,0,0,0-1-1H270v-12h13a1,1,0,0,0,1-1v-6a1,1,0,0,0-1-1H270v-10h19a1,1,0,0,0,1-1v-6A1,1,0,0,0,289,66.0667Z"></path>
                <path class="cls-2"
                      d="M327,66.0667h-6a1,1,0,0,0-1,1V89.7142a7.0066,7.0066,0,1,1-14,0V67.0667a1,1,0,0,0-1-1h-6a1,1,0,0,0-1,1V89.7142a15.0031,15.0031,0,1,0,30,0V67.0667A1,1,0,0,0,327,66.0667Z"></path>
                <rect class="cls-2" x="336" y="66.0667" width="8" height="38" rx="1"></rect>
                <path class="cls-2"
                      d="M410.8105,79.72a3.4937,3.4937,0,0,0-3.1992,0,2.656,2.656,0,0,0-1.0644,1.1016,3.4924,3.4924,0,0,0-.375,1.6484v5.2422a3.4925,3.4925,0,0,0,.375,1.6485,2.6557,2.6557,0,0,0,1.0644,1.1015,3.4937,3.4937,0,0,0,3.1992,0A2.6553,2.6553,0,0,0,411.875,89.36a3.4926,3.4926,0,0,0,.3755-1.6485V82.47a3.4925,3.4925,0,0,0-.3755-1.6484A2.6556,2.6556,0,0,0,410.8105,79.72Z"></path>
                <path class="cls-2"
                      d="M392.7,79.64a1.6475,1.6475,0,0,0-.9228-.2588h-4.1958V83.59h4.1958a1.6259,1.6259,0,0,0,.9106-.2588,1.6754,1.6754,0,0,0,.6089-.7383,2.8243,2.8243,0,0,0,.2275-1.1074,2.6849,2.6849,0,0,0-.2153-1.1075A1.6746,1.6746,0,0,0,392.7,79.64Z"></path>
                <path class="cls-2"
                      d="M374.0811,79.6707a2.0524,2.0524,0,0,0-1.0767-.2773h-3.8882v4.4541h3.8882a2.0281,2.0281,0,0,0,1.0644-.2764,1.8993,1.8993,0,0,0,.72-.7812,2.5037,2.5037,0,0,0,.2583-1.1573,2.6239,2.6239,0,0,0-.252-1.1748A1.8476,1.8476,0,0,0,374.0811,79.6707Z"></path>
                <path class="cls-2"
                      d="M424,66.0667H358a2,2,0,0,0-2,2v33.9161a2,2,0,0,0,2,2h66a2,2,0,0,0,2-2V68.0667A2,2,0,0,0,424,66.0667Zm-45.9043,18.439a4.8219,4.8219,0,0,1-1.9751,1.914,6.187,6.187,0,0,1-2.9468.6768h-3.8022v6.9394H366V76.1453h7.1738a6.1448,6.1448,0,0,1,2.9468.6826,4.85,4.85,0,0,1,1.9751,1.9258,6.2486,6.2486,0,0,1,0,5.752Zm15.8193,9.53-4.0334-7.1982h-2.0452v7.1982h-3.3716V76.1326h7.8379a4.9978,4.9978,0,0,1,2.5967.6641,4.5011,4.5011,0,0,1,1.7349,1.8769,6.7322,6.7322,0,0,1,0,5.6231,4.4808,4.4808,0,0,1-1.7412,1.8769,4.6347,4.6347,0,0,1-1.1708.4848L398,94.0359ZM416,87.6248a7.1411,7.1411,0,0,1-.812,3.4639,5.6857,5.6857,0,0,1-2.2949,2.3135,7.5842,7.5842,0,0,1-6.8535,0,5.6853,5.6853,0,0,1-2.295-2.3135,7.1411,7.1411,0,0,1-.812-3.4639V82.5555a7.1438,7.1438,0,0,1,.812-3.4639,5.6968,5.6968,0,0,1,2.295-2.3135,7.5924,7.5924,0,0,1,6.8535,0,5.6972,5.6972,0,0,1,2.2949,2.3135A7.1438,7.1438,0,0,1,416,82.5555Z"></path>
            </g>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo" id="signet"
             viewBox="0 0 160 160">
            <g style="fill: currentColor">
                <path class="cls-1"
                      d="M125,47.091,86,24.5743a12,12,0,0,0-12,0L35,47.091a12.0336,12.0336,0,0,0-6,10.3923v45.0334a12.0335,12.0335,0,0,0,6,10.3923l39,22.5166a11.9993,11.9993,0,0,0,12,0l39-22.5166a12.0335,12.0335,0,0,0,6-10.3923V57.4833A12.0336,12.0336,0,0,0,125,47.091Zm-2,55.4257a4,4,0,0,1-2,3.464L82,128.4974a4,4,0,0,1-4,0L39,105.9807a4,4,0,0,1-2-3.464V57.4833a4,4,0,0,1,2-3.4641L78,31.5025a4,4,0,0,1,4,0l39,22.5167a4,4,0,0,1,2,3.4641Z"></path>
                <path class="cls-1"
                      d="M103.0216,93.0379h-2.866a4,4,0,0,0-1.9246.4935L80.95,103.0167,61,91.4981V68.5206L80.95,57.002l17.2894,9.455a4,4,0,0,0,1.9192.4905h2.8632a2,2,0,0,0,2-2V62.2357a2,2,0,0,0-1.04-1.7547L84.793,49.9854a8.0391,8.0391,0,0,0-7.8428.09L57,61.5929A8.0243,8.0243,0,0,0,53,68.5216v22.976a8,8,0,0,0,4,6.9283l19.95,11.5185a8.0422,8.0422,0,0,0,7.8433.0879l19.19-10.5311a2,2,0,0,0,1.0378-1.7534v-2.71A2,2,0,0,0,103.0216,93.0379Z"></path>
            </g>
        </svg>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('dashboard') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg>
                Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="charts.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                </svg>
                Отзывы
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="charts.html">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                </svg>
                Пользователи
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg>
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
        </button>
        <a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
            <svg viewBox="0 0 458 178" width="118" height="46" alt="CoreUI Logo">
                <g class="signet" style="fill: currentColor">
                    <path class="cls-2"
                          d="M128,56.1244,89,33.6077a12,12,0,0,0-12,0L38,56.1243a12.0339,12.0339,0,0,0-6,10.3924V111.55a12.0333,12.0333,0,0,0,6,10.3923L77,144.459a12,12,0,0,0,12,0l39-22.5167a12.0333,12.0333,0,0,0,6-10.3923V66.5167A12.0336,12.0336,0,0,0,128,56.1244ZM126,111.55a4,4,0,0,1-2,3.4641L85,137.5308a4,4,0,0,1-4,0L42,115.0141a4,4,0,0,1-2-3.4641V66.5167a4,4,0,0,1,2-3.4641L81,40.5359a4,4,0,0,1,4,0l39,22.5167a4,4,0,0,1,2,3.4641Z"></path>
                    <path class="cls-2"
                          d="M106.0216,102.0713h-2.866a3.9993,3.9993,0,0,0-1.9246.4935L83.95,112.05,64,100.5315V77.554L83.95,66.0354,101.239,75.49a4.0007,4.0007,0,0,0,1.9192.4905h2.8633a2,2,0,0,0,2-2V71.2691a2,2,0,0,0-1.04-1.7547L87.793,59.0188a8.0391,8.0391,0,0,0-7.8428.09L60,70.6262A8.0245,8.0245,0,0,0,56,77.5549v22.976a8,8,0,0,0,4,6.9283l19.95,11.5186a8.0429,8.0429,0,0,0,7.8433.0879l19.19-10.5312a2,2,0,0,0,1.0377-1.7533v-2.71A2,2,0,0,0,106.0216,102.0713Z"></path>
                </g>
                <g class="text" style="fill: currentColor">
                    <path class="cls-2"
                          d="M200.7446,65.4285a15.0166,15.0166,0,0,0-15,14.9995V97.7054a15,15,0,0,0,30,0V80.428A15.0166,15.0166,0,0,0,200.7446,65.4285Zm7,32.2769a7,7,0,0,1-14,0V80.428a7,7,0,0,1,14,0Z"></path>
                    <path class="cls-2"
                          d="M164.0789,73.4878a7.01,7.01,0,0,1,7.868,6.0752.9894.9894,0,0,0,.9843.865h6.0305a1.0108,1.0108,0,0,0,.9987-1.0971,15.0182,15.0182,0,0,0-15.7163-13.8837A15.2881,15.2881,0,0,0,150,80.8635V97.27a15.2881,15.2881,0,0,0,14.2441,15.4163A15.0183,15.0183,0,0,0,179.96,98.8025a1.0107,1.0107,0,0,0-.9987-1.0971h-6.0305a.9894.9894,0,0,0-.9843.865,7.01,7.01,0,0,1-7.868,6.0757A7.1643,7.1643,0,0,1,158,97.4612V80.6724A7.1639,7.1639,0,0,1,164.0789,73.4878Z"></path>
                    <path class="cls-2"
                          d="M246.9221,92.9944a12.1584,12.1584,0,0,0,7.1843-11.0771V78.2161A12.1494,12.1494,0,0,0,241.957,66.0667H225a1,1,0,0,0-1,1v44a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1v-17h6.6216l7.9153,17.4138a1,1,0,0,0,.91.5862h6.591a1,1,0,0,0,.91-1.4138Zm-.8157-11.0771a4.1538,4.1538,0,0,1-4.1489,4.1494h-9.8511v-12h9.8511a4.1538,4.1538,0,0,1,4.1489,4.1494Z"></path>
                    <path class="cls-2"
                          d="M289,66.0667H263a1,1,0,0,0-1,1v44a1,1,0,0,0,1,1h26a1,1,0,0,0,1-1v-6a1,1,0,0,0-1-1H270v-12h13a1,1,0,0,0,1-1v-6a1,1,0,0,0-1-1H270v-10h19a1,1,0,0,0,1-1v-6A1,1,0,0,0,289,66.0667Z"></path>
                    <path class="cls-2"
                          d="M327,66.0667h-6a1,1,0,0,0-1,1V89.7142a7.0066,7.0066,0,1,1-14,0V67.0667a1,1,0,0,0-1-1h-6a1,1,0,0,0-1,1V89.7142a15.0031,15.0031,0,1,0,30,0V67.0667A1,1,0,0,0,327,66.0667Z"></path>
                    <rect class="cls-2" x="336" y="66.0667" width="8" height="38" rx="1"></rect>
                    <path class="cls-2"
                          d="M410.8105,79.72a3.4937,3.4937,0,0,0-3.1992,0,2.656,2.656,0,0,0-1.0644,1.1016,3.4924,3.4924,0,0,0-.375,1.6484v5.2422a3.4925,3.4925,0,0,0,.375,1.6485,2.6557,2.6557,0,0,0,1.0644,1.1015,3.4937,3.4937,0,0,0,3.1992,0A2.6553,2.6553,0,0,0,411.875,89.36a3.4926,3.4926,0,0,0,.3755-1.6485V82.47a3.4925,3.4925,0,0,0-.3755-1.6484A2.6556,2.6556,0,0,0,410.8105,79.72Z"></path>
                    <path class="cls-2"
                          d="M392.7,79.64a1.6475,1.6475,0,0,0-.9228-.2588h-4.1958V83.59h4.1958a1.6259,1.6259,0,0,0,.9106-.2588,1.6754,1.6754,0,0,0,.6089-.7383,2.8243,2.8243,0,0,0,.2275-1.1074,2.6849,2.6849,0,0,0-.2153-1.1075A1.6746,1.6746,0,0,0,392.7,79.64Z"></path>
                    <path class="cls-2"
                          d="M374.0811,79.6707a2.0524,2.0524,0,0,0-1.0767-.2773h-3.8882v4.4541h3.8882a2.0281,2.0281,0,0,0,1.0644-.2764,1.8993,1.8993,0,0,0,.72-.7812,2.5037,2.5037,0,0,0,.2583-1.1573,2.6239,2.6239,0,0,0-.252-1.1748A1.8476,1.8476,0,0,0,374.0811,79.6707Z"></path>
                    <path class="cls-2"
                          d="M424,66.0667H358a2,2,0,0,0-2,2v33.9161a2,2,0,0,0,2,2h66a2,2,0,0,0,2-2V68.0667A2,2,0,0,0,424,66.0667Zm-45.9043,18.439a4.8219,4.8219,0,0,1-1.9751,1.914,6.187,6.187,0,0,1-2.9468.6768h-3.8022v6.9394H366V76.1453h7.1738a6.1448,6.1448,0,0,1,2.9468.6826,4.85,4.85,0,0,1,1.9751,1.9258,6.2486,6.2486,0,0,1,0,5.752Zm15.8193,9.53-4.0334-7.1982h-2.0452v7.1982h-3.3716V76.1326h7.8379a4.9978,4.9978,0,0,1,2.5967.6641,4.5011,4.5011,0,0,1,1.7349,1.8769,6.7322,6.7322,0,0,1,0,5.6231,4.4808,4.4808,0,0,1-1.7412,1.8769,4.6347,4.6347,0,0,1-1.1708.4848L398,94.0359ZM416,87.6248a7.1411,7.1411,0,0,1-.812,3.4639,5.6857,5.6857,0,0,1-2.2949,2.3135,7.5842,7.5842,0,0,1-6.8535,0,5.6853,5.6853,0,0,1-2.295-2.3135,7.1411,7.1411,0,0,1-.812-3.4639V82.5555a7.1438,7.1438,0,0,1,.812-3.4639,5.6968,5.6968,0,0,1,2.295-2.3135,7.5924,7.5924,0,0,1,6.8535,0,5.6972,5.6972,0,0,1,2.2949,2.3135A7.1438,7.1438,0,0,1,416,82.5555Z"></path>
                </g>
            </svg>
        </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg" id="cil-menu" viewBox="0 0 512 512">
                <rect width="352" height="32" x="80" y="96" fill="var(--ci-primary-color, currentColor)"
                      class="ci-primary"></rect>
                <rect width="352" height="32" x="80" y="240" fill="var(--ci-primary-color, currentColor)"
                      class="ci-primary"></rect>
                <rect width="352" height="32" x="80" y="384" fill="var(--ci-primary-color, currentColor)"
                      class="ci-primary"></rect>
            </svg>
        </button>
        <ul class="c-header-nav mfs-auto">
            <li class="c-header-nav-item px-3">
                <a class="c-header-nav-link" href="#">
                    {{ __('Настройки аккаунта') }}
                </a>
            </li>
        </ul>
        <ul class="c-header-nav">
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                          data-toggle="dropdown" href="#" role="button"
                                                                          aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg>
                    <span class="badge badge-pill badge-danger">5</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                        </svg>
                        New user registered</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-danger">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                        </svg>
                        User deleted</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-info">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                        </svg>
                        Sales report is ready</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-success">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                        </svg>
                        New client</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2 text-warning">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                        </svg>
                        Server overloaded</a>
                    <div class="dropdown-header bg-light"><strong>Server</strong></div>
                    <a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">11444GB/16384MB</small>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                          data-toggle="dropdown" href="#" role="button"
                                                                          aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                    </svg>
                    <span class="badge badge-pill badge-warning">15</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div>
                    <a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Upgrade NPM &amp; Bower<span
                                class="float-right"><strong>0%</strong></span></div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">ReactJS Version<span class="float-right"><strong>25%</strong></span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">VueJS Version<span class="float-right"><strong>50%</strong></span></div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Add new layouts<span class="float-right"><strong>75%</strong></span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                    </a><a class="dropdown-item d-block" href="#">
                        <div class="small mb-1">Angular 8 Version<span class="float-right"><strong>100%</strong></span>
                        </div>
                        <span class="progress progress-xs">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link"
                                                                          data-toggle="dropdown" href="#" role="button"
                                                                          aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                    </svg>
                    <span class="badge badge-pill badge-info">7</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/7.jpg"
                                                           alt="user@email.com"><span
                                        class="c-avatar-status bg-success"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">Just
                                    now</small></div>
                            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important
                                message
                            </div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg"
                                                           alt="user@email.com"><span
                                        class="c-avatar-status bg-warning"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">5
                                    minutes ago</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg"
                                                           alt="user@email.com"><span
                                        class="c-avatar-status bg-danger"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">1:52
                                    PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mfe-3 float-left">
                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg"
                                                           alt="user@email.com"><span
                                        class="c-avatar-status bg-info"></span></div>
                            </div>
                            <div><small class="text-muted">John Doe</small><small class="text-muted float-right mt-1">4:03
                                    PM</small></div>
                            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit, sed do eiusmod tempor incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                      role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg>
                        Updates<span class="badge badge-info mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg>
                        Messages<span class="badge badge-success mfs-auto">42</span></a><a class="dropdown-item"
                                                                                           href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                        </svg>
                        Tasks<span class="badge badge-danger mfs-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                        </svg>
                        Comments<span class="badge badge-warning mfs-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                        </svg>
                        Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                        </svg>
                        Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                        </svg>
                        Payments<span class="badge badge-secondary mfs-auto">42</span></a><a class="dropdown-item"
                                                                                             href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                        </svg>
                        Projects<span class="badge badge-primary mfs-auto">42</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                        </svg>
                        Lock Account</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mfe-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                        </svg>
                        Logout</a>
                </div>
            </li>
        </ul>
    </header>
    <div class="c-body">
        <main class="c-main">
            @yield('content')
        </main>
    </div>
</div>


{{--<!-- Popper.js first, then CoreUI JS -->--}}
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/chart.js') }}"></script>
<script src="{{ asset('js/chart-init.js') }}"></script>
</body>
</html>
