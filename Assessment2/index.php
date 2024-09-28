<?php

require 'vendor/autoload.php';

$rows = selectAll('contacts');

include 'views/index.view.php';