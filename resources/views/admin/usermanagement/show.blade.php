
{{$user->username}}
{{$user->id}}

@if($component_users!=null)
    @foreach($component_users as $cu)
        {{$cu->component->component_name}}
    @endforeach
@endif