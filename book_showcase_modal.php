<div class="popup-holder" id="form">
    <div class="bg">&nbsp;</div>
    <div class="popup">
        <div class="head">
            <i class="icon fa fa-shopping-cart"></i>
            <h4>Заказать тур</h3>
            <p id="modal_top_location"></p>
        </div>
        <div id="book-showcase-area">
            <div class="popup-info">
                <div class="visual">
                    <img id="modal_image" alt="image description">
                    <span id="modal_hotel"></span>
                </div>
                <div class="title">
                    <span id="modal_price" class="price"></span>
                    <p id="modal_departure"></p>
                    <ul class="list-info">
                        <li id="modal_room_type"></li>
                        <li id="modal_board"></li>
                    </ul>
                </div>
            </div>
            <form action="#" class="form" id="book-showcase-form">
                <input type="hidden" id="modal_id" name="id" value="">
                <fieldset>
                    <h5>Ваши данные</h5>
                    <div class="row-group">
                        <div class="form-row">
                            <input name="name" class="name" type="text" placeholder="Имя*">
                        </div>
                        <div class="form-row">
                            <input name="phone" class="phone phone-input" type="tel" placeholder="Телефон*">
                        </div>
                    </div>
                    <div class="form-row">
                        <input class="email" name="email" type="text" placeholder="Email*">
                    </div>
                    <div class="form-row">
                        <textarea name="description" placeholder="Комментари"></textarea>
                    </div>
                    <button>Купить</button>
                </fieldset>
            </form>
        </div>
        <div id="book-showcase-greetings"></div>
        <a class="close-popup" href="#">close</a>
    </div>
</div>