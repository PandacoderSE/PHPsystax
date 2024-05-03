<!-- 3. Tính diện tích hình học:
Tạo form HTML với các trường nhập kích thước cho các hình học cơ bản (vuông, chữ nhật, tam giác, tròn).
Sử dụng method GET hoặc POST để gửi dữ liệu form đến một file PHP khác.
Xử lý dữ liệu form trong file PHP, bao gồm:
Lấy giá trị kích thước từ biến $_GET hoặc $_POST.
Tính toán diện tích cho từng hình học.
Hiển thị kết quả diện tích trên trang web.
 -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <form action="bai31_zalo.php" method="POST" target="_blank">
        <label for="shape">lựa chọn hình:</label>
        <select id="shape" name="shape" required>
            <option value="square">Square</option>
            <option value="rectangle">Rectangle</option>
            <option value="triangle">Triangle</option>
            <option value="circle">Circle</option>
        </select><br><br>

        <div id="dimensions">
            <!-- Thêm các trường kích thước cho các hình học -->
            <div id="square_dim" name="square_dim" class="dimension">
                <label for="side">Side:</label>
                <input type="number" id="side" name="side"><br><br>
            </div>
            <div id="rectangle_dim" class="dimension" style="display: none;">
                <label for="length">Length:</label>
                <input type="number" id="length" name="length"><br><br>
                <label for="width">Width:</label>
                <input type="number" id="width" name="width"><br><br>
            </div>
            <div id="triangle_dim" class="dimension" style="display: none;">
                <label for="base">Base:</label>
                <input type="number" id="base" name="base"><br><br>
                <label for="height">Height:</label>
                <input type="number" id="height" name="height"><br><br>
            </div>
            <div id="circle_dim" class="dimension" style="display: none;">
                <label for="radius">Radius:</label>
                <input type="number" id="radius" name="radius"><br><br>
            </div>
        </div>

        <input type="submit">
    </form>

    <script>
        // Hiển thị các trường kích thước phù hợp với hình học được chọn
        document.getElementById('shape').addEventListener('change', function() {
           //lấy sự kiện tại id='shape' 
            var selectedShape = this.value; //lấy giá trị của hình 
            var dimensions = document.querySelectorAll('.dimension');// lấy tất cả giá trị 
            dimensions.forEach(function(dim) {
                dim.style.display = 'none'; // ẩn trc khi gọi 
            });
            document.getElementById(selectedShape + '_dim').style.display = 'block';
        });
    </script>
 </body>
 </html>