<?php

namespace pxgamer\VidLii;

/**
 * Class User
 * @package pxgamer\VidLii
 */
class User extends DataType
{
    /**
     * @var string
     */
    protected $registered;
    /**
     * @var string
     */
    protected $last_login;
    /**
     * @var string
     */
    protected $videos_watched;
    /**
     * @var string
     */
    protected $channel_views;
    /**
     * @var string
     */
    protected $video_views;
    /**
     * @var string
     */
    protected $videos;
    /**
     * @var string
     */
    protected $subscribers;
    /**
     * @var string
     */
    protected $subscriptions;
    /**
     * @var string
     */
    protected $friends;
    /**
     * @var string
     */
    protected $channel_comments;
    /**
     * @var string
     */
    protected $featured_channels;
    /**
     * @var string
     */
    protected $partnered;
    /**
     * @var string
     */
    protected $channel_version;
    /**
     * @var string
     */
    protected $country;
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
    protected $avatar;

    /**
     * Populate by providing a username
     *
     * @param string $username
     * @return User
     */
    public function populate(string $username)
    {
        $response = $this->client->get('', [
            'query' => [
                'ty' => 'user',
                'ta' => $username
            ]
        ]);

        $this->fillValues($response);

        return $this;
    }
}
