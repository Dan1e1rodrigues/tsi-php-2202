<?php

//Vetores e seus diferentes tipos

//Lembre de fecharcom ";"
$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça',
 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sabado'];

//Muito importante para a depuração do código - echo "<pre>";
//var_dumb($diaSemana);

//Novemente lembre de fechar com ";"

/*
$hoje = date('d/m/y');

echo "hoje é {$diaSemana[$hoje]}";//Interpolação com vetor

*/
//echo cout($aluno)
$aluno = [ 
0 => ['matricula' => 4455, 'nome' => 'Daniel','semestre' => 2],
1 => ['matricula' => 9898, 'nome' => 'Paulo', 'semestre' => 3],
2 => ['matricula' => 7886, 'nome' => 'Felipe', 'semestre' => 1]
];

var_dump($aluno);

//E desta forma desenvolvemos uma tabela em PHP
echo '<table border = "1">
        <tr>
            <td>Matricula</td>
            <td>Nome</td>
            <td>Semestre</td>
        </tr>';

for( $i = 0 ; $i < count($aluno) ; $i++ ){
   echo "   <tr>
                <th>{$aluno[$i]['matricula']}</th>
                <th>{$aluno[$i]['nome']}</th>
                <th>{$aluno[$i]['semestre']}</th>
            </tr>";
}


echo '</table>';

?>