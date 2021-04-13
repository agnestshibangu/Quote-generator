<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&family=Lobster&family=Yanone+Kaffeesatz:wght@200;300&display=swap" rel="stylesheet">
    <title>Document</title>

<?php

    $quotes = [

        [
            'text' => "We know what we are, but know not what we may be",
            'author' => "William Shakespeare"
        ],

        [
            'text' => "It's never too late to be what you might have been",
            'author' => "George Eliot"
        ],

        [
            'text' => "No act of kindness, no matter how small, is ever wasted",
            'author' => "Aesop"
        ],

        [
            'text' => "Change your thoughts and you change your world",
            'author' => "Norman Vincent Peale"
        ],

        [
            'text' => "If opportunity doesn't knock, build a door",
            'author' => "Milton Berle"
        ],

        [
            'text' => "Give light and people will find the way",
            'author' => "Ella Baker"
        ],

        [
            'text' => "Out of difficulties grow miracles",
            'author' => "Jean de la Bruyere"
        ],

        [
            'text' => "A champion is someone who getts up when he can't",
            'author' => "Jack Dempsey"
        ],

        [
            'text' => "It's always the simple that produces the marvelous",
            'author' => "Amelia Barr"
        ],

    ];

$quote = $quotes[rand(0, count($quotes) - 1)];

$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

?>

</head>
<body>
    
    <div class="container">
        <h1>Random Quote Generator</h1>

            <blockquote>
                <h2>&ldquo;<?php echo  $quoteText;  ?>&ldquo; </h2>
                <b>- <?php echo  $quoteAuthor; ?></b>
            </blockquote>
   </div>


</body>
</html>