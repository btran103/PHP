<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/ketquadangkyhocphan.css">
    <title>Kết quả đăng ký học phần</title>
</head>
<body>
<?php include("header.php") ?>
    <div class="content">
    <?php include("sidebar.php") ?>
        <div class="main-content">
            <div class="panel">
                <div class="panel-heading"><strong>Kết quả đăng ký học phần</strong></div>
                <div class="panel-body">
                    <fieldset>
                        <legend>Thông tin sinh viên</legend>
                        <table class="thong-tin-sinh-vien">
                            <tr>
                                <td><strong>Mã sinh viên:</strong></td>
                                <td>4651050066</td>
                            </tr>
                            <tr>
                                <td><strong>Họ tên:</strong></td>
                                <td>Đặng Nhật Hào</td>
                            </tr>
                            <tr>
                                <td><strong>Lớp:</strong></td>
                                <td>Công nghệ thông tin 46D</td>
                            </tr>
                            <tr>
                                <td><strong>Khoa:</strong></td>
                                <td>Khoa Công nghệ thông tin</td>
                            </tr>
                        </table>
                    </fieldset>
                    <fieldset>
                        <legend>Danh sách học phần đã đăng ký</legend>
                        <div class="filter">
                            <label for="select-year">Chọn năm học:</label>
                            <select id="select-year" name="year">
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                            </select>
                            <label for="select-semester">Chọn học kỳ:</label>
                            <select id="select-semester" name="semester">
                                <option value="HK01">Học kỳ 1</option>
                                <option value="HK02">Học kỳ 2</option>
                                <option value="HK03">Học kỳ hè</option>
                            </select>
                        </div>
                        <table aria-label="Bảng học phần">
                            <tr>
                                <th>STT</th>
                                <th>Mã học phần</th>
                                <th>Tên học phần</th>
                                <th>STC</th>
                                <th>Ngày đăng ký</th>
                            </tr>
                            <tr class="semester-row">
                                <td colspan="5">Năm học: 2024-2025 - Học kỳ: HK02</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1050279</td>
                                <td>Lập trình trên Desktop</td>
                                <td>3.0</td>
                                <td>12/12/2024 07:53:54</td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>
