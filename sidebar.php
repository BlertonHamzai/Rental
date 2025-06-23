<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .nav-link i {
            margin-right: 8px; 
        }
        .nav-link {
            display: flex;
            align-items: center;
        }
    </style>
</head>

<div class="col-2 bg-light shadow">
    <nav class="col-md-3 col-lg-2 d-md-block sidebar vh-100 collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link text-white">
                        <i class="fa-solid fa-house-user"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="reservationDashboard.php" class="nav-link text-white">
                        <i class="fa fa-ticket"></i> Reservation
                    </a>
                </li>
                <li class="nav-item">
                    <a href="usersDashboard.php" class="nav-link text-white">
                        <i class="fa-solid fa-user"></i> Users
                    </a>
                </li>
            </ul>
            
        </div>
    </nav>
</div>
