let vm = new Vue({
    el: "#deposit_page",
    data: {
        payment: {
            id: null,
            status: 0
        }
    },
    mounted() {
        setTimeout(function () {
        }, 1000);
    },
    updated() {
    },
    methods: {
        getPaymentStatus(id) {
            let _this = this;
            if (id) {
                axios.get(api.getHajjPaymentStatus + id)
                    .then(res => {
                        if (res.data.success) {
                            _this.payment.id = id;
                            _this.payment.status = res.data.data;
                        } else {
                            _this.payment.status = 0;
                        }
                    })
                    .then(() => {
                        $('.kt-selectpicker').selectpicker('refresh');
                    });
            } else {
                console.log('id not passed');
            }
        },
    }
});
