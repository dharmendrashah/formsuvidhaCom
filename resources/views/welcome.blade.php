@extends('layouts.app')

@section('content')
<div class="container">
    <center>
        <img src="{{asset('logo.png')}}" style="
        width: 100%;
        height: 100%;
        " alt="formsuvidha.com logo">
    </center>
    @include('plugins.message')
    @include('plugins.error')
    @include('plugins.search')
<center>
    <div class="row">
        <div class="col">
            <a href="/search?q=feeling+lucky&_token={{ csrf_token() }}&user=<?php if(isset(\Auth::user()->id)){echo \Auth::user()->id;}else{ echo 0;} ?>&ip={{\Request::ip()}}&setup={{$_SERVER['HTTP_USER_AGENT']}}"><button>feeling lucky</button></a>
            <a href="/search?q=top+Vacancies&_token={{ csrf_token() }}&user=<?php if(isset(\Auth::user()->id)){echo \Auth::user()->id;}else{ echo 0;} ?>&ip={{\Request::ip()}}&setup={{$_SERVER['HTTP_USER_AGENT']}}"><button>Top Vacancies</button></a>
        </div>
    </div>
</center>
</div>

@endsection
