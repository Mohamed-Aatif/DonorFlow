<!DOCTYPE html>
<html>
<head>
    <title>Open New Window</title>
    <script type="text/javascript">
        function openTableWindow() {
            var height = screen.height;
            var newWindow = window.open("", "TableWindow", `height=${height},left=0,top=0`);
            newWindow.document.write(`
                <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 25px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #0003;
            box-shadow: 0 2px 5px #0005;
        }
        .brand-header {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            border-bottom: 2px solid #f5f5f5;
            padding-bottom: 20px;
        }
        .brand-logo img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }
        .brand-info-header {
            display: flex;
            flex-direction: column;
        }
        .brand-name {
            font-size: 24px;
            font-weight: bold;
        }
        .brand-tagline {
            font-size: 18px;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f5f5f5;
        }
        .navbar {
            display: flex;
            justify-content: flex-end;
            padding: 20px;
            background-color: #333;
            color: #fff;
        }
        .print-button button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #fff;
            border: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="print-button">
            <button onclick="window.print()">Print</button>
        </div>
    </div>
    <div class="container">
        <div class="brand-header">
            <div class="brand-logo">
                <img src="https://marketplace.canva.com/EAFaFUz4aKo/2/0/1600w/canva-yellow-abstract-cooking-fire-free-logo-JmYWTjUsE-Q.jpg" alt="Brand Logo">
            </div>
            <div class="brand-info-header">
                <div class="brand-name">Brand Name</div>
                <div class="brand-tagline">Brand Tagline</div>
            </div>
        </div>
        <table>
            <tr>
                <th>Field</th>
                <th>Details</th>
            </tr>
            <tr>
                <td>Industry</td>
                <td>Brand Industry</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>Brand Description</td>
            </tr>
            <tr>
                <td>Registration No</td>
                <td>Brand Registration No</td>
            </tr>
            <tr>
                <td>Licenses and Permits</td>
                <td>Brand Licenses And Permits</td>
            </tr>
            <tr>
                <td>Tax Identification No</td>
                <td>Brand Tax Identification No</td>
            </tr>
            <tr>
                <td>Compliance Certificates</td>
                <td>Brand Compliance Certificates</td>
            </tr>
            <tr>
                <td>Incorporation Date</td>
                <td>Brand Incorporation Date</td>
            </tr>
            <tr>
                <td>Contact Person</td>
                <td>Brand Contact Person</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>Brand Email</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>Brand Phone</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    Brand Address<br>
                    Brand City, Brand State, Brand Country - Brand Pincode
                </td>
            </tr>
            <tr>
                <td>Region</td>
                <td>Brand Region</td>
            </tr>
            <tr>
                <td>Revenue</td>
                <td>Brand Revenue</td>
            </tr>
            <tr>
                <td>Partnerships</td>
                <td>Brand Partnerships</td>
            </tr>
            <tr>
                <td>Website URL</td>
                <td><a href="brand-website-url" target="_blank">Brand Website Url</a></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>Brand Status</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>Brand Created At</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>Brand Updated At</td>
            </tr>
        </table>
    </div>
</body>
</html>
            `);
            newWindow.document.close();
        }
    </script>
</head>
<body>
    <button onclick="openTableWindow()">Open Table</button>
</body>
</html>
