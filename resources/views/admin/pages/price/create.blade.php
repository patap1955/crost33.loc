@extends("admin")
@section("title", "Добавление позиции в прайс-лист")

@section("css")

@endsection

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield("title")</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("admin.index") }}">Главная</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Список прайс-листа</h3>
                </div>
                <div class="card-body">
                    <div id="actions" class="row">
                        <div>
                            <a href="{{ route("price.index") }}" class="btn btn-block btn-primary btn-sm mb-3">Вернуться к списку</a>
                        </div>
                    </div>

                    <form method="post" action="{{ route("price.store") }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputTitle">Наименование</label>
                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                id="exampleInputTitle"
                                placeholder="Наименование"
                                value="{{ old("title") }}"
                            >
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Ед. измерения</label>
                                    <select class="form-control" name="unit">
                                        <option value="Тонна">Тонна</option>
                                        <option value="Час">Час</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Цена</label>
                                    <input type="number" name="rate" class="form-control" value="{{ old("rate") }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Категория</label>
                                    <select class="form-control" name="page_id">
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                        <!-- /.card-body -->
                    </div>

{{--                    <div class="row">--}}
{{--                        <div class="mt-3">--}}
{{--                            <a href="{{ route("price.index") }}" class="btn btn-block btn-primary btn-sm">Вернуться к списку</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection


