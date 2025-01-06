

<style>
/* Glossy Navbar Styling */
.glossy-navbar {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(240, 240, 240, 0.8) 50%, rgba(225, 225, 225, 0.8) 100%);
    border-bottom: 1px solid rgba(200, 200, 200, 0.7);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(8px); /* Adds a glossy glass-like effect */
}

.glossy-navbar .navbar-brand img {
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
}

.glossy-navbar .nav-link {
    color: #333;
    transition: color 0.3s ease-in-out;
}

.glossy-navbar .nav-link:hover,
.glossy-navbar .nav-link.active {
    color: #007bff;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}

.glossy-navbar .btn-info {
    background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    border: none;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease-in-out;
}

.glossy-navbar .btn-info:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 8px rgba(0, 0, 0, 0.3);
}
</style>

<nav class="navbar navbar-expand-lg navbar-light glossy-navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img class="logoing" src="assets/img/logo.png" alt="Logo" width="70" height="auto" style="margin-left: 38px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="Gallery.php">Photo Gallery</a></li>
                        <li><a class="dropdown-item" href="certificate.php">Certificate</a></li>
                        <!-- <li><a class="dropdown-item" href="gallery_page3.php">Gallery Page 3</a></li>
                        <li><a class="dropdown-item" href="gallery_page4.php">Gallery Page 4</a></li>
                        <li><a class="dropdown-item" href="gallery_page5.php">Gallery Page 5</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="btn btn-info text-white" href="book_now.php">Book Now</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info text-white" href="payment.php">Payment Now</a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>
