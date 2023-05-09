<?php
class studentDAO extends Student{
    private $students = array();
    public function update(Student $student) {
        // Tìm kiếm sinh viên với id tương ứng trong cơ sở dữ liệu
        // Cập nhật thông tin sinh viên
        foreach ($this->students as $key => $s) {
          if ($s->getId() == $student->getId()) {
            $this->students[$key] = $student;
            break;
          }
        }
      }


}
?>