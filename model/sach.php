<?php
function danhsach_sach()
{
    $sql = "
        SELECT sach.id, sach.tieu_de, sach.hinh_anh, sach.gia, sach.mo_ta, tacgia.ten_tac_gia AS tendmtt FROM `sach` LEFT JOIN tacgia ON sach.id_tac_gia = tacgia.id_tacgia
    ";
    $result = pdo_query($sql);
    return $result;

}

function add_sach($tieudetg, $photo, $gia, $motatg, $danhmuctg)
{
    $sql = "insert INTO sach(`tieu_de`, `hinh_anh`, `gia`, `mo_ta`, `id_tac_gia`) VALUES ('$tieudetg','$photo','$gia','$motatg','$danhmuctg')";
    pdo_execute($sql);
}

function getone_tacgia($idtg)
{
    $sql = "select * from sach where id_tac_gia = $idtg";
    $result = pdo_query_one($sql);
    return $result;
}

// function update_sanpham($tensp, $giasp, $giamgiasp, $photo, $motasp, $danhmucsp, $idsp){
//     $sanpham = getone_sanpham($idsp);
//     if($photo != null){
//         if($sanpham['image'] != null && $sanpham['image'] != ""){
//             $imglink = "../uploads/" . $sanpham['image'];
//             unlink($imglink);
//         }
//         $sql = "
//             update sanpham SET name='$tensp',price='$giasp',discount='$giamgiasp',image='$photo',mota='$motasp',id_dm='$danhmucsp' WHERE id = $idsp
//         ";
//     }else{
//         $sql = "
//             update sanpham SET name='$tensp',price='$giasp',discount='$giamgiasp',mota='$motasp',id_dm='$danhmucsp' WHERE id = $idsp
//         ";
//     }

//     pdo_execute($sql);
// }

function delete_tacgia($idtg)
{
    $tacgia = getone_tacgia($idtg);
    // echo $idtg;
    // die();
    if ($tacgia['hinh_anh'] != null && $tacgia['hinh_anh'] != "") {
        $imglink = "../uploads/" . $tacgia['hinh_anh'];
        unlink($imglink);
    }
    $sql = "delete from sach where id = $idtg";
    pdo_execute($sql);
}


// function top10_tacgia_luotxem(){
//     $sql = "select * from sanpham order by luotxem desc limit 0, 10";
//     $result = pdo_query($sql);
//     return $result;
// }


// function sanpham_lienquan($idsp){
//     $sanpham = getone_sanpham($idsp);
//     $iddm = $sanpham['id_dm'];
//     $sql = "select * from sanpham where id_dm = $iddm and id <> $idsp limit 0, 4";
//     $result = pdo_query($sql);
//     return $result;
// }

// function tangluotxem($idsp){
//     $sanpham = getone_sanpham($idsp);
//     $luotxem = $sanpham['luotxem'] + 1;
//     $sql = "update sanpham set luotxem = $luotxem where id = $idsp";
//     pdo_execute($sql);
// }


// function sanpham_themdanhmuc($iddm){
//     $sql = "select * from sanpham where id_dm = $iddm";
//     $result = pdo_query($sql);
//     return $result;


// }
// function loadsp_theo_ten_danhmuc($iddm){

//     $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
//     $dm = pdo_query_one($sql);

//     return $dm;

// }

// function loadall_sanpham2($kyw,$iddm){
//     $sql = "SELECT * FROM sanpham WHERE 1";
//     if($kyw!=""){
//         $sql.=" and `name` like '%".$kyw."%'";
//     }
//     if($iddm>0){
//         $sql.=" and `id_dm` = '".$iddm."'";
//     }

//     $sql .= " order by id desc";
//     $listsp = pdo_query($sql);
//     return $listsp;
// }
?>