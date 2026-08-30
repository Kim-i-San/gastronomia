//
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-video-player]').forEach((player) => {
        const playButton = player.querySelector('[data-video-play]');
        const videoId = player.dataset.videoId;

        if (!playButton || !videoId) {
            return;
        }

        playButton.addEventListener('click', () => {
            const iframe = document.createElement('iframe');

            iframe.src = `https://www.youtube-nocookie.com/embed/${videoId}?autoplay=1&rel=0`;
            iframe.title = 'GastronomIA';
            iframe.className = 'absolute inset-0 h-full w-full';
            iframe.allow =
                'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;

            player.innerHTML = '';
            player.appendChild(iframe);
        });
    });
});