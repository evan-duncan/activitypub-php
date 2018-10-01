<?php
namespace ActivityPub;

use PHPUnit\Framework\TestCase;

class ActorTestCase extends TestCase
{
    public function testMustHaveInbox()
    {
        $inbox = 'https://kenzoishii.example.com/inbox.json';
        $actor = new Actor();
        $actor->setInbox($inbox);
        $this->assertEquals($actor->getInbox(), $inbox);
    }

    public function testMustHaveOutbox()
    {
        $outbox = 'https://kenzoishii.example.com/outbox.json';
        $actor = new Actor();
        $actor->setOutbox($outbox);
        $this->assertEquals($actor->getOutbox(), $outbox);
    }

    public function testShouldHaveFollowing()
    {
        $following = 'https://kenzoishii.example.com/following.json';
        $actor = new Actor();
        $actor->setFollowing($following);
        $this->assertEquals($actor->getFollowing(), $following);
    }

    public function testShouldHaveFollowers()
    {
        $followers = 'https://kenzoishii.example.com/followers.json';
        $actor = new Actor();
        $actor->setFollowers($followers);
        $this->assertEquals($actor->getFollowers(), $followers);
    }

    public function testMayHaveLiked()
    {
        $liked = 'https://kenzoishii.example.com/liked.json';
        $actor = new Actor();
        $actor->setLiked($liked);
        $this->assertEquals($actor->getLiked(), $liked);
    }
}
