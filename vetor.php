<?php

//Vetores

$diaSemana = [  0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 
                3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 
                6 => 'Sábado'];

//Muito importante para depuração do código - var_dump()
//var_dump($diaSemana);

$hoje = date('w');

echo "Hoje é {$diaSemana[$hoje]}<br><br>"; //interpolação com vetor precisa das {}

$aluno = [  0 => [  'matricula' => 634545, 
                    'nome' => 'João',
                    'semestre' => 2],
            1 => [  'matricula' => 8548, 
                    'nome' => 'Paulo',
                    'semestre' => 3],
            2 => [  'matricula' => 65422, 
                    'nome' => 'Maria',
                    'semestre' => 1]];

echo '<table border = "1">
        <tr>
            <td>Matrícula</td>
            <td>Nome</td>
            <td>Semestre</td>
        </tr>';

for( $i = 0 ; $i < count($aluno) ; $i++ ){

    echo "  <tr>
                <td> {$aluno[$i]['matricula']} </td>
                <td> {$aluno[$i]['nome']} </td>
                <td> {$aluno[$i]['semestre']} </td>
            </tr>";
}

foreach( $aluno as $ind => $val ){

        echo "  <tr>
                        <td>{$val['matricula']}</td>
                        <td>{$val['nome']}</td>
                        <td>{$val['semestre']}</td>
                </tr>";
}

echo '</table>';
