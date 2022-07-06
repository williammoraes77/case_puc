@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Logs</h5>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col s12">
                            <div class="card">
                                <div class="card-content wizard-content">
                                    <h5 class="card-title">Lista de logs</h5>
                                    <!-- <h6 class="card-subtitle">See full documentation here on <a href="http://www.jquery-steps.com" target="_blank">offical website</a>.</h6> -->
                                    <form action="#" class="tab-wizard wizard-circle align-items-center">

                                        <section class="align-items-center">
                                            <div class="row align-items-center">
                                                <div class="row" style="">
                                                    <div class="align-items-center" style="width: 50%; margin: 0 auto">

                                                        <!-- <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);"> -->
                                                        <div class="row" style="margin: 0 auto">
                                                            <div class="card-content center-align align-items-center" style="margin: 0 auto">
                                                                <div class="center-align">

                                                                </div>
                                                            </div>
                                                            </div>
                                                        <!-- </div> -->

                                                        <!-- <h2 class="center-align">teste</h2> -->

                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 l12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                            <!-- title -->
                                                                            <div class="d-flex align-items-center">
                                                                                <div>
                                                                                    <!-- <h5 class="card-title">Lista de Logs</h5> -->
                                                                                    <!-- <h6 class="card-subtitle">Overview of Latest Month</h6> -->
                                                                                </div>
                                                                                <div class="ml-auto">
                                                                                    <div class="input-field dl support-select">

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- title -->
                                                                            <div class="table-responsive scrollable p-o" style="height:400px;">
                                                                            <table class="">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Nome Aluno</th>
                                                                                        <th>Email Aluno</th>
                                                                                        <th>Nome Atendente</th>
                                                                                        <th>Email Atendente</th>
                                                                                        <th>Data da assinatura</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach($logs as $log)
                                                                                    <tr>
                                                                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$log->signature->student_name}}</td>
                                                                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$log->student_email}}</td>
                                                                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$log->user->name}}</td>
                                                                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$log->user->email}}</td>
                                                                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$log->created_at->format('d/ m/ Y, H: i: s');}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                </div>

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
