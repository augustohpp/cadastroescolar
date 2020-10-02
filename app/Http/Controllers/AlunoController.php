<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Alunoturma;
use App\Endereco;
use App\Http\Requests\CreateAlunoRequest;
use App\Turma;
// use Dotenv\Validator;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;
use Proengsoft\JsValidation\JsValidatorFactory;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('viewsAlunos.tabela', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turma::all();
        return view('viewsAlunos.form', compact('turmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAlunoRequest $request)
    {
        $aluno = new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->sobrenome = $request->input('sobrenome');
        $aluno->sexo = $request->input('sexo');
        $aluno->data_Nascimento = $request->input('data_Nascimento');
        $aluno->tel = $request->input('tel');
        $aluno->tel2 = $request->input('tel2');
        $aluno->email = $request->input('email');
        
        $aluno->save();
        $idAluno = $aluno->id;
        
        $endereco = new Endereco();
        $endereco->cep = $request->input('cep');
        $endereco->cidade = $request->input('cidade');
        $endereco->bairro = $request->input('bairro');
        $endereco->rua = $request->input('rua');
        $endereco->numero = $request->input('numero');
        $endereco->complemento = $request->input('complemento');
        $endereco->aluno_id = $idAluno;
        $endereco->save();
        
        
        $alunoTurma = new Alunoturma();
        $alunoTurma->turma_id = $request->input('turma_id');
        $alunoTurma->aluno_id = $idAluno; 
        $alunoTurma->save();

        return redirect()->route('listaAluno');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alunos = Aluno::find($id);
        $turma = Alunoturma::where('aluno_id',$id);
        
        return view('viewsAlunos.infoAlunos', compact('alunos', 'turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turmas = Turma::all();
        $alunos = Aluno::find($id);
        if (isset($id)) {
            return view('viewsAlunos.editAlunos', compact('alunos','turmas'));
        }
        return redirect(route('listaAluno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAlunoRequest $request, $id)
    {
        $aluno = Aluno::find($id);
        $aluno->update([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'sexo'=>$request->sexo,
            'data_Nascimento'=>$request->data_Nascimento,
            'tel'=>$request->tel,
            'tel2'=>$request->tel2,
            'email'=>$request->email,
        ]);

        $endereco = Endereco::where('aluno_id', $id);
        $endereco->update([
            'cep'=>$request->cep,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
        ]);

        $turma = Alunoturma::where('aluno_id', $id);
        $turma->update([
            'turma_id'=>$request->turma_id,
        ]);

        return redirect(route('listaAluno'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Aluno::find($id);
        $del2 = Endereco::where('aluno_id', $id);
        if (isset($id)) {
            $del2->delete();
            $del->delete();
        }
        return redirect(route('listaAluno'));
    }
}
