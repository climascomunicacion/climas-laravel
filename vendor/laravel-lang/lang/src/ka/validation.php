<?php

return [
    'accepted'             => ':attribute უნდა იყოს მონიშნული.',
    'active_url'           => ':attribute არ არის სწორი URL მისამართი.',
    'after'                => ':attribute უნდა იყოს თარიღი :date-ის შემდეგ.',
    'after_or_equal'       => ':attribute უნდა იყოს თარიღი :date-ის შემდეგ ან მისი ტოლი.',
    'alpha'                => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს.',
    'alpha_dash'           => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს, რიცხვებს, ტირეებს და ქვეტირეებს.',
    'alpha_num'            => ':attribute უნდა შეიცავდეს მხოლოდ ასოებს და რიცხვებს.',
    'array'                => ':attribute უნდა იყოს მასივი.',
    'attached'             => 'This :attribute is already attached.',
    'before'               => ':attribute უნდა იყოს თარიღი :date-მდე.',
    'before_or_equal'      => ':attribute უნდა იყოს თარიღი :date-მდე ან მისი ტოლი.',
    'between'              => [
        'array'   => ':attribute-ის რაოდენობა უნდა იყოს :min-დან :max-მდე.',
        'file'    => ':attribute უნდა იყოს :min-სა და :max კილობაიტს შორის.',
        'numeric' => ':attribute უნდა იყოს :min-სა და :max-ს შორის.',
        'string'  => ':attribute უნდა იყოს :min-სა და :max სიმბოლოს შორის.',
    ],
    'boolean'              => ':attribute ველი უნდა იყოს true ან false.',
    'confirmed'            => ':attribute-ის დადასტურება არ ემთხვევა.',
    'date'                 => ':attribute შეიცავს თარიღის არასწორ ფორმატს.',
    'date_equals'          => ':attribute უნდა იყოს :date-ის ტოლი თარიღი.',
    'date_format'          => ':attribute არ ემთხვევა თარიღის ფორმატს: :format.',
    'different'            => ':attribute და :other არ უნდა ემთხვეოდეს ერთმანეთს.',
    'digits'               => ':attribute უნდა შედგებოდეს :digits ციფრისგან.',
    'digits_between'       => ':attribute უნდა შედგებოდეს :min-დან :max ციფრამბდე.',
    'dimensions'           => ':attribute შეიცავს სურათის არასწორ ზომებს.',
    'distinct'             => ':attribute-ის ველს აქვს დუბლირებული მნიშვნელობა.',
    'email'                => ':attribute უნდა იყოს სწორი ელ.ფოსტა.',
    'ends_with'            => ':attribute უნდა ბოლოვდებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'exists'               => 'არჩეული :attribute არასწორია.',
    'file'                 => ':attribute უნდა იყოს ფაილი.',
    'filled'               => ':attribute აუცილებელია.',
    'gt'                   => [
        'array'   => ':attribute უნდა შეიცავდეს :value ელემენტზე მეტს.',
        'file'    => ':attribute უნდა იყოს :value კილობაიტზე მეტი.',
        'numeric' => ':attribute უნდა იყოს :value-ზე მეტი.',
        'string'  => ':attribute უნდა შეიცავდეს :value სიმბოლოზე მეტს.',
    ],
    'gte'                  => [
        'array'   => ':attribute უნდა შეიცავდეს მინიმუმ :value ელემენტს.',
        'file'    => ':attribute უნდა იყოს მინიმუმ :value კილობაიტი.',
        'numeric' => ':attribute უნდა იყოს მინიმუმ :value.',
        'string'  => ':attribute უნდა შეიცავდეს მინიმუმ :value სიმბოლოს.',
    ],
    'image'                => ':attribute უნდა იყოს სურათი.',
    'in'                   => 'არჩეული :attribute არასწორია.',
    'in_array'             => ':attribute ველი არ არსებობს :other-ში.',
    'integer'              => ':attribute უნდა იყოს მთელი რიცხვი.',
    'ip'                   => ':attribute უნდა იყოს ვალიდური IP მისამართი.',
    'ipv4'                 => ':attribute უნდა იყოს ვალიდური IPv4 მისამართი.',
    'ipv6'                 => ':attribute უნდა იყოს ვალიდური IPv6 მისამართი.',
    'json'                 => ':attribute უნდა იყოს სწორი JSON ტიპის.',
    'lt'                   => [
        'array'   => ':attribute უნდა შეიცავდეს :value ელემენტზე ნაკლებს.',
        'file'    => ':attribute უნდა იყოს :value კილობაიტზე ნაკლები.',
        'numeric' => ':attribute უნდა იყოს :value-ზე ნაკლები.',
        'string'  => ':attribute უნდა შეიცავდეს :value სიმბოლოზე ნაკლებს.',
    ],
    'lte'                  => [
        'array'   => ':attribute უნდა შეიცავდეს მაქსიმუმ :value ელემენტს.',
        'file'    => ':attribute უნდა იყოს მაქსიმუმ :value კილობაიტი.',
        'numeric' => ':attribute უნდა იყოს მაქსიმუმ :value.',
        'string'  => ':attribute უნდა შეიცავდეს მაქსიმუმ :value სიმბოლოს.',
    ],
    'max'                  => [
        'array'   => ':attribute-ს არ უნდა ჰქონდეს :max ელემენტზე მეტი.',
        'file'    => ':attribute არ უნდა აღემატებოდეს :max კილობაიტს.',
        'numeric' => ':attribute არ უნდა აღემატებოდეს :max-ს.',
        'string'  => ':attribute არ უნდა აღემატებოდეს :max სიმბოლოს.',
    ],
    'mimes'                => ':attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'mimetypes'            => ':attribute უნდა იყოს შემდეგი ფაილური ტიპის: :values.',
    'min'                  => [
        'array'   => ':attribute-ს უნდა ჰქონდეს მინიმუმ :min ელემენტი.',
        'file'    => ':attribute უნდა იყოს მინიმუმ :min კილობაიტი.',
        'numeric' => ':attribute უნდა იყოს მინიმუმ :min.',
        'string'  => ':attribute უნდა შეიცავდეს მინიმუმ :min სიმბოლოს.',
    ],
    'multiple_of'          => ':attribute უნდა იყოს :value-ს ჯერადი',
    'not_in'               => 'არჩეული :attribute არასწორია.',
    'not_regex'            => ':attribute-ის ფორმატი არასწორია.',
    'numeric'              => ':attribute უნდა იყოს რიცხვი.',
    'password'             => 'პაროლი არასწორია.',
    'present'              => ':attribute-ის ველი უნდა არსებობდეს, თუნდაც ცარიელი.',
    'regex'                => ':attribute-ის ფორმატი არასწორია.',
    'relatable'            => 'This :attribute may not be associated with this resource.',
    'required'             => ':attribute-ის ველი აუცილებელია.',
    'required_if'          => ':attribute-ის ველი აუცილებელია, თუ :other-ის მნიშვნელობა ემთხვევა :value-ს.',
    'required_unless'      => ':attribute-ის ველი აუცილებელია, თუ :values არ შეიცავს :other-ს.',
    'required_with'        => ':attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_with_all'    => ':attribute-ის ველი აუცილებელია, თუ :values მითითებულია.',
    'required_without'     => ':attribute-ის ველი აუცილებელია, თუ :values არ არის მითითებული.',
    'required_without_all' => ':attribute-ის ველი აუცილებელია, თუ არცერთი :values არ არის მითითებული.',
    'same'                 => ':attribute და :other უნდა ემთხვეოდეს ერთმანეთს.',
    'size'                 => [
        'array'   => ':attribute უნდა შეიცავდეს :size ელემენტს.',
        'file'    => ':attribute უნდა იყოს :size კილობაიტი.',
        'numeric' => ':attribute უნდა იყოს :size.',
        'string'  => ':attribute უნდა შედგებოდეს :size სიმბოლოსგან.',
    ],
    'starts_with'          => ':attribute უნდა იწყებოდეს შემდეგიდან ერთ-ერთით: :values.',
    'string'               => ':attribute უნდა იყოს ტექსტი.',
    'timezone'             => ':attribute უნდა იყოს სასაათო სარტყელი.',
    'unique'               => 'ასეთი :attribute უკვე არსებობს.',
    'uploaded'             => ':attribute-ის ატვირთვა ვერ მოხერხდა.',
    'url'                  => ':attribute-ის ფორმატი არასწორია.',
    'uuid'                 => ':attribute უნდა იყოს ვალიდური UUID.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes'           => [],
];
