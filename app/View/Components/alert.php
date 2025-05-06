<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\HtmlString;
class alert extends Component
{

    public $type;
    public $messege;
    Protected $types = [
        "success",
        "danger",
        "info",
    ];
    /**
     * Create a new component instance.
     */
    public function __construct(string $type = "No Type",string $messege = "No Messege")
    {
        $this->type = $type;
        $this->messege = $messege;
    }

    public function validType(){
        return in_array($this->type,$this->types) ? $this->type : "info";
    }

    
public function anchor($text, $target = "#") {
    return new HtmlString( '<a href="'.$target.'" class="alert-link">'.$text.'</a>');
}
    /** 
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
