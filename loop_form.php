<?php
isset ($_REQUEST['i']) ? $i=$_REQUEST['i']:$i="";
echo "
     <html>
     <head><title> PHP Form </title></head>
     <body>
     ";

if($i==Null){
    echo "
         <form method=post action="loop_form.php">
         Enter Text:
         <input type=\"text\" id=\"i\" name=\"i\">
         <input type=\"submit\" value=\"Submit\"></p>
         </form>
         ";
}else{
    echo "You entered the text: $i";
}

echo "</body></html>";
?>
