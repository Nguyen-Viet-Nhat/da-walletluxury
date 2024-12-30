<div class="col-md-8">
    <h3>Danh sách sách</h3>
    <a href="?act=addtg" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dstg as $key => $value): ?>
                <tr>
                    <th scope="row">
                        <?php echo $key + 1; ?>
                    </th>
                    <td>
                        <?php echo $value['tieu_de']; ?>
                    </td>
                    <td>
                        <?php if ($value['hinh_anh'] != "" && $value['hinh_anh'] != null): ?>
                            <img width="100" src="<?php echo "../uploads/" . $value['hinh_anh']; ?>" alt="">
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php echo $value['gia']; ?>
                    </td>
                    <td>
                        <?php echo $value['mo_ta']; ?>
                    </td>
                    <td>
                        <?php echo $value['tendmtt']; ?>
                    </td>
                    <td>
                        <a href="?act=edittg&idsp=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>
                        <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                            data-bs-target="#modalDelete">
                            Xóa
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hành động này không thể hoàn tác. Bạn có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>


<script>
    var modalDelete = document.getElementById('modalDelete')
    modalDelete.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget
        var idtg = button.getAttribute('data-bs-id')
        var link = `?act=deletetg1&idtg=${idtg}`
        document.getElementById("btn-delete").setAttribute("href", link)
    })
</script>