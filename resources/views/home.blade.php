@extends('layouts.app')
@section('title','Bienvenido a App Shop')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h2 class="title text-center">Dashboard</h2>
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="togglebutton">
                        <label>
                            <input type="checkbox" checked="">
                            Color Celeste Activo
                        </label>
                    </div>
                    <!-- <div class="togglebutton">
                        <label>
                            <input type="checkbox">
                            Toggle is off
                        </label>
                    </div>   -->  

                <ul class="nav nav-pills nav-pills-info" role="tablist">
                    <li>
                        <a href="#dashboard" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Carrito de Compras
                        </a>
                    </li>

                    <li>
                        <a href="#tasks" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Pedidos
                        </a>
                    </li>
               </ul>
               @foreach(auth()->user()->cart->details as $detail)
               <ul>
                   {{ $detail }}
               </ul>
               @endforeach
        </div>
    </div>
</div>
@endsection


