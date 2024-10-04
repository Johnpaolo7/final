<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
<style>
/* styles.css */

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.sidenav {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111;
    padding-top: 20px;
    transition: 0.3s;
}

.sidenav h2 {
    color: #fff;
    text-align: center;
}

.sidenav a {
    padding: 15px 20px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 260px;
    padding: 20px;
}

#data-display {
    margin-top: 20px;
    font-size: 18px;
    border: 1px solid #ccc;
    padding: 15px;
    background-color: #f9f9f9;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}
@media screen and (max-width: 600px) {
    .sidenav {
        width: 100%;
        height: auto;
        position: relative;
    }
    .main {
        margin-left: 0;
    }
}

</style>
</head>
<body>
    <div class="sidenav">
        <h2>Admin Panel</h2>
        <a href="#" onclick="loadData('database1')">Database 1</a>
        <a href="#" onclick="loadData('database2')">Database 2</a>
        <a href="#" onclick="loadData('database3')">Database 3</a>
    </div>

    <div class="main">
        <h1>Dashboard</h1>
        <div id="data-display">Select a database to view data.</div>
        <div id="table-container"></div>
    </div>
    <script>
    // script.js

function loadData(database) {
    const display = document.getElementById('data-display');
    const tableContainer = document.getElementById('table-container');
    
    let data;
    switch(database) {
        case 'database1':
            data = {
                title: 'Data from Database 1',
                table: `
                    <table>
                        <tr><th>ID</th><th>Name</th><th>Value</th></tr>
                        <tr><td>1</td><td>Item A</td><td>$10</td></tr>
                        <tr><td>2</td><td>Item B</td><td>$20</td></tr>
                        <tr><td>3</td><td>Item C</td><td>$30</td></tr>
                    </table>
                `
            };
            break;
        case 'database2':
            data = {
                title: 'Data from Database 2',
                table: `
                    <table>
                        <tr><th>ID</th><th>Name</th><th>Description</th></tr>
                        <tr><td>1</td><td>Item D</td><td>Description for Item D</td></tr>
                        <tr><td>2</td><td>Item E</td><td>Description for Item E</td></tr>
                        <tr><td>3</td><td>Item F</td><td>Description for Item F</td></tr>
                    </table>
                `
            };
            break;
        case 'database3':
            data = {
                title: 'Data from Database 3',
                table: `
                    <table>
                        <tr><th>ID</th><th>Category</th><th>Count</th></tr>
                        <tr><td>1</td><td>Category X</td><td>100</td></tr>
                        <tr><td>2</td><td>Category Y</td><td>200</td></tr>
                        <tr><td>3</td><td>Category Z</td><td>300</td></tr>
                    </table>
                `
            };
            break;
        default:
            data = {
                title: 'No data available.',
                table: ''
            };
    }

    display.innerText = data.title;
    tableContainer.innerHTML = data.table;
}

    </script>
</body>
</html>
