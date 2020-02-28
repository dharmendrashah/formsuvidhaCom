<p><h5>{{$vacancies->applicable}}</h5>{{$vacancies->postName}}<br/><a href="https://formsuvidha.com"><h3>formsuvidha.com</h3></a></p>
        <div class="row">
            <div class="col">
                <h5>Important Dates</h5><hr/>
                <ul>
                <li class="text-success"><p><h5><b>Application Start :</b></h5>{{$vacancies->formStart}}</p></li><hr/>{{--this will inform the user that when the form will start--}}
                    <li class="text-danger"><p><h5><b>Application End :</b></h5>{{$vacancies->formEnd}}</p></li><hr/>{{--this will inform the user that when the form will end--}}
                    <li class="text-danger"><p><h6><b>Last Date Of fee Submit :</b></h6>{{$vacancies->lastDate}}</p></li><hr/>{{--this will inform the user that when the form will end--}}
                    <li class=""><p><h6><b>Admit card availability :</b></h6>{{$vacancies->admitCard}}</p></li><hr/>{{--this will inform the user that when the form will end--}}
                    <li class=""><p><h6><b>Exam Date :</b></h6>{{$vacancies->examdate}}</p></li><hr/>{{--this will inform the user that when the form will end--}}
                </ul>
            </div>
            <div class="col">
                <h5>Application Fees</h5><hr/>
                <ul>
                    <li><h5>GENERAL / OBC / EWS</h5> &#8377; {{$vacancies->feesCategoryUp}} /-</li><hr/>
                    <li><h5>ST / SC / PH </h5> &#8377;  {{$vacancies->feesCategoryDown}}/-</li><hr/>
                    <li><h5>Female</h5> &#8377; {{$vacancies->female}} /-</li><hr/>
                    <li><h5>Payment Method</h5>{{$vacancies->paymentMethod}}</li>
                </ul>
            </div>
