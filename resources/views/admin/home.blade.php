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
                                        <h5 class="card-title">Monthly Overview</h5>
                                    </div>

                                </div>
                                <!-- Sales Summery -->
                                <div class="p-t-20">
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col s12">
                                            <a href="{{route('dashboard')}}" class="col l6 m6 s12">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="blue-text display-6"><i class="ti-bar-chart-alt"></i></span>
                                                        </div>
                                                        <div>
                                                            <h4>62,600</h4>
                                                            <h4 class="blue-text">Total de Pendentes</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('search')}}" class="col l6 m6 s12">
                                                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                    <div class="card-content center-align">
                                                        <div>
                                                            <span class="blue-text display-6"><i class="ti-bar-chart-alt"></i></span>
                                                        </div>
                                                        <div>
                                                            <h4>Cadastrar</h4>
                                                            <h4>Assinatura</h4>
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
