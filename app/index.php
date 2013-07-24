<?php
/**
 * @file app/index.php
 * (c) Heritiana Ravaka RAMASIMPANIRY <rvkone@gmail.com>
 *
 * Ce fichier fait partie du framework proc-mvc
 * 
 */

/**
 * @var DEBUG_MODE
 * @brief définit si le mode de débogage est active ou non.
 * Le mode de débogage affiche au navigateur de informations
 * telles que les fichiers chargés, les fonctions appelées ainsi que
 * le contenu des variables.
 */
define('DEBUG_MODE', false);

/**
 * @var DS
 * @brief définit le symbole de séparateur de dossier: sous WINDOWS c'est '\',
 * sous linux et Mac OS c'est le symbole '/'.
 */
define('DS', '/');

/**
 * @var DIRECT_ACCESS
 * @ définit si l'accès direct au fichier est autorisé
 */
define('DIRECT_ACCESS', 'true');

/**
 * @var APP_PATH
 * @brief définit le dossier application.
 */
define('APP_PATH', dirname(__FILE__).DS);

/**
 * @var FRAMEWORK_PATH
 * @brief définit le dossier framework. (à modifier selon l'emplacement du dossier framework
 * par rapport à index.php).
 */
define('FRAMEWORK_PATH', '..'.DS.'framework'.DS);

if(defined(DIRECT_ACCESS))
    include(FRAMEWORK_PATH.'init.php');
else
    die('no direct access!');