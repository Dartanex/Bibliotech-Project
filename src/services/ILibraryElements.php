<?php
    interface ILibraryElements{
        
        public function createElement();

        public function updateElement($elementName);

        public function deleteElement($elementName);
    }

?>