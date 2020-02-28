@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{action('userStatus@update', Auth::user()->id)}}" id="statusUpdate">
        <input type="hidden" name="_method" value="PATCH"/>
        @csrf
        <input hidden  type="text" class="form-control" value="{{ Auth::user()->id }}" name="userID" id="" aria-describedby="helpId" placeholder="">
        <input hidden type="text" class="form-control" value="{{\Session::get('status')}}" name="status" id="" aria-describedby="helpId" placeholder="">
        <button hidden type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
document.getElementById('statusUpdate').submit();
</script>
@endsection
