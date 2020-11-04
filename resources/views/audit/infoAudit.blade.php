@extends('layouts.master')
@section('content')

    <div class="card col-8 mx-auto">
        <div class="card-header">
            <h2 class="pt-3 text-center">Informações da Atividade</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 pt-3">
                    <h5><strong>ID do Usuário:</strong> {{$audit->user_id}}</h5>
                    <hr>
                </div>
                <div class="col-6 pt-3">
                    <h5><strong>ID Auditado:</strong> {{$audit->auditable_id}}</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Nome do Usuário:</strong>
                        @foreach ($users->where('id',$audit->user_id) as $user)
                            {{$user->name}}
                        @endforeach</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Tipo de Auditoria:</strong> {{$audit->auditable_type}}</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Evento:</strong>
                        @if ($audit->event == 'created')
                            Criou
                        @elseif ($audit->event == 'updated')
                            Atualizou
                        @else 
                            Deletou
                        @endif</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Ip address:</strong> @if($audit->ip_address == '::1') Localhost @else {{$audit->ip_address}} @endif</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>URL:</strong> {{$audit->url}}</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Tags:</strong> @if($audit->tags == null) Nenhuma tag comentada @else {{$audit->tags}} @endif</h5>
                    <hr>
                </div>
                <div class="col-12">
                    <h5><strong>User agent:</strong> {{$audit->user_agent}}</h5>
                    <hr>
                </div>
                <div class="col-6">
                    <h5><strong>Valores Antigos:</strong></h5>
                    <h5>@if($audit->old_values == null) 
                        Nenhum valor antigo
                    @else
                        @php
                            $teste = explode("{",json_encode($audit->old_values));
                            $teste2 = explode("}", $teste[1]);
                            $teste3 = explode(",",$teste2[0]);
                            $i = 0; 
                        @endphp
                        @while ($i <= 10)
                            @if (isset($teste3[$i]))
                                {{str_replace(':','=>',$teste3[$i])}}
                                <hr>
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endwhile
                    @endif</h5>
                </div>
                <div class="col-6">
                    <h5><strong>Valores Novos:</strong></h5>
                    <h5>@if($audit->new_values == null) 
                        Nenhum valor novo
                    @else
                        @php
                            $teste = explode("{",json_encode($audit->new_values));
                            $teste2 = explode("}", $teste[1]);
                            $teste3 = explode(",",$teste2[0]);
                            $i = 0; 
                        @endphp
                        @while ($i <= 10)
                            @if (isset($teste3[$i]))
                                {{str_replace(':','=>',$teste3[$i])}}
                                <hr>
                            @endif
                            @php
                                $i++;
                            @endphp
                        @endwhile
                    @endif</h5>
                </div>
                <div class="pl-3 pb-3">
                    <a class="btn btn-info" href="{{ route('atividades') }}">voltar</a>
                </div>
            </div>
        </div>
    </div>

@endsection