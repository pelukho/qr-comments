@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card c-email-app">
                        <div class="card-body">
                            <div class="c-message">
                                <div class="c-message-details">
                                    <div class="c-message-headers">
                                        <h4 class="c-message-headers-subject">
                                            {{ __('Ответ отправлет от ') }} "{{ $review->getCategoryName($review->review_group_id) }}"
                                        </h4>
                                        <div class="c-message-headers-from">
                                            <span class="text-muted">{{ __('От:') }}</span> {{ $review->review_author }}
                                        </div>
                                        <div class="c-message-headers-from">
                                            <span class="text-muted">{{ __('Почта:') }}</span> {{ $review->review_author_email  }}
                                        </div>
                                        <div class="c-message-headers-from">
                                            <span class="text-muted">{{ __('Телефон:') }}</span> {{ $review->review_author_phone }}
                                        </div>

                                        <div class="c-message-headers-date">
                                            <span class="text-muted">{{ __('Дата:') }}</span> {{ $review->created_at->format('j.m.Y') }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="c-message-body">
                                        <p>{{ $review->review_content }}</p>
                                    </div>
                                    <hr>

                                    @if(!$review->review_status)

                                    <form class="mt-3" method="post" action="">
                                        <div class="form-group">
                                            <textarea class="form-control" id="message" name="body" rows="12"
                                                      placeholder="{{ __('Ответить') }}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success" tabindex="3" type="submit">
                                                {{ __('Отправить ответ') }}
                                            </button>
                                        </div>
                                    </form>

                                    @else
                                        <div class="card">
                                            <div class="card-header">
                                                {{ __('Отзыв отвечен следующим письмом') }}<span class="badge badge-success float-right">{{ __('Отвечено') }}</span>
                                            </div>
                                            <div class="card-body">
                                                Тело ответа
                                            </div>
                                        </div>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
