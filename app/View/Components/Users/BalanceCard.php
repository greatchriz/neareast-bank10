<?php

namespace App\View\Components\Users;

use Illuminate\View\Component;

class BalanceCard extends Component
{
    public $type;

    public $title;

    public $balance;

    /**
     * Create a new component instance.
     *  @param  string  $type
     *  @param  string  $title
     *  @param  string  $balance
     *
     * @return void
     */
    public function __construct($type, $title, $balance)
    {
        $this->type = $type;
        $this->title = $title;
        $this->balance = $balance;

    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.balance-card');
    }
}
