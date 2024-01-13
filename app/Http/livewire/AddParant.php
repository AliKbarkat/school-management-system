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

    public $email, $password, $name_father, $name_father_en, $job_father, $job_father_en, $national_id_father,$passport_id_father, 
    $phone_father, $nationality_father_id, $bload_type_Father_id, $religion_father_id, $address_father, 
    $name_mother, $name_mother_en,$job_mother, $job_mother_en, $national_id_mother, $passport_id_mother, $phone_mother,
    $nationality_mother_id,$bload_type_mother_id, $religion_mother_id, $address_mother;
   
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
            'email' => 'required',
            'password' => 'required',
            'name_father' => 'required',
            'name_father_en' => 'required',
            'job_father' => 'required',
            'job_father_en' => 'required',
            'national_id_father' => 'required',
            'passport_id_father' => 'required',
            'phone_father' => 'required',
            'nationally_father_id' => 'required',
            'bload_type_father_id' => 'required',
            'religion_father_id' => 'required',
            'address_father' => 'required'
        ]);
        $this->currentStep = 2;
    }
    
    public function secondStepSubmit()
    {
       
        $this->validate([

            'name_mother' => 'required',
            'name_mother_en' => 'required',
            'job_mother' => 'required',
            'job_mother_en' => 'required',
            'national_id_mother' => 'required',
            'passport_id_mother' => 'required',
            'phone_mother' => 'required',
            'nationally_mother_id' => 'required',
            'bload_type_mother_id' => 'required',
            'religion_mother_id' => 'required',
            'address_mother' => 'required'
       
        ]);

        $this->currentStep = 3;
    }

    public function back($step)
    {

        $this->currentStep = $step;
   
    }

    public function submitform()
    {

        $my_parant = new MyParant();

        $my_parant->email = $this->email;
        $my_parant->password = Hash::make($this->password);
        //father
        $my_parant->name_father = ['ar'=> $this->name_father,'en'=> $this -> name_father_en];
        $my_parant->job_father = ['en '=> $this->job_father_en,'ar' => $this  -> job_father] ;
        $my_parant->national_id_father = $this->national_id_father;
        $my_parant->passport_id_father = $this->passport_id_father;
        $my_parant->phone_father = $this->phone_father;
        $my_parant->nationality_father_id = $this->nationality_father_id;
        $my_parant->bload_type_Father_id = $this->bload_type_father_id;
        $my_parant->address_father = $this->address_father;
        $my_parant->religion_father_id = $this->religion_father_id;
        ///mother
        $my_parant->name_mother = ['ar' => $this -> name_mother ,'en' => $this -> name_mother_en];
        $my_parant->job_mother = ['en ' => $this -> job_mother_en,'ar' => $this -> job_mother_en];
        $my_parant->national_id_mother = $this -> national_id_mother;
        $my_parant->passport_id_mother = $this -> passport_id_mother;
        $my_parant->phone_mother = $this -> phone_mother;
        $my_parant->nationality_mother_id = $this -> nationality_mother_id;
        $my_parant->bload_type_mother_id = $this -> bload_type_mother_id;
        $my_parant->address_mother = $this -> address_mother;
        $my_parant->religion_mother_id = $this->religion_mother_id;
        $my_parant->save();

        $this->sucsessMassege = __('my_parant.succses');
        
        $this->clearform();
       
        $this->currentStep = 1;


        if (!empty($this->photos)) {
            foreach ($this->photos as $photo) {
                $photo->storeAs($this->national_id_father, $photo->getClientOriginalName(), $disk = 'parant_attchements');
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
        $this->email = $my_parant -> email;
        $this->password = $my_parant -> password;
        $this->name_father = $my_parant -> name_father;
        $this->name_father_en = $my_parant -> name_father_en;
        $this->job_father = $my_parant -> job_father;
        $this->job_father_en = $my_parant -> job_father_en;
        $this->national_id_father = $my_parant->National_ID_Father;
        $this->passport_id_father = $my_parant->Passport_ID_Father;
        $this->phone_father = $my_parant->Phone_Father;
        $this->nationality_father_id = $my_parant->nationality_father_id;
        $this->bload_type_Father_id = $my_parant->bload_type_Father_id;
        $this->religion_father_id = $my_parant->religion_father_id;
        $this->address_father = $my_parant->address_father;
        //mother
        $this->name_mother = $my_parant->name_mother;
        $this->name_mother_en = $my_parant->Name_Mother_en;
        $this->job_mother = $my_parant->job_mother;
        $this->job_mother_en = $my_parant->job_mother_en;
        $this->national_id_mother = $my_parant->national_id_mother;
        $this->passport_id_mother = $my_parant->passport_id_mother;
        $this->phone_mother = $my_parant->phone_mother;
        $this->nationality_mother_id = $my_parant->nationality_mother_id;
        $this->bload_type_mother_id = $my_parant->bload_type_mother_id;
        $this->religion_mother_id = $my_parant->religion_mother_id;
        $this->address_mother = $my_parant->address_mother;

    }

    public function firstStepSubmit_edit()
    {

        $this -> updateMode = true; 
        $this -> currentStep = 2;
    
    }

    public function secondStepSubmit_edit()
    {

        $this->updateMode = true; 
        $this->currentStep = 3;
    
    }

    public function submitform_edit()
    {
        if ($this -> parent_id) {

            $parent = MyParant::find($this -> parent_id);

            $parent->update([
                'email' => $this -> email,
                'password' => $this -> password,
                'name_father' => $this -> name_father,
                'name_father_en' => $this -> name_father_en,
                'job_father' => $this -> job_father,
                'job_father_en' => $this -> job_father_en,
                'national_id_father' => $this -> national_id_father,
                'passport_id_father' => $this -> passport_id_father,
                'phone_father' => $this -> phone_father,
                'nationality_father_id' => $this -> nationality_father_id,
                'bload_type_Father_id' => $this -> bload_type_Father_id,
                'religion_father_id' => $this -> religion_father_id,
                'address_father' => $this -> address_father,
                'name_mother' => $this -> name_mother,
                'name_mother_en' => $this -> name_mother_en,
                'job_mother' => $this -> job_mother,
                'job_mother_en' => $this -> job_mother_en,
                'national_id_mother' => $this -> national_id_mother,
                'passport_id_mother' => $this->Passport_ID_Mother,
                'phone_mother' => $this -> Phone_Mother,
                'nationality_mother_id' => $this -> Nationally_Mother_id,
                'bload_type_mother_id' => $this -> Blood_Type_Mother_id,
                'religion_mother_id' => $this -> Religion_Mother_id,
                'address_mother' => $this -> Address_Mother,
            ]);
            return redirect()->to('/Add_parent');
        }
    }
   
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [

            'phone_mother' => 'regex:([0-9])|max:10',
            'passport_id_mother' => 'min:10|max:10',
            'national_id_mother' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'phone_father' => 'regex:([0-9])|max:10',
            'passport_id_father' => 'min:10|max:10',
            'national_id_father' => 'required|string|min:10|max:10|regex:/[0-9]{9}/',
            'email' => 'email',
        ]);
    }
 
    public function destroy($id)
    {
        MyParant::find($id)->destroy();
        return redirect()->to('/Add_parent');

    }

    public function clearform()
    {
      
        $this -> email = ''; 
        $this -> password = '';
        $this -> name_father = '';
        $this -> name_father_en = '';
        $this -> job_father = '';
        $this -> job_father_en = '';
        $this -> national_id_father = '';
        $this -> passport_id_father = ''; 
        $this -> phone_father = '';
        $this -> nationality_father_id = ''; 
        $this -> bload_type_Father_id = '';
        $this -> religion_father_id = '';
        $this -> address_father = ''; 
        $this -> name_mother = '';
        $this -> name_mother_en = '';        
        $this -> job_mother = '';
        $this -> job_mother_en = '';
        $this -> national_id_mother = '';
        $this -> passport_id_mother = '';
        $this -> phone_mother = ''; 
        $this->nationality_mother_id = ''; 
        $this->bload_type_mother_id = ''; 
        $this -> religion_mother_id = ''; 
        $this->address_mother = '';
    
    }
   
}
