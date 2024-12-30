<div class="col-md-8">
    <h3>Thêm thông tin sách</h3>
    <form method="post" action="?act=addtg" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tiêu đề sách" name="tieudett" />
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh sách</label><br>
            <input type="file" id="image" name="anhtt" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá</label>
            <input type="number" class="form-control" id="price" placeholder="Nhập giá sách" name="gia" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Mô tả</label>
            <textarea type="number" class="form-control" id="price" placeholder="Nhập nội dung sách"
                name="motatg"></textarea>
        </div>

        <div class="mb-3">
            <label for="danhmuctg" class="form-label">Danh mục tác giả</label><br>
            <select name="danhmuctg" id="danhmuctg" class="form-control">
                <?php foreach ($dmtg as $value): ?>
                    <option value="<?php echo $value['id_tacgia'] ?>">
                        <?php echo $value['ten_tac_gia'] ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>