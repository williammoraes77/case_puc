@if(Session::has('success'))
<div class="alert custom alert-success mt-3">
    <i class="icon-tick"></i>{!! Session::get('success') !!}
</div>
@endif

@if(Session::has('info'))
<div class="alert custom alert-info mt-3">
    <i class="icon-info-large"></i>{!! Session::get('info') !!}
</div>
@endif

@if(Session::has('danger'))
<div class="alert custom alert-danger mt-3">
    <i class="icon-warning2"></i>{!! Session::get('danger') !!}
</div>
@endif

@if(Session::has('warning'))
<div class="alert custom alert-warning mt-3">
    <i class="icon-warning2"></i>{!! Session::get('warning') !!}
</div>
@endif
