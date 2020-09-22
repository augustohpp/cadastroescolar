teste01
 
@foreach ($test as $test)
    <hr>
    {{$test->turma}}
    <hr>
    {{$test->professor}}
    <hr>
    {{$test->professor->nome}}
@endforeach
