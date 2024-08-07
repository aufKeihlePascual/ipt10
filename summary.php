<?php
// Check if the required fields are set
if (!isset($_POST['name']) || !isset($_POST['email']) || empty($_POST['name']) || empty($_POST['email'])) {
    // Redirect back to the registration page if required fields are missing
    header('Location: register.php');
    exit();
}

// Retrieve and sanitize the input data
$name = htmlspecialchars($_POST['name']);
$dob = htmlspecialchars($_POST['dob']);
$sex = htmlspecialchars($_POST['sex']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$department = htmlspecialchars($_POST['department']);
$program = htmlspecialchars($_POST['program']);
$mobile = htmlspecialchars($_POST['mobile']);

// Map department values to readable text
$departmentNames = [
    'computer_science' => 'Computer Science',
    'mathematics' => 'Mathematics',
    'engineering' => 'Engineering',
    'biology' => 'Biology',
    'chemistry' => 'Chemistry'
];
$departmentDisplay = isset($departmentNames[$department]) ? $departmentNames[$department] : 'Unknown';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(26, 72, 112);
        }

        .container {
            width: 100%;
            max-width: 1000px;
            height: 50vh;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h1 {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .male {
            background-color: blue;
            color: white;
        }

        .female {
            background-color: red;
            color: white;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Summary</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Name</td>
                <td class="<?php echo $sex; ?>"><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td><?php echo ucfirst($sex); ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo nl2br($address); ?></td>
            </tr>
            <tr>
                <td>College Department</td>
                <td><?php echo $departmentDisplay; ?></td>
            </tr>
            <tr>
                <td>Program</td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>
    </div>
    
</body>
</html>