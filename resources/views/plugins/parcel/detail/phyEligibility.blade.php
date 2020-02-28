<div class="w-100"></div>
<div class="col">
    <h5>Physical Eligibility</h5>
    <table class="table table-bordered table-hover">
        <thead class="">
            <tr>
                <th>Details</th>
                <th>Male</th>
                <th>Female</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Height</td>
                    <td>{{$vacancies->maleHeight}}</td>
                <td>{{{$vacancies->femaleHeight}}}</td>
                </tr>
                <tr>
                    <td scope="row">Chest</td>
                    <td>{{$vacancies->maleChest}}</td>
                    <td>{{$vacancies->femaleChest}}</td>
                </tr>
                <tr>
                    <td scope="row">Running</td>
                    <td>{{$vacancies->maleRunning}}</td>
                    <td>{{$vacancies->femaleRunning}}</td>
                </tr>
                <tr>
                    <td scope="row">Long Jump</td>
                    <td>{{$vacancies->maleLongJump}}</td>
                    <td>{{$vacancies->femaleLongJump}}</td>
                </tr>
                <tr>
                    <td scope="row">Heigh Jump</td>
                    <td>{{$vacancies->maleHighJump}}</td>
                    <td>{{$vacancies->femaleHighJump}}</td>
                </tr>
            </tbody>
    </table>
</div>
