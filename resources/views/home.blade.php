@extends('layouts.app')

@section('content')
<div class="container">
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
                    {{ __('Успешно сте логирани, добредојдовте!') }}
                    <br>
                    <br>
                    <a href="/models" type="button" class="btn btn-primary btn-lg btn-block">● Погледни ги сите модели</a>
                    <br>
                    <a href="/add-model" type="button" class="btn btn-primary btn-lg btn-block">🚗 Додади нов модел на автомобил</a>
                    <a href="/add-multimedia" type="button" class="btn btn-primary btn-lg btn-block">☑ Додади нова мултимедија</a>
                    <hr style="height:2px; border-width:0; color:red; background-color:red">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
