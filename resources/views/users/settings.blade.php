@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                           <h2>{{ __('Настройки пользователя') }}</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.user.updateSettings', $user) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="user_name">{{ __('Имя') }}</label>
                                    <input class="form-control" id="user_name" type="text" value="{{ $user->name }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="user_email">{{ __('Почта') }}</label>
                                    <input class="form-control" id="user_email" type="email" name="email" value="{{ $user->email }}">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="user_password">{{ __('Пароль') }}</label>
                                        <input class="form-control" id="user_password" type="password" name="password">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_repeat_password">{{ __('Повторите пароль') }}</label>
                                        <input class="form-control" id="user_repeat_password" type="password" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">{{ __('Сохранить') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
