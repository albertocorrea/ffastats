var app = new Vue({
    delimiters: ['${', '}'],
    el: '#league-table',
    data: {
        teams: null,
        timer: ''
    },
    created: function () {
        this.fetchData();
        this.timer = setInterval(this.fetchData, 3000)
    },
    methods: {
        fetchData: function () {
            var league = window.location.pathname.split("/").pop();
            var self = this;
            $.get( '/update/'+league, function( data ) {
                self.teams = data;
            });
        }
    }
});