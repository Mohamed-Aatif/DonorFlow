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

<style>
    nav,main {
        left: 0;
        width: 100vw !important;
    }
</style>

<body>

    <!-- Navbar Start: This section contains the navigation links for the website -->
    <nav>
        <div class="nav-box">
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
