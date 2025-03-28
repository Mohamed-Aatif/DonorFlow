<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Add New Donation</span>
        </div>

        <div class="body">
            <!-- <form action=""> -->
            <!-- <div class="form-control"> -->
            <label for="">Enter Required Blood Group</label>
            <select id="bloodGroup" name="bloodGroup">
                <option selected disabled>Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <!-- </div> -->
            <!-- </form> -->
        </div>

</main>

<!-- main end -->

<?php
include 'footer.php';
?>