<DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keja Bot</title>
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

    <nav>
         <h2>Keja Mtaani</h2>

        <div>
            <a href="<?= route('dashboard') ?>">Dashboard</a>
            <a href="<?= route('auth') ?>">Login</a>
            <a href="<?= route('houses') ?>">Houses</a>
            <a href="<?= route('agents') ?>">Agents</a>
            <a href="<?= route('agents') ?>">Keja Bot</a>
            

        </div>

    </nav>
    <div>
        <h2>Houses Currently Available</h2>
        <p>View the various houses currently available in various parts of Nairobi and its Environs</p>
        <p>Search Based on:</p>
        <button>Region
            <select name="region" id="region-select">
                <option value="">All</option>
                 <option value="">Githurai</option>
                <option value="">Ruiru</option>
                <option value="">Juja</option>
                <option value="">Karen</option>
                <option value="">Kiambu</option>
                <option value="">Kileleshwa</option>
                <option value="">Kilimani</option>
                <option value="">Lower Kabate</option>
                <option value="">Kasarani</option>
                <option value="">Roysambu</option>
                <option value="">Waiyaki Way</option>
            </select>
        </button>
        <button>House Type
            <select name="house-type" id="house-type-select">
                <option value="">All</option>
                <option value="">Apartment</option>
                <option value="">Villa</option>
                <option value="">Studio</option>
                <option value="">Bedsitter</option>
                <option value="">One-Bedroom</option>
                <option value="">Mini-One Bedroom</option>
                <option value="">Two-Bedrooms</option>
                <option value="">Three-Bedroom</option>
                <option value="">Four-Bedroom</option>


            </select>
        </button>

        <div class="house-list">
            <div class="kilimani-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="images\agent mary.png" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and<br>
                    specializes in residential properties.</p>
            </div>
             <div class="kiambu-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="Kileleshwa-card">
                <h3>Mary Kimani</h3>
                <p>Senior Agent</p>
                <p>Waiyaki Way Region</p>
                <img src="https://via.placeholder.com/150" alt="Mary Kimani" />
                <p>Contact: 0723 000 000</p>
                <p>Mary has over 10 years of experience in the real estate industry and specializes in residential properties.</p>
            </div>
             <div class="-card">
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
