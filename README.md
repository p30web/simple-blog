توضیحات پروژه :‌

با استفاده از فریم ورک  Laravel  بلاگی طراحی کنید که دارای قابلیت های زیر باشد.

1) با استفاده از Factory   در شروع  برنامه 10 کاربر اضافه کنید.(اطلاعات کاربر مهم نیست.)
2) قابلیت های CRUD   برای پست ها وجود داشته باشد.
3) پست ها دارای فیلد های Title , Content, Thumbnail
4) با استفاده از Factory تعدادی پست ایجاد شود.
5)Thumbnail  باید در سایز 100x100 Resize  شود و عکس با سایز اصلی هم نگه داشته شود.
6) کاربر هایی که شناسه زوج دارند بتوانند همه درخواست های پست را انجام دهند.
   (ساخت،لیست،دیدن،حذف و آپدیت پست ها)
7) کاربر هایی که شناسه فرد دارند فقط قابلیت لیست و دیدن پست ها را دارند.
- دو مورد آخر با استفاده از  Policy  و بدون استفاده ازهیچ پکیجی انجام شود.

نکات
1) ظاهر اهمیت ندارد.
2) بجز برای پردازش و ذخیره سازی عکس از پکیج دیگری استفاده نشود.
3) رعایت Best Practices  و تمیز نویسی کد الویت دارد.
   4)تمام Relation  ها رعایت شود.
   5)از پکیج Laravel Media Library  برای ذخیره سازی وResize  عکس استفاده شود.
4) نیازی به وجود پوشه های Dependency  نیست.
5) برای احراز هویت از روش دلخواه استفاده کنید.
   8)صفحات با استفاده از  Blade پیاده شوند.

-------------------------

راه اندازی پروژه بعد از clone گرفتن به ترتیب دستورات زیر را اجرا کنید : 

1) composer install 

2) php artisan key:generate

3) فایل .env.example را به .env تغییر نام دهید.

4) در فایل .env در متغیر APP_URL : آدرس وب سایت خود را وارد نمایید . 

5) دستور : php artisan migrate --seed را وارد نمایید . 

6) دستور : php artisan storage:link را وارد نمایید . 






