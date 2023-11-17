<script>
import logoVideo from '../../../resources/media/logoVideo.mp4'

export default {
    data: function () {
        return {
            logoVideo: logoVideo,
        }
    }
}
</script>

<template>
    <div id="app" class="logo">
        <video autoplay muted loop>
            <source :src="logoVideo" type="video/mp4">
        </video>
    </div>
</template>
