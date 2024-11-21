<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Pagination\LengthAwarePaginator;

class LoadMoreButton extends Component
{

    public int $perPage = 4;

    public function loadMore(): void
    {
        $this->perPage += 4;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.load-more-button');
    }
}
