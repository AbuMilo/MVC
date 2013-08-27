<?php

//Ici tu définis les chemins de tes dossiers

if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();

// Racine du site
define('_PATH_', $_SERVER['DOCUMENT_ROOT'].'/MVC/');

/* Dossier CORE 
Tu y mets tes classes/fonctions */
define('_CORE_', _PATH_ . 'core/');

/* Controleurs
ton code php, généralement tu fais juste des appels de tes CORE pour les Load dasn tes TPL tpl/pages */
define('_CTRL_', _PATH_ . 'controllers/');

/* 
Config
Fichier de configuration du site 
- Bdd
- Load smarty */
define('_CONFIG_', _PATH_ . 'config/');

// Dossier des TPL
define('_TPL_', _PATH_ . 'tpl/');

/* Dossier des logs
Tu peux faire un rooting des logs afin d'avoir un dossier ou tout tes logs y seront */ 
define('_LOGS_', _PATH_ . 'logs/');

?>