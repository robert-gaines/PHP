<?php

  class SampleClass
  {
    var $sample_attribute = "Sample attribute of the sample class";

    public $public_attribute = "Public Attribute";
    private $private_attribute = "Private Attribute";
    protected $protected_attribute = "Protected Attribute";

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

  }

  class NewSampleClass extends SampleClass
  {

  }

  $instance = new SampleClass();

  //echo $instance->public_attribute;
  /* Throws an error */ //echo $instance->private_attribute;
  /* Throws an error */ //echo $instance->protected_attribute;

  $instance->ListAttributes();

 ?>
