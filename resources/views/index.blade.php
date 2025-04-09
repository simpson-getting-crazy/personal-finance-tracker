@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Header -->
    <div class="header">
        <h5 class="mb-0">Dashboard</h5>
        <div class="navbar-icons">
            <div class="icon">
                <i class='bx bx-search'></i>
            </div>
            <div class="dropdown">
                <div class="user-profile dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User">
                </div>
                <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistic Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="statistic-card primary">
                <div class="statistic-icon">
                    <i class='bx bx-time'></i>
                </div>
                <div class="statistic-title">Count of Currently</div>
                <div class="statistic-value">4 min</div>
                <div class="statistic-subtitle">Open Conversations</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="statistic-card light-primary">
                <div class="statistic-icon">
                    <i class='bx bx-chat'></i>
                </div>
                <div class="statistic-title">Count of All</div>
                <div class="statistic-value">411</div>
                <div class="statistic-subtitle">Conversations</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="statistic-card secondary">
                <div class="statistic-icon">
                    <i class='bx bx-stopwatch'></i>
                </div>
                <div class="statistic-title">Avg Response Time</div>
                <div class="statistic-value">1 h 57 min</div>
                <div class="statistic-subtitle">For Conversations</div>
            </div>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="row g-4">
        <!-- Registered Users Card -->
        <div class="col-md-6">
            <div class="info-card">
                <div class="info-header">
                    <div class="info-title">
                        <div class="info-icon">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="value">620 <span class="text-muted small">Count of Registered
                                Users</span></div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="registeredTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="users-tab" data-bs-toggle="tab" data-bs-target="#users-tab-pane"
                            type="button" role="tab">Users</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="chart-tab" data-bs-toggle="tab" data-bs-target="#chart-tab-pane"
                            type="button" role="tab">Chart</button>
                    </li>
                    <li class="nav-item ms-auto">
                        <select class="dropdown-select">
                            <option>Last Month</option>
                            <option>Last Week</option>
                            <option>Last Year</option>
                        </select>
                    </li>
                </ul>

                <div class="tab-content" id="registeredTabContent">
                    <div class="tab-pane fade show active" id="users-tab-pane" role="tabpanel" aria-labelledby="users-tab"
                        tabindex="0">
                        <ul class="user-list">
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Tom Reynolds</div>
                                    <div class="user-role">App Designer</div>
                                </div>
                            </li>
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Clara Halstead</div>
                                    <div class="user-role">Mobile Developer</div>
                                </div>
                            </li>
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Maria Murphy</div>
                                    <div class="user-role">Systems Analyst</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="chart-tab-pane" role="tabpanel" aria-labelledby="chart-tab"
                        tabindex="0">
                        <div class="chart-container">
                            <canvas id="registeredUsersChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Anonymous Users Card -->
        <div class="col-md-6">
            <div class="info-card">
                <div class="info-header">
                    <div class="info-title">
                        <div class="info-icon">
                            <i class='bx bx-user-x'></i>
                        </div>
                        <div class="value">318 <span class="text-muted small">Count of Anonymous
                                Users</span></div>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="anonymousTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="anon-users-tab" data-bs-toggle="tab"
                            data-bs-target="#anon-users-tab-pane" type="button" role="tab">Users</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="anon-chart-tab" data-bs-toggle="tab"
                            data-bs-target="#anon-chart-tab-pane" type="button" role="tab">Chart</button>
                    </li>
                    <li class="nav-item ms-auto">
                        <select class="dropdown-select">
                            <option>Last Week</option>
                            <option>Last Month</option>
                            <option>Last Year</option>
                        </select>
                    </li>
                </ul>

                <div class="tab-content" id="anonymousTabContent">
                    <div class="tab-pane fade show active" id="anon-users-tab-pane" role="tabpanel"
                        aria-labelledby="anon-users-tab" tabindex="0">
                        <ul class="user-list">
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Maria Murphy</div>
                                    <div class="user-role">Systems Analyst</div>
                                </div>
                            </li>
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Elijah Hampton</div>
                                    <div class="user-role">UX Designer</div>
                                </div>
                            </li>
                            <li class="user-item">
                                <div class="user-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User">
                                </div>
                                <div class="user-info">
                                    <div class="user-name">Olivia Hubbard</div>
                                    <div class="user-role">Social Media</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="anon-chart-tab-pane" role="tabpanel" aria-labelledby="anon-chart-tab"
                        tabindex="0">
                        <div class="chart-container">
                            <canvas id="anonymousUsersChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
