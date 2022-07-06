@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Dashboard</h5>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <!-- column -->
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">

                            @foreach($schools as $school)
                                <div class="m-b-30">
                                    <!-- <div class="align-items-center">
                                        <div>
                                            <h2 class="center-align">{{str_replace('_', ' ', $school->name)}}</h2>

                                        </div>

                                    </div> -->
                                    <div class="align-items-center m-b-20">
                                        <div>
                                            <h2 class="center-align">{{str_replace('_', ' ', $school->name)}}</h2>
                                        </div>
                                        <div class="ml-auto">
                                            <div class="input-field dl support-select" style="float: right; margin-bottom: 20px;">
                                            <!-- <a class="waves-effect waves-light btn btn-round indigo">Confirmar assinaturas pendentes</a> -->
                                                <a href="/dashboard/school/{{$school->id}}" class="waves-effect waves-light btn btn-round indigo modal-trigger center align">Ver cursos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sales Summery -->
                                    <div class="p-t-10">
                                        <div class="row">
                                            <!-- column -->
                                            <div class="col s12">
                                                <div class="col l4 m6 s12" >
                                                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                            <div class="card-content center-align">
                                                                <div>
                                                                    <span class="blue-text display-6"><i class="ti-bar-chart-alt"></i></span>

                                                                </div>
                                                                <div>
                                                                    <h2 class="blue-text">{{$signature_array[$school->name]['total']}}</h2>
                                                                    <h4 class="blue-text">Total</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col l4 m6 s12">
                                                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                            <div class="card-content center-align">
                                                                <div>
                                                                    <span class="display-6" style="color: #d98305!important"><i class="fas fa-clipboard"></i></i></span>
                                                                </div>
                                                                <div>
                                                                    <h2 class="" style="color: #d98305!important">{{$signature_array[$school->name]['pending']}}</h2>
                                                                    <h4 class="" style="color: #d98305!important">Pendentes</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col l4 m6 s12">
                                                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                            <div class="card-content center-align">
                                                                <div>
                                                                    <span class="green-text display-6"><i class="fas fa-check-square"></i></span>
                                                                </div>
                                                                <div>
                                                                    <h2 class="green-text">{{$signature_array[$school->name]['signed']}}</h2>
                                                                    <h4 class="green-text">Assinados</h4>
                                                                </div>
                                                            </div>
                                                        </div>
</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

@endsection
