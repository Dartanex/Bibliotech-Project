<?php

    class Users implements ILibraryElements{
        private $userId;
        public $fullName;
        public $userEmail;
        private $password;
        public $phoneNumber;
        public $bookTitle;
        public $bookBorrowed;
        public $bookReturned;

        public function createElement(){

        }

        public function updateElement($elementName, $updatedInformation){

        }

        public function deleteElement($elementName){

        }

        public function borrowBook($bookTitle){

        }

        public function returnBook($bookTitle){
            
        }
    }