<?php
echo "<br />>>>>> The default visibility of class constants is public. The value must be a constant expression, not (for example) a variable, a property, or a function call. It's also possible for interfaces to have constants. The variable's value can not be a keyword (e.g. self, parent and static). class constants are allocated once per class, and not for each class instance.<<<<<<<<br />";

echo "<br />>>>>>>>>>>>>Example #1 Defining and using a constant>>>>>>>>>>><br />";
class SimpleClass{
   const CONSTANT = "Constant value";
   public function getConstant(){
       echo self::CONSTANT;
   }
}

echo SimpleClass::CONSTANT ."<br/>";
$className = "SimpleClass";
echo $className::CONSTANT . "<br />";

$simpleObject = new SimpleClass();
echo $simpleObject::CONSTANT. "<br />";

$simpleObject->getConstant();


echo "<br />>>>>>>>>>>>>Example #2 Class constant visibility modifiers>>>>>>>>>>><br />";

class constVisibility {
   // public const FOO = "Foo";
  //  private const BAR = "Bar";
}

echo constVisibility::FOO ."<br />";
echo constVisibility::BAR;

?>