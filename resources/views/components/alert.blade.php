@if (session($name))
    <div class="alert alert-{{$name=='error'?'danger':$name}}">
        {{ session($name) }}
    </div>
@endif
