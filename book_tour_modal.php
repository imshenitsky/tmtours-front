<div class="popup-holder" id="book-tour">
    <div class="bg">&nbsp;</div>
    <div class="popup">
        <div class="head">
            <i class="icon fa fa-shopping-cart"></i>
            <h4>Заказать тур</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse aperiam iste asperiores voluptates maxime ducimus nostrum</p>
        </div>
        <form action="#" class="form">
            <fieldset>
                <div class="form-row">
                    <input name="destination" class="required" type="text" placeholder="Куда летим">
                </div>
                <div class="row-group">
                    <div class="form-row">
                        <input name="departure_date" class="input-date date_from" readonly type="text" placeholder="Когда летим">
                    </div>
                    <div class="form-row">
                        <div class="order-wrap">
                            <div class="title">
                                <div class="name">Количество дней</div>
                            </div>
                            <div class="quantity">
                                <input name="nights_count" type="text" value="5">
                                <div class="quantity-btn">
                                    <span class="btn-quantity minus">−</span>
                                    <span class="btn-quantity plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Кто летит</h5>
                <div class="row-group">
                    <div class="form-row">
                        <div class="order-wrap">
                            <div class="title">
                                <div class="name">Взрослые</div>
                            </div>
                            <div class="quantity">
                                <input name="tourists_count" type="text" value="1">
                                <div class="quantity-btn">
                                    <span class="btn-quantity minus">−</span>
                                    <span class="btn-quantity plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="order-wrap">
                            <div class="title">
                                <div class="name">Дети</div>
                                <div class="age">до 12 лет</div>
                            </div>
                            <div class="quantity">
                                <input name="tourists_child_count" type="text" value="0">
                                <div class="quantity-btn">
                                    <span class="btn-quantity minus">−</span>
                                    <span class="btn-quantity plus">+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5>Ваши данные</h5>
                <div class="row-group">
                    <div class="form-row">
                        <input name="user_name" class="name" type="text" placeholder="Имя*">
                    </div>
                    <div class="form-row">
                        <input name="phone" class="phone phone-input" type="tel" placeholder="Телефон*">
                    </div>
                </div>
                <div class="form-row">
                    <input name="email" class="email" type="text" placeholder="Email*">
                </div>
                <button>Заказать</button>
            </fieldset>
        </form>
        <div class="popup-info success" style="display: none;">
            <h5>Заявка отправлена</h5>
            <i class="fa fa-check"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero velit, quibusdam fugit quis delectus excepturi officia labore</p>
        </div>
        <div class="popup-info fail" style="display: none;">
            <h5>Что-то пошло не так =(</h5>
            <i class="fa fa-exclamation-triangle"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero velit, quibusdam fugit quis delectus excepturi officia labore</p>
        </div>
        <a class="close-popup" href="#">close</a>
    </div>
</div>