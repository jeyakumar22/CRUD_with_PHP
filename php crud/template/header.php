

<!-- session variable use all page by adding into header because header is in all page -->
<?php 
 session_start();
//can override
//$_SESSION['name']="jk";  we cant change this name by submitting form

if($_SERVER['QUERY_STRING'] == 'noname'){
    //unset($_SESSION['name']);
    session_unset();
  }

  $name = $_SESSION['name'] ?? 'guest';
  $gender=$_COOKIE['gender'] ?? 'unknown';
?>

<head>
	<title>Ninja Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  	form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
    .pizza{
      width: 100px;
      margin: 40px auto -30px;
      display: block;
      position: relative;
      top: -30px;
    }
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="grey-text">Hi <?php echo htmlspecialchars($name); ?></li>
        <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
        <li><a href="addpizza.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>