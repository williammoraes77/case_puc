@extends('admin.layouts.default')

@section('title')
Home -
@parent
@stop

@section('content')

<div class="page-wrapper">

            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Assinaturas</h5>
                </div>
            </div>

            <div class="container-fluid">

                <div class="row">
                    <div class="col s12">
                            <div class="card">
                                <div class="card-content wizard-content">
                                    <h5 class="card-title">Lista de assinaturas</h5>
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
                                                                    @if($signatures_amount > 0)
                                                                    <h3 class="blue-text">2º</h3>
                                                                    <h5 class="blue-text">Passo</h5>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            </div>
                                                        <!-- </div> -->

                                                        <!-- <h2 class="center-align">teste</h2> -->
                                                            <label class="center-align" for="firstName1"><h5>O aluno selecionado possui <span style="color:red;">{{$signatures_amount}}</span> {{($signatures_amount > 1 ? 'documentos' : 'documento' )}} para assinatura.</h5></label>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12 l12">
                                                                    <div class="card">
                                                                        <div class="card-content">
                                                                            <!-- title -->
                                                                            <div class="d-flex align-items-center">
                                                                                <div>
                                                                                    <!-- <h5 class="card-title">Lista de documentos</h5> -->
                                                                                    <!-- <h6 class="card-subtitle">Overview of Latest Month</h6> -->
                                                                                </div>
                                                                                <div class="ml-auto">
                                                                                    <div class="input-field dl support-select">
                                                                                    <!-- <a class="waves-effect waves-light btn btn-round indigo">Confirmar assinaturas pendentes</a> -->
                                                                                    @if($signatures_amount > 0)
                                                                                        <a class="waves-effect waves-light btn btn-round indigo modal-trigger center align" href="#modal1">Selecionar assinaturas pendentes</a>
                                                                                    @else
                                                                                        <a href="{{route('search')}}" class="waves-effect waves-light btn btn-round indigo modal-trigger center align">Buscar outro aluno</a>
                                                                                    @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- title -->
                                                                            <div class="table-responsive scrollable p-o" style="height:400px;">
                                                                                <table class="">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Escola</th>
                                                                                            <th>Curso</th>
                                                                                            <th>Semestre</th>
                                                                                            <th>Turno</th>
                                                                                            <th>Aluno</th>
                                                                                            <th>Email</th>
                                                                                            <th>CPF</th>
                                                                                            <th>Status</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @foreach($signatures as $signature)
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="d-flex no-block align-items-center">
                                                                                                    <div class="">
                                                                                                        <h5 class="m-b-0 font-14 font-medium">{{$signature->school->name}}</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="d-flex no-block align-items-center">
                                                                                                    <div class="">
                                                                                                        <h5 class="m-b-0 font-14 font-medium">{{$signature->course->name}}</h5>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>{{$signature->semester}}</td>
                                                                                            <td class="blue-grey-text  text-darken-4 font-medium">{{$signature->period}}</td>
                                                                                            <td class="blue-grey-text  text-darken-4 font-medium">{{$signature->student_name}}</td>
                                                                                            <td class="blue-grey-text  text-darken-4 font-medium">{{$signature->student_email}}</td>
                                                                                            <td class="blue-grey-text  text-darken-4 font-medium">{{$signature->student_document}}</td>
                                                                                            @if($signature->status == 0)
                                                                                            <!-- <td><i class="fa fa-circle orange-text tooltipped" data-tooltip="In Progress"></i></td> -->
                                                                                            <td><h4><span class="" style="color: #FB6440">Pendente</span></h4></td>
                                                                                            @else
                                                                                            <!-- <td><i class="fa fa-circle teal-text text-accent-4 tooltipped" data-tooltip="Active"></i></td> -->
                                                                                            <td><h4><span class="" style="color: #13b26b">Assinado</span></h4></td>

                                                                                            @endif

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
            <div id="modal1" class="modal">
                <div class="row m-t-20">
                     <h4 class="center-align">Selecione os documentos para registrar assinatura</h4>
                </div>
            <form method="POST" action="{{URL::action('App\Http\Controllers\SignatureController@checkPending')}}">
                {{ csrf_field() }}
                <div class="modal-content">
                    <div class="table-responsive scrollable p-o" style="height:400px;">
                        <table class="">
                            <thead>
                                <tr>
                                    <th>Selecionar</th>
                                    <th>Escola</th>
                                    <th>Curso</th>
                                    <th>Semestre</th>
                                    <th>Turno</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($signatures_pending as $pending)
                                    <tr>
                                        <td>
                                            <label>
                                                <input type="checkbox" name="itens[]" value="{{$pending->id}}"/>
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                    <div class="">
                                                        <h5 class="m-b-0 font-14 font-medium">{{$pending->school->name}}</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex no-block align-items-center">
                                                    <div class="">
                                                        <h5 class="m-b-0 font-14 font-medium">{{$pending->course->name}}</h5>
                                                    </div>
                                                </div>
                                            </td>

                                        <td>{{$pending->semester}}</td>
                                        <td class="blue-grey-text  text-darken-4 font-medium">{{$pending->period}}</td>
                                    </tr>

                                @endforeach`
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer p-b-20">
                    <a class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    <!-- <button  class="btn-large blue accent-4 m-r-20" onclick="event.preventDefault();
                            this.closest('form').submit();">
                        Registrar
                    </button> -->
                    <button id="checkBtn"  class="btn-large blue accent-4 m-r-20 m-b-40">
                        Registrar
                    </button>
                </div>
                </div>

            </form>
            </div>

        </div>



@endsection
@section('scripts')
<script src="/assets/theme/assets/extra-libs/prism/prism.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {

      checked = $("input[type=checkbox]:checked").length;
      if(!checked) {
        alert("NENHUM DOCUMENTO SELECIONADO.");
        return false;
      }

    });
});

</script>
@stop
