<?php
    require_once('ILibraryElements.php');
    class Authors implements ILibraryElements{

        private $authorId;
        protected $authorName;
        public $authorNationality;

        public $authorsArray;

        public function __construct($authorsArray){
            $this->authorsArray = $authorsArray;
        }

        public function setAuthor($authorId, $authorName, $authorNationality){
            $this->authorId = $authorId;
            $this->authorName = $authorName;
            $this->authorNationality = $authorNationality;
        }

        public function createElement(){
            try {
                $author = (object) [
                    "authorId" => $this->authorId,
                    "authorName" => $this->authorName,
                    "authorNationality" => $this->authorNationality
                ];
    
                array_push($this->authorsArray, $author);
                echo "<br>";
                echo "Autor creado exitosamente...";
                echo "<br>";
            } catch (\Throwable $th) {
                echo "<br>";
                echo "Ocurrio un error al tratar de crear un nuevo Autor: " . $th;
            }
        }

        public function updateElement($elementName){

        }

        public function deleteElement($elementName){

        }

        public function getAuthors(){
            print_r($this->authorsArray);
        }
    }

    $authors = array(
        (object) [
            "authorId" => 1,
            "authorName" => "JOE ABERCROMBIE",
            "authorNationality" => "Reino Unido"
        ],
        (object) [
            "authorId" => 2,
            "authorName" => "CHRISTINA ROSSETTI",
            "authorNationality" => "REINO UNIDO"
        ],
        (object) [
            "authorId" => 3,
            "authorName" => "JEREMY EICHLER",
            "authorNationality" => "Estados Unidos"
        ],
        
    );

    $autor = new Authors($authors);
    $autor ->setAuthor(4, "Melanie Mitchell", "Estados unidos");
    $autor->createElement();
    $autor->getAuthors();

    $contarAutores = count($autor->authorsArray);
    echo "<br><br>";
    echo "Cantidad de autores en el arreglo: " . $contarAutores;



