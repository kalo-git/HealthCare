<?php
include('functions.php'); // Include the functions file
?>
<?php include 'includes/header.php';?>
<?php include 'components/navber.php'; ?>
<style>
    .donate-page {
        margin-top: 125px;
        text-align: center;
    }

    .donate-container {
        margin: 50px auto;
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .donate-container h2 {
        margin-bottom: 20px;
    }

    .donate-button {
        margin-top: 20px;
    }

    .donate-button button {
        padding: 15px 30px;
        font-size: 18px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .donate-button button:hover {
        background-color: #218838;
    }

    .upi-section, .bank-section {
        margin-top: 30px;
        text-align: center;
    }

    .upi-details, .bank-details {
        margin: 10px 0;
    }

    .upi-qr img {
        max-width: 200px;
        margin-top: 10px;
    }

    .upi-instructions, .bank-instructions {
        font-size: 14px;
        color: #555;
    }
</style>

<div class="container donate-page">
    <div class="donate-container">
        <h2>Support Vitality Health Care</h2>
        <p>Your donation helps us continue offering holistic health services and promoting well-being for all. Thank you for your support!</p>

        <!-- UPI Section -->
        <div class="upi-section">
            <h3>Donate via UPI</h3>
            <p>For UPI payments, please use the details below:</p>

            <div class="upi-details">
                <strong>UPI ID:</strong> yourname@upi  <!-- Replace with your UPI ID -->
            </div>

            <div class="upi-instructions">
                <p>Open your UPI payment app (e.g., Google Pay, PhonePe, Paytm) and scan the QR code or enter the UPI ID to make a donation.</p>
            </div>

            <div class="upi-qr">
                <img src="assets\img\logo.png" alt="UPI QR Code">  <!-- Replace with your actual UPI QR code -->
            </div>
        </div>

        <!-- Bank Transfer Section -->
        <div class="bank-section">
            <h3>Donate via Bank Transfer</h3>
            <p>You can also donate via bank transfer. Below are the bank account details for donations:</p>

            <div class="bank-details">
                <strong>Bank Name:</strong> XYZ Bank <br>
                <strong>Account Name:</strong> Vitality Health Care <br>
                <strong>Account Number:</strong> 1234567890 <br>
                <strong>IFSC Code:</strong> XYZB0001234 <br>
                <strong>Branch:</strong> Main Branch, City
            </div>

            <div class="bank-instructions">
                <p>Please mention your name or reference number while making the transfer. Kindly send us an email with your payment details at <strong>support@example.com</strong> for confirmation.</p>
            </div>
        </div>

    </div>
</div>

<?php include 'includes/footer.php';?>
