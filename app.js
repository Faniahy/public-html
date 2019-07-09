let vm = new Vue({
    el: '#app',
    data: {
        message: 'Salut les gens',
        link: 'http://mbasic.facebook.com',
        success: true,
        persons: ['Faniahy','Salohy']
    },
    methods: {
        say: function(){
            this.message = "Je parle!"
        },
        addPerson: function(){
            this.persons.push("Navri")
        }
    }
})