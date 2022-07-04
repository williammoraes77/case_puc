@if(Session::has('success'))
<div class="alert alert-success mt-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! Session::get('success') !!}
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info mt-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! Session::get('info') !!}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger mt-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {!! Session::get('danger') !!}
</div>
@endif
