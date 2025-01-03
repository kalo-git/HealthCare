
<!-- Footer -->
<footer class="bg-dark text-white mt-5">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-4">
                <h5 class="text-white">About Us</h5>
                <p class="text-white">Information about the NGO.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-white">Contact Us</h5>
                <p class="text-white">Email: <a href="mailto:info@ngo.org" class="text-white">info@ngo.org</a></p>
                <p class="text-white">Phone: +123 456 7890</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-white">Follow Us</h5>
                <a href="#" class="text-white" target="_blank" rel="noopener noreferrer">Facebook</a><br>
                <a href="#" class="text-white" target="_blank" rel="noopener noreferrer">Twitter</a><br>
                <a href="#" class="text-white" target="_blank" rel="noopener noreferrer">Instagram</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center py-3">
                <p class="text-white">&copy; <?php echo date('Y'); ?> NGO. All rights reserved. Designed by Giridhari</p>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->
    


<!-- Bootstrap JS and dependencies -->
<?php 
$bootstrap_js = get_bootstrap_cdn('js');
foreach ($bootstrap_js as $js) {
    echo "<script src=\"$js\"></script>";
}
?>
</body>
</html>
