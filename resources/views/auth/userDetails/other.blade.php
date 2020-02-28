@extends('layouts.app');
@section('content')
@include('plugins.error')
@include('plugins.message')
<form action="{{route('other.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input hidden type="text" name="userID" value="{{ Auth::user()->id }}" id="">
    <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="photograph">Upload Your Passport Size Photo</label>
                        <input type="file" class="form-control-file" name="photograph" id="photograph"
                            placeholder="Upload Your Passport Size Photo" aria-describedby="photo">
                        <small id="photo" class="form-text text-muted">Passport Size Photo Graph</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="signature">Upload Your Signature</label>
                        <input type="file" class="form-control-file" name="signature" id="signature"
                            placeholder="Upload Your Signature" aria-describedby="SignatureUpload">
                        <small id="SignatureUpload" class="form-text text-muted">Upload Your Signature</small>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <img id="image" style="
                    height: 300px;
                    width: 300px;
                " class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" src="{{asset('images/def/image.jpg')}}" alt="Your Profile Image" />
                </div>
                <div class="col">
                    <img id="signatureup" style="
                    height: 150px;
                    width: 300px;
                " class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" src="{{asset('images/def/signature.jpg')}}" alt="Your Signature" />
                </div>
                <div class="w-100"></div>
                <div class="col">
                    <br/>
                    <hr/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </div>
</form>
@endsection


