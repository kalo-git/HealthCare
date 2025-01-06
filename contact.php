<?php
include('functions.php'); // Include the functions file
include 'includes/header.php';
?>
<?php ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
   .m-from {
        margin-top: 125px;
    }
</style>

    <div class="container m-from">
        <h1 class="my-4 text-center">Contact Us</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <form id="contactForm">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault();

            // Retrieve form values
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            // Validate the form data
            if (name && phone && email && message) {
                // WhatsApp Number
                const whatsappNumber = '9937062438';

                // Correct the WhatsApp message format
                const whatsappMessage = `Vitality Health Care:\nName: ${name}\nPhone: ${phone}\nEmail: ${email}\nMessage: ${message}`;

                // Create WhatsApp URL with properly encoded message
                const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;

                // Redirect to WhatsApp
                window.location.href = whatsappUrl;
            } else {
                // Show an alert if any form fields are empty
                alert('Please fill in all fields');
            }
        });
    </script>

<?php include 'includes/footer.php';?>