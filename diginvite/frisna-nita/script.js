        // Function to update the source code
        function updateSource(newSource) {
            // Replace %20 with space
            newSource = decodeURIComponent(newSource.replace(/\+/g, " "));
            
            // Get the DOM elements
            const sourceElement = document.getElementById("source");
            
            // Set the source code and split it into lines
            sourceElement.textContent = newSource;
            const sourceLines = newSource.split("\n");
            
            // Calculate source width and height
            const sourceWidth = sourceLines.reduce((acc, line) => Math.max(acc, line.length), 0);
            
            // Define container width limits
            const maxWidth = 1000;
            
            // Set container width based on source width and limits
            if (sourceWidth > maxWidth) {
                sourceElement.style.width = maxWidth + "px";
            } else {
                sourceElement.style.width = sourceWidth + "px";
            }
            }
    
            // Get the new source code from the URL parameter
            const urlParams = new URLSearchParams(window.location.search);
            const newSource = urlParams.get("tamu");
    
            // Update the source code
            if (newSource !== null) {
            updateSource(newSource);
            }

            

  


// JavaScript
document.addEventListener("DOMContentLoaded", function() {
    // Function to check if element is in viewport
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Function to handle scroll event
    function handleScroll() {
        const coupleRows = document.querySelectorAll('.couple-row');
        coupleRows.forEach(row => {
            if (isInViewport(row)) {
                row.classList.add('animate');
            } else {
                row.classList.remove('animate');
            }
        });
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Initial check on page load
    handleScroll();
});

                        // JavaScript
                        document.addEventListener("DOMContentLoaded", function() {
                            // Function to check if element is in viewport
                            function isInViewport(element) {
                                const rect = element.getBoundingClientRect();
                                return (
                                    rect.top >= 0 &&
                                    rect.left >= 0 &&
                                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                                );
                            }
                        
                            // Function to handle scroll event
                            function handleScroll() {
                                const ayatElement = document.querySelector('.ayat');
                                if (isInViewport(ayatElement)) {
                                    ayatElement.classList.add('animate');
                                } else {
                                    ayatElement.classList.remove('animate');
                                }
                            }
                        
                            // Add scroll event listener
                            window.addEventListener('scroll', handleScroll);
                        
                            // Initial check on page load
                            handleScroll();
                        });

                        simplyCountdown('.simply-countdown', {
                            year: 2024, // required
                            month: 2, // required
                            day: 10, // required
                            hours: 8
                            , // Default is 0 [0-23] integer
                            minutes: 0, // Default is 0 [0-59] integer
                            seconds: 0, // Default is 0 [0-59] integer
                            words: { //words displayed into the countdown
                                days: { singular: 'hari', plural: 'hari' },
                                hours: { singular: 'jam', plural: 'jam' },
                                minutes: { singular: 'menit', plural: 'menit' },
                                seconds: { singular: 'detik', plural: 'detik' }
                            },
                        })

                        document.addEventListener('DOMContentLoaded', function() {
                            // Tangani klik pada tombol "Lihat Undangan"
                            document.getElementById('btn').addEventListener('click', function(event) {
                                event.preventDefault(); // Hindari perilaku default dari tautan
                        
                                // Menerapkan animasi untuk mengangkat cover
                                document.getElementById('hero').style.animation = 'liftCover 1s forwards';
                        
                                // Menghapus section Hero setelah animasi selesai
                                setTimeout(function() {
                                    var heroSection = document.getElementById('hero');
                                    heroSection.parentNode.removeChild(heroSection);
                                    document.getElementById('Home').classList.add('show');
                                }, 1000); // Sesuaikan dengan durasi animasi
                            });
                        });
                        document.addEventListener('DOMContentLoaded', function() {
                            var heroSection = document.getElementById('hero');
                            var body = document.body;
                            var audio = document.getElementById('myAudio');
                            var btn = document.getElementById('btn');
                        
                            // Mencegah scroll vertikal saat berada di section hero
                            if (heroSection) {
                                body.style.overflow = 'hidden';
                            }
                        
                            // Tangani klik pada tombol "Lihat Undangan"
                            btn.addEventListener('click', function(event) {
                                event.preventDefault(); // Hindari perilaku default dari tautan
                        
                                // Tampilkan kembali overflow untuk memungkinkan scroll vertikal
                                body.style.overflow = 'auto';
                        
                                // Tampilkan section Home dan sembunyikan section Hero
                                if (heroSection) {
                                    heroSection.style.display = 'none';
                                    document.getElementById('Home').style.display = 'block';
                                }
                        
                                // Memulai atau menghentikan pemutaran audio
                                if (audio.paused) {
                                    audio.play();
                                } else {
                                    audio.pause();
                                }
                            });
                        });
                        