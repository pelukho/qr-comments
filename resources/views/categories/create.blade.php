@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                           <h2>{{ __('Добавить категорию') }}</h2>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('admin.review_groups.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="category">{{ __('Название категории') }}</label>
                                    <input class="form-control" id="category" type="text" name="name">
                                </div>
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
