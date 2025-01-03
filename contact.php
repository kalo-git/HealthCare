<?php
// Include functions file if necessary (commented out for now)
include 'functions.php';

include 'includes/header.php';
// Process the form submission

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate the form data
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {

        // WhatsApp Message
        $whatsapp_number = '9937062438';

        // Correct the WhatsApp message format
        $whatsapp_message = "Vitality Health Care:\nName: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

        // Create WhatsApp URL with properly encoded message
        $whatsapp_url = "https://wa.me/$whatsapp_number?text=" . urlencode($whatsapp_message);

        // Redirect to WhatsApp
        header("Location: $whatsapp_url");
        exit();
    } else {
        // Display an error message if any form fields are empty
        echo "<script>alert('Please fill in all fields');</script>";
    }
}

?>

<style>
    .contust {
        margin-top: 125px;
    }
</style>
<!-- Contact Form -->
<div class="container contust">
    <h1 class="my-4 text-center">Contact Us</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <form action="contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
