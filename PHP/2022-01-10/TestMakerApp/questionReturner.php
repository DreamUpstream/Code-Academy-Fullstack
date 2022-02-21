<?php




require_once 'tagBuilder/builder.php';


$strJsonFileContents = file_get_contents("test-questions-answers.json");

$ponas = json_decode($strJsonFileContents);

$returnQuestions = "";

foreach ($ponas as $key => $value) {
    $questionTag = (new Tag ('div'))->setAttr('class', 'py-2 h5')->getOpen() . (new Tag ('b'))->setText($key)->get() . (new Tag ('div'))->getClose();
    $selectionWrapper = (new Tag ('div'))->setAttr('class', 'ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3')->setAttr('id', 'options')->getOpen();


    foreach ($value as $key1 => $value1) {
        // $returnQuestions .= "|" . trim($value1, "#");
        (new Tag ('label'))->setAttr('class', 'py-2 h5')->getOpen() . (new Tag ('b'))->setText($key)->get() . (new Tag ('div'))->getClose();


    }
    // $returnQuestions .= "@";

    $returnQuestions .= $questionTag . $selectionWrapper;
}

echo $returnQuestions;

if(isset($_POST["answer"])) {
    
}



?>