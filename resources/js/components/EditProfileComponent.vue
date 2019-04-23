<template>
    <div class="flexBox">
        <form method="POST" action="{{ userData }}" class="flexBox">
            <label for="name">Name</label>
            <input id="name" type="text">
            <label for="alias">Alias</label>
            <input id="alias" type="text">
            <label for="surname">Surname</label>
            <input id="surname" type="text">
            <label for="image">Profile Picture</label>
            <input id="image" type="file">
        </form>
        <div class="edit-button"><a href="">Submit</a></div>
        <div class="box-shadow"></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'userData': []
            }
        },

        mounted() {
            console.log('Component mounted.')

            this.fetchUserData()
        },

        methods: {
            fetchUserData() {
                axios.get('/api/userauth')
                    .then(response => {
                        this.userData = response.data;
                        console.log(response.data);
                    })
            },
        },
    }
</script>
