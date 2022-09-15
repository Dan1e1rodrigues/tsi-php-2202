<?php

//Vetores e seus diferentes tipos

// Lembre de fecharcom ";"
$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça',
 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sabado'];

//Muito importante para a depuração do código - echo "<pre>";
//var_dumb($diaSemana);

//Novemente lembre de fechar com ";"


$date = date('w');
echo "Hoje é {$diaSemana[$date]}<br>";


echo "hoje é {$diaSemana[$hoje]}";//Interpolação com vetor


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
                <td>{$aluno[$i]['matricula']}</td>
                <td>{$aluno[$i]['nome']}</td>
                <td>{$aluno[$i]['semestre']}</td>
            </tr>";
}

foreach( $aluno as $ind => $val ) {

    echo "  <tr>
                <td>{$val['matricula']}</td>
                <td>{$val['nome']}</td>
                <td>{$val[semestre]}</td>
            </tr>";
}

echo '</table>';

?>