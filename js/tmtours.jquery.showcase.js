$(function () {
    console.log('tmtours.jquery.showcase', api_url);

    $.ajax(api_url + '/offers', {
        type: 'GET',
        dataType: 'json',
        data: [],
        error: function(jqXHR, textStatus, errorThrown) {
            //console.log('ruby error', jqXHR.responseJSON.error);
            // console.log('error: ', jqXHR.responseJSON.error);
            // return show_alert('alert-danger', jqXHR.responseJSON.result);
        },
        success: function(data, textStatus, jqXHR) {
            console.log('actualShowcaseResponse', data);
            var str_result = '';
            var l = data.length;
            for (index = 0; index < l; ++index) {
                var item = data[index];
                str_result += '<li>';
                str_result += '  <a href="#" style="background-image:url(' + item.hotel.medium_image_url + ');">';
                str_result += '    <span class="expanded">';
                str_result += '      <ul>';
                str_result += '        <li>Тип номера - Standart sea side</li>';
                str_result += '        <li>Тип номера - Standart sea side</li>';
                str_result += '        <li>Тип номера - Standart sea side</li>';
                str_result += '        <li>' + item.departure_date + '</li>';
                str_result += '      </ul>';
                str_result += '      <p>' + item.description + '</p>';
                str_result += '    </span>';
                str_result += '    <span class="order">Заказать</span>';
                str_result += '    <div class="head">';
                str_result += '      <span class="info-panel">';
                str_result += '        <strong class="country">Турция</strong>';
                str_result += '        <strong>Анталия</strong>';
                str_result += '        <strong class="price">' + item.price + '</strong>';
                str_result += '      </span>';
                str_result += '      <strong class="title">Fortuna 5*, Lorem ipsum dolor sit amet</strong>';
                str_result += '    </div>';
                str_result += '  </a>';
                str_result += '</li>';
            }
            // Display showcase
            $('#showcase_content').html(str_result);

            // Save result into the DOM indexed by id
            $('#showcase_indexed_data').html(JSON.stringify(index_by_id(data)));

            initProductSlider();
        }
    });

});

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