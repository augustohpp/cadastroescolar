<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
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
        $prof = Professor::all();
        return view('viewsProfessores.tabela', compact('prof'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewsProfessores.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prof = new Professor();
        $prof->nome = $request->input('nome');
        $prof->sobrenome = $request->input('sobrenome');
        $prof->sexo = $request->input('sexo');
        $prof->data_Nascimento = $request->input('data_Nascimento');
        $prof->tel = $request->input('tel');
        $prof->tel2 = $request->input('tel2');
        $prof->email = $request->input('email');
        $prof->save();
        
        return redirect()->route('listaProfessor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $prof = Professor::find($id);
        return view('viewsProfessores.infoProfessores', compact('prof'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prof = Professor::find($id);
        return view('viewsProfessores.editProfessores', compact('prof'));
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
        $prof = Professor::where('id',$id);
        $prof->update([
            'nome'=>$request->nome,
            'sobrenome'=>$request->sobrenome,
            'sexo'=>$request->sexo,
            'data_Nascimento'=>$request->data_Nascimento,
            'tel'=>$request->tel,
            'tel2'=>$request->tel2,
            'email'=>$request->email,
        ]);
        return redirect()->route('listaProfessor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Professor::find($id);
        if (isset($id)) {
            $del->delete();
        }
        return redirect()->route('listaProfessor');
    }

    public function pdf()
    {
        $collection = Professor::get();
        $pdf = \PDF::loadView('viewsProfessores.pdf', compact('collection'));
        return $pdf->stream('exemplo.pdf');
    }
}
