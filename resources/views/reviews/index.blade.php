@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ __('Таблица отзывов') }}</h2>
                        </div>
                        <div class="card-body">
                            @if(count($reviews) > 0)
                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>{{ __('Имя') }}</th>
                                    <th>{{ __('Откуда отправленно') }}</th>
                                    <th>{{ __('Дата отправки') }}</th>
                                    <th>{{ __('Оценка') }}</th>
                                    <th>{{ __('Статус') }}</th>
                                    <th>{{ __('Действие') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($reviews as $review)
                                <tr>
                                    <td>{{ $review->review_author }}</td>
                                    <td>
                                        {{ $review->getCategoryName($review->review_group_id) }}
                                    </td>
                                    <td>{{ $review->created_at->format('j.m.Y') }}</td>
                                    <td>
                                        @switch($review->review_rating)
                                            @case(1)
                                            <span class="badge badge-danger">{{ __('Очень плохо') }}</span>
                                            @break

                                            @case(2)
                                            <span class="badge badge-light">{{ __('Плохо') }}</span>
                                            @break

                                            @case(3)
                                            <span class="badge badge-warning">{{ __('Нормально') }}</span>
                                            @break

                                            @case(4)
                                            <span class="badge badge-info">{{ __('Хорошо') }}</span>
                                            @break

                                            @case(5)
                                            <span class="badge badge-success">{{ __('Очень хорошо') }}</span>
                                            @break
                                        @endswitch
                                    </td>
                                    <td>
                                        @if($review->review_status)
                                            <span class="badge badge-primary">{{ __('Отвечен') }}</span>
                                        @else
                                            <span class="badge badge-secondary">{{ __('Ожидает ответа') }}</span>
                                        @endif
                                    </td>
                                    <td style="max-width: 140px">
                                        <a href="{{ route('admin.reviews.show', $review->id) }}"
                                           class="btn btn-primary">
                                            {{ __('Детальнее') }}
                                        </a>
                                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('{{ __('Вы уверены что хотиле удалить отзыв?') }}');"
                                                    type="submit">
                                                {{ __('Удалить отзыв') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $reviews->links('pagination.default') }}

                            @else
                                <h3 class="text-center">{{ __('Пока нет отзывов') }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
