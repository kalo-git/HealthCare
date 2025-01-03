
    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Information about the NGO.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@ngo.org</p>
                    <p>Phone: +123 456 7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="text-white">Facebook</a><br>
                    <a href="#" class="text-white">Twitter</a><br>
                    <a href="#" class="text-white">Instagram</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center py-3">
                    <p>&copy; 2023 NGO. All rights reserved. Designed by Duant.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




<!-- Bootstrap JS and dependencies -->
<?php 
$bootstrap_js = get_bootstrap_cdn('js');
foreach ($bootstrap_js as $js) {
    echo "<script src=\"$js\"></script>";
}
?>
</body>
</html>
