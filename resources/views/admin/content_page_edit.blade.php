<div class="wrapper conteiner-fluid">
    {{--    <form class='form-horizontal'>--}}
        {!! Form::open(['url'=>route('pageedit', ['page'=>$data['id']]), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
        <input type="hidden" name="id" value="{{ $data['id'] }}">
        {{--    <div class="form-group">--}}
            {{--        {!! Form::label('name','Название',['class' => 'col-xs-2 control-label'])   !!}--}}
            {{--        <div class="col-xs-8">--}}
                {{--            {!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Введите название страницы'])!!}--}}
                {{--    </div>--}}
            {{--    </div>--}}

        <div class="form-group">
            <label for="name" class="control-label col-xs-2">Название:</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control" id="name" placeholder="Введите название страницы" value="${{ $data['name'] }}">
            </div>
        </div>

        {{--    <div class="form-group">--}}
            {{--        {!! Form::label('alias', 'Псевдоним:',['class'=>'col-xs-2 control-label']) !!}--}}
            {{--        <div class="col-xs-8">--}}
                {{--            {!! Form::text('alias', old('alias'), ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}--}}
                {{--        </div>--}}
            {{--    </div>--}}

        <div class="form-group">
            <label for="alias" class="control-label col-xs-2">Псовдоним:</label>
            <div class="col-xs-8">
                <input type="text" name="alias" class="form-control" id="alias" placeholder="Введите алис" value="{{ $data['alias'] }}">
            </div>
        </div>

        {{--    <div class="form-group">--}}
            {{--        {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}--}}
            {{--        <div class="col-xs-8">--}}
                {{--            {!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}--}}
                {{--        </div>--}}
            {{--    </div>--}}
        <div class="form-group">
            <label for="editor" class="control-label col-xs-2">Текст:</label>
            <div class="col-xs-8">
                <textarea name="text" class="form-control" id="editor" placeholder="Введите текст страницы">{{ $data['text'] }}</textarea>
            </div>
        </div>

        {{--    <div class="form-group">--}}
            {{--        {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}--}}
            {{--        <div class="col-xs-8">--}}
                {{--            {!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}--}}
                {{--        </div>--}}
            {{--    </div>--}}
        <div class="form-group">
            <label for="images" class="col-xs-2 control-label">Изображение:</label>
            <div class="col-xs-8">
                <input class="filestyle" data-text="Выберите изображение" data-btnClass="btn-primary" data-placeholder="Файла нет" name="images" type="file" id="images">
            </div>
        </div>
    <div class="form-group">
        <input type="hidden" name="old_images" value="$data['images']">
        <label for="images" class="col-xs-2 control-label">Изображение:</label>
        <div class="col-xs-8">
            <img src="{{ asset('assets/img/'.$data['images']) }}" class="img-circle delay-03s animated wow zoomIn" width="150" alt="old_images">
        </div>
    </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit']) !!}
            </div>
            {{--        <div class="form-group">--}}
                {{--            <div class="col-xs-offset-2 col-xs-10">--}}
                    {{--                <button class="btn btn-primary" type="submit">Сохранить</button>--}}
                    {{--            </div>--}}
                {{--        </div>--}}

        </div>
        {!! Form::close() !!}
        <script>
            CKEDITOR.replace('editor');
        </script>
</div>

