                            {{--- EDIÇÃO DE TURMAS ---}}

@extends('cadastro')
@section('form')
<form action="/turmas/{{$class->id}}" method="POST" class="form-horizontal" id="formTurma">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar turma {{ $class->turma }}</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-8" align="center">
            <input type="hidden" id="id" class="form-control">

                {{--- Formulario Turma ---}}
                <div class="form-group col-md-6">
                    <label for="turma" class="control-label">Turma: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="turma" name="turma" placeholder="Nome da Turma"
                            value="{{ $class->turma }}">
                    </div>
                </div>

                {{--- Formulário Nível ---}}

                <div class="form-group col-md-6">
                    <label for="sobrenome" class="control-label">Nível: *</label>
                    <div class="input-group">
                        <select name="nivel" id="nivel" class="form-control">
                            <option value="" selected disabled>Selecione uma Opção</option>
                            <option value="Fundamental" {{ $class->nivel=='Fundamental' ? 'selected' : '' }}>Fundamental</option>
                            <option value="Médio" {{ $class->nivel=='Medio' ? 'selected' : '' }}>Médio</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Ano ---}}

                <div class="form-group col-md-6">
                    <label for="ano" class="control-label">Ano: *</label>
                    <div class="input-group">
                        <select name="ano" id="ano" class="form-control">
                            <option value="" selected disabled>Selecione um Ano</option>
                            <option data-ano="Fundamental" value="1° ano" {{ $class->ano=='1° ano' ? 'selected' : '' }}>1º Ano</option>
                            <option data-ano="Fundamental" value="2° ano" {{ $class->ano=='2° ano' ? 'selected' : '' }}>2º Ano</option>
                            <option data-ano="Fundamental" value="3° ano" {{ $class->ano=='3° ano' ? 'selected' : '' }}>3º Ano</option>
                            <option data-ano="Fundamental" value="4° ano" {{ $class->ano=='4° ano' ? 'selected' : '' }}>4º Ano</option>
                            <option data-ano="Fundamental" value="5° ano" {{ $class->ano=='5° ano' ? 'selected' : '' }}>5º Ano</option>
                            <option data-ano="Fundamental" value="6° ano" {{ $class->ano=='6° ano' ? 'selected' : '' }}>6º Ano</option>
                            <option data-ano="Fundamental" value="7° ano" {{ $class->ano=='7° ano' ? 'selected' : '' }}>7º Ano</option>
                            <option data-ano="Fundamental" value="8° ano" {{ $class->ano=='8° ano' ? 'selected' : '' }}>8º Ano</option>
                            <option data-ano="Fundamental" value="9° ano" {{ $class->ano=='9° ano' ? 'selected' : '' }}>9º Ano</option>
                            <option data-ano="Médio" value="1° ano" {{ $class->ano=='1° ano' ? 'selected' : '' }}>1º Ano</option>
                            <option data-ano="Médio" value="2° ano" {{ $class->ano=='2° ano' ? 'selected' : '' }}>2º Ano</option>
                            <option data-ano="Médio" value="3° ano" {{ $class->ano=='3° ano' ? 'selected' : '' }}>3º Ano</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Turno ---}}

                <div class="form-group col-md-6">
                    <label for="data_Nascimento" class="control-label">Turno: *</label>
                    <div class="input-group">
                        <select name="turno" id="turno" class="form-control">
                            <option value="" selected disabled>Selecione um turno</option>
                            <option value="Manhã"{{ $class->turno=='Manhã' ? 'selected' : '' }}>Manhã</option>
                            <option value="Tarde"{{ $class->turno=='Tarde' ? 'selected' : '' }}>Tarde</option>
                            <option value="Noite"{{ $class->turno=='Noite' ? 'selected' : '' }}>Noite</option>
                            <option value="Integral">Integral</option>
                        </select>
                    </div>
                </div>

            {{--- Formulario Vagas ---}}
                <div class="form-group col-md-6">
                    <label for="vagas" class="control-label">Número de Vagas: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="vagas" id="vagas"
                            value="{{ $class->vagas }}"
                            placeholder="ex: 10" />
                    </div>
                </div>

                {{--- Formulario Professor ---}}
            <? dd($prof);?>
                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Professor:</label>
                    <div class="input-group">
                        <select name="professor_id" id="professor_id" class="form-control">
                            <option value="" selected disabled>Selecione um Professor</option>
                            @foreach ($professor as $prof)
                                <option value="{{ $prof->id }}" {{ $class->professor_id == $prof->id ? 'selected' : '' }}>{{ $prof->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancelar</a>
        </div>
    </div>
</form>
@endsection

@section('javascript')

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\TurmaRequest', '#formTurma') !!}

    <script type="text/javascript">
        var ano = $('select[name="ano"] option');
        $('select[name="nivel"]').on('change', function() {
            var nivel = this.value;
            var novoSelect = ano.filter(function() {
                return $(this).data('ano') == nivel;
            });
            $('select[name="ano"]').html(novoSelect);
        })
    </script>
@endsection