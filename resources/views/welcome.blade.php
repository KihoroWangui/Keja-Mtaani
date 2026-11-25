<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Keja Mtaani</title>

    <style>

        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* ================= NAVBAR ================= */

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #f5f5f5;
        }

        nav a {
            text-decoration: none;
            margin-left: 20px;
            color: #333;
        }

        /* ================= HERO ================= */

        .hero {
            text-align: center;
            padding: 80px 20px;
            background-color: #e8f5e9;
        }

        .hero h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        /* ================= BUTTONS ================= */

        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: green;
            color: white;
        }

        .btn-secondary {
            background-color: white;
            border: 1px solid green;
            color: green;
        }

        /* ================= GENERAL SECTION ================= */

        .section {
            padding: 80px 20px;
            text-align: center;
        }

        /* ================= HOW IT WORKS BACKGROUND ================= */

        section.section:nth-of-type(2) {
            background-image: url('/images/houses backgorund.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            position: relative;
            color: white;
            overflow: hidden;
        }

        section.section:nth-of-type(2)::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.6);
        }

        section.section:nth-of-type(2) h2,
        section.section:nth-of-type(2) .steps {
            position: relative;
            z-index: 2;
        }

        /* ================= STEPS ================= */

        .steps {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .step {
            max-width: 220px;
        }

        /* ================= PRICING ================= */

        .pricing p {
            font-size: 18px;
            margin: 10px 0;
        }

        /* ================= FOOTER ================= */

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <h2 class="navbar-brand mb-0">Keja Mtaani</h2>

        <!-- Hamburger button -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#kejaNavbar"
                aria-controls="kejaNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="kejaNavbar">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= route('login') ?>">Login</a>
                <a class="nav-link" href="<?= route('houses') ?>">Houses</a>
                <a class="nav-link" href="<?= route('agents') ?>">Agents</a>
                <a class="nav-link" href="<?= route('bot') ?>">Keja Bot</a>
            </div>
        </div>

    </div>
</nav>

    <!-- ================= HERO ================= -->

    <section class="hero">

        <h1>House hunting made easier and quicker</h1>

        <p>
            Connect with trusted house hunting agents at standardized rates
        </p>

        <button class="btn btn-primary">
            Find an Agent
        </button>

        <button class="btn btn-secondary">
            View Houses
        </button>

    </section>

    <!-- ================= HOW IT WORKS ================= -->

    <section class="section">

        <h2>How It Works</h2>

        <div class="steps">

            <div class="step">
                <h3>Search</h3>
                <p>Choose your location and budget</p>
            </div>

            <div class="step">
                <h3>Hire</h3>
                <p>Select an agent at a fixed rate</p>
            </div>

            <div class="step">
                <h3>View</h3>
                <p>Visit houses with your agent</p>
            </div>

        </div>

    </section>

    <!-- ================= CTA ================= -->

    <section class="section">

        <h2><strong>Ready to Find Your Next House?</strong></h2>

        <button class="btn btn-primary">
            Get Started
        </button>
        <button class="btn btn-primary">
            Get help
        </button>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer>
        <p>&copy; 2026 Keja Mtaani. All rights reserved.</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
