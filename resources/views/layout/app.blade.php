<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Finance Tracker | @yield('title')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- BoxIcons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        :root {
            --primary-color: #5470FF;
            --secondary-color: #FF8956;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --border-radius: 15px;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: transparent;
            padding: 20px;
        }

        .main-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            width: 100%;
            margin: 0 auto;
        }

        .sidebar {
            background-color: white;
            padding: 20px 15px;
            border-right: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            margin-bottom: 25px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #666;
            border-radius: 10px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }

        .nav-link i {
            margin-right: 10px;
            font-size: 20px;
        }

        .nav-link.active {
            background-color: var(--primary-color);
            color: white;
        }

        .nav-link:hover:not(.active) {
            background-color: rgba(84, 112, 255, 0.1);
            color: var(--primary-color);
        }

        .content-area {
            padding: 20px 30px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .statistic-card {
            border-radius: var(--border-radius);
            padding: 20px;
            height: 100%;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .statistic-card.primary {
            background-color: var(--primary-color);
        }

        .statistic-card.light-primary {
            background-color: #7892FF;
        }

        .statistic-card.secondary {
            background-color: var(--secondary-color);
        }

        .statistic-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .statistic-title {
            font-size: 14px;
            opacity: 0.8;
            margin-bottom: 5px;
        }

        .statistic-value {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .statistic-subtitle {
            font-size: 12px;
            opacity: 0.8;
        }

        .info-card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        .info-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .info-title {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-icon {
            background-color: #F5E6E6;
            color: #D45B5B;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tab-content {
            padding-top: 20px;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .user-item:last-child {
            border-bottom: none;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-info {
            flex-grow: 1;
        }

        .user-name {
            font-weight: 500;
            margin-bottom: 2px;
        }

        .user-role {
            font-size: 12px;
            color: #888;
        }

        .chart-container {
            height: 200px;
        }

        .dropdown-select {
            border: none;
            background-color: transparent;
            color: #888;
            font-size: 14px;
            cursor: pointer;
        }

        .log-out {
            margin-top: auto;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            color: #666;
            border-radius: 10px;
            cursor: pointer;
        }

        .log-out i {
            margin-right: 10px;
        }

        .sidebar-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .navbar-icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .navbar-icons .icon {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.03);
            cursor: pointer;
            transition: all 0.3s;
        }

        .navbar-icons .icon:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .user-profile {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border-radius: var(--border-radius);
            margin-top: 10px;
            background-color: white;
        }

        .dropdown-item {
            color: var(--dark-color);
            padding: 12px 20px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .dropdown-item:hover {
            background-color: rgba(84, 112, 255, 0.1);
            color: var(--primary-color);
        }

        .dropdown-item:active {
            background-color: var(--primary-color);
            color: white;
        }

        .user-profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: -250px;
                width: 250px !important;
                height: 100vh;
                z-index: 999;
                transition: all 0.3s;
            }

            .sidebar.show {
                left: 0;
            }

            .content-area {
                width: 100% !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="main-container">
            <div class="row g-0">
                <div class="col-lg-2 col-md-3 sidebar">
                    @include('layout.sidebar')
                </div>
                <div class="col-lg-10 col-md-9 content-area">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"
        integrity="sha384-VQqxDN0EQCkWoxt/0vsQvZswzTHUVOImccYmSyhJTp7kGtPed0Qcx8rK9h9YEgx+" crossorigin="anonymous">
    </script>
    <script>
        // Initialize Charts
        document.addEventListener('DOMContentLoaded', function() {
            // Registered Users Chart
            const registeredUsersCtx = document.getElementById('registeredUsersChart').getContext('2d');
            const registeredUsersChart = new Chart(registeredUsersCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    datasets: [{
                        label: 'Registered Users',
                        data: [120, 190, 180, 270, 310, 290, 340, 380, 420, 450],
                        borderColor: '#D45B5B',
                        backgroundColor: 'rgba(212, 91, 91, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });

            // Anonymous Users Chart
            const anonymousUsersCtx = document.getElementById('anonymousUsersChart').getContext('2d');
            const anonymousUsersChart = new Chart(anonymousUsersCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Anonymous Users',
                        data: [50, 90, 150, 120, 160, 180, 130],
                        borderColor: '#D45B5B',
                        backgroundColor: 'rgba(212, 91, 91, 0.1)',
                        tension: 0.4,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        });

        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.querySelector('.navbar-toggler');
            const sidebar = document.querySelector('.sidebar');

            if (menuToggle) {
                menuToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('show');
                });
            }
        });
    </script>
</body>

</html>
