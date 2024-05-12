<?php

namespace App\Livewire;

use App\Models\BloodDonor;
use Livewire\Component;

class Search extends Component
{
    public string $query = '';
    // protected $queryString = ['query'];
    public $donors = [];
    public  Int  $selectedIndex = 0;
    public function incrementIndex()
    {
        if($this->selectedIndex === count($this->donors) - 1)
        {
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }
    public function decrementIndex()
    {
        if($this->selectedIndex === 0)
        {
            $this->selectedIndex = (count($this->donors) - 1);
            return;
        }
        $this->selectedIndex--;
    }
    public function showDonors()
    {
        if($this->donors->isNotEmpty())
        {
            return redirect()->route('user.donate.show',[$this->donors[$this->selectedIndex]['id']]);
        }
    }
    public function updatedQuery()
    {
        $words = '%'. $this->query . '%';
        if(strlen($this->query) > 0)
        {
            $this->donors = BloodDonor::where('first_name','like', $words)
            ->orWhere('last_name','like',$words)
            ->orWhere('voluntary_group','like', $words)
            ->orWhere('country','like', $words)
            ->orWhere('city','like',  $words)->get();
        }

    }
    public function resetIndex()
    {
        $this->reset('selectedIndex');
    }
    public function render()
    {
        return view('livewire.search',[

        ]);
    }

}
