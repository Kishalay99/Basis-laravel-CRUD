<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{asset('css/app.css')}}"/> --}}
        <title>{{config('app.name','ATG')}}</title>
        <style>
            .alert{
                background: slategray;
                color: #fff;
                padding: 20px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
    <h1>ATG registration form</h1>
    {{-- @include('messages') --}}
    @if(Session::has('message'))
    <div class="alert">
        {{Session::get('message')}}
    </div>
    @endif
    <form action="store" method='POST'>
        @csrf
        <label>Name <input type="text" id="name" name="name"/></label><br><br>
        <label>email <input type="text" id="email" name="email"/></label><br><br>
        <label>pincode <input type="number" id="pincode" name="pincode"/></label><br><br>
        <input type="submit"/>
    </form>

    {{-- {!! Form::open(['action' => 'ATGController@store', 'method'='POST']) !!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form:text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
        </div>
    {{!! Form::close() !!}} --}}

    </body>
</html>
