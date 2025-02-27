<?php
$titel = "Een php html voorbeeld pagina";
$image = "https://th.bing.com/th/id/OIP.so-FKqVWxZ1ZBePxlznXywHaIQ?rs=1&pid=ImgDetMain";
$altText = "Een afbeelding van een voorbeeld";
$auteur = "Ashraf12356";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titel; ?></title>
</head>
<body>
    
    <h1><?php echo $titel; ?></h1>

   
    <img src="<?php echo $image; ?>" alt="<?php echo $altText; ?>" />
    
    <section>
        <h2>Auteur: <?= $auteur; ?></h2>
    </section>

</body>
</html>

