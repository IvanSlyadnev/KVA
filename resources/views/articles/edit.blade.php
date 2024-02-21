<x-app-layout>

    <div class="container">
        <h1 style="color: chartreuse">Редактирование!!!!</h1>
        {!! Form::model($article, ['route' => ['articles.update', 'article' => $article], 'method' => 'put']) !!}
        {!! Form::label('Введите заголовок') !!}
        <br>
        {!! Form::text('title') !!}
        {!! Form::label('Введите заголовок') !!}
        <br>
        {!! Form::label('Введите текст') !!}
        {!! Form::text('text') !!}
        <br>
        {!! Form::submit('Создать', ['class' => 'btn btn-primary']) !!}
        <br>
        {!! Form::close() !!}
    </div>
</x-app-layout>
