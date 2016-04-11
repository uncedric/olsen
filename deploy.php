<?php

// webhooj
exec("git pull origin master",$output,$return_var);
echo json_encode($output) ;
echo json_encode($return_var) ;
?>
