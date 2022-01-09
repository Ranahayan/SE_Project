<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="ICON.png">
    <!-- <script src="loan_app.js"></script> -->
    <link rel="stylesheet" href="laon_app.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Loan Management system</title>


</head>

<body>
    <div id="system">
        Loan Management System
    </div>
    <div id="maincontainer">
        <div id="container">
            <div id="menu">
                <div class="items1">

                </div>
                <div class="items">
                    <div id="act0" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="/SE_project/home/home.php">Dashbord</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act1" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a3 class="ddd" href="#">Loans</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act2" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Types</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act3" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Plans</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act4" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                            <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Payments</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act5" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </div>
                    <div class="linkk">
                        <a id="special" href="/SE_project/borrower/main_borrower.php">Borrowers &nbsp; <i class="fa fa-caret-left"></i></a>
                        <div class="link-content">
                            <a class="drop" href="">Online Borrowers</a>
                            <a class="drop" href="">Manual Borrowers</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div id="act6" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="/SE_project/employee/main_emp.php">Employees</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="container2">
            <div id="page">
                &nbsp; Loan
                <div id="refersh">
                    <button onclick="reload()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                            <path style="font-weight: 50;" fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                            <path style="font-weight: 50;" d="M8 4.466V.534a.26.26 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="main">

                <div id="inner-container">
                    <div id="inner_top">
                        <h4 id="awara">LOAN LIST</h4>
                        <form action="" method="POST">
                            <div class="search">
                                <input required type="number" class="form-control" id="loan_sear" value="" min="1" name="search_id" placeholder="Search">
                                <button type="submit" name="search" id="search_butt" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg></button>

                            </div>
                        </form>


                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "loan") or die("Connection error");
                        //borrower data
                        $borrower_id = "SELECT ID,Name FROM `borrower`";
                        $borrower_id_result = mysqli_query($conn, $borrower_id);

                        //plan data
                        $plan_id = "SELECT * FROM `loan_plan`";
                        $plan_id_result = mysqli_query($conn, $plan_id);

                        //Loan type
                        $type_id = "SELECT * FROM `loan_type`";
                        $type_id_result = mysqli_query($conn, $type_id);
                        ?>
                        <script>
                            let select = 1;
                        </script>
                        <?php

                        if (mysqli_num_rows($borrower_id_result) == 0 || mysqli_num_rows($plan_id_result) == 0 || mysqli_num_rows($type_id_result) == 0) {
                        ?>
                            <input type="button" id="create_app" value=" + Create new application" onclick="pop_form(1)">

                        <?php
                        } else {

                        ?>
                            <input type="button" id="create_app" value=" + Create new application" onclick="pop_form(0)">

                        <?php

                        }

                        ?>

                    </div>
                    <br>

                    <div id="show">
                        <p id="showw"><strong id="showww">PLEASE ENTER BORROWER/LOAN PLAN/LOAN TYPE</strong> </p>
                    </div>
                    <div style="display: none;" id="sure">
                        <form action="" method="POST">
                            <p class="showww"><strong>ARE YOU SURE TO DELETE THE APPLICATION</strong> </p>
                            <input type="hidden" name="del_loan" id="del_loan">
                            <div>
                                <input style="width: 90px; display: inline" type="submit" name="id_submit" class="btn btn-primary" value="OK">
                                <input style="width: 90px; display: inline" type="submit" name="cancel_submit" class="btn btn-primary" value="CLOSE" onclick="delete_loan_cancel()">
                            </div>

                        </form>

                    </div>
                    <?php
                    if (isset($_POST['id_submit'])) {
                        $id = $_POST['del_loan'];
                        $del_loann = "DELETE FROM `loan_data` WHERE ID='$id'";
                        $del_loan_result = mysqli_query($conn, $del_loann);
                        if ($del_loan_result) {
                    ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATION HAS BEEN DELETED SUCCESSFULLY";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATION DELETION HAS BEEN FAILED";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>
                    <?php

                        }
                    }
                    ?>
                    <div id="form1">

                        <div id="mdform1" class="mdform">
                            <div id="from_title">
                                <strong> Loan Application</strong>
                            </div>
                            <form action="loan_app.php" method="POST">
                                <div class="form-row">
                                    <div class="select1">
                                        <div class="slect_content">
                                            <label for="borrower"><strong>Borrower</strong></label>
                                            <select required class="form-control" id="borrower" name="borrower_1">
                                                <!-- <option value="">Select anyone</option> -->
                                                <?php
                                                while ($row1 = mysqli_fetch_assoc($borrower_id_result)) {
                                                ?>
                                                    <option selected value="<?php echo $row1['ID']; ?>"><?php echo $row1['ID']; ?> &nbsp; &nbsp; [&nbsp;<?php echo $row1['Name']; ?>&nbsp;]</option>

                                                <?php
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="select1">
                                        <div class="slect_content">
                                            <label for="plan"><strong>Loan plan</strong></label>
                                            <select class="form-control" id="plan" name="plan">
                                                <?php
                                                while ($row2 = mysqli_fetch_assoc($plan_id_result)) {
                                                ?>
                                                    <option selected required value="<?php echo $row2['ID'];
                                                                                        echo ",";
                                                                                        echo $row2['Months'];
                                                                                        echo ",";
                                                                                        echo $row2['Interest'];
                                                                                        echo ",";
                                                                                        echo $row2['Penalty']; ?>"><?php echo  $row2['Months']; ?> &nbsp; Month/s &nbsp; [<?php echo $row2['Interest']; ?>%, &nbsp; <?php echo $row2['Penalty']; ?>%]</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="select1">
                                        <div class="slect_content">
                                            <label for="Type"><strong>Loan Type</strong></label>
                                            <select required class="form-control" id="Type" name="Type">
                                                <?php
                                                while ($row3 = mysqli_fetch_assoc($type_id_result)) {
                                                ?>
                                                    <option selected value="<?php echo $row3['Type']; ?>"><?php echo $row3['Type']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <label for="inputEmail4"><strong>Loan Ammount</strong> (Rs)</label>
                                        <input style="width: 91%;" required type="number" class="form-control" id="loan_amount" name="loan_amount" min="25000" value="" placeholder="5000" title="Minimum amount is 25000">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress"><strong>Purpose</strong></label>
                                    <input required style="width: 91%;" type="text" class="form-control" id="loan_purpose" name="loan_purpose" placeholder="Enter purpose" title="Minimum 1000 characters">
                                </div>


                                <div class="button">
                                    <button type="button" onclick="calculate_loan()" name="cal" class="btn btn-primary">Calculate</button>
                                </div>
                                <div class="parent_calculated">
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Total Payable Amount </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="total_amount" name="total_amount" placeholder="00000" min="0">
                                    </div>
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Monthly Payable Amount </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="month_amount" name="month_amount" placeholder="00000" min="0">

                                    </div>
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Interest </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="interest" name="interest" placeholder="00000" min="0">

                                    </div>
                                </div>

                                <div class="button">
                                    <button disabled type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" onclick="none_form()" name="close_from" class="btn btn-primary">Close</button>
                                </div>

                            </form>


                        </div>
                    </div>
                    <div id="form">

                        <?php //plan data
                        $plan_id = "SELECT * FROM `loan_plan`";
                        $plan_id_result = mysqli_query($conn, $plan_id);

                        //Loan type
                        $type_id = "SELECT * FROM `loan_type`";
                        $type_id_result = mysqli_query($conn, $type_id);
                        ?>
                        <div class="mdform">
                            <div id="from_title">
                                <strong> Loan Application</strong>
                            </div>
                            <form action="loan_app.php" method="POST">
                                <div class="form-row">


                                    <div class="select1">
                                        <div class="slect_content">
                                            <label for="plan"><strong>Loan plan</strong></label>
                                            <select class="form-control" id="plant" name="plant">
                                                <option selected id="option_t" value=""></option>
                                                <?php
                                                while ($row2 = mysqli_fetch_assoc($plan_id_result)) {
                                                ?>
                                                    <option required value="<?php echo $row2['ID'];
                                                                            echo ",";
                                                                            echo $row2['Months'];
                                                                            echo ",";
                                                                            echo $row2['Interest'];
                                                                            echo ",";
                                                                            echo $row2['Penalty']; ?>"><?php echo  $row2['Months']; ?> &nbsp; Month/s &nbsp; [<?php echo $row2['Interest']; ?>%, &nbsp; <?php echo $row2['Penalty']; ?>%]</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="width: 91%;" class="form-group col-md-6">
                                        <input type="hidden" id="hidden_id" name="hidden_id" />
                                        <label for="borrower_1t"><strong>Borrower</strong></label>
                                        <input readonly style="width: 91%; margin-right: 0;" required type="text" class="form-control" id="borrower_1t" name="borrower_1t">

                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="select1">
                                        <div class="slect_content">
                                            <label for="Type"><strong>Loan Type</strong></label>
                                            <select required class="form-control" id="Typet" name="Typet">
                                                <option id="option_tt" value=""></option>
                                                <?php
                                                while ($row3 = mysqli_fetch_assoc($type_id_result)) {
                                                ?>
                                                    <option selected value="<?php echo $row3['Type']; ?>"><?php echo $row3['Type']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <label for="inputEmail4"><strong>Loan Ammount</strong> (Rs)</label>
                                        <input style="width: 91%;" required type="number" class="form-control" id="loan_amountt" name="loan_amountt" min="25000" value="" placeholder="5000" title="Minimum amount is 25000">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress"><strong>Purpose</strong></label>
                                    <input required style="width: 91%;" type="text" class="form-control" id="loan_purposet" name="loan_purposet" placeholder="Enter purpose" title="Minimum 1000 characters">
                                </div>


                                <div class="button">
                                    <button type="button" onclick="calculate_loan_edit()" name="cal" class="btn btn-primary">Calculate</button>
                                </div>
                                <div class="parent_calculated">
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Total Payable Amount </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="total_amountt" name="total_amountt" placeholder="00000" min="0">
                                    </div>
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Monthly Payable Amount </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="month_amountt" name="month_amountt" placeholder="00000" min="0">

                                    </div>
                                    <div class="calculated">
                                        <label for="inputEmail4"><strong>Interest </strong> (Rs)</label>
                                        <input required readonly class="child_calculated" readonly type="number" class="form-control" id="interestt" name="interestt" placeholder="00000" min="0">

                                    </div>
                                </div>

                                <div id="statuss">
                                    <select name="statust" id="status">
                                        <option value="0">For Approval</option>
                                        <option value="1">Approved</option>
                                        <option value="2">Released</option>
                                        <option value="3">Rejected</option>
                                    </select>
                                </div>
                                <?php

                                ?>
                                <div class="button">
                                    <button disabled type="submit" id="submitt" name="submitt" class="btn btn-primary">Submit</button>
                                    <button type="button" onclick="none_form_edit()" name="close_from" class="btn btn-primary">Close</button>
                                </div>

                            </form>


                        </div>
                    </div>
                    <?php
                    if (isset($_POST['submitt'])) {
                        $months;
                        $inter_1;
                        $panelty;
                        $loanID = $_POST['plant'];
                        $del = ",";
                        $loanID = strtok($loanID, $del);
                        $months = strtok($del);
                        $inter_1 = strtok($del);
                        $panelty = strtok($del);
                        $type = $_POST['Typet'];
                        $purpose = $_POST['loan_purposet'];
                        $amount = $_POST['loan_amountt'];
                        $monthly_amount = $_POST['month_amountt'];
                        $totlal_maount = $_POST['total_amountt'];
                        $INTEREST = $_POST['interestt'];
                        $loan_date = $_POST['statust'];
                        $change_id = $_POST['hidden_id'];
                        $emi_dates = "";
                        $loan_status = "";
                        if ($loan_date == "2") {
                            $loan_status = "Released";
                            $loan_date = date("Y-m-d");
                            for ($x = 1; $x <= $months; $x++) {
                                $d = strtotime($x . " Months"); //date is increamenting by one month  and resultant date is in a ajeeb form stored in d
                                $var = date("Y-m-d", $d);      //so here we convert our date in d into an standard date
                                $emi_dates = $emi_dates . $var . " ";
                            }
                        } elseif ($loan_date == "0") {
                            $loan_status = "For Approval";
                        } elseif ($loan_date == "1") {
                            $loan_status = "Approved";
                        } elseif ($loan_date == "3") {
                            $loan_status = "Rejected";
                        }

                        $update_loan = "UPDATE `loan_data` SET `Type`='$type',`Months`='$months',`Interest_rate`='$inter_1',`Panelty_rate`='$panelty',`Purpose`='$purpose',`Principle_amount`='$amount',`Net_pay_amount`='$totlal_maount',`Monthly_payment`='$monthly_amount',`Interest`='$INTEREST',`loan_status`='$loan_status', `Released_date`='$loan_date', `emi_dates`='$emi_dates' WHERE ID= '$change_id' ";

                        $update_loan_result = mysqli_query($conn, $update_loan);

                        if ($update_loan_result) {

                    ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATION HAS BEEN UPDATED SECCESSFULLY";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>

                        <?php
                        } else {

                        ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATIO UPDATION HAS BEEN FAILED";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>
                    <?php
                        }
                    }
                    ?>


                    <?php
                    if (isset($_POST['submit'])) {
                        $months;
                        $inter_1;
                        $panelty;
                        $borrower = $_POST['borrower_1'];
                        $loanID = $_POST['plan'];
                        $del = ",";
                        $loanID = strtok($loanID, $del);
                        $months = strtok($del);
                        $inter_1 = strtok($del);
                        $panelty = strtok($del);
                        $type = $_POST['Type'];
                        $purpose = $_POST['loan_purpose'];
                        $amount = $_POST['loan_amount'];
                        $monthly_amount = $_POST['month_amount'];
                        $totlal_maount = $_POST['total_amount'];
                        $INTEREST = $_POST['interest'];
                        $loan_status = "For Approval";

                        $add_to_loan = "INSERT INTO `loan_data`( `Borrower_id`, `Type`, `Months`, `Interest_rate`, `Panelty_rate`, `Purpose`, `Principle_amount`, `Net_pay_amount`, `Monthly_payment`, `Interest`,`loan_status`) VALUES ('$borrower','$type','$months','$inter_1','$panelty','$purpose','$amount','$totlal_maount','$monthly_amount','$INTEREST','$loan_status')";

                        $add_loan_result = mysqli_query($conn, $add_to_loan);

                        if ($add_loan_result) {
                    ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATION HAS BEEN ADDED SECCESSFULLY";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>

                        <?php
                        } else {
                        ?>
                            <script>
                                document.getElementById("showww").innerText = "APPLICATION ADDITION HAS BEEN FAILED";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>
                        <?php
                        }
                    }



                    if (isset($_POST['search'])) {
                        $search_id = $_POST['search_id'];
                        $show_loan = "SELECT * FROM `loan_data` WHERE ID='$search_id'";
                        $show_loan_rsult = mysqli_query($conn, $show_loan);
                        if (mysqli_num_rows($show_loan_rsult) > 0) {

                        ?>

                            <div id="table">

                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width: 60px;">ID</th>
                                            <th style="width: 240px;">BORROWER</th>
                                            <th style="width: 240px;">LOAN DETAILS</th>
                                            <th style="width: 240px;">NEXT PAYMNENT DETAILS</th>
                                            <th style="width: 130px;">STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $show_loan_rsult_data = mysqli_fetch_assoc($show_loan_rsult);
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div id="ID"><?php echo $show_loan_rsult_data['ID']; ?></div>
                                            </td>
                                            <td>
                                                <?php
                                                $temp_borrower = $show_loan_rsult_data['Borrower_id'];
                                                $temp_borrower_query = "SELECT `ID`, `Name`, `Contact`, `Email`, `Address` FROM `borrower` WHERE  `ID`='$temp_borrower'";
                                                $temp_borrower_result = mysqli_query($conn, $temp_borrower_query) or die("UNABLE TO FETCHY BORROWER DATA");
                                                $temp_borrower_row = mysqli_fetch_assoc($temp_borrower_result);
                                                ?>
                                                <div id="table_borrower_detail">
                                                    <div><span class="loan_span1"> <strong>ID: </strong> </span> <span id="loan_span11" class="loan_span"> <?php echo $temp_borrower_row['ID'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Name: </strong> </span> <span id="loan_span12" class="loan_span"> <?php echo $temp_borrower_row['Name'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Email: </strong> </span> <span class="loan_span"> <?php echo $temp_borrower_row['Email'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Address: </strong> </span> <span class="loan_span"><?php echo $temp_borrower_row['Address'] ?></span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div id="table_loan_detail">
                                                    <div><span class="loan_span1"> <strong>Loan id: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['ID'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Loan type: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Type'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>plan: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Months'] ?> Months [<?php echo $show_loan_rsult_data['Interest_rate'] ?>% <?php echo $show_loan_rsult_data['Panelty_rate'] ?>%]</span></div>
                                                    <div><span class="loan_span1"> <strong>Ammount: </strong> </span> <span id="loan_span13" class="loan_span"><?php echo $show_loan_rsult_data['Principle_amount'] ?></span></div>
                                                    <div><span class="loan_span1"> <strong>Total payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Net_pay_amount'] ?></span></div>
                                                    <div><span class="loan_span1"> <strong>Monthly payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                    <div><span class="loan_span1"> <strong>Released date: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Released_date'] ?></span></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div id="next_payment_detail">
                                                    <?php

                                                    $emi_parser = $show_loan_rsult_data['emi_dates'];
                                                    $date1 = "NILL";
                                                    if ($emi_parser != "") {
                                                        $parese = " ";
                                                        // $date1="2021-12-6 2021-12-7 2021-12-8 2021-12-9 2021-12-10";
                                                        $date3 = strtok($emi_parser, $parese);
                                                        $curr = date("Y-m-d");
                                                        $date1 = strtotime($date3);
                                                        $curr = strtotime($curr);
                                                        while ($curr >= $date1) {
                                                            $date3 = strtok(" ");
                                                            $date1 = strtotime($date3);
                                                        }
                                                        $date1 = date("Y-m-d", $date1);
                                                    }
                                                    ?>
                                                    <div><span class="loan_span1"> <strong>Date: </strong> </span> <span class="loan_span"> <?php echo $date1 ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Monthly Amount: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Monthly_payment'] ?> </span></div>
                                                    <div><span class="loan_span1"> <strong>Payable Amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                </div>
                                            </td>

                                            <td style="vertical-align: middle;">
                                                <div id="statusss">
                                                    <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>

                                                </div>
                                            </td>
                                            <td style="vertical-align: middle;">
                                                <div id="statusss">

                                                    <button onclick="pop_form_edit('<?php echo $temp_borrower_row['ID']; ?>','<?php echo $temp_borrower_row['Name']; ?>','<?php echo $show_loan_rsult_data['Principle_amount'] ?>','<?php echo $show_loan_rsult_data['Months'] ?>','<?php echo $show_loan_rsult_data['Interest_rate'] ?>','<?php echo $show_loan_rsult_data['Panelty_rate'] ?>','<?php echo $show_loan_rsult_data['Type'] ?>','<?php echo $show_loan_rsult_data['Purpose'] ?>','<?php echo $show_loan_rsult_data['Net_pay_amount'] ?>','<?php echo $show_loan_rsult_data['Monthly_payment'] ?>','<?php echo $show_loan_rsult_data['Interest'] ?>','<?php echo  $show_loan_rsult_data['ID'] ?>','<?php echo $show_loan_rsult_data['loan_status'] ?>')" name="edit" style="color: blue;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg>
                                                    </button>



                                                    <button style="color: red;    vertical-align: middle;" onclick="delete_loan('<?php echo $show_loan_rsult_data['ID']; ?>')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </button>


                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                        <?php

                        } else {
                        ?>
                            <script>
                                document.getElementById("showww").innerText = "ID NOT FOUND";
                                var dom = document.getElementById("show");
                                dom.style.position = "absolute";
                                dom.style.left = "248";
                                dom.style.top = "37";
                                dom.style.zIndex = "21";
                                dom.style.display = "flex";
                                dom.style.alignItems = "center";
                                dom.style.justifyContent = "center";

                                function non_disp() {
                                    document.getElementById("show").style.display = "none";
                                }
                                setTimeout(non_disp, 2000);
                            </script>
                            <?php
                            $show_loan = "SELECT * FROM `loan_data`";
                            $show_loan_rsult = mysqli_query($conn, $show_loan);
                            if (mysqli_num_rows($show_loan_rsult) > 0) {


                            ?>

                                <div id="table">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 60px;">ID</th>
                                                <th style="width: 240px;">BORROWER</th>
                                                <th style="width: 240px;">LOAN DETAILS</th>
                                                <th style="width: 240px;">NEXT PAYMNENT DETAILS</th>
                                                <th style="width: 130px;">STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        while ($show_loan_rsult_data = mysqli_fetch_assoc($show_loan_rsult)) {
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div id="ID"><?php echo $show_loan_rsult_data['ID']; ?></div>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        $temp_borrower = $show_loan_rsult_data['Borrower_id'];
                                                        $temp_borrower_query = "SELECT `ID`, `Name`, `Contact`, `Email`, `Address` FROM `borrower` WHERE  `ID`='$temp_borrower'";
                                                        $temp_borrower_result = mysqli_query($conn, $temp_borrower_query) or die("UNABLE TO FETCHY BORROWER DATA");
                                                        $temp_borrower_row = mysqli_fetch_assoc($temp_borrower_result);
                                                        ?>
                                                        <div id="table_borrower_detail">
                                                            <div><span class="loan_span1"> <strong>ID: </strong> </span> <span id="loan_span11" class="loan_span"> <?php echo $temp_borrower_row['ID'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Name: </strong> </span> <span id="loan_span12" class="loan_span"> <?php echo $temp_borrower_row['Name'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Email: </strong> </span> <span class="loan_span"> <?php echo $temp_borrower_row['Email'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Address: </strong> </span> <span class="loan_span"><?php echo $temp_borrower_row['Address'] ?></span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div id="table_loan_detail">
                                                            <div><span class="loan_span1"> <strong>Loan id: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['ID'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Loan type: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Type'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>plan: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Months'] ?> Months [<?php echo $show_loan_rsult_data['Interest_rate'] ?>% <?php echo $show_loan_rsult_data['Panelty_rate'] ?>%]</span></div>
                                                            <div><span class="loan_span1"> <strong>Ammount: </strong> </span> <span id="loan_span13" class="loan_span"><?php echo $show_loan_rsult_data['Principle_amount'] ?></span></div>
                                                            <div><span class="loan_span1"> <strong>Total payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Net_pay_amount'] ?></span></div>
                                                            <div><span class="loan_span1"> <strong>Monthly payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                            <div><span class="loan_span1"> <strong>Released date: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Released_date'] ?></span></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div id="next_payment_detail">
                                                            <?php

                                                            $emi_parser = $show_loan_rsult_data['emi_dates'];
                                                            $date1 = "NILL";
                                                            if ($emi_parser != "") {
                                                                $parese = " ";
                                                                // $date1="2021-12-6 2021-12-7 2021-12-8 2021-12-9 2021-12-10";
                                                                $date3 = strtok($emi_parser, $parese);
                                                                $curr = date("Y-m-d");
                                                                $date1 = strtotime($date3);
                                                                $curr = strtotime($curr);
                                                                while ($curr >= $date1) {
                                                                    $date3 = strtok(" ");
                                                                    $date1 = strtotime($date3);
                                                                }
                                                                $date1 = date("Y-m-d", $date1);
                                                            }
                                                            ?>

                                                            <div><span class="loan_span1"> <strong>Date: </strong> </span> <span class="loan_span"> <?php $date1 ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Monthly Amount: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Monthly_payment'] ?> </span></div>
                                                            <div><span class="loan_span1"> <strong>Payable Amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                        </div>
                                                    </td>

                                                    <td style="vertical-align: middle;">
                                                        <div id="statusss">
                                                            <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>
                                                        </div>
                                                    </td>
                                                    <td style="vertical-align: middle;">
                                                        <div id="statusss">
                                                            <button onclick="pop_form_edit('<?php echo $temp_borrower_row['ID']; ?>','<?php echo $temp_borrower_row['Name']; ?>','<?php echo $show_loan_rsult_data['Principle_amount'] ?>','<?php echo $show_loan_rsult_data['Months'] ?>','<?php echo $show_loan_rsult_data['Interest_rate'] ?>','<?php echo $show_loan_rsult_data['Panelty_rate'] ?>','<?php echo $show_loan_rsult_data['Type'] ?>','<?php echo $show_loan_rsult_data['Purpose'] ?>','<?php echo $show_loan_rsult_data['Net_pay_amount'] ?>','<?php echo $show_loan_rsult_data['Monthly_payment'] ?>','<?php echo $show_loan_rsult_data['Interest'] ?>','<?php echo  $show_loan_rsult_data['ID'] ?>','<?php echo $show_loan_rsult_data['loan_status'] ?>')" name="edit" style="color: blue;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg>
                                                            </button>



                                                            <button style="color: red;    vertical-align: middle;" onclick="delete_loan('<?php echo $show_loan_rsult_data['ID']; ?>')">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                </svg>
                                                            </button>


                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        <?php
                                        }

                                        ?>
                                    </table>

                                </div>

                            <?php

                            }
                        }
                    } else {


                        $show_loan = "SELECT *  FROM `loan_data`";
                        $show_loan_rsult = mysqli_query($conn, $show_loan);
                        if (mysqli_num_rows($show_loan_rsult) > 0) {


                            ?>

                            <div id="table">

                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width: 60px;">ID</th>
                                            <th style="width: 240px;">BORROWER</th>
                                            <th style="width: 240px;">LOAN DETAILS</th>
                                            <th style="width: 240px;">NEXT PAYMNENT DETAILS</th>
                                            <th style="width: 130px;">STATUS</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($show_loan_rsult_data = mysqli_fetch_assoc($show_loan_rsult)) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div id="ID"><?php echo $show_loan_rsult_data['ID']; ?></div>
                                                </td>
                                                <td>
                                                    <?php
                                                    $temp_borrower = $show_loan_rsult_data['Borrower_id'];
                                                    $temp_borrower_query = "SELECT `ID`, `Name`, `Contact`, `Email`, `Address` FROM `borrower` WHERE  `ID`='$temp_borrower'";
                                                    $temp_borrower_result = mysqli_query($conn, $temp_borrower_query) or die("UNABLE TO FETCHY BORROWER DATA");
                                                    $temp_borrower_row = mysqli_fetch_assoc($temp_borrower_result);
                                                    ?>
                                                    <div id="table_borrower_detail">
                                                        <div><span class="loan_span1"> <strong>ID: </strong> </span> <span id="loan_span11" class="loan_span"> <?php echo $temp_borrower_row['ID'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>Name: </strong> </span> <span id="loan_span12" class="loan_span"> <?php echo $temp_borrower_row['Name'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>Email: </strong> </span> <span class="loan_span"> <?php echo $temp_borrower_row['Email'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>Address: </strong> </span> <span class="loan_span"><?php echo $temp_borrower_row['Address'] ?></span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="table_loan_detail">
                                                        <div><span class="loan_span1"> <strong>Loan id: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['ID'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>Loan type: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Type'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>plan: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Months'] ?> Months [<?php echo $show_loan_rsult_data['Interest_rate'] ?>% <?php echo $show_loan_rsult_data['Panelty_rate'] ?>%]</span></div>
                                                        <div><span class="loan_span1"> <strong>Ammount: </strong> </span> <span id="loan_span13" class="loan_span"><?php echo $show_loan_rsult_data['Principle_amount'] ?></span></div>
                                                        <div><span class="loan_span1"> <strong>Total payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Net_pay_amount'] ?></span></div>
                                                        <div><span class="loan_span1"> <strong>Monthly payable amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                        <div><span class="loan_span1"> <strong>Released date: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Released_date'] ?></span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div id="next_payment_detail">
                                                        <?php

                                                        $emi_parser = $show_loan_rsult_data['emi_dates'];
                                                        $date1 = "NILL";
                                                        if ($emi_parser != "") {
                                                            $parese = " ";
                                                            // $date1="2021-12-6 2021-12-7 2021-12-8 2021-12-9 2021-12-10";
                                                            $date3 = strtok($emi_parser, $parese);
                                                            $curr = date("Y-m-d");
                                                            $date1 = strtotime($date3);
                                                            $curr = strtotime($curr);
                                                            while ($curr >= $date1) {
                                                                $date3 = strtok(" ");
                                                                $date1 = strtotime($date3);
                                                            }
                                                            $date1 = date("Y-m-d", $date1);
                                                            $temp_id = $show_loan_rsult_data['ID'];
                                                            $add_nexr_emi = "UPDATE `loan_data` SET `next_emi`='$date1' WHERE ID='$temp_id'";
                                                            $add_next_res = mysqli_query($conn, $add_nexr_emi);
                                                        }
                                                        ?>

                                                        <div><span class="loan_span1"> <strong>Date: </strong> </span> <span class="loan_span"> <?php echo $date1 ?></span></div>
                                                        <div><span class="loan_span1"> <strong>Monthly Amount: </strong> </span> <span class="loan_span"> <?php echo $show_loan_rsult_data['Monthly_payment'] ?> </span></div>
                                                        <div><span class="loan_span1"> <strong>Payable Amount: </strong> </span> <span class="loan_span"><?php echo $show_loan_rsult_data['Monthly_payment'] ?></span></div>
                                                    </div>
                                                </td>

                                                <td style="vertical-align: middle;">
                                                    <div id="statusss">
                                                        <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>

                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <div id="statusss">
                                                        <button onclick="pop_form_edit('<?php echo $temp_borrower_row['ID']; ?>','<?php echo $temp_borrower_row['Name']; ?>','<?php echo $show_loan_rsult_data['Principle_amount'] ?>','<?php echo $show_loan_rsult_data['Months'] ?>','<?php echo $show_loan_rsult_data['Interest_rate'] ?>','<?php echo $show_loan_rsult_data['Panelty_rate'] ?>','<?php echo $show_loan_rsult_data['Type'] ?>','<?php echo $show_loan_rsult_data['Purpose'] ?>','<?php echo $show_loan_rsult_data['Net_pay_amount'] ?>','<?php echo $show_loan_rsult_data['Monthly_payment'] ?>','<?php echo $show_loan_rsult_data['Interest'] ?>','<?php echo  $show_loan_rsult_data['ID'] ?>','<?php echo $show_loan_rsult_data['loan_status'] ?>')" name="edit" style="color: blue;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </button>



                                                        <button style="color: red;    vertical-align: middle;" onclick="delete_loan('<?php echo $show_loan_rsult_data['ID']; ?>')">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                            </svg>
                                                        </button>


                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }

                                    ?>
                                </table>

                            </div>
                    <?php

                        }
                    }
                    ?>
                </div>
                <?php
                $show_loan = "SELECT *  FROM `loan_data`";
                $show_loan_rsult = mysqli_query($conn, $show_loan);
                if (mysqli_num_rows($show_loan_rsult) > 0) {
                    while ($show_loan_rsult_data = mysqli_fetch_assoc($show_loan_rsult)) {

                        $emi_parser = $show_loan_rsult_data['emi_dates'];
                        $date1 = "NILL";
                        if ($emi_parser != "") {
                            $parese = " ";
                            // $date1="2021-12-6 2021-12-7 2021-12-8 2021-12-9 2021-12-10";
                            $date3 = strtok($emi_parser, $parese);
                            $curr = date("Y-m-d");
                            $date1 = strtotime($date3);
                            $curr = strtotime($curr);
                            while ($curr >= $date1) {
                                $date3 = strtok(" ");
                                $date1 = strtotime($date3);
                            }
                            $date1 = date("Y-m-d", $date1);
                        }
                    }
                }
                ?>

            </div>

            <footer>
                <div class="copy">
                    <span>
                        COPYRIGHT &copy; www.Loan management system.com. All rights are reserved
                    </span>
                </div>
            </footer>
        </div>

    </div>
    <script>
        function pop_form(sel) {
            document.getElementById("showww").innerHTML = "PLEASE ENTER BORROWER/LOAN PLAN/LOAN TYPE";
            if (sel == 1) {
                var dom = document.getElementById("show");
                dom.style.position = "absolute";
                dom.style.left = "248";
                dom.style.top = "37";
                dom.style.zIndex = "21";
                dom.style.display = "flex";
                dom.style.alignItems = "center";
                dom.style.justifyContent = "center";

                function non_disp() {
                    document.getElementById("show").style.display = "none";
                }
                setTimeout(non_disp, 2000);

            } else {

                document.getElementById("form1").style.display = "flex";
                document.getElementById("form1").style.alignItems = "center";
                document.getElementById("form1").style.justifyContent = "center";
            }
        }

        function pop_form_edit(b_id, b_name, p_amont, l_month, l_interest, l_panelty, l_type, l_pupose, t_amont, m_amount, interest, loan_id, loan_ststus) {
            if (loan_ststus == "Released" || loan_ststus == "Rejected") {
                document.getElementById("showww").innerText = "THIS APPICATION CAN'T BE EDIT";
                var dom = document.getElementById("show");
                dom.style.position = "absolute";
                dom.style.left = "248";
                dom.style.top = "37";
                dom.style.zIndex = "21";
                dom.style.display = "flex";
                dom.style.alignItems = "center";
                dom.style.justifyContent = "center";

                function non_disp() {
                    document.getElementById("show").style.display = "none";
                }
                setTimeout(non_disp, 2000);
            } else {

                let space = '\xa0\xa0 ';
                document.getElementById("form").style.display = "flex";
                document.getElementById("form").style.alignItems = "center";
                document.getElementById("form").style.justifyContent = "center";
                document.getElementById("statuss").style.display = "flex";
                document.getElementById("statuss").style.alignItems = "center";
                document.getElementById("statuss").style.justifyContent = "center";
                document.getElementById("borrower_1t").value = b_id + " \xa0\xa0[ " + b_name + " ]";
                document.getElementById("loan_amountt").value = p_amont;
                document.getElementById("option_t").value = b_id + "," + l_month + "," + l_interest + "," + l_panelty;
                document.getElementById("option_t").innerText = l_month + space + ` Months/s [ ` + l_interest + "%], [" + l_panelty + "% ]";
                document.getElementById("option_tt").value = l_type;
                document.getElementById("option_tt").innerText = l_type;
                document.getElementById("loan_purposet").value = l_pupose;
                document.getElementById("total_amountt").value = t_amont;
                document.getElementById("month_amountt").value = m_amount;
                document.getElementById("interestt").value = interest;
                document.getElementById("hidden_id").value = loan_id;
            }
        }


        function none_form() {
            document.getElementById("form1").style.display = "none";
        }

        function none_form_edit() {
            document.getElementById("form").style.display = "none";
        }

        function calculate_loan() {

            let ammount;
            let plan;
            let contents;
            ammount = document.getElementById("loan_amount").value;
            plan = document.getElementById("plan").value;
            contents = plan.split(',');
            let mon;
            let interest;
            let power;
            let total_payment;
            let panelty;
            if (ammount == "") {
                alert("Please enter loan amount");
            } else {

                mon = contents[1];
                interest = (contents[2] / 12) / 100;
                power = 1 + interest;
                power = Math.pow(power, mon);
                let monthly_payment = 0;
                monthly_payment = (ammount * interest * power) / (power - 1);
                total_payment = monthly_payment * mon;
                interest = total_payment - ammount;
                document.getElementById("month_amount").value = Math.floor(monthly_payment);
                document.getElementById("total_amount").value = Math.floor(total_payment);
                document.getElementById("interest").value = Math.floor(interest);
                document.getElementById("submit").removeAttribute('disabled');

            }
        }

        function calculate_loan_edit() {

            let ammount;
            let plan;
            let contents;

            ammount = document.getElementById("loan_amountt").value;
            plan = document.getElementById("plant").value;
            contents = plan.split(',');

            let mon;
            let interest;
            let power;
            let total_payment;
            let panelty;
            if (ammount == "") {
                alert("Please enter loan amount");
            } else {

                mon = contents[1];
                interest = (contents[2] / 12) / 100;
                power = 1 + interest;
                power = Math.pow(power, mon);
                let monthly_payment = 0;
                monthly_payment = (ammount * interest * power) / (power - 1);
                total_payment = monthly_payment * mon;
                interest = total_payment - ammount;

                document.getElementById("month_amountt").value = Math.floor(monthly_payment);
                document.getElementById("total_amountt").value = Math.floor(total_payment);
                document.getElementById("interestt").value = Math.floor(interest);
                document.getElementById("submitt").removeAttribute('disabled');
            }
        }

        function delete_loan(id) {
            document.getElementById("del_loan").value = id;
            document.getElementById("sure").style.display = "flex";
            document.getElementById("sure").style.justifyContent = "center";
            document.getElementById("sure").style.alignItems = "center";
        }

        function delete_loan_cancel() {
            document.getElementById("sure").style.display = "none";
        }

        function reload() {
            location.reload();
        }
    </script>
</body>

</html>