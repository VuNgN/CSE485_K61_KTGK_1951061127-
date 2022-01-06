<?php
//file hiển thị thông báo lỗi
require_once 'views/commons/message.php';
?>

<a href="index.php?controller=lecturers&action=add">
    Thêm mới giảng viên
</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Tên giảng viên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>Trình độ</th>
        <th>Chuyên môn</th>
        <th>Học hàm</th>
        <th>Học vị</th>
        <th>Cơ quan</th>
        <th>Tùy chọn</th>
        <th></th>
    </tr>
    <?php if (!empty($lecturers)): ?>
        <?php foreach ($lecturers AS $lecturers) : ?>
            <tr>
                <td><?php echo $lecturers['magv'] ?></td>
                <td><?php echo $lecturers['hovaten'] ?></td>
                <td><?php echo $lecturers['ngaysinh'] ?></td>
                <td><?php echo $lecturers['gioitinh'] ?></td>
                <td><?php echo $lecturers['trinhdo'] ?></td>
                <td><?php echo $lecturers['chuyenmon'] ?></td>
                <td><?php echo $lecturers['hocham'] ?></td>
                <td><?php echo $lecturers['hocvi'] ?></td>
                <td><?php echo $lecturers['coquan'] ?></td>
                <td>
                    <?php
                    $urlEdit =
                        "index.php?controller=lecturers&action=edit&id=" . $lecturers['magv'];
                    $urlDelete =
                        "index.php?controller=lecturers&action=delete&id=" . $lecturers['magv'];
                    ?>
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        Xóa
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>
