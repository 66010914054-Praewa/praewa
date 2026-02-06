<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>ผลการสมัครงาน - บริษัท ABC จำกัด</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #66a6ff, #89f7fe);
            background-size: cover;
            font-family: 'Prompt', sans-serif;
        }

        .result-card {
            max-width: 750px;
            margin: 70px auto;
            background: rgba(255, 255, 255, 0.5);
            padding: 35px;
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            animation: fadeIn 0.7s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-back {
            background: linear-gradient(45deg, #ff512f, #dd2476);
            color: #fff;
            border: none;
        }

        .btn-back:hover {
            opacity: 0.9;
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="result-card">
        <h2 class="text-center text-primary mb-4">
            <i class="bi bi-person-vcard-fill"></i> ข้อมูลการสมัครงาน
        </h2>

        <?php
        if (!isset($_POST['Submit'])) {
            echo "<div class='alert alert-danger'>❌ ไม่มีข้อมูลที่ส่งมา</div>";
        } else {

            // ป้องกัน XSS
            $position = htmlspecialchars($_POST['position']);
            $prefix = htmlspecialchars($_POST['prefix']);
            $fullname = htmlspecialchars($_POST['fullname']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $education = htmlspecialchars($_POST['education']);
            $skills = nl2br(htmlspecialchars($_POST['skills']));
            $experience = nl2br(htmlspecialchars($_POST['experience']));

            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> $position</p>";
            echo "<p><strong>ชื่อ - สกุล:</strong> $prefix $fullname</p>";
            echo "<p><strong>วันเดือนปีเกิด:</strong> $birthday</p>";
            echo "<p><strong>ระดับการศึกษา:</strong> $education</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong><br> $skills</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong><br> $experience</p>";
        }
        ?>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-back px-4">
                <i class="bi bi-arrow-left-circle"></i> กลับไปหน้าฟอร์ม
            </a>
        </div>
    </div>

</body>

</html>
