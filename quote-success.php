<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Antean Studios Quote Success</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.4/css/bulma.css">
</head>

<body>
<div class="container box">

    <div class="content">
        <h1 class="title is-centered">Antean Studios Printing Quote Form</h1>
    </div>

    <?php
        echo "<h1>Form submitted successfully!</h1>";
        echo "<p>Your total price is: $" . $_GET["total"] . "</p>";
    ?>

</div> <!--End of container -->

</body>

</html>
