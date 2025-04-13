<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <title>work</title>
</head>
<body>
<?php
$sentence="The body of a book";
echo strtoupper($sentence);
echo strtolower($sentence);
echo strlen($sentence);
echo $sentence[0];
echo $sentence[0]="m";
echo str_replace("book", "college", $sentence);

?>
</body>
</html>