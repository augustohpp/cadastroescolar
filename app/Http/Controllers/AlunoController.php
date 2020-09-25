<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Alunoturma;
use App\Endereco;
use App\Turma;
use Illuminate\Routing\Route;

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
    public function store(Request $request)
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

        $cat2 = new Endereco();
        $cat2->cep = $request->input('cep');
        $cat2->cidade = $request->input('cidade');
        $cat2->bairro = $request->input('bairro');
        $cat2->rua = $request->input('rua');
        $cat2->numero = $request->input('numero');
        $cat2->complemento = $request->input('complemento');
        $aluno->endereco()->save($cat2);

        $idAluno = $aluno->id;
        $class = new Alunoturma();
        $class->turma_id = $request->input('turma_id');
        $class->aluno_id = $idAluno; 
        $aluno->turma()->save($class);
       
        

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
        
        return view('viewsAlunos.infoAlunos', compact('alunos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alunos = Aluno::find($id);
        if (isset($id)) {
            return view('viewsAlunos.editAlunos', compact('alunos'));
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
    public function update(Request $request, $id)
    {
        
        $alunos = Aluno::find($id);
        
        $end = $alunos->endereco()
            ->update([
                'cep'=>$request->cep,
                'cidade'=>$request->cidade,
                'bairro'=>$request->bairro,
                'rua'=>$request->rua,
                'numero'=>$request->numero,
                'complemento'=>$request->complemento,
            ])
        ;

        $alunoDetail = Aluno::Where('id',$id)
            ->update([
                'nome'=>$request->nome,
                'sobrenome'=>$request->sobrenome,
                'sexo'=>$request->sexo,
                'data_Nascimento'=>$request->data_Nascimento,
                'tel'=>$request->tel,
                'tel2'=>$request->tel2,
                'email'=>$request->email,
            ])
        ;
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
        $del2 = Endereco::where('end_id', $id);
        if (isset($id)) {
            $del2->delete();
            $del->delete();
        }
        return redirect(route('listaAluno'));
    }
}
