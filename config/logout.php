<?php
    if (!isset($_SESSION)) {
        session_start();
    } else {}

    $_SESSION['user'] = 0;
    header('Location: ../');