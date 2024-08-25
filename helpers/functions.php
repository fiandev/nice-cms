<?php
function extractPageVariables($string)
{
    // Pola untuk mencocokkan berbagai format string
    $pattern = '/(\{\{ \$\w+\s?(\?\? "(.*?)")? \}\}|\<\?=(?:\s*\$(\w+);?\s*)\?>|\<\?php\s+echo\s+\$(?:\w+);?\s*\?>)/im';
    preg_match_all($pattern, $string, $matches);

    $variables = $matches[0];
    $values = $matches[3];
    $results = [];

    foreach ($variables as $index => $detectedVariable) {
        $name = str_replace(";", "", explode(" ", $detectedVariable)[1]);
        $results[substr($name, 1)] = str_replace(";", "", $values[$index]);
    }

    return $results;
}

function escapeBladeView(string $content): string
{
    $escapeRules = [
        "@" => "#@",
        "{{" => "<%",
        "}}" => "%>",
        "$" => "#",
    ];

    foreach ($escapeRules as $charToEscape => $escapeString) {
        $content = str_replace($charToEscape, $escapeString, $content);
    }

    return $content;
}