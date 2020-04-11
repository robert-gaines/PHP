<?php

  class SampleClass
  {
    var $sample_attribute = "Sample attribute of the sample class";

    function SampleGreeting()
    {
      echo "<script> alert('Hello!'); </script>";
    }

    function ReturnAttribute()
    {
      return "The class attribute is: ".$this->sample_attribute;
    }

  }

  class NewSampleClass extends SampleClass
  {

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

  /*
  foreach($class_methods as $method)
  {
    echo $method;
    echo "<br>";
  }
  */

  $instance = new SampleClass();

  $instance_two = new NewSampleClass();

  //$instance->SampleGreeting();

  //echo $instance->sample_attribute;

  //echo "<br>";

  //echo $instance->ReturnAttribute();

  echo "Second sample class, inherited method: ".$instance_two->ReturnAttribute();

 ?>
