<div style="margin: 0 50px 0 50px">
    @if ($pages)
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <td>№ п.п.</td>
            <td>Имя</td>
            <td>Псевдоним</td>
            <td>Текст</td>
            <td>Дата создания</td>
            <td>Удалить</td>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $k => $page)
        <tr>
            <td>{{ $page->id}}</td>
{{--            <td>{!! Html::link(route('pageedit', ['page'=>$page->id]), $page->name, ['alt'=>$page->name]) !!}</td>--}}
            <td>{!! link_to(route('pageedit', ['page'=>$page->id]), $page->name, ['alt'=>$page->name]) !!}</td>
            <td>{{ $page->alias}}</td>
            <td>{{ $page->text}}</td>
            <td>{{ $page->created_at}}</td>
            <td>
                {!! Form::open(['url'=>route('pageedit', ['page'=>$page->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
                {!! Form::hidden('action', 'delete') !!}
                {!! Form::button('Удалиь', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif

        {!! Html::link(route('pageadd'), 'Добавить новую', ['alt'=>'new page', 'class'=>"btn btn-primary btn-lg"]) !!}

</div>