<?php
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

$answers = [];
foreach ($questions as $key => $question) {
    echo ($key + 1) . ". " . $question['question'] . "\n";
    $answers[] = trim(readline("Answer: "));
}

function evaluateQuiz(array $questions, array $answers) {
    $score = 0;
    foreach ($answers as $key => $answer) {
        if (strtolower($answer) == strtolower($questions[$key]['correct'])) {
            $score+=1;
        }
    }
    return $score;
}

$score = evaluateQuiz($questions, $answers);
$full_score = count($questions);
$half_score = $full_score / 2;

echo "Your score is $score\n";

if ($score == $full_score) {
    echo "Excellent job!";
} elseif ($score > $half_score) {
    echo "Good effort!";
} else {
    echo "Better luck next time!";
}
