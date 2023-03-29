<?php
  abstract class ParentClass{
    abstract protected function addPrefix($name);
  }

  class ChildClass extends ParentClass {
    public function addPrefix($name) {
      if($name == "Jericho"){
        $prefix = "Mr.";
      }
      else if ($name == "Justine") {
        $prefix = "Ms.";
      }
      else {
        $prefix = "";
      }

      return "{$prefix} {$name}";
    }
  }

//  class ChildClass2 extends ParentClass {
//
//  }

  $class = new ChildClass();
  echo $class->addPrefix("Jericho");
  echo $class->addPrefix("Japhet");
  echo $class->addPrefix("Justine");

