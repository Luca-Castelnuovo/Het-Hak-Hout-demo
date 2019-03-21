<?php

//################
// Validate data #
//################

// Clean data
function clean_data($data)
{
    $conn = sql_connect();
    $data = $conn->escape_string($data);
    sql_disconnect($conn);

    $data = trim($data);
    $data = htmlspecialchars($data);

    return stripslashes($data);
}
