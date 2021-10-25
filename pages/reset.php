<?php
session_start();
session_unset();
header("Location: personal details.php");