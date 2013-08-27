<?php

//On appelle la fonction getAll()
$allclients = Clients::getAll();
//On transmets les variables à Smarty
$smarty->assign('allclients', $allclients);

?>