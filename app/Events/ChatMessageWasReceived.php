<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Event;

class ChatMessageWasReceived extends Event implements ShouldBroadcast
{
    use InteractsWithSockets, SerializesModels;

    public $chatMessage;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($chatMessage,$user)
    {
        $this->chatMessage = $chatMessage;
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chat-room.1');
    }

    public function broadcastAs()
    {

    }
}