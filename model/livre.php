<?php 
class livre {
    
    static function getListLivre(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM livre
                             left outer  JOIN categorie on (livre.lvr_cat_id=cat_id)
                             where lvr_sup = 0");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}


?>