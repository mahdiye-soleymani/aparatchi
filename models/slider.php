<?php

class slider
{

    function showSliderInSite()
    {
        global $database;
        $sql = 'SELECT * FROM slider';
        $result = $database->prepare($sql);
        $result->execute();
        if ($result->rowCount() >= 1) {
            $row = $result->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } else {
            return false;
        }
    }


}