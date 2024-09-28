<?php
require 'functions.php';

if (isset($_POST['id'])) {
    delete('contactlist', $_POST['id']);
}

header('Location: index.php');
exit;
