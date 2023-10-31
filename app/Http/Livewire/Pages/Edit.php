<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\ComponentDesign;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\HtmlString;


class Edit extends Component
{
    public $components = [];
    public $identifier;
    public $element;
    public $content;

    protected $listeners = [
        'addComponent' => 'addComponent',
        'showContentEdit' => 'showContentEdit',
    ];

    public function mount()
    {
        // Recupera $components de la sesión si existe
        $this->components = Session::get('components', []);
    }
    
    public function render()
    {
        $allComponents = ComponentDesign::all();
        return view('livewire.pages.edit', compact('allComponents'));
        
    }
    
    public function preProcess($id)
    {
        $component = ComponentDesign::find($id);
        
        $this->emit('addProperties', ['component' => $component->content]);
    }

    public function addComponent($component)
    {
        // agregar comoponente a la lista de componentes
        $this->components[] = $component;

        // $this->emit('addActions');

        Session::put('components', $this->components);
    }

    public function showContentEdit($id, $element, $content)
    {
        $this->identifier = $id;
        $this->element = $element;
        $this->content = $content;
    }
}
