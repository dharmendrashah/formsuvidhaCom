<div class="container">
    @include('plugins.parcel.detail.generalinfo')
   <center>
   @include('plugins.parcel.detail.main')
            <div class="w-100"></div>
            <div class="col">
                <hr/><h5>Total vacancies is :- `<b>{{$vacancies->totalPost}}</b>`</h5><hr/>
            </div>
            @include('plugins.parcel.detail.eduEligibility')
            @include('plugins.parcel.detail.reservation')
            @include('plugins.parcel.detail.phyEligibility')
            @include('plugins.parcel.detail.links')
    </center>
</div>
