<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">گشودن/بستن منو</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="@url('/')">{{ $siteName }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="@url('/')">خانه</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">مقالات آموزشی <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="@url('ai/introduction')">هوش مصنوعی</a></li>
                        <li><a href="#">هوش محاسباتی</a></li>
                        <li><a href="#">پردازش سیگنال</a></li>
                        <li><a href="#">پردازش تصویر</a></li>
                    </ul>
                </li>
                <li><a href="@url('about')">درباره</a></li>
                <li><a href="@url('contact')">تماس</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

