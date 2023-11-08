

if (isset($_SERVER['HTTP_HOST'])) {
    $current_host = $_SERVER['HTTP_HOST'];

    // Determine the protocol (http or https) based on the request's SSL status
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

    // Define the dynamic WP_SITEURL and home URLs
    define('WP_SITEURL', $protocol . '://' . $current_host);
    define('WP_HOME', $protocol . '://' . $current_host);
}
