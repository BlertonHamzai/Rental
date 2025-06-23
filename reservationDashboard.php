<?php
include_once('config.php');

$sql = "SELECT * FROM book";
$prep = $conn->prepare($sql);
$prep->execute();

$users_data = $prep->fetchAll();
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
            background-color: #003366;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        nav.navbar {
            background-color: #003366;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        nav.navbar a.navbar-brand {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: 600;
        }

        nav.navbar a {
            color: #ffffff !important;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
            transition: all 0.3s ease;
            color: #ffffff;
        }

        .btn-danger:hover {
            background-color: #c9302c;
            border-color: #c12e2a;
        }

        .btn-success {
            background-color: #5cb85c;
            border-color: #5cb85c;
            transition: all 0.3s ease;
            color: #ffffff;
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
            background-color: #003366;
            color: #ffffff;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .table thead th {
            font-weight: 600;
            font-size: 1rem;
        }

        .sidebar {
            background-color: #003366;
            color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 15px;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #005288;
            color: #ffffff;
            border-radius: 4px;
        }

        .sidebar .sidebar-header {
            font-size: 1.5rem;
            font-weight: 600;
            color: #ffffff;
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
            color: #ffffff;
        }

        .fa:hover {
            color: #f8f9fa;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                margin-bottom: 20px;
                width: 100%;
            }

            .container-fluid {
                padding-left: 15px;
                padding-right: 15px;
            }

            .table thead th, .table tbody td {
                font-size: 0.9rem;
            }

            .table {
                font-size: 0.85rem;
            }

            .btn {
                font-size: 0.9rem;
                padding: 8px 15px;
            }

            .navbar-brand {
                font-size: 1.25rem;
            }

            .btn-danger, .btn-success {
                font-size: 0.9rem;
                padding: 8px 12px;
            }
        }

        @media (max-width: 576px) {
            .table img {
                width: 80px;
            }

            .btn {
                font-size: 0.85rem;
                padding: 8px 12px;
            }

            .navbar-brand {
                font-size: 1.2rem;
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
                    <div class="row">
                        <div class="col">
                            <table class="table table-striped border">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Pickup Location</th>
                                        <th>Return Location</th>
                                        <th>Pickup Date</th>
                                        <th>Return Date</th>
                                        <th>Pickup Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($users_data as $user_data){ ?>
                                    <tr>
                                        <td><?php echo $user_data['id']; ?></td>
                                        <td><?php echo $user_data['pickuplocation']; ?></td>
                                        <td><?php echo $user_data['locationoff']; ?></td>
                                        <td><?php echo $user_data['pickupdate']; ?></td>
                                        <td><?php echo $user_data['pickoffdate']; ?></td>
                                        <td><?php echo $user_data['pickuptime']; ?></td>
                                        <td>
                                            <a href="editReservation.php?id=<?php echo $user_data['id']; ?>" class="btn btn-success">Edit</a> | 
                                            <a href="deleteReservation.php?id=<?php echo $user_data['id']; ?>" class="btn btn-danger">Delete</a>
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
