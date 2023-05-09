<?php
class Student
{
  private $id;
  private $name;
  private $age;
 

  // Construct
  public function __construct($id, $name, $age)
  {
    $this->id = $id;
    $this->name = $name;
    $this->age = $age;
  }


  // Get
  public function getId()
  {
    return $this->id;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getAge()
  {
    return $this->age;
  }

  // Set
  public function setId($id)
  {
      $this->id = $id;
  }
  public function setName($name)
  {
      $this->name = $name;
  }
  public function setAge($age)
  {
      $this->age = $age;
  }


}
?>