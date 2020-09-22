                        {{--- CADASTRO PROFESSORES ---}}

@extends('cadastro')
@section('form')
<form action="/professores" method="POST" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Novo Cadastro de Professor</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

                {{--- Formulario Nome ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome" class="control-label">Nome: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome"
                            value="{{ isset($cras->nome) ? $cras->nome : old('nome') }}">
                    </div>
                </div>

                {{--- Formulário Sobrenome ---}}

                <div class="form-group col-md-6">
                    <label for="sobrenome" class="control-label">Sobrenome: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"
                            value="">
                    </div>
                </div>

                {{--- Formulário Sexo ---}}

                <div class="form-group col-md-6">
                    <label for="sexo" class="control-label">Sexo: *</label>
                    <div class="input-group">
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="" selected disabled>Selecione um sexo</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </div>

                {{--- Formulário Data Nascimento ---}}

                <div class="form-group col-md-6">
                    <label for="data_Nascimento" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="data_Nascimento" name="data_Nascimento" placeholder="dd/mm/yyyy"
                            value="">
                    </div>
                </div>
            </div>
            <hr />

            {{--- Formulario Telefone Cras ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Telefone: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="tel" id="tel"
                            value="{{ isset($cras->tel) ? $cras->tel : old('tel') }}"
                            placeholder="(00) 0 0000-0000" />
                    </div>
                </div>

                {{--- Formulario telefone 2 Cras ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Telefone:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="tel2" id="tel2"
                            value="{{ isset($cras->tel2) ? $cras->tel2 : old('tel2') }}"
                            placeholder="(00) 0 0000-0000" />
                    </div>
                </div>
            </div>
            {{--- Formulario E-mail Cras ---}}

            <div class="form-group">
                <label for="email" class="control-label">E-mail: *</label>
                <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email"
                        value="{{ isset($cras->email) ? $cras->email : old('email') }}"
                        placeholder="exemplo@exemplo.com" />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancelar</a>
        </div>
    </div>
</form>
@endsection