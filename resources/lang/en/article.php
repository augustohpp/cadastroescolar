<?php
return [
// ...

    'unavailable_audits' => 'Nenhuma auditoria disponível',

    'created' => [
        'metadata' => 'Na data :audit_created_at, :user_name [:audit_ip_address] criou o registro via :audit_url',
        'modified' => [
            //Auditoria Alunos
            'nome' => 'O nome foi definido como: <strong>:new</strong>',
            'sobrenome' => 'O sobrenome foi definido como <strong>:new</strong>',
            'sexo' => 'O sexo foi definido como: <strong>:new</strong>',
            'data_Nascimento' => 'A data de nascimento foi definida como <strong>:new</strong>',
            'tel' => 'O telefone foi definido como: <strong>:new</strong>',
            'tel2' => 'O telefone foi definido como: <strong>:new</strong>',
            'email' => 'O email foi definido como: <strong>:new</strong>',
            'turma_id' => 'Turma_id foi definido como: <strong>:new</strong>',
            'id' => 'O ID foi definido como: <strong>:new</strong>',

            //Auditoria Turmas
            'turma' => 'O nome da turma foi definido como: <strong>:new</strong>',
            'nivel' => 'O nível da turma foi definido como: <strong>:new</strong>',
            'ano' => 'O ano da turma foi definido como: <strong>:new</strong>',
            'turno' => 'O turno da turma foi definido como: <strong>:new</strong>',
            'vagas' => 'As vagas da turma foram definidas como: <strong>:new</strong>',
            'professor_id' => 'O ID do professor da turma foi definido como: <strong>:new</strong>',

            //Auditoria Endereços
            'cep' => 'O cep foi definido como: <strong>:new</strong>',
            'cidade' => 'A cidade foi definida como: <strong>:new</strong>',
            'bairro' => 'O bairro foi definido como: <strong>:new</strong>',
            'rua' => 'A rua foi definida como: <strong>:new</strong>',
            'numero' => 'O número foi definido como: <strong>:new</strong>',
            'complemento' => 'O complemento foi definido como: <strong>:new</strong>',
            'aluno_id' => 'O ID do aluno foi definido como: <strong>:new</strong>',
        ],
    ],

    
    'updated' => [
        'metadata' => 'Na data :audit_created_at, :user_name [:audit_ip_address] atualizou o registro via :audit_url',
        'modified' => [
            'nome' => 'O nome foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'sobrenome' => 'O sobrenome foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'sexo' => 'O sexo foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'data_Nascimento' => 'A data de nascimento foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'tel' => 'O primeiro telefone foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'tel2' => 'O segundo telefone foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'email' => 'O email foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'turma_id' => 'Turma_id foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'id' => 'O ID do aluno foi atualizade de <strong>:old</strong> para <strong>:new</strong>',
            
            //Auditoria Turmas
            'turma' => 'O nome da turma foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'nivel' => 'O nível da turma foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'ano' => 'O ano da turma foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'turno' => 'O turno da turma foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'vagas' => 'As vagas da turma foram atualizados de <strong>:old</strong> para <strong>:new</strong>',
            'professor_id' => 'O ID do professor da turma foi atualizado de <strong>:old</strong> para <strong>:new</strong>',

            //Auditoria Endereços
            'cep' => 'O cep foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'cidade' => 'A cidade foi atualizada de <strong>:old</strong> para <strong>:new</strong>',
            'bairro' => 'O bairro foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'rua' => 'A rua foi atualizada de <strong>:old</strong> para <strong>:new</strong>',
            'numero' => 'O número foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'complemento' => 'O complemento foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
            'aluno_id' => 'O ID do aluno foi atualizado de <strong>:old</strong> para <strong>:new</strong>',
        ],
    ],

    'deleted' => [
        'metadata' => 'Na data :audit_created_at, :user_name [:audit_ip_address] atualizou o registro via :audit_url',
        'modified' => [
            'nome' => 'O nome foi deletado :old',
            'sobrenome' => 'O sobrenome foi deletado',
            'sexo' => 'O sexo foi deletado',
            'data_Nascimento' => 'A data de nascimento foi deletado',
            'tel' => 'O primeiro telefone foi deletado',
            'tel2' => 'O segundo telefone foi deletado',
            'email' => 'O email foi deletado',
            'turma_id' => 'Turma_id foi deletado',
            'id' => 'O ID foi deletado',

            //Auditoria Turmas
            'turma' => 'O nome da turma foi deletado',
            'nivel' => 'O nível da turma foi deletado',
            'ano' => 'O ano da turma foi deletado',
            'turno' => 'O turno da turma foi deletado',
            'vagas' => 'As vagas da turma foram deletadas',
            'professor_id' => 'O ID do professor da turma foi deletado',

            //Auditoria Endereços
            'cep' => 'O cep foi deletado',
            'cidade' => 'A cidade foi deletado',
            'bairro' => 'O bairro foi deletado',
            'rua' => 'A rua foi deletada',
            'numero' => 'O número foi deletado',
            'complemento' => 'O complemento foi deletado',
            'aluno_id' => 'O ID do aluno foi deletado',
        ],
    ],
// ...
];
?>