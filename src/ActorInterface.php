<?php
namespace ActivityPub;

interface ActorInterface
{
    public function getInbox(): string;
    public function getOutbox(): string;
    public function getFollowing(): string;
    public function getFollowers(): string;
    public function getLiked(): string;
    public function getStreams(): array;
    public function getPreferredUsername(): string;
    public function getEndpoints(): array;
}
