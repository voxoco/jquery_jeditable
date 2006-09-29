<?php      

/* $Id$ */      

/* No hardoced URL's in examples. Just copy the folder to server. */  
$folder = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
$url    = sprintf('http://%s%s', $_SERVER['SERVER_NAME'], $folder);

?>
<html>
<head>
<title>jEditable jQuery in place editor plugin basic usage</title>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="lib/jeditable.js" type="text/javascript"></script>
</head>
<html>
<h1 class="editable" id="header_1">Header 1</h1>
<h2 class="editable" id="header_2">Header 2</h2>
<h3 class="editable" id="header_3">Header 3</h3>
<p class="editable_textarea" id="paragraph_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis</p>
<div class="editable_textarea" id="div_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis</div>

<script type="text/javascript">
// <![CDATA[
$(document).ready(function() {
    $(".editable").editable("<?php print $url ?>echo.php", { 
        indicator : "<img src='img/indicator.gif'>"
    });
    $(".editable_textarea").editable("<?php print $url ?>echo.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type : 'textarea'
    });
});
// ]]>
</script>
</html>
