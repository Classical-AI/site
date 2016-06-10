---
view::extends: _includes.blog.image_processing
view::yields: post_body
post::title: جمع دو تصویر
post::category: پردازش تصویر
post::sub_category: مقدمه
post::order: 4
---

جمع دو تصویر بدین مفهموم است که در دوتصویر ، شدت روشنایی پیکسل های متناظر دو تصویر را از باهم جمع کنیم . تصاویر زیر نتیجه اعمال عملگر جمع را نشان می دهند:

![](@url('assets/images/image-processing/add.jpg'))

 شبه کد زیر نحوه پیاده سازی عملگر جمع را نشان می دهد :

```basic

Procedure Add (image1, image2 : Byte[][])
Begin
  result :Byte[][]
  sub:integer
  For i = 1 To Height Do
    For j = 1 To Width Do
      sub = image1[i, j] + image2[i, j]
      result[i, j] = sub > 255 ? 255 : sub
    End For
  End For
  Return result
End
```

یکی از رایج ترین کاربردهای جمع دو تصویر افزودن پشت زمینه به تصویر است. برای این منظور نیاز به دو تصویر پشت زمینه و تصویر شی داریم که تصویر شی باید در مقابل پرده ای با رنگ ثابت گرفته شود. از جمع کردن دو تصویر مذکور تصویری با پشت زمینه دلخواه به دست می آید.

#### پردازش تصویر در MATLAB

برای جمع دو تصویر هم اندازه از تابع `imadd` در MATLAB می توان استفاده کرد. به عنوان مثال مجموعه دستورات زیر دو تصویر را خوانده و حاصل جمع آن ها را نشان می دهد.

```matlab
>> im = imread('rice.png');
>> imshow(im);
>> imBack = imread('background.png');
>> imshow(imBack);
>> res = imadd(im,imBack);
```