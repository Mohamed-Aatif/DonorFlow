<?php

include 'header.php';

?>

<!-- main start -->

<main>

    <div class="container">

        <div class="header">
            <span>Brand List</span>

            <select id="rowsPerPage" style="width: 70px;">
                <option value="10" selected>10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <div class="body">
            <!-- 
            <table class="min-w-full divide-y divide-gray-200" id="myTable">

                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Logo</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Code</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Contact No</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-200" id="tableBody">

                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <img src="./img/brand-logo1.avif" alt="">
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Empire Restaurant</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">EM</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">info@hotelempire.in</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+91 98765 43210</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">Active</span>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">View Details</td>

                    </tr>

                    <tr id="row1-details" class="hidden bg-gray-50">

                        <td colspan="7" class="px-6 py-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold">Specifications</h3>
                                    <ul class="mt-2 space-y-2 text-sm text-gray-600">
                                        <li>Processor: Intel Core i7</li>
                                        <li>RAM: 16GB DDR4</li>
                                        <li>Storage: 512GB SSD</li>
                                        <li>Display: 15.6" 4K</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold">Additional Information</h3>
                                    <p class="mt-2 text-sm text-gray-600">Premium build quality with aluminum
                                        chassis, backlit keyboard, and fingerprint sensor for enhanced security.</p>
                                    <div class="mt-4">
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">In
                                            Stock</span>
                                        <span class="ml-2 text-sm font-medium text-gray-900">$1,299.99</span>
                                    </div>
                                </div>
                            </div>
                        </td>

                    </tr>

                </tbody>

            </table> -->

            <!-- <div id="pagination" class="pagination"></div> -->

            <!-- <br> -->

            <table class="min-w-full divide-y divide-gray-200" id="myTable">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Brand ID</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Brand Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Brand Logo</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Brand
                            Tagline
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Brand Representative</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Brand Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Inauguration Date</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00001
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kammanahalli</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KH</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Empire</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Siddeq</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+91 98765 43210</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-15</td>

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

                        <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <button onclick="editItem('row1')" class="text-blue-500 hover:text-blue-700">Edit</button>
                            <button onclick="deleteItem('row1')" class="text-red-500 hover:text-red-700">Delete</button>
                            <button onclick="viewItem('row1')" class="text-green-500 hover:text-green-700">View</button>
                        </td> -->

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">
                            <a href="brand-details.php?id=00001" class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">View Details</a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50 cursor-pointer" onclick="toggleDetails('row1')">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">00001
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Kammanahalli</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">KRM</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Empire</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Siddeq</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">+91 98765 43210</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2024-01-15</td>

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

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600">View Details</td>
                        
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