@extends('layouts.app')

@section('content')
<div class="container-fluid mb-2 pb-2">
    <div class="row justify-content-center mb-2 pb-2"">
        <div class="col-md-8 mb-3 pb-3"">
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
                    <table class="table table-striped">
                        <h6>Табела за преглед на марки: </h6>
                        <br>
                        <thead>
                          <tr>
                            <th scope="col"><center>#</center></th>
                            <th scope="col"><center>Марка</center></th>
                            <th scope="col"><center>Промена</center></th>
                            <th scope="col"><center>Избриши</center></th>
                          </tr>
                        </thead>
                        @foreach ($cars as $car)                      
                        <tbody>
                          <tr>
                            <th scope="row"><a href="/car-category/{{$car->id}}"><center>{{$car->id}}</a></center></th>
                            <td><center><a href="/car-category/{{$car->id}}">{{$car->model_name}}</a></center></td>
                            <td><center><a href="{{url('edit-model/'.$car->id)}}">📝</a></center></td>
                            <td>
                                <center><form action="{{url('/delete-model/'.$car->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button style="border: 0ch; background-color: inherit;">🗑️</button>
                                </form></center>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    <br>
                    <a href="/models" type="button" class="btn btn-primary btn-lg btn-block">● Погледни ги сите марки</a>
                    <a href="/add-model" type="button" class="btn btn-primary btn-lg btn-block">🚗 Додади нова марка на автомобил</a>
                    <br>
                    <table class="table table-striped">
                        <h6>Табела за преглед на модели: </h6>
                        <br>
                        <thead>
                          <tr>
                            <th scope="col"><center>#</center></th>
                            <th scope="col"><center>Модел</center></th>
                            <th scope="col"><center>Промена</center></th>
                            <th scope="col"><center>Избриши</center></th>
                          </tr>
                        </thead>
                        @foreach ($categories as $category)                      
                        <tbody>
                          <tr>
                            <th scope="row"><a href="/car-model/{{$category->id}}"><center>{{$category->id}}</a></center></th>
                            <td><center><a href="/car-model/{{$category->id}}">{{$category->category_name}}</a></center></td>
                            <td><center><a href="{{url('edit-category/'.$category->id)}}">📝</a></center></td>
                            <td>
                                <center><form action="{{url('/delete-category/'.$category->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button style="border: 0ch; background-color: inherit;">🗑️</button>
                                </form></center>
                            </td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    <a href="/add-category" type="button" class="btn btn-primary btn-lg btn-block">📋 Додади нов модел на автомобил</a>
                    <br>
                    <hr style="height:2px; border-width:0; color:red; background-color:red">
                        @foreach ($cars as $car)
                            <table class="table table-striped">
                            <h6>Табела за преглед на мултимедија на: {{$car->model_name}} </h6>
                            <br>
                            <thead>
                            <tr>
                                <th scope="col"><center>#</center></th>
                                <th scope="col"><center>Мултимедија</center></th>
                                <th scope="col"><center>Модел</center></th>
                                <th scope="col"><center>Промена</center></th>
                                <th scope="col"><center>Избриши</center></th>
                            </tr>
                            </thead>
                            @foreach ($categories as $category)
                            @foreach ($multimedias as $multimedia)
                            @if($car->id == $category->car_id)
                            @if($multimedia->category_id == $category->id)
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="/car-multimedia/{{$multimedia->id}}"><center>{{$multimedia->id}}</a></center></th>
                                        <td><a href="/car-multimedia/{{$multimedia->id}}"><center>{{$multimedia->name}}</a></center></td>
                                        <th scope="row"><a href="/car-model/{{$category->id}}"><center>{{$category->category_name}}</a></center></th>
                                        <td><a href="/edit-multimedia/{{$multimedia->id}}"><center>📝</center></td>
                                        <td>
                                            <center><form action="{{url('/delete-multimedia/'.$multimedia->id)}}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button style="border: 0ch; background-color: inherit;">🗑️</button>
                                            </form></center>
                                        </td>
                                    </tr>
                                    </tbody> 
                            @endif 
                            @endif
                            @endforeach                       
                            @endforeach  
                            </table>  
                        @endforeach
                      <br>
                    <a href="/add-multimedia" type="button" class="btn btn-primary btn-lg btn-block">☑ Додади нова мултимедија</a>
                    <br>
                    <hr style="height:2px; border-width:0; color:red; background-color:red">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
