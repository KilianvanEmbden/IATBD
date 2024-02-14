<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    
    'accepted'             => ':Attribute dient te worden geaccepteerd.',
    'active_url'           => ':Attribute is geen geldige URL.',
    'after'                => ':Attribute moet een datum zijn na :date.',
    'after_or_equal'       => ':Attribute moet een datum zijn na of gelijk aan :date.',
    'alpha'                => ':Attribute mag alleen letters bevatten.',
    'alpha_dash'           => ':Attribute mag alleen letters, nummers, en strepen bevatten.',
    'alpha_num'            => ':Attribute mag alleen letters en nummers bevatten.',
    'array'                => ':Attribute moet een array zijn.',
    'before'               => ':Attribute moet een datum zijn eerder dan :date.',
    'before_or_equal'      => ':Attribute moet een datum zijn voor of gelijk aan :date.',
    'between'              => [
        'numeric' => ':Attribute moet tussen :min en :max liggen.',
        'file'    => ':Attribute moet tussen :min en :max kilobytes zijn.',
        'string'  => ':Attribute moet tussen :min en :max karakters lang zijn.',
        'array'   => ':Attribute moet tussen :min en :max items bevatten.',
    ],
    'boolean'              => ':Attribute kan enkel waar of niet waar zijn.',
    'confirmed'            => ':Attribute bevestiging komt niet overeen.',
    'date'                 => ':Attribute is geen geldige datum.',
    'date_equals'          => ':Attribute moet een datum zijn gelijk aan :date.',
    'date_format'          => ':Attribute komt niet overeen met het formaat :format.',
    'different'            => ':Attribute en :other dienen verschillend te zijn.',
    'digits'               => ':Attribute moet :digits cijfers zijn.',
    'digits_between'       => ':Attribute moet tussen :min en :max cijfers zijn.',
    'dimensions'           => ':Attribute heeft een ongeldige grootte.',
    'distinct'             => ':Attribute heeft een dubbele waarde.',
    'email'                => ':Attribute dient een geldig emailadres te zijn.',
    'ends_with'            => ':Attribute moet eindigen met één van het volgende: :values',
    'exists'               => 'Geselecteerde :attribute is ongeldig.',
    'file'                 => ':Attribute moet een bestand zijn.',
    'filled'               => ':Attribute veld is verplicht.',
    'gt'                   => [
        'numeric' => 'Het :attribute veld moet groter zijn dan :value.',
        'file'    => 'Het :attribute veld moet groter zijn dan :value kilobytes.',
        'string'  => 'Het :attribute veld moet groter zijn dan :value tekens.',
        'array'   => 'Het :attribute veld moet meer dan :value items bevatten.',
    ],
    'gte'                  => [
        'numeric' => 'Het :attribute veld moet groter of gelijk zijn aan :value.',
        'file'    => 'Het :attribute veld moet groter of gelijk zijn aan :value kilobytes.',
        'string'  => 'Het :attribute veld moet groter of gelijk zijn aan :value tekens.',
        'array'   => 'Het :attribute veld moet :value of meer items bevatten.',
    ],
    'image'                => ':Attribute dient een afbeelding te zijn.',
    'in'                   => 'Geselecteerde :attribute is ongeldig.',
    'in_array'             => ':Attribute komt niet voor in :other.',
    'integer'              => ':Attribute dient een geheel getal te zijn.',
    'ip'                   => ':Attribute dient een geldig IP adres te zijn.',
    'ipv4'                 => ':Attribute dient een geldig IPv4 adres te zijn.',
    'ipv6'                 => ':Attribute dient een geldig IPv6 adres te zijn..',
    'json'                 => ':Attribute moet een geldige JSON string zijn.',
    'lt'                   => [
        'numeric' => 'Het :attribute veld moet kleiner zijn dan :value.',
        'file'    => 'Het :attribute veld moet kleiner zijn dan :value kilobytes.',
        'string'  => 'Het :attribute veld moet kleiner zijn dan :value tekens.',
        'array'   => 'Het :attribute veld moet minder dan :value items bevatten.',
    ],
    'lte'                  => [
        'numeric' => 'Het :attribute veld moet kleiner of gelijk zijn aan :value.',
        'file'    => 'Het :attribute veld moet kleiner of gelijk zijn aan :value kilobytes.',
        'string'  => 'Het :attribute veld moet kleiner of gelijk zijn aan :value tekens.',
        'array'   => 'Het :attribute veld mag maximaal :value items bevatten.',
    ],
    'max'                  => [
        'numeric' => ':Attribute mag niet groter zijn dan :max.',
        'file'    => ':Attribute mag niet groter zijn dan :max kilobytes.',
        'string'  => ':Attribute mag niet groter zijn dan :max karakters.',
        'array'   => ':Attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes'                => ':Attribute dient een bestand te zijn van het type: :values.',
    'mimetypes'            => ':Attribute dient een bestand te zijn van het type: :values.',
    'min'                  => [
        'numeric' => ':Attribute dient minimaal :min te zijn.',
        'file'    => ':Attribute dient minimaal :min kilobytes te zijn.',
        'string'  => ':Attribute dient minimaal :min karakters te bevatten.',
        'array'   => ':Attribute dient minimaal :min items te bevatten.',
    ],
    'not_in'               => 'Geselecteerde :attribute is ongeldig.',
    'not_regex'            => 'Het :attribute format is ongeldig.',
    'numeric'              => ':Attribute dient een nummer te zijn.',
    'password'             => 'Het wachtwoord is niet correct',
    'present'              => ':Attribute dient aanwezig te zijn.',
    'regex'                => 'Het :attribute formaat is ongeldig.',
    'required'             => 'Het :attribute veld is verplicht.',
    'required_if'          => 'Het :attribute veld is verplicht wanneer :other is :value.',
    'required_unless'      => 'Het :attribute veld is verplicht, tenzij :other is in :values.',
    'required_with'        => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all'    => 'Het :attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without'     => 'Het :attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is verplicht wanneer geen van :values aanwezig is.',
    'same'                 => ':Attribute en :other moeten hetzelfde zijn.',
    'size'                 => [
        'numeric' => ':Attribute moet :size zijn.',
        'file'    => ':Attribute moet :size kilobytes groot zijn.',
        'string'  => ':Attribute moet :size karakters lang zijn.',
        'array'   => ':Attribute moet :size items bevatten.',
    ],
    'starts_with'          => ':Attribute moet beginnen met één van het volgende: :values',
    'string'               => ':Attribute moet een string zijn.',
    'timezone'             => ':Attribute moet een geldige tijdszone zijn.',
    'unique'               => ':Attribute is al bezet.',
    'uploaded'             => 'Het uploaden van :attribute is mislukt.',
    'url'                  => ':Attribute formaat is ongeldig.',
    'uuid'                 => ':Attribute moet een valide UUID zijn.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

// return [

//     /*
//     |--------------------------------------------------------------------------
//     | Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines contain the default error messages used by
//     | the validator class. Some of these rules have multiple versions such
//     | as the size rules. Feel free to tweak each of these messages here.
//     |
//     */

//     'accepted' => 'The :attribute must be accepted.',
//     'active_url' => 'The :attribute is not a valid URL.',
//     'after' => 'The :attribute must be a date after :date.',
//     'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
//     'alpha' => 'The :attribute must only contain letters.',
//     'alpha_dash' => 'The :attribute must only contain letters, numbers, dashes and underscores.',
//     'alpha_num' => 'The :attribute must only contain letters and numbers.',
//     'array' => 'The :attribute must be an array.',
//     'before' => 'The :attribute must be a date before :date.',
//     'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
//     'between' => [
//         'numeric' => 'The :attribute must be between :min and :max.',
//         'file' => 'The :attribute must be between :min and :max kilobytes.',
//         'string' => 'The :attribute must be between :min and :max characters.',
//         'array' => 'The :attribute must have between :min and :max items.',
//     ],
//     'boolean' => 'The :attribute field must be true or false.',
//     'confirmed' => 'The :attribute confirmation does not match.',
//     'date' => 'The :attribute is not a valid date.',
//     'date_equals' => 'The :attribute must be a date equal to :date.',
//     'date_format' => 'The :attribute does not match the format :format.',
//     'different' => 'The :attribute and :other must be different.',
//     'digits' => 'The :attribute must be :digits digits.',
//     'digits_between' => 'The :attribute must be between :min and :max digits.',
//     'dimensions' => 'The :attribute has invalid image dimensions.',
//     'distinct' => 'The :attribute field has a duplicate value.',
//     'email' => 'The :attribute must be a valid email address.',
//     'ends_with' => 'The :attribute must end with one of the following: :values.',
//     'exists' => 'The selected :attribute is invalid.',
//     'file' => 'The :attribute must be a file.',
//     'filled' => 'The :attribute field must have a value.',
//     'gt' => [
//         'numeric' => 'The :attribute must be greater than :value.',
//         'file' => 'The :attribute must be greater than :value kilobytes.',
//         'string' => 'The :attribute must be greater than :value characters.',
//         'array' => 'The :attribute must have more than :value items.',
//     ],
//     'gte' => [
//         'numeric' => 'The :attribute must be greater than or equal :value.',
//         'file' => 'The :attribute must be greater than or equal :value kilobytes.',
//         'string' => 'The :attribute must be greater than or equal :value characters.',
//         'array' => 'The :attribute must have :value items or more.',
//     ],
//     'image' => 'The :attribute must be an image.',
//     'in' => 'The selected :attribute is invalid.',
//     'in_array' => 'The :attribute field does not exist in :other.',
//     'integer' => 'The :attribute must be an integer.',
//     'ip' => 'The :attribute must be a valid IP address.',
//     'ipv4' => 'The :attribute must be a valid IPv4 address.',
//     'ipv6' => 'The :attribute must be a valid IPv6 address.',
//     'json' => 'The :attribute must be a valid JSON string.',
//     'lt' => [
//         'numeric' => 'The :attribute must be less than :value.',
//         'file' => 'The :attribute must be less than :value kilobytes.',
//         'string' => 'The :attribute must be less than :value characters.',
//         'array' => 'The :attribute must have less than :value items.',
//     ],
//     'lte' => [
//         'numeric' => 'The :attribute must be less than or equal :value.',
//         'file' => 'The :attribute must be less than or equal :value kilobytes.',
//         'string' => 'The :attribute must be less than or equal :value characters.',
//         'array' => 'The :attribute must not have more than :value items.',
//     ],
//     'max' => [
//         'numeric' => 'The :attribute must not be greater than :max.',
//         'file' => 'The :attribute must not be greater than :max kilobytes.',
//         'string' => 'The :attribute must not be greater than :max characters.',
//         'array' => 'The :attribute must not have more than :max items.',
//     ],
//     'mimes' => 'The :attribute must be a file of type: :values.',
//     'mimetypes' => 'The :attribute must be a file of type: :values.',
//     'min' => [
//         'numeric' => 'The :attribute must be at least :min.',
//         'file' => 'The :attribute must be at least :min kilobytes.',
//         'string' => 'The :attribute must be at least :min characters.',
//         'array' => 'The :attribute must have at least :min items.',
//     ],
//     'multiple_of' => 'The :attribute must be a multiple of :value.',
//     'not_in' => 'The selected :attribute is invalid.',
//     'not_regex' => 'The :attribute format is invalid.',
//     'numeric' => 'The :attribute must be a number.',
//     'password' => 'The password is incorrect.',
//     'present' => 'The :attribute field must be present.',
//     'regex' => 'The :attribute format is invalid.',
//     'required' => 'The :attribute field is required.',
//     'required_if' => 'The :attribute field is required when :other is :value.',
//     'required_unless' => 'The :attribute field is required unless :other is in :values.',
//     'required_with' => 'The :attribute field is required when :values is present.',
//     'required_with_all' => 'The :attribute field is required when :values are present.',
//     'required_without' => 'The :attribute field is required when :values is not present.',
//     'required_without_all' => 'The :attribute field is required when none of :values are present.',
//     'prohibited' => 'The :attribute field is prohibited.',
//     'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
//     'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
//     'same' => 'The :attribute and :other must match.',
//     'size' => [
//         'numeric' => 'The :attribute must be :size.',
//         'file' => 'The :attribute must be :size kilobytes.',
//         'string' => 'The :attribute must be :size characters.',
//         'array' => 'The :attribute must contain :size items.',
//     ],
//     'starts_with' => 'The :attribute must start with one of the following: :values.',
//     'string' => 'The :attribute must be a string.',
//     'timezone' => 'The :attribute must be a valid zone.',
//     'unique' => 'The :attribute has already been taken.',
//     'uploaded' => 'The :attribute failed to upload.',
//     'url' => 'The :attribute format is invalid.',
//     'uuid' => 'The :attribute must be a valid UUID.',

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Language Lines
//     |--------------------------------------------------------------------------
//     |
//     | Here you may specify custom validation messages for attributes using the
//     | convention "attribute.rule" to name the lines. This makes it quick to
//     | specify a specific custom language line for a given attribute rule.
//     |
//     */

//     'custom' => [
//         'attribute-name' => [
//             'rule-name' => 'custom-message',
//         ],
//     ],

//     /*
//     |--------------------------------------------------------------------------
//     | Custom Validation Attributes
//     |--------------------------------------------------------------------------
//     |
//     | The following language lines are used to swap our attribute placeholder
//     | with something more reader friendly such as "E-Mail Address" instead
//     | of "email". This simply helps us make our message more expressive.
//     |
//     */

//     'attributes' => [],

// ];
