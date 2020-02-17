let vm = new Vue({
    el: "#deposit_page",
    data: {
        isLoading: false,
        fullPage: false,
        payment: {
            id: null,
            status: 0,
            due: 0
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
            let loader = this.$loading.show();
            if (id) {
                axios.get(api.getHajjPaymentStatus + id)
                    .then(res => {
                        if (res.data.success) {
                            _this.payment.id = id;
                            _this.payment.status = res.data.data;
                            _this.payment.due = res.data.due;
                        } else {
                            _this.payment.status = 0;
                        }
                    })
                    .then(() => {
                        $('#change-status-modal').modal('show');
                        loader.hide();
                        $('.kt-selectpicker').selectpicker('refresh');
                    });
            } else {
                console.log('id not passed');
            }
        },
    }
});
