<?php
include 'header.php';
?>

<!-- main start -->
<main>

    <div class="container">

        <div class="header">
            <span>Category List</span>
            <div class="box">
                <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search" autocomplete="off">
            </div>
        </div>

        <div class="body">
        
            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category Type</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Non-Veg Starters</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Main</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Empire</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox">
                                <label class="toggle" for="cbx-50">
                                    <span>
                                        <svg viewBox="0 0 10 10" height="10px" width="10px">
                                            <path
                                                d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z">
                                            </path>
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button onclick="editItem('row1')" class="text-blue-500 hover:text-blue-700">Edit</button>
                            <button onclick="deleteItem('row1')" class="text-red-500 hover:text-red-700">Delete</button>
                            <button onclick="viewItem('row1')" class="text-green-500 hover:text-green-700">View</button>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                    
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">0001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Non-Veg Starters</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Addon</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Empire</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-51" type="checkbox">
                                <label class="toggle" for="cbx-51">
                                    <span>
                                        <svg viewBox="0 0 10 10" height="10px" width="10px">
                                            <path
                                                d="M5,1 L5,1 C2.790861,1 1,2.790861 1,5 L1,5 C1,7.209139 2.790861,9 5,9 L5,9 C7.209139,9 9,7.209139 9,5 L9,5 C9,2.790861 7.209139,1 5,1 L5,9 L5,1 Z">
                                            </path>
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button onclick="editItem('row1')" class="text-blue-500 hover:text-blue-700">Edit</button>
                            <button onclick="deleteItem('row1')" class="text-red-500 hover:text-red-700">Delete</button>
                            <button onclick="viewItem('row1')" class="text-green-500 hover:text-green-700">View</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

</main>

<?php
include 'footer.php';
?>