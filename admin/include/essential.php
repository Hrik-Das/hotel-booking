<?php
    function alert($type, $message) {
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

        echo<<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <p class="m-0">$message</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }

    function redirect($url) {
        echo "<script> window.location.href = '$url'; </script>";
        exit();
    }

    function adminLogin() {
        session_start();      
        if (!(isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"] == true)) {
            header("Location: index.php");
            exit();
        }
    }
?>