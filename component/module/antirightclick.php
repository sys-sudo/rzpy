<style>
        #tooltip {
            display: none;
            position: absolute;
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            z-index: 1000;
        }
    </style>
<audio id="errorSound" src="component/module/error.mp3" preload="auto"></audio>
    <div id="tooltip"></div>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', (event) => {
            const tooltip = document.getElementById('tooltip');
            let lastRightClickTime = 0;
            let consecutiveRightClicks = 0;
            document.addEventListener('contextmenu', function(event) {
                event.preventDefault();
                const currentTime = new Date().getTime();
                const timeDiff = currentTime - lastRightClickTime;
                lastRightClickTime = currentTime;
                if (timeDiff < 300) {
                    consecutiveRightClicks++;
                } else {
                    consecutiveRightClicks = 1;
                }
                if (consecutiveRightClicks >= 3) {
                    showNotification();
                    consecutiveRightClicks = 0;
                } else {
                    tooltip.style.display = 'block';
                    tooltip.style.left = event.pageX + 'px';
                    tooltip.style.top = event.pageY + 'px';
                    tooltip.innerHTML = 'Klik kanan tidak diperbolehkan';
                    document.getElementById('errorSound').play();
                    setTimeout(() => {
                        tooltip.style.display = 'none';
                    }, 2000);
                }
            });
            document.addEventListener('click', function() {
                tooltip.style.display = 'none';
            });
            function showNotification() {
                alert('KLIK KANAN TIDAK DIPERBOLEHKAN!!!');
            }
        });
    </script>