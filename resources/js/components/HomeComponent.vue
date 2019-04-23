<template>
    <div>
        <template v-for="artwork in artworks">
            <div class="post">
                <div class="details">
                    <h2>Artist Details</h2>
                    <div class="post-details">
                        <img class="has-photo" v-if="artwork.user.image_url" :src="'/storage/users/' + artwork.user.image_url" alt="user image">
                        <span class="no-photo" v-if="!artwork.user.image_url">Artist has no photo</span>
                        <div class="artist-details">
                            <div><h3>{{ artwork.user.surname  }}</h3></div>
                            <div>{{ artwork.user.supporters }} Supporters</div>
                            <div>{{ artwork.upvotes }} Upvotes</div>
                            <div> Tags <div>[{{ artwork.tag }}]</div></div>
                        </div>
                    </div>
                    <h4><strong>"{{ artwork.title }}"</strong></h4>
                    <div><em>{{ artwork.description }}</em></div>
                </div>
                <div>
                    <div class="artwork"><img :src="'/storage/artwork/' + artwork.url" alt="artwork"></div>
                </div>
                <p></p>
                <p></p>
            </div>
        </template>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'artworks': [],
                'users': []
            }
        },

        mounted() {
            this.fetchArtwork();
            this.fetchArtistData();

            console.log('loaded');
        },

        methods: {
            fetchArtwork() {
                axios.get('/api/artwork')
                    .then(response => {
                        this.artworks = response.data;
                    })
            },

            fetchArtistData() {
                axios.get('/api/users')
                    .then(response => {
                        this.users = response.data;
                    })
            }
        }
    }
</script>
