<?php
class studentDAO extends Student{
    private $students = array();
<<<<<<< HEAD
=======
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
>>>>>>> origin/CSE485-2023-NguyenDuyAnh

    public function delete($id) {
        // Tìm kiếm sinh viên với id tương ứng trong cơ sở dữ liệu
        // Xóa sinh viên khỏi mảng $students
        foreach ($this->students as $key => $student) {
          if ($student->getId() == $id) {
            unset($this->students[$key]);
            break;
          }
        }
      }

}
?>