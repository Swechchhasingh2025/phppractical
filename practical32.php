<?php
$arr=["Aman"=>85,"Riya"=>90,"Sohan"=>70,"Meena"=>95];
$students["Sohan"]=60;
echo "updated students marks:<br>";
foreach($students as $name => $marks){
    echo "$name = $marks <br>";

}
?>