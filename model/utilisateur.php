<?php 
class utilisateur{
    
    static function checkConnexion($login, $pass){
        global $pdo;
        $stmt = $pdo->query("
        select count(*) as nbr from utilisateur where usr_login = '$login' and usr_psw ='$pass' and usr_sup = '0'
        ");
        
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($res[0]['nbr'] == 1){
            return true;
        }
        return false;
    }
    
    static function getListUtilisateurs(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM utilisateur
                             where usr_sup = 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
    static function ajouterUtilisateurs($nom,$prenom,$login,$pass){
        global $pdo;
        //vérifier avant insertion
        
        //insertion
        $stmt = $pdo->query("INSERT INTO utilisateur (usr_id, usr_nom, usr_prenom, usr_login, usr_psw, usr_type, usr_sup) VALUES (NULL, '$nom', '$prenom', '$login', '$pass', '0', '0');");
    }
    
    
    static function supprimerUtilisateur($id){
        global $pdo;
    //vérifier avant insertion
    
    //insertion
    $stmt = $pdo->query("UPDATE utilisateur SET usr_sup = '1' WHERE utilisateur.usr_id = '$id';");
}
}
?>