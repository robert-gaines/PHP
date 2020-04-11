<?php

  class SampleClass
  {
    private $sample_attribute = "Sample attribute of the sample class";

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

    function GetAttribute()
    {
      /* Sample Getter Method */
      echo $this->sample_attribute;
    }

    function SetAttribute()
    {
      $this->sample_attribute = "This sample attribute has been changed!";
    }

    static function RetrieveStatic()
    {
      return self::$static_attribute;
    }

    function __construct()
    {
      echo "[*] Constructor function gets called automatically!";
    }

    function __destruct()
    {
      echo "[!] The destructor has been invoked [!]";
    }

  }

  $instance = new SampleClass();


 ?>
