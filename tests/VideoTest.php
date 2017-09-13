<?php

use PHPUnit\Framework\TestCase;
use pxgamer\VidLii\Video;

/**
 * Class VideoTest
 */
class VideoTest extends TestCase
{
    /**
     * Test retrieve a video's data
     */
    public function testVideoData()
    {
        $video = new Video();

        $video->populate('xsc2P_KnbWI');

        $this->assertTrue($video->r, 'An error occurred when requesting video meta.');
    }
}