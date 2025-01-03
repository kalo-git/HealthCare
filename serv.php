
<div class="container contus" style="
    margin-top: 25px;
">
    <h1 class="text-center mb-4">Our Services</h1>
    <div class="row g-4">
        <?php
        // Services array
        $services = [
            [
                "img" => "assets/images/kenburns-bg-1.jpg",
                "title" => "Service 1",
                "short_description" => "A brief overview of Service 1.",
                "long_description" => "Detailed description of Service 1 goes here. It can include all the necessary details and features of this service."
            ],
            [
                "img" => "assets/images/kenburns-bg-1.jpg",
                "title" => "Service 2",
                "short_description" => "A brief overview of Service 2.",
                "long_description" => "Detailed description of Service 2 goes here. It can include all the necessary details and features of this service."
            ],
            [
                "img" => "assets\images\meditate.jpg",
                "title" => "Meditation",
                "short_description" => "Meditation is a mental practice designed to cultivate awareness, focus, and relaxation. ",
                "long_description" => "Meditation is a mental practice designed to cultivate awareness, focus, and relaxation. It has been practiced for thousands of years across various cultures and spiritual traditions.
                     Modern meditation techniques are often used for stress reduction, mental clarity, and emotional well-being."
            ],
            [
                "img" => "assets\images\Yoga-Sessions.jpg",
                "title" => "Yoga Sessions",
                "short_description" => "Yoga sessions are structured practices that combine physical postures (asanas), breathing techniques (pranayama), and mindfulness or meditation to promote physical, mental, and emotional well-being. ",
                "long_description" => "Yoga sessions are structured practices that combine physical postures (asanas), breathing techniques (pranayama), and mindfulness or meditation to promote physical, mental, and emotional well-being. Each session typically begins with a warm-up, progresses through various poses to improve strength, flexibility, and balance, and concludes with relaxation or meditation. Yoga sessions can be tailored to individual needs, ranging from gentle restorative practices to more vigorous styles like Vinyasa or Ashtanga. Regular 
                    yoga sessions help reduce stress, enhance physical health, improve mental clarity, and foster a sense of inner calm and balance."
            ],
            [
                "img" => "assets/images/Yajana.jpg",
                "title" => "Yajnas (Hawans)",
                "short_description" => "Yajnas (Hawans) are ancient Vedic rituals involving offerings made into a sacred fire accompanied by the chanting of mantras. They are central to Hindu spiritual practices and symbolize purification, gratitude, and the connection between humans, nature, and the divine.",
                "long_description" => "Yajnas (Hawans) are ancient Vedic rituals involving offerings made into a sacred fire accompanied by the chanting of mantras. They are central to Hindu spiritual practices and symbolize purification, gratitude, and the connection between humans, nature, and the divine.
                        Typically, ghee, grains, herbs, and other sacred items are offered into the fire, representing self-sacrifice and the transformation of physical offerings into spiritual energy. Yajnas are performed for various purposes, such as seeking blessings, promoting harmony, cleansing negative energies, and fulfilling specific desires.
                        These rituals emphasize devotion, community participation, and alignment with universal cosmic principles, fostering spiritual growth and well-being."
            ],
            [
                "img" => "assets/images/MudBath.jpg",
                "title" => "Mud Bath Therapy",
                "short_description" => "Mud bath therapy is a therapeutic treatment that involves immersing the body in a mixture of mineral-rich mud and water. This practice, rooted in ancient traditions, is known for its detoxifying, anti-inflammatory,",
                "long_description" => "Mud bath therapy is a therapeutic treatment that involves immersing the body in a mixture of mineral-rich mud and water. This practice, rooted in ancient traditions, is known for its detoxifying, anti-inflammatory, and rejuvenating properties. The minerals in the mud help to cleanse the skin, improve circulation, relieve muscle and joint pain, and reduce stress. Commonly used in spa treatments and wellness programs, 
                    mud baths are often recommended for conditions like arthritis, skin disorders, and general relaxation."
            ],
            // Add more services here
        ];

        // Loop through services
        foreach ($services as $index => $service) {
            $modalId = "serviceModal" . $index;
            echo "
                <div class='col-md-4'>
                    <div class='card'>
                        <img src='{$service['img']}' class='card-img-top' alt='{$service['title']}' data-bs-toggle='modal' data-bs-target='#{$modalId}'>
                        <div class='card-body'>
                            <h5 class='card-title text-center'>{$service['title']}</h5>
                            <p class='card-text'>{$service['short_description']}</p>
                        </div>
                    </div>
                </div>

                <!-- Modal for detailed description -->
                <div class='modal fade' id='{$modalId}' tabindex='-1' aria-labelledby='{$modalId}Label' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='{$modalId}Label'>{$service['title']}</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                            </div>
                            <div class='modal-body'>
                                <img src='{$service['img']}' class='img-fluid mb-3' alt='{$service['title']}'>
                                <p>{$service['long_description']}</p>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        ?>
    </div>
</div>

