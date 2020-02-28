<div class="w-100"></div>
<div class="col">
    <h5>
        <hr />Important Links
        <hr />
    </h5>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Type</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">Apply Online</td>
                <td><a href="{{$vacancies->linkofRegistration}}">Registration</a>
                    <hr /><a href="{{$vacancies->lonkoflogin}}">Login</a></td>
            </tr>
            <tr>
                <td scope="row">Official Notification</td>
                <td><a href="{{$vacancies->linkOfofficialNotification}}">Download</a></td>
            </tr>
            <tr>
                <td>Official Website</td>
                <td><a href="{{$vacancies->linkOfofficialWebsite}}">Website</a></td>
            </tr>
            <tr>
                <td colspan="2">
                    @if (empty($formStatusOfThisUser))
                    <form action="{{route('formCheck')}}" method="POST">
                        @csrf
                        <input type="text" name="vacancy" hidden value="{{$vacancies->id}}">
                        <input type="text" name="userID" hidden value="{{\Auth::user()->id}}">
                        <input type="text" name="status" hidden value="1">
                        <button type="submit" class="btn btn-primary" style="width:100%">Apply Now</button>
                    </form>
                    @else
                    <a href="{{route('fillNow', ['vacancyid' => $vacancies->id, 'userID' => \Auth::user()->id, 'status' => $formStatusOfThisUser])}}"><button type="button" class="btn btn-outline-info btn-lg btn-block">Continue ...</button></a>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
