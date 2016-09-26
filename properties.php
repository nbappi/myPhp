<?php
     echo '>>>>>>>>>>  Class member variables are called "properties". You may also see them referred to using other terms such as "attributes" or "fields", but for the purposes of this reference we will use "properties". They are defined by using one of the keywords public, protected, or private, followed by a normal variable declaration. This declaration may include an initialization, but this initialization must be a constant value--that is, it must be able to be evaluated at compile time and must not depend on run-time information in order to be evaluated. <<<<<<<<<<<<';
class SimpleClass
{
    // valid property
    public $var = "First property";
    public $var1 = 'hello ' ." -". 'world';
    public $var2 = 1 + 2;
    public $var3 = myConstant;
    public $var4 = array(true, false);

    // invalid property
    public $var5 = self::staticMethod();
    public $var6 = $myVar;
}
?>