<div class="w-100"></div>
<div class="col">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Post</th>
                <th>Gender</th>
                <th>Post</th>
                <th>Eligibility</th>
                <th>Age limit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">{{$vacancies->name}}</td>
                <td>Male <hr/> Female</td>
                <td> {{$vacancies->postForMale}} <hr/> {{$vacancies->postForFemale}}</td>
            <td>{{$vacancies->educationEligibility}}</td>
                <td>Age : {{$vacancies->ageLimit}} Year</td>
            </tr>
        </tbody>
    </table>
</div>
