@if(session('success'))
    <span class="text-success float-right" role="alert">
     <strong>{{session('success')}}</strong>
    </span>
@endif
@if(session('warning'))
    <span class="text-info float-right" role="alert">
    <strong>{{session('warning')}}</strong>
    </span>
@endif
@if(session('error'))
    <span class="text-danger float-right" role="alert">
    <strong>{{session('error')}}</strong>
    </span>
@endif

