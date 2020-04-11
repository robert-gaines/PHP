<?php

  class SampleClass
  {
    var $sample_attribute = "Sample attribute of the sample class";

    static $second_sample_attribute = "Second sample attribute";

    public $public_attribute = "Public Attribute";
    private $private_attribute = "Private Attribute";
    protected $protected_attribute = "Protected Attribute";

    static $static_attribute = "This is a static class attribute";

    function ListAttributes()
    {
      echo $this->public_attribute."<br>";
      echo $this->private_attribute."<br>";
      echo $this->protected_attribute."<br>";
    }

    function SampleGreeting()
    {
      echo "<script> alert('Hello!'); </script>";
    }

    function ReturnAttribute()
    {
      return "The class attribute is: ".$this->sample_attribute;
    }

    static function StaticMethod()
    {
      echo "<script> alert('I came from a static method!'); </script>";
      echo "<br>";
      echo SampleClass::$second_sample_attribute;
    }

  }

  $instance = new SampleClass();

  /* Access Static Attribute */

  echo SampleClass::$static_attribute;

  echo SampleClass::StaticMethod();

 ?>
