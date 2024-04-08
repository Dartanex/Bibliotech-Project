<?php

    require_once('ILibraryElements.php');
    require_once('author.service.php');
    require_once('category.service.php');

    trait ExtendCategory{
        protected $categoryName;


    }
   class Books extends Authors implements ILibraryElements{

        private $bookId;
        public $bookTitle;
        public $bookSubTitle;
        public $authorName;
        public $publicationYear;
        public $bookPublisherName;
        public $isbn;
        public $totalBookPages;
        public $category;
        public $numberCopies;
        public $copiesBorrowed;
        public $copiesAvailable;

        private $booksArray;

        public function __construct($booksArray){
            $this->booksArray = $booksArray;
        }

        public function setBook($bookId, $bookTitle, $bookSubTitle, $authorName, $publicationYear, $bookPublisherName, $isbn, $totalBookPages, $category, $numberCopies, $copiesBorrowed, $copiesAvailable){
            $this->bookId = $bookId;
            $this->bookTitle = $bookTitle;
            $this->bookSubTitle = $bookSubTitle;
            $this->authorName = $authorName;
            $this->publicationYear = $publicationYear;
            $this->bookPublisherName = $bookPublisherName;
            $this->isbn = $isbn;
            $this->totalBookPages = $totalBookPages;
            $this->category = $category;
            $this->numberCopies = $numberCopies;
            $this->copiesBorrowed = $copiesBorrowed;
            $this->copiesAvailable = $copiesAvailable;
        }

        public function createElement(){
            
            $book = (object) [
                "bookId" => $this->bookId,
                "bookTitle" => $this->bookTitle,
                "bookSubTitle" => $this->bookSubTitle,
                "authorName" => $this->authorName,
                "publicationYear" => $this->publicationYear,
                "bookPublisherName" => $this->bookPublisherName,
                "isbn" => $this->isbn,
                "totalBookPages" => $this->totalBookPages,
                "category" => $this->category,
                "numberCopies" => $this->numberCopies,
                "copiesBorrowed" => $this->copiesBorrowed,
                "copiesAvailable" => $this->copiesAvailable
            ];

            array_push($this->booksArray, $book );
        }

        public function updateElement($elementName, $updatedInformation){
            foreach ($this->booksArray as $book){
                if($book->bookTitle == $elementName){
                    $book = $updatedInformation;
                }
            }
        }

        public function deleteElement($elementName){
            foreach ($this->booksArray as $key => $book) {
                if($book->bookTitle == $elementName){
                    // Remove the autor from the array
                    unset($this->booksArray[$key]);
                    return true;
                }
            }
            return false;
        }

        public function searchBook(){

        }

        public function getBooks(){
            foreach ($this->booksArray as $book){
                print_r($book);
            }
        }
   }

   $books = array(
    (object) [
        "bookId" => 1,
        "bookTitle" => "LA VOZ dE lAS ESPADAS",
        "bookSubTitle" => "",
        "authorName" => "JOE ABERCROMBIE",
        "publicationYear" => 2024,
        "bookPublisherName" => "ALIANZA EDITORIAL, S.A.",
        "isbn" => "978-84-1148-631-6",
        "totalBookPages" => 736,
        "category" => "FICCION",
        "numberCopies" => 3,
        "copiesBorrowed" => 0,
        "copiesAvailable" => 3
    ],
    (object) [
        "bookId" => 2,
        "bookTitle" => "EL MERCADO dE lOS DUENDES",
        "bookSubTitle" => "",
        "authorName" => "CHRISTINA ROSSETTI",
        "publicationYear" => 2024,
        "bookPublisherName" => "AVENTURA",
        "isbn" => "978-84-19223-04-3",
        "totalBookPages" => 68,
        "category" => "POESIA",
        "numberCopies" => 2,
        "copiesBorrowed" => 1,
        "copiesAvailable" => 1
    ],
    (object) [
        "bookId" => 3,
        "bookTitle" => "EL ECO DEL TIEMPO",
        "bookSubTitle" => "LA SEGUNDA GUERRA MUNDIAL, EL HOLOCAUSTO Y LA MUSICA DE LA MEMORIA",
        "authorName" => "JEREMY EICHLER",
        "publicationYear" => 2024,
        "bookPublisherName" => "EDICIONES PAIDÓS IBÉRICA, S.A.",
        "isbn" => "978-84-493-4223-3",
        "totalBookPages" => 424,
        "category" => "ARTE",
        "numberCopies" => 5,
        "copiesBorrowed" => 3,
        "copiesAvailable" => 2
    ],
    (object) [
        "bookId" => 4,
        "bookTitle" => "INTELIGENCIA ARTIFICIAL",
        "bookSubTitle" => "GUÍA PARA SERES PENSANTES",
        "authorName" => "MELANIE MITCHELL",
        "publicationYear" => 2024,
        "bookPublisherName" => "CAPITAN SWING LIBROS",
        "isbn" => "978-84-127798-7-5",
        "totalBookPages" => 368,
        "category" => "CIENCIAS",
        "numberCopies" => 4,
        "copiesBorrowed" => 0,
        "copiesAvailable" => 4
    ],
);

$book = new Books($books);
$book->getBooks();
