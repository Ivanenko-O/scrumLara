{{-- Page Title --}}
<section id="page-title">
    <div class="container clearfix">
        <h1>Страница не найдена</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url()->previous(); }}">Главная</a></li>
            <li class="active">404</li>
        </ol>
    </div>
</section>
{{-- #page-title end --}}

{{-- Content --}}
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="col_half nobottommargin">
                <div class="error404 center">404</div>
            </div>

            <div class="col_half nobottommargin col_last">
                <div class="heading-block nobottomborder">
                    <h4>Ой! Запрашиваемая Вами страница не может быть найдена.</h4>
                    <span>Пожалуйста, откройте меню вверху и выберите интересующую Вас страницу.</span>
                    <img src="{{ URL::asset('images/404.gif') }}"/>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- #content end --}}

