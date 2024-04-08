<?php

    require_once('ILibraryElements.php');
    class Categories implements ILibraryElements{
        private $categoryId;
        protected $categoryName;

        private $categoriesArray;

        public function __construct($categoriesArray){
            $this->categoriesArray= $categoriesArray;
        }

        public function setCategory($categoryId, $CategoryName){
            $this->categoryId = $categoryId;
            $this->categoryName = $CategoryName;
        }

        public function createElement(){
            try {
                $category = (object) [
                    "categoryId" => $this->categoryId,
                    "categoryName" => $this->categoryName
                ];
                array_push($this->categoriesArray, $category);
                echo "<br>";
                echo "Categoria creada exitosamente";
                echo "<br>";
            } catch (\Throwable $th) {
                echo "<br/>";
                echo "Ha ocurrido un error al ingresar la categoría";
            }
        }

        public function updateElement($elementName, $updatedInformation){
            foreach ($this->categoriesArray as $category){
                if($category->categoryName == $elementName){
                    $category = $updatedInformation;
                }
            }
        }

        public function deleteElement($elementName){
            foreach ($this->categoriesArray as $key => $category) {
                if($category->categoryName == $elementName){
                    // Remove the autor from the array
                    unset($this->categoriesArray[$key]);
                    return true;
                }
            }
            return false;
        }

        public function getCategories(){
            foreach ($this->categoriesArray as $category){
                echo "<br>";
                echo "Id de la categoria: " . $category->categoryId . ", Categoría: " . $category->categoryName;
            }
        }
    }

    $categories = array(
        (object) [
            "categoryId" => 1,
            "categoryName" => "FICCION"
        ],
        (object) [
            "categoryId" => 2,
            "categoryName" => "POESIA"
        ],
        (object) [
            "categoryId" => 3,
            "categoryName" => "ARTE"
        ],
        (object) [
            "categoryId" => 4,
            "categoryName" => "CIENCIAS"
        ],
    );

    $category = new Categories($categories);
    $category->setCategory(5, "HUMANIDADES");
    $category->createElement();
    $category->getCategories();

    echo "<br>";

