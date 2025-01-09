<?php
include('functions.php'); // Include the functions file
include 'includes/header.php';
?>
<style>
    .dkc {
        margin-top: 125px;
    }
</style>

    <div class="container dkc">
        <h1 class="text-center mb-4">Our Doctors</h1>
        <div class="row">
            <?php
            // Array storing doctor details
            $doctors = [
                [
                    "specialization" => "Gynaecology",
                    "image" => "assets\img\dr\WhatsApp Image 2025-01-08 at 10.56.33_f8540232.jpg",
                    "description" => "Expert in heart-related issues and treatments."
                ],
                [
                    "specialization" => "Orthopedic",
                    "image" => "assets\img\dr\WhatsApp Image 2025-01-08 at 10.56.43_a3d7275a.jpg",
                    "description" => "Orthopedic and other rehabilitation centers
Orthopedic medicine deals with muscles and bones. Physical therapists are typically the practitioner patients see for problems in these areas of the body. If you are experiencing chronic lower back pain, for example,
 you might see a physical therapist at an orthopedic center or clinic to get a diagnosis and a plan of treatment."
                ],
                [
                    "specialization" => "Pediatric",
                    "image" => "assets\img\dr\WhatsApp Image 2025-01-08 at 10.58.20_dda74385.jpg",
                    "description" => "Focuses on child health and well-being."
                ],
                [
                    "specialization" => "Medicine",
                    "image" => "assets\img\dr\shutterstock_2378382317.webp",
                    "description" => "Focuses on child health and well-being."
                ],
                [
                    "specialization" => "Neurologist",
                    "image" => "assets\img\dr/neurologist-vs-neurosurgeon-a-brain-surgeon-s-perspective-886.webp",
                    "description" => "Focuses on child health and well-being."
                ],
                [
                    "specialization" => "Pediatric",
                    "image" => "assets\img\dr\WhatsApp Image 2025-01-08 at 10.58.20_dda74385.jpg",
                    "description" => "Focuses on child health and well-being."
                ],
                [
                    "specialization" => "Pediatric",
                    "image" => "assets\img\dr\WhatsApp Image 2025-01-08 at 10.58.20_dda74385.jpg",
                    "description" => "Focuses on child health and well-being."
                ],
            ];

            // Dynamically generate doctor cards
            foreach ($doctors as $doctor) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="' . $doctor['image'] .'" >';
                echo '<div class="card-body">';
                echo '<p class="card-text"><strong>Specialization:</strong> ' . $doctor['specialization'] . '</p>';
                echo '<p class="card-text">' . $doctor['description'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <?php include 'includes/footer.php';?>