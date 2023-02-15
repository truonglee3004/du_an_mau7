<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Khach hang</title>
    <link rel="stylesheet" href="./css/list_product.css">
</head>

<body>
    <?php
    $thongbao = isset($thongbao) ? $thongbao : '';
    $thongbao_xoa = isset($thongbao_delete) ? $thongbao_delete : '';
    $thongbao_sua = isset($thongbao_update) ? $thongbao_update : '';
    ?>
    <p class=""><?= $thongbao ?></p>
    <p class=""><?= $thongbao_xoa ?></p>
    <p class=""><?= $thongbao_sua ?></p>
    <table border="1" cellspacing="0">
        <tr class="row">
            <th class="type"></th>
            <th class="type">Mã khách hàng</th>
            <th class="type">Tên đăng nhập</th>
            <th class="type">Email</th>
            <th class="type">Địa chỉ</th>
            <th class="type">Số điện thoại</th>
            <th class="type">Vai trò</th>
            <th class="type"></th>
            <th class="type"></th>
        </tr>

        <?php
        foreach ($listUser as $taikhoan) {
            extract($taikhoan);
            $editUser = "index.php?target=editUser&id=" . $ma_khach_hang;
            $deleteUser = "index.php?target=deleteUser&id=" . $ma_khach_hang;
        ?>
            <tr class="row1">
                <td><input type="checkbox" name=""></td>
                <td><?= $ma_khach_hang ?></td>
                <td><?= $ten_khach_hang ?></td>
                <td><?= $email ?></td>
                <td><?= $dia_chi ?></td>
                <td><?= $so_dien_thoai ?></td>
                <td><?= $vai_tro ?></td>
                <td>
                    <a href="<?= $editUser ?>">
                        <input type="button" value="Edit" class="btn btn_edit">
                    </a>
                </td>
                <td>
                    <a href="<?= $deleteUser ?>">
                        <input type="button" value="Delete" class="btn btn_delete">
                    </a>
                </td>
            </tr>
        <?php    }     ?>
    </table>
    </table>

</body>

</html>