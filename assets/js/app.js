var app = new Vue({
    delimiters: ['${', '}'],
    el: '#league-table',
    data: {
        currentBranch: 'dev',
        items: null,
        timer: ''
    },
    created: function () {
        this.fetchData();
        this.timer = setInterval(this.fetchData, 3000)
    },
    methods: {
        fetchData: function () {
            var self = this;
            $.get( '/update', function( data ) {
                self.items = data;
            });
        }
    }
});