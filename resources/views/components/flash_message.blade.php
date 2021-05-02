@if($errors->any())
    <ul class="alert alert-danger  text-center" style="list-style: none;">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

@endif
<div class="flash-message text-center">
    @foreach (['danger', 'warning', 'success', 'info', 'error'] as $msg)
        @if(\Illuminate\Support\Facades\Session::has(  $msg))
            <p class="alert alert-{{ $msg== 'error' ? 'danger' : $msg }}" style="color: #000">{{{ \Illuminate\Support\Facades\Session::get( $msg) }}} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
