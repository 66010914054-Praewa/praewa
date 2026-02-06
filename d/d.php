<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฟอร์มรับข้อมูล - แบบสีสันสดใส</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb, #a18cd1, #fbc2eb, #fccb90, #a1c4fd, #c2e9fb);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            font-family: "Prompt", sans-serif;
        }

        @keyframes gradientMove {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        .form-container {
            max-width: 650px;
            margin-top: 70px;
            padding: 35px;
            background: rgba(255,255,255,0.25);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            animation: fadeIn 0.7s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h1 {
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }

        .btn-gradient {
            background: linear-gradient(45deg, #ff9a9e, #fad0c4);
            border: none;
            color: #fff;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .btn-gradient:hover {
            opacity: 0.9;
        }

        .card-output {
            background: rgba(255,255,255,0.5);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            animation: fadeIn 0.6s ease;
        }
    </style>
</head>

<body>

    <div class="container form-container">
        <h1 class="text-center mb-4">🌈 66010914054 แพรวา ชาวดอน (แพร) Chatgpt🌟</h1>

        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label text-white">ชื่อ-สกุล</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">เบอร์โทร *</label>
                <input type="text" class="form-control" name="phone" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" name="height" min="100" max="200" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">ที่อยู่</label>
                <textarea class="form-control" name="address" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" name="birthday">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" name="color">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">สาขาวิชา</label>
                <select class="form-select" name="major">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="d-flex flex-wrap gap-2 mt-4">
                <button type="submit" name="Submit" class="btn btn-gradient">
                    <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                </button>

                <button type="reset" class="btn btn-light">
                    <i class="bi bi-x-circle"></i> ยกเลิก
                </button>

                <button type="button" class="btn btn-info text-white"
                    onClick="window.location='https://www.msu.ac.th';">
                    <i class="bi bi-globe"></i> MSU
                </button>

                <button type="button" class="btn btn-warning"
                    onMouseOver="alert('Hello 🌟')">
                    <i class="bi bi-emoji-smile-fill"></i> Hello
                </button>

                <button type="button" class="btn btn-light border" onClick="window.print();">
                    <i class="bi bi-printer-fill"></i> พิมพ์
                </button>
            </div>
        </form>

        <hr class="my-4 text-white">

        <?php
        if(isset($_POST['Submit'])) {
            echo "<div class='card-output'>";
            echo "<h4 class='text-primary'><i class='bi bi-info-circle-fill'></i> ข้อมูลที่ส่งมา</h4>";
            echo "<p><strong>ชื่อ-สกุล:</strong> {$_POST['fullname']}</p>";
            echo "<p><strong>เบอร์โทร:</strong> {$_POST['phone']}</p>";
            echo "<p><strong>ส่วนสูง:</strong> {$_POST['height']} ซม.</p>";
            echo "<p><strong>ที่อยู่:</strong> ".nl2br($_POST['address'])."</p>";
            echo "<p><strong>วันเกิด:</strong> {$_POST['birthday']}</p>";
            echo "<p><strong>สีที่ชอบ:</strong> <span class='badge' style='background:{$_POST['color']}'>{$_POST['color']}</span></p>";
            echo "<p><strong>สาขาวิชา:</strong> <span class='badge bg-success'>{$_POST['major']}</span></p>";
            echo "</div>";
        }
        ?>
    </div>

</body>
</html>
