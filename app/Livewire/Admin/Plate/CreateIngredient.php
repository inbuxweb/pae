<?php

namespace App\Livewire\Admin\Plate;

use Livewire\Component;
use App\Models\Ingredient;
use Usernotnull\Toast\Concerns\WireToast;

class CreateIngredient extends Component
{
    use WireToast;

    public $name;
    public $category;
    public $image;
    public $description;
    public $unit_of_measure;

     // Creating validation rules
     protected function rules()
     {
         $rules = [
             'name'             => 'required',
             'category'         => 'required',   
             'unit_of_measure'  => 'required',   
         ];
 
         
         return $rules;
     }

     public function save()
    {
         /**
         * validation rules 
         */
        $validatedData = $this->validate();

        try {

            // Crea un nuevo registro
            $ingredient = new Ingredient();
            $ingredient->name = $this->name;
            $ingredient->category = $this->category;
            $ingredient->unit_of_measure = $this->unit_of_measure;
            $ingredient->description = $this->description;
            // $ingredient->image = $request->image;

            $ingredient->save();

            // Showing success message
            // toast()
            // ->info('Notification from the backend...', 'The Title')
            // ->push();
            
            // redirect()->route('ingredients');

        }catch (\Exception $e) {

            /**
             * Show error Message
             */
            toast()
                ->danger('Se Ha generado un error inesperado', 'Error')
                ->push();

        }
    }
     
    public function render()
    {
        return view('livewire.admin.plate.create-ingredient')
        ->extends('livewire.layouts.app')
        ->section('content');
    }
}
