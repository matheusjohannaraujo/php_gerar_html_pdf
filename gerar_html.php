<?php

$linhas = "";

for ($i = 1; $i <= 3000; $i++) { 
    $linhas .= "        <tr>
            <td>" . $i . "</td>
            <td>A: " . uniqid() . "</td>
            <td>B: " . uniqid() . "</td>
            <td>C: " . uniqid() . "</td>
            <td>D: " . uniqid() . "</td>
            <td>E: " . uniqid() . "</td>
            <td>F: " . uniqid() . "</td>
            <td>G: " . uniqid() . "</td>
            <td>H: " . uniqid() . "</td>
            <td>I: " . uniqid() . "</td>
        </tr>\r\n";
}


$html = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>
    <table border='1'>
        <tr>
            <td>#</td>
            <td>Coluna A</td>
            <td>Coluna B</td>
            <td>Coluna C</td>
            <td>Coluna D</td>
            <td>Coluna E</td>
            <td>Coluna F</td>
            <td>Coluna G</td>
            <td>Coluna H</td>
            <td>Coluna I</td>
        </tr>
" . $linhas . "
    </table>
</body>
</html>
";

file_put_contents("arquivo.html", $html);
