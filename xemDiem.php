<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/xemDiem.css">
    <title>Trường đại học Quy Nhơn</title>
</head>
<body>
<?php include("header.php") ?>
    <div class = "content">
    <?php include("sidebar.php") ?>
        <div class="content__main">
            <div class = "content__xemDiem">
                <div class = "form">
                    <div class = "form__choose">
                        <label class ="form__choose-lable">Chương trình đào tạo: </label>
                    <select class="form__choose-btn">
                        <option>Sư Phạm Tin học</option>
                        <option>Toán</option>
                    </select>
                    <label>Năm học</label>
                    <select class="form__choose-btn">
                        <option>Tất cả</option>
                    </select>
                    <label>Năm học</label>
                    <select class="form__choose-btn">
                        <option>tất cả</option>
                    </select>
                    </div>
                    <div style="text-decoration: 2px underline black;">Ghi chú</div>
                    <div>1. Những môn có dấu <span style="color: red">(*)</span> sẽ không tính điểm trung bình chỉ là môn điều kiện</div>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Mã học phần</th>
                            <th class = "tenhp">Tên học phần</th>
                            <th>Tín chỉ</th>
                            <th>Điểm 10</th>
                            <th>Điểm 4</th>
                            <th>Điểm chữ</th>
                            <th>Kết quả</th>
                            <th>Chi tiết</th>
                        </tr>
                        <tr><td colspan="9" class = "title1">Năm học 2015-2016 học kỳ: HK1</td></tr>
                        <tr>
                            <td>1</td>
                            <td>150191221</td>
                            <td class = "tenhp">Lập trình destop</td>
                            <td>3</td>
                            <td>10</td>
                            <td>4</td>
                            <td>A+</td>
                            <td>
                                <img src="image/Dau.png" alt="tich"></td>
                            <td>
                                <img src="image/detail.png">
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>150191221</td>
                            <td class = "tenhp">lập trình cơ bản</td>
                            <td>3</td>
                            <td>10</td>
                            <td>4</td>
                            <td>A+</td>
                            <td>
                                <img src="image/Dau.png" alt="tich"></td>
                            <td>
                                <img src="image/detail.png">
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>150191221</td>
                            <td class = "tenhp">Kỹ thuật lập trình</td>
                            <td>3</td>
                            <td>10</td>
                            <td>4</td>
                            <td>A+</td>
                            <td>
                                <img src="image/Dau.png" alt="tich"></td>
                            <td>
                                <img src="image/detail.png">
                            </td>
                        </tr>
                           
                    </table>
            </div>
            <div class = "form__Tongket">
                <div class="form__Tongket-child1">
                    <div>Tổng số tín chỉ 17.0</div>
                    <div>Số tín chỉ: 17.0. Số tín chỉ không đạt: 0</div>
                    <div>Điểm trung bình (hệ 10): 9</div>
                    <div>Điểm trung bình học kỳ(hệ 4): 3. Điểm rèn luyênn : 5. Xếp loại: khá</div>
                </div>
               
            <div class="form__Tongket-child2">
                <div>Số tín chỉ tích lũy: 20</div>
                <div>Điểm trung bình (hệ 10) tích lũy:  9</div>
                <div>Điểm trung bình học kỳ(hệ 4) tích lũy: 3</div>
            </div>
        </div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã học phần</th>
                    <th>Tên học phần</th>
                    <th>Tín chỉ</th>
                    <th>Điểm 10</th>
                    <th>Điểm 4</th>
                    <th>Điểm chữ</th>
                    <th>Kết quả</th>
                    <th>Chi tiết</th>
                </tr>
                <tr><td colspan="9" class = "title1">Năm học 2015-2016 học kỳ: HK1</td></tr>
                <tr>
                    <td>1</td>
                    <td>150191221</td>
                    <td class = "tenhp">Lập trình destop</td>
                    <td>3</td>
                    <td>10</td>
                    <td>4</td>
                    <td>A+</td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/Dau.png" alt="tich"></td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/detail.png">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>150191221</td>
                    <td class = "tenhp" >lập trình cơ bản</td>
                    <td>3</td>
                    <td>10</td>
                    <td>4</td>
                    <td>A+</td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/Dau.png" alt="tich"></td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/detail.png">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>150191221</td>
                    <td class = "tenhp">Kỹ thuật lập trình</td>
                    <td>3</td>
                    <td>10</td>
                    <td>4</td>
                    <td>A+</td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/Dau.png" alt="tich"></td>
                    <td>
                        <img src="https://daotao.qnu.edu.vn/Content/images/detail.png">
                    </td>
                </tr>
                   
            </table>
            </div>
        
            
        </div>
    </div>
    <?php include("footer.php") ?>
</body>
</html>