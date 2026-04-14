<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Create a new event instance.
     */
    public function __construct($message)
    {
        $this->message = [
            'id' => $message->id,
            'content' => $message->content,
            'sender_id' => $message->sender_id,
            'receiver_id' => $message->receiver_id,
            'receiver_name' => $message->receiver->name,
            'created_at' => $message->created_at->toDateTimeString()
        ];
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        $ids = [
            $this->message['sender_id'],
            $this->message['receiver_id']
        ];

        //sort ids so the channel name always stays the same between the two users
        sort($ids);
        
        return [
            new PrivateChannel('channel.'.$ids[0].'.'.$ids[1]),
        ];
    }

    public function broadcastAs()
    {
        return 'message.sent';
    }
}
