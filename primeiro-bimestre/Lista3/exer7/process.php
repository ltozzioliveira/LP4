<?php 
    if(isset($_POST['names']) && isset($_POST['grades1']) && isset($_POST['grades2'])) {
        $names = $_POST['names'];
        $grades1 = $_POST['grades1'];
        $grades2 = $_POST['grades2'];
        $alunos = [];
        for($i = 0; $i < count($names)-1; $i++) {
            $aluno = array(
                "name" => $names[$i],
                "grade1" => $grades1[$i],
                "grade2" => $grades2[$i],
                "mean" =>  ($grades1[$i] + $grades2[$i])/2
            );
            array_push($alunos, $aluno);
        }
        echo"<h2>Aprovados: </h2>";
        echo"<ul>";
        foreach($alunos as &$alune) {
            $name = $alune['name'];
            $mean = $alune['mean'];
            if($mean >= 6) {
                echo "<li>Nome: $name Média: $mean</li>";
            } else {
                echo "<li>Nome: $name</li>";
            }
        }
        echo"</ul>";
    }
?>