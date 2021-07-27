<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Отзыв о качестве предоставляемых услуг') }}</title>

    <link rel="apple-touch-icon" href="{{ asset('img/48.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/114.png') }}">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('img/114.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">
    <meta name="default-category" content="{{ env('DEFAULT_CATEGORY') }}">
</head>
<body>
<main class="main">
    <header class="header container-fluid">
        <div class="row justify-content-center">
            <div class="header__logo col-9 col-sm-7 col-md-3 text-center">
                <svg width="628" height="110" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 46">
                    <path fill="#E60000"
                          d="M60.3 27.8C60.3 30.9 57.8 33.5 54.6 33.5C51.5 33.5 49 30.9 49 27.8V2.3H38.5V27.8C38.5 36.7 45.7 44 54.6 44C63.5 44 70.8 36.7 70.8 27.8V2.3H60.3V27.8H60.3ZM0 44H30.4V33.5H10.5V28.4H30.4V17.9H10.5V12.8H30.4V2.3H0V44ZM113 15.4C113 8.2 107.2 2.3 100.1 2.3H79.5V44H89.9V28.4H94.6L103.6 44H115.7L105.9 27C110.1 24.9 113 20.5 113 15.4ZM100.1 17.9H89.9V12.8H100.1C101.5 12.8 102.6 14 102.6 15.4C102.6 16.8 101.5 17.9 100.1 17.9ZM226.5 44H256.9V33.5H237V28.4H256.9V17.9H237V12.8H256.9V2.3H226.5V44H226.5ZM279.3 2.3H266V44H276.5V43.9H279.3C290.7 43.9 300 34.6 300 23.1C300 11.6 290.7 2.3 279.3 2.3ZM279.3 33.5H276.5V12.8H279.3C285 12.8 289.6 17.4 289.6 23.1C289.6 28.8 285 33.5 279.3 33.5ZM196.8 21.5L186.7 2.3H176.3V44H186.7V24.7L196.8 44L206.8 24.8V44H217.3V2.3H206.8L196.8 21.5ZM144.8 0.5C132.5 0.5 122.5 10.5 122.5 23C122.5 35.4 132.5 45.4 144.8 45.4C157.1 45.4 167.1 35.4 167.1 23C167.1 10.5 157.1 0.5 144.8 0.5ZM157.7 27.1H148.9V35.9H140.7V27.1H132V18.8H140.7V10H148.9V18.8H157.7V27.1Z"/>
                </svg>
            </div>
            <nav class="language">
                <a class="language__item {{ App::getLocale() !== 'ru' ? 'current' : '' }}" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['ua', isset($_GET['code']) ? 'code=' . $_GET['code'] : '']) }}">UA</a>
                <a class="language__item {{ App::getLocale() === 'ru' ? 'current' : '' }}" href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), ['ru', isset($_GET['code']) ? 'code=' . $_GET['code'] : '']) }}">RU</a>
            </nav>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-7">
                <div class="text-description">
                    <p>
                        {{ __('Если у Вас есть пожелания или замечания относительно качества предоставленных нами услуг, просим Вас оставить отзыв. Все сообщения будут переданы руководству.') }} <br>
                        {{ __('Благодарим за обратную связь.') }}
                    </p>
                </div>
                <p class="text-error">
                    {{ __('поля со * обязательны для заполнения') }}
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="review-form" class="review-form">
                    @csrf
                    <div class="mb-4">
                        <fieldset class="rating">
                            <div class="rating__group">
                                <input id="value5" type="radio" name="review_rating"
                                       aria-label="{{ __('Очень плохо') }}" class="form-control rating__star" value="5">
                                <label class="rating__label" for="value5"></label>
                                <input id="value4" type="radio" name="review_rating" aria-label="{{ __('Плохо') }}"
                                       class="form-control rating__star" value="4">
                                <label class="rating__label" for="value4"></label>
                                <input id="value3" type="radio" name="review_rating" aria-label="{{ __('Нормально') }}"
                                       class="form-control rating__star" value="3">
                                <label class="rating__label" for="value3"></label>
                                <input id="value2" type="radio" name="review_rating" aria-label="{{ __('Хорошо') }}"
                                       class="form-control rating__star" value="2">
                                <label class="rating__label" for="value2"></label>
                                <input id="value1" type="radio" name="review_rating"
                                       aria-label="{{ __('Очень хорошо') }}" class="form-control rating__star"
                                       value="1">
                                <label class="rating__label" for="value1"></label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mb-4">
                        <div class="input-field">
                            <input type="text" name="review_author" class="form-control" id="name">
                            <label for="name">{{ __('Ваше ФИО *') }}</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="input-field">
                            <input type="text" name="review_author_phone" class="form-control" id="phone">
                            <label for="phone">{{ __('Номер телефона *') }}</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="input-field">
                            <input type="email" name="review_author_email" class="form-control" id="email">
                            <label for="email">{{ __('Email *') }}</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="input-field">
                            <textarea name="review_content" class="form-control" id="review" rows="3"></textarea>
                            <label for="review">{{ __('Введите отзыв *') }}</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">{{ __('Отправить') }}</button>
                </form>
                <div class="privacy-text text-center">
                    <p>
                        {{ __('Нажимая кнопку «Отправить», Вы соглашаетесь с условиями использования и политикой конфиденциальности') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/review.js') }}"></script>

<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ __('Благодарим за обратную связь. Это очень важно для нас!') }}
            </div>
        </div>
    </div>
</div>
</body>
</html>
