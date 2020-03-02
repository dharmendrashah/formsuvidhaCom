{{--Start--}}
<div class="container-fluid">
<form action="{{route('educationInformationStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <center><h3><b> Secondary Education </b></h3></center>
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="boardName">Board Name</label>
                  <input type="boardName"
                    class="form-control @error('boardName') is-invalid @enderror" name="boardName" id="boardName" aria-describedby="boardName" placeholder="Board Name">
                    @error('boardName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="boardName" class="form-text text-muted">Board Name of secondary education</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolName">School Name</label>
                  <input type="text"
                    class="form-control @error('schoolName') is-invalid @enderror" name="schoolName" id="schoolName" aria-describedby="schoolName" placeholder="School Name">
                    @error('schoolName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="schoolName" class="form-text text-muted">Secondary education schoola name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolAddress">School address</label>
                  <input type="text"
                    class="form-control @error('schoolAddress') is-invalid @enderror" name="schoolAddress" id="schoolAddress" aria-describedby="schoolAddressis" placeholder="School address">
                    @error('schoolAddress')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="schoolAddressis" class="form-text text-muted">Secondary education school name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="rollNumber">Roll Number</label>
                  <input type="number"
                    class="form-control @error('rollNumber') is-invalid @enderror" name="rollNumber" id="rollNumber" aria-describedby="rollNumbers" placeholder="Roll number">
                    @error('rollNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="rollNumbers" class="form-text text-muted">Secondary education roll number</small>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                  <label for="totalMarks">Total marks</label>
                  <input type="number"
                    class="form-control @error('totalMarks') is-invalid @enderror" name="totalMarks" id="totalMarks" aria-describedby="Totalmarks" placeholder="total marks">
                    @error('totalMarks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="Totalmarks" class="form-text text-muted">Secondary education total marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="obtainedmarks">Obtained marks</label>
                  <input type="number"
                    class="form-control @error('obtainedmarks') is-invalid @enderror" name="obtainedmarks" id="obtainedmarks" aria-describedby="obtainsmarks" placeholder="Obtained marks">
                    @error('obtainedmarks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="obtainsmarks" class="form-text text-muted">Secondary education obtained marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="passingYear">Passing year</label>
                  <input type="number"
                    class="form-control @error('obtainedmarks') is-invalid @enderror" name="passingYear" id="passingYear" aria-describedby="passYear" placeholder="passing year">
                    @error('passingYear')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="passYear" class="form-text text-muted">Secondary education passing year</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="tenMarksheetCopy">10th marksheet copy</label>
                  <input type="file" class="form-control-file @error('tenMarksheetCopy') is-invalid @enderror" name="tenMarksheetCopy" id="tenMarksheetCopy" placeholder="10th marksheet copy" aria-describedby="tenMarksheet">
                  @error('tenMarksheetCopy')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                  <small id="tenMarksheet" class="form-text text-muted">Secondary education marksheet photo</small>
                </div>
            </div>
        </div>

        {{--Senior Secondary Education--}}

        <center><h3><b>Senior Secondary Education </b></h3></center>
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="boardName">Board Name</label>
                  <input type="boardName"
                    class="form-control @error('senboardName') is-invalid @enderror" name="senboardName" id="senboardName" aria-describedby="boardName" placeholder="Board Name">
                    @error('senboardName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="boardName" class="form-text text-muted">Board Name of Senior secondary education</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolName">School Name</label>
                  <input type="text"
                    class="form-control @error('senschoolName') is-invalid @enderror" name="senschoolName" id="senschoolName" aria-describedby="schoolName" placeholder="School Name">
                    @error('senschoolName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="schoolName" class="form-text text-muted"> SeniorSecondary education schoola name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolAddress">School address</label>
                  <input type="text"
                    class="form-control @error('senschoolAddress') is-invalid @enderror" name="senschoolAddress" id="senschoolAddress" aria-describedby="schoolAddressis" placeholder="School address">
                    @error('senschoolAddress')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="schoolAddressis" class="form-text text-muted"> SeniorSecondary education school name</small>
                </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="streamOfStudyInSecondaryEducation">Stream Of study</label>
                @error('streamOfStudyInSecondaryEducation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <select class="form-control @error('streamOfStudyInSecondaryEducation') is-invalid @enderror" name="streamOfStudyInSecondaryEducation" id="streamOfStudyInSecondaryEducation">
                  <option value="Arts">Arts</option>
                  <option value="Commerce">Commerce</option>
                  <option value="Science">Science</option>
                </select>
              </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="twelfthClassStatus">Status of 12th Class</label>
                  @error('twelfthClassStatus')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                  <select class="form-control @error('twelfthClassStatus') is-invalid @enderror" name="twelfthClassStatus" id="twelfthClassStatus">
                    <option value="Passed">Passed</option>
                    <option selected value="Appearing">Appearing</option>
                    <option value="Not Studying">Not Studying</option>
                  </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="rollNumber">Roll Number</label>
                  <input type="number"
                    class="form-control @error('senrollNumber') is-invalid @enderror" name="senrollNumber" id="senrollNumber" aria-describedby="rollNumbers" placeholder="Roll number">
                    @error('senrollNumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="rollNumbers" class="form-text text-muted"> SeniorSecondary education roll number</small>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                  <label for="totalMarks">Total marks</label>
                  <input type="number"
                    class="form-control @error('sentotalMarks') is-invalid @enderror" name="sentotalMarks" id="sentotalMarks" aria-describedby="Totalmarks" placeholder="total marks">
                    @error('sentotalMarks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="Totalmarks" class="form-text text-muted"> Senior Secondary education total marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="obtainedmarks">Obtained marks</label>
                  <input type="number"
                    class="form-control @error('senobtainedmarks') is-invalid @enderror" name="senobtainedmarks" id="senobtainedmarks" aria-describedby="obtainsmarks" placeholder="Obtained marks">
                    @error('senobtainedmarks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="obtainsmarks" class="form-text text-muted"> Senior Secondary education obtained marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="passingYear">Passing year</label>
                  <input type="number"
                    class="form-control @error('senpassingYear') is-invalid @enderror" name="senpassingYear" id="senpassingYear" aria-describedby="passYear" placeholder="passing year">
                    @error('senpassingYear')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  <small id="passYear" class="form-text text-muted">Senior secondary passing year</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="tenMarksheetCopy">12th marksheet copy</label>
                  <input type="file" class="form-control-file @error('twelfthMarksheetCopy') is-invalid @enderror" name="twelfthMarksheetCopy" id="twelfthMarksheetCopy" placeholder="12th marksheet copy" aria-describedby="tenMarksheet">
                  @error('twelfthMarksheetCopy')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                  <small id="tenMarksheet" class="form-text text-muted">Senior Secondary education marksheet photo</small>
                </div>
            </div>
        </div>
        <center><h3><b>Under Graduation</b></h3></center>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="ugCollageName">Collage name</label>
              <input type="text"
                class="form-control @error('ugCollageName') is-invalid @enderror" name="ugCollageName" id="ugCollageName" aria-describedby="ugNAme" placeholder="Collage Name">
                @error('ugCollageName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugNAme" class="form-text text-muted">Under graduation Collage name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugUniversityName">University Name</label>
              <input type="text"
                class="form-control @error('ugUniversityName') is-invalid @enderror" name="ugUniversityName" id="ugUniversityName" aria-describedby="ugUnvivName" placeholder="University Name">
                @error('ugUniversityName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugUnvivName" class="form-text text-muted">Under Graduation University Name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="streamOfStudyUg">Stream Of study</label>
              <input type="text"
                class="form-control @error('streamOfStudyUg') is-invalid @enderror" name="streamOfStudyUg" id="streamOfStudyUg" aria-describedby="streamOfStudy" placeholder="Strem of study">
                @error('streamOfStudyUg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="streamOfStudy" class="form-text text-muted">Under Graduation Sream of studyt</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugCollageAddress">Collage Address</label>
              <input type="text"
                class="form-control @error('ugCollageAddress') is-invalid @enderror" name="ugCollageAddress" id="ugCollageAddress" aria-describedby="ugClgAddress" placeholder="Under graduation Collage Address">
                @error('ugCollageAddress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugClgAddress" class="form-text text-muted">Under Graduation Collage Address</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="underGraduationStatus">Under Graduation Status</label>
              @error('underGraduationStatus')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('underGraduationStatus') is-invalid @enderror" name="underGraduationStatus" id="underGraduationStatus">
                <option selected value="Appearing">Appearing</option>
                <option value="Passed">Passed</option>
                <option value="Not Studying">Not Studying</option>
              </select>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="finalYearRollNumberUg">Final Year Roll number</label>
              <input type="number"
                class="form-control @error('finalYearRollNumberUg') is-invalid @enderror" name="finalYearRollNumberUg" id="finalYearRollNumberUg" aria-describedby="finalYearRollNumUg" placeholder="Final year Roll Number">
                @error('finalYearRollNumberUg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="finalYearRollNumUg" class="form-text text-muted">Under Graduation Final Year roll number</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="final yera total marks">Final year Total Marks</label>
              <input type="number"
                class="form-control @error('finalyearmarsksheetUG') is-invalid @enderror" name="finalyearmarsksheetUG" id="finalyearmarsksheetUG" aria-describedby="finalYearTotalMarks" placeholder="Under graduation final year total marks">
                @error('finalyearmarsksheetUG')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="finalYearTotalMarks" class="form-text text-muted">Under graduation final year Total marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugFinalYearObtainedMarks">Final year Obtained Marks</label>
              <input type="number"
                class="form-control @error('ugFinalYearObtainedMarks') is-invalid @enderror" name="ugFinalYearObtainedMarks" id="ugFinalYearObtainedMarks" aria-describedby="ugObtMarks" placeholder="Under gradutaion final year obtained marks">
                @error('ugFinalYearObtainedMarks')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugObtMarks" class="form-text text-muted">Under Graduation Final year obtained marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
             <div class="form-group">
               <label for="ugFinalMarksheet">Final year marksheet</label>
               <input type="file" class="form-control-file @error('ugFinalMarksheet') is-invalid @enderror" name="ugFinalMarksheet" id="ugFinalMarksheet" placeholder="Under graduation final year marksheet" aria-describedby="ugMarksheet">
               @error('ugFinalMarksheet')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
               <small id="ugMarksheet" class="form-text text-muted">Under graaduation final year marksheet</small>
             </div>
          </div>
        </div>
        </div>

        <center><h3><b>Post Graduation Graduation</b></h3></center>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="pgCollageName">Collage name</label>
              <input type="text"
                class="form-control @error('pgCollageName') is-invalid @enderror" name="pgCollageName" id="pgCollageName" aria-describedby="ugNAme" placeholder="Collage Name">
                @error('pgCollageName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugNAme" class="form-text text-muted">Post graduation Collage name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgUniversityName">University Name</label>
              <input type="text"
                class="form-control @error('pgUniversityName') is-invalid @enderror" name="pgUniversityName" id="pgUniversityName" aria-describedby="ugUnvivName" placeholder="University Name">
                @error('pgUniversityName')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugUnvivName" class="form-text text-muted">Post Graduation University Name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="streamOfStudyPg">Stream Of study</label>
              <input type="text"
                class="form-control @error('streamOfStudyPg') is-invalid @enderror" name="streamOfStudyPg" id="streamOfStudyPg" aria-describedby="streamOfStudy" placeholder="Strem of study">
                @error('streamOfStudyPg')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="streamOfStudy" class="form-text text-muted">Under Graduation Sream of studyt</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgCollageAddress">Collage Address</label>
              <input type="text"
                class="form-control @error('pgCollageAddress') is-invalid @enderror" name="pgCollageAddress" id="pgCollageAddress" aria-describedby="ugClgAddress" placeholder="Post graduation Collage Address">
                @error('pgCollageAddress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugClgAddress" class="form-text text-muted">Post Graduation Collage Address</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="underGraduationStatus">Post Graduation Status</label>
              @error('postGraduationStatus')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <select class="form-control @error('postGraduationStatus') is-invalid @enderror" name="postGraduationStatus" id="postGraduationStatus">
                <option selected value="Appearing">Appearing</option>
                <option value="Passed">Passed</option>
                <option value="Not Studying">Not Studying</option>
              </select>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="finalYearRollNumberPg">Final Year Roll number</label>
              <input type="number"
                class="form-control @error('finalyearmarsksheetPG') is-invalid @enderror" name="finalYearRollNumberPg" id="finalYearRollNumberPg" aria-describedby="finalYearRollNumUg" placeholder="Final year Roll Number">
                @error('finalyearmarsksheetPG')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="finalYearRollNumUg" class="form-text text-muted">Under Graduation Final Year roll number</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="finalyearmarsksheetPG">Final year Total Marks</label>
              @error('finalyearmarsksheetPG')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
              <input type="number"
                class="form-control @error('finalyearmarsksheetPG') is-invalid @enderror" name="finalyearmarsksheetPG" id="finalyearmarsksheetPG" aria-describedby="finalYearTotalMarks" placeholder="Under graduation final year total marks">
              <small id="finalYearTotalMarks" class="form-text text-muted">Under graduation final year Total marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgFinalYearObtainedMarks">Final year Obtained Marks</label>
              <input type="number"
                class="form-control @error('pgFinalYearObtainedMarks') is-invalid @enderror" name="pgFinalYearObtainedMarks" id="pgFinalYearObtainedMarks" aria-describedby="pgObtMarks" placeholder="Under gradutaion final year obtained marks">
                @error('pgFinalYearObtainedMarks')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <small id="ugObtMarks" class="form-text text-muted">Under Graduation Final year obtained marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
             <div class="form-group">
               <label for="pgFinalMarksheet">Final year marksheet</label>
               <input type="file" class="form-control-file @error('pgFinalMarksheet') is-invalid @enderror" name="pgFinalMarksheet" id="pgFinalMarksheet" placeholder="Under graduation final year marksheet" aria-describedby="ugMarksheet">
               @error('pgFinalMarksheet')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
               <small id="ugMarksheet" class="form-text text-muted">Under graaduation fianl year marksheet</small>
             </div>
          </div>
        </div>
        <<button type="submit" name="submitThis" id="submitThisEducationInformation" class="btn btn-primary btn-lg btn-block">Submit </button>
    </div>
</form>
</div>
{{--end--}}
