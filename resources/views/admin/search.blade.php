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
                                    <h5 class="card-title">Buscar documentos</h5>
                                    <!-- <h6 class="card-subtitle">See full documentation here on <a href="http://www.jquery-steps.com" target="_blank">offical website</a>.</h6> -->
                                    <form method="POST" action="{{URL::action('App\Http\Controllers\SignatureController@findDocument')}}">
                                        {{ csrf_field() }}
                                        <section class="align-items-center">
                                            <div class="row align-items-center">
                                                <div class="row" style="">
                                                    <div class="align-items-center" style="width: 50%; margin: 0 auto">

                                                        <!-- <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);"> -->
                                                            <div class="row" style="margin: 0 auto">
                                                            <div class="card-content center-align align-items-center" style="margin: 0 auto">
                                                                <div class="center-align">
                                                                    <h3 class="blue-text">1.º</h3>
                                                                    <h5 class="blue-text">Passo</h5>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        <!-- </div> -->

                                                        <!-- <h2 class="center-align">teste</h2> -->
                                                        <label class="center-align" for="firstName1"><h4>CPF/NOME</h4></label>
                                                            <input class="center-align" type="text" name="document_number" id="firstName1" style="float:right" placeholder="digite o numero do cpf ou o nome do aluno" required>

                                                        </div>


                                                </div>
                                                <div class="row" style="">
                                                    <button class="btn-large blue accent-4 m-r-20" onclick="event.preventDefault();
                                                            this.closest('form').submit();" style="float:right">
                                                        Buscar
                                                    </button>
                                                </div>

                                            </div>
                                        </section>

                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
@section('scripts')

@stop
