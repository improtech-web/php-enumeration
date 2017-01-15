

<?php

$enum = array(
    $_server = "S_SERVER" => $_SERVER,
    $_request = "S_REQUEST" => $_REQUEST,
    $_env = "S_ENV" => $_ENV,
    $_session = "S_SESSION" => $_SESSION,
	$_cookie = "S_COOKIE" => $_COOKIE,
	$_files = "S_FILES" => $_FILES,
	$_globals = "SGLOBALS" => $GLOBALS
);
    ?>
<!DOCTYPE html>
<html>
    <meta charset="UTF-8" />
    <head>
        <title>Enumeration!</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <style>
            body {
            text-align:center;
            font-family: Verdana;
            }
            table {
            border: solid 1px gray;
            margin:auto;
            width:900px;
            }
            table td,tr {
            border:solid 1px gray;
            }
            h3 {
            color:blue;
            }
            .uppercase {
            text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <h1>Enumeration!</h1>
        <hr>
        <!--  PHP SERVER ENUMERATION  -->
        <h3><em>PHP Server Enumeration</em></h3>
        <p>This is a way to enumerate server data under is done the request by the victim</p>
        <?php //echo "<pre>"; print_r($enum); echo "</pre>"?>
        <?php foreach ($enum as $global_var_name => $global_var_content) { ?>
        <h4><?php echo $global_var_name ?></h4>
        <table>
        	<?php foreach ($global_var_content as $sub_name => $sub_content) { ?>
        	<tr>
        		<td><?php echo $sub_name ?></td>
        		<td><?php echo $sub_content?></td>
        		
        	</tr>
        	<?php } ?>
        </table>
        <?php } ?>
      
        <!-- ./ PHP SERVER ENUMERATION -->
        <hr>
        <!-- JAVASCRIPT CLIENT ENUMERATION -->
        <h3><em>Javascript Client Enumeration</em></h3>
        <script>
            $(document).ready(function() {
            	//
            	for ( x = 0; x <= 10; x++) {
	            	var browser = document.cookie;
	            	$('#nav').each(function() {
		            	$(this).append("<tr><td>"+ browser + "</td></tr>");
	            	});
	            	
            	}
                    
            	
            });
        </script>
		<table id="nav">
			
		</table>
    </body>
</html>

