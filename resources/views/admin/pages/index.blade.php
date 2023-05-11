@extends("admin")
@section("title", "Админ-панель")

@section("css")

@endsection

@section("content")
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Админ-панель</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("admin.index") }}">Главная</a></li>
                        <li class="breadcrumb-item active">Админ-панель</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Заявки</h3>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="width: 2%">ID</th>
                                        <th style="width: 17%">Статус</th>
                                        <th style="width: 17%">Имя</th>
                                        <th style="width: 10%">Телефон</th>
                                        <th>Комментарий</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            @if($contact->status)
                                                <td>
                                                    <span class="right badge badge-success">Обработан</span>
                                                    <p class="contacts-date">Созданна : <b>{{ $contact->created_at->format('d-m-y H:i') }}</b></p>
                                                    <p class="contacts-date">Обработанна : <b>{{ $contact->updated_at->format('d-m-y H:i') }}</b></p>
                                                </td>
                                            @else
                                                <td>
                                                    <span id="contactStatus-{{ $contact->id }}" class="right badge badge-warning">Не обработан</span>
                                                    <button
                                                        type="submit"
                                                        data-contact-id="{{ $contact->id }}"
                                                        class="btn btn-success contactStatus"
                                                        form="contactFormCompletedStatus-{{ $contact->id }}"
                                                    >
                                                        Завершить
                                                    </button>
                                                    <p class="contacts-date">Созданна : <b>{{ $contact->created_at->format('d-m-y H:i') }}</b></p>
                                                    <p id="contactUpdateDate-{{ $contact->id }}" class="contacts-date" style="display: none"></p>
                                                    <form
                                                        id="contactFormCompletedStatus-{{ $contact->id }}"
                                                        method="post"
                                                        action="{{ route("admin.contacts.completed", ["contact" => $contact->id]) }}"
                                                    >
                                                        @csrf
                                                        @method("PATCH")
                                                    </form>
                                                </td>
                                            @endif
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->text }}</td>
                                        </tr>
                                        <?php $i++;?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </div>
@endsection

@section("script")

@endsection


