@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Home</h5>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <!-- column -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>

                                    </div>

                                </div>
                                <!-- Sales Summery -->
                                <div class="p-t-20">
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col s12">
                                            <a href="{{route('dashboard')}}" class="col l4 m4 s12">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="display-6" style="color: #d98305!important"><i class="ti-bar-chart-alt"></i></span>
                                                        </div>
                                                        <div>
                                                            <h4>{{$signature_pending}}</h4>
                                                            <h4 class="">Documentos Pendentes</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('dashboard')}}" class="col l4 m4 s12">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="green-text display-6"><i class="ti-bar-chart-alt"></i></span>
                                                        </div>
                                                        <div>
                                                            <h4>{{$signature_signed}}</h4>
                                                            <h4 class="">Documentos Assinados</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('search')}}" class="col l4 m4 s12">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="blue-text display-6"><i class="fas fa-folder-open"></i></span>
                                                        </div>
                                                        <div>
                                                        <h4 style="color: transparent!important">-</h4>
                                                            <h4>Cadastrar Assinatura</h4>

                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
