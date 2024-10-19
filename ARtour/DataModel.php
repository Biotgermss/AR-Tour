<?php

class DataModel
{
    function getDiscovers()
    {
        include 'config.php';

        $sql = "SELECT * FROM discover";
        $result = $conn->query($sql);

        $data = [];
        while ($row = $result->fetch_assoc()) {
            // Process each row
            $data[] = $row;
        }
        return $data;
    }

    function getDiscoverById($id)
    {
        include 'config.php';

        $sql = "SELECT * FROM discover where id  = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return [];
    }
}