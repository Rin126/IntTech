<?php

/*$votesFile = 'votes.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['vote'])) {
    $vote = $_POST['vote'];


    if (file_exists($votesFile)) {
        $results = json_decode(file_get_contents($votesFile), true);
    } else {
        $results = [];
    }

    if (isset($results[$vote])) {
        $results[$vote]++;
    } else {
        $results[$vote] = 1;
    }

    file_put_contents($votesFile, json_encode($results));
}

$results = file_exists($votesFile) ? json_decode(file_get_contents($votesFile), true) : [];*/
function mergeUniqueArrays($array1, $array2){
    $mergedArray = [];
    $uniqueArray = [];
    foreach($array1 as $value){
        $mergedArray[] = $value;
    }
    foreach($array2 as $value){
        $mergedArray[] = $value;
    }
    foreach($mergedArray as $value){
        $count = 0;
    foreach($mergedArray as $innerValue){
        if ($value == $innerValue){
            $count++;
        }
    }
    if($count == 1) {
        $uniqueArray[] = $value;
    }
}
    return $uniqueArray;
}
    $array1 = [1, 2, 3, 4, 10];
    $array2 = [3, 4, 5, 6, 10, 11];
    $result = mergeUniqueArrays($array1, $array2);
    print_r($result);

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результати голосування</title>
</head>
<body bgcolor="#FFE4C4">
    <h1>Результати голосування</h1>
    <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $option => $count): ?>
                <li><?= htmlspecialchars($option) ?>: <?= $count ?> голосів</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Голосів поки немає.</p>
    <?php endif; ?>
    <a href="vote_form.php">Повернутися до голосування</a>
</body>
</html>
