<?php
include('functions.php'); // Include the functions file
?>
<?php include 'includes/header.php';?>
<?php
// Sample data: An array of certificates
$certificates = [
    ['name' => 'Trade License Certificate', 'image' => 'assets/img/1.jpg'],
    ['name' => 'Licence under section 8(1) of the companies ACT,2013', 'image' => 'assets\img\2.jpg'],
    ['name' => 'Certificate of Incorporation', 'image' => 'assets\img\3_page-0001.jpg'],
    ['name' => 'Registration Certificate', 'image' => 'assets\img\4_page-0001.jpg'],
    ['name' => 'Goods and services A', 'image' => 'assets\img\4_page-0002.jpg'],
    ['name' => 'Goods and services B', 'image' => 'assets\img\4_page-0003.jpg'],
    ['name' => 'Certificate', 'image' => 'assets\img\WhatsApp Image 2025-01-01 at 14.13.38_43689b86.jpg'],
    ['name' => 'Certificate', 'image' => 'assets\img\WhatsApp Image 2025-01-01 at 15.11.08_02d9914e.jpg'],
    ['name' => 'Certificate', 'image' => 'assets\img\WhatsApp Image 2025-01-01 at 15.11.09_5a5989a7.jpg'],
    ['name' => 'Certificate', 'image' => 'assets\img\WhatsApp Image 2025-01-01 at 15.11.09_80e7ed95.jpg'],
];

// Calculate number of rows required
$totalCertificates = count($certificates);
$rows = ceil($totalCertificates / 4);
?>

<style>
    .srcpt {
        margin-top: 125px;
    }
    .certificate {
        text-align: center;
        border: 2px solid #ddd;
        padding: 20px;
        margin: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .certificate img {
        width: 100%;
        height: auto;
        border-radius: 5px;
        cursor: pointer;
    }
    .certificate-name {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }
</style>

    <div class="container srcpt">
        <div class="row">
            <?php
            // Loop through the certificates array and generate the grid dynamically
            foreach ($certificates as $index => $certificate) {
                // Open a new row every 4 items
                if ($index % 4 == 0 && $index != 0) {
                    echo '</div><div class="row">';
                }

                // Generate certificate block
                echo '<div class="col-md-3">';
                echo '<div class="certificate">';
                echo '<img src="' . $certificate['image'] . '" alt="' . $certificate['name'] . '" data-toggle="modal" data-target="#certificateModal' . $index . '">';
                echo '<div class="certificate-name">' . $certificate['name'] . '</div>';
                echo '</div>';
                echo '</div>';

                // Modal for each certificate
                echo '<div class="modal fade" id="certificateModal' . $index . '" tabindex="-1" role="dialog" aria-labelledby="certificateModalLabel' . $index . '" aria-hidden="true">';
                echo '<div class="modal-dialog" role="document">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h5 class="modal-title" id="certificateModalLabel' . $index . '">' . $certificate['name'] . '</h5>';
                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
                echo '<div class="modal-body">';
                echo '<img src="' . $certificate['image'] . '" alt="' . $certificate['name'] . '" class="img-fluid">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // jQuery ready function ensures the DOM is fully loaded before executing code
    $(document).ready(function() {
        // Listen for the click event on images to show the modal
        $('[data-toggle="modal"]').on('click', function() {
            var targetModal = $(this).data('target'); // Get the target modal
            $(targetModal).modal('show'); // Show the modal
        });

        // Optionally, you can use this to handle the modal close action (if you need custom behavior)
        $('.close').on('click', function() {
            $(this).closest('.modal').modal('hide'); // Close the modal
        });
    });
</script>

    <?php include 'includes/footer.php';?>
