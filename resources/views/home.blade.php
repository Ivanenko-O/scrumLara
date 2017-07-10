@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Личный кабинет</div>

                <div class="panel-body">
                    Вы авторизировались!

                    <p>Перейти к обучающему курсу:
                    <a href="{{ url('/list-courses') }}">Scrum0</a>
                </div>
            </div>
            {{}}
        </div>
    </div>
</div>
@endsection
