paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '0.01'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("pagamento/accettato.php");
        })
    },
    onCancel: function (data) {
        window.location.replace("pagamento/rifiutato.php");
    }
}).render('#paypal-payment-button');