<?php

namespace pxgamer\VidLii;

/**
 * Class Video
 * @package pxgamer\VidLii
 */
class Video extends DataType
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $tags;
    /**
     * @var string
     */
    protected $category;
    /**
     * @var string
     */
    protected $upload_date;
    /**
     * @var string
     */
    protected $upload_by;
    /**
     * @var string
     */
    protected $views;
    /**
     * @var string
     */
    protected $comment_num;
    /**
     * @var string
     */
    protected $comments;
    /**
     * @var string
     */
    protected $response_num;
    /**
     * @var string
     */
    protected $responses;
    /**
     * @var string
     */
    protected $favorite_num;
    /**
     * @var string
     */
    protected $featured;
    /**
     * @var string
     */
    protected $ratings;

    /**
     * Populate by providing a video ID
     *
     * @param string $videoId
     * @return Video
     */
    public function populate(string $videoId)
    {
        $response = $this->client->get('', [
            'query' => [
                'ty' => 'video',
                'ta' => $videoId
            ]
        ]);

        $this->fillValues($response);

        return $this;
    }
}
