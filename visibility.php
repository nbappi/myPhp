<?php
echo "<br />>>>>>>>>>>>>>Class members declared public can be accessed everywhere. Members declared protected can be accessed only within the class itself and by inherited classes. Members declared as private may only be accessed by the class that defines the member.<<<<<<<br/>";

// Property declaration
class myClass{
    public $public = "Public";
    protected $protected = "Protected";
    private $private = 'Private';

    function output(){
        echo $this->public ."<br />";
        echo $this->protected ."<br />";
        echo $this->private ."<br />";
    }
}

$object = new myClass();

echo $object->public;  // Public
//echo $object->protected; // fatal Error
//echo $object->private; // Undefined

$object->output();

class myClassPrint extends myClass{
    protected $protected = "Protecetd1";

    function printOutput(){
       echo $this->public;
       echo $this->protected;
       echo $this->private;
    }
}

$myClassPrint = new myClassPrint();
echo $myClassPrint->public;  // work
echo $myClassPrint->protected;  // fatal error
echo $myClassPrint->private;   // undefined

$myClassPrint->printOutput(); // public, protected2, undefined



/// Method declaration

class myClass1{
    // Declare a public constructor
    public function __construct(){}

    // Declare a public method
    public function publicMethod(){}

    // Declare a protected method
    protected function protectedMethod(){}

    // Declare private method
    private function privateMethod(){}

    // this is public
    function foo(){
        $this->publicMethod();
        $this->protectedMethod();
        $this->privateMethod();
    }
}

$class1Object = new myClass1();

$class1Object->publicMethod(); // work
$class1Object->protectedMethod();  // Fatal error
$class1Object->privateMethod();   // Fatal error
$class1Object->foo();   // public , protected, private work


class myClass2 extends myClass1{
    // This is public
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        $this->MyPrivate(); // Fatal Error
    }
}

$myclass2 = new myClass2;
$myclass2->MyPublic(); // Works
$myclass2->Foo2(); // Public and Protected work, not Private



class foo{
    function test(){
        $this->publicMethod();
        $this->privateMethod();
    }

    public function publicMethod(){
        echo "foo:: public method";
    }

    private function privateMethod(){
        echo "foo:: private method";
    }
}

class bar extends foo{
    public function publicMethod(){
        echo "bar:: public method";
    }

    private function privateMethod(){
        echo "bar:: private method";
    }
}

$barObj = new bar();
$barObj->test();   //  foo::private
                   // bar::public






///   Accessing private members of the same object type


class test{
    private $foo;

    public function __construct($foo){
        $this->foo = $foo;
    }

    private function bar(){
        echo "Access private method";
    }

    public function baz(test $other){
        // We can change the private property:
        $other->foo = "hello";

        var_dump($other->foo);
        // We can also call the private method:
        $other->bar();
    }
}


$test = new test("bappi");
$test->baz(new test("foo"));