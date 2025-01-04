<?php
$images = [
    'assets/img/pexels-quang-nguyen-vinh-222549-2176593.jpg',
];

$title = "Welcome to Vitality Health Care";
$subtitle = "Your Partner in Accessible and Compassionate Healthcare";

$buttons = [
    ['link' => 'services.php', 'type' => 'primary', 'text' => 'Explore Our Services'],
    ['link' => 'donate.php', 'type' => 'success', 'text' => 'Support Us'],
];
?>

    <style>
        .hero {
            position: relative;
            background-image: url('<?php echo $images[0]; ?>');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay for text contrast */
            z-index: 1;
        }

        .hero .content {
            position: relative;
            z-index: 2;
            max-width: 800px; /* Ensures content doesn't stretch too wide */
            padding: 20px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero h2 {
            font-size: 1.5rem;
            margin-top: 10px;
            font-weight: 400;
        }

        .hero .btn {
            font-size: 1.2rem;
            padding: 12px 24px;
            border-radius: 8px;
            margin: 10px;
        }

        .hero .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .hero .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem; /* Smaller font on mobile */
            }

            .hero h2 {
                font-size: 1.2rem; /* Smaller subtitle on mobile */
            }

            .hero .content {
                padding: 15px; /* Slightly smaller padding on mobile */
            }

            .hero .btn {
                font-size: 1rem; /* Slightly smaller buttons on mobile */
                width: 100%; /* Buttons take full width on mobile */
            }

            .hero .btn:not(:last-child) {
                margin-bottom: 10px; /* Add spacing between stacked buttons */
            }
        }
    </style>

    <section class="hero">
        <div class="overlay"></div>
        <div class="content">
            <h1><?php echo $title; ?></h1>
            <h2><?php echo $subtitle; ?></h2>
            <div class="d-flex flex-column flex-md-row justify-content-center">
                <?php foreach ($buttons as $button): ?>
                    <a href="<?php echo $button['link']; ?>" class="btn btn-<?php echo $button['type']; ?>"><?php echo $button['text']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    