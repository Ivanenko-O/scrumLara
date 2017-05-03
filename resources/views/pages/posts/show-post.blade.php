@extends('index')

@section('content')

    {{--Page Title --}}
    <section id="page-title">
        <div class="container clearfix">
            <h1> {{ $post->title }} </h1>
            <ol class="breadcrumb">
                <li><a href="">Главная</a></li>
                <li><a href="blog">Блог</a></li>
                <li class="active">Статья</li>
            </ol>
        </div>
    </section>
    {{-- #page-title end --}}
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content -->
                <div class="postcontent nobottommargin clearfix">

                    <div class="single-post nobottommargin">

                        <!-- Single Post -->
                        <div class="entry clearfix">

                            <?php echo $post->body; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
