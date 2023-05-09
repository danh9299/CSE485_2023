<?php
class studentDAO extends Student{
    private $students = array();
<<<<<<< HEAD
    public function update(Student $student) {
        // Tìm kiếm sinh viên với id tương ứng trong cơ sở dữ liệu
        // Cập nhật thông tin sinh viên
        foreach ($this->students as $key => $s) {
          if ($s->getId() == $student->getId()) {
            $this->students[$key] = $student;
            break;
          }
        }
=======
    
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
>>>>>>> origin/CSE485-2023-NguyenNhuVinh
      }


}
?>