<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>งาน K - แพรวา ชาวดอน 66010914054</title>
    <style>
        body { font-family: 'Tahoma', sans-serif; text-align: center; margin-top: 50px; }
        .info { margin-bottom: 20px; font-size: 1.2em; }
        
        /* สไตล์ของปุ่ม */
        .btn {
            padding: 10px 25px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin: 10px;
            color: white;
            transition: 0.3s;
        }
        .btn-green { background-color: #28a745; } /* สีเขียว */
        .btn-orange { background-color: #ffc107; color: black; } /* สีส้ม/เหลือง */
        
        .btn:hover { opacity: 0.8; }
        
        #display-area { margin-top: 30px; }
        img { max-width: 300px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <div class="info">
        <h1>งาน K</h1>
        <p><strong>รหัสนิสิต:</strong> </p>
        <p><strong>ชื่อ-นามสกุล:</strong> </p>
    </div>

    <button class="btn btn-green" onclick="showImage('me.jpg')">รูปตัวเอง</button>
    <button class="btn btn-orange" onclick="showImage('teacher.jpg')">รูปอาจารย์ผู้สอน</button>

    <div id="display-area">
        <p>คลิกปุ่มเพื่อแสดงรูปภาพ</p>
    </div>

    <script>
        function showImage(fileName) {
            const displayArea = document.getElementById('display-area');
            // เปลี่ยนเนื้อหาใน div เป็นแท็ก img
            displayArea.innerHTML = `<img src="${fileName}" alt="Loading...">`;
        }
    </script>

</body>
</html>