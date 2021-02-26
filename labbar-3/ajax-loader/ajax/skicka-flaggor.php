<?php
session_start();
if (!isset($_SESSION["index"])) {
    $_SESSION["index"] = 2;
} else {
   $_SESSION["index" += 6;]
}


$allaFlaggor scandir("../flags");

/* echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"]]}\" alt=\"AD\""
echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + 1]}\" alt=\"AD\""
echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + 2]}\" alt=\"AD\""
echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + 3]}\" alt=\"AD\""
echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + 4]}\" alt=\"AD\""
echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + 5]}\" alt=\"AD\"" */

for ($i=0; $i < 6; $i++) { 
    echo "<img src=\".flags/{$allaFlaggor[$_SESSION["index"] + $i]}\" alt=\"\">";
}



?>