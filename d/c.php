<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>66010914054 แพรวา ชาวดอน (แพร) - Gemini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* สีพื้นหลังอ่อนๆ ของ Bootstrap */
        }
        .form-container {
            max-width: 600px;
            margin-top: 50px;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #0d6efd; /* สีน้ำเงินหลักของ Bootstrap */
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }
        .output-box {
            background-color: #e9ecef;
            border-left: 5px solid #0dcaf0; /* สีฟ้าอ่อนสำหรับเน้น */
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        /* ปรับขนาด input[type="color"] ให้ดูดีขึ้น */
        input[type="color"] {
            height: 40px;
            width: 100%;
            padding: 0;
            border: 1px solid #ced4da;
            border-radius: 0.375rem; /* ตาม Bootstrap */
        }
    </style>
</head>

<body>
    <div class="container form-container">
        <h1 class="text-center">ฟอร์มรับข้อมูล - 66010914054 แพรวา ชาวดอน (แพร)- Gemini</h1>

        <form method="post" action="">
            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-สกุล</label>
                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">ส่วนสูง (ซม.)</label>
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="Choose your color">
            </div>

            <div class="mb-3">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select class="form-select" id="major" name="major">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>
            
            <div class="d-grid gap-2 d-md-block mt-4">
                <button type="submit" name="Submit" class="btn btn-primary me-2">
                    <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                </button>
                <button type="reset" class="btn btn-secondary me-2">ยกเลิก</button>
                <button type="button" class="btn btn-info text-white me-2" onClick="window.location='https://www.msu.ac.th/th/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81-n/';">Go to MSU</button>
                <button type="button" class="btn btn-warning me-2" onMouseOver="alert('Hi')">Hello</button>
                <button type="button" class="btn btn-light border" onClick="window.print();">
                    <i class="bi bi-printer-fill"></i> พิมพ์
                </button>
            </div>
        </form>

        <hr class="my-4">

        <?php
        if(isset($_POST['Submit'])) {
            $fullname = htmlspecialchars($_POST['fullname']);
            $phone = htmlspecialchars($_POST['phone']);
            $height = htmlspecialchars($_POST['height']);
            $address = htmlspecialchars($_POST['address']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $color = htmlspecialchars($_POST['color']);
            $major = htmlspecialchars($_POST['major']);

            // ส่วนแสดงผล
            echo "<div class='output-box'>";
            echo "<h4 class='text-primary'>✅ ข้อมูลที่ส่งมา</h4>";
            echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
            echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
            echo "<p><strong>ส่วนสูง:</strong> $height ซม.</p>";
            echo "<p><strong>ที่อยู่:</strong> ".nl2br($address)."</p>";
            echo "<p><strong>วันเกิด:</strong> $birthday</p>";
            // แสดงสีที่เลือกเป็น Badge ของ Bootstrap
            echo "<p><strong>สีที่ชอบ:</strong> <span class='badge' style='background-color:$color; color: " . (hexdec(substr($color, 1, 2)) > 150 ? '#000' : '#fff') . ";'>$color</span></p>";
            echo "<p><strong>สาขาวิชา:</strong> <span class='badge bg-success'>$major</span></p>";
            echo "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>