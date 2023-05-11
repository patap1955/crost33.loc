<div class="modal micromodal-slide" id="modalForm" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <button class="modal__close" aria-label="Close modal" data-micromodal-close>&times;</button>
            <header class="modal__header"></header>
            <main class="modal__content" id="modal-1-content">
                <h2 class="modal__content-title">Готовы обсудить проект?</h2>
                <p class="modal__content-text">Заполните форму обратной связи и уточните время, когда удобно поговорить.</p>
                <form class="modal__content-form" method="post" action="{{ route("form-contacts") }}">
                    @csrf
                    <input class="form-control" name="name" placeholder="Имя" id="inputName" required>
                    <input id="inputMaskPhone" class="form-control" name="phone" placeholder="Телефон" required>
                    <div class="modal-checkbox">
                        <input type="checkbox" id="checkbox">
                        <label><a href="{{ route('politics') }}">Согласен на обработку персональный данных</a></label>
                    </div>
                    <div class="modal__content-form-button">
                        <button class="btn-yellow" id="sendMail" disabled>
                            <img class="btn-border-left" src="{{ asset("/assets/img/border-button-left.png") }}">
                            <img class="btn-border-right" src="{{ asset("/assets/img/border-button-right.png") }}">
                            Оставить заявку
                        </button>
                    </div>

                </form>
            </main>
            <footer class="modal__footer">

            </footer>
        </div>
    </div>
</div>
