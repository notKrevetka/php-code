<?php
function getQuestions()
{
    $filename = 'C:/questions.json';
    $f = fopen($filename, 'r+');

    $contents = fread($f, filesize($filename));
    fclose($f);
    return json_decode($contents, true);
}

function getQuestion($id){
    foreach (getQuestions() as $value){
        if ($value['id'] == $id){
            return $value;
        }
    }
}

function getQuestionText($id){
   
            return getQuestion($id)['question'];
        
}

function checkQuestion($ID, $ans){
   return getQuestion($ID)['answer'] == $ans;
}