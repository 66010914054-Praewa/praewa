<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แบบฟอร์มสมัครงาน -บริษัท ABC จำกัด</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            background-size: cover;
            font-family: 'Prompt', sans-serif;
        }

        .form-container {
            max-width: 750px;
            margin-top: 70px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.25);
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

        h1 {
            font-weight: 700;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
        }

        .btn-gradient {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: #fff;
            border: none;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-gradient:hover {
            opacity: 0.9;
            color: #fff;
        }

        .card-output {
            background: rgba(255, 255, 255, 0.6);
            padding: 25px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            margin-top: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>

    <div class="container form-container">
        <h1 class="text-center text-white mb-4">📄 แบบฟอร์มสมัครงาน<br>บริษัท ABC จำกัด</h1>

        <form action="f.php" method="post">
            <!-- ตำแหน่งที่ต้องการสมัคร -->
            <div class="mb-3">
                <label class="form-label text-white">ตำแหน่งที่ต้องการสมัคร</label>
                <select class="form-select" name="position" required>
                    <option value="">-- เลือกตำแหน่งงาน --</option>
                    <option>HR Officer</option>
                    <option>Software Developer</option>
                    <option>Marketing Officer</option>
                    <option>Graphic Designer</option>
                    <option>Accounting Assistant</option>
                </select>
            </div>

            <!-- คำนำหน้า -->
            <div class="mb-3">
                <label class="form-label text-white">คำนำหน้าชื่อ</label>
                <select class="form-select" name="prefix" required>
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                </select>
            </div>

            <!-- ชื่อ-สกุล -->
            <div class="mb-3">
                <label class="form-label text-white">ชื่อ - สกุล</label>
                <input type="text" class="form-control" name="fullname" required>
            </div>

            <!-- วันเดือนปีเกิด -->
            <div class="mb-3">
                <label class="form-label text-white">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" name="birthday" required>
            </div>

            <!-- ระดับการศึกษา -->
            <div class="mb-3">
                <label class="form-label text-white">ระดับการศึกษา</label>
                <select class="form-select" name="education" required>
                    <option>มัธยมศึกษาตอนปลาย</option>
                    <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
                    <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                    <option>ปริญญาตรี</option>
                    <option>ปริญญาโท</option>
                </select>
            </div>

            <!-- ความสามารถพิเศษ -->
            <div class="mb-3">
                <label class="form-label text-white">ความสามารถพิเศษ</label>
                <textarea class="form-control" name="skills" rows="3" placeholder="เช่น พูดอังกฤษได้ดี ใช้ Photoshop คล่อง"></textarea>
            </div>

            <!-- ประสบการณ์ทำงาน -->
            <div class="mb-3">
                <label class="form-label text-white">ประสบการณ์ทำงาน</label>
                <textarea class="form-control" name="experience" rows="3" placeholder="กรอกประสบการณ์ หรือระบุว่า 'ไม่มี'"></textarea>
            </div>

            <!-- ปุ่มส่ง -->
            <button type="submit" name="Submit" class="btn btn-gradient mt-3">
                <i class="bi bi-send-fill"></i> ส่งใบสมัคร
            </button>
        </form>

        <!-- แสดงผล -->
        <?php
        if (isset($_POST['Submit'])) {
            echo "<div class='card-output'>";
            echo "<h4 class='text-primary'><i class='bi bi-person-check-fill'></i> ข้อมูลผู้สมัคร</h4>";
            echo "<p><strong>ตำแหน่งที่สมัคร:</strong> {$_POST['position']}</p>";
            echo "<p><strong>ชื่อ:</strong> {$_POST['prefix']} {$_POST['fullname']}</p>";
            echo "<p><strong>วันเกิด:</strong> {$_POST['birthday']}</p>";
            echo "<p><strong>ระดับการศึกษา:</strong> {$_POST['education']}</p>";
            echo "<p><strong>ความสามารถพิเศษ:</strong> ".nl2br($_POST['skills'])."</p>";
            echo "<p><strong>ประสบการณ์ทำงาน:</strong> ".nl2br($_POST['experience'])."</p>";
            echo "</div>";
        }
        ?>

    </div>
</body>

</html>
