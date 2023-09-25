<?php

function manipulateString($text) {

    $lowercaseText = strtolower($text);

    $textWithRed = str_replace("brown", "red", $lowercaseText);

    echo $textWithRed;
}

$text = "The quick brown fox jumps over the lazy dog.";
manipulateString($text);
