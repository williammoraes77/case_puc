@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

@if(Session::has('danger'))
<div class="alert alert-danger mt-2">

    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
        <tbody>
            <tr>
                <td style="background:#A72020; padding:20px; color:#fff; text-align:center;"> {!! Session::get('danger') !!} </td>
            </tr>
        </tbody>
    </table>

</div>
@endif

            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Assinatura</h5>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col s12">
                            <div class="card">
                                <div class="card-content wizard-content">
                                    <!-- <h5 class="card-title">Buscar CPF</h5>
                                    <h6 class="card-subtitle">See full documentation here on <a href="http://www.jquery-steps.com" target="_blank">offical website</a>.</h6> -->

                                        <section class="align-items-center">
                                            <div class="row align-items-center">
                                                <div class="row" style="">
                                                    <div class="align-items-center" style="width: 50%; margin: 0 auto">

                                                        <div class="col s12 m12 l12 no-padding align-items-center">
                                                            <div class="pricing-box align-items-center" style="">
                                                                <div class="pricing-body" style="">
                                                                    <div class="pricing-header align-items-center">
                                                                        <h1 class="center-align"><i class="material-icons center-align" style="color: green;">check_circle</i></h1>
                                                                        <h5 class="center-align">Assinatura confirmada com sucesso</h5>
                                                                        <p class=" center-align uppercase">Confirmado a assinatura de <span style="color:blue;">{{$signatures_count}}</span> {{($signatures_count > 1 ? 'documentos' : 'documento' )}}.</p>
                                                                    </div>
                                                                    <div class="price-table-content align-items-center">
                                                                        <div class="price-row center-align">O comprovante foi enviado para o email: <span style="color:blue;"><b>{{$email}}</b></span></div>

                                                                        <div class="price-row center-align m-t-20">
                                                                        <a href="{{route('search')}}" class="btn-large blue accent-4 m-r-20">
                                                                            OK
                                                                        </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>


                                            </div>
                                        </section>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
@section('scripts')

@stop
