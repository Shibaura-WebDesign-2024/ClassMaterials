<?
class ParentClass {
    protected $property = "Parent Property";
  
    protected function method() {
      echo "Parent Method <br>";
    }
  }
  
  class ChildClass extends ParentClass {
    public $property = "Child Property";  // Overrides parent property
  
    public function method() {  // Overrides parent method
      echo "Child Method<br>";
    }
  
    public function callParentMethod() {
      parent::method();  // Using parent keyword to call the overridden method from parent class
    }
  }
  
  $child = new ChildClass();
  echo $child->property;  // Output: Child Property
  $child->method();       // Output: Child Method
  $child->callParentMethod();  // Output: Parent Method
  
?>  