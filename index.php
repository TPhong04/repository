<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Cửa Hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <img src="vida.jpg" alt="Header Image" class="img-fluid w-100">
    </header>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-primary sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column text-white p-3">
                        <li class="nav-item"><a class="nav-link text-white" href="index.html">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Thương hiệu</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Loại sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="sanpham.html">Sản phẩm</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Nhân viên</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="khohang.html">Kho hàng</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="khachhang.html">Khách hàng</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="thongke.html">Thống kê</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-- Main content -->
            <main class="col-md-10 ms-sm-auto px-4">
                <h2 class="text-center my-3 text-danger">SẢN PHẨM</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Màu sắc</th>
                            <th>Loại</th>
                            <th>Thương hiệu</th>
                            <th>Kích thước</th>
                            <th>Hình ảnh</th>
                            <th>Đơn giá</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="product-list">
                        <?php
                        {
                            // Hiển thị dữ liệu sản phẩm
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["Masanpham"] . "</td>";
                                echo "<td>" . $row["Tensanpham"] . "</td>";
                                echo "<td>" . $row["Mausac"] . "</td>";
                                echo "<td>" . $row["Loai"] . "</td>";
                                echo "<td>" . $row["Thuonghieu"] . "</td>";
                                echo "<td>" . $row["Kichthuoc"] . "</td>";
                                echo "<td><img src='" . $row["Hinhanh"] . "' alt='Product Image' class='img-fluid' width='50'></td>";
                                echo "<td>" . $row["Dongia"] . "</td>";
                                echo "<td><button class='btn btn-primary'>Sửa</button> <button class='btn btn-danger'>Xóa</button></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center'>Không có sản phẩm nào</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>

                <!-- Inventory Management -->
                <h2 class="text-center my-3 text-danger">QUẢN LÝ KHO</h2>
                <div class="mb-3">
                    <button class="btn btn-success" onclick="showAddInventoryForm()">Nhập hàng</button>
                    <button class="btn btn-warning" onclick="showExportInventoryForm()">Xuất hàng</button>
                </div>
                <div id="inventory-management">
                    <!-- Inventory forms and tables will be here -->
                </div>

                <!-- Reports -->
                <h2 class="text-center my-3 text-danger">BÁO CÁO</h2>
                <div id="reports">
                    <!-- Reports content will be here -->
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showAddProductForm() {
            document.getElementById('add-product-form').style.display = 'block';
        }

        function addProduct() {
            // Logic to add product
        }

        function showAddInventoryForm() {
            // Logic to show add inventory form
        }

        function showExportInventoryForm() {
            // Logic to show export inventory form
        }
    </script>
</body>
</html>
