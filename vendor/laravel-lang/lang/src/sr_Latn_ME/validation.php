<?php

return [
    'accepted'             => 'Morate prihvatiti :attribute polje.',
    'active_url'           => 'Polje :attribute nije link.',
    'after'                => 'Polje :attribute mora da bude poslije :date.',
    'after_or_equal'       => 'Polje :attribute mora da bude :date ili kasniji datum.',
    'alpha'                => 'Polje :attribute mora da sadrži samo slova.',
    'alpha_dash'           => 'Polje :attribute može da sadrži samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može da sadrži samo slova i brojeve.',
    'array'                => 'Polje :attribute mora da bude niz.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => 'Polje :attribute mora da bude datum prije :date.',
    'before_or_equal'      => 'Polje :attribute mora da bude :date ili raniji datum.',
    'between'              => [
        'array'   => 'Niz :attribute mora da ima najmanje :min, a najviše :max stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude između :min i :max kb.',
        'numeric' => 'Vrijednost :attribute mora da bude između :min - :max.',
        'string'  => 'Rečenica polja :attribute mora da ima najmanje :min a najviše :max znakova.',
    ],
    'boolean'              => 'Polje :attribute mora da bude tačno ili netačno.',
    'confirmed'            => 'Potvrda za polje :attribute se ne poklapa.',
    'date'                 => 'Polje :attribute ne sadrži datum.',
    'date_equals'          => 'Polje :attribute mora da bude :date.',
    'date_format'          => 'Polje :attribute ne sadrži odgovarajući format: :format.',
    'different'            => 'Polje :attribute mora da ima različitu vrijednost od :other.',
    'digits'               => 'Polje :attribute mora da sadrži :digits cifara.',
    'digits_between'       => 'Polje :attribute mora da se sastoji između :min i :max cifara.',
    'dimensions'           => 'Ilustracija :attribute mora biti odgovarajućih dimenzija.',
    'distinct'             => 'Polje :attribute nema jedinstvenu vrijednost.',
    'email'                => 'Polje :attribute mora biti ispravna E-mail adresa.',
    'ends_with'            => 'Polje :attribute mora da se završi sa: :values.',
    'exists'               => 'Odabrana vrijednost za :attribute nije ispravna.',
    'file'                 => 'Polje :attribute mora da bude dokument.',
    'filled'               => 'Polje :attribute mora da sadrži podatak.',
    'gt'                   => [
        'array'   => 'Niz :attribute mora da sadrži više od :value stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude veća od :value kb.',
        'numeric' => 'Polje :attribute mora da bude veće od :value.',
        'string'  => 'Polje :attribute mora da sadrži više od :value znakova.',
    ],
    'gte'                  => [
        'array'   => 'Niz :attribute mora da sadrži najmanje :value stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :value kb ili veća.',
        'numeric' => 'Polje :attribute može da bude najmanje :value.',
        'string'  => 'Polje :attribute mora da sadrži najmanje :value znakova.',
    ],
    'image'                => 'Polje :attribute mora da bude ilustracija.',
    'in'                   => 'Polje :attribute ne sadrži neku od predloženih vrijednosti.',
    'in_array'             => 'Vrijednost u polju :attribute nije sadržana u :other.',
    'integer'              => 'Vrijednost polja :attribute mora da bude broj.',
    'ip'                   => 'Polje :attribute mora da bude ispravna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora da bude ispravna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora da bude ispravna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora da bude u JSON formatu.',
    'lt'                   => [
        'array'   => 'Niz :attribute mora da sadrži manje od :value stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude manja od :value kb.',
        'numeric' => 'Polje :attribute mora da bude manje od :value.',
        'string'  => 'Polje :attribute mora da sadrži manje od :value znakova.',
    ],
    'lte'                  => [
        'array'   => 'Niz :attribute mora da sadrži najviše :value stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :value kb ili manja.',
        'numeric' => 'Polje :attribute može da bude najviše :value.',
        'string'  => 'Polje :attribute mora da sadrži najviše :value znakova.',
    ],
    'max'                  => [
        'array'   => 'Niz :attribute mora da sadrži najviše :max stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :max kb ili manja.',
        'numeric' => 'Polje :attribute može da bude najviše :max.',
        'string'  => 'Polje :attribute mora da sadrži najviše :max znakova.',
    ],
    'mimes'                => 'Vrsta dokumenta za polje :attribute mora da bude: :values.',
    'mimetypes'            => 'Vrsta dokumenta za polje :attribute mora da bude: :values.',
    'min'                  => [
        'array'   => 'Niz :attribute mora da sadrži najmanje :min stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude :min kb ili veća.',
        'numeric' => 'Polje :attribute može da bude najmanje :min.',
        'string'  => 'Polje :attribute mora da sadrži najmanje :min znakova.',
    ],
    'multiple_of'          => 'Polje :attribute biti djeljivo sa :value',
    'not_in'               => 'Polje :attribute sadrži neku od nedozvoljenih vrijednosti.',
    'not_regex'            => 'Format polja :attribute nije ispravan.',
    'numeric'              => 'Polje :attribute mora da bude broj.',
    'password'             => 'Pogrešna lozinka.',
    'present'              => 'Polje :attribute nije označeno.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => 'Morate da popunite polje :attribute.',
    'required_if'          => 'Morate da popunite polje :attribute jer polje :other sadrži :value.',
    'required_unless'      => 'Morate da popunite polje :attribute, osim ako je :other sadržan u :values.',
    'required_with'        => 'Morate da popunite polje :attribute sa poljima :values.',
    'required_with_all'    => 'Morate da popunite polje :attribute sa poljima :values.',
    'required_without'     => 'Morate da popunite polje :attribute jer nisu popunjena polja :values.',
    'required_without_all' => 'Morate da popunite polje :attribute jer nisu popunjena polja :values.',
    'same'                 => 'Polje :attribute ovog polja se mora poklopiti sa jednim od sledećeg: :other.',
    'size'                 => [
        'array'   => 'Niz :attribute mora da sadrži tačno :value stavki.',
        'file'    => 'Veličina dokumenta :attribute mora da bude tačno :value k.',
        'numeric' => 'Polje :attribute mora da bude tačno :value.',
        'string'  => 'Polje :attribute mora da sadrži tačno :value znakova.',
    ],
    'starts_with'          => 'Polje :attribute mora da počne sa: :values.',
    'string'               => 'Polje :attribute mora da bude rečenica.',
    'timezone'             => 'Polje :attribute mora da bude ispravna vremenska zona.',
    'unique'               => 'Unijeta vrijednost za :attribute već postoji.',
    'uploaded'             => 'Greška pri postavljanju dokumenata.',
    'url'                  => 'Polje :attribute nije link.',
    'uuid'                 => 'Polje :attribute nije pretstavljen kao jedinstveni identifikator.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [
        'address'               => 'adresa',
        'age'                   => 'godine',
        'body'                  => 'sadržaj',
        'city'                  => 'grad',
        'country'               => 'država',
        'date'                  => 'datum',
        'day'                   => 'dan',
        'description'           => 'opis',
        'email'                 => 'email',
        'excerpt'               => 'siže',
        'first_name'            => 'ime',
        'gender'                => 'pol',
        'hour'                  => 'sat',
        'last_name'             => 'prezime',
        'message'               => 'poruka',
        'minute'                => 'minuti',
        'mobile'                => 'mobilni',
        'month'                 => 'mjesec',
        'name'                  => 'ime',
        'password'              => 'lozinka',
        'password_confirmation' => 'provjera lozinke',
        'phone'                 => 'telefon',
        'second'                => 'sekunde',
        'sex'                   => 'pol',
        'subject'               => 'naslov',
        'time'                  => 'vrijeme',
        'title'                 => 'naslov',
        'username'              => 'korisničko ime',
        'year'                  => 'godina',
    ],
];
