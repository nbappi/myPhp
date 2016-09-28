<?php
  class parentClass
  {
      public function parentOutput($str){
         echo "Parent::".$str ;
      }

      public function printOut(){
          echo "Parent print" ;
      }
  }

  class childClass extends parentClass
  {
      public function parentOutput($str){
          echo "Child::".$str ;
      }
  }

  $parentClass = new parentClass();
  $parentClass->parentOutput('parent');   // Parent::parent
  $parentClass->printOut();   // Parent print

  $childClass = new childClass();
  $childClass->parentOutput("child");  //Child::child
  $childClass->printOut();   // parent print
?>