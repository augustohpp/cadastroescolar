@foreach ($alunos as $aluno)
    <h3>{{$aluno->nome}}</h3>
    <p>{{$aluno->turma->turma}}</p>
@endforeach
oal

{{-- {{$alunos->nome}} --}}