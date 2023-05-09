<?php
class studentDAO extends Student{
    private $students = array();
    
    public function create($student) {
        array_push($this->students, $student);
      }
    
      // phương thức lấy thông tin của sinh viên theo ID
      public function read($id) {
        foreach($this->students as $student) {
          if($student->getId() == $id) {
            return $student;
          }
        }
        return null;
      }


}
?>