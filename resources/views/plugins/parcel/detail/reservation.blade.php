<div class="w-100"></div>
<div class="col">
    <center>
    <hr/><h5>Category Wise Vacancy Details</h5><hr/>
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th>Post Name</th>
                <th>Gender</th>
                <th>General</th>
                <th>OBC</th>
                <th>EWS</th>
                <th>SC</th>
                <th>ST</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                <td scope="row">{{$vacancies->name}}</td>
                    <td>Male <hr/> Female</td>
                    <td>{{$vacancies->reserveForMaleGeneral}} <hr/> {{$vacancies->reserveForFemaleGeneral}}</td>
                    <td>{{$vacancies->reserveForMaleObc}} <hr/> {{$vacancies->reserveForFemaleObc}}</td>
                    <td>{{$vacancies->reserveForMaleEws}} <hr/> {{$vacancies->reserveForFemaleEws}}</td>
                    <td>{{$vacancies->reserveForMaleSc}} <hr/> {{$vacancies->reserveForFemaleSc}}</td>
                    <td>{{$vacancies->reserveForMaleSt}} <hr/> {{$vacancies->reserveForFemaleSt}}</td>
                    <td>{{$vacancies->reserveForMaleGeneral + $vacancies->reserveForMaleObc + $vacancies->reserveForMaleEws + $vacancies->reserveForMaleSc + $vacancies->reserveForMaleSt}} <hr/> {{$vacancies->reserveForFemaleGeneral + $vacancies->reserveForFemaleObc + $vacancies->reserveForFemaleEws + $vacancies->reserveForFemaleSc + $vacancies->reserveForFemaleSt}}</td>
                </tr>
            </tbody>
    </table>
</center>
</div>
