@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                           <h2>{{ __('Добавить пользователя') }}</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.users.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="user_name">{{ __('Имя') }}</label>
                                    <input class="form-control" id="user_name" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="user_email">{{ __('Почта') }}</label>
                                    <input class="form-control" id="user_email" type="email" name="email">
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
                                @if(count($categories) > 0)
                                    <div class="form-group row">
                                        <label class="col-md-3 col-form-label">{{ __('Доступные категории') }}</label>
                                        <div class="col-md-9 col-form-label">
                                            @foreach($categories as $category)
                                            <div class="form-check form-check-inline mr-1">
                                                <input class="form-check-input" id="inline-checkbox{{ $loop->index }}" type="checkbox" name="category[]" value="{{ $category->id }}">
                                                <label class="form-check-label" for="inline-checkbox{{ $loop->index }}">{{ $category->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                <div class="card-footer">
                                    <button class="btn btn-sm btn-primary" type="submit">{{ __('Добавить') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection