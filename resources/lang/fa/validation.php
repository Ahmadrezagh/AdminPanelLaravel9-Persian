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

    'accepted'             => 'مقدار :attribute باید قابل تایید باشد',
    'active_url'           => 'مقدار :attribute باید یک آدرس معتبر باشد',
    'after'                => 'مقدار :attribute باید پس از :date باشد',
    'after_or_equal'       => 'مقدار :attribute باید برابر یا بیشتر از :date باشد',
    'alpha'                => 'مقدار :attribute تنها باید حروف باشد',
    'alpha_dash'           => 'مقدار :attribute باید تنها حروف،اعداد و dash باشد',
    'alpha_num'            => 'مقدار :attribute باید تنها اعداد و حروف باشد',
    'array'                => 'مقدار :attribute باید آرایه باشد',
    'before'               => 'مقدار :attribute باید قبل از :date باشد',
    'before_or_equal'      => 'مقدار :attribute باید کمتر یا برابر :date باشد',
    'between'              => [
        'numeric' => 'مقدار :attribute باید بین :min و :max باشد',
        'file'    => 'مقدار :attribute باید بین :min kb و :max kb باشد',
        'string'  => 'مقدار :attribute باید از حرف :min بیشتر و  از حرف :max کمتر باشد',
        'array'   => 'مقدار :attribute باید بین :min و :max باشد',
    ],
    'boolean'              => 'مقدار :attribute تنها دوحالت  می تواند داشته باشد',
    'confirmed'            => ':attribute با تکرار آن هم خوانی ندارد',
    'date'                 => ':attribute تاریخ معتبر نیست',
    'date_format'          => ':attribute الگوی :format ندارد',
    'different'            => 'مقدار :attribute و :other متفاوت باید باشد',
    'digits'               => ':attribute باید  :digits رقمی باشد',
    'digits_between'       => 'ارقام :attribute باید بین :min و :max باشد',
    'dimensions'           => ':attribute اندازه غیرمعتبر دارد',
    'distinct'             => ':attribute تکراری می باشد',
    'email'                => ':attribute نامعتبر است',
    'exists'               => ':attribute انتخاب شده نامعتبر است',
    'file'                 => ':attribute فایل باید باشد',
    'filled'               => ':attribute باید مقدار داشته باشد',
    'image'                => ':attribute باید تصویر باشد',
    'in'                   => ':attribute انتخاب شده نامعتبر است',
    'in_array'             => 'مقدار :attribute در :other موجود نیست',
    'integer'              => ':attribute باید عدد باشد',
    'ip'                   => ':attribute باید آدرس ip معتبر باشد',
    'ipv4'                 => ':attribute باید آدرس IPv4 معتبر باشد',
    'ipv6'                 => ':attribute باید آدرس IPv6 معتبر باشد',
    'json'                 => ':attribute باید متن JSON معتبر باشد',
    'max'                  => [
        'numeric' => ':attribute نباید بیشتر از :max باشد',
        'file'    => ':attribute نباید بیشتر از :max kb باشد',
        'string'  => ':attribute نباید بیشتر از :max حرف باشد',
        'array'   => 'در :attribute نباید بیشتر از :max مقدار باشد',
    ],
    'mimes'                => ':attribute باید نوع :type داشته باشد',
    'mimetypes'            => ':attribute باید نوع :type داشته باشد',
    'min'                  => [
        'numeric' => 'مقدار :attribute باید حداقل :min باشد',
        'file'    => ':attribute باید حداقل :min kb باشد',
        'string'  => ':attribute باید حداقل :min حرف باشد',
        'array'   => ':attribute باید حداقل :min مقدار داشته باشد',
    ],
    'not_in'               => 'مقدار انتخاب شده برای :attribute نامعتبر است',
    'not_regex'            => 'الگوی :attribute نامعتبر است',
    'numeric'              => ':attribute باید عدد باشد',
    'present'              => ':attribute باید مقدار داشته باشد',
    'regex'                => 'الگوی :attribute نامعتبر است',
    'required'             => 'وارد کردن :attribute الزامی است',
    'required_if'          => ':attribute وقتی که :other مقدار :value دارد ضروری است',
    'required_unless'      => ':attribute وقتی که :other :value نیست مورد نیاز است',
    'required_with'        => ':attribute وقتی که :other مقدار دارد مورد نیاز است',
    'required_with_all'    => ':attribute وقتی که :other مقدار دارد مورد نیاز است',
    'required_without'     => ':attribute وقتی که :other مقدار ندارد مورد نیاز است',
    'required_without_all' => ':attribute وقتی که هیچ کدام از :other مقدار ندارند مورد نیاز است',
    'same'                 => ':attribute و :other باید همخوانی داشته باشد',
    'size'                 => [
        'numeric' => 'اندازه :attribute باید :size باشد',
        'file'    => 'اندازه :attribute باید :size kb باشد',
        'string'  => 'اندازه :attribute باید :size حرف باشد',
        'array'   => 'اندازه :attribute باید :size مقدار باشد',
    ],
    'string'               => ':attribute باید متنی باشد',
    'timezone'             => ':attribute باید موقعیت زمانی معتبر باشد',
    'unique'               => ':attribute تکراری است . لطفا مقدار دیگری انتخاب کنید',
    'uploaded'             => ':attribute در آپلود موفق نشد',
    'url'                  => ':attribute نامعتبر است',
    'lt'                  => [
        'numeric' => ':attribute باید کمتر از مقدار :value باشد',
        'file'    => ':attribute باید کمتر از مقدار :value kb باشد',
        'string'  => ':attribute باید کمتر از مقدار :value حرف باشد',
        'array'   => ':attribute باید کمتر از مقدار :value مقدار داشته باشد',
    ],
    'lte'                  => [
        'numeric' => ':attribute باید کمتر مساوی از مقدار :value باشد',
        'file'    => ':attribute باید کمتر مساوی از مقدار :value kb باشد',
        'string'  => ':attribute باید کمتر مساوی از مقدار :value حرف باشد',
        'array'   => ':attribute باید کمتر مساوی از مقدار :value مقدار داشته باشد',
    ],


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
        'price' => [
            'min' => 'قیمت محصول باید بزرگتر از 0 باشد',
        ],
        'mobile' => [
            'regex' => 'شماره موبایل با اعداد 09 شروع می شود'
        ],
        'step' => [
            'min' => 'گام باید عددی یا به صورت اعشاری باشد و بیشتر از مقدار صفر باشد'
        ]
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


    'attributes' => [
        // genral
        'id' => 'ای دی',
        'pk' => 'ای دی',
        'content' => 'محتوا',
        'name' => 'نام',
        'image' => 'عکس',
        'title' => 'عنوان',
        // admin
        'permission' => 'دسترسی',
        'firstname' => 'نام',
        'lastname' => 'نام خانوادگی',
        'username' => 'نام کاربری',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تکرار رمز عبور',
        'role_id' => 'نقش',
        // faq 
        'faq_category_id' => 'دسته بندی سوالات متداول',
        'question' => 'سوال',
        'answer' => 'جواب',

        // general setting
        'nameFa' => 'نام فارسی فروشگاه',
        'nameEn' => 'نام انگلیسی فروشگاه',
        'clubDescription' => 'توضیحات باشگاه مشتریان',
        'clubHaveDescription' => 'پیام باشگاه مشتریان(درصورت داشتن باشگاه)',
        'clubMessage' => 'پیام باشگاه مشتریان',
        'supportEmail' => 'ایمیل پشتیبانی',
        'logo' => 'لوگو',
        'orderMessage' => 'متن پیام خارج از محدوده سفارش',
        'addressMessage' => 'متن پیام ثبت آدرس خارج از محدوده',
        'minOrderAmount' => 'حداقل مقدار سفارش',
        'minOrderMessage' => 'متن پیام',
        'minOrderAllow' => 'اجازه حداقل مقدار سفارش',
        'openTime' => 'ساعت شروع کار',
        'closeTime' => 'ساعت پایان کار',
        'timeMessage' => 'متن پیام خارج از ساعت سفارش',
        'giftAllow' => 'هدیه معرف فعال باشد',
        'giftHasDiscount' => 'نحوه شارژ کردن کیف پول',
        'giftDiscount' => 'درصد ',
        'giftAmount' => 'مقدار',
        'courier_id' => 'پیک',
        // setting app
        'updateMsg' => 'پیغام به روز رسانی',
        'androidVersion' => 'ورژن اندروید',
        'androidLink' => 'لینک به روز رسانی اندروید',
        'androidMethod' => 'نحوه به روز رسانی اندروید',
        'androidDirectLink' => 'لینک مستقیم دانلود اپ اندروید',
        'iosVersion' => 'ورژن ios',
        'iosLink' => 'لینک به روز رسانی ios',
        'iosMethod' => 'نحوه به روز رسانی ios',
        'iosDirectLink' => 'لینک مستقیم دانلود اپ ios',
        // club
        'creditDays' => 'تعداد روز های اعتبار',
        'clubDiscount' => 'درصد تخفیف برای مشتریان',
        // define
        // ------ discount
        'userAll' => 'محدوده کاربران',
        'user_id' => 'لیست کاربران',
        'isLimited' => 'نحوه استفاده',
        'usage' => 'تعداد استفاده',
        'expireDate' => 'تاریخ انقضا',
        'productAll' => 'محدوده محصولات',
        'product_id' => 'شناسه محصول',
        'affectType' => 'نحوه تاثیر کد تخفیف',
        'code' => 'کد تخفیف',
        'discount' => 'درصد تخفیف',
        // product
        'category_id' => 'دسته بندی محصولات',
        'description' => 'توضیحات',
        'price' => 'قیمت',
        'basePrice' => 'قیمت ورودی',
        'hasDiscount' => 'تخفیف',
        'discountAmount' => 'مقدار تخفیف',
        'discountPercent' => 'درصد تخفیف',
        'status' => 'وضعیت',
        'category' => 'دسته بندی',
        'step' => 'گام',
        'method_id' => 'نحوه عرضه ی محصول',
        'priority' => 'الویت',
        'qtyMaxOrder' => 'حداکثر میزان سفارش',
        // user auth
        'email' => 'ایمیل' ,
        'mobile' => 'شماره موبایل',
        'verifyCode' => 'کد احراز هویت',
        'versionNumber' => 'نسخه اپلیکشن ',
        'fullname' => 'نام و نام خانوادگی',
        // address
        'address' => 'آدرس',
        'lat' => 'مشخصات جغرافیای',
        'lng' => 'مشخصات جغرافیای',
        'receiver_name' => 'نام گیرنده',
        'receiver_mobile' => 'موبایل گیرنده',
        'avatar' => 'آواتار',
        'subject' => 'موضوع',
        'message' => 'پیام',
        'minCartAmount' => 'حداقل میزان سفارش',
        'maxCartAmount' => 'حداکثر میزان سفارش',
        'branch_id' => 'شعبه',
        'value' => 'مقدار',
        'minPrice' => 'کمترین قیمت',
        'maxPrice' => 'بیشترین قیمت',
        'sliderChangeSecond' => 'فاصله زمانی بین عوض شدن اسلایدر ها',
        'shippingHourLimit' => 'فیلتر شدن بازه های زمانی نحوه ارسال',
        'comment' => 'نظرات',
        'rate' => 'امتیاز',
        'job_name' => 'نام شغل',
        'phone' => 'شماره تماس',
        'postal_code' => 'کد پستی',
        'city_id' => 'شهر',
        'province_id' => 'استان'
    ],

];
