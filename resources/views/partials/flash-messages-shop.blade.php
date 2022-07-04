@if(Session::has('success'))
<div class="alert alert-success mb-2 text-center">
    {!! Session::get('success') !!}
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info mb-2 text-center">
    {!! Session::get('info') !!}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger mb-2 text-center">
    {!! Session::get('danger') !!}
</div>
@endif
