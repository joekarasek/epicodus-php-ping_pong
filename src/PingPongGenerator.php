<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $result_array = array();
            for ($i=1; $i <= $input_number ; $i++) {
                array_push($result_array, $i);
            }
            return $result_array;
        }
    }

?>
