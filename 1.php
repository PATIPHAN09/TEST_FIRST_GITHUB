<?php
header('Content-Type: text/html; charset: utf-8');
date_default_timezone_set('Asia/Bangkok');

include 'navbar.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Mitr:wght@200&display=swap");

        .container {
            margin-top: 20px;
        }

        img {
            max-height: 180px;
            max-width: 180px;
            width: 100%;
        }

        * {
            font-family: "Mitr", sans-serif;
        }

        label {
            font-weight: bold;
            font-size: 1.4rem;
        }
    </style>
</head>

<body>
   
    <div class="container">
        <form action="">
            <!-- เริ่มต้น แถวที่ 1 -->
            <div class="row">
                <!-- เริ่มต้น ช่องที่ 1 -->
                <div class="col-md-5">
                    <div class="col-md-12 well">
                        <label for="" style="">ข้อมูลส่วนตัว</label>

                        <div class="form-row">
                            <div class="form-group col-md-6" style="text-align: center; padding-top:15px">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputPassword4">รหัสพนักงาน</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="รหัสพนักงาน">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อ</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="ชื่อพนักงาน">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">นามสกุล</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="นามสกุล">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">วัน/เดือน/ปีเกิด</label>
                                <input type="date" class="form-control" id="inputCity" placeholder="วัน/เดือน/ปีเกิด">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputCity">อายุ</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="ปี">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputZip">เลือด</label>
                                <input type="text" class="form-control" id="inputZip" placeholder="เลือด">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">แผนก</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="แผนก">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCity">น้ำหนัก</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="กก.">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">ส่วนสูง</label>
                                <input type="text" class="form-control" id="inputZip" placeholder="ซม.">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">เลขบัตรประชาชน</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="เลขบัตรประชาชน">
                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label for="inputAddress">ประกันสังคม</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="โรงพยาบาลประกันสังคม">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- จบ ช่องที่ 1 -->
                </div>

                <!-- เริ่มต้น ช่องที่ 2 -->
                <div class="col-md-7 ">
                    <div class="col-md-12 well">
                        <label>NURSE NOTE</label>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>เวลาใช้บริการ</label>
                                    <input type="text" class="form-control" value="<?php echo date("H:i:s"); ?>" readonly >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>ถึงเวลา</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>สถานที่เกิดเหตุ</label>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>ในงาน</option>
                                        <option>นอกงาน</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>อาการที่พบ</label>
                                    <textarea rows="9" class="form-control" placeholder="กรุณากรอกอาการที่พบ"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>รายละเอียดการรักษา</label>
                                    <textarea rows="9" class="form-control" placeholder="รายละเอียดการรักษา"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <label>ยังไงกับมึงต่อดี</label>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>นอนพักรักษารากฟัน</option>
                                        <option>หยุดงาน</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>สถานะการรักษา</label>
                                <div class="form-group">
                                    <select class="form-control" id="sel1">
                                        <option>รักษาได้</option>
                                        <option>ส่งโรงพยาบาล</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>โรงพยาบาล</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ผุ้ทำการบันทึกและรักษา</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- จบช่องที่ 2 -->
                </div>

                <!-- จบ แถวที่ 1 -->
            </div>

            <!-- #@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@#@ -->

            <div class="row">
                <div class="col-md-5 ">
                    <div class="col-md-12 well ">
                        <label for="">ประวัติสุขภาพ</label>
                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">ประวัติการเข้ารักษา</label>
                                <textarea rows="2" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">ประวัติการผ่าตัด</label>
                                <textarea rows="2" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">ประวัติแพ้ยา</label>
                                <textarea rows="2" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="col-md-12 well">
                        <label for="">ประวัติการเข้ารักษา</label>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>วันเดือนปี</th>
                                    <th>รายละเอียด</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11/02/60</td>
                                    <td>บาด</td>

                                </tr>
                                <tr>
                                    <td>11/02/61</td>
                                    <td>สองบาท</td>

                                </tr>
                                <tr>
                                    <td>11/02/62</td>
                                    <td>ก็เล่นนะ</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>

        </form>
    </div>

</body>

</html>