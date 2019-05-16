
paypal.Button.render({
    // Configure environment
    env: 'production',
    client: {
        sandbox: 'AfP1bnFlqbbeoVW-y863YUTo3NmjyzYHlPSLOPuvJ6R2_zfmEXfjqj1oFkrEN0qTPLQsxHmufjJjhk_q',
        production: 'AVKYeWo_SNR5CPffqjvYtg6STTakK8dy9rmtox8KxkXGz8w_r-7F0i9PMjIvG8gtMhEKPkBR1mrDJ6D-'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'large',
        color: 'blue',
        shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
            transactions: [{
                amount: {
                    total: '1',
                    currency: 'USD'
                }
            }]
        });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function () {
            window.alert('Thank you for your purchase! Click OK.');
            window.location.href = "<?= base_url()?>signup/sendMail";
        });
    }
}, '#paypal-button');










paypal.Button.render({
    // Configure environment
    env: 'production',
    client: {
        sandbox: 'AfP1bnFlqbbeoVW-y863YUTo3NmjyzYHlPSLOPuvJ6R2_zfmEXfjqj1oFkrEN0qTPLQsxHmufjJjhk_q',
        production: 'AVKYeWo_SNR5CPffqjvYtg6STTakK8dy9rmtox8KxkXGz8w_r-7F0i9PMjIvG8gtMhEKPkBR1mrDJ6D-'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'large',
        color: 'blue',
        shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,

    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
            transactions: [{
                amount: {
                    total: '1',
                    currency: 'USD'
                }
            }]
        });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function () {
            window.alert('Thank you for your purchase! Click OK.');
            window.location.href = "<?= base_url()?>signup/sendMail";
        });
    }
}, '#paypal-button2');
