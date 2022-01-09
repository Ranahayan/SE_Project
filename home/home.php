<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="ICON.png">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <title>Loan Management system</title>
    <style>
        #container2::before {
            content: "";
            background: url("main.jpg");
            position: absolute;
            background-size: cover;
            height: 94.5%;
            width: 81.8%;
            z-index: -1;
            /* opacity: 0.9; */
        }

        svg {
            color: black;
        }

        #maincontainer {
            display: flex;
            position: absolute;
            top: 2rem;
            left: -1px;
            height: 94.5%;
        }

        #system {
            height: 2rem;
            width: 100%;
            background-color: rgb(46, 161, 228);
            position: absolute;
            top: 0px;
            left: -1px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        #main {
            height: 88%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #page {
            display: flex;
            align-items: center;
            width: 80vw;
            background-color: rgba(0, 0, 0, 0.562);
            height: 3rem;
            color: white;
            font-size: 2rem;
            /* border-radius: 11px; */
        }

        #menu {
            height: 101%;
            width: 16rem;
            background-color: rgb(23, 33, 37);
        }

        #cards {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        #cards .card {
            margin: 10px;
            display: flex;
            align-items: center;
            width: 20%;
        }

        #cards .card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #cards .card .card-body .inner_card {
            margin-bottom: 7px;
        }

        #form {
            height: 105%;
            width: 81%;
            position: absolute;
            z-index: 5;
            top: 0;
            background-color: rgba(0, 0, 0, 0.514);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            display: none;
        }


        #cards #form .table {
            height: 40%;
            z-index: 10;
            overflow-y: scroll;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            display: none;
            /* padding: 10px; */
            width: 90%;

        }

        #cards #form table {
            width: 98%;
            margin: auto;
            font-family: 'Baloo Bhai 2', cursive;
            border-collapse: collapse;
        }

        /* #cards #form .table table thead th:first-child {
            position: sticky;
            z-index: 2;
        } */

        #cards #form .table table thead th {

            z-index: 9;
            border: 1px solid black;
            border-collapse: collapse;
            font: 100;
        }

        #cards #form table td {
            border: 1px solid black;
            border-collapse: collapse;
            vertical-align: top;
            margin: auto;
        }

        #cards #form table #ID {
            width: 55px;
            margin: 7px 4px;
            text-align: center;
        }

        #cards #form table .table_borrower_detail div {
            width: 230px;
            display: flex;
            flex-direction: row;
            margin: 7px 4px;
            /* border-bottom: 1px dotted rgba(0, 0, 0, 0.452); */
        }

        #cards #form table .table_borrower_detail .loan_span1 {
            width: 100px;
            margin-right: 10px;
            height: auto;
            font-size: 13px;
            display: inline-block;
        }

        #cards #form table .table_borrower_detail .loan_span {
            word-wrap: break-word;
            width: 115px;
        }

        #cards #form table .table_loan_detail div {
            width: 230px;
            display: flex;
            flex-direction: row;
            margin: 7px 4px;
        }

        #cards #form table .table_loan_detail .loan_span1 {
            width: 115px;
            height: auto;
            font-size: 13px;
            display: inline-block;
        }

        #cards #form table .table_loan_detail .loan_span {
            word-wrap: break-word;
            width: 115px;
        }

        #cards #form table #next_payment_detail div {
            width: 230px;
            display: flex;
            flex-direction: row;
            margin: 7px 4px;
        }

        #cards #form table #next_payment_detail .loan_span1 {
            width: 100px;
            margin-right: 10px;
            height: auto;
            font-size: 13px;
            display: inline-block;
        }

        #cards #form table #next_payment_detail .loan_span {
            word-wrap: break-word;
            width: 115px;
        }

        #statusss {
            display: flex;
            flex-direction: row;
            margin: 7px 0px;
            justify-content: center;
            align-items: center;

        }

        #statusss button {
            margin: 0px 4px;
            border-radius: 5px;
            border: 1px solid rgba(0, 0, 0, 0.247);
            cursor: pointer;
            background-color: rgba(250, 238, 215, 0.425);
            display: flex;
            justify-content: center;
            /* width: 30px; */
        }

        #statusss a:hover {
            background-color: rgb(255, 255, 255);
        }

        #statusss button:hover {
            background-color: rgb(255, 255, 255);
        }




        h4 {
            display: inline-block;
            font-family: 'Baloo Bhai 2', cursive;
            border-collapse: collapse;
            margin: 0%;
            width: auto;
            background-color: wheat;
            width: 100%;
            margin: auto;
            background-color: yellow;
        }


        #showww {
            width: 70%;
            font-size: 30px;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            text-align: center;
            position: relative;
            top: 10px;
            border-radius: 23px;
            padding: 0px 5px;
            margin-top: 10px;
            box-shadow: 6px 7px 16px 5px rgb(54 53 52);
        }


        /* #main_table{
            height: 90%;
            width: 95%;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }
         */

        /* #cards .card .card-body button{
            width: 80%;
        }
         */
    </style>

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
                        <a class="ddd" href="">Dashbord</a>
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

                        <a class="ddd" href="/SE_project/Loan/loan_app.php">Loans</a>
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
                &nbsp; Dashbord
            </div>
            <div id="main">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "loan") or die("Connection error");
                ?>
                <div class="mainscontainer">
                    <div id="cards">

                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <?php
                                $show_loan_released = "SELECT * FROM `loan_data` WHERE loan_status='Released'";
                                $show_loan_released_rsult = mysqli_query($conn, $show_loan_released);
                                ?>
                                <h5 class="inner_card" class="card-title">Released Applications</h5>
                                <h2 class="inner_card" style="text-align: center;"><?php echo mysqli_num_rows($show_loan_released_rsult) ?>/-</h2>
                                <button onclick="Released()" class="btn btn-primary">Show details</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <?php
                                $show_loan = "SELECT * FROM `loan_data` WHERE loan_status='Rejected'";
                                $show_loan_rsult = mysqli_query($conn, $show_loan);
                                ?>
                                <h5 class="card-title">Rejected Applications</h5>
                                <h2 style="text-align: center;"><?php echo mysqli_num_rows($show_loan_rsult) ?>/-</h2>
                                <button onclick="rejected()" class="btn btn-primary">Show details</button>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <?php
                                $temp_date = date("Y-m-d");
                                $show_loan_emi_date = "SELECT * FROM `loan_data` WHERE loan_status='$temp_date'";
                                $show_loan_emi_rsult = mysqli_query($conn, $show_loan_emi_date);
                                ?>
                                <h5 class="card-title">Todays's payments</h5>
                                <h2 style="text-align: center;"><?php echo mysqli_num_rows($show_loan_emi_rsult) ?>/-</h2>
                                <button onclick="payments()" class="btn btn-primary">Show Details</button>
                            </div>
                        </div>
                        <div id="form">

                            <?php
                            $show_loan = "SELECT * FROM `loan_data` WHERE loan_status='Rejected'";
                            $show_loan_rsult = mysqli_query($conn, $show_loan);
                            if (mysqli_num_rows($show_loan_rsult) > 0) {

                            ?>
                                <!-- <div id="main_table"> -->






                                <div class=table id="table1">

                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 60px;">ID</th>
                                                <th style="width: 240px;">BORROWER</th>
                                                <th style="width: 240px;">LOAN DETAILS</th>
                                                <th style="width: 130px;">STATUS</th>

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

                                                    <td style="vertical-align: middle;">
                                                        <div id="statusss">
                                                            <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>

                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        <?php
                                        }
                                        ?>

                                    </table>

                                </div>
                                <button style="margin-bottom: 10px;" onclick="close_all_form()" style="margin-top: 10px;" href="#" class="btn btn-primary">Close</button>


                            <?php
                            }
                            ?>
                            <div class="table" id="table2">
                                <div id="inner_top">

                                    <h4 id="awara">LOAN LIST</h4>
                                </div>
                                <?php

                                $show_loan_released = "SELECT * FROM `loan_data` WHERE loan_status='Released'";
                                $show_loan_released_rsult = mysqli_query($conn, $show_loan_released);
                                if (mysqli_num_rows($show_loan_released_rsult)  > 0) {

                                ?>

                                    <table>
                                        <thead>
                                            <tr>
                                                <th style="width: 60px;">ID</th>
                                                <th style="width: 240px;">BORROWER</th>
                                                <th style="width: 240px;">LOAN DETAILS</th>
                                                <th style="width: 130px;">STATUS</th>

                                            </tr>
                                        </thead>
                                        <?php
                                        while ($show_loan_rsult_data = mysqli_fetch_assoc($show_loan_released_rsult)) {
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

                                                    <td style="vertical-align: middle;">
                                                        <div id="statusss">
                                                            <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>

                                                        </div>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        <?php
                                        }
                                        ?>

                                    </table>

                            </div>
                            <button style="margin-bottom: 10px;" onclick="close_all_form()" style="margin-top: 10px;" href="#" class="btn btn-primary">Close</button>


                        <?php
                                }
                        ?>
                        <div class="table" id="table3">
                            <div id="inner_top">

                                <h4 id="awara">LOAN LIST</h4>
                            </div>
                            <?php

                            $temp_date = date("Y-m-d");
                            $show_loan_emi_date = "SELECT * FROM `loan_data` WHERE loan_status='$temp_date'";
                            $show_loan_emi_rsult = mysqli_query($conn, $show_loan_emi_date);
                            if (mysqli_num_rows($show_loan_emi_rsult)  > 0) {

                            ?>

                                <table>
                                    <thead>
                                        <tr>
                                            <th style="width: 60px;">ID</th>
                                            <th style="width: 240px;">BORROWER</th>
                                            <th style="width: 240px;">LOAN DETAILS</th>
                                            <th style="width: 130px;">STATUS</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    while ($show_loan_rsult_data = mysqli_fetch_assoc($show_loan_emi_rsult)) {
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

                                                <td style="vertical-align: middle;">
                                                    <div id="statusss">
                                                        <p id="loan_status"><?php echo $show_loan_rsult_data['loan_status'] ?></p>

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
                            } else {
                    ?>

                        <p id="showw"><strong id="showww">NO PAYMENTS TODAY </strong> </p>

                    <?php
                            }
                    ?>

                    <button onclick="close_all_form()" style="margin-top: 10px;" href="#" class="btn btn-primary">Close</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer>Footer</footer>
    </div>
    </div>
    <script>
        function close_all_form() {
            document.getElementById("form").style.display = "none";
            document.getElementById("table1").style.display = "none";
            document.getElementById("table2").style.display = "none";
            document.getElementById("table3").style.display = "none";


        }

        function rejected() {
            document.getElementById("form").style.display = "flex";
            document.getElementById("form").style.alignItems = "center";
            document.getElementById("form").style.justifyContent = "center";
            document.getElementById("form").style.flexDirection = "column";
            document.getElementById("table1").style.alignItems = "center";
            document.getElementById("table1").style.justifyContent = "center";
            document.getElementById("table1").style.flexDirection = "column";
            document.getElementById("table1").style.display = "flex";


        }

        function Released() {
            document.getElementById("form").style.display = "flex";
            document.getElementById("form").style.alignItems = "center";
            document.getElementById("form").style.justifyContent = "center";
            document.getElementById("form").style.flexDirection = "column";
            document.getElementById("table2").style.display = "flex";
            document.getElementById("table2").style.alignItems = "center";
            document.getElementById("table2").style.justifyContent = "center";
            document.getElementById("table2").style.flexDirection = "column";
        }

        function payments() {
            document.getElementById("form").style.display = "flex";
            document.getElementById("form").style.alignItems = "center";
            document.getElementById("form").style.justifyContent = "center";
            document.getElementById("form").style.flexDirection = "column";
            document.getElementById("table3").style.display = "flex";
            document.getElementById("table3").style.alignItems = "center";
            document.getElementById("table3").style.justifyContent = "center";
            document.getElementById("table3").style.flexDirection = "column";

        }
    </script>
</body>

</html>