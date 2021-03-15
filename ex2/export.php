<?php
class Voiture {
    public $_marque;
    public $_modele;
    public $_type;
    public function __construct($marque, $modele, $type) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_type = $type;
    }
    static public function export($voitures) {
        switch($_GET['format']) {
            case 'html':
                foreach($voitures as $voiture) {
                    echo($voiture->_marque."  ".$voiture->_modele."  ".$voiture->_type."<br>");
                }
                break;
            case 'json':
                header("Content-type: application/json");
                    echo json_encode($voitures);
                break;
            case 'csv':
                header("Content-type: text/csv;");
                header("Content-Disposition: attachment; filename=voiture.csv");
                foreach($voitures as $voiture) {
                    echo $voiture->_marque.";".$voiture->_modele.";".$voiture->_type.";\n";
                }
                break;
            default:
                break;
        }
    }
}
$tab = array(new voiture("Audi", "A1", "Citadine"), new voiture("Volkswagen", "Passat", "Berline"), new voiture("Volkswagen", "Golf", "Compact"), new voiture("Mazda", "CX-5", "SUV"));
?>
<?=Voiture::export($tab)?>