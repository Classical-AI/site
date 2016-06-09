---
view::extends: _includes.blog.ai
view::yields: post_body
post::title: مقدمه هوش مصنوعی
post::category: هوش مصنوعی
post::sub_category: هوش مصنوعی کلاسیک
post::order: 0
---

![مقدمه هوش مصنوعی](@url('assets/images/ai/ai_introduction.jpg'))

هریک از موجودات زنده اطراف ما رفتارها و حرکاتی را از خود نشان می دهند که حاکی از هوشمندی این موجودات هستند. اینکه فکر کنیم انسان ها هوشمندترین موجودات زنده روی کره زمین هستند، امری اشتباه است. برای روشن شدن این موضوع کافی است قدری در حرکات انواع عنکبوت ها بنگریم! هدف این بخش مقایسه هوشمندی موجودات زنده نیست، بلکه در اینجا قصد داریم تکنیک هایی را که می تواند برای هوشمند کردن عامل های مصنوعی استفاده شود، مورد بررسی قرار دهیم. با توجه به اینکه بیشتر تحقیقات نویسندگان وب سایت در شاخه هوش محاسباتی می باشد، بنابراین در این بخش تنها به ذکر روش های عمومی جستجو و برخی از مطالب دیگر هوش مصنوعی خواهیم پرداخت. 


ما به عنوان یک عامل هوشمند، در مسائل روزمره ای که برایمان پیش می آید با اسفاده از تکنیک های جستجو اقدام به یافتن راه حلی برای مسئله می کنیم. به عنوان مثال خانه ای را فرض کنید که در آن  به دنبال شی خاصی هستیم. همچنین فرض کنید هیچ اطلاعی در مورد خانه و محل قرارگیری اشیا در خانه نداریم. در چنین مواردی برای یافتن شی موردنظر ، خانه را اتاق به اتاق و در هر اتاق همه بخش	



های آن اتاق را جستجو می کنیم. نتیجه جستجو تنها در صورتی می تواند به دست آید که جواب مسئله در فضایی که آن را جستجو می کنیم، موجود باشد.



به عنوان یک مثال دیگر فرض کنید می خواهیم از تبریز به سمت شیراز حرکت کنیم. هدف ما نیز رسیدن به شهر شیراز در کمترین زمان ممکن می باشد. اینجا نیز ما به عنوان یک عامل هوشمند، با در دست داشتن نقشه راه های کشور براحتی مسیر حرکت خود را مشخص می کنیم. به طور حتم هنگام جستحو بر روی نقشه برای یافتن کوتاهرین مسیر حرکت از تبریز به شیراز، از جستجوی مسیر حرکت تبریز-ارومیه-شیراز صرف نظر می کنیم. البته ممکن است بسته به هدف ما این مسیر نیز انتخاب گردد. در واقع آنچه که مسیر حرکت ما را از تبریز به سمت شیراز مشخص می کند هدف ما از این حرکت می باشد. اگر هدف رسیدن به شیراز در کمترین زمان باشد، از انتخاب مسیر تبریز – ارومیه – شیراز صرف نظر می کنیم. اما اگر هدف بازدید از اماکن باستانی باشد، ممکن است مسیر تبریز- ارومیه – همدان – اصفهان شیراز را انتخاب کنیم!



مهمترین تفاوت دو مثال ذکر شده را ناآگاهانه بودن جستجو در مثال اول و آگاهانه بودن جستجو در مثال دوم می باشد. بدین معنی که در مثال اول ما از ابتدا کل فضای جستجو را برای یافتن جواب مسئله جستجو می کنیم و در واقع برای حرکت سریع تر در فضای جستجو ( حرک بین اتاق ها و بخش های مختلف هر اتاق ) از آگاهی خاصی بهره مند نیستیم. در نقطه مقابل و در مثال دوم برای حرکت در فضای جستجو به منظور یافتن کوتاهترین مسیر از تبریزبه شیراز، از روش خاصی برای انتخاب شهر بعدی استفاده می کنیم. به عبارت دیگر در مثال دوم علاوه بر اینکه مسیری از مبدا به مقصد پیدا می کنیم، همچنین کوتاهی مسیر نیز برایمان از اهمیت ویژه ای برخوردار می باشد. در واقع عملی که برای سنجش کوتاهی مسیر انجام می دهیم موجب آگاهانه بودن جستجوی ما در فضای جستجو می شود. در مثال دوم از تابعی استفاده می کنیم که فاصله شهر انتخابی تا مقصد را برایمان تخمین می زند که به آن تابع هیوریستیک یا تابع مکاشفه خواهیم گفت.



حال ممکن است این تصویر به وجود آید که جستجوی آگاهانه بهتر از جستجوی ناآگاهانه می باشد. اما چنین تصوری را نمی توان قطعا درست تلقی کرد. چراکه در صورت ناآگاهانه بودن ماهیت مسئله چاره ای جز جستجوی ناآگاهانه نخواهیم داشت. همچنین سریعتر بودن جستجوی آگاهانه نسبت به جستجوی ناآگاهانه نیز بستگی به شرایط مسئله خواهد داشت و موارد بسیاز زیادی می توان یافت که در آن جستجوی ناآگاهانه سریعتر از جستجوی آگاهانه ما را به جواب مسئله می رساند. نکته مهم اینست که در هوش مصنوعی هیچ چیز را نمی توان قطعی تصور کرد.