<?php
include 'header.php';
?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Outlet Details</span>
            <div class="box">
                <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search" autocomplete="off">
            </div>
        </div>

        <div class="body">

            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Emp ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Designation</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">City</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Outlet</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Blood Group</th>
                        <!-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reporting Manager</th> -->
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00001</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mohamed Aatif</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Call Center</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bangalore</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Head Office</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">O+</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox" checked>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00002</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yaseer</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Call Center</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bangalore</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">ALK</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">AB+</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox" checked>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00003</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Imtiyaz</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Manager</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Chennai</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Head Office</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">A+</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox" checked>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00004
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mohamed Aatif</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Call Center</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bangalore</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Head Office</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">O+</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox" checked>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00005
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Mohamed Aatif</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Call Center</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Bangalore</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Head Office</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">O+</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <div class="checkbox-wrapper-51">
                                <input id="cbx-50" type="checkbox" checked>
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
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <button>✏️</button>
                            <button>🗑️</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>

</main>

<!-- main end -->
<?php

include 'footer.php';

?>