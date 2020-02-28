@extends('layouts.app')
@section('content')
@include('plugins.error')
@include('plugins.message')
<div class="container">
    <h3><b><center>Local Address</center></b></h3>
<form action="{{route('localAddress',['clearedStep' => 1,'vacancyId' => $vacancyId, 'user' => \Auth::user()->id])}}" method="POST">
        @csrf
<input type='number' hidden name="userID" value="{{\Auth::user()->id}}" />
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="localAddOne">Adrress One ( required )</label>
                    <input type="text"
                      class="form-control" name="localAddOne" id="localAddOne" aria-describedby="address One" placeholder="Address One">
                    <small id="address One" class="form-text text-muted">Local Address One</small>
                </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="localAddTwo">Address Two</label>
                <input type="text"
                  class="form-control" name="localAddTwo" id="localAddTwo" aria-describedby="lAdTwo" placeholder="Address Two">
                <small id="lAdTwo" class="form-text text-muted">Local Address Two</small>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="localCityVillage">City / Village ( required )</label>
                  <input type="text"
                    class="form-control" name="localCityVillage" id="localCityVillage" aria-describedby="citiVil" placeholder="City / Village">
                  <small id="citiVil" class="form-text text-muted">Local City Address</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="district">District ( required )</label>
                  <input type="text"
                    class="form-control" name="district" id="district" aria-describedby="district" placeholder="District">
                  <small id="district" class="form-text text-muted">local District</small>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="state">State / Province ( required )</label>
                  <input type="text"
                    class="form-control" name="state" id="state" aria-describedby="state" placeholder="State / Province">
                  <small id="state" class="form-text text-muted">Local Address State / Province</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="pinZipCode">Pin Code / Zip Code ( required )</label>
                  <input type="number"
                    class="form-control" name="pinZipCode" id="pinipCodeZ" aria-describedby="pinCodeZipCode" placeholder="Pin Code / Zip Code">
                  <small id="pinCodeZipCode" class="form-text text-muted">Local Address Pin / Zip Code</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="country">Country ( required )</label>
                  <input type="text"
                    class="form-control" name="country" id="country" aria-describedby="country" placeholder="country">
                  <small id="country" class="form-text text-muted">Local Address Country</small>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Next&NonBreakingSpace;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
</div>
@endsection


{{-- End of localAddress --}}
