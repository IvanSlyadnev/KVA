<x-app-layout>
    <div class="container">
        {!! Form::open(['route' => 'articles.store', 'method' => 'post']) !!}
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
