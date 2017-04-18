<?php

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_id']<=0) {
            exit( "<h1>Access Denied</h1>");
        }