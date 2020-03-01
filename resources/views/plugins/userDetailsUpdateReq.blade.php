{{--start--}}
<div class="container">
<form action="{{route('userUpdateRequestStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="passPic">Passport size photograph</label>
                  <input type="file" class="form-control-file" name="passPic" id="passPic" placeholder="passport size photograph" aria-describedby="passportPic">
                  <small id="passportPic" class="form-text text-muted">Passport size photograph</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/image.jpg')}}" id="defpic" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="user image passport size photograph">
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="hindiSignature">Hindi signature</label>
                  <input type="file" class="form-control-file" name="hindiSignature" id="hindiSignature" placeholder="hindi signature" aria-describedby="userHindiSig">
                  <small id="userHindiSig" class="form-text text-muted">User Hindi signature</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/hindiSignature.png')}}" id="defhindisig" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="user hindi signature">
            </div>

            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="hindiSignature">English signature</label>
                  <input type="file" class="form-control-file" name="englishSignature" id="englishSignature" placeholder="English signature" aria-describedby="userHindiSig">
                  <small id="userHindiSig" class="form-text text-muted">User English signature</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/signature.jpg')}}" id="defengsig" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="user english signature">
            </div>

            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="leftThumbPrint">User left print</label>
                  <input type="file" class="form-control-file" name="leftThumbprint" id="leftThumbprint" placeholder="User left print" aria-describedby="leftThumbprint">
                  <small id="leftThumbprint" class="form-text text-muted">User left print</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/leftthumb.jpg')}}" id="defleftthumb" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="User left print">
            </div>

            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="leftThumbPrint">User right print</label>
                  <input type="file" class="form-control-file" name="rightThumbprint" id="rightThumbprint" placeholder="User right print" aria-describedby="rightThumbprint">
                  <small id="leftThumbprint" class="form-text text-muted">User right print</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/rightthumb.jpg')}}" id="defRightThumb" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="User right print">
            </div>

            <div class="w-100"></div>
            <div class="col">
                <div class="form-group">
                  <label for="aadharcardpic">Aadhar card pic</label>
                  <input type="file" class="form-control-file"  name="aadharcardpic" id="aadharcardpic" placeholder="aadhar card pic" aria-describedby="userAadharCardPic">
                  <small id="userAadharCardPic" class="form-text text-muted">User aadhar card pic</small>
                </div>
            </div>
            <div class="col">
            <img src="{{URL::asset('images/def/aadharCard.png')}}" id="defAadhar" style="height: 151px;width: 191px;" class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="user aadhar card pic">
            </div>
            <button type="submit" name="submituserData" id="submituserData" class="btn btn-info btn-lg btn-block">Submit</button>
        </div>
    </form>
</div>
{{--start--}}
