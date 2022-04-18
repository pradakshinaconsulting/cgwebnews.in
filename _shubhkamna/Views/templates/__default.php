<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/bc5fb07b3b.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
</head>
<body>
    <div id="share"></div>

    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
<script src="<?= site_url("public/theme/pradakshina/js/script.js") ?>"></script>
    <script>
        $("#share").jsSocials({
            shares: ["facebook", "whatsapp", "telegram"]
        });
    </script>
</body>
</html>