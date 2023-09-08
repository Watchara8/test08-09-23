<?php
include('func.php');
$func = new Func();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <label for="">Topic 1</label>
                    <div>
                        <table class="table table-bordered">
                            <tr>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2">3</td>
                            </tr>
                            <tr>
                                <td rowspan="2">4</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>6</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 2</label>
                    <div>
                        <div>
                            ♦
                            <a href="#">Click Me</a>
                            <p>
                                a:link,a:visited{ //กำหนด style ให้กับ tag a
                            </p>
                            <p>
                                color: #400080; //กำหนดสีตัวอักษร
                            </p>
                            <p>
                                background: #ffffd8; //กำหนดพื้นหลัง
                            </p>
                            }
                        </div>
                        <hr>
                        <div>
                            <div class="answer">
                                ♦ Answer
                            </div>
                            <p>.answer { //สร้าง class ชื่อ answer</p>
                            <p> color: red; //กำหนดสีตัวอักษร</p>
                            }
                        </div>
                        <hr>
                        <div>
                            <div id="copyright">♦ Copyright &copy; 2023</div>
                            <p>#copyright {</p> //สร้างstyle โดยอ้างอิงจาก ID
                            <p>font-style: italic;</p> //กำหนดรูปแบบของตัวอักษร
                            <p>font-size: smaller;</p> //กำหนดขนาดของตัวอักษร
                            }
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 3</label>
                    <p>SELECT OrderId,Discount FROM Order_Details WHERE Discount > 10000</p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 4</label>
                    <p>SELECT T1.TerritoryDescription,T2.RegionDescription FROM Territories T1</p>
                    <p>JOIN Region T2</p>
                    <p>ON T1.RegionalID = T2.RegionalID</p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 5</label>
                    <p>SELECT TB1.DocumentNo,TB1.ReferenceNo,TB1.DocumentDate,TB1.Subject,TB1.Document_issuer,TB1.requester,TB1.total_amount FROM (</p>
                    <p>SELECT *,(SELECT EmployeeName FROM SuUser WHERE TB.CreatorID = UserID LIMIT 1) AS Document_issuer,</p>
                    <p>(SELECT EmployeeName FROM SuUser WHERE TB.RequesterID = UserID LIMIT 1) AS requester ,</p>
                    <p>(SELECT Amount FROM AdvanceDocument WHERE TB.DocumentNo = DocumentID LIMIT 1) AS total_amount</p>
                    <p>FROM (</p>
                    <p>SELECT * FROM Document)TB)TB1 </p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 6</label>
                    <div>
                        <div style="display: flex; grid-gap:5px;">
                            <p>โปรดระบุวันที่ต้องการทราบ</p>
                            <input type="text" style="width: 20%;" class="form-control" id="day_input" oninput="this.value = this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1')">
                            <button class="btn btn-primary" onclick="callwater()">คำนวณ</button>
                        </div>
                        <div id="showDetailWater">

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 7</label>
                    <div>
                        <div style="display: flex; grid-gap:5px;">
                            <p>Input</p>
                            <input type="text" style="width: 20%;" class="form-control" id="square" oninput="this.value = this.value = this.value.replace(/[^1-9]/g, '').replace(/(\..*?)\..*/g, '$1')" maxlength="1">
                            <button class="btn btn-primary" onclick="square()">Click</button>
                        </div>
                        <div id="showsquare">

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 8</label>
                    <div style="margin-left: 20px;">
                        <label for="">Topic 8.1</label>
                        <p>Datatype ที่เหมาะสม : array
                            $matrix = [
                            [1, 2, 3],
                            [4, 5, 6],
                            [7, 8, 9]
                            ];
                        </p>
                    </div>
                    <hr>
                    <div style="margin-left: 20px;">
                        <label for="">Topic 8.2</label>
                        <div>
                            <?php
                            $A = array(
                                array(1, 2, 3),
                                array(4, 5, 6),
                                array(7, 8, 9)
                            );
                            // $A = array(
                            //     array(1, 2),
                            //     array(3, 4)
                            // );
                            $N = 3;
                            $determinant = $func->Determinant($A, $N);
                            echo 'A = <pre>';
                            print_r($A);
                            echo '</pre><br>';
                            echo 'N =' . $N . '<br>';
                            echo "Determinant ของเมทริกซ์ A คือ: " . $determinant;
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 9</label>
                    <div>
                        <p>ตอบ : 3) 19/100</p>
                        <p>ความน่าจะเป็น = จำนวนเหตุการณ์ / เหตุการณ์ทั้งหมด</p>
                        <p>ความน่าจะเป็น = 19 (01,10,11,12,13,14,15,16,17,18,19,21,31,41,51,61,71,81,91 ยกตัวอย่างเลข 1) / 100 (ซึงได้จากโจทย์)</p>

                    </div>
                </div>
                <div class="row">
                    <label for="">Topic 10</label>
                    <p>ตอบ : 1) 1/60</p>
                    <p>ความน่าจะเป็น = จำนวนเหตุการณ์ / เหตุการณ์ทั้งหมด</p>
                    <p>จำนวนเหตุการณ์ จากการหยิบ 3 จำนวนโดยที่ ตัวเลข ไม่มากกว่า 5 = 123,124,125,134,135,145,234,235,245,345 </p>
                    <p>จำนวนเหตุการณ์ จากการหยิบ 3 จำนวนโดยที่ ตัวเลข ไม่มากกว่า 5 และ ผลบวก มีค่าเท่ากับ 10 = 145,235 </p>
                    <p>เหตุการณ์ทั้งหมด = 120 </p>
                    <p>ความน่าจะเป็น = 2(145,235 ) / 120 </p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 11</label>
                    <p>100 นาที / 1 ชั่วโมง 40 นาที</p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 12</label>
                    <p>0.10 ดอลลาร์</p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 13</label>
                    <p>24 วัน</p>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 14</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 15</label>
                    <div>
                        <p>หน้าจอควรมี 1 หน้่าจอส่วน User ,2 หน้าจอส่วน Admin</p>
                        <div>
                            <div style="display: flex; grid-gap:20px;">
                                <label for="">ชื่อ</label>
                                <input type="text" class="form-control">
                                <label for="">นามสกุล</label>
                                <input type="text" class="form-control">
                                <label for="">เพศ</label>
                                <input type="text" class="form-control">
                                <label for="">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mt-1">
                                <label for="">ที่อยู่</label>
                                <textarea class="form-control" name="" id="" rows="2"></textarea>
                            </div>
                            <div class="mt-1">
                                <label for="">รหัสคอร์สที่สนใจ</label>
                                <input type="text" class="form-control">
                                <label for="">หน่วยงาน/สถาบันการศึกษา</label>
                                <input type="text" class="form-control">
                                <label for="">กระทรวง / คณะ</label>
                                <input type="text" class="form-control">
                                <label for="">กรม / ภาควิชา</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mt-1">
                                <label for="">ตำแหน่ง</label>
                                <input type="text" class="form-control">
                                <label for="">อีเมลล์</label>
                                <input type="text" class="form-control">
                                <label for="">กรม / ภาควิชา</label>
                                <input type="text" class="form-control">
                            </div>
