@if (\Session::has('message'))
<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    <strong>{{nl2br(\Session::get('message'))}}</strong>
    </div>
    <script>
      $(".alert").alert();
    </script>
</div>
@endif
<div class="container">
    @include('flash::message')
</div>
