<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.{userOne}.{userTwo}', function ($user, $userOne, $userTwo) {
    return $user->id === $userOne || $user->id === $userTwo;
});
