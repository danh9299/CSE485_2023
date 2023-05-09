<?php
class studentDAO extends Student{
    private $students = array();
    class StudentDAO {
        private $students = array();
        
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
        
        public function getAll() {
          // Trả về tất cả sinh viên trong mảng $students
          return $this->students;
        }
      }


}
?>