<?php
require_once 'configs/database.php';
class Lecturer {
    public $id;
    public $name;

    public function insert($param = []) {
        $connection = $this->connectDb();
        $queryInsert = "INSERT INTO 
        GIANGVIEN(`hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) 
        VALUES 
        ('{$param['hovaten']}', '{$param['ngaysinh']}', 
        '{$param['gioitinh']}', '{$param['trinhdo']}', 
        '{$param['chuyenmon']}', '{$param['hocham']}',
        '{$param['hocvi']}', '{$param['coquan']}')";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }

    public function getLecturerById($id = null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM GIANGVIEN WHERE magv=$id";
        $results = mysqli_query($connection, $querySelect);
        $lecturers = [];
        if (mysqli_num_rows($results) > 0) {
            $lecturers = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $lecturer = $lecturers[0];
        }
        $this->closeDb($connection);

        return $lecturer;
    }

    public function index() {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM GIANGVIEN";
        $results = mysqli_query($connection, $querySelect);
        $lecturers = [];
        if (mysqli_num_rows($results) > 0) {
            $lecturers = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $lecturers;
    }

    public function update($lecturerArr = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE GIANGVIEN 
                        SET `hovaten` = '{$lecturerArr['hovaten']}', 
                            `ngaysinh` = '{$lecturerArr['ngaysinh']}', 
                            `gioitinh` = '{$lecturerArr['gioitinh']}',
                            `trinhdo` = '{$lecturerArr['trinhdo']}',
                            `chuyenmon` = '{$lecturerArr['chuyenmon']}',
                            `hocham` = '{$lecturerArr['hocham']}',
                            `hocvi` = '{$lecturerArr['hocvi']}',
                            `coquan` = '{$lecturerArr['coquan']}'
                        WHERE `magv` = {$lecturerArr['magv']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);
        return $isUpdate;
    }

    public function delete($id = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM GIANGVIEN WHERE magv = $id";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}
