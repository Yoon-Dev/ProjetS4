<?php
class ImgWorker{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected   $_destination;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct(string $destination){$this->setDestination($destination);}    
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// fonctionnalité
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function ThrowImgOnServer($img, PDO $conn)
    {
    // supprime l'ancienne img
        $this->DelImgServ($conn);
    // envoyer une image sur le serveur
        if(file_exists($this->destination().$img['name'])){
            return false;
        }else{
            if(substr($img['type'], 0, 5) === 'image'){
                // attention, si un fichier s'appelle img.truck.jpg -> casse tout
                move_uploaded_file($img['tmp_name'],$this->getBddPath($img['name'], 'server'));
                return true;
            }else{
                return false;
            }
        }

    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function DelImgServ(PDO $conn)
    {
    // supprime une image du serveur
        $q = $conn->prepare('SELECT `img1` FROM `Page`');
        $q->execute();

        $lienImgServ = $q->fetch(PDO::FETCH_ASSOC);
        if(unlink('.'.$lienImgServ['img1']) && !empty('.'.$lienImgServ['img1'])){
        // delete the file with unlink
            return true;
        }else{
            return false;
        }

    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getBddPath($img, string $destination)
    {
    $res = null;
    // return the bdd path name for an img
        $extension = explode('.', $img);
    // attention, si un fichier s'appelle img.truck.jpg -> casse tout
        switch ($destination) {
            case 'bdd':
                $res = "./img/".'img1.'.$extension[1];
                break;
            
            case 'server':
                $res = $this->destination().'img1.'.$extension[1];

                break;
        }
    return $res;
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // GETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function destination(){return $this->_destination;} 
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setDestination(string $destination){$this->_destination = $destination;}
// end
}