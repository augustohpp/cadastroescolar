                        {{--- CADASTRO DE ALUNOS ---}}

@extends('cadastro')
@section('form')
<form action="/alunos" method="POST" class="form-horizontal" id="formAluno">
    @csrf
    <div class="card">
        <div class="card-header">
            <h2 class="col-12 modal-title text-center">Cadastrar Novo Aluno</h2>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">

                {{--- Formulario Nome ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome" class="control-label">Nome: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                        value="{{isset($cras->nome) ? $cras->nome : old('nome') }}" required>
                    </div>
                </div>

                {{--- Formulário Sobrenome ---}}

                <div class="form-group col-md-5">
                    <label for="sobrenome" class="control-label">Sobrenome: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                            value="{{isset($cras->sobrenome) ? $cras->sobrenome : old('sobrenome') }}" required>
                    </div>
                </div>

                {{-- Formulário Seleção Turma --}}

                <div class="form-group col-md-1">
                    <label for="Turma" class="control-label">Turma:</label>
                    <div class="input-group">
                        <select class="form-control" name="turma_id" id="turma_id">
                            <option value="" data-vagas="" data-count="0"></option>
                            @foreach ($turmas as $turma)
                                <option value="{{$turma->id}}" data-vagas="{{$turma->vagas}}" data-count="{{$turma->aluno->count()}}">
                                    {{$turma->turma}}
                                </option>
                            @endforeach
                        </select>
                        <div class="erro"></div>
                    </div>
                </div>

                {{--- Formulário Sexo ---}}

                <div class="form-group col-md-6">
                    <label for="sexo" class="control-label">Sexo: *</label>
                    <div class="input-group">
                        <select name="sexo" id="sexo" class="form-control" required>
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Data Nascimento ---}}

                <div class="form-group col-md-6">
                    <label for="data_Nascimento" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="data_Nascimento" name="data_Nascimento" placeholder="dd-mm-aaaa"
                            value="" required>
                    </div>
                </div>
            </div><!-- Form-row -->
            <hr />

            {{--- Formulario Endereco Cras ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cep" class="control-label">CEP:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cep" name="cep"
                            placeholder="Ex: 93010-030"
                            value="">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="cidade" class="control-label">Cidade:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="cidade" name="cidade"
                            placeholder="Ex: São Leopoldo"
                            value="">
                    </div>
                </div>
            
                <div class="form-group col-md-6">
                    <label for="bairro" class="control-label">Bairro:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="bairro" name="bairro"
                            placeholder="Ex: Centro"
                            value="">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="rua" class="control-label">Rua:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="rua" name="rua"
                            placeholder="Ex: Av. Dom João Becker"
                            value="">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="numero" class="control-label">Número:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="numero" name="numero"
                            placeholder="Ex: 754"
                            value="">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label for="complemento" class="control-label">Complemento:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="complemento" name="complemento"
                            placeholder=""
                            value="">
                    </div>
                </div>
            </div><!-- Form-row -->
            <hr />

            {{--- Formulario Telefone Cras ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Telefone: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="tel" id="tel"
                            value="{{isset($cras->telefone) ? $cras->telefone : old('tel') }}"
                            placeholder="(00) 0 0000-0000" />
                    </div>
                </div>

                {{--- Formulario Telefone2 Cras ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Telefone:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="tel2" id="tel2"
                            value="{{isset($cras->telefone2) ? $cras->telefone2 : old('tel2') }}"
                            placeholder="(00) 0 0000-0000" />
                    </div>
                </div>
            </div><!-- Form-row -->
            
            {{--- Formulario E-mail Cras ---}}

            <div class="form-group">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{isset($cras->email) ? $cras->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div>
        </div>
  
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancelar</a>
        </div>
    </div><!-- Card -->
</form>



@endsection

@section('javascript')

<!-- Laravel Javascript Validation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
{!! JsValidator::formRequest('App\Http\Requests\AlunoRequest','#formAluno' ) !!}

<script type="text/javascript">

    turmaValidation();
    submit();

    function turmaValidation() {
        $('#turma_id').change(function() {
            var count = "";
            var vagas = "";
            $('#turma_id option:selected').each(function() {
                count += $(this).attr('data-count');
                vagas += $(this).attr('data-vagas');
            });

            if (count == vagas) {
                $('.error-help-block').remove()
                $('#turma_id').css('border-color', '#dc3545');
                $('.erro').append('<span class="error-help-block">Turma cheia</span>');
            } else {
                $('#turma_id').css('border-color', '#28a745');
                $('.error-help-block').remove();
            }
        });
    };

    function submit(){
        $('#formAluno').submit(function() {
            if ($('#turma_id').css('border-color') == 'rgb(220, 53, 69)') {
                $('.error-help-block').remove();
                $('.erro').append('<span class="error-help-block">Turma cheia</span>');
                return false;
            }
        });
    };

</script>

@endsection
