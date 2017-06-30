<h1><b>Тренинг ScrumMasters.com.ua</b> </h1>
<div>

    <strong> {{$name}}
        @if (!($name))
            Добрый день
        @endif
    </strong>, регистрация прошла успешно!
    <p><b>Телефон для связи : {{ $phone }}</b></p>
    <p>{{ $body }}</p>
    <p> {{ $link }}</p>
    <img src="{{ $message->embed('images/logo3b.png') }}" alt="">
    <p><i>Вы также можете связаться с организаторами по телефону:</i> <b>+(380)50-473-71-76</b></p>
</div>