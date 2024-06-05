<?php

require('../config/database.php');

$req = $myPDO->query("SELECT * FROM articles ORDER BY id DESC;");
