<!DOCTYPE html>
<html>
    <head>
        <title>
            MySchool
        </title>
        <LINK REL=StyleSheet HREF='../assets/css/principal.css' TYPE='text/css' MEDIA=screen>
        
        <link rel="icon" type="image/png" href="https://icon-icons.com/icons2/215/PNG/128/baby-boy256_25254.png" />
        <link rel='stylesheet' href='../assets/css/css/font-awesome.min.css'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
	     <!-- Latest compiled and minified CSS -->
	    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

	    <!-- jQuery library -->
	    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

	    <!-- Latest compiled JavaScript -->
	    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script> 
    </head>
    <body>
        <div class="left">
            <?php include_once("partes/menu.php"); ?>
        </div>
        <div class="right">
            <?php include_once($pagina); ?>
        </div>
        <script type='text/javascript' src='../assets/js/principal.js'></script>
    </body>

</html>