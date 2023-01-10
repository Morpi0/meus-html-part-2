<?php

echo "<link rel='stylesheet' href='Stylephp.css'>";

// valores e atribuições

$usuario = '';

$idade_user= '';

$nota = 0;


$usuario = $_REQUEST['Text_name'];

$idade_user = $_REQUEST['Number_idade'];

// nome e idade

echo "Nome: " . $usuario . "<br>";


echo "Idade: " . $idade_user . " anos de idade <br>";


///////
// atribuição


$opt1 = $_POST["Questao1"];

$opt2 = $_POST["Questao2"];

$opt3 = $_POST["Questao3"];

$opt4 = $_POST["Questao4"];


if(!isset($opt1) or !isset($opt2) or !isset($opt3) or !isset($opt4)) {

    echo "<h4>Nenhuma ou algumas opções não foram escolhidas, volte e escolha disgraça <h4><br><br>";

} else { 
    
    echo "Resultados: <br><br>"; 
}


// Questionario com sistema de acerto e erros

echo "<p>Questão 1: <p><br>";

if ($opt1 == "opt2") {
    echo "<p>Correta meu nobre<p><br><br>";
    $nota = $nota + 1;
} 
if ($opt1 == "opt1"){
    echo "Errado (Darnramramram RAAAAAAAAAAAAAM!!!) <br><br>";
}

echo "Questão 2: <br>";

if ($opt2 == "opt1") {
    echo "Certa Resposta *começa tocar um phonk brabo* <br><br>";
    $nota = $nota + 1;
}
if ($opt2 == "opt2") {
    echo "Hitman is cringe <br><br>";
    $nota = $nota + 0;
}


echo "Questão 3: <br>";

if ($opt3 == "opt1") {
    echo "Correta <br><br>";
    $nota = $nota + 1;
    
} 
if ($opt3 == "opt2"){
    echo "ERRADO, nimguem vence nosso salvador <br><br>";
    $nota = $nota + 0;
}

echo "Questão 4: <br>";

if ($opt4 == "opt2") {
    echo "Correta (Brabo) <br><br>";
    $nota = $nota + 1;
}
if ($opt4 == "opt1") {
    echo "Damn Daniel Am Am Am am am aam<br>";
    $nota = $nota + 0;
}

// Soma dos pontos e seu resultado final

echo "Sua Pontuação é de: " . $nota . " de 4 <br><br>";

if ($nota == 4) {
    echo "Parabens voce e chad: <br><br>";
    echo "<img src='https://i.redd.it/3ss06qkaqts71.png' width='384' height='387'>";
} else {
    echo "lamento, mas voce sofre betinagem :( <br><br>";
    echo "Você: <br>";
    echo "<img src='https://i.pinimg.com/236x/10/67/29/1067297eead5bdb13f0a5195d4193e5d.jpg' width='384' height='387'>";

}



?>