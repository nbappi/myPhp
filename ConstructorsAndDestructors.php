<?php
echo ">>>>>>>>Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.<<<<<";

 // using new unified constructors

class ParentClass{
    function  __construct(){
       print "In parent class";
    }
}

class childClass extends ParentClass{
    function _construct(){
        parent::__construct();
        print "In Child class";
    }
}

class otherClass extends ParentClass{
    // inherits BaseClass's constructor
}

// In parent constructor
$objectParent = new ParentClass();


// In parent constructor
// In child constructor
$objChild = new childClass();

// In Parent constructor
$objOtherClass = new otherClass();



/// >>>>>>>>> Destructor <<<<<<<<<<<<

class destructClass{
    function __construct(){
        print "Construct class";
        $this->name = "Destruct class";
    }

    function __destruct(){
        print "This is $this->name value";
    }
}

// $destruct obj

$objectDestruct = new destructClass();

