<div class="col-md-8">
    <h3>Sửa danh mục tác giả</h3>
    <form method="post" action="?act=editdmtg">
        <input type="hidden" value="<?php echo $danhmuctacgia['id_tacgia']; ?>" name="idtt">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" name="tentt"
                value="<?php echo $danhmuctacgia['ten_tac_gia']; ?>" />
        </div>
        <button type="submit" class="btn btn-warning" name="btnsubmit">Sửa</button>
    </form>
</div>