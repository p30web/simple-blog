<?php

return array(

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
    "sms_cost_expired" => 'کد تایید منقضی شده است ارسال مجدد کد را بزنید و مجددا از مشتری کد تایید دریافت کنید.',
    "specify_cost_and_profit" => 'لطفا سود خالص و هزینه کل را مشخص کنید.',
    'costs_should_be_announced' => "این سفارش اعلام هزینه نشده است، لطفا هزینه ها را اعلام کنید.",
    'specify_if_there_is_any_costs' => 'لطفا مشخص کنید که هزینه گرفته اید یا نه.',
    "invalid_verification_code" => 'کد تاییدیه مشتری اشتباه است.',
    "one_sms_allowed_in_minute" => 'شما در هر دقیقه یک بار میتوانید درخواست ارسال کنید.',
    "order_not_found_or_costs_has_been_verified" => 'سفارش یافت نشد، یا قبلا هزینه پرداخت شده.',
    "order_must_be_accepted_or_complained" => 'برا تایید هزینهه، سفارش باید یا در حال انجام یا برگشتی باشد.',
    "order_not_found" => 'سفارش مورد نظر یافت نشد.',
    "permission_denied_on_order" => 'شما اجازه دسترسی به این سفارش را ندارید.',
    "user_not_found" => 'کاربر یافت نشد.',
    "input_invalid" => 'ورودی نامعتبر است',
    "select_pro_user" => 'لطفا تکنیسین را انتخاب کنید.',
    "customer_must_accept_costs" => 'شما اجازه انجام این عملیات را روی سفارش ندارید، ابتدا مشتری باید هزینه های وارد شده را تایید کند.',
    "costs_are_not_valid" => 'مجموع ریز هزینه ها با خرج کرد وارد شده برابر نیست.',
    "suspended_orders_ceil_exceed" => "شما اجازه معلق کردن بیشتر از :Count سفارش را ندارید.",
    "invalid_reason" =>'دلیل انتخاب شده معتبر نیست.',
    "desc_is_too_short" => 'توضیحات تکمیلی نبادید کمتر از سه حرف باشد.',
    "desc_or_reason_is_mandatory" => 'برای انجام این عملیات، انتخاب یک دلیل یا توضیحات تکمیلی اجباری است.',
    "ge_than_field" => ":attribute باید کوچکتر یا مساوی :field باشد.",
    "accepted" => ":attribute باید پذیرفته شده باشد.",
    "active_url" => "آدرس :attribute معتبر نیست",
    "after" => ":attribute باید تاریخی بعد از :date باشد.",
    "alpha" => ":attribute باید شامل حروف الفبا باشد.",
    "alpha_dash" => ":attribute باید شامل حروف الفبا و عدد و خظ تیره(-) باشد.",
    "alpha_num" => ":attribute باید شامل حروف الفبا و عدد باشد.",
    "array" => ":attribute باید شامل آرایه باشد.",
    "before" => ":attribute باید تاریخی قبل از :date باشد.",
    "between" => array(
        "numeric" => ":attribute باید بین :min و :max باشد.",
        "file" => ":attribute باید بین :min و :max کیلوبایت باشد.",
        "string" => ":attribute باید بین :min و :max کاراکتر باشد.",
        "array" => ":attribute باید بین :min و :max آیتم باشد.",
    ),
    "boolean" => "The :attribute field must be true or false",
    "confirmed" => ":attribute با تاییدیه مطابقت ندارد.",
    "date" => ":attribute یک تاریخ معتبر نیست.",
    "date_format" => ":attribute با الگوی :format مطاقبت ندارد.",
    "different" => ":attribute و :other باید متفاوت باشند.",
    "digits" => ":attribute باید :digits رقم باشد.",
    "digits_between" => ":attribute باید بین :min و :max رقم باشد.",
    "email" => "فرمت :attribute معتبر نیست.",
    "exists" => ":attribute انتخاب شده، معتبر نیست.",
    "image" => ":attribute باید تصویر باشد.",
    "in" => ":attribute انتخاب شده، معتبر نیست.",
    "integer" => ":attribute باید نوع داده ای عددی (integer) باشد.",
    "ip" => ":attribute باید IP آدرس معتبر باشد.",
    "max" => array(
        "numeric" => ":attribute نباید بزرگتر از :max باشد.",
        "file" => ":attribute نباید بزرگتر از :max کیلوبایت باشد.",
        "string" => ":attribute نباید بیشتر از :max کاراکتر باشد.",
        "array" => ":attribute نباید بیشتر از :max آیتم باشد.",
    ),
    "mimes" => ":attribute باید یکی از فرمت های :values باشد.",
    "min" => array(
        "numeric" => ":attribute نباید کوچکتر از :min باشد.",
        "file" => ":attribute نباید کوچکتر از :min کیلوبایت باشد.",
        "string" => ":attribute نباید کمتر از :min کاراکتر باشد.",
        "array" => ":attribute نباید کمتر از :min آیتم باشد.",
    ),
    "not_in" => ":attribute انتخاب شده، معتبر نیست.",
    "numeric" => ":attribute باید شامل عدد باشد.",
    "regex" => "ترکیب :attribute معتبر نیست",
    "required" => "فیلد :attribute الزامی است",
    "required_if" => "فیلد :attribute هنگامی که :other برابر با :value است، الزامیست.",
    "required_with" => ":attribute الزامی است زمانی که :values موجود است.",
    "required_with_all" => ":attribute الزامی است زمانی که :values موجود است.",
    "required_without" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "required_without_all" => ":attribute الزامی است زمانی که :values موجود نیست.",
    "same" => ":attribute و :other باید مانند هم باشند.",
    "size" => array(
        "numeric" => ":attribute باید برابر با :size باشد.",
        "file" => ":attribute باید برابر با :size کیلوبایت باشد.",
        "string" => ":attribute باید برابر با :size کاراکتر باشد.",
        "array" => ":attribute باسد شامل :size آیتم باشد.",
    ),
    "timezone" => "The :attribute must be a valid zone.",
    "unique" => ":attribute قبلا انتخاب شده است.",
    "url" => "فرمت آدرس :attribute اشتباه است.",
    "captcha" => ":attribute صحیح نیست.",

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

    'custom' => array(),

    /*
            |--------------------------------------------------------------------------
            | Custom Validation Attributes
            |--------------------------------------------------------------------------
            |
            | The following language lines are used to swap attribute place-holders
            | with something more reader friendly such as E-Mail Address instead
            | of "email". This simply helps us make messages a little cleaner.
            |
    */
    'attributes' => array(
        "least_answers_count" => "حداقل تعداد جواب",
        'userName' => 'نام کاربری',
        'national_number' => 'کد ملی',
        'trackOrderNumber' => 'شماری سفارش',
        'packing' => 'نوع بسته بندی',
        'catString' => 'نام دسته بندی',
        'message' => 'پیغام شما',
        'addedProduct' => 'محصول',
        'linkTo' => 'ادرس پیوند',
        'ceremony' => 'مراسم',
        'newsStory' => 'متن خبر',
        'image' => 'عکس',
        "name" => "نام",
        "family" => "فامیلی",
        "username" => "نام کاربری",
        "email" => "پست الکترونیکی",
        "first_name" => "نام",
        "last_name" => "نام خانوادگی",
        "firstName" => "نام",
        "lastName" => "نام خانوادگی",
        "password" => "رمز عبور",
        "user_password" => "رمز عبور",
        "password_confirmation" => "تاییدیه ی رمز عبور",
        "city" => "شهر",
        "country" => "کشور",
        "address" => "آدرس",
        "address_id" => "آدرس",
        "zip" => "کد پستی",
        "zipCode" => "کد پستی",
        "postal_code" => "کد پستی",
        "phone" => "تلفن",
        "mobile" => "شماره موبایل",
        "mobile2" => "شماره موبایل دوم",
        "tell" => "شماره تلفن ثابت",
        "age" => "سن",
        "sex" => "جنسیت",
        "gender" => "جنسیت",
        "day" => "روز",
        "month" => "ماه",
        "year" => "سال",
        "hour" => "ساعت",
        "minute" => "دقیقه",
        "second" => "ثانیه",
        "title" => "عنوان",
        "title_persian" => "عنوان فارسی",
        "title_latin" => "عنوان لاتین",
        "text" => "متن",
        "content" => "توضیحات",
        "description" => "توضیحات",
        "desc" => "توضیحات",
        "excerpt" => "گلچین کردن",
        "date" => "تاریخ",
        "time" => "زمان",
        "available" => "موجود",
        "size" => "اندازه",
        "category" => "دسته بندی",
        "code" => "کد تاییدیه",
        "unit" => "واحد",
        "summary" => "خلاصه خبر",
        "photo" => "عکس خبر",
        "avatar" => "آواتار",
        "company" => "شرکت",
        "type" => "نوع",
        "tag_type" => "نوع تگ",
        "about" => "درباره کسب و کار",
        "job" => "سمت شغلی",
        "level" => "سطح حادثه",
        "file" => "فایل",
        "reportid" => "شماره گزارش",
        "cat_name" => "عنوان دسته بندی",
        "CaptchaCode" => "کد امنیتی",
        "captcha" => "کد امنیتی",
        "logCap" => "کد امنیتی",
        "regCap" => "کد امنیتی",
        "conCap" => "کد امنیتی",
        "fee" => "قیمت",
        "full_address_map" => "نشانی",
        "document" => "فایل",
        "activation_code" => "کد فعالسازی",
        "details" 			=> 'جزئیات',
        "most_answers_count" => "حداکثر تعداد جواب",
        'order_id'          => 'سفارش',
        'order_date' 		=> 'تاریخ سفارش',
        'order_time' 		=> 'ساعت سفارش',
        'national_card' 	=> 'عکس کارت ملی',
        'question_type_enum' 	=> 'نوع سوال',
        'media' 	=> 'فایل',
        'point' 	=> 'امتیاز',
        "net_profit" 	=> "سود خالص",
        'total_cost' 	=> 'جمع کل',
        'debt_ceil' 	=> 'سقف بدهی',
        'orders_count_ceil' => 'سقف تعداد کل سفارشات',
        'suspended_ceil' => 'سقف تعداد سفارشات معلق',
        'install_percent' => 'درصد نصب',
        'repair_percent' => 'درصد تعمیر',
        'else_percent' => 'درصد دیگر سرویسها',
        'geo_location_id' => 'شهر/منطقه/محله',
        'lat' => 'طول جغرافیایی',
        'lng' => 'عرض جغرافیایی',
        'reason' => 'دلیل',
        'amount' => 'مقدار',
        'service_id' => 'سرویس',
        'port' => 'درگاه پرداخت',
        'pro_user' => 'سرویسکار',
        'subject' => 'موضوع',
        'from' => 'از',
        'to' => 'تا',
        'roles' => 'نقشها',
        'services' => 'سرویسها',
        'saved_balance' => 'حساب ذخیره',
        'saved_balance_percent' => 'درصد حساب ذخیره',
        '#' => 'شماره پرونده',
        'received' => 'متن پیام دریافت شده',
        'response' => 'متن پیام ارسالی به مشتری',
        'created_at' => 'تاریخ',
        'subscription_label' => 'برچسپ اشتراک',
        'slider_enum' => 'اسلایدر',
        'app_type_enum' => 'نوع اپلیکیشن',
        'facture_number' => 'شماره فاکتور',
        'crm' => 'توضیحات CRM',
        'comment' => 'نظر',
        'extra' => 'اطلاعات اضافی',
        'rate' => 'امتیاز',
        'apps' => 'لیست اپلیکیشنها',
        'duration' => 'مدت زمان تماس',
        'called_at' => "تاریخ تماس",
        'role' => 'نقش',
        'discovery_description' => 'توضیحات کاشف',
        'operation_description' => 'توضیحات عملیاتی',
        'violation_id' => 'شناسه تخلف',
        'user_id' => 'شناسه کاربر',
        'product_count' => 'تعداد مورد نیاز',
    ),
);
