<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_number()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 4;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,'ping',4), $result);
        }

        function test_generatePingPongArray_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 6;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,'ping',4,'pong',"ping"), $result);
        }

        function test_generatePingPongArray_pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 10;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,'ping',4,'pong',"ping",7,8,'ping','pong'), $result);
        }

        function test_generatePingPongArray_pingpong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1,2,'ping',4,'pong',"ping",7,8,'ping','pong',11,'ping',13,14,'ping-pong'), $result);
        }
    }



?>
