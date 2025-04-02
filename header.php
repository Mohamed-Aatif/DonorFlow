<?php
require 'db.conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master | Atif</title>
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="./img/icon.png">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <!-- Line Chart Script: This section initializes and renders a line chart using Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <!-- Google Icon Link  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>

    <!-- Navbar Start: This section contains the navigation links for the website -->
    <nav>
        <div class="nav-box">
            <button type="button" id="close" onclick="toggleSidebar()"><span
                    class="material-symbols-outlined">menu</span></button>

            <button type="button" id="mobile-open-btn" onclick="mobileshowSidebar()"><span
                    class="material-symbols-outlined">sort</span></button>
        </div>

        <div class="nav-box"></div>

        <div class="nav-box">
            <div class="boxx">
                <button onclick=" onclick='openquickPopup()'">
                    <label for="layers" class="box"><span class="material-symbols-outlined">layers</span></label>
                </button>
                <button class="refresh-btn1" onclick="location. reload();"><span class="material-symbols-outlined">sync</span></button>
            </div>

            <input type="checkbox" id="layers" hidden>
            <label for="layers" class="box"></label>

            <div class="nav-layers">
                <div class="layer-header">
                    <span>Quick Actions</span>
                </div>
                <div class="layers-btn-box">
                    <button><span class="material-symbols-outlined">shopping_bag</span>Orders</button>
                    <button><span class="material-symbols-outlined">receipt_long</span>Bills</button>
                    <button><span class="material-symbols-outlined">store</span>Outlet</button>
                    <button><span class="material-symbols-outlined">payments</span>Payments</button>
                    <button><span class="material-symbols-outlined">group</span>Users</button>
                    <button onclick="location.href='site-map.php'"><span
                            class="material-symbols-outlined">link</span>Links</button>
                </div>
            </div>

        </div>

        <!-- User Profile  -->
        <div class="nav-box">
            <label for="profile"><img src="https://pics.craiyon.com/2023-07-15/dc2ec5a571974417a5551420a4fb0587.webp"
                    alt="" /></label>
            <input type="checkbox" id="profile" />
            <label for="profile" class="box"></label>
            <div class="nav-profile">
                <div class="nav-header">
                    <div>
                        <img src="https://pics.craiyon.com/2023-07-15/dc2ec5a571974417a5551420a4fb0587.webp"
                            alt="Logo" />
                    </div>
                    <div>
                        <span class="nav-name">Hi Mohamed Aatif</span>
                        <span class="nav-name">mohamedaatif@gmail.com</span>
                    </div>
                </div>
                <div class="nav-body">
                    <button><span class="material-symbols-outlined">person</span>My Profile</button>
                    <button><span class="material-symbols-outlined">settings</span>Setting</button>
                    <button><span class="material-symbols-outlined">forum</span>Feedback</button>
                </div>
                <div class="nav-footer">
                    <button onclick="location.href='index.php'"><span
                            class="material-symbols-outlined">logout</span>Logout</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar end  -->

    <!-- sidebar start  -->

    <aside>

        <div class="header">
            <img src="./img/logo.png" alt="Logo">
            <div id="mobile-close-sidebar" onclick="mobilehideSidebar()"></div>
        </div>

        <div class="body">

            <button class="dropdown-btn btn" onclick="window.location.href='./dashboard.php';"><span
                    class="material-symbols-outlined">edit_square</span>Home</button>

            <button class="dropdown-btn btn" onclick="location.href='add-donation.php'"><span
                    class="material-symbols-outlined">edit_square</span>Donation Form</button>

            <button class="dropdown-btn btn" onclick="location.href='group-match.php'"><span
                    class="material-symbols-outlined">edit_square</span>Match Blood Group</button>

            <button class="dropdown-btn btn" onclick="location.href='add-requirement.php'"><span
                    class="material-symbols-outlined">edit_square</span>Requirement Form</button>


            <button class="dropdown-btn"><span class="material-symbols-outlined">store</span>Master</button>

            <div class="dropdown-container">
                <button onclick="location.href='add-donor.php'">Donor Master</button>
                <button onclick="location.href='add-outlet.php'">Outlet Master</button>
                <button onclick="location.href='add-city.php'">City Master</button>
                <button onclick="location.href='add-designation.php'">Designation Master</button>
                <button onclick="location.href='add-source.php'">Source Master</button>
            </div>

            <button class="dropdown-btn"><span class="material-symbols-outlined">store</span>Record</button>

            <div class="dropdown-container">
                <button onclick="location.href='outlet-details.php'">Donor Record</button>
                <button onclick="location.href='brand-list.php'">Donor List</button>
            </div>

            <button class="dropdown-btn"><span class="material-symbols-outlined">manage_accounts</span>User
                Management</button>

            <div class="dropdown-container">
                <button onclick="window.location.href='add-user.php';">Add User</button>
                <button onclick="window.location.href='manage-user-roles.php';">Manage User Roles</button>
                <button onclick="window.location.href='user-activity.php';">User Activity</button>
                <button onclick="window.location.href='user-activity-reports.php';">User Activity Reports</button>
                <button onclick="window.location.href='user-status.php';">User Status</button>
            </div>

            <button class="dropdown-btn"><span class="material-symbols-outlined">overview</span>Change Log</button>

            <div class="dropdown-container">
                <button onclick="window.location.href='changes.php';">Changes </button>
                <button onclick="window.location.href='change-history.php';">Change History</button>
                <button onclick="window.location.href='employee-master.php';">Employee Master</button>
                <button onclick="window.location.href='user-master.php';">User Master</button>
                <button onclick="window.location.href='branch-report.php';">Branch Report</button>
            </div>

            <button class="dropdown-btn"><span class="material-symbols-outlined">settings</span>Settings</button>

            <div class="dropdown-container">
                <button onclick="location.href='orders-list.php'">Add Varient</button>
                <button onclick="location.href='brand-list.php'">Brand Lists</button>
                <button onclick="location.href='brand-details.php'">Payment Types List</button>
                <button onclick="location.href='branch.php'">Brand Performance Reports</button>
            </div>

        </div>

    </aside>
    <!-- sidebar end -->