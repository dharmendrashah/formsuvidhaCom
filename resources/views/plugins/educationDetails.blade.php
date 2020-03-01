{{--Start--}}
<form action="{{route('educationInformationStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">
        <center><h3><b> Secondary Education </b></h3></center>
        <div class="row">
            <div class="col">
                <div class="form-group">
                  <label for="boardName">Board Name</label>
                  <input type="boardName"
                    class="form-control" name="boardName" id="boardName" aria-describedby="boardName" placeholder="Board Name">
                  <small id="boardName" class="form-text text-muted">Board Name of secondary education</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolName">School Name</label>
                  <input type="text"
                    class="form-control" name="schoolName" id="schoolName" aria-describedby="schoolName" placeholder="School Name">
                  <small id="schoolName" class="form-text text-muted">Secondary education schoola name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolAddress">School address</label>
                  <input type="text"
                    class="form-control" name="schoolAddress" id="schoolAddress" aria-describedby="schoolAddressis" placeholder="School address">
                  <small id="schoolAddressis" class="form-text text-muted">Secondary education school name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="rollNumber">Roll Number</label>
                  <input type="number"
                    class="form-control" name="rollNumber" id="rollNumber" aria-describedby="rollNumbers" placeholder="Roll number">
                  <small id="rollNumbers" class="form-text text-muted">Secondary education roll number</small>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                  <label for="totalMarks">Total marks</label>
                  <input type="number"
                    class="form-control" name="totalMarks" id="totalMarks" aria-describedby="Totalmarks" placeholder="total marks">
                  <small id="Totalmarks" class="form-text text-muted">Secondary education total marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="obtainedmarks">Obtained marks</label>
                  <input type="number"
                    class="form-control" name="obtainedmarks" id="obtainedmarks" aria-describedby="obtainsmarks" placeholder="Obtained marks">
                  <small id="obtainsmarks" class="form-text text-muted">Secondary education obtained marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="passingYear">Passing year</label>
                  <input type="number"
                    class="form-control" name="passingYear" id="passingYear" aria-describedby="passYear" placeholder="passing year">
                  <small id="passYear" class="form-text text-muted">Secondary education passing year</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="tenMarksheetCopy">10th marksheet copy</label>
                  <input type="file" class="form-control-file" name="tenMarksheetCopy" id="tenMarksheetCopy" placeholder="10th marksheet copy" aria-describedby="tenMarksheet">
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
                    class="form-control" name="senboardName" id="senboardName" aria-describedby="boardName" placeholder="Board Name">
                  <small id="boardName" class="form-text text-muted">Board Name of Senior secondary education</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolName">School Name</label>
                  <input type="text"
                    class="form-control" name="senschoolName" id="senschoolName" aria-describedby="schoolName" placeholder="School Name">
                  <small id="schoolName" class="form-text text-muted"> SeniorSecondary education schoola name</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="schoolAddress">School address</label>
                  <input type="text"
                    class="form-control" name="senschoolAddress" id="senschoolAddress" aria-describedby="schoolAddressis" placeholder="School address">
                  <small id="schoolAddressis" class="form-text text-muted"> SeniorSecondary education school name</small>
                </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="streamOfStudyInSecondaryEducation">Stream Of study</label>
                <select class="form-control" name="streamOfStudyInSecondaryEducation" id="streamOfStudyInSecondaryEducation">
                  <option value="Arts">Arts</option>
                  <option value="Commerce">Commerce</option>
                  <option value="Science">Science</option>
                </select>
              </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="twelfthClassStatus">Status of 12th Class</label>
                  <select class="form-control" name="twelfthClassStatus" id="twelfthClassStatus">
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
                    class="form-control" name="senrollNumber" id="senrollNumber" aria-describedby="rollNumbers" placeholder="Roll number">
                  <small id="rollNumbers" class="form-text text-muted"> SeniorSecondary education roll number</small>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                  <label for="totalMarks">Total marks</label>
                  <input type="number"
                    class="form-control" name="sentotalMarks" id="sentotalMarks" aria-describedby="Totalmarks" placeholder="total marks">
                  <small id="Totalmarks" class="form-text text-muted"> Senior Secondary education total marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="obtainedmarks">Obtained marks</label>
                  <input type="number"
                    class="form-control" name="senobtainedmarks" id="senobtainedmarks" aria-describedby="obtainsmarks" placeholder="Obtained marks">
                  <small id="obtainsmarks" class="form-text text-muted"> Senior Secondary education obtained marks</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="passingYear">Passing year</label>
                  <input type="number"
                    class="form-control" name="senpassingYear" id="senpassingYear" aria-describedby="passYear" placeholder="passing year">
                  <small id="passYear" class="form-text text-muted">Senior secondary passing year</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                  <label for="tenMarksheetCopy">12th marksheet copy</label>
                  <input type="file" class="form-control-file" name="twelfthMarksheetCopy" id="twelfthMarksheetCopy" placeholder="12th marksheet copy" aria-describedby="tenMarksheet">
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
                class="form-control" name="ugCollageName" id="ugCollageName" aria-describedby="ugNAme" placeholder="Collage Name">
              <small id="ugNAme" class="form-text text-muted">Under graduation Collage name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugUniversityName">University Name</label>
              <input type="text"
                class="form-control" name="ugUniversityName" id="ugUniversityName" aria-describedby="ugUnvivName" placeholder="University Name">
              <small id="ugUnvivName" class="form-text text-muted">Under Graduation University Name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="streamOfStudyUg">Stream Of study</label>
              <input type="text"
                class="form-control" name="streamOfStudyUg" id="streamOfStudyUg" aria-describedby="streamOfStudy" placeholder="Strem of study">
              <small id="streamOfStudy" class="form-text text-muted">Under Graduation Sream of studyt</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugCollageAddress">Collage Address</label>
              <input type="text"
                class="form-control" name="ugCollageAddress" id="ugCollageAddress" aria-describedby="ugClgAddress" placeholder="Under graduation Collage Address">
              <small id="ugClgAddress" class="form-text text-muted">Under Graduation Collage Address</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="underGraduationStatus">Under Graduation Status</label>
              <select class="form-control" name="underGraduationStatus" id="underGraduationStatus">
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
                class="form-control" name="finalYearRollNumberUg" id="finalYearRollNumberUg" aria-describedby="finalYearRollNumUg" placeholder="Final year Roll Number">
              <small id="finalYearRollNumUg" class="form-text text-muted">Under Graduation Final Year roll number</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="final yera total marks">Final year Total Marks</label>
              <input type="number"
                class="form-control" name="finalyearmarsksheetUG" id="finalyearmarsksheetUG" aria-describedby="finalYearTotalMarks" placeholder="Under graduation final year total marks">
              <small id="finalYearTotalMarks" class="form-text text-muted">Under graduation final year Total marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="ugFinalYearObtainedMarks">Final year Obtained Marks</label>
              <input type="number"
                class="form-control" name="ugFinalYearObtainedMarks" id="ugFinalYearObtainedMarks" aria-describedby="ugObtMarks" placeholder="Under gradutaion final year obtained marks">
              <small id="ugObtMarks" class="form-text text-muted">Under Graduation Final year obtained marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
             <div class="form-group">
               <label for="ugFinalMarksheet">Final year marksheet</label>
               <input type="file" class="form-control-file" name="ugFinalMarksheet" id="ugFinalMarksheet" placeholder="Under graduation final year marksheet" aria-describedby="ugMarksheet">
               <small id="ugMarksheet" class="form-text text-muted">Under graaduation fianl year marksheet</small>
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
                class="form-control" name="pgCollageName" id="pgCollageName" aria-describedby="ugNAme" placeholder="Collage Name">
              <small id="ugNAme" class="form-text text-muted">Post graduation Collage name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgUniversityName">University Name</label>
              <input type="text"
                class="form-control" name="pgUniversityName" id="pgUniversityName" aria-describedby="ugUnvivName" placeholder="University Name">
              <small id="ugUnvivName" class="form-text text-muted">Post Graduation University Name</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="streamOfStudyPg">Stream Of study</label>
              <input type="text"
                class="form-control" name="streamOfStudyPg" id="streamOfStudyPg" aria-describedby="streamOfStudy" placeholder="Strem of study">
              <small id="streamOfStudy" class="form-text text-muted">Under Graduation Sream of studyt</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgCollageAddress">Collage Address</label>
              <input type="text"
                class="form-control" name="pgCollageAddress" id="pgCollageAddress" aria-describedby="ugClgAddress" placeholder="Post graduation Collage Address">
              <small id="ugClgAddress" class="form-text text-muted">Post Graduation Collage Address</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="underGraduationStatus">Post Graduation Status</label>
              <select class="form-control" name="postGraduationStatus" id="postGraduationStatus">
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
                class="form-control" name="finalYearRollNumberPg" id="finalYearRollNumberPg" aria-describedby="finalYearRollNumUg" placeholder="Final year Roll Number">
              <small id="finalYearRollNumUg" class="form-text text-muted">Under Graduation Final Year roll number</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="finalyearmarsksheetPG">Final year Total Marks</label>
              <input type="number"
                class="form-control" name="finalyearmarsksheetPG" id="finalyearmarsksheetPG" aria-describedby="finalYearTotalMarks" placeholder="Under graduation final year total marks">
              <small id="finalYearTotalMarks" class="form-text text-muted">Under graduation final year Total marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
              <label for="pgFinalYearObtainedMarks">Final year Obtained Marks</label>
              <input type="number"
                class="form-control" name="pgFinalYearObtainedMarks" id="pgFinalYearObtainedMarks" aria-describedby="pgObtMarks" placeholder="Under gradutaion final year obtained marks">
              <small id="ugObtMarks" class="form-text text-muted">Under Graduation Final year obtained marks</small>
            </div>
          </div>

          <div class="col">
            <div class="form-group">
             <div class="form-group">
               <label for="pgFinalMarksheet">Final year marksheet</label>
               <input type="file" class="form-control-file" name="pgFinalMarksheet" id="pgFinalMarksheet" placeholder="Under graduation final year marksheet" aria-describedby="ugMarksheet">
               <small id="ugMarksheet" class="form-text text-muted">Under graaduation fianl year marksheet</small>
             </div>
          </div>
        </div>
        <<button type="submit" name="submitThis" id="submitThisEducationInformation" class="btn btn-primary btn-lg btn-block">Submit </button>
    </div>
</form>
{{--end--}}
