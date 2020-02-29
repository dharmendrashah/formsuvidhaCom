{{--start--}}
<div class="container">
    <form action="" method="POST">
        @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
              <label for="full name">Full name</label>
              <input type="text" class="form-control" name="full name" id="full name" aria-describedby="fullName" placeholder="Full name">
              <small id="fullName" class="form-text text-muted">FullName</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="father Name">Father Name</label>
              <input type="text"
                class="form-control" name="father Name" id="father Name" aria-describedby="fatherName" placeholder="Father Name">
              <small id="fatherName" class="form-text text-muted">Father Name</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="Mothername  ">Mother Name</label>
              <input type="text" class="form-control" name="Mothername" id="Mothername" aria-describedby="motherName   " placeholder="Mother Name">
              <small id="motherName" class="form-text text-muted">Mother Name</small>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="date">Date</label>
                      <select class="form-control" name="date" id="date">
                     @for ($i = 1; $i < 32; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                     @endfor
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="date">Month</label>
                      <select class="form-control" name="month" id="month">
                       @foreach ($months as $month)
                      <option value="{{$month}}">{{$month}}</option>
                       @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="year">Year</label>
                      <select class="form-control" name="Year" id="Year">
                            @for ($y = 1954; $y <= date("Y"); $y++)
                            <option value="{{$y}}">{{$y}}</option>
                            @endfor
                      </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="caste / Section">Caste</label>
              <select class="form-control" name="caste" id="caste">
                <optio value="General">General</option>
                <option value="OBC">OBC</option>
                <option value="SC">SC</option>
                <option value="ST">ST</option>
                <option value="EWS">EWS</option>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="casteCertificateIs">caste certificate Is</label>
              <select class="form-control" name="casteCertificateIs" id="casteCertificateIs">
                <option value="state">State authorized</option>
                <option value="central">Central Authorized</option>
              </select>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="phoneNumber">Phone Number</label>
              <input type="number"
                class="form-control" name="phoneNumber" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Phone Number">
              <small id="phoneNumber" class="form-text text-muted">Phone Number</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="emailAddress">email</label>
              <input type="email"
                class="form-control" name="emailAddress" id="emailAddress" aria-describedby="emailAddresss" placeholder="email address">
              <small id="emailAddresss" class="form-text text-muted">email Address</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="FeMale">FeMale</option>
                <option value="Third Gender">Third Gender</option>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="handiCappedStatus">Handicapped Status</label>
              <select class="form-control" name="handiCappedStatus" id="handiCappedStatus">
                <option value="Need others to work">Need others to work</option>
                <option value="Doesn’t need others to work">Doesn’t need others to work</option>
                <option selected value="Not handicapped">Not handicapped</option>
              </select>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="nationality">Nationality</label>
              <input type="text"
                class="form-control" disabled value="India" name="nationality" id="nationality" aria-describedby="national" placeholder="nationality">
              <small id="national" class="form-text text-muted">Nationality</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="state">State</label>
              <select class="form-control" name="state" id="state">
                @foreach ($IndianState as $state)
              <option value="{{$state}}">{{$state}}</option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="district">District</label>
              <input type="text"
                class="form-control" name="district" id="district" aria-describedby="districts" placeholder="District">
              <small id="districts" class="form-text text-muted">Enter District</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="Block">Block</label>
              <input type="text"
                class="form-control" name="Block" id="Block" aria-describedby="Block" placeholder="Block">
              <small id="Block" class="form-text text-muted">Block</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="tahsil">Tahsil / City</label>
              <input type="text"
                class="form-control" name="tahsil" id="tahsil" aria-describedby="tahsil" placeholder="Tahsil / city">
              <small id="tahsil" class="form-text text-muted">Tahsil / City</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="village">village</label>
              <input type="text"
                class="form-control" value="NA" name="village" id="village" aria-describedby="villa" placeholder="Village">
              <small id="villa" class="form-text text-muted">Village</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="maritalStatus">Marital Status</label>
              <select class="form-control" name="maritalStatus" id="maritalStatus">
                <option value="Married">Married</option>
                <option value="UnMarried">UnMarried</option>
                <option value="Male Widow">Male Widow</option>
                <option value="FeMale Widow">FeMale Widow</option>
                <option value="Divorcee">Divorcee</option>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="spouseName">Spouse Name</label>
              <input type="text"
                class="form-control" name="spouseName" id="spouseName" aria-describedby="spName" placeholder="Spouse Name">
              <small id="spName" class="form-text text-muted">Spouse Name</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="children">Childern</label>
              <input type="text"
                class="form-control" name="children" id="children" aria-describedby="childrens" placeholder="Children">
              <small id="childrens" class="form-text text-muted">Total Childrens</small>
            </div>
        </div>
    </div>
    <button type="button" name="submit" id="submit" class="btn btn-success btn-lg btn-block">Submit and next step <i class=""></i></button>
    </form>
</div>
{{--end--}}
