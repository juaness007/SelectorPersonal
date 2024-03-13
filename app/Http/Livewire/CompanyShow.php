<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Municipality;
use Doctrine\DBAL\Query;
use Livewire\Component;

class CompanyShow extends Component
{
    public $searchCompany='';
    public $filterMunicipality='';
    public function render()
    {
        $companies=Company::query();
        if($this->searchCompany){
            $companies->where('name', 'like', '%' . $this->searchCompany . '%');
        }
        if($this->filterMunicipality){
            $companies->whereHas('municipality' , function($query){
                $query->where('name' , $this->filterMunicipality);
            });
        }

        $companies = $companies->get();
        $municipalities = Municipality::all();
        return view('livewire.company-show',[
            'companies' => $companies,
            'municipalities' => $municipalities,
        ]);
    }
}
