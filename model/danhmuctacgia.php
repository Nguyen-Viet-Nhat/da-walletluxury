<?php
function danhmuc_tacgia()
{
    $sql = "select * from tacgia";
    $result = pdo_query($sql);
    return $result;
}

function add_dm_tacgia($tendmtt)
{
    $sql = "insert INTO tacgia(`ten_tac_gia`) VALUES ('$tendmtt')";
    pdo_execute($sql);
}

function getone_dm_tacgia($iddmtt)
{
    $sql = "select * from tacgia where id_tacgia = $iddmtt";
    $result = pdo_query_one($sql);
    return $result;
}

function update_dm_tacgia($iddmtt, $tendmtt)
{
    $sql = "update tacgia SET ten_tac_gia ='$tendmtt' WHERE id_tacgia = $iddmtt";
    pdo_execute($sql);
}

function delete_dm_tacgia($iddmtt)
{
    $sql = "delete from tacgia where id_tacgia = $iddmtt";
    pdo_execute($sql);
}

?>