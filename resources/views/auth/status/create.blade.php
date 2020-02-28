@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{route('status.store')}}" id="statusCreate">
        @csrf
        <input hidden type="text" class="form-control" value="{{ Auth::user()->id }}" name="userID" id="" aria-describedby="helpId" placeholder="" required>
    <input hidden type="text" class="form-control" value="{{\Session::get('status')}}<?php echo $_GET['status']; ?>" name="status" id="" aria-describedby="helpId" placeholder="" required>
        <button hidden type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script>
document.getElementById('statusCreate').submit();
</script>
@endsection
