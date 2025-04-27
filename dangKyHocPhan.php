<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/dangkyhocphan.css">
    <title>Đăng kí học phần</title>
</head>
<body>
<?php include("header.php") ?>
    <div class = "content">
    <?php include("sidebar.php") ?>
        <div class="main-content">
            <div class="panel">
                <div class="panel-heading"><strong>Đăng ký học phần</strong></div>
                <div class="panel-body">
                    <label>Chương trình đào tạo:</label>
                    <select style="width: 300px;">
                        <option>Công nghệ thông tin</option>
                    </select>
                    <p> <strong>Chưa đến thời hạn đăng ký môn học</strong></p>
                    <input type="checkbox"> Theo lớp sinh viên

                 
                    <fieldset>
                        <legend>Kết quả đăng ký: 0 học phần, 0 tín chỉ</legend>
                        <div class="reload_kqdk">
                            <div class="reload_1"> Ghi chú: </div>
                            <div class="reload_mau02"></div>
                            <div class="reload_2"> Trùng lịch </div>
                            <div class="reload_mau03"></div>
                            <div class="reload_3"> LHP hủy </div>
                        </div>
                        <table>
                            <tr>
                                <th>Loại</th>
                                <th>Mã LHP</th>
                                <th>Tên LHP</th>
                                <th>STC</th>
                                <th>GV</th>
                                <th>Lịch học</th>
                                <th>Từ ngày</th>
                                <th>Đến ngày</th>
                            </tr>
                        </table>
                    </fieldset>
                    
                </div>
            </div>
        </div>  
            
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>