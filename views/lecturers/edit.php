<div style="color: red">
    <?php echo $error; ?>
</div>
<form action="" method="post">
    hovaten:
    <input type="text"
           name="hovaten"
           value="
           <?php
           echo isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : $lecturer['hovaten']
           ?>"
    /> <br />
    ngaysinh:
    <input type="text"
           name="ngaysinh"
           value="
           <?php
           echo isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : $lecturer['ngaysinh']
           ?>"
    /> <br />
    gioitinh:
    <input type="text"
           name="gioitinh"
           value="
           <?php
           echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $lecturer['gioitinh']
           ?>"
    /> <br />
    trinhdo:
    <input type="text"
           name="trinhdo"
           value="
           <?php
           echo isset($_POST['trinhdo']) ? $_POST['trinhdo'] : $lecturer['trinhdo']
           ?>"
    /> <br />
    chuyenmon:
    <input type="text"
           name="chuyenmon"
           value="
           <?php
           echo isset($_POST['chuyenmon']) ? $_POST['chuyenmon'] : $lecturer['chuyenmon']
           ?>"
    /> <br />
    hocham:
    <input type="text"
           name="hocham"
           value="
           <?php
           echo isset($_POST['hocham']) ? $_POST['hocham'] : $lecturer['hocham']
           ?>"
    /> <br />
    hocvi:
    <input type="text"
           name="hocvi"
           value="
           <?php
           echo isset($_POST['hocvi']) ? $_POST['hocvi'] : $lecturer['hocvi']
           ?>"
    /> <br />
    coquan:
    <input type="text"
           name="coquan"
           value="
           <?php
           echo isset($_POST['coquan']) ? $_POST['coquan'] : $lecturer['coquan']
           ?>"
    /> <br />
    <br />
    <input type="submit" name="submit" value="Update" />
</form>