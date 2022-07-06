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

                            <div class="d-flex align-items-center">
                                <div>
                                    <a class="waves-effect waves-light btn btn-round indigo center align" href="/dashboard">Voltar</a>
                                </div>

                            </div>

                            <div class="align-items-center">
                                <div>
                                    <h3 class="center-align">{{str_replace('_', ' ', $title)}}</h3>
                                </div>
                            </div>


                                <div class="m-b-30">

                                    <!-- Sales Summery -->
                                    <div class="p-t-10">
                                        <div class="row align-items-center">
                                            <!-- column -->
                                            <div class="col s12 align-items-center">
                                            @foreach($courses as $course)
                                                <div class="col l6 m6 s12 align-items-center center-align" >
                                                        <div class="card align-items-center" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                                            <div class="card-content center-align">
                                                                <div class="m-b-15">
                                                                    <h5>{{$signature_array[$course->name]['name']}}</h5>
                                                                </div>
                                                                <div class="row" style="width: 40%; margin: 0 auto;">
                                                                    <div class="col l6 m6">
                                                                        <p>TOTAL:</p>
                                                                    </div>
                                                                    <div class="col l6 m6">
                                                                        <p>{{$signature_array[$course->name]['total']}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="width: 40%; margin: 0 auto;">
                                                                    <div class="col l6 m6">
                                                                        <p>PENDENTES:</p>
                                                                    </div>
                                                                    <div class="col l6 m6">
                                                                        <p>{{$signature_array[$course->name]['pending']}}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row" style="width: 40%; margin: 0 auto;">
                                                                    <div class="col l6 m6">
                                                                        <p>ASSINADOS:</p>
                                                                    </div>
                                                                    <div class="col l6 m6">
                                                                        <p>{{$signature_array[$course->name]['signed']}}</p>
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
                    </div>
                </div>

            </div>

        </div>

@endsection
