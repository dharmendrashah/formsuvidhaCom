<div class="s01">
    <form method="GET" action="/search">
    @csrf
    <div class="inner-form">
    <div class="input-field second-wrap">
    <input name="q" value="<?php if(isset($_GET['q'])){echo $_GET['q'];} ?>" id="location" type="text" placeholder="Find job" required/>
    <input hidden type="text" name="user" value="<?php if(isset(\Auth::user()->id)){echo \Auth::user()->id;}else{ echo 0;} ?>">
    <input hidden type="text" name="ip" value="{{\Request::ip()}}">
    <input hidden type="text" name="setup" value="{{$_SERVER['HTTP_USER_AGENT']}}">
    </div>
    <div class="input-field third-wrap">
    <button class="btn-search" type="submit">Search</button>
    </div>
    </div>
    </form>
    </div>
