<?php

use PHPUnit\Framework\TestCase;
use pxgamer\VidLii\User;

/**
 * Class UserTest
 */
class UserTest extends TestCase
{
    /**
     * Test retrieve a user's data
     */
    public function testUserData()
    {
        $video = new User();

        $video->populate('VidLii');

        $this->assertTrue($video->r, 'An error occurred when requesting user meta.');
    }
}