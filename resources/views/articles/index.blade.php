<x-app-layout>
    <div class="container">
        <a href="{{route('articles.create')}}">
            <button class="btn btn-primary">Создать</button>
        </a>
        <table class="table">
            <thead>
            <th>Заголовок</th>
            <th>Залупа</th>
            <th>Автор</th>
            <th>Удалить</th>
            <th>Редачить</th>
            </thead>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->text}}</td>
                    <td>{{optional($article->author)->name ?? 'пользователь пошел нахуй'}}</td>
                    <td>
                        {!! Form::model($article, ['method' => 'delete', 'route' => ['articles.destroy', ['article' => $article->id]]]) !!}
                        {!! Form::submit('Удалить', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td>
                        <a href="{{route('articles.edit', ['article' => $article])}}">
                            <button class="btn btn-primary">Редактировать</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
