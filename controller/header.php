
<?php

function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) session_start();

    include_once '../model/connexion_bd.php';
    include_once '../model/utilisateur.php';
    include_once '../model/emprunt.php';
    include_once '../model/categorie.php';
    include_once '../model/livre.php';
    

?>
