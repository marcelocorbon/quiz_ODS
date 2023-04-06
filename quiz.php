<?php   
    require 'questions.php';
    // Verificação das respostas e cálculo da pontuação
    $score = 0;
    
    foreach ($questions as $question_num => $question) {
        $correct_answer = $question["correct_answer"];
        if ($correct_answer == $_POST['question'.$question_num]) {
            $score += 1;
        }
    }
    
    // Exibição do conselho com base na pontuação
    if ($score < 5) {
        $advice = "Eita mona... A comunidade ta beeeeem sad com voce :(, melhore <3";
    } elseif ($score >= 5 && $score < 8) {
        $advice = "Hmm, ok, as vezes você não faz parte da comunidade, mas até que a senhora foi beemm";
    } else {
        $advice = "Uhuuull viaaaadoo, arrasou gay! Muito bom saber que existem pessoas que sabem tudo sobre nossa comunidade!";
    }
    
    // Exibição do resultado e do conselho
    echo "<h2>Resultado:</h2>";
    echo "<p>Você acertou ".$score." de 10 perguntas.</p>";
    echo "<h2>Conselho:</h2>";
    echo "<p>".$advice."</p>";
?>