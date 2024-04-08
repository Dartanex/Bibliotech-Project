<?php
    require_once('ILibraryElements.php');
    class Authors implements ILibraryElements{

        private $authorId;
        protected $authorName;
        protected $authorNationality;

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

        function updateElement($elementName, $updatedInformation){
            foreach ($this->authorsArray as $author){
                if($author->authorName == $elementName){
                    $author = $updatedInformation;
                    echo "<br>";
                    echo "Información del autor modificada exitosamente...";
                    break;
                }
            }
        }

        public function deleteElement($elementName){
            foreach ($this->authorsArray as $key => $author) {
                if($author->authorName == $elementName){
                    // Remove the autor from the array
                    unset($this->authorsArray[$key]);
                    return true;
                }
            }
            return false;
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
    echo "<br><br>";

    $authorName = "CHRISTINA ROSSETTI";
    if($autor->deleteElement($authorName)){
        echo "<br><br>";
        echo "El autor: " . $authorName . " fue eliminado de la lista de autores satisfactoriamente";
        echo "<br><br>";
    } else {
        echo "<br><br>";
        echo "El autor : " . $authorName . " No se encuentra en el lista de autores";
        echo "<br><br>";
    }

    $autor->getAuthors();



