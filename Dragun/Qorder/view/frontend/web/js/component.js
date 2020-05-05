require(
    [
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function(
        $,
        modal
    ) {
        var options = {
            type: 'popup',
            responsive: true,
            title: 'Dragun',
            innerScroll: true,
            buttons: [{
                text: $.mage.__('Send'),
                class: 'mymodal1',
                click: function () {
                    this.closeModal();
                }
            }]
        };

        var popup = modal(options, $('#popup-modal'));
        $(".btn-btn-primary").on('click',function(){
            $("#popup-modal").modal("openModal");
        });
    }
);