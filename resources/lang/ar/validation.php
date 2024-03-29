<?php

return [
    'accepted' => ':attribute يجب قبوله.',
    'active_url' => ':attribute هذا العنوان ليس صالحًا ' ,
    'after' => ':attribute يجب أن يكون تاريخا بعد:date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
    'alpha' => ':attribute قد تحتوي على أحرف فقط .',
    'alpha_dash' => ':attribute يجب أن تحتوي فقط على أحرف وأرقام وفواصل وفواصل منقوطة . ',
    'alpha_num' => ':attribute قد تحتوي على حروف وأرقام فقط.',
    'array' => ':attribute يجب أن تكون مصفوفة .',
    'before' => ':attribute يجب أن يكون تاريخا من قبل :date.',
    'before_or_equal' => 'The :attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
    'between' => [
        'numeric' => ':attribute  يجب أن يكون بين :min و :max.',
        'file' => ' :attribute يجب أن يكون بين :min و :max kilobytes.',
        'string' => ' :attribute يجب أن يكون بين :min و :max characters.',
        'array' => ' :attribute يجب أن يكون بين :min و :max items.',
    ],
    'boolean' => ' يجب أن يكون :attribute صحيحًا أو خاطئًا.',
    'confirmed' => ':attribute التأكيد غير متطابق.',
    'date' => ' :attribute هذا ليس تاريخ صحيح.',
    'date_equals' => ':attribute يجب أن يكون تاريخ يساوي :date.',
    'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
    'different' => ' :attribute و :other يجب أن تكون مختلف.',
    'digits' => ' :attribute يجب أن يكون :digits أرقام.',
    'digits_between' => ':attribute يجب ان تكون بين :min و :max أرقام .',
    'dimensions' => ' :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => ' :attribute يحتوي الحقل على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان صالح.',
    'ends_with' => ' :attribute يجب أن تنتهي بأحد following: :values.',
    'exists' => ' لم يتم تحديد :attribute من العناصر .', 
    'file' => ' :attribute يجب أن يكون ملف.',
    'filled' => ' :attribute يجب أن يكون للحقل قيمة.',
    'gt' => [
        'numeric' => ' :attribute يجب أن يكون أكبر من  :value.',
        'file' => ' :attribute يجب أن يكون أكبر من  :value كيلو بايت.',
        'string' => ' :attribute يجب أن يكون أكبر من  :value الاحرف.',
        'array' => ' :attribute يجب أن يكون أكثر من  :value items.',
    ],
    'gte' => [
        'numeric' => ' :attribute يجب أن يكون أكبر من أو يساوي  :value.',
        'file' => ' :attribute يجب أن يكون أكبر من أو يساوي :value كيلو بايت.',
        'string' => ' :attributeيجب أن يكون أكبر من أو يساوي :value الاحرف.',
        'array' => ' :attribute يجب أن يكون لديه  :value items or more.',
    ],
    'image' => ':attribute يجب أن تكون صورة .',
    'in' => 'المحدد :attribute غير صالح.',
    'in_array' => ':attribute الحقل غير موجود في :other.',
    'integer' => ' :attribute يجب أن يكون صحيحا .',
    'ip' => ' :attribute يجب أن يكون عنوان IP صالحًا.',
    'ipv4' => ' :attribute يجب أن يكون عنوان IPv4 صالحًا.',
    'ipv6' => ' :attribute يجب أن يكون عنوان IPv6 صالحًا.',
    'json' => ' :attribute يجب أن تكون سلسلة JSON صالحة.',
    'lt' => [
        'numeric' => ' :attributeيجب أن يكون أقل من :value.',
        'file' => ' :attribute يجب أن يكون أقل من :value كيلو بايت.',
        'string' => ' :attribute يجب أن يكون أقل من :value الاحرف.',
        'array' => ' :attribute يجب أن يكون أقل من :value items.',
    ],
    'lte' => [
        'numeric' => ' :attribute يجب أن يكون أقل من أو يساوي :value.',
        'file' => ' :attribute يجب أن يكون أقل من أو يساوي :value كيلو بايت.',
        'string' => ' :attribute يجب أن يكون أقل من أو يساوي :value الاحرف.',
        'array' => ':attributeيجب أن يكون أقل من أو يساوي  :value items.',
    ],
    'max' => [
        'numeric' => ' :attribute قد لا يكون أكبر من :max.',
        'file' => ' :attribute قد لا يكون أكبر من :max كيلو بايت.',
        'string' => ' :attributeقد لا يكون أكبر من :max الاحرف.',
        'array' => ' :attribute قد لا يكون أكثر من :max items.',
    ],
    'mimes' => ' :attribute يجب أن يكون ملف type: :values.',
    'mimetypes' => ' :attributeيجب أن يكون ملف type: :values.',
    'min' => [
        'numeric' => ' :attribute لا بد أن يكون على الأقل :min.',
        'file' => ' :attribute لا بد أن يكون على الأقل :min كيلو بايت.',
        'string' => ' :attribute لا بد أن يكون على الأقل :min الاحرف.',
        'array' => ' :attribute يجب أن يكون على الأقل :min items.',
    ],
    'not_in' => 'المحدد :attribute غير صالح',
    'not_regex' => ' :attribute التنسيق غير صالح.',
    'numeric' => ' :attribute يجب أن يكون رقما.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => ':attribute يجب أن يكون الحقل موجودا.',
    'regex' => ' :attribute التنسيق غير صالح .',
    'required' => '  :attribute مطلوب',
    'required_if' => ' :attribute الحقل مطلوب عندما :other is :value.',
    'required_unless' => ' :attribute الحقل مطلوب إلا إذا :other is in :values.',
    'required_with' => ' :attribute الحقل مطلوب عندما :values is present.',
    'required_with_all' => ' :attribute الحقل مطلوب عندما :values are present.',
    'required_without' => ' :attributeالحقل مطلوب عندما :values is not present.',
    'required_without_all' => ' :attribute الحقل مطلوب عندما لا شيء :values are present.',
    'same' => 'The :attribute و :other يجب أن تتطابق.',
    'size' => [
        'numeric' => ' :attribute   لا بد وأن يكون:size.',
        'file' => ' :attributeلا بد وأن :size kilobytes.',
        'string' => ' :attribute لا بد وأن :size characters.',
        'array' => ' :attribute يجب ان يحتوي :size items.',
    ],
    'starts_with' => ' :attribute يجب أن تبدأ بأحد الإجراءات التالية : :values.',
    'string' => ' :attribute يجب أن تكون نص .',
    'timezone' => ' :attribute must be a valid zone.',
    'unique' => ':attribute موحود بالفعل',
    'uploaded' => ' :attribute فشل التحميل.',
    'url' => ' :attribute التنسيق غير صالح.',
    'uuid' => ' :attribute يجب أن يكون UUID صالحًا.',



    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    'attributes' => [
        //class room
        'name_class_ar' => 'الصف بالعربي',
        'name_class_en' => 'الصف بالانكليزي',
        'name_ar'    => 'الاسم بالعربي',
        'name_en'    => 'الاسم بالانكليزي',
        'status'     =>   'الحالة',
        //students
        'email'      => 'البريد الالكتروني',
        'password'   => 'كلمة السر',
        'gender_id'  => 'الجنس',
        'nationalite_id' => 'الجنسية',
        'bload_id'   => 'زمرة الدم',
        'date_birth' => 'تاريخ الولادة',
        'grade_id'   => 'المرحلة الدراسية',
        'classroom_id' =>'الصف الدراسي',
        'section_id' => 'القسم',
        'parant_id'  => 'اسم الأب/ الأم ',
        'academic_year' => 'السنة الدراسية',
        'photos'     =>   'الصور',
        'descreption'=>   'ملاحظة',
         //My Parents
         'name_father' => '  اسم الأب باللغة العربية',
         'name_father_en' => 'اسم الاب باللغة الانكليزية',
         'job_father' => 'وظيفة الاب باللغة العربية',
         'job_father_en' => 'وظيفة الاب باللغة الانكليزية',
         'national_id_father' => 'رقم الهوية الوطني',
         'passport_id_father' => 'رقم جواز السفر',
         'phone_father' => 'رقم الهاتف',
         'nationality_father_id'=> 'الجنسية',
         'bload_type_father_id' => 'زمرة الدم',
         'religion_father_id' => 'الديانة',
         'address_father' => 'العنوان',
         'national_id_mother' => 'رقم الهوية الوطني',
         // teachers
         'joining_date' => 'تاريخ الانضمام',
         'specialization_id' => 'التخصص',
         'address' => 'العنوان',
         
    ],

];
