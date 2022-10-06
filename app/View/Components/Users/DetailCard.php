<?php

namespace App\View\Components\Users;

use App\Models\User;

use Illuminate\View\Component;

class DetailCard extends Component
{

    public $user;

    public $title;

    /**
     * Create a new component instance.
     *  @param  object  $user
     *  @param  string  $title
     *
     * @return void
     */
    public function __construct($user, $title)
    {
        $this->user = $user;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.detail-card');
    }
}
