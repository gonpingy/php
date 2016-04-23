<?php

require_once './app/Sample.php';

class SampleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function int型のIDにより適正にインスタンス化できる()
    {
        $sample = new Sample(1, 'hoge');
        $this->assertInstanceOf('Sample', $sample);

        return $sample;
    }
}
