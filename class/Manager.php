<?php
class Manager{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected $_conn;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct($conn){$this->setDb($conn);}    
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// fonctionnalité
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° 
    public function getAdminPassword(string $username, string $pass)
    {
    $res = null;
    // get the admin password for admin identification
        if(!empty($username)){
            $q = $this->_conn->prepare('SELECT password FROM Admin WHERE username = :username');
            $q->execute(['username' => $username]);
            while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
            {
                if (password_verify($pass, $donnees['password'])) {
                   $res = "succes";
                }else{
                    $res = "error";
                }
            }
            if(empty($res)){
                $res = "error";
            }
        }else{
            $res = "error";
        }
    return json_encode($res);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getPageModel()
    {
    $page = null;
    //get the data and create the PAGE model
        $q = $this->_conn->prepare('SELECT * FROM `Page`');
        $q->execute();
        
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
    
          $page = new Page($donnees);
    
        }

    return $page;
    
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getAvisModel()
    {
    $avis = [];
    //get the data and create the AVIS model
        $q = $this->_conn->prepare('SELECT * FROM `Avis`');
        $q->execute();
        
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
    
          $avis[] = new Avis($donnees);
    
        }

    return $avis;
    
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function updateSingleRow(string $table, string $type, string $value, int $rownbr)
    {
    $res = null;
    //get the data and create the page model
        $q = $this->_conn->prepare("UPDATE {$table} SET {$type} = :valuee WHERE id = :id");
        $q->bindValue(':id', $rownbr);
        $q->bindValue(':valuee', $value);
        $q->execute();

    return $res;

    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°       
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setDb(PDO $conn){$this->_conn = $conn;}

// end
}
?>