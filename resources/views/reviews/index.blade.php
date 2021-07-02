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
                                <tr>
                                    <td>Samppa Nori</td>
                                    <td>СМС</td>
                                    <td>2012/01/01</td>
                                    <td><span class="badge badge-success">{{ __('Хорошо') }}</span></td>
                                    <td><span class="badge badge-primary">{{ __('Отвечен') }}</span></td>
                                    <td style="max-width: 140px">
                                        <button class="btn btn-primary" type="button">{{ __('Детальнее') }}</button>
                                        <button class="btn btn-danger" type="button">{{ __('Удалить отзыв') }}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Estavan Lykos</td>
                                    <td>Туалет</td>
                                    <td>2012/02/01</td>
                                    <td><span class="badge badge-info">{{ __('Не плохо') }}</span></td>
                                    <td><span class="badge badge-secondary">{{ __('Ожидает ответа') }}</span></td>
                                    <td style="max-width: 140px">
                                        <button class="btn btn-primary" type="button">{{ __('Детальнее') }}</button>
                                        <button class="btn btn-danger" type="button">{{ __('Удалить отзыв') }}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chetan Mohamed</td>
                                    <td>Телевизора</td>
                                    <td>2012/02/01</td>
                                    <td><span class="badge badge-warning">{{ __('Нормально') }}</span></td>
                                    <td><span class="badge badge-secondary">{{ __('Ожидает ответа') }}</span></td>
                                    <td style="max-width: 140px">
                                        <button class="btn btn-primary" type="button">{{ __('Детальнее') }}</button>
                                        <button class="btn btn-danger" type="button">{{ __('Удалить отзыв') }}</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chetan Mohamed</td>
                                    <td>Не понятно</td>
                                    <td>2012/02/01</td>
                                    <td><span class="badge badge-danger">{{ __('Плохо') }}</span></td>
                                    <td><span class="badge badge-secondary">{{ __('Ожидает ответа') }}</span></td>
                                    <td style="max-width: 140px">
                                        <button class="btn btn-primary" type="button">{{ __('Детальнее') }}</button>
                                        <button class="btn btn-danger" type="button">{{ __('Удалить отзыв') }}</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">{{ __('Предыдущая') }}</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">{{ __('Следующая') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
