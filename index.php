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
                </div>
                <div class="row">
                    <label for="">Topic 10</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 11</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 12</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 13</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 14</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 15</label>
                </div>
                <hr>
                <div class="row">
                    <label for="">Topic 16</label>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</html>