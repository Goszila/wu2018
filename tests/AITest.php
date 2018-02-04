<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male()
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female()
    {
        $result = AI::getGender('สวัสดีค่ะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testRudeWords_TH()
    {
        $result = AI::getRudeWords('ไอ้สัส');
        $expected_result = 'มีคำหยาบ';
        $this->assertEquals($expected_result, $result);
    }
}