<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="ICON.png">
    <link rel="stylesheet" href="borrower_detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <title>Loan Management System</title>

    <style>
        .Top button{
            margin: 15px;
            border: none;
            background-color: rgba(0, 0, 0, 0.726);
            color: white;
            border-radius: 7px;
            height: 40px;
            padding: 0px 15px;
        }

        .Top button:hover{
            background-color: white;
            color: black;
            
        }
        .mdform{
            margin: 0px 13px;
        }
        .button{
            display: flex;
            justify-content: center;
            
        }
        .search{
            display: flex;
            justify-content: center;
        }
        .button button{
            margin: 23px;
        }
        .button1 button{
            height: 40px;
        }

        #table {
            margin: 28px 5px;
            overflow-y: auto;
            height: 244px;
        }
        

        #table table thead th {
            position: sticky;
            top: -1px;
        }

        th {
            background-color: rgb(23, 33, 37);
        }

        #table table {
            border-collapse: collapse;
            width: 100%;
        }


        .show {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 7px;

        }

        .show p {
            width: 30%;
            font-size: 20px;
            background-color: rgba(0, 0, 0, 0.589);
            color: white;
            text-align: center;
            border-radius: 23px;
            /* display: none; */
            padding: 0px 5px;
            margin: 0px;
        }

        .copy {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 5px;
            font-size: 15px;
        }

        .copy span {
            color: white;
        }

        footer {
            border-radius: 23px;
            background-color: black;
            height: 2rem;
            display: block;
            align-items: center;
            justify-content: center;
        }
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
                    <div class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-house" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="/SE_project/home/home.php">Dashbord</a>
                    </div>
                </div>
                <div class="items">
                    <div class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                            <path
                                d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="/SE_project/Loan/loan_app.php">Loans</a>
                    </div>
                </div>
                <div class="items">
                    <div class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Types</a>
                    </div>
                </div>
                <div class="items">
                    <div class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Plans</a>
                    </div>
                </div>
                <div class="items">
                    <div class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-wallet" viewBox="0 0 16 16">
                            <path
                                d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                        </svg>
                    </div>
                    <div class="link">
                        <a class="ddd" href="">Payments</a>
                    </div>
                </div>
                <div class="items">
                    <div id="act5" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-people" viewBox="0 0 16 16">
                            <path
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </div>
                    <div class="linkk">
                        <a id="special" href="main_borrower.php">Borrowers &nbsp; <i class="fa fa-caret-left"></i></a>
                        <div class="link-content">
                            <a class="drop" href="">Online Borrowers</a>
                            <a class="drop" href="">Manual Borrowers</a>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div id="act6" class="act"></div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-person-check" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            <path fill-rule="evenodd"
                                d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
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
                <div style="display: flex;
                justify-content: center;
                margin: 20px 35px;" class="Top">
                    <a  href="main_borrower.php"> <button  type="button">ADD BORROWERS</button></a>
                    <a href="edit_borrwer.php"><button  type="button" type="button">EDIT BORROWERS</button></a>
                    <a href="borrower_detail.php"> <button  type="button" type="button">BORROWERS DETAILS</button></a>
                </div>
                <form action="" method="post">
                    <div class="search">
                        <div class="form-group col-md-6">
                            <input required type="text" class="form-control" id="inputEmail4" value="" name="search_id" placeholder="Search">
                        </div>
                        <div class="button1">
                            <button type="submit" name="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <div class="show">
                    <p id="showw"></p>
                </div>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "loan") or die("Connection error");
                if (isset($_POST['submit'])) {

                    $search_idd = $_POST['search_id'];
                ?>
                    <script>
                        document.getElementById('inputEmail4').setAttribute('value', '<?php echo $search_idd ?>');
                    </script>
                    <?php
                    $sql = "SELECT * FROM `borrower` WHERE `ID`='$search_idd'";
                    $result = mysqli_query($conn, $sql) or die("Query error");
                    if (mysqli_num_rows($result) > 0) {
                        $row1 = mysqli_fetch_assoc($result)
                    ?>
                        <div id="table">
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">ADDRESS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td><?Php echo $row1['ID']; ?></td>
                                        <td><?Php echo $row1['Name']; ?></td>
                                        <td><?Php echo $row1['Contact']; ?></td>
                                        <td><?Php echo $row1['Email']; ?></td>
                                        <td><?Php echo $row1['Address']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php
                    } else {
                    ?>
                        <script>
                            document.getElementById('showw').innerHTML = "ID NOT FOUND";
                            document.getElementById('showw').style.display = "block";

                            function show() {
                                document.getElementById('showw').innerHTML = "";
                            }
                            let clr = setTimeout(show, 2000);

                            // clearTimeout(clr);
                        </script>
                        <?php
                        $sql1 = "SELECT `ID`, `Name`, `Contact`, `Email`, `Address` FROM `borrower`";
                        $result1 = mysqli_query($conn, $sql1) or die("Select query unseccessfull");

                        if (mysqli_num_rows($result1) > 0) {
                        ?>
                            <div id="table">
                                <table class="table table-hover table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">CONTACT</th>
                                            <th scope="col">EMAIL</th>
                                            <th scope="col">ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                        ?>
                                            <tr>

                                                <td><?Php echo $row['ID']; ?></td>
                                                <td><?Php echo $row['Name']; ?></td>
                                                <td><?Php echo $row['Contact']; ?></td>
                                                <td><?Php echo $row['Email']; ?></td>
                                                <td><?Php echo $row['Address']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        <?php
                        }
                    }
                } else {
                    $sql2 = "SELECT `ID`, `Name`, `Contact`, `Email`, `Address` FROM `borrower`";
                    $result2 = mysqli_query($conn, $sql2) or die("Select query unseccessfull");

                    if (mysqli_num_rows($result2) > 0) {
                        ?>
                        <div id="table">
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">CONTACT</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">ADDRESS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                    ?>
                                        <tr>

                                            <td><?Php echo $row2['ID']; ?></td>
                                            <td><?Php echo $row2['Contact']; ?></td>
                                            <td><?Php echo $row2['Email']; ?></td>
                                            <td><?Php echo $row2['Name']; ?></td>
                                            <td><?Php echo $row2['Address']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    <?php
                    } else {
                    ?>
                        <script>
                            document.getElementById('showw').innerHTML = "NO RECORD FOUND FOUND";
                            document.getElementById('showw').style.display = "block";

                            function show() {
                                document.getElementById('showw').innerHTML = "";
                            }
                            let clr = setTimeout(show, 2000);

                            // clearTimeout(clr);
                        </script>

                <?php
                    }
                }
                mysqli_close($conn);
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
</body>

</html>