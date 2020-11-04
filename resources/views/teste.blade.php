@extends('layouts.master')
@section('content')
<div class="col s5">
    <table>
        <tr>
            <td><h6>User id:</h6></td>
            <td><h6>{{$audit->user_id}}</h6></td>
        </tr>
        <tr>
            <td><h6>Auditable id:</h6></td>
            <td><h6>{{$audit->auditable_id}}</h6></td>
        </tr>
        <tr>
            <td><h6></h6>User Type:</td>
            <td><h6>{{$audit->user_type}}</h6></td>
        </tr>
        <tr>
            <td><h6>Auditable Type:</h6></td>
            <td><h6>{{$audit->auditable_type}}</h6></td>
        </tr>
        <tr>
            <td><h6>Evento:</h6></td>
            <td><h6>{{$audit->event}}</h6></td>
        </tr>
        <tr>
            <td><h6>Ip address:</h6></td>
            <td><h6>@if($audit->ip_address == '::1') Localhost @else {{$audit->ip_address}} @endif</h6></td>
        </tr>
    </table>
</div>
<div class="col s7">
    <table>
        <tr>
            <td><h6>URL:</h6></td>
            <td><h6>{{$audit->url}}</h6></td>
        </tr>
        <tr>
            <td><h6>Tags:</h6></td>
            <td><h6>@if($audit->tags == null) Nenhuma tag comentada @else {{$audit->tags}} @endif</h6></td>
        </tr>
        
        <tr>
            <td><h6>Old value:</h6></td>
            <td>
                <h6>
                    @if($audit->new_values == null) 
                        nenhum valor substituido 
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
                    @endif
                </h6>
            </td>
        </tr>
        <tr>
            <td><h6>New value:</h6></td>
            <td>
                <h6>
                    @if($audit->old_values == '[]') 
                        nenhum valor criado 
                    @else
                        
                    @endif
                </h6>
            </td>
        </tr>
        <tr>
            <td><h6>User agent:</h6></td>
            <td><h6>{{$audit->user_agent}}</h6></td>
        </tr>
    </table>
</div>
@endsection