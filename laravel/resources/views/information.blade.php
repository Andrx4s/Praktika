@extends('index')

@section('title', 'Страница информации о пользователе')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Информация о пользователе</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Имя</label>
                        <p>{{Auth::user()->name}}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Почта</label>
                        <p>{{Auth::user()->email}}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Возвраст</label>
                        <p>{{Auth::user()->age}}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Размер</label>
                        <p>{{Auth::user()->size}}</p>
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Цвет</label>
                        <p><font color="#{{Auth::user()->color}}"> #{{Auth::user()->color}}</font></p>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
