<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914054 แพรวา ชาวดอน (แพร)</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
    <style>
        body { padding: 20px; background-color: #f8f9fa; }
        .card { box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .table img { border-radius: 5px; object-fit: cover; }
    </style>
</head>

<body>
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">ข้อมูลการขาย - 66010914054 แพรวา ชาวดอน (แพร)</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myDataTable" class="table table-striped table-hover border" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>Order ID</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th>จำนวนเงิน</th>
                            <th class="text-center">รูปภาพ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include_once("connectdb.php");
                    $sql = "SELECT * FROM `popsupermarket`";
                    $rs = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($rs)) {
                    ?>
                        <tr>
                            <td><?php echo $data['p_order_id']; ?></td>
                            <td><?php echo $data['p_product_name']; ?></td>
                            <td><span class="badge bg-info text-dark"><?php echo $data['p_category']; ?></span></td>
                            <td><?php echo $data['p_date']; ?></td>
                            <td><?php echo $data['p_country']; ?></td>
                            <td align="right"><?php echo number_format($data['p_amount'], 0); ?></td>
                            <td align="center">
                                <img src="images/<?php echo $data['p_product_name']; ?>.jpg" 
                                     width="50" height="50" 
                                     onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                            </td>
                        </tr>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myDataTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" // เมนูภาษาไทย
            },
            "pageLength": 50// แสดงหน้าละ 10 แถว
        });
    });
</script>

</body>
</html>