@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>{{ __('Таблица пользователей') }}</h2>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center mt-1">
                                <div class="col-6 col-sm-4 col-md mb-3">
                                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary"
                                       type="button" title="{{ __('Добавить пользователя') }}">
                                        <svg class="c-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-plus') }}"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            @if(count($users) > 0)
                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>№</th>
                                    <th>{{ __('Имя') }}</th>
                                    <th>{{ __('Почта') }}</th>
                                    <th>{{ __('Действие') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td style="max-width: 140px">
                                        <a href="{{ route('admin.users.edit', $user->id) }}"
                                           class="btn btn-primary" title="{{ __('Детальнее') }}">
                                            <svg class="c-icon">
                                                <use
                                                    xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
                                            </svg>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"
                                                    onclick="return confirm('{{ __('Вы уверены что хотиле удалить пользователя?') }}');"
                                                    type="submit"
                                                    title="{{ __('Удалить пользователя') }}">
                                                <svg class="c-icon">
                                                    <use
                                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-trash') }}"></use>
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $users->links('pagination.default') }}

                            @else
                                <h3 class="text-center">{{ __('Пока нет пользователей') }}</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
