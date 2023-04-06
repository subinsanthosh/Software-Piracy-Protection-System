<?php
// Set headers for file download
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="AdobeAfterEffects2023.zip"');
header('Content-Length: ' . filesize('AdobeAfterEffects2023.zip'));

// Read the file and output to browser
readfile('AdobeAfterEffects2023.zip');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/downloadd.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <a href="download.php" class="btn btn-primary">Download ZIP file</a>

</body>
</html>