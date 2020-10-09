<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Aluno;
use App\Professor;

class TurmaController extends Controller
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
        $class = Turma::all();
        return view('viewsTurmas.tabela', compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professor = Professor::all();
        return view('viewsTurmas.form', compact('professor'));
    }

    /**oxi
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = new Turma;
        $class->turma = $request->input('turma');
        $class->nivel = $request->input('nivel');
        $class->ano = $request->input('ano');
        $class->turno = $request->input('turno');
        $class->vagas = $request->input('vagas');

        $professor = Professor::find($request->input('professor_id'));
        $class->professor()->associate($professor)->save();
                
        return redirect()->route('listaTurma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        return view('viewsTurmas.infoTurmas', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::all();
        $class = Turma::find($id);
        return view('viewsTurmas.editTurmas', compact('class'), compact('professor'));
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
        $class = Turma::find($id);
        $class->update([
            'turma'=>$request->turma,
            'nivel'=>$request->nivel,
            'ano'=>$request->ano,
            'turno'=>$request->turno,
            'vagas'=>$request->vagas,
            'professor'=>$request->professor,
        ]);
        $professor = Professor::find($request->input('professor_id'));
        $class->professor()->associate($professor)->save();
        return redirect()->route('listaTurma');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Turma::find($id);
        $del->delete();

        return redirect()->route('listaTurma');
    }
}
