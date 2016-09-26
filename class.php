<?php
    echo ">>>>>>>>>>>>>>>>>>>>>>>>>> #Simple Class definition <<<<<<<<<<<<<<<<<<<<<<< <br />";

    class SimpleClass{
       // property declaration
       public $var = "This is first class";

       // Method declaration
       public function displayVar(){
         return $this->var;
       }
    }


    echo ">>>>>>>>>>>>>>>>>>>>>>>>>> Some examples of the '\$this\' pseudo-variable <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<.<br />";

    class A{
        function foo(){
            if(isset($this)){
                echo '$this is defined (';
                echo get_class($this);
                echo ")<br />";
            } else {
               echo "\$this is not defined <br />";
            }
        }
    }

   class B{
       function bar(){
           A::foo();
       }
   }

    $a = new A();
    echo $a->foo();
    A::foo();

    $b = new B();
    $b-> bar();

    B::bar();


   echo ">>>>>>>>>>>>>>>>>>>>>>>>>  Creating an instance <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";

   $instance = new SimpleClass();

   //  // This can also be done with a variable:
   $className = "SimpleClass";
   $instance = new $className();

   echo ">>>>>>>>>>>>>>>>>>>>>>>>>  Object Assignment <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";

   $object = new SimpleClass();
   $assign = $object;
   $reference = & $object;

   $object->var = "This is another object";
   $object = null;

   var_dump($object);
   var_dump($reference);
   var_dump($assign);

   echo "<br />>>>>>>>>>>>>>>>>>>>>>>>> Creating new objects <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";

   class Test{
       static public function getNew(){
           return new static;
       }
   }

   class Child extends Test{ }

    $testObject = new Test();
    $testObject1 = new $testObject;
    var_dump( $testObject !== $testObject1);

    $testObject2 = Test::getNew();
    var_dump($testObject2 instanceof Test);

    $testObject3 = Child::getNew();
    var_dump($testObject3 instanceof Child);

    echo "<br />>>>>>>>>>>>>>>>>>>>>>>>> Property access vs. method call <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";


    class foo{
        // property and method are the separate "namespaces"
        public $bar = "Property";
        public function bar(){
           return "Method";
        }
    }

   $fooObject = new foo();
   var_dump($fooObject->bar);
   var_dump($fooObject->bar());


   echo "<br />>>>>>>>>>>>>>>>>>>>>>>>> Calling an anonymous function stored in a property <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";

   class callFunction{
       public $bar;
       public function __construct(){
           $this->bar = function(){
               return 42;
           };
       }
   }

   $callObject = new callFunction();
   $value = $callObject->bar;
   echo $value();


  echo "<br />>>>>>>>>>>>>>>>>>>>>>>>> Simple Class Inheritance <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<br />";

  class inheritanceClass extends SimpleClass{
      public function displayVar(){
          echo "Extend class <br />";
          parent::displayVar();
      }
  }

  $extendClass = new inheritanceClass();
  var_dump($extendClass->displayVar());

?>