<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $result_array = array();
            for ($i=1; $i <= $input_number ; $i++) {
                $item_to_push = $i;
                if ($i % 3 == 0) {
                    $item_to_push = 'ping';
                }
                array_push($result_array, $item_to_push);
            }
            return $result_array;
        }
    }

?>
