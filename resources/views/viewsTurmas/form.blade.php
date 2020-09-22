{{--- CADASTRO TURMAS ---}}

@extends('cadastro')
@section('form')
<form action="/professores" method="POST" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Novo Cadastro de Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-8" align="center">
            <input type="hidden" id="id" class="form-control">

                {{--- Formulario Turma ---}}
                <div class="form-group col-md-6">
                    <label for="turma" class="control-label">Turma: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="turma" name="turma" placeholder="Nome da Turma"
                            value="{{ isset($cras->turma) ? $cras->turma : old('turma') }}">
                    </div>
                </div>

                {{--- Formulário Nível ---}}

                <div class="form-group col-md-6">
                    <label for="sobrenome" class="control-label">Nível: *</label>
                    <div class="input-group">
                        <select name="nivel" id="nivel" class="form-control">
                            <option value="" selected disabled>Selecione uma Opção</option>
                            <option value="Fundamental">Fundamental</option>
                            <option value="Medio">Médio</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Ano ---}}

                <div class="form-group col-md-6">
                    <label for="ano" class="control-label">Ano: *</label>
                    <div class="input-group">
                        <select name="ano" id="ano" class="form-control">
                            <option value="" selected disabled>Selecione um Ano</option>
                            <option data-ano="Fundamental" value="1° ano">1º Ano</option>
                            <option data-ano="Fundamental" value="2° ano">2º Ano</option>
                            <option data-ano="Fundamental" value="3° ano">3º Ano</option>
                            <option data-ano="Fundamental" value="4° ano">4º Ano</option>
                            <option data-ano="Fundamental" value="5° ano">5º Ano</option>
                            <option data-ano="Fundamental" value="6° ano">6º Ano</option>
                            <option data-ano="Fundamental" value="7° ano">7º Ano</option>
                            <option data-ano="Fundamental" value="8° ano">8º Ano</option>
                            <option data-ano="Fundamental" value="9° ano">9º Ano</option>
                            <option data-ano="Medio" value="1° ano">1º Ano</option>
                            <option data-ano="Medio" value="2° ano">2º Ano</option>
                            <option data-ano="Medio" value="3° ano">3º Ano</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Turno ---}}

                <div class="form-group col-md-6">
                    <label for="data_Nascimento" class="control-label">Turno: *</label>
                    <div class="input-group">
                        <select name="turno" id="turno" class="form-control">
                            <option value="" selected disabled>Selecione um turno</option>
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                        </select>
                    </div>
                </div>

            {{--- Formulario Vagas ---}}
                <div class="form-group col-md-6">
                    <label for="vagas" class="control-label">Número de Vagas: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="vagas" id="vagas"
                            value="{{ isset($cras->vagas) ? $cras->vagas : old('vagas') }}"
                            placeholder="ex: 10" />
                    </div>
                </div>

                {{--- Formulario Professor ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Professor:</label>
                    <div class="input-group">
                        <select name="professor" id="professor" class="form-control">
                            <option value="" selected disabled>Selecione um Professor</option>
                            @foreach ($professor as $prof)
                                <option value="{{ $prof->nome }}">{{ $prof->nome }}</option>
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