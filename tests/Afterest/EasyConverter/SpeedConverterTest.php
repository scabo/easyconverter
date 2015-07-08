<?php

namespace Afterest\EasyConverter;

class SpeedConverterTest extends \PHPUnit_Framework_TestCase {


    public function testConvertKmToMeters()
    {
        $this->assertEquals((new SpeedConverter())->convertTo('kmh:mh', 1), 1000);
    }

    public function testConvertMToKm()
    {
        $this->assertEquals((new SpeedConverter())->convertTo('mh:kmh', 1000), 1);
    }
}