<button class="btn btn-success mt-1" style="float: right;">บันทึก</button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 16</label>
                    <section>
                        <h5>Purchase Order (PO - ใบสั่งซื้อ):</h5>
                        <p>ความหมาย: Purchase Order เป็นเอกสารที่บริษัทส่งให้กับผู้จัดจำหน่ายหรือผู้ขายเพื่อร้องขอสินค้าหรือบริการในปริมาณและราคาที่ระบุในเอกสารนี้.</p>
                        <p>ความสัมพันธ์: PO เป็นขั้นตอนเริ่มต้นของกระบวนการซื้อขาย มันเป็นเส้นทางการส่งคำสั่งซื้อจากลูกค้า (ผู้ซื้อ) ไปยังผู้ขาย (ผู้จัดจำหน่าย) เพื่อขอสินค้าหรือบริการ.</p>
                    </section>
                    <section>
                        <h5>Sale Order (SO - ใบสั่งขาย):</h5>
                        <p>ความหมาย: Sale Order เป็นเอกสารที่บริษัทสร้างขึ้นเมื่อมีคำสั่งซื้อจริงจากลูกค้า ใน SO ระบุรายละเอียดของสินค้าหรือบริการที่ลูกค้าสั่งซื้อรวมถึงราคาและเงื่อนไขการจัดส่ง.</p>
                        <p>ความสัมพันธ์: SO เป็นการตอบรับ Purchase Order ของลูกค้า และเป็นขั้นตอนเริ่มต้นของกระบวนการผลิตหรือการบริการ.</p>

                    </section>
                    <section>
                        <h5>Account Receivable (AR - บัญชีลูกหนี้):</h5>
                        <p>ความหมาย: Account Receivable เป็นบัญชีที่บันทึกเงินที่ลูกค้ายังคงค้างชำระต่อบริษัท นั่นคือเงินที่ถูกส่งให้บริษัทจากลูกค้าตาม Sale Order แต่ยังไม่ได้รับการชำระ.</p>
                        <p>ความสัมพันธ์: AR เกิดขึ้นจากการขายสินค้าหรือบริการใน Sale Order และมีความสัมพันธ์กับการชำระเงินจากลูกค้าในอนาคต.</p>

                    </section>
                    <section>
                        <h5>Account Payable (AP - บัญชีเจ้าหนี้):</h5>
                        <p>ความหมาย: Account Payable เป็นบัญชีที่บันทึกเงินที่บริษัทยังคงค้างชำระต่อผู้จัดจำหน่ายหรือผู้ขาย นั่นคือเงินที่บริษัทต้องจ่ายให้กับผู้จัดจำหน่ายตาม Purchase Order แต่ยังไม่ได้ชำระ.</p>
                        <p>ความสัมพันธ์: AP เกิดขึ้นจากการสั่งซื้อสินค้าหรือบริการใน Purchase Order และมีความสัมพันธ์กับกระบวนการชำระเงินให้แก่ผู้จัดจำหน่าย.</p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</html>