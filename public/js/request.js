$(document).ready(function () {
    $(".content__icon-income").on("click", function () {
        $(".content__icon-income").removeClass("actived");
        $(this).addClass("actived");

        $(".content__iocon-outcome").removeClass("actived");
    });

    $("#UAH").on("click", function () {
        $("#BTC1").addClass("active");
        $("#ETH1").addClass("active");
        $("#Waves1").addClass("active");

        $("#BTC1").addClass("actived");

        $("#UAH1").removeClass("active");
        // $("#BTC1").removeClass("active");
        $("#TRC1").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#ZEC1").removeClass("active");
        $("#qiwi").removeClass("activee");
        $("#card").removeClass("activee");

        $("#adres").addClass("activee");

        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
        $("#income").text("UAH");

    });

    $("#BTC").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#ETH1").addClass("active");
        $("#Waves1").addClass("active");
        $("#RUB1").addClass("active");
        $("#VisaRUB").addClass("active");
        // $("#adres").addClass("active");

        $("#card").addClass("activee");
        $("#UAH1").addClass("actived");

        $("#income").text("BTC");
        $("#outcome").text("UAH");
        $("#adres").removeClass("activee");

        $("#Waves1").removeClass("active");

        $("#BTC1").removeClass("active");
        $('#buy').text('Купить UAH')

            $('.header__down').text('Покупка Visa/Mastercard (UAH) через Bitcoin (BTC)')
    });

    $("#ETH").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#VisaRUB").addClass("active");
        $("#RUB1").addClass("active");
        $("#UAH1").addClass("actived");

        $("#Waves1").removeClass("active");
        $("#BTC1").removeClass("actived");
        $("#adres").addClass("activee");
        $("#adres__title").text("Адрес ETH кошелька");

        $("#TRC1").removeClass("active");
        $("#ZEC1").removeClass("active");
        $("#qiwi").removeClass("activee");
        $('#adres').removeClass('activee')
        $('#card').addClass('activee')



        $("#income").text("ETH");
        $("#outcome").text("UAH");
        $('#buy').text('Купить UAH')


        if($('#ETH').hasClass('actived')){
            $('.header__down').text('Покупка Visa/Mastercard (UAH) через Ethereum (ETH)')
        }

        $("#ETH1").removeClass("active");
        // $("#Waves1").addClass("active");
    });
    $("#TRC").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#VisaRUB").addClass("active");
        $("#RUB1").addClass("active");
        $("#ETH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#Waves1").removeClass("active");
        $("#BTC1").removeClass("actived");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");

        $("#TRC1").removeClass("active");

        $("#income").text("TRC20");

        $("#ZEC1").removeClass("active");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
    });

    $("#RUB").on("click", function () {
        $("#ETH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#BTC1").addClass("actived");

        $("#UAH1").removeClass("active");
        $("#Waves1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#adres").removeClass("activee");

        $("#RUB1").removeClass("active");
        $("#income").text("RUB");

        $("#qiwi").addClass("activee");

        $("#card").removeClass("activee");

        if($('#RUB').hasClass('actived')){
            $('.header__down').text('Покупка Bitcoin (BTC) через Qiwi (RUB)')

    }

    });
    $("#Waves").on("click", function () {
        $("#UAH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#card").addClass("activee");

        $("#ETH1").removeClass("active");
        $("#BTC1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#Waves1").removeClass("active");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");
        $("#income").text("Waves");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
    });
    $("#Waves1").on("click", function () {
        $("#buy").text("Купить Waves");
        $("#outcome").text("Waves");
        if($('#UAH').hasClass('actived')){
            $('.header__down').text('Покупка WAVES (WAVES) через Visa/Mastercard (UAH)')
    }
    if($('#WAVES').hasClass('actived')){
        $('.header__down').text('Покупка Visa/Mastercard (UAH) через WAVES (WAVES)')
    }
    $('#adres__title').text('Адрес WAVES кошелька.')
        // $("#income").text("Waves");
    });

    $("#ZEC").on("click", function () {
        $("#card").addClass("activee");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");

        $("#UAH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#ETH1").removeClass("active");
        $("#BTC1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#Waves1").removeClass("active");

        $("#income").text("ZEC");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");

        if($('#ZEC').hasClass('actived')){
            $('.header__down').text('Покупка Visa/Mastercard (UAH) через Zcash (ZEC)')
        }
    });

    $("#RUB").on("click", function () {
        $("#qiwi").removeClass("activee");
        $("#qiwi").addClass("activee");
        // $("#card").addClass("active");
        $("#adres").addClass("activee");

        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
    });

    $("#UAH1").on("click", function () {
        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
        $("#card").addClass("activee");
        $("#adres").removeClass("activee");

        if($('#BTC').hasClass('actived')){

            $('#qiwi').removeClass('activee')
        }

        if($('#ETH').hasClass('actived')){
            $('.header__down').text('Покупка Visa/Mastercard (UAH) через Ethereum (ETH)')
        }

        if($('#ETH').hasClass('actived')){
            $("#qiwi").removeClass('activee')
        }


if($('#BTC').hasClass('actived')){
    $('.header__down').text('Покупка Visa/Mastercard (UAH) через Bitcoin (BTC)')

}


        let www = this;
        var outcome = $(this).attr("value");
    });
    $("#RUB1").on("click", function () {
        $("#qiwi").addClass("activee");
        $("#card").removeClass("activee");
        $("#adres").removeClass("activee");

        
        if($('#BTC').hasClass('actived')){
            $('.header__down').text('Покупка Qiwi (RUB) через Bitcoin (BTC)')
        
        }
        if($('#ETH').hasClass('actived')){
            $('.header__down').text('Покупка Qiwi (RUB) через Ethereum (ETH)')
        }

        $("#buy").text("Купить RUB");
        $("#outcome").text("RUB");
        let www = this;
        var outcome = $(this).attr("value");
    });

    $("#BTC1").on("click", function () {
        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
        $("#adres").addClass("activee");
        // $("#qiwi").removeClass("active");
        $("#card").removeClass("activee");
        $("#qiwi").removeClass("activee");
        if ($("#RUB").hasClass("actived")) {
                $("#qiwi").addClass("activee");
        }
if($('#ETH').hasClass('actived')){
    $('#qiwi').removeClass('activee')
}

        if($('#ETH').hasClass('actieved')&&$('#BTC1').hasClass('actived')){
$('#qiwi').removeClass('acvtivee')

        }

        if($('#ETH').hasClass('actived')){
            $('.header__down').text('Покупка Bitcoin (BTC) через Ethereum (ETH)')
        }

        if($('#UAH').hasClass('actived')){
                $('.header__down').text('Покупка Bitcoin (BTC) через Visa/Mastercard (UAH)')
        }

        
        if($('#RUB').hasClass('actived')){
            $('.header__down').text('Покупка Bitcoin (BTC) через Qiwi (RUB)')

    }


        $("#adres__title").text("Адрес BTC кошелька");

        let www = this;
        var outcome = $(this).attr("value");
    });

    $("#VisaRUB").on("click", function () {
        $("#card").addClass("activee");
        $("#qiwi").removeClass("activee");

        if($('#BTC').hasClass('actived')){
            $('.header__down').text('Покупка Visa/Mastercard (RUB) через Bitcoin (BTC)')
        
        }
        if($('#ETH').hasClass('actived')){
            $('.header__down').text('Покупка Visa/Mastercard (RUB) через Ethereum (ETH)')
        }

        
        if($('#BTC').hasClass('actived')){

            $('#adres').removeClass('activee')
        }

        if($('#ETH').hasClass('actived')){

            $('#adres').removeClass('activee')
        }

        $("#buy").text("Купить RUB");
        $("#outcome").text("RUB");

        let www = this;
        var outcome = $(this).attr("value");
    });
    $("#ETH1").on("click", function () {
        $("#buy").text("Купить ETH");
        $("#outcome").text("ETH");
        $("#adres__title").text("Адрес ETH кошелька");

        $("#card").removeClass("activee");
        if ($("#RUB").hasClass("actived")) {
            $("#qiwi").addClass("activee");
        } else {
            $("#qiwi").removeClass("activee");
        }
        if($('#UAH').hasClass('actived')){
                $('.header__down').text('Покупка Ethereum (ETH) через Visa/Mastercard (UAH)')

        }

        
        if($('#RUB').hasClass('actived')){
            $('.header__down').text('Покупка Ethereum (ETH) через Qiwi (RUB)')

    }

        if($('#BTC').hasClass('actived')){
            $('.header__down').text('Покупка Ethereum (ETH) через Bitcoin (BTC)')
        
        }
        

        let www = this;
        var outcome = $(this).attr("value");

        $("#adres").addClass("activee");
        $("#adres__title-title ").text("Адрес ETH кошелька.");
    });

    $(".content__iocon-outcome").on("click", function () {
        $(".content__iocon-outcome").removeClass("actived");
        $(this).addClass("actived");
    });

    $(function () {
        $("#income__sum").on('input', function () {
           text =  $(this).val()

       $(".content__iocon-outcome").hasClass('actived')


       if($('#UAH').hasClass('actived')){
        $('.content__iocon-outcome').on('click', function(){
           wow =  $(this).attr('value')
            mag = text / wow
            $('#outcome__sum').attr('value', mag)
        })
       }

       if($('#RUB').hasClass('actived')){
        $('.content__iocon-outcome').on('click', function(){
           wow =  $(this).attr('value')
            mag = text / wow
            $('#outcome__sum').attr('value', mag)
        })
       }

       if($('#BTC').hasClass('actived')){
        $('.content__iocon-outcome').on('click', function(){
           wow =  $(this).attr('value')
            mag = text * wow
            $('#outcome__sum').attr('value', mag)
        })
       }
              
       if($('#ETH').hasClass('actived')){
        $('.content__iocon-outcome').on('click', function(){
            if($('#BTC1').hasClass('actived')){
                wow =  $(this).attr('value')
                mag = text / wow
                $('#outcome__sum').attr('value', mag)
            } else{
                wow =  $(this).attr('value')
                mag = text * wow
                $('#outcome__sum').attr('value', mag)
            }
        }) 
    
       }

           $("#income__sum").attr('value', text)

           if(text == 0){
            if($('#UAH').hasClass('actived')){
                $("#Waves1").on('click', function(){
                    $("#outcome__sum").attr('placeholder','0')
                    $("#outcome__sum").attr('value', '0')
                })
                $("#ETH1").on('click', function(){
                    $("#outcome__sum").attr('placeholder','0')
                    $("#outcome__sum").attr('value', '0')
                })
                $("#BTC1").on('click', function(){
                    $("#outcome__sum").attr('placeholder','0')
                    $("#outcome__sum").attr('value', '0')
                })
            }
                
                    }
        });
    });

    // ИЗМЕНЕНИИЕ 2 ИНПУТА
    $(".content__iocon-outcome").on("click", function () {
        let www = this;
        outcome = $(this).attr("value");
        // console.log(outcome);
        if ($(".content__iocon-outcome").hasClass("actived")) {
            
            $("#income__sum").keyup(function () {


                // let price = this;
                sum = $(this).attr("value");
                sum = this.value;

                // $("#outcome__sum").prop("1");

                // if(price == ''){
                //     $('#outcome__sum').attr('placeholder', '1')
                // }
                $("#outcome__sum").attr("value", sum);


                // $("#outcome__sum").val(1)

                // $("#outcome__sum").attr("value", '1');



                if ($("#BTC").hasClass("actived")) {
                    price = sum * outcome;
                    $("#outcome__sum").attr("placeholder", price);
                    $("#outcome__sum").attr("value", price);
                } else {
                    price = sum / outcome;
                    $("#outcome__sum").attr("placeholder", price);
                    $("#outcome__sum").attr("value", price);
                } 
                // if($('#income__sum').value == ''){
                // }
            });
        }
    });
    $(function () {
        //2. Получить элемент, к которому необходимо добавить маску
        $("#qiwiR").mask("+7(999)999-9999");
    });

    // ЗАПРОСЫ  ПРАЙСОВ НА ВАЛЮТЫ
    // BTC_UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.BTC_UAH).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceBTCu = Math.round(value);

                    $('#BTC').on('click', function(){
                        $('#income__sum').attr('value', '1')
                        $('#outcome__sum').attr('placeholder', priceBTCu)
                    })
         
                    $('#income__sum').attr('value', priceBTCu)
                    $('#outcome__sum').attr('placeholder', '1')
                    // $('#outcome__sum').attr('value', '1')

                    $('#UAH').on('click', function(){
                        $('#BTC1').on('click', function(){
                            $('#income__sum').attr('value', priceBTCu)
                            $('#outcome__sum').attr('placeholder', '1')
                        })
                        if( $('#income__sum').attr('value')=='0'){
                            $('#outcome__sum').attr('placeholder', '0')
                        } else{
                            $('#outcome__sum').attr('placeholder', '1')
                        }
                    })

                    if (
                        $("#UAH").hasClass("actived") &&
                        $("#BTC1").hasClass("actived")
                    ) {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum / priceBTCu;
                            $("#outcome__sum").attr("value", price);
                        });
                    }
                    if($('#UAH').hasClass('actived')){
                        $('#BTC1').on('click', function(){
                            $('#income__sum').attr('value', priceBTCu)
                            $('#outcome__sum').attr('placeholder', '1')
                        })
                        $('#UAH').on('click', function(){
                            if($('#income__sum').attr('value')==0){
                            $('#outcome__sum').attr('placeholder', '0')
                            } else {
                            $('#outcome__sum').attr('placeholder', '1')
                            }
                        })
                    }
                    $("#BTC").on("click", function () {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum * priceBTCu;
                            $("#outcome__sum").attr("value", price);
                        });
                    });

                    if ($("#UAH").hasClass("actived")) {
                        $("#BTC1").attr("value", priceBTCu);
                    }
                    $("#BTC").on("click", function () {
                        $("#UAH1").attr("value", priceBTCu);
                    });
                    return priceBTCu;
                }

                // return priceBTCu;
            });

            // priceBTCu
            // return;
            // $("#UAH").on("click", function () {
            //     $("#BTC1").attr("value", price);
            // });
        },
    });
    // ETH_UAH;
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.ETH_UAH).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceETHu = Math.round(value);

                       
                    if($('#UAH').hasClass('actived')){
                        $('#ETH1').on('click', function(){
                            $('#income__sum').attr('value', priceETHu)
                            $('#outcome__sum').attr('placeholder', '1')
                        })
                    }

                    $("#ETH").on("click", function () {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum * priceETHu;
                            $("#outcome__sum").attr("value", price);
                        });
                    });

                    // console.log($("#UAH").hasClass("actived"));
                    if ($("#UAH").hasClass("actived")) {
                        $("#ETH1").attr("value", priceETHu);
                    }
                }
                return value;
            });
        },
    });
    // WAVES_UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "WAVES_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.WAVES_RUB).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceWAVESu = Math.round(value);

                    if($('#UAH').hasClass('actived')){
                        $('#Waves1').on('click', function(){
                            $('#income__sum').attr('value', priceWAVESu)
                            $('#outcome__sum').attr('placeholder', '1')
                                $('#income__sum').attr('value', priceWAVESu)
                                if($('#income__sum').attr('value')==0){
                                $('#outcome__sum').attr('placeholder', '0' )

                                } else{
                                    $('#outcome__sum').attr('placeholder', '1' )
                                }
                        })
                    }
               
                    $('#Waves').on('click', function(){
                        $('#income__sum').attr('value', '1')
                        $('#outcome__sum').attr('placeholder', priceWAVESu)
                        $('#UAH1').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceWAVESu)
                        })
                    })

                    $("#Waves").on("click", function () {
                        $("#UAH1").attr("value", priceWAVESu);
                    });
                    $("#ETH").attr("value", priceWAVESu);
                }
                return value;
            });
        },
    });

    //BTC
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.BTC_UAH).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceBTCuah = Math.round(value);

                    $("#UAH").on("click", function () {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum / priceBTCuah;
                            $("#outcome__sum").attr("value", price);
                        });
                    });

                    $('#UAH').on('click', function(){
                                $('#income__sum').attr('value', priceBTCuah)
                                if($('#income__sum').attr('value')==0){
                                $('#outcome__sum').attr('placeholder', '0' )

                                } else{
                                    $('#outcome__sum').attr('placeholder', '1' )
                                }
                                $('#BTC1').on('click', function(){
                                    $('#income__sum').attr('value', priceBTCuah)
                                    if($('#income__sum').attr('value')==0){
                                    $('#outcome__sum').attr('placeholder', '0' )
    
                                    } else{
                                        $('#outcome__sum').attr('placeholder', '1' )
                                    }
                                })
                              
                                
                    })

                    $('#BTC').on('click', function(){
                        $('#income__sum').attr('value', '1')
                        $('#outcome__sum').attr('placeholder',priceBTCuah )
                        $('#UAH1').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceBTCuah)
                            console.log(priceBTCuah)
                        })
                    })
                 
                 

                    if ($("#BTC").hasClass("actived")) {
                        $("#UAH1").on("click", function () {
                            $("#UAH1").attr("value", priceBTCuah);
                        });

                        $("#RUB1").on("click", function () {
                            $("#RUB1").attr("value", priceBTCr);
                            $("#VisaRUB").attr("value", priceBTCr);
                        });
                    }
                }
                return value;
            });
        },
    });

    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.BTC_RUB).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceBTCr = Math.round(value);

                    $("#RUB").on("click", function () {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum / priceBTCr;
                            $("#outcome__sum").attr("value", price);
                        });
                    });

                    $(".price__BTC").text(priceBTCr);
                    $("#RUB1").on("click", function () {
                        $("#RUB1").attr("value", priceBTCr);
                    });
                    $("#RUB").on("click", function () {
                        $("#BTC1").attr("value", priceBTCr);
                    });
                    $("#BTC").on("click", function () {
                        $("#RUB1").attr("value", priceBTCr);
                        $("#VisaRUB").attr("value", priceBTCr);
                    });

                    $('#BTC').on('click', function(){
                        $('#RUB1').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceBTCr)
                        })
                        $('#VisaRUB').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceBTCr)
                        })
                    })
                    $('#RUB').on('click', function(){
                        $('#income__sum').attr('value',priceBTCr)
                        $('#outcome__sum').attr('placeholder', '1')
                    })

                    $('#RUB').on('click', function(){
                        $('#BTC1').on('click', function(){
                            $('#income__sum').attr('value',priceBTCr)
                            $('#outcome__sum').attr('placeholder', '1')
                        })
                    })
                    return priceBTCr;
                }

            });
            if ($("#BTC").hasClass("actived")) {
                console.log("dsdfsfsa");
            }

        },
    });
    ///ETH
    // BTC
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_BTC" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_BTC).forEach((value, index) => {
                if (index == 4) {
                    value == this;
                    priceETHb = Math.round(value);

                $('#BTC').on('click', function(){
                    $('#ETH1').on('click', function(){
                        $('#income__sum').attr('value', '1')
                        $('#outcome__sum').attr('placeholder', priceETHb)
                    })
                })

                $('#ETH').on('click', function(){
                    $('#BTC1').on('click', function(){
                        $('#income__sum').attr('value',priceETHb)
                        $('#outcome__sum').attr('placeholder', 1)
                    })
                })
   
                    if ($("#ETH").hasClass("actived")) {
                        $("#BTC1").attr("value", priceETHb);
                    }
                    // if ($("#BTC").hasClass("actived")) {
                    $("#BTC").on("click", function () {
                        $("#ETH1").attr("value", priceETHb);
                    });
                    // }

                    $("#ETH1").attr("value", priceETHb);

                    // $("#BTC1").attr("value", priceETHb);
                    $("#ETH").on("click", function () {
                        $("#BTC1").attr("value", priceETHb);
                    });
                }
            });
        },
    });
    // UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_UAH).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceETHu = Math.round(value);
                    if (
                        $("#ETH").hasClass("actived") &&
                        $("#UAH").hasClass("actived")
                    ) {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum * priceETHu;
                            $("#outcome__sum").attr("value", price);
                        });
                    }

                    // $('#UAH').on('click', function(){
                        // $("#ETH1").on("click", function () {
                            
                            $('#UAH').on('click', function(){
                                // $('#ETH1').on('click', function(){
                                //     $('#income__sum').attr('value', priceETHu)
                                //     $('#outcome__sum').attr('value', '1')
                                // })
                                $('#ETH1').on('click', function(){
                                    $('#income__sum').attr('value', priceETHu)
                                    if($('#income__sum').attr('value')==0){
                                    $('#outcome__sum').attr('placeholder', '0' )
                                    } else{
                                        $('#outcome__sum').attr('placeholder', '1' )
                                    }
                                })
                            })

                            $('#ETH').on('click', function(){
                                    $('#income__sum').attr('value','1')
                                    $('#outcome__sum').attr('placeholder', priceETHu)
                            })

                            $('#ETH').on('click', function(){
                                    $('#income__sum').attr('value','1')
                                    $('#outcome__sum').attr('placeholder', priceETHu)
                            })

                            $('#ETH').on('click', function(){
                                $('#UAH1').on('click', function(){
                                    $('#income__sum').attr('value', '1')
                                    $('#outcome__sum').attr('placeholder', priceETHu)
                                })
                            })
                            
                            
                 
                    // })
                 

                    $("#UAH").on("click", function () {
                        $("#ETH1").attr("value", priceETHu);
                    });
                    $("#ETH").on("click", function () {
                        $("#UAH1").attr("value", priceETHu);
                    });
                }
            });
        },
    });
    //ETH RUB
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_RUB).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceETHr = Math.round(value);
                    $(".price__ETH").text(priceETHr);
                    $("#ETH").on("click", function () {
                        $("#RUB1").on("click", function () {
                            $("#VisaRUB").attr("value", priceETHr);
                            $("#RUB1").attr("value", priceETHr);
                        });
                    });
                    $("#RUB").on("click", function () {
                        $("#ETH1").attr("value", priceETHr);
                    });


                    $('#ETH').on('click', function(){
                        $('#RUB1').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceETHr)
                        })
                        $('#VisaRUB').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceETHr)
                        })
                    })
                    
                    $('#RUB').on('click', function(){
                        $('#ETH1').on('click', function(){
                            $('#income__sum').attr('value',priceETHr)
                            $('#outcome__sum').attr('placeholder', '1')
                            console.log(priceETHr)
                        })
                    })

    
                    
                }
            });
        },
    });

    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ZEC_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ZEC_RUB).forEach((value, index) => {
                if (index == 5) {
                    value == this;
                    priceZECu = Math.round(value);

                    $("#ZEC").on("click", function () {
                        $("#income__sum").keyup(function () {
                            sum = $(this).attr("value");
                            sum = this.value;
                            price = sum / priceZECu;
                            $("#outcome__sum").attr("value", price);
                        });
                    });

                    $("#ZEC").on("click", function () {
                        $("#UAH1").attr("value", priceZECu);
                    });

                    $('#ZEC').on('click', function(){
                        $('#income__sum').attr('value', '1')
                        $('#outcome__sum').attr('placeholder', priceZECu)
                        $('#UAH1').on('click', function(){
                            $('#income__sum').attr('value', '1')
                            $('#outcome__sum').attr('placeholder', priceZECu)
                        })
                })
                }
            });
        },
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    if (
        $(".content__icon-income").hasClass("actived") &&
        $(".content__iocon-outcome").hasClass("actived")
    ) {
        $(".content__icon-income").on("click", function () {
            const income_route = $(this).attr("name");
            window.income_route = income_route;

            return income_route;
        });
        $(".content__iocon-outcome").on("click", function () {
            const outcome_route = $(this).attr("name");
            window.outcome_route = outcome_route;

            return outcome_route;
        });

        $("#buy").on("click", function () {
            // return;
            console.log("sfs");
            var values = { income_route, outcome_route };
            //устанавливаем событие отправки для формы с id=form
            var form_data = {};
            form_data = $("#form").serializeArray(); //собераем все данные из формы

            form_data[6] = { values };
            // console.log(income_route, outcome_route);
            $.ajax({
                type: "post", //Метод отправки
                dataType: "json",
                url: "api/v1/order",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    "Access-Control-Allow-Origin": "*",
                    // attr("content")
                },
                data: {
                    form_data,
                    token: " csrf_token() ",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    //код в этом блоке выполняется при успешной отправке сообщения
                    console.log("uiqeweip");
                    console.log(data);
                },
                error: console.log(":("),
                // });
            });
            console.log("hifgdsks");
        });
    }
});
