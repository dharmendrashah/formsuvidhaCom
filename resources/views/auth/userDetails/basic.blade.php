@extends('layouts.app')
@section('content')
@include('plugins.error')
@include('plugins.message')
<div class="container">
    <form action="{{route('basic.store')}}" method="POST">
        @csrf
        <script type="text/javascript">
            function CheckColors(val){
             var element=document.getElementById('color');
             if(val=='Other Qualification'||val=='Others')
               element.style.display='block';
             else
               element.style.display='none';
            }

            </script>
        <input type="text" hidden class="form-control" name="userID" value="{{ Auth::user()->id }}">

        <div class="form-group">
            <label for="Number">Enter your Mobile Number</label>
            <input type="number" class="form-control" name="Number" id="Number" aria-describedby="mobNumber"
                placeholder="Enter your Mobile Number">
            <small id="mobNumber" class="form-text text-muted">Enter your Mobile Number</small>
        </div>
        <center>
            <h4><b>Address</b></h4>
        </center>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="addOne">Address One ('Required')</label>
                    <input type="text" class="form-control" name="addOne" id="addOne" aria-describedby="AddressOne"
                        placeholder="Input Address One">
                    <small id="AddressOne" class="form-text text-muted">Address One ('Required')</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="addTwo">Address Two</label>
                    <input type="text" class="form-control" name="addTwo" id="addTwo" aria-describedby="AddressTwo"
                        placeholder="Input Address Two">
                    <small id="AddressTwo" class="form-text text-muted">Address Two</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="cityVilage">City / village</label>
                    <input type="text" class="form-control" name="cityVilage" id="cityVilage"
                        aria-describedby="city / Village" placeholder="Enter City Village">
                    <small id="city / Village" class="form-text text-muted">Enter City / Village</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="district">Enter District ('Required')</label>
                    <input type="text" class="form-control" name="district" id="district" aria-describedby="dist"
                        placeholder="Enter District">
                    <small id="dist" class="form-text text-muted">Enter District</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="Enter State">Enter State ('Required')</label>
                    <input type="text" class="form-control" name="State" id="Enter State" aria-describedby="state"
                        placeholder="Enter State">
                    <small id="state" class="form-text text-muted">State</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="pinCode">Enter Your Pin Code ('Required')</label>
                    <input type="number" class="form-control" name="pinCode" id="pinCode" aria-describedby="pinCode"
                        placeholder="Enter your Pin Code">
                    <small id="pinCode" class="form-text text-muted">Enter Pin Code</small>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                    <label for="eduQualificaton"><b>Education Qualification  ('Required')</b></label>
                    <select class="form-control" name="eduQualificaton" id="eduQualificaton" onchange='CheckColors(this.value);'>
                        <option value="Senior Secondary">Senior Secondary</option>
                        <option value="Higher Senior Secondary">Higher Senior Secondary</option>
                        <option value="Under Graduation">Under Graduation</option>
                        <option value="Post Graduation">Post Graduation</option>
                        <option value="Professional Graduation">Professional Graduation</option>
                        <option value="ITI Graduate">ITI Graduate</option>
                        <option selected value="Others" >Others</option>
                    </select>
                </div>
            </div>
        </div>
        {{-- <input type="color" name="color"  style='display:none;'/> --}}
        <div class="w-100"></div>
        <div class="col" id="color">
            <div class="form-group">
              <label for="otherQualification">Type Your Other Qualification  ('Required')</label>
              <input type="text" class="form-control" name="otherQualification" id="otherQualification" aria-describedby="otherQual" placeholder="Type Your Other Qualification" >
              <small id="otherQual" class="form-text text-muted">Other Qualification</small>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
