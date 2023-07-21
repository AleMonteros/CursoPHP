<?php 

    include_once 'db-peliculas.php';

    class Peliculas extends DB_P{

        private $paginaActual;
        private $totalPaginas;
        private $nResultados;
        private $resultadosPorPagina;
        private $indice;

        private $error = false;

        function __construct($nPorPagina){
            
            parent::__construct();

            $this->resultadosPorPagina = $nPorPagina;
            $this->indice = 0;
            $this->paginaActual = 1;

            $this->calcularPagina();

        }

        function calcularPagina(){
            $query = $this->connect()->query('SELECT COUNT(*) AS total FROM peliculas');
            $this->nResultados = $query->fetch(PDO::FETCH_OBJ)->total;
            $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina;

            IF(isset($_GET['pagina'])){
                if(is_numeric($_GET['pagina'])){
                    if($_GET['pagina'] >= 1 && $_GET['pagina'] <= $this->totalPaginas){

                        $this->paginaActual = $_GET['pagina'];
                        $this->indice = ($this->paginaActual - 1) * ($this->resultadosPorPagina);

                    }else{

                        echo "No existe esa página";
                        $this->error = true;

                    }
                }else{
                    echo "Error al mostrar la pagina";
                }
            }

        }

        function mostrarPeliculas(){

            if($this->error){

                $query = $this->connect()->prepare('SELECT * FROM pelicula LIMIT :pos, :n');
                $query->execute(['pos' => $this->indice, 'n' => $this->resultadosPorPagina]);

                foreach($query as $pelicula){
                    echo "Todo ok";
                    include '../views/view-movies.php';
                }

            }else{

            }

        }

        function mostrarPagina(){

        }

    }

?>