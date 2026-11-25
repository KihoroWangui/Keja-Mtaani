<DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Hunting Agents</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

/* Navigation */
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

/* Agent Cards Container */
.agent-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    padding: 60px;
    box-sizing: border-box;
}

/* Individual Card */
.agent-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background: #fff;
    box-sizing: border-box;

    /* Let content determine height */
    height: auto;

    /* Prevent content overflow */
    overflow: hidden;

    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Images */
.agent-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    border-radius: 5px;
    margin-bottom: 15px;
}

/* Text */
.agent-card h3,
.agent-card p {
    margin-bottom: 10px;
    overflow-wrap: break-word;
}

/* Tablet: 2 cards per row */
@media (max-width: 992px) {
    .agent-list {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* Mobile: 1 card per row */
@media (max-width: 576px) {
    .agent-list {
        grid-template-columns: 1fr;
        padding: 20px;
    }

    nav {
        padding: 15px 20px;
    }
}
        </style>
</head>
<body>

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

    <div>
        <h2>Our Agents</h2>
        <p>Meet our dedicated team of house hunting agents who are here to help you find your dream home. Our agents are experienced, knowledgeable, and committed to providing exceptional service to our clients.</p>

        <div class="agent-list">
            <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="images\agent mary.png" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and<br>
                    specializes in residential properties.</p>
            </div>
             <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="agent-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
        </div>
    </div>

</body>


</html>
