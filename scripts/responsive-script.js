 const MIN_WIDTH = 768;

        function checkWindowWidth() {
            if (window.innerWidth < MIN_WIDTH) {
                document.querySelector(".header-title").innerHTML = "Matemata";
            } else {
                document.querySelector(".header-title").innerHTML = "Matemata - kursy dla każdego";

            }
        }

        window.addEventListener('resize', checkWindowWidth);
        window.addEventListener('DOMContentLoaded', checkWindowWidth);