<?php


function replace_in_file($newFile, $search, $replace) {
    $templateFilePath = "template.txt";
    $content = file_get_contents($templateFilePath);
    $newContent = str_replace($search, $replace, $content);
    // Create a new file with the replaced content
    file_put_contents($newFile, $newContent);
}

$search = ["XTitleX", "XSubjectX"];
$replace = ["IMA", "REALYCOOLDUDE"];

replace_in_file("test.txt", "test2.txt", $search, $replace);

?> 