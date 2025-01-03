<?php
function get_bootstrap_cdn($type = 'css') {
    if ($type === 'css') {
            return "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css";
    } elseif ($type === 'js') {
            return [
                "https://code.jquery.com/jquery-3.5.1.slim.min.js", // jQuery
                "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js", // Popper.js
                "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" // Bootstrap JS Bundle
            ];
    }
    return '';
}
?>



<?php
function asset_url($file) {
    // Assuming 'assets' is the root directory for your static files
    return 'assets/' . $file;
}
?>
