<?php 

session_start();
if($_SERVER['QUERY_STRING'] == 'noname'){
session_unset();
}


$login = $_SESSION['login'] ?? 'gość';

?>

<head>
<title>Pomidorino Pizza. </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style type="text/css">
    .brand {background: #cbb09c !important;
    }
    .brand-text{ color:#cbb09c !important;}
    form{max-width: 460px;
    margin: 20px auto;
    padding: 20px;}
    p{color: #333;}
    </style>
   
</head>
<body class="grey lighten-4">
<nav class="white z-depth-0">
<div class ="container"><a href="index.php" class="brand-logo brand-text">Pomidorino Pizza </a></div>
<ul id="nav-mobile" class="right hide-on-small-and-down">
<li class="grey-text">Witaj <?php echo htmlspecialchars($login); ?>
</li>
<li><a href="add.php" class="btn brand z-depth-0">Dodaj pizze</a></li>
<li><a href="login.php" class="btn brand z-depth-0">Zaloguj</a></li>
</ul></nav>


