<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connected Navigation</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 1.8rem;
            color: #ffffff;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            position: relative;
            cursor: pointer;
        }

        ul::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 20px;
            width: 2px;
            background-color: #4F959D;
        }

        li {
            padding: 12px 35px;
            margin: 12px 0;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            color: #495057;
            font-weight: 500;
            position: relative;
            border: 2px solid #4F959D;
        }

        li::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 11px;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background-color: #4F959D;
            border: 2px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #4F959D;
        }

        li:hover {
            background-color: #e9ecef;
            border-color: #adb5bd;
            color: #212529;
        }

        .nested-list {
            padding-left: 50px;
            list-style-type: none;
            position: relative;
        }


        .nested-list li {
            padding: 8px 35px;
            margin: 12px 0;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
            color: #495057;
            font-weight: normal;
            position: relative;
            border: 1px solid #4F959D;
            z-index: 1 !important;
        }

        .nested-list li::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 11px;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background-color: #4F959D;
            border: 2px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #4F959D;
        }

        .nested-list li:hover {
            background-color: #e9ecef;
        }

        .nested-list span::before {
            content: "";
            position: absolute;
            top: 50%;
            left: -30px;
            /* Horizontal line's start position */
            width: 30px;
            /* Horizontal line length */
            height: 2px;
            background-color: #4F959D;
        }

        /* -------------------------------- */

        
        .nested-list > ul::before {
            content: "";
            position: absolute;
            top: -12px;
            bottom: 0;
            left: 20px;
            width: 2px;
            background-color: #4F959D !important;
        }

        .nested-list-1 {
            padding-left: 50px;
            list-style-type: none;
            position: relative;
        }


        .nested-list-1 li {
            padding: 8px 35px;
            margin: 12px 0;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            border-radius: 5px;
            color: #495057;
            font-weight: normal;
            position: relative;
            border: 1px solid #4F959D;
        }

        .nested-list-1 li::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 11px;
            transform: translateY(-50%);
            width: 12px;
            height: 12px;
            background-color: #4F959D;
            border: 2px solid #ffffff;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #4F959D;
        }

        .nested-list-1 li:hover {
            background-color: #e9ecef;
        }

        .nested-list-1 span::before {
            content: "";
            position: absolute;
            top: 50%;
            left: -30px;
            /* Horizontal line's start position */
            width: 30px;
            /* Horizontal line length */
            height: 2px;
            background-color: #4F959D;
        }


        .btn:hover {
            background-color: #4F959D !important;
            color: #ffffff !important;
        }
    </style>
</head>

<body>



    <!-- main start -->
    <main>

        <div class="container">
            <div class="header">
                <h1>Navigation</h1>
            </div>

            <div class="body">

                <ul>
                    <li onclick="navigateToPage('dashboard.php')" class="btn">Home</li>
                    <li>Master</li>
                    <ul class="nested-list">
                        <li onclick="navigateToPage('dashboard.php')" class="btn"><span></span>Donor</li>
                        <ul class="nested-list-1">
                            <li onclick="navigateToPage('dashboard.php')"><span></span>Donor</li>
                            <li onclick="navigateToPage('dashboard.php')"><span></span>Outlet</li>
                            <li onclick="navigateToPage('dashboard.php')"><span></span>Designation</li>
                            <li onclick="navigateToPage('dashboard.php')"><span></span>City</li>
                        </ul>
                        <li onclick="navigateToPage('dashboard.php')" class="btn"><span></span>Outlet</li>
                        <li onclick="navigateToPage('dashboard.php')" class="btn"><span></span>Designation</li>
                        <li onclick="navigateToPage('dashboard.php')" class="btn"><span></span>City</li>
                    </ul>
                    <li>Report</li>
                    <ul class="nested-list">
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Donor</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Outlet</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Designation</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>City</li>
                    </ul>
                    <li>User Management</li>
                    <ul class="nested-list">
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Donor</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Outlet</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Designation</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>City</li>
                    </ul>
                    <li>Record</li>
                    <ul class="nested-list">
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Donor</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Outlet</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>Designation</li>
                        <li onclick="navigateToPage('dashboard.php')"><span></span>City</li>
                    </ul>
                </ul>
            </div>
        </div>

    </main>

    <!-- main end -->

    <script>
        // Generic function to handle navigation dynamically
        function navigateToPage(page) {
            window.location.href = page;
        }
    </script>

    <?php
    include 'footer.php';
    ?>