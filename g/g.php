<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914054 แพรวา ชาวดอน (แพร)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f4f7f6; font-family: 'Sarabun', sans-serif; }
        .chart-container { position: relative; height: 300px; width: 100%; }
    </style>
</head>
<body>

<div class="container py-4">
    <div class="bg-white p-4 shadow-sm rounded-4">
        <h2 class="text-center mb-4 text-primary">66010914054 แพรวา ชาวดอน (แพร)</h2>

        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <h6 class="text-secondary mb-3">ยอดขายรายเดือน (Bar)</h6>
                        <div class="chart-container">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 bg-light">
                    <div class="card-body">
                        <h6 class="text-secondary mb-3">สัดส่วนยอดขาย (Donut)</h6>
                        <div class="chart-container">
                            <canvas id="donutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">เดือน</th>
                        <th class="text-end">ยอดขายรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once("connectdb.php");
                $sql = "SELECT MONTH(p_date) AS Month, SUM(p_amount) AS Total_Sales FROM popsupermarket GROUP BY MONTH(p_date) ORDER BY Month";
                $rs = mysqli_query($conn, $sql);
                
                $m_th = ["","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค."];
                $labels = [];
                $data_sales = [];

                while ($data = mysqli_fetch_array($rs)) {
                    $month_name = $m_th[$data['Month']];
                    $labels[] = $month_name;
                    $data_sales[] = $data['Total_Sales'];
                ?>
                    <tr>
                        <td class="text-center fw-bold"><?php echo $month_name; ?></td>
                        <td class="text-end text-success fw-bold"><?php echo number_format($data['Total_Sales'], 0); ?></td>
                    </tr>
                <?php } mysqli_close($conn); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const sales = <?php echo json_encode($data_sales); ?>;
    const colors = ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796', '#5a5c69', '#f8f9fc', '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e'];

    // Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{ label: 'ยอดขาย', data: sales, backgroundColor: '#4e73df', borderRadius: 5 }]
        },
        options: { maintainAspectRatio: false, plugins: { legend: { display: false } } }
    });

    // Donut Chart
    new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{ data: sales, backgroundColor: colors, hoverOffset: 10 }]
        },
        options: { maintainAspectRatio: false, cutout: '70%' }
    });
</script>

</body>
</html>