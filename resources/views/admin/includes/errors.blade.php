@if(count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger"><strong>{{$error}}</div>
    @endforeach
@endif