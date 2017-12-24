$(function () {
    $.ajax(api_url + '/offers', {
        type: 'GET',
        dataType: 'json',
        data: [],
        error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.responseJSON.error);
        },
        success: function(data, textStatus, jqXHR) {
            var str_result = '';
            var l = data.length;
            for (index = 0; index < l; ++index) {
                var item = data[index];
                str_result += '<li>';
                str_result += '  <a href="#" style="background-image:url(' + item.hotel.medium_image_url + ');">';
                str_result += '    <span class="expanded">';
                str_result += '      <ul>';
                str_result += '        <li>' + item.hotel.display_name + '</li>';
                str_result += '        <li>' + item.price + '</li>';
                str_result += '        <li>' + item.departure + '</li>';
                str_result += '      </ul>';
                str_result += '      <p>' + item.description + '</p>';
                str_result += '    </span>';
                str_result += '    <span id="' + item.id + '" class="order">Заказать</span>';
                str_result += '    <div class="head">';
                str_result += '      <span class="info-panel">';
                str_result += '        <strong class="country">' + item.country + '</strong>';
                str_result += '        <strong>' + item.city + '</strong>';
                str_result += '        <strong class="price">' + item.price + '</strong>';
                str_result += '      </span>';
                str_result += '      <strong class="title">' + item.hotel.display_name + '</strong>';
                str_result += '    </div>';
                str_result += '  </a>';
                str_result += '</li>';
            }
            // Display showcase
            $('#showcase_content').html(str_result);

            // Save result into the DOM indexed by id
            $('#showcase_indexed_data').html(JSON.stringify(index_by_id(data)));

            initProductSlider();
            initPopups();
            formHandle('book-showcase', 'orders');
        }
    });

});
function initPopups (){
$('body')
    .popup({
        "opener":".order",
        "popup_holder":"#form",
        "popup":".popup",
        "close_btn":".close-popup",
        "beforeOpen": function(popup) {
            fillPopup(this.id);
            $('body').addClass('modal-open');
            $(popup).css({
                'left': 0,
                'top': 0
            }).hide();
        }
    })
}

function fillPopup(id) {
    cleanForm('book-showcase');
    var api_response = JSON.parse($('#showcase_indexed_data').html());

    if (id in api_response) {
        var item = api_response[id];
        $('#modal_id').val(id);
        $('#modal_price').html(item.price);
        $('#modal_hotel').html(item.hotel.display_name);
        $('#modal_top_location').html('<strong>'+ item.hotel.display_name +'</strong> <span>'+ item.country +'</span> '+ item.city +'');
        $('#modal_image').attr({src: item.hotel.medium_image_url});
        $('#modal_departure').html(item.departure);
        $('#modal_room_type').html('<i class="fa fa-bed"></i>' + item.room_type);
        $('#modal_board').html('<i class="fa fa-cutlery"></i>' + item.board);
    }
}

function initProductSlider() {
    if($(".product-list").length){
        console.log('initSlider', 'product-list');

        if($(window).width() > 1100){
            var _rows = 2
        } else{
            var _rows = 1
        }
        $(".product-list").slick({
            dots: false,
            infinite: true,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            //mobileFirst: true,
            rows: _rows,
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]
        });
    }
}

function index_by_id(response) {
    var res = {};
    var l = response.length;
    for (index = 0; index < l; ++index) {
        var item = response[index];
        res[item.id] = item;
    }
    return res;
}