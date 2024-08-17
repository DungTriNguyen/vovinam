<!DOCTYPE html>
<html lang="en">
<?php require('../../../config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        <?php require('../../css/admin/Judge-score.css');
        require('../../css/admin/sidebar.css');
        require('../../css/admin/header_admin.css');
        require('../../css/admin/footer_admin.css');
        ?>
    </style>
</head>

<body>

    <div class="contain_sb" id="contain_sb">
        <div class="side-bar">
            <?php require('./sidebar.php'); ?>
        </div>
        <div class="content" id="content">
            <div class="header">
                <?php require('./header_admin.php'); ?>

            </div>
            <div class="content-select">
                <h1 class="text-2xl font-semibold">Quản lý chấm thi</h1>
                <div class="sle_op">
                    <div class="flex-1">
                        <label for="khoa-thi" class="block_text">Khóa thi:</label>
                        <select id="khoa-thi" class="sle_op.option" name="khoathi">
                            <!--      <option>Chọn Khóa Thi</option>
                          <option>Kỳ thi Thu 2024</option> -->
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="cap-dai-du-thi" class="block_text">Cấp đai dự thi:</label>
                        <select id="cap-dai-du-thi" class="sle_op.option" name="capdaiduthi">
                            <option>Chọn Cấp Đai</option>
                            <!--         <option>Tự Vệ</option> -->
                        </select>
                    </div>
                    <div class="flex-1">
                        <label for="phan-thi" class="block_text">Phần thi:</label>
                        <select id="phan-thi" class="sle_op.option" name="phanthi">
                            <!--    <option>Chọn Phần Thi</option>
                            <option>Đơn Luyện</option> -->
                        </select>
                    </div>
                </div>
                <button class="btn_loc" id="locdanhsach">Lọc</button>
            </div>

            <div class="content-show">
                <h2 class="text-xl font-semibold mb-4">Danh sách chấm thi</h2>
                <div class="overflow-x-auto">
                    <table class="danh-sach">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>Mã thẻ</th>
                                <th>Câu lạc bộ</th>
                                <th>Khóa thi</th>
                                <th>Cấp đai dự thi</th>
                                <th>Phần thi</th>
                                <th>Thuộc bài (5d)</th>
                                <th>Nhanh mạnh (2d)</th>
                                <th>Tấn pháp (2d)</th>
                                <th>Thuyết phục (1d)</th>
                                <th>Tổng điểm</th>
                                <th>Kết quả</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="danhsachChamThi">
                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="pagination pagination-sm justify-content-end" id="Pagination"
                style="cursor:pointer; margin-right:1rem;">
            </ul>
            <div class="footer">
                <?php require('./footer_admin.php'); ?>

            </div>
        </div>
    </div>
    <div id="edit-User">

    </div>
    <script src="../../Js/admin/QuanLyChamThi.js?v=<?php echo $version ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>