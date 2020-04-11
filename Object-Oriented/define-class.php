<?php

  class SampleClass
  {

  }

  $class_instance = get_declared_classes();

  foreach($class_instance as $class)
  {
    echo $class;
    echo "<br>";
  }





 ?>
