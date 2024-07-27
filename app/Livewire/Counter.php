<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }

    public function incrementn($n)
    {
        $this->count+=$n;
    }
 
    public function decrement()
    {
        $this->count--; 
    }
    public function decrementn($n)
    {
        $this->count-=$n;
    }

    public function resetCounter()
    {
        $this->count=0;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}