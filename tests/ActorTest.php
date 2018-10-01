<?php
/**
 * ActivityPub protocol library for PHP.
 * Copyright (C) 2018 Evan Duncan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>.
 */
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
