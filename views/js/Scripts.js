$(document).ready(function() {
    //add product to cart
    $('.product-button').on('submit',function (event) {
        event.preventDefault();
        var addProduct = $(this).serialize();
        var id = $(this).children('input[name="id-product"]');
        var numb = $(this).children('input[name="number-product"]');
        $.ajax({
            type: 'POST',
            url: '/cart/add/'+ id.val()+'/'+numb.val(),
            data: addProduct,
            success: function(data){
                $("#cart-count").html(data);
                alert("Товар у кошику");
            }
        });
    });

    // Show/hide delivery info
    $('.order-delivery-details').hide();
    var $himself = $('#himself');
    var $warehouse = $('#np-warehouse');
    var $corier = $('#np-corier');

    //START
    var $other = $('#another-warehouse');
    //END


    $himself.click(function(){
        $('.order-delivery-details').hide();
    });
    $warehouse.click(function(){
        $('#other-warehouse-info').hide();
        $('#warehouse-corier').hide();
        $('#warehouse-info').show();
    });
    $corier.click(function(){
        $('#other-warehouse-info').hide();
        $('#warehouse-info').hide();
        $('#warehouse-corier').show();
    });

    $other.click(function(){
        $('#warehouse-info').hide();
        $('#warehouse-corier').hide();
        $('#other-warehouse-info').show();
    })

    //slider home-page

    var slides = document.querySelectorAll('#slides .slide');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide,5000);

    function nextSlide(){
        slides[currentSlide].className = 'slide';
        currentSlide = (currentSlide+1)%slides.length;
        slides[currentSlide].className = 'slide showing';
    }

    $('a[name=edit]').click(function(e) {
        e.preventDefault();
        $('.user-edit').show();
    });

    $('a[name=ehistory]').click(function(e) {
        e.preventDefault();
        $('.user-orders').show();
    });


    $('a#go').click( function(event){ // лoвим клик пo ссылки с id="go"
        event.preventDefault(); // выключaем стaндaртную рoль элементa
        $('#overlay').fadeIn(400, // снaчaлa плaвнo пoкaзывaем темную пoдлoжку
            function(){ // пoсле выпoлнения предъидущей aнимaции
                $('#callback')
                    .css('display', 'block') // убирaем у мoдaльнoгo oкнa display: none;
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo прибaвляем прoзрaчнoсть oднoвременнo сo съезжaнием вниз
            });
    });
    /* Зaкрытие мoдaльнoгo oкнa, тут делaем тo же сaмoе нo в oбрaтнoм пoрядке */
    $('#modal_close, #overlay').click( function(){ // лoвим клик пo крестику или пoдлoжке
        $('#callback')
            .animate({opacity: 0, top: '45%'}, 200,  // плaвнo меняем прoзрaчнoсть нa 0 и oднoвременнo двигaем oкнo вверх
                function(){ // пoсле aнимaции
                    $(this).css('display', 'none'); // делaем ему display: none;
                    $('#overlay').fadeOut(400); // скрывaем пoдлoжку
                }
            );
    });

//show/hide text post
    var i = 1;
    while(i < 4) {
        $('#open'+i).click(function () {
            $('#post-shorttext'+i).hide();
            $('#post-longtext'+i).show();
        });

        $('#close'+i).click(function () {
            $('#post-shorttext'+i).show();
            $('#post-longtext'+i).hide();
        });

        console.log(i);
        i++;
    };



   });