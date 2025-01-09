
<div class="container contus" style="
    margin-top: 25px;
">
    <h1 class="text-center mb-4">Our Services</h1>
    <div class="row g-4">
        <?php
        // Services array
        $services = [
            [
                "img" => "assets\img\DiagnosticServices.jpg",
                "title" => "Diagnostic services",
                "short_description" => "Diagnostic services: Laboratory facilities, radiology facilities, and advanced diagnostic imaging services like MRI and CT scans",
                "long_description" => "Detailed description of Service 1 goes here. It can include all the necessary details and features of this service."
            ],
            [
                "img" => "assets\img\Patient care.jpg",
                "title" => "Patient care",
                "short_description" => "Patient care: Emergency services, trained medical and nursing staff, inpatient and outpatient departments, and specialized treatment centers",
                "long_description" => "Patient care: Emergency services, trained medical and nursing staff, inpatient and outpatient departments, and specialized treatment centers"
            ],
            [
                "img" => "assets\img\Untitled-design-4.jpg",
                "title" => "Pharmacy",
                "short_description" => "Pharmacy: A pharmacy with 24-hour service 
Other facilities: A day care facility, physical therapy departments, an obstetrical unit, a dietary department, and a rehabilitation department",
                "long_description" => "Pharmacy: A pharmacy with 24-hour service 
Other facilities: A day care facility, physical therapy departments, an obstetrical unit, a dietary department, and a rehabilitation department"
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

