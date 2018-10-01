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
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 */
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
