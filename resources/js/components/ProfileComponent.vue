<template>
    <div class="flexBox">
        <div class="flexBox">
            <img class="has-photo" v-if="userData.image_url" :src="'/storage/users/' + userData.image_url" alt="">
            <span class="no-photo" v-if="!userData.image_url">No Photo</span>
        </div>
        <div class="flexBox">
            <h5>{{ userData.name }}</h5>
            <h4>"{{ userData.alias }}"</h4>
            <h5>{{ userData.surname }}</h5>
        </div>
        <div class="edit-button"><a href="/editProfile">Edit Profile</a></div>
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
