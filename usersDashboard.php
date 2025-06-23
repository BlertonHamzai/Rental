<?php
include_once('config.php');

if(empty($_SESSION['email']) || $_SESSION['is_admin'] != "true"){
    header("Location: loginAdmin.php");
}

$sql = "SELECT * FROM users";
$selectUsers = $conn->prepare($sql);
$selectUsers->execute();

$users_data = $selectUsers->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #003366; /* Navy Blue */
            color: #ffffff; /* White text */
            margin: 0;
            padding: 0;
        }

        nav.navbar {
            background-color: #003366; /* Navy Blue */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav.navbar a.navbar-brand {
            color: #ffffff; /* White text */
            font-size: 1.5rem;
            font-weight: 600;
        }

        nav.navbar a {
            color: #ffffff !important; /* White text for links */
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
            transition: all 0.3s ease;
            color: #ffffff; /* White text */
        }

        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #c12e2a;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            transition: all 0.3s ease;
            color: #ffffff; /* White text */
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-success {
            background-color: #5cb85c;
            border-color: #5cb85c;
            transition: all 0.3s ease;
            color: #ffffff; /* White text */
        }

        .btn-success:hover {
            background-color: #4cae4c;
            border-color: #4cae4c;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table thead {
            background-color: #003366; /* Navy Blue */
            color: #ffffff; /* White text */
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .table thead th {
            font-weight: 600;
            font-size: 1rem;
        }

        .sidebar {
            background-color: #003366;
            color: #ffffff; /* White text */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #ffffff; /* White text */
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 15px;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #005288;
            color: #ffffff; /* Keep text white */
            border-radius: 4px;
        }

        .sidebar .sidebar-header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #ffffff; /* White text */
            margin-bottom: 20px;
        }

        .container-fluid {
            margin-top: 20px;
        }

        .btn {
            border-radius: 20px;
            font-size: 1rem;
            padding: 10px 20px;
        }

        .d-flex.justify-content-end {
            margin-top: 20px;
        }

        /* Font Awesome Icons */
        .fa {
            color: #ffffff; /* White icons */
        }

        .fa:hover {
            color: #f8f9fa; /* Hover effect: slightly lighter */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 20px;
            }

            .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
            }

            .table thead th, .table tbody td {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Welcome, <?php echo $_SESSION['email']; ?></a>
            <a href="loginAdmin.php" class="btn btn-danger justify-content-end d-flex">
                Logout <i class="fas fa-sign-out-alt ms-2 d-flex align-items-center"></i>
            </a>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-header">Admin Panel</div>
                <?php include_once("sidebar.php"); ?>
            </div>
            <div class="col-md-9 col-lg-10">
                <div class="container mt-4">
                    <a href="addUser.php" class="btn btn-success mb-3">Add User</a>
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped border">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users_data as $user_data){ ?>
                                    <tr>
                                        <td><?php echo $user_data['id']; ?></td>
                                        <td><?php echo $user_data['email']; ?></td>
                                        <td><?php echo $user_data['password']; ?></td>
                                        <td>
                                            <a href="editUser.php?id=<?php echo $user_data['id']; ?>" class="btn btn-success">Edit</a> | 
                                            <a href="deleteUsers.php?id=<?php echo $user_data['id']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
