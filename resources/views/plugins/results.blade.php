<div class="container">
    <div class="results">
        @if (count($vacancies) > 0)
    There are '<b>{{$vacancies->total()}}</b>' Results related to '<i>{{$_GET['q']}}</i>'<br/><hr/>
        @foreach ($vacancies as $form)
    <h6 class="text-primary"><b><a href="{{url('/')}}/vacancy/{{$form->id}}">{{$form->name}}</a></b></h6>
    <p>{{$form->postName}}</p>
    <p class="text-success">{{url('/')}}/vacancy/{{$form->id}}</p>
    <p>{{$form->aboutPost}}</p>
    <hr/>
        @endforeach
        <center>
            {{$vacancies->appends(['_token' => csrf_token(),'q' => $_GET['q'], 'user' => \Auth::user()->id, 'ip' => \Request::ip(), 'setup' => $_SERVER['HTTP_USER_AGENT']])->links()}}
        </center>

    </center>
        @else
        <center>---No Results Found---</center>
        @endif
    </div>
    {{--  --}}
</div>
