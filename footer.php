    <script>
    // This function is used to show number of row 
    $(document).ready(function () {
        $('#myTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 10
        });
    });

    </script>
    
    <!-- Brand Detail TableScript  -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- This script is used to toggle side bar -->
    <script src="./js/sidebar-script.js"></script>
    <script src="./js/toggle-table-row.js"></script>
    <script src="./js/table-pagination.js"></script>
    <script src="./js/delete-record.js"></script>
    <script src="./js/conditional-dropdown.js"></script>
    <script src="./js/filter-data.js"></script>
    <script src="./js/fetch-bank-details.js"></script>

</body>

</html>