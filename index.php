
<?php
// Branch Sales Management - Landing Page
$features = [
    [
        "icon" => "📊",
        "title" => "Sales Management",
        "description" => "Record, manage and monitor all sales transactions efficiently."
    ],
    [
        "icon" => "📦",
        "title" => "Inventory Management",
        "description" => "Track products, stock levels and stock movements in real time."
    ],
    [
        "icon" => "🏢",
        "title" => "Branch Management",
        "description" => "Manage multiple branches from one centralized platform."
    ],
    [
        "icon" => "👥",
        "title" => "Customer Management",
        "description" => "Manage customer information and purchase history."
    ],
    [
        "icon" => "📈",
        "title" => "Reports & Analytics",
        "description" => "Generate reports and analyze branch sales performance."
    ],
    [
        "icon" => "🔐",
        "title" => "Secure Access",
        "description" => "Protect your business information with role-based access."
    ]
];

$branches = [
    ["name" => "Bunia Branch", "location" => "Bunia", "sales" => "$25,450"],
    ["name" => "Goma Branch", "location" => "Goma", "sales" => "$31,280"],
    ["name" => "Beni Branch", "location" => "Beni", "sales" => "$18,750"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Branch Sales Management</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            <i class="bi bi-shop"></i>
            Branch Sales Management<span>&nbsp;BSM</span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link active" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#branches">Branches</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item ms-lg-3">
                    <a href="#login" class="btn btn-light px-4">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>


<!-- ================= HERO ================= -->

<section id="home" class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="badge bg-light text-primary mb-3 px-3 py-2">
                    SMART BUSINESS MANAGEMENT
                </span>

                <h1>
                    Manage Your Branch.
                    <span>Grow Your Sales.</span>
                </h1>

                <p class="hero-text">
                    A centralized Branch Sales Management System designed
                    to help businesses manage sales, inventory, customers,
                    employees and branch performance efficiently.
                </p>

                <div class="mt-4">

                    <a href="#features"
                       class="btn btn-primary btn-lg me-2">
                        Get Started
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="#about"
                       class="btn btn-outline-light btn-lg">
                        Learn More
                    </a>

                </div>

            </div>


            <!-- Dashboard preview -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <div class="dashboard-card">

                    <div class="dashboard-header">
                        <strong>Sales Dashboard</strong>

                        <span class="online">
                            ● Online
                        </span>
                    </div>

                    <div class="row g-3 mt-2">

                        <div class="col-6">
                            <div class="stat-card">
                                <small>Total Sales</small>
                                <h3>$75,480</h3>
                                <span class="positive">
                                    +18.5%
                                </span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="stat-card">
                                <small>Customers</small>
                                <h3>1,250</h3>
                                <span class="positive">
                                    +12.4%
                                </span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="stat-card">
                                <small>Products</small>
                                <h3>1,540</h3>
                                <span>Available</span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="stat-card">
                                <small>Branches</small>
                                <h3>12</h3>
                                <span>Active</span>
                            </div>
                        </div>

                    </div>

                    <div class="sales-chart mt-4">

                        <div class="chart-title">
                            Monthly Sales
                        </div>

                        <div class="bars">

                            <div class="bar" style="height:45%"></div>
                            <div class="bar" style="height:65%"></div>
                            <div class="bar" style="height:50%"></div>
                            <div class="bar" style="height:80%"></div>
                            <div class="bar" style="height:70%"></div>
                            <div class="bar" style="height:95%"></div>
                            <div class="bar" style="height:85%"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= STATISTICS ================= -->

<section class="statistics">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">
                <h2>12+</h2>
                <p>Active Branches</p>
            </div>

            <div class="col-md-3">
                <h2>1,500+</h2>
                <p>Products</p>
            </div>

            <div class="col-md-3">
                <h2>8,000+</h2>
                <p>Customers</p>
            </div>

            <div class="col-md-3">
                <h2>$250K+</h2>
                <p>Total Sales</p>
            </div>

        </div>

    </div>

</section>


<!-- ================= FEATURES ================= -->

<section id="features" class="section">

    <div class="container">

        <div class="section-heading">

            <span>OUR FEATURES</span>

            <h2>
                Everything You Need to Manage Your Business
            </h2>

            <p>
                Powerful tools designed to simplify your daily
                branch sales operations.
            </p>

        </div>


        <div class="row g-4">

            <?php foreach ($features as $feature): ?>

                <div class="col-md-6 col-lg-4">

                    <div class="feature-card">

                        <div class="feature-icon">
                            <?= $feature["icon"]; ?>
                        </div>

                        <h4>
                            <?= htmlspecialchars($feature["title"]); ?>
                        </h4>

                        <p>
                            <?= htmlspecialchars($feature["description"]); ?>
                        </p>

                        <a href="#login">
                            Learn more →
                        </a>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ================= BRANCHES ================= -->

<section id="branches" class="section branches-section">

    <div class="container">

        <div class="section-heading">

            <span>BRANCHES</span>

            <h2>Monitor Your Branches</h2>

            <p>
                Get an overview of sales performance across
                your different branches.
            </p>

        </div>


        <div class="row g-4">

            <?php foreach ($branches as $branch): ?>

                <div class="col-md-4">

                    <div class="branch-card">

                        <div class="branch-icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <h4>
                            <?= htmlspecialchars($branch["name"]); ?>
                        </h4>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            <?= htmlspecialchars($branch["location"]); ?>
                        </p>

                        <hr>

                        <small>Total Sales</small>

                        <h3>
                            <?= htmlspecialchars($branch["sales"]); ?>
                        </h3>

                        <span class="status">
                            ● Active
                        </span>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section id="about" class="section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="section-label">
                    ABOUT THE SYSTEM
                </span>

                <h2>
                    One Platform.
                    Complete Control.
                </h2>

                <p>
                    Branch Sales Management helps organizations
                    centralize their sales operations and improve
                    decision-making through real-time information.
                </p>

                <p>
                    Managers can monitor branches, products,
                    customers, employees and sales from a
                    single platform.
                </p>

                <ul class="check-list">

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Centralized sales management
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Real-time inventory monitoring
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Branch performance tracking
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Detailed reports and analytics
                    </li>

                </ul>

            </div>


            <div class="col-lg-6">

                <div class="about-box">

                    <i class="bi bi-graph-up-arrow"></i>

                    <h3>
                        Improve Your Sales Performance
                    </h3>

                    <p>
                        Use data-driven insights to identify
                        opportunities and improve branch performance.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= CTA ================= -->

<section class="cta">

    <div class="container text-center">

        <h2>
            Ready to Take Control of Your Sales?
        </h2>

        <p>
            Start managing your branches, products and sales
            from one powerful platform.
        </p>

        <a href="#login" class="btn btn-light btn-lg">
            Get Started Now
            <i class="bi bi-arrow-right"></i>
        </a>

    </div>

</section>


<!-- ================= LOGIN DEMO ================= -->

<section id="login" class="login-section">

    <div class="container">

        <div class="login-box">

            <div class="text-center">

                <i class="bi bi-person-circle login-icon"></i>

                <h2>System Login</h2>

                <p>
                    Access your Branch Sales Management dashboard.
                </p>

            </div>

            <form method="POST" action="">

                <div class="mb-3">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="admin@example.com"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Enter your password"
                           required>

                </div>

                <button type="submit"
                        name="login"
                        class="btn btn-primary w-100">

                    Login

                </button>

            </form>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <h4>
                    <i class="bi bi-shop"></i>
                    BranchSales
                </h4>

                <p>
                    Smart management for modern businesses.
                </p>

            </div>

            <div class="col-md-6 text-md-end">

                <p>
                    © <?= date("Y"); ?> Fabrice Maliro Corporation.
                    All rights reserved.
                </p>

            </div>

        </div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

