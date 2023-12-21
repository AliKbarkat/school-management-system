<?php

namespace App\Http\Livewire;

use App\models\Bload;
use App\models\MyParant;
use App\models\Nationalitie;
use App\models\ParantAttchement;
use App\Models\Religion;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class AddParant extends Component
{
    use WithFileUploads;
    public $Email, $Password, $Name_Father, $Name_Father_en, $Job_Father, $Job_Father_en, $National_ID_Father, $Passport_ID_Father, $Phone_Father, $Nationally_father_id, $Blood_Type_Father_id, $Religion_Father_id, $Address_Father, $Name_Mother, $Name_Mother_en,
    $Job_Mother, $Job_Mother_en, $National_ID_Mother, $Passport_ID_Mother, $Phone_Mother, $Nationally_Mother_id, $Blood_Type_Mother_id, $Religion_Mother_id, $Address_Mother;
    public $currentStep = 1;
    public $sucsessMassege = '', $photos, $updateMode = false, $show_table = true, $parent_id;

    public function render()
    {  
        return view('livewire.add-parant', [
         'nationalities' => Nationalitie::all(),
         'religions' => Religion::all(),
         'bloads' => Bload::all(),
         'my_parants' => MyParant::all(),
        ]);
    }
    public function show_form()
    {
        $this->show_table = false;
    }
    public function firstStepSubmit()
    {
        $this->validate([
            'Email' => 'required',
            'Password' => 'required',
            'Name_Father' => 'required',
            'Name_Father_en' => 'required',
            'Job_Father' => 'required',
            'Job_Father_en' => 'required',
            'National_ID_Father' => 'required',
            'Passport_ID_Father' => 'required',
            'Phone_Father' => 'required',
            'Nationally_father_id' => 'required',
            'Blood_Type_Father_id' => 'required',
            'Religion_Father_id' => 'required',
            'Address_Father' => 'required'
        ]);
        $this->currentStep = 2;
    }
    public function secondStepSubmit()
    {
        $this->validate([
            'Name_Mother' => 'required',
            'Name_Mother_en' => 'required',
            'Job_Mother' => 'required',
            'Job_Mother_en' => 'required',
            'National_ID_Mother' => 'required',
            'Passport_ID_Mother' => 'required',
            'Phone_Mother' => 'required',
            'Nationally_Mother_id' => 'required',
            'Blood_Type_Mother_id' => 'required',
            'Religion_Mother_id' => 'required',
            'Address_Mother' => 'required'
        ]);
        $this->currentStep = 3;
    }
    function back($step)
    {
        $this->currentStep = $step;
    }
    public function submitform()
    {
        $my_parant = new MyParant();

        $my_parant->Email = $this->Email;
        $my_parant->Password = Hash::make($this->Password);
        //father
        $my_parant->Name_Father = $this->Name_Father;
        $my_parant->Name_Father_en = $this->Name_Father_en;
        $my_parant->Job_Father_en = $this->Job_Father_en;
        $my_parant->Job_Father = $this->Job_Father;
        $my_parant->National_ID_Father = $this->National_ID_Father;
        $my_parant->Passport_ID_Father = $this->Passport_ID_Father;
        $my_parant->Phone_Father = $this->Phone_Father;
        $my_parant->Nationally_father_id = $this->Nationally_father_id;
        $my_parant->Blood_Type_Father_id = $this->Blood_Type_Father_id;
        $my_parant->Address_Father = $this->Address_Father;
        $my_parant->Religion_Father_id = $this->Religion_Father_id;
        ///mother
        $my_parant->Name_Mother = $this->Name_Mother;
        $my_parant->Name_Mother_en = $this->Name_Mother_en;
        $my_parant->Job_Mother_en = $this->Job_Mother_en;
        $my_parant->Job_Mother = $this->Job_Mother;
        $my_parant->National_ID_Mother = $this->National_ID_Mother;
        $my_parant->Passport_ID_Mother = $this->Passport_ID_Mother;
        $my_parant->Phone_Mother = $this->Phone_Mother;
        $my_parant->Nationally_Mother_id = $this->Nationally_Mother_id;
        $my_parant->Blood_Type_Mother_id = $this->Blood_Type_Mother_id;
        $my_parant->Address_Mother = $this->Address_Mother;
        $my_parant->Religion_Mother_id = $this->Religion_Mother_id;
        $my_parant->save();
        $this->sucsessMassege = __('my_parant.succses');
        $this->clearform();
        $this->currentStep = 1;


        if (!empty($this->photos)) {
            foreach ($this->photos as $photo) {
                $photo->storeAs($this->National_ID_Father, $photo->getClientOriginalName(), $disk = 'parant_attchements');
                ParantAttchement::create([
                    'name_file' => $photo->getClientOriginalName(),
                    'parant_id' => MyParant::latest()->first()->id,
                ]);
            }
        }

    }

    public function edit($id)
    {
        $this->show_table = false;
        $this->updateMode = true;
        $my_parant = MyParant::where('id', $id)->first();
        $this->parent_id = $my_parant->id;
        $this->Email = $my_parant->Email;
        $this->Password = $my_parant->Password;
        $this->Name_Father = $my_parant->Name_Mother;
        $this->Name_Father_en = $my_parant->Name_Father_en;
        $this->Job_Father = $my_parant->Job_Father;
        $this->Job_Father_en = $my_parant->Job_Father_en;
        $this->National_ID_Father = $my_parant->National_ID_Father;
        $this->Passport_ID_Father = $my_parant->Passport_ID_Father;
        $this->Phone_Father = $my_parant->Phone_Father;
        $this->Nationally_father_id = $my_parant->Nationally_father_id;
        $this->Blood_Type_Father_id = $my_parant->Blood_Type_Father_id;
        $this->Religion_Father_id = $my_parant->Religion_Father_id;
        $this->Address_Father = $my_parant->Address_Father;
        $this->Name_Mother = $my_parant->Name_Mother;
        $this->Name_Mother_en = $my_parant->Name_Mother_en;
        $this->Job_Mother = $my_parant->Job_Mother;
        $this->Job_Mother_en = $my_parant->Job_Mother_en;
        $this->National_ID_Mother = $my_parant->National_ID_Mother;
        $this->Passport_ID_Mother = $my_parant->Passport_ID_Mother;
        $this->Phone_Mother = $my_parant->Phone_Mother;
        $this->Nationally_Mother_id = $my_parant->Nationally_Mother_id;
        $this->Blood_Type_Mother_id = $my_parant->Blood_Type_Mother_id;
        $this->Religion_Mother_id = $my_parant->Religion_Mother_id;
        $this->Address_Mother = $my_parant->Address_Mother;

    }
    public function firstStepSubmit_edit()
    {
        $this->updateMode = true; $this->currentStep = 2;
    }
    function secondStepSubmit_edit()
    {
        $this->updateMode = true; $this->currentStep = 3;
    }
    function submitform_edit()
    {
        if ($this->parent_id) {
            $parent = MyParant::find($this->parent_id);
            $parent->update([
                'Email' => $this->Email,
                'Password' => $this->Password,
                'Name_Father' => $this->Name_Father,
                'Name_Father_en' => $this->Name_Father_en,
                'Job_Father' => $this->Job_Father,
                'Job_Father_en' => $this->Job_Father_en,
                'National_ID_Father' => $this->National_ID_Father,
                'Passport_ID_Father' => $this->Passport_ID_Father,
                'Phone_Father' => $this->Phone_Father,
                'Nationally_father_id' => $this->Nationally_father_id,
                'Blood_Type_Father_id' => $this->Blood_Type_Father_id,
                'Religion_Father_id' => $this->Religion_Father_id,
                'Address_Father' => $this->Address_Father,
                'Name_Mother' => $this->Name_Mother,
                'Name_Mother_en' => $this->Name_Mother_en,
                'Job_Mother' => $this->Job_Mother,
                'Job_Mother_en' => $this->Job_Mother_en,
                'National_ID_Mother' => $this->National_ID_Mother,
                'Passport_ID_Mother' => $this->Passport_ID_Mother,
                'Phone_Mother' => $this->Phone_Mother,
                'Nationally_Mother_id' => $this->Nationally_Mother_id,
                'Blood_Type_Mother_id' => $this->Blood_Type_Mother_id,
                'Religion_Mother_id' => $this->Religion_Mother_id,
                'Address_Mother' => $this->Address_Mother,
            ]);
            return redirect()->to('/Add_parent');
        }
    }
   
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'Phone_Mother' => 'regex:([0-9])|max:10',
            'Passport_ID_Mother' => 'min:10|max:10',
            'National_ID_Mother' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Phone_Father' => 'regex:([0-9])|max:10',
            'Passport_ID_Father' => 'min:10|max:10',
            'National_ID_Father' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'Email' => 'email',
        ]);
    }
 
    public function delete($id)
    {
        MyParant::find($id)->delete();
        return redirect()->to('/Add_parent');

    }
    function clearform()
    {
        $this->Email = ''; $this->Password = ''; $this->Name_Father = '';$this->Name_Father_en = '';$this->Job_Father = '';
        $this->Job_Father_en = '';$this->National_ID_Father = '';$this->Passport_ID_Father = '';   $this->Phone_Father = '';
        $this->Nationally_father_id = ''; $this->Blood_Type_Father_id = '';  $this->Religion_Father_id = '';
        $this->Address_Father = ''; $this->Name_Mother = ''; $this->Name_Mother_en = '';
        $this->Job_Mother = ''; $this->Job_Mother_en = ''; $this->National_ID_Mother = ''; $this->Passport_ID_Mother = '';
         $this->Phone_Mother = ''; $this->Nationally_Mother_id = ''; $this->Blood_Type_Mother_id = ''; $this->Religion_Mother_id = ''; $this->Address_Mother = '';
    }
   
}
