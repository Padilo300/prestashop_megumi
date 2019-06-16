
/**
 * BoxberryDelivery: модуль для PrestaShop 1.5-1.7
 *
 * @author    Maksim T. <zapalm@yandex.com>
 * @copyright 2015-2019 Maksim T.
 * @license   https://prestashop.modulez.ru/en/content/3-terms-and-conditions-of-use#proprietary-clean EULA: Proprietary license without copy-protection
 * @link      https://prestashop.modulez.ru/en/ Модули для PrestaShop CMS
 */
var BoxberryDelivery = {
    params: {
        alertMessage        : 'Вы не выбрали пункт выдачи товара.',
        initialized         : false,                  
        isAddressSelected   : false,                  
        widgetLinkId        : '',                     
        widgetLinkHtml      : '',                     
        widgetAnchorId      : 'boxberry-widget-open', 
        modulePresTeamShop  : false,                  
        moduleSuperCheckout : false,                  
        PS15                : false,                  
        PS16                : false,                  
        PS17                : false,                  
    },

    init: function () {
        var self = BoxberryDelivery; 

        var $radio = self.getRadioSelector();
        if (0 === $radio.length || true === self.params.initialized) {
            return;
        }

        $(document).on('click', '#' + self.params.widgetAnchorId, function(event) {
            event.preventDefault();
            boxberry.open(self.callbackHandler, BOXBERRYDELIVERY_API_KEY);
        });

        self.params.widgetLinkId = 'widget-link-' + BOXBERRYDELIVERY_CARRIER_ID;

        
        if ('1' === BOXBERRYDELIVERY_MODULE_SUPERCHECKOUT) {
            self.params.moduleSuperCheckout = true;
        } else if (typeof(AppOPC) !== 'undefined' && $radio.closest('.delivery_option').length > 0) {
            self.params.modulePresTeamShop = true;
        } else if ($radio.closest('.delivery-option').length > 0) {
            self.params.PS17 = true;
        } else if ($radio.closest('tr').html() !== null) {
            self.params.PS16 = true;
        } else {
            self.params.PS15 = true;
        }
        

        
        if (self.params.moduleSuperCheckout) {
            self.params.widgetLinkHtml = '<tr><td id="' + self.params.widgetLinkId + '" colspan="3" style="width: auto;">' + self.getWidgetLink('Выбрать пункт выдачи товара') + '</td></tr>';
        } else if (self.params.modulePresTeamShop || self.params.PS17) {
            self.params.widgetLinkHtml = '<div class="col-sm-12" id="' + self.params.widgetLinkId + '">' + self.getWidgetLink('Выбрать пункт выдачи товара') + '</div>';
        } else {
            self.params.widgetLinkHtml = '<tr><td id="' + self.params.widgetLinkId + '" colspan="4">' + self.getWidgetLink('Выбрать пункт выдачи товара') + '</td></tr>';
        }
        

        self.params.initialized = true;
        self.appendLink();
        self.getAddress();

        
        
        var $form = $radio.closest('form');
        if ($form.length > 0) {
            $(document).on('submit', $form, function () {
                if (false === self.checkAddressSelected()) {
                    self.alertNotice(self.params.alertMessage);

                    return false;
                }
            });
        }

        
        $(document).on('submit', 'form[name=carrier_area]', function () {
            if (false === self.checkAddressSelected()) {
                self.alertNotice(self.params.alertMessage);

                return false;
            }
        });
        

        
        $(document).on('click', '#HOOK_PAYMENT a', function () {
            if (false === self.checkAddressSelected()) {
                self.alertNotice(self.params.alertMessage);

                return false;
            }
        });
        

        
        if (self.params.modulePresTeamShop) {
            $(document).on('click', '#btn_place_order', function () {
                if (false === self.checkAddressSelected()) {
                    Fronted.showModal({type: 'warning', message: self.params.alertMessage});
                    AppOPC.is_valid_all_form = false;
                }
            });
        }
        
    },

    getRadioSelector: function () {
        var radioSelector = BOXBERRYDELIVERY_CARRIER_ID + ','; 
        var radioId = $('input[value="' + radioSelector + '"]').attr('id');

        return $('#' + radioId);
    },

    appendLink: function () {
        var self = BoxberryDelivery; 

        if (false === self.params.initialized) {
            return;
        }

        if (null !== document.getElementById(self.params.widgetLinkId)) {
            return;
        }

        var $radio = self.getRadioSelector();
        if (self.params.modulePresTeamShop) {
            $radio.closest('.delivery_option')
                .css('cssText', 'height: 124px !important;')
                .append(self.params.widgetLinkHtml)
            ;
        } else if (self.params.PS17) {
            $radio.closest('.delivery-option').append(self.params.widgetLinkHtml);
        } else if (self.params.PS16 || self.params.moduleSuperCheckout) {
            $radio.closest('tr').after(self.params.widgetLinkHtml);
        } else if (self.params.PS15) {
            $('label[for="' + $radio.prop('id') + '"]').find('table.resume').append(self.params.widgetLinkHtml);
        }
    },

    getAddress: function () {
        var self = BoxberryDelivery; 

        $.ajax({
            headers: {'cache-control': 'no-cache'},
            url: BOXBERRYDELIVERY_CONTROLLER.replace(/&amp;/g, '&'), 
            async: true,
            cache: false,
            dataType: 'json',
            data: 'action=getAddress',
            success: function (jsonData) {
                if (jsonData.data !== false) {
                    
                    var widgetLink = document.getElementById(self.params.widgetLinkId);
                    $(widgetLink).html('<b>Вы выбрали:</b> ' + self.getWidgetLink(jsonData.data));
                    

                    
                    self.params.isAddressSelected = true;
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (textStatus !== 'abort') {
                    console.error("TECHNICAL ERROR: unable to get address.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
                }
            }
        });
    },

    callbackHandler: function (data) {
        var self = BoxberryDelivery;
        
        $.ajax({
            type: 'POST',
            headers: {'cache-control': 'no-cache'},
            url: BOXBERRYDELIVERY_CONTROLLER.replace(/&amp;/g, '&'), 
            async: true,
            cache: false,
            dataType: 'json',
            data: 'action=save&data=' + JSON.stringify(data),
            success: function (jsonData) {
                
                if (self.params.modulePresTeamShop) {
                    
                    
                    self.getRadioSelector().change();
                } else {
                    var widgetLink = document.getElementById(self.params.widgetLinkId);
                    $(widgetLink).html('<b>Вы выбрали:</b> ' + self.getWidgetLink(jsonData.data));
                }
                

                
                self.params.isAddressSelected = true;
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (textStatus !== 'abort') {
                    console.error("TECHNICAL ERROR: unable to save details.\n\nDetails:" + data + "\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
                }
            }
        });
    },

    getWidgetLink: function (linkText) {
        return '<a href="#" id="' + BoxberryDelivery.params.widgetAnchorId + '">' + linkText + '</a>';
    },

    checkAddressSelected: function () {
        var self = BoxberryDelivery; 

        
        var $radio = self.getRadioSelector();
        var isRadioChecked = $radio.prop('checked') || ($radio.closest('span').prop('class') === 'checked');
        

        if (isRadioChecked && !self.params.isAddressSelected) {
            
            return false;
        }

        
        return true;
    },

    alertNotice: function (message) {
        if (!!$.prototype.fancybox) {
            var options = {
                type: 'inline',
                autoScale: true,
                minHeight: 30,
                content: '<p class="fancybox-error">' + message + '</p>'
            };

            $.fancybox.open([options], {
                padding: 0
            });
        }
        else {
            alert(message);
        }
    }
};
$(document).ready(function () {
    var widget = BoxberryDelivery; 

    widget.init();

    var $radio = widget.getRadioSelector();
    var timerId = setInterval(function() {
        if (0 !== $radio.length) {
            clearInterval(timerId);
            widget.init();
        } else {
            $radio = widget.getRadioSelector();
        }
    }, 1000);

    setTimeout(function() {
        clearInterval(timerId);
        if (0 === $radio.length) {
            console.warn('Плагин не инициализирован (не нужно или не определен тип чекаута).');
        }
    }, 10000);

    if (typeof window.updateCarrierList === 'function') {
        window.updateCarrierList = (function () {
            var original = window.updateCarrierList;

            return function (json) {
                original(json);
                widget.init();
            };
        })();
    }

    if (typeof(AppOPC) !== 'undefined' && typeof Carrier.update === 'function') {
        Carrier.update = (function () {
            var original = Carrier.update;

            return function (json) {
                original(json);
                widget.init();
            };
        })();
    }

    if ('1' === BOXBERRYDELIVERY_MODULE_SUPERCHECKOUT) {
        if (typeof window.placeOrder === 'function') {
            window.placeOrder = (function () {
                var original = window.placeOrder;

                return function () {
                    if (false === widget.checkAddressSelected()) {
                        displayGeneralError(widget.params.alertMessage);

                        return;
                    }

                    original();
                };
            })();
        }

        if (typeof window.loadCarriers === 'function') {
            window.loadCarriers = (function () {
                var original = window.loadCarriers;

                return function () {
                    original();

                    setTimeout(function () {
                        widget.appendLink();
                        widget.getAddress();
                    }, 1000)
                };
            })();
        }
    }
});