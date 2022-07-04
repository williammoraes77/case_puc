@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

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
                                    <h5 class="card-title">Assinaturas</h5>
                                    <h6 class="card-subtitle">See full documentation here on <a href="http://www.jquery-steps.com" target="_blank">offical website</a>.</h6>
                                    <form action="#" class="tab-wizard wizard-circle align-items-center">

                                        <section class="align-items-center">
                                            <div class="row align-items-center">
                                                <div class="row" style="">
                                                    <div class="align-items-center" style="width: 50%; margin: 0 auto">

                                                        <!-- <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);"> -->
                                                            <div class="row" style="margin: 0 auto">
                                                            <div class="card-content center-align align-items-center" style="margin: 0 auto">
                                                                <div class="center-align">
                                                                    <h3 class="blue-text">2º</h3>
                                                                    <h5 class="blue-text">Passo</h5>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        <!-- </div> -->

                                                        <!-- <h2 class="center-align">teste</h2> -->
                                                        <label class="center-align" for="firstName1"><h5>O aluno selecionado possui <span style="color:red;">{{$signatures_amount}}</span> {{($signatures_amount > 1 ? 'documentos' : 'documento' )}} para assinatura.</h5></label>
                                                        @foreach($signatures as $signature)
                                                        <h2>{{$signature->period}}</h2>
                                                        @endforeach
                                                        </div>
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
