<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div style="color: red">
    <?php echo $error; ?>
</div>
<div class='container'>
    <div class='row'>
        <div class='col'>
            <form  method="post" action="">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationDefault01">Tên giảng viên</label>
                  <input    type="text" 
                            name="hovaten" 
                            value="
                            <?php
                            echo isset($_POST['hovaten']) ? $_POST['hovaten'] : $lecturer['hovaten']
                            ?>"
                            class="form-control" 
                            id="validationDefault01" 
                            placeholder="Tên giảng viên" 
                            value="" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Ngày sinh</label>
                  <input    type="text" 
                            name="ngaysinh" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Ngày sinh" 
                            value="
                            <?php
                            echo isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : $lecturer['ngaysinh']
                            ?>
                            " 
                            required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Giới tính</label>
                  <input    type="text" 
                            name="gioitinh" 
                            value=""  
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Giới tính" 
                            value="
                            <?php
                            echo isset($_POST['gioitinh']) ? $_POST['gioitinh'] : $lecturer['gioitinh']
                            ?>
                            " required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Trình độ</label>
                  <input    type="text" 
                            name="trinhdo" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Trình độ" 
                            value="
                            <?php
                            echo isset($_POST['trinhdo']) ? $_POST['trinhdo'] : $lecturer['trinhdo']
                            ?>
                            " required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Chuyên môn</label>
                  <input    type="text" 
                            name="chuyenmon" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Chuyên môn" 
                            value="
                            <?php
                            echo isset($_POST['chuyenmon']) ? $_POST['chuyenmon'] : $lecturer['chuyenmon']
                            ?>
                            " 
                            required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Học hàm</label>
                  <input    type="text" 
                            name="hocham" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Học hàm" 
                            value="
                            <?php
                            echo isset($_POST['hocham']) ? $_POST['hocham'] : $lecturer['hocham']
                            ?>
                            " required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Học vị</label>
                  <input    type="text"
                            name="hocvi" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Học vị" 
                            value="
                            <?php
                            echo isset($_POST['hocvi']) ? $_POST['hocvi'] : $lecturer['hocvi']
                            ?>
                            " 
                            required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault02">Cơ quan</label>
                  <input    type="text" 
                            name="coquan" 
                            class="form-control" 
                            id="validationDefault02" 
                            placeholder="Cơ quan" 
                            value="
                            <?php
                            echo isset($_POST['coquan']) ? $_POST['coquan'] : $lecturer['coquan']
                            ?>
                            " 
                            required>
                </div>
              </div>
              <button class="btn btn-primary" name="submit" type="submit">Chỉnh sửa</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
