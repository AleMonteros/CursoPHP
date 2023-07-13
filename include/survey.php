<?php 

    include_once 'db.php';

    class Survey extends DB{
        
        private $totalVotes;
        private $optionSelected;

        public function setOptionSelected($option){
            $this->optionSelected = $option;
        }

        public function getOptionSelected(){
            return $this->optionSelected;
        }

        public function vote(){
            $query = $this->connect()->prepare('UPDATE lenguajes SET Votos = Votos + 1 WHERE Opcion = :Opcion');
            $query->execute(['Opcion' => $this->optionSelected]);
        }

        public function showResults(){
            return $this->connect()->query('SELECT * FROM lenguajes');
        }

        public function getTotalVotes(){
            $query = $this->connect()->query('SELECT SUM(Votos) AS Votos_Totales FROM lenguajes');
            $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->Votos_Totales;
            return $this->totalVotes;
        }

        public function getPercentageVotes($votes){
            return round(($votes / $this->totalVotes) * 100, 0);
        }

    }

?>