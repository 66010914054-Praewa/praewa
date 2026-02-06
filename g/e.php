<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <title>66010914054 แพรวา ชาวดอน (แพร)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light p-4">

<div class="container bg-white p-4 shadow-sm rounded">
    <h1 class="text-center mb-4">66010914054 แพรวา ชาวดอน (แพร)</h1>

    <div class="row mb-5">
        <div class="col-md-7">
            <h5 class="text-center">ยอดขายรายประเทศ (Bar)</h5>
            <canvas id="barChart"></canvas>
        </div>
        <div class="col-md-5">
            <h5 class="text-center">สัดส่วนยอดขาย (Pie)</h5>
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ประเทศ</th>
                    <th>ยอดขาย</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include_once("connectdb.php");
            $sql = "SELECT `p_country`, SUM(`p_amount`) AS total FROM `popsupermarket` GROUP BY `p_country` ORDER BY total DESC";
            $rs = mysqli_query($conn, $sql);
            
            $labels = [];
            $data_values = [];
            
            while ($data = mysqli_fetch_array($rs)) {
                $labels[] = $data['p_country'];
                $data_values[] = $data['total'];
            ?>
                <tr>
                    <td><?php echo $data['p_country']; ?></td>
                    <td align="right"><?php echo number_format($data['total'], 0); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($data_values); ?>;
    const colors = ['#0d6efd', '#198754', '#ffc107', '#dc3545', '#6610f2', '#fd7e14'];

    // Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{ label: 'ยอดขาย', data: dataValues, backgroundColor: colors }]
        }
    });

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{ data: dataValues, backgroundColor: colors }]
        }
    });
</script>

</body>
</html>