<?php

namespace App\Models;

use App\Enums\PostStatus;

trait PostActions
{
    public function publishNow(): void
    {
        $this->update([
            'status' => PostStatus::Published,
            'published_at' => $this->published_at ?? now(),
            'tobe_published_at' => null,
        ]);
    }

    public function hideNow(): void
    {
        $this->update([
            'status' => PostStatus::Hidden,
            'hidden_at' => now(),
            'tobe_published_at' => null,
        ]);
    }
}
