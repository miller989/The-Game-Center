<?php
if (!isset($_SESSION['name'])) {
    header("location: login.html");
}
