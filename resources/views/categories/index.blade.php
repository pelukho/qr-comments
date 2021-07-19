@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ __('Таблица категорий') }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col-6 col-sm-4 col-md mb-3">
                                    <a href="{{ route('admin.review_groups.create') }}" class="btn btn-primary"
                                       type="button">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lightbulb') }}"></use>
                                        </svg>&nbsp;{{ __('Добавить категорию') }}
                                    </a>
                                </div>
                            </div>

                            @if(count($categories) > 0)
                                <table class="table table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th style="width: 15%;">№</th>
                                        <th style="width: 45%;">{{ __('Название') }}</th>
                                        <th style="width: 25%;">{{ __('Действие') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td style="width: 15%;">{{ $loop->iteration }}</td>
                                            <td style="width: 45%">{{ $category->name }}</td>
                                            <td style="width: 25%;">
                                                <a href="{{ route('admin.review_groups.edit', $category->id) }}"
                                                   class="btn btn-primary" type="button">
                                                    {{ __('Изменить') }}
                                                </a>
                                                <form action="{{ route('admin.review_groups.destroy', $category) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger"
                                                            onclick="return confirm('{{ __('Вы уверены что хотиле удалить категорию?') }}');"
                                                            type="submit">
                                                        {{ __('Удалить категорию') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                {{ $categories->links('pagination.default') }}

                            @else
                                <h3 class="text-center">{{ __('Категорий не найдено') }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection