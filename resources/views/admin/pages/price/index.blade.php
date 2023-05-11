@extends("admin")
@section("title", "Прайс-лист")

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

    <section class="content">

        <!-- Default box -->
        <div class="row col-sm-2">
            <a href="{{ route("price.create") }}" class="btn btn-block btn-primary btn-sm mt-3 mb-3">Добавить позицию</a>
        </div>
        @foreach($categories as $cat)
            @if($cat->prices()->count() > 0)
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $cat->title }}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Наименование
                            </th>
                            <th style="width: 30%">
                                Ед. измерения
                            </th>
                            <th>
                                Цена
                            </th>
                            <th style="width: 20%">
                                Действие
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cat->prices as $price)
                        <tr>
                            <td>
                                #
                            </td>
                            <td>{{ $price->title }}</td>
                            <td>
                                {{ $price->unit }}
                            </td>
                            <td class="project_progress">
                                {{ $price->rate }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route("price.show", ['price' => $price->id]) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <button type="submit" form="deletePrice-{{ $price->id }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </button>
                            </td>
                        </tr>
                            <form id="deletePrice-{{ $price->id }}" method="post" action="{{ route("price.destroy", $price->id)}}">
                                @csrf
                                @method("DELETE")
                            </form>
                        @endforeach
                        </tbody>
                    </table>
                    <form class="col-sm-3 mt-3 mb-3" method="post" action="{{ route("download-price", ["page" => $cat->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                            <input name="file" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Загрузить файл</label>
                        </div>
                        <button type="submit" class="col-sm-6 btn btn-block btn-primary btn-sm mt-3 mb-3">Загрузить прайс</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            @endif
        @endforeach


        <div class="row col-sm-2">
            <a href="{{ route("price.create") }}" class="btn btn-block btn-primary btn-sm mt-3 mb-3">Добавить позицию</a>
        </div>
        <!-- /.card -->

    </section>
@endsection

@section("scripts")
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection

