<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Endereco;
use App\Turma;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $regras = [
            'email' => 'unique:alunos',
        ];

        $mensagens = [
            'email.unique' => 'Email já está cadastrado',
        ];

        $request->validate($regras, $mensagens);
        
        $aluno = new Aluno();
        $aluno->nome = $request->input('nome');
        $aluno->sobrenome = $request->input('sobrenome');
        $aluno->sexo = $request->input('sexo');
        $aluno->data_Nascimento = $request->input('data_Nascimento');
        $aluno->tel = $request->input('tel');
        $aluno->tel2 = $request->input('tel2');
        $aluno->email = $request->input('email');
        $aluno->turma_id = $request->input('turma_id');
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
        
        
        return redirect()->route('listaAluno')->with('success','Aluno cadastrado com sucesso,');
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
    public function update(Request $request, $id)
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
            'turma_id'=>$request->turma_id,
        ]);

        $endereco = Endereco::find($id);
        $endereco->update([
            'cep'=>$request->cep,
            'cidade'=>$request->cidade,
            'bairro'=>$request->bairro,
            'rua'=>$request->rua,
            'numero'=>$request->numero,
            'complemento'=>$request->complemento,
        ]);

        return redirect(route('listaAluno'))->with('success','Aluno editado com sucesso.');
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
        return redirect(route('listaAluno'))->with('success','Aluno deletado com sucesso.');
    }

    public function pdf()
    {
        $collection = Aluno::get();
        $pdf = \PDF::loadView('pdf', compact('collection'));
        return $pdf->stream('exemplo.pdf');
    }
}
