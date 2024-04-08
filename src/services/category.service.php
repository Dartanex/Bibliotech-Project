<?php

    require_once('ILibraryElements.php');
    class Categories implements ILibraryElements{
        private $categoryId;
        protected $categoryName;

        private $categories;

        public function __construct($categoriesArray){
            $this->categories = $categoriesArray;
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
                array_push($this->categories, $category);
                echo "<br>";
                echo "Categoria creada exitosamente";
                echo "<br>";
            } catch (\Throwable $th) {
                echo "<br/>";
                echo "Ha ocurrido un error al ingresar la categoría";
            }
        }

        public function updateElement($elementName){

        }

        public function deleteElement($elementName){

        }

        public function getCategories(){
            foreach ($this->categories as $category){
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

