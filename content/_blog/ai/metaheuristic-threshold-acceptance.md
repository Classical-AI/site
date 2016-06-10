---
view::extends: _includes.blog.ai
view::yields: post_body
post::title:  الگوریتم Threshold Acceptance
post::category: هوش مصنوعی
post::sub_category: الگوریتم های متاهیوریستیک
post::order: 15
---

قبل از شرح این روش جستجو پیشنهاد می کنیم در صورتی که با الگوریتم SA آشنایی ندارید، ابتدا مقاله مربوط به این روش جستجو را مطالعه کنید. روش TA نیز همانند روش SA می باشد و تنها تفاوت آن در نحوه قبول کردن جواب های غیر بهینه است. شبه کد زیر نحوه اجرای الگوریتم TA را نشان می دهد:

```basic
Procedure Threhsold Acceptance
  C = Choose an initial solution
  T = Choose a positive initial threshold
  REPEAT
    S' = Generate a neighbor of the solution C
    ΔE = objective( S' ) – objective( C )
    IF (ΔE > -T ) THEN // S' better than C
      C = S'
    END IF
    T = lower the T using linear/ non-linear techniques
  UNTIL meet the stop criteria
End
```

الگوریتم TA جواب هایی را می پذیرد که از جواب قبلی خیلی بدتر نیستند. همانند کاری که دما در اگوریتم SA انجام می دهد. همانطور که در روش SA بررسی کردیم، دما در این الگوریتم باید به گونه ای انتخاب شود که بیشتر جواب های غیربهینه در ابتدا توسط الگوریتم پذیرفته شوند. این اصل در مورد روش TA نیز صادق است و در این روش نیز مقدار آستانه ( T ) باید به نحوه انتخاب گردد که بیشتر جواب های غیربهینه در ابتدا توسط الگوریتم مورد پذیرش واقع شوند.
