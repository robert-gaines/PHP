<?php

  class SampleClass
  {
    function SampleGreeting()
    {
      echo "<script> alert('Hello!'); </script>";
    }
  }

  $class_instance = get_declared_classes();

  /*
  foreach($class_instance as $class)
  {
    echo $class;
    echo "<br>";
  }
  */

  $class_methods = get_class_methods('SampleClass');

  foreach($class_methods as $method)
  {
    echo $method;
    echo "<br>";
  }

 ?>
