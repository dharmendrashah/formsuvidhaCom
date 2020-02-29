{{--start--}}
<div class="container">
<form action="{{route('stepsSave')}}" method="POST">
        @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
              <label for="full name">Full name</label>
              <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" id="full name" aria-describedby="fullName" placeholder="Full name">
              @error('fullname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <small id="fullName" class="form-text text-muted">FullName</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="father Name">Father Name</label>
              <input type="text"
                class="form-control @error('fatherName') is-invalid @enderror" name="fatherName" id="father Name" aria-describedby="fatherName" placeholder="Father Name">
                @error('fatherName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="fatherName" class="form-text text-muted">Father Name</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="Mothername">Mother Name</label>
              <input type="text" class="form-control @error('Mothername') is-invalid @enderror" name="Mothername" id="Mothername" aria-describedby="motherName   " placeholder="Mother Name">
              @error('Mothername')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <small id="motherName" class="form-text text-muted">Mother Name</small>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="date">Date</label>
                      @error('dobdate')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      <select class="form-control @error('dobdate') is-invalid @enderror" name="dobdate" id="date">
                     @for ($i = 1; $i < 32; $i++)
                      <option value="{{$i}}">{{$i}}</option>
                     @endfor
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="date">Month</label>
                      @error('dobmonth')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      <select class="form-control @error('dobmonth') is-invalid @enderror" name="dobmonth" id="month">
                       @foreach ($months as $month)
                      <option value="{{$month}}">{{$month}}</option>
                       @endforeach
                      </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="year">Year</label>
                      @error('dobYear')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                      <select class="form-control @error('dobYear') is-invalid @enderror" name="dobYear" id="Year">
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
              @error('caste')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control  @error('caste') is-invalid @enderror" name="caste" id="caste">
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
              @error('casteCertificateIs')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control  @error('casteCertificateIs') is-invalid @enderror" name="casteCertificateIs" id="casteCertificateIs">
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
                class="form-control  @error('phoneNumber') is-invalid @enderror" name="phoneNumber" id="phoneNumber" aria-describedby="phoneNumber" placeholder="Phone Number">
                @error('phoneNumber')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="phoneNumber" class="form-text text-muted">Phone Number</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="emailAddress">email</label>
              <input type="email"
                class="form-control @error('emailAddress') is-invalid @enderror" name="emailAddress" id="emailAddress" aria-describedby="emailAddresss" placeholder="email address">
                @error('emailAddress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="emailAddresss" class="form-text text-muted">email Address</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="gender">Gender</label>
              @error('gender')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('gender') is-invalid @enderror" name="gender" id="gender">
                <option value="Male">Male</option>
                <option value="FeMale">FeMale</option>
                <option value="Third Gender">Third Gender</option>
              </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="handiCappedStatus">Handicapped Status</label>
              <label for="gender">Gender</label>
              @error('handiCappedStatus')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('handiCappedStatus') is-invalid @enderror" name="handiCappedStatus" id="handiCappedStatus">
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
              @error('nationality')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select name="nationality"  class="form-control @error('nationality') is-invalid @enderror" id="nationality">
                <option value="india" selected>India</option>
              </select>

            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="state">State</label>
              @error('state')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('state') is-invalid @enderror" name="state" id="state">
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
                class="form-control @error('district') is-invalid @enderror" name="district" id="district" aria-describedby="districts" placeholder="District">
                @error('district')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="districts" class="form-text text-muted">Enter District</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="Block">Block</label>
              <input type="text"
                class="form-control @error('Block') is-invalid @enderror" name="Block" id="Block" aria-describedby="Block" placeholder="Block">
                @error('Block')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="Block" class="form-text text-muted">Block</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="tahsil">Tahsil / City</label>
              <input type="text"
                class="form-control @error('tahsil') is-invalid @enderror" name="tahsil" id="tahsil" aria-describedby="tahsil" placeholder="Tahsil / city">
                @error('tahsil')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="tahsil" class="form-text text-muted">Tahsil / City</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="village">village</label>
              <input type="text"
                class="form-control @error('village') is-invalid @enderror" value="NA" name="village" id="village" aria-describedby="villa" placeholder="Village">
                @error('village')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="villa" class="form-text text-muted">Village</small>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col">
            <div class="form-group">
              <label for="maritalStatus">Marital Status</label>
              @error('maritalStatus')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('maritalStatus') is-invalid @enderror" name="maritalStatus" id="maritalStatus">
                <option value="Married">Married</option>
                <option selected value="UnMarried">UnMarried</option>
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
                class="form-control @error('spouseName') is-invalid @enderror" disabled name="spouseName" id="spouseName" aria-describedby="spName" placeholder="Spouse Name">
                @error('spouseName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="spName" class="form-text text-muted">Spouse Name</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
              <label for="children">Childern</label>
              <input type="text"
                class="form-control @error('children') is-invalid @enderror" disabled name="children" id="children" aria-describedby="childrens" placeholder="Children">
                @error('children')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="childrens" class="form-text text-muted">Total Childrens</small>
            </div>
        </div>
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-success btn-lg btn-block">Submit and next step <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
    </form>
</div>
{{--end--}}
