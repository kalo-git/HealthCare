<?php
include('functions.php'); // Include the functions file
?>

<?php include 'includes/header.php';?>


<?php
// Gallery items - you can replace these with dynamic data (e.g., from a database)
$images = [
    ["src" => "assets/img/pexels-olly-3764579.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-quang-nguyen-vinh-222549-2176593.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-simon73-1323550.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-olly-3764579.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-quang-nguyen-vinh-222549-2176593.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-simon73-1323550.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-olly-3764579.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-quang-nguyen-vinh-222549-2176593.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-simon73-1323550.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-quang-nguyen-vinh-222549-2176593.jpg", "alt" => "Image 1", "title" => "Title 1"],
    ["src" => "assets/img/pexels-olly-3764579.jpg", "alt" => "Image 1", "title" => "Title 1"],
    // Add more images as needed
];
?>

    <style>
        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .gallery-item {
            margin-bottom: 15px;
        }
        .modal-body img {
            width: 100%;
            height: auto;
        }
    </style>

<div class="container" style="margin-top: 125px;">
    <h1 class="text-center mb-4">Image Gallery</h1>
    <div class="row">
        <?php foreach ($images as $image): ?>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="gallery-item">
                    <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>" class="img-fluid" data-toggle="modal" data-target="#imageModal" data-src="<?= $image['src'] ?>" data-title="<?= $image['title'] ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal for Image Preview -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" id="modalImage" class="img-fluid">
                <p id="modalTitle" class="mt-3"></p>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Modal image and title functionality
    $('#imageModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var imgSrc = button.data('src'); // Extract image source
        var imgTitle = button.data('title'); // Extract image title

        var modal = $(this);
        modal.find('#modalImage').attr('src', imgSrc);
        modal.find('#modalTitle').text(imgTitle);
    });
</script>
<?php include 'includes/footer.php';?>