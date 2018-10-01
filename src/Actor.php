<?php
namespace ActivityPub;

class Actor extends AbstractObject implements ActorInterface
{
    private $inbox;
    private $outbox;
    private $following;
    private $followers;
    private $liked;
    private $streams;
    private $preferredUsername;
    private $endpoints;

    public function setInbox(string $inbox)
    {
        $this->inbox = $inbox;
    }

    public function getInbox(): string
    {
        return $this->inbox;
    }

    public function setOutbox(string $outbox)
    {
        $this->outbox = $outbox;
    }

    public function getOutbox(): string
    {
        return $this->outbox;
    }

    public function setFollowing(string $following)
    {
        $this->following = $following;
    }

    public function getFollowing(): string 
    {
        return $this->following;
    }

    public function setFollowers(string $followers)
    {
        $this->followers = $followers;
    }

    public function getFollowers(): string
    {
        return $this->followers;
    }

    public function setLiked(string $liked)
    {
        $this->liked = $liked;
    }

    public function getLiked(): string
    {
        return $this->liked;
    }

    public function setStreams(array $streams)
    {
        $this->streams = $streams;
    }

    public function getStreams(): array
    {
        return $this->streams;
    }

    public function setPreferredUsername(string $preferredUsername)
    {
        $this->preferredUsername = $preferredUsername;
    }

    public function getPreferredUsername(): string
    {
        return $this->preferredUsername;
    }

    public function setEndpoints(array $endpoints)
    {
        $this->endpoints = $endpoints;
    }

    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
}
