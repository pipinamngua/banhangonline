/// <reference path="jquery-1.12.3.js" />

(function ($) {
    var list = [];

    /* function to be executed when product is selected for comparision*/

    $(document).on('click', '.addToCompare', function () {
        $(".comparePanle").show();
        $(this).toggleClass("rotateBtn");
        $(this).parents(".selectProduct").toggleClass("selected");
        var productID = $(this).parents('.selectProduct').attr('data-title');

        var inArray = $.inArray(productID, list);
        if (inArray < 0) {
            if (list.length > 2) {
                $("#WarningModal").show();
                $("#warningModalClose").click(function () {
                    $("#WarningModal").hide();
                });
                $(this).toggleClass("rotateBtn");
                $(this).parents(".selectProduct").toggleClass("selected");
                return;
            }

            if (list.length < 3) {
                list.push(productID);

                var displayTitle = $(this).parents('.selectProduct').attr('data-id');

                var image = $(this).siblings(".productImg").attr('src');

                $(".comparePan").append('<div id="' + productID + '" class="relPos titleMargin w3-margin-bottom   w3-col l3 m4 s4"><div class="w3-white titleMargin"><a class="selectedItemCloseBtn w3-closebtn cursor">&times</a><img src="' + image + '" alt="image" style="height:100px;"/><p id="' + productID + '" class="titleMargin1">' + displayTitle + '</p></div></div>');
            }
        } else {
            list.splice($.inArray(productID, list), 1);
            var prod = productID.replace(" ", "");
            $('#' + prod).remove();
            hideComparePanel();

        }
        if (list.length > 1) {

            $(".cmprBtn").addClass("active");
            $(".cmprBtn").removeAttr('disabled');
        } else {
            $(".cmprBtn").removeClass("active");
            $(".cmprBtn").attr('disabled', '');
        }

    });
    /*function to be executed when compare button is clicked*/
    $(document).on('click', '.cmprBtn', function () {
            if ($(".cmprBtn").hasClass("active")) {

            product = $('.selectProduct[data-title="' + list[0] + '"]');
            if($(product).data('cate') == 1) {
                $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class=" relPos compHeader"><p class="w3-display-middle">Features</p></li>' + '<li class="cpu">Condition</li>' + '<li class="cpu">Warranty</li>' + '<li class="cpu">Network Connection</li>' + '<li class="cpu">Tablet connection</li>' + '<li class="cpu">Color</li>' + '<li class="cpu">Screen Size</li>' + '<li class="cpu">Model</li>' + '<li class="cpu">Operating system version</li>' + '<li class="cpu">Sim slots</li>' + '<li class="cpu">RAM memory</li>' + '<li class="cpu">Product Size</li>' + '<li class="cpu">Expandable Memory</li>' + '<li class="cpu">Phone Features</li>' + '<li class="cpu">Storage Capacity</li>' + '<li class="cpu">Screen Resolution</li>' + '<li class="cpu">Screen Type</li>' + '<li class="cpu">Core</li>' + '<li class="cpu">Weight</li>' + '</ul>' + '</div>');
            } else if($(product).data('cate') == 2) {
                $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class=" relPos compHeader"><p class="w3-display-middle">Features</p></li>' + '<li class="cpu">Processor</li>' + '<li class="cpu">Operating System</li>' + '<li class="cpu">Memory</li>' + '<li class="cpu">Hard Drive</li>' + '<li class="cpu">Video Card</li>' + '<li class="cpu">Display</li>' + '<li class="cpu">Primary Battery</li>' + '<li class="cpu">Warranty</li>' + '<li class="cpu">Ports</li>' + '<li class="cpu">Slots</li>' + '</ul>' + '</div>');
            } else {
                $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class=" relPos compHeader"><p class="w3-display-middle">Features</p></li>' + '<li class="cpu">Screen Size</li>' + '<li class="cpu">Resolution</li>' + '<li class="cpu">Processor</li>' + '<li class="cpu">Wi-fi Built-in</li>' + '<li class="cpu">Web Browser</li>' + '<li class="cpu">Speaker System</li>' + '<li class="cpu">HDMI</li>' + '<li class="cpu">USB</li>' + '<li class="cpu">Weight</li>' + '<li class="cpu">Warranty</li>' + '</ul>' + '</div>');
            }

            for (var i = 0; i < list.length; i++) {
                product = $('.selectProduct[data-title="' + list[i] + '"]');
                /* this is to add the items to popup which are selected for comparision */
                if($(product).data('cate') == 1){
                    
                    var image = $('[data-title=' + list[i] + ']').find(".productImg").attr('src');
                    /*appending to div*/
                    $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class="compHeader"><img height="150px" src="' + image + '" class="compareThumb"></li>' + '<li class="cpu">' + $(product).data('condition') + '</li>' + '<li class="cpu">' + $(product).data('warranty') + '<li class="cpu">' + $(product).data('network') + '</li>' + '<li class="cpu">' + $(product).data('tablet') + '<li class="cpu">' + $(product).data('color') + '</li>' + '<li class="cpu">' + $(product).data('screensize') + '</li>'  + '<li class="cpu">' + $(product).data('model') + '</li>' + '<li class="cpu">' + $(product).data('operating') + '</li>'  + '<li class="cpu">' + $(product).data('sim') + '</li>'  + '<li class="cpu">' + $(product).data('ram') + '</li>'  + '<li class="cpu">' + $(product).data('productsize') + '</li>'  + '<li class="cpu">' + $(product).data('expandable') + '</li>'  + '<li class="cpu">' + $(product).data('feature') + '</li>'  + '<li class="cpu">' + $(product).data('storage') + '</li>'  + '<li class="cpu">' + $(product).data('screenresolution') + '</li>'  + '<li class="cpu">' + $(product).data('screentype') + '</li>'  + '<li class="cpu">' + $(product).data('core') + '</li>'  + '<li class="cpu">' + $(product).data('weight') + '</li>'  + '</ul>' + '</div>');
                } else if($(product).data('cate') == 2) {
                    var image = $('[data-title=' + list[i] + ']').find(".productImg").attr('src');
                    /*appending to div*/
                    $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class="compHeader"><img height="150px" src="' + image + '" class="compareThumb"></li>' + '<li class="cpu">' + $(product).data('processor') + '</li>' + '<li class="cpu">' + $(product).data('operating') + '<li class="cpu">' + $(product).data('memory') + '</li>' + '<li class="cpu">' + $(product).data('drive') + '<li class="cpu">' + $(product).data('card') + '</li>' + '<li class="cpu">' + $(product).data('display') + '</li>' + '<li class="cpu">' + $(product).data('battery') + '</li>' + '<li class="cpu">' + $(product).data('warranty') + '</li>' + '<li class="cpu">' + $(product).data('ports') + '</li>' + '<li class="cpu">' + $(product).data('slots') + '</li>' + '</ul>' + '</div>');
                
                } else if($(product).data('cate') == 3) {
                    var image = $('[data-title=' + list[i] + ']').find(".productImg").attr('src');
                    /*appending to div*/
                    $(".contentPop").append('<div class="w3-col s3 m3 l3 compareItemParent relPos">' + '<ul class="product">' + '<li class="compHeader"><img height="150px" src="' + image + '" class="compareThumb"></li>' + '<li class="cpu">' + $(product).data('screen') + '</li>' + '<li class="cpu">' + $(product).data('resolution') + '<li class="cpu">' + $(product).data('processor') + '</li>' + '<li class="cpu">' + $(product).data('wifi') + '<li class="cpu">' + $(product).data('web') + '</li>' + '<li class="cpu">' + $(product).data('speaker') + '</li>' + '<li class="cpu">' + $(product).data('hdmi') + '</li>' + '<li class="cpu">' + $(product).data('usb') + '</li>' + '<li class="cpu">' + $(product).data('weight') + '</li>' + '<li class="cpu">' + $(product).data('warranty') + '</li>' + '</ul>' + '</div>');
                
                }
            }
        }
        $(".modPos").show();
    });

    /* function to close the comparision popup */
    $(document).on('click', '.closeBtn', function () {
        $(".contentPop").empty();
        $(".comparePan").empty();
        $(".comparePanle").hide();
        $(".modPos").hide();
        $(".selectProduct").removeClass("selected");
        $(".cmprBtn").attr('disabled', '');
        list.length = 0;
        $(".rotateBtn").toggleClass("rotateBtn");
    });

    /*function to remove item from preview panel*/
    $(document).on('click', '.selectedItemCloseBtn', function () {

        var test = $(this).siblings("p").attr('id');
        $('[data-title=' + test + ']').find(".addToCompare").click();
        hideComparePanel();
    });

    function hideComparePanel() {
        if (!list.length) {
            $(".comparePan").empty();
            $(".comparePanle").hide();
        }
    }
})(jQuery);