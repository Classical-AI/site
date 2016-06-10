---
view::extends: _includes.blog.image_processing
view::yields: post_body
post::title: عملگرهای مجموعه‌ای
post::category: پردازش تصویر
post::sub_category: مقدمه
post::order: 13
---

یکی از مهمترین مراحل در پیش پردازش تصویر ، پردازش شکل شناسی می باشد. در این قسمت تنها به بررسی شکل شناسی برای تصاویر دودویی خواهیم پرداخت. منظور از تصاویر دودویی ، تصاویر با دو سطح روشنایی 0 یا 1 می باشد که در آن منظور از 0 رنگ سیاه و منظور از 1 رنگ سفید می باشد.

شکل شناسی عموما از عملگرهای مجموعه ای استفاده می کند و از آن بیشتر برای استخراج نقاط کلیدی تصویر ، حذف نقاط غیر مفید تصویر و موارد مشابه دیگر استفاده می کنیم. در این قسمت ابتدا عملگرهای مجموعه ای پایه را برای پردازش شکل شناسی بررسی می کنیم. سپس به بررسی مهمترین عملگرهای مجموعه ای خواهیم پرداخت که ویژه پردازش شکل شناسی می باشند.

#### عملگرهای مجموعه ای پایه

این عملگر ها شامل عملگر اجتماع ، اشتراک ، تفاضل دو مجموعه می باشد. اگر هر تصویر باینری را یک مجموعه در نظر بگیریم ، اجتماع دو تصویر باینری هم اندازه ، همانطور که در شکل زیر شاهده می کنید تصویری خواهد بود که در این تصویر هر یکسلی که در تصویر اول یا تصویر دوم مقدار 1 داشته باشد ، مقدار 1 خواهد داشت. برای پیاده سازی عملگر اجتماع برای دو تصویر باینری ، می توانیم پیکسل های متناظر را در دو تصویر باهم OR بیتی کنیم.

![](@url('assets/images/image-processing/set-or.jpg'))

اشتراک دو تصویر باینری هم اندازه ، نیز تصویری خواهد بود که در این تصویر هر پیکسلی که در تصویر اول و دوم مقدار 1 داشته باشد ، مقدار 1 خواهد داشت. برای پیاده سازی عملگر اشتراک برای دو تصویر باینری ، می توانیم پیکسل های متناظر را در دو تصویر باهم ANDبیتی کنیم.

![](@url('assets/images/image-processing/set-and.jpg'))

تفاضل دو تصویر باینری هم اندازه ، تصویری خواهد بود که در این تصویر پیکسل هایی از تصویر اول با مقدار 1 که در تصویر دوم مقدارشان 1 نباشد ، مقدار 1 خواهند داشت. تفاضل را به شکل اشتراک تصویر دوم و مکمل تصویر اول نیز می توان تعریف کرد.

![](@url('assets/images/image-processing/set-sub.jpg'))

همچنین عملگر تک عملوندی مکمل نیز عملگری است که پس از اعمال آن بر روی تصویر باینری ، در تصویر حاصل شده ، مقادیر 1 به 0 و مقادیر 0 به 1 تغییر می یابند. برای پیاده سازی عملگر مکمل می توانیم هر پیکسل از تصویر بانری را NOT بیتی کنیم .

![](@url('assets/images/image-processing/set-not.jpg'))