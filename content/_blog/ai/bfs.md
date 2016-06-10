---
view::extends: _includes.blog.ai
view::yields: post_body
post::title: جستجوی سطحی
post::category: هوش مصنوعی
post::sub_category: هوش مصنوعی کلاسیک
post::order: 4
---

همانطور که در روش جستجوی عمقی محدودشده بررسی کردیم، جستجوی سطحی مشکل حلقه بینهایت و یال های تکراری مربوط به مسئله روبرو را حل خواهد کرد ( یافتن مسیری از گره 1 به گره 5 ). البته این بدان معنا نیست که مشکل حالت های تکراری در جستجوی سطحی به طور کامل رفع شده است. بلکه هیچیک از روش های جستجو در مقابل حالت های تکراری مصون نیستند. این وظیفه طراح الگوریتم است که با اتخاذ روشی از بروز حالت های تکراری جلوگیری کند. یکبار دیگر گراف روبرو را در نظر بگیرید.

می خواهیم مسیری از گره 1 به گره 5 پیدا کنیم. در صورتی که از جستجوی سطحی برای پیمایش فضای جستجو بخواهیم استفاده کنیم، بدین روش عمل می کنیم : در هر سطح از درخت جستجو ، به ازای هر گره در آن سطح همه فرزندان گره جاری تولید شده و در سطح بعدی درخت قرار می گیرند. با این تعریف حال می توانیم نحوه پیمایش درخت جستجوی مساله مذکور را نشان دهیم :

![جستجوی سطحی](@url('assets/images/ai/bfs_graph4.jpg'))

در ابتدا همه فرزندان گره 1 تولید شده و به سطح بعدی درخت اضافه می گردند. در سطح بعدی درخت نیز به ازای هر گره فرزندان آن گره تولید و به درخت جستجو اضافه می شوند. همانطور که از شکل پیداست، در سطح 3 از درخت مسیری از گره 1 به گره 5 پیدا می شود. همچنین مشکل یال های تکراری روش های قبلی نیز در این درخت وجود ندارد. یکی از بزرگترین مشکلات روش جستجوی سطحی مرتبه مکانی یا میران حافظه مصرفی این روش جستجو است. در روش های جستجو عمقی و عمقی محدود شده در هر لحظه تنها گره های مربوط به شاخه فعلی در حافظه وجود دارد. این در حالی است که روش جستجوی سطحی همه گره های بالاتر از سطح فعلی از فضای جستجو را در حافظه نگه خواهد داشت. می توان روش جستجوی عمقی و سطحی را باهم ترکیب کنیم تا با ترکیب این دو ، معایب موجود در هریک از روش ها را رفع کرده و مزایای آن ها را باهم ترکیب کنیم. این روش جستجو را که در بخش بعد به بررسی آن خواهیم پرداخت، جستجوی عمقی تکرار شونده می نامیم.