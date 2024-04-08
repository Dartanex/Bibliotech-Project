<?php
    interface ILibraryElements{
        
        public function createElement();

        public function updateElement($elementName, $undatedInformation);

        public function deleteElement($elementName);
    }

?>