<?php
require_once 'models/Lecturer.php';
class LecturersController {

    public function index() {
        echo "<h1>Trang liệt kê giao vien</h1>";

        $lecturer = new Lecturer();
        $lecturers = $lecturer->index();

        require_once 'views/lecturers/index.php';
    }

    public function add() {
        $error = '';
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];
            if (empty($name)) {
                $error = "Ten không được để trống";
            }
            else {
                $lecturer = new Lecturer();
                $lecturerArr = [
                    'hovaten' => $name,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan,
                ];
                $isInsert = $lecturer->insert($lecturerArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                }
                else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=lecturers&action=index");
                exit();
            }
        }
        require_once 'views/lecturers/add.php';
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=lecturers&action=index");
            return;
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=lecturers&action=index");
            return;
        }
        $id = $_GET['id'];
        $lecturerModel = new Lecturer();
        $lecturer = $lecturerModel->getLecturerById($id);

        $error = '';
        if (isset($_POST['submit'])) {
            $name = $_POST['hovaten'];
            $ngaysinh = $_POST['ngaysinh'];
            $gioitinh = $_POST['gioitinh'];
            $trinhdo = $_POST['trinhdo'];
            $chuyenmon = $_POST['chuyenmon'];
            $hocham = $_POST['hocham'];
            $hocvi = $_POST['hocvi'];
            $coquan = $_POST['coquan'];
            if (empty($name)) {
                $error = "Name không được để trống";
            }
            else {
                $lecturerModel = new Lecturer();
                $lecturerArr = [
                    'magv' => $id,
                    'hovaten' => $name,
                    'ngaysinh' => $ngaysinh,
                    'gioitinh' => $gioitinh,
                    'trinhdo' => $trinhdo,
                    'chuyenmon' => $chuyenmon,
                    'hocham' => $hocham,
                    'hocvi' => $hocvi,
                    'coquan' => $coquan,
                ];
                $isUpdate = $lecturerModel->update($lecturerArr);
                if ($isUpdate) {
                    $_SESSION['success'] = "Update bản ghi #$id thành công";
                }
                else {
                    $_SESSION['error'] = "Update bản ghi #$id thất bại";
                }
                header("Location: index.php?controller=lecturers&action=index");
                exit();
            }
        }
        require_once 'views/lecturers/edit.php';
    }

    public function delete() {
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=lecturers&action=index");
            exit();
        }
        $lecturer = new Lecturer();
        $isDelete = $lecturer->delete($id);

        if ($isDelete) {
            $_SESSION['success'] = "Xóa bản ghi #$id thành công";
        }
        else {
            $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
        }
        header("Location: index.php?controller=lecturers&action=index");
        exit();
    }
}
