<template>
    <div class="container" id="enterButton">
        <div class="row justify-content-center">
            <div class="col-md-8 center-content">
                <el-button class="welcome-button" @click="enter" type="primary" round><span>ENTER</span></el-button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            enter: function (event) {
                const button = document.getElementById('enterButton');
                button.classList.add('is-invisible');
            }
        },

        mounted: function() {
            console.log('Welcome.')
        }
    }
</script>
