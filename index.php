<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quiz Comunidade LGBTQUIA+</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="quiz-container">
		<h1>Você sabe o que é a comunidade LGBTQUIA+?</h1>
		<form action="quiz.php" method="post">
            <?php
                require 'questions.php';
                // Loop para exibir cada pergunta e suas respostas
                foreach ($questions as $question_num => $question) {
                    // Exibe a pergunta
                    echo "<h2>{$question['question']}</h2>";

                    // Exibe as opções de resposta
                    echo "<ul>";
                    foreach ($question['answers'] as $answer_num => $answer) {
                        echo "<li><input type='radio' name='question{$question_num}' value='{$answer_num}' required> {$answer}</li>";
                    }
                    echo "</ul>";

                    // Adiciona um separador entre as perguntas
                    echo "<hr>";
                }
            ?>
		<input type="submit" value="Enviar" class="submit-btn">
</div>
</body> 
</html>