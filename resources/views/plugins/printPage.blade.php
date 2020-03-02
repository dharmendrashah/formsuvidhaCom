{{--start--}}
<div class="container-fluid">
    <table class="table table-bordered">
        <h4><b>Personnel Photograph and other data :- </b></h4>
        <tr>
            <td scope="row">
                <center>
                    <a data-fancybox="gallery" href="{{URL::asset('images/passPic')}}/{{$allInfo->passPic}}">
                        <img src="{{URL::asset('images/passPic')}}/{{$allInfo->passPic}}" style="height:300px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s passport photograph'">
                    </a>
                    <hr />
                    <h5><b>Passport Photograph&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b></h5>
                </center>
            </td>
            <td scope="row">
                <center>
                    <a data-fancybox="gallery" href="{{URL::asset('images/aadharcardpic')}}/{{$allInfo->aadharcardpic}}">
                        <img src="{{URL::asset('images/aadharcardpic')}}/{{$allInfo->aadharcardpic}}" style="height:300px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->aadharcardpic}}'s aadhar card pic">
                    </a>
                    <hr />
                    <h5><b>Aadhar card pic&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b></h5>
                </center>
            </td>
            <td scope="row">
                <center>
                    <a data-fancybox="gallery" href="{{URL::asset('images/englishSignature')}}/{{$allInfo->englishSignature}}">
                        <img src="{{URL::asset('images/englishSignature')}}/{{$allInfo->englishSignature}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s Signature English photograph'">
                    </a>
                    <hr />
                    <h5>
                        <b>English Signature&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b>
                    </h5>
                    <hr />
                    <a data-fancybox="gallery" href="{{URL::asset('images/hindiSignature')}}/{{$allInfo->hindiSignature}}">
                        <img src="{{URL::asset('images/hindiSignature')}}/{{$allInfo->hindiSignature}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s Signature Hindi photograph'">
                    </a>
                    <hr />
                    <h5>
                        <b>Hindi Signature&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b>
                    </h5>
                </center>
            </td>
            <td scope="row">
                <center>
                    <a data-fancybox="gallery" href="{{URL::asset('images/leftThumbprint')}}/{{$allInfo->leftThumbprint}}">
                        <img src="{{URL::asset('images/leftThumbprint')}}/{{$allInfo->leftThumbprint}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s Signature leftThumbprint'">
                    </a>
                    <hr />
                    <h5>
                        <b>Left thumb print&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b>
                    </h5>
                    <hr />
                    <a data-fancybox="gallery" href="{{URL::asset('images/rightThumbprint')}}/{{$allInfo->rightThumbprint}}">
                        <img src="{{URL::asset('images/rightThumbprint')}}/{{$allInfo->rightThumbprint}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s rightThumbprint'">
                    </a>
                    <hr />
                    <h5>
                        <b>Right thumb print&nbsp;&nbsp;<i class="fa fa-arrow-up" aria-hidden="true"></i></b>
                    </h5>
                </center>
            </td>

        </tr>
    </table>
    <table class="table table-bordered">
        <h4><b>Personnel Info :- </b></h4>
        <tbody>
            <tr>
                <td scope="row">Full Name : {{$allInfo->fullname}}</td>
                <td scope="row">Father Name : {{$allInfo->fatherName}}</td>
            </tr>
            <tr>
                <td scope="row">Mother Name : {{$allInfo->Mothername}}</td>
                <td scope="row">Gender : {{$allInfo->gender}}</td>
            </tr>
            <tr>
                <td scope="row">Marital Status : {{$allInfo->maritalStatus}}</td>
                <td scope="row">Mobile Number : {{$allInfo->Number}}</td>
            </tr>
            <tr>
                <td scope="row">Email Address : {{$allInfo->emailAddress}}</td>
                <td scope="row">Date of Birth : {{$allInfo->dobdate}} - {{$allInfo->dobmonth}} - {{$allInfo->dobYear}}
                </td>
            </tr>
            <tr>
                <td scope="row">Society Status : {{$allInfo->caste}}</td>
                <td scope="row">Society Status is proven by : {{$allInfo->casteCertificateIs}}</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <h4><b>Educational Info :- </b></h4>
        <thead>
            <tr>
                <td>Qualification</td>
                <td>Board / University Name</td>
                <td>School / Collage Name</td>
                <td>School / University / Collage Address</td>
                <td>Subject</td>
                <td>Qualification Status</td>
                <td>Roll Number</td>
                <td>Maximum Marks</td>
                <td>Obtained Marks</td>
                <td>Passing Year</td>
                <td>Marksheet Copy</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Secondary Education ( 10th )</td>
                <td>{{$allInfo->boardName}}</td>
                <td>{{$allInfo->schoolName}}</td>
                <td>{{$allInfo->schoolAddress}}</td>
                <td>Compulsory</td>
                <td>Passed</td>
                <td>{{$allInfo->rollNumber}}</td>
                <td>{{$allInfo->totalMarks}}</td>
                <td>{{$allInfo->obtainedmarks}}</td>
                <td>{{$allInfo->passingYear}}</td>
                <td>
                    <a data-fancybox="gallery" href="{{URL::asset('images/tenthMarksheet')}}/{{$allInfo->tenMarksheetCopy}}">
                        <img src="{{URL::asset('images/tenthMarksheet')}}/{{$allInfo->tenMarksheetCopy}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s secondary marksheet'">
                    </a>
                   </td>
            </tr>
            <tr>
                <td>Senior Secondary Eucation ( 12th )</td>
                <td>{{$allInfo->senboardName}}</td>
                <td>{{$allInfo->senschoolName}}</td>
                <td>{{$allInfo->senschoolAddress}}</td>
                <td>{{$allInfo->streamOfStudyInSecondaryEducation}}</td>
                <td>{{$allInfo->twelfthClassStatus}}</td>
                <td>{{$allInfo->senrollNumber}}</td>
                <td>{{$allInfo->sentotalMarks}}</td>
                <td>{{$allInfo->senobtainedmarks}}</td>
                <td>{{$allInfo->senpassingYear}}</td>
                <td>
                    <a data-fancybox="gallery" href="{{URL::asset('images/twelfthMarksheet')}}/{{$allInfo->twelfthMarksheetCopy}}">
                        <img src="{{URL::asset('images/twelfthMarksheet')}}/{{$allInfo->twelfthMarksheetCopy}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s senior secondary marksheet'">
                    </a>
                    </td>
            </tr>
            <tr>
                <td>Under Graduation Degree</td>
                <td>{{$allInfo->ugUniversityName}}</td>
                <td>{{$allInfo->ugCollageName}}</td>
                <td>{{$allInfo->ugCollageAddress}}</td>
                <td>{{$allInfo->streamOfStudyUg}}</td>
                <td>{{$allInfo->underGraduationStatus}}</td>
                <td>{{$allInfo->finalYearRollNumberUg}}</td>
                <td>{{$allInfo->finalyearmarsksheetUG}}</td>
                <td>{{$allInfo->ugFinalYearObtainedMarks}}</td>
                <td>-- -- --</td>
                <td>
                    <a data-fancybox="gallery" href="{{URL::asset('images/UgMarksheet')}}/{{$allInfo->ugFinalMarksheet}}">
                        <img src="{{URL::asset('images/UgMarksheet')}}/{{$allInfo->ugFinalMarksheet}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s seneior secondary marksheet'">
                    </a>
                    </td>
            </tr>
            <tr>
                <td>Post Graduation Marksheet</td>
                <td>{{$allInfo->pgUniversityName}}</td>
                <td>{{$allInfo->pgCollageName}}</td>
                <td>{{$allInfo->pgCollageAddress}}</td>
                <td>{{$allInfo->streamOfStudyPg}}</td>
                <td>{{$allInfo->postGraduationStatus}}</td>
                <td>{{$allInfo->finalYearRollNumberPg}}</td>
                <td>{{$allInfo->finalyearmarsksheetPG}}</td>
                <td>{{$allInfo->pgFinalYearObtainedMarks}}</td>
                <td>-- -- --</td>
                <td>
                    <a data-fancybox="gallery" href="{{URL::asset('images/PgMarksheet')}}/{{$allInfo->pgFinalMarksheet}}">
                        <img src="{{URL::asset('images/PgMarksheet')}}/{{$allInfo->pgFinalMarksheet}}"
                        style="height:100px;width:100px;"
                        class="img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt="{{$allInfo->fullname}}'s seneior secondary marksheet'">
                    </a>
                  </td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered">
        <h4><b>Address :- </b></h4>
        <tbody>
            <tr>
                <td scope="row">Address One :- {{$allInfo->addOne}}</td>
                <td scope="row">Address two :- {{$allInfo->addTwo}}</td>
                <td scope="row">City / Village :- {{$allInfo->cityVilage}}</td>
                <td scope="row">PinCode :- {{$allInfo->pinCode}}</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered">
        <h4><b>Other Personnel Information :- <br /> -> Nationality Information</b></h4>
        <tbody>
            <tr>
                <td>Nationality : {{$allInfo->nationality}}</td>
                <td>State : {{$allInfo->state}}</td>
                <td>District : {{$allInfo->district}}</td>
            </tr>
            <tr>
                <td>Block : {{$allInfo->Block}}</td>
                <td>Tahsil : {{$allInfo->tahsil}}</td>
                <td>Village : {{$allInfo->village}}</td>
            </tr>
            <tr>
                <td>Physically handicapped Status :- {{$allInfo->handiCappedStatus}}</td>
                <td>Spouse name :- {{$allInfo->spouseName}}</td>
                <td>Children :- {{$allInfo->children}}</td>
            </tr>
        </tbody>
    </table>

    <button onclick="window.location.href = '/home'" type="button" name="back" id="BackButton" class="btn btn-primary btn-lg btn-block"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;Go Back</button>
</div>
{{--end--}}
