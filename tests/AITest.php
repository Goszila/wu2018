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

    public function testRudeWords()
    {
        $result = AI::getRudeWords('ไอ้สัส');
        $expected_result = ['มีคำหยาบ'];
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment()
    {
        $result = AI::getSentiment('ดีใจ');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment2()
    {
        $result = AI::getSentiment('เสียใจมากๆ');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }
    
    public function testSentiment3()
    {
        $result = AI::getSentiment('ก็เฉยๆนะ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }

    public function testLanguages()
    {
        $result = AI::getLanguages('สวัสดี');
        $expected_result = ['TH'];
        $this->assertEquals($expected_result, $result);
    }
 
}