@extends('layouts.templates.app')

@section('title')
ダッシュボード
@endsection

@section('description')
ダッシュボードのdescriptionです。不要な場合はこのsectionを削除してください。
@endsection

@section('content')
<div class="container bg-white py-4" style="margin-left: 250px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <i class="fas fa-check"></i> {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
