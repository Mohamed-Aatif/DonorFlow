<?php
require 'header.php';
require './backend-script/insert-master.php';
include './backend-script/delete-master.php';
include './backend-script/update-master.php';
// include './backend-script/status-update.php';
?>

<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        /* display: none; */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999 !important;
    }

    .modal-container {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        background-color: #fff;
        border-radius: 5px;
    }

    .modal-container .header {
        padding: 10px;
        color: #888;
        font-weight: 800;
        border-radius: 5px 5px 0 0;
        border-bottom: 1px solid #0001;
    }

    .modal-container .body {
        padding: 10px;
    }
</style>



<div class="popup-overlay" id="popup">
    <div class="popup">
        <div class="container modal-container">
            <div class="header">
                <span>Update City</span>
            </div>
            <div class="body">
                <form id="editForm" method="post">
                    <input type="text" id="cityid" name="cityid" hidden>
                    <div class="form-control">
                        <label for="cityupdate">City</label>
                        <input type="text" id="cityupdate" name="cityupdate" autocomplete="off" required>
                    </div>
                    <div class="form-btn">
                        <button type="submit" name="update" class="success-btn">Submit</button>
                        <button type="button" class="danger-btn" id="closeButton">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>