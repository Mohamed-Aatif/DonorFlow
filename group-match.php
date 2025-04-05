<?php
include 'header.php';
?>

<!-- main start -->

<main>
    <div class="breadcrumb-container">
        <ul class="breadcrumbs">
            <li><a href="dashboard.php">Home</a></li>
            <li class="separator">/</li>
            <li><a href="group-match.php">Match Blood Group</a></li>
        </ul>
    </div>

    <div class="container">

        <div class="header">
            <span>Compatible Donor Blood Groups</span>
        </div>

        <div class="body">
            <!-- <form action=""> -->
            <div class="form-control">
                <label for="">Select Blood Group</label>
                <select id="blood-group" name="blood-group" onchange="updateTable()">
                    <option disabled>Select Blood Group</option>
                    <option value="ALL" selected>ALL</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>

            <table class="min-w-full divide-y divide-gray-200 detail-table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Compatible Donor Blood Groups</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200" id="donor-table">

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>A+</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>A-</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>B+</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>B-</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>AB+</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>AB-</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>O+</td>
                    </tr>

                    <tr>
                        <td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>O-</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</main>

<!-- main end -->


<script>
    function updateTable() {
        const donorTable = document.getElementById("donor-table");
        const selectedGroup = document.getElementById("blood-group").value;

        const compatibility = {
            "A+": ["A+", "A-", "O+", "O-"],
            "A-": ["A-", "O-"],
            "B+": ["B+", "B-", "O+", "O-"],
            "B-": ["B-", "O-"],
            "AB+": ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"],
            "AB-": ["A-", "B-", "AB-", "O-"],
            "O+": ["O+", "O-"],
            "O-": ["O-"],
            "ALL": ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"]
        };

        donorTable.innerHTML = compatibility[selectedGroup]
            .map(group => `<tr><td class='px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500'>${group}</td></tr>`)
            .join("");
    }
</script>

<?php
include 'footer.php';
?>