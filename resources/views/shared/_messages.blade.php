@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has($msg))
        <div class="am-alert am-alert-{{$msg}}">
            <button type="button" class="am-closes">&times;</button>
            <p>
                {{ session()->get($msg) }}
            </p>
        </div>
    @endif
@endforeach
