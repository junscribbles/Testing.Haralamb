<?php
    add_action('after_setup_theme', 'navigation_registrieren');
    function navigation_registrieren(){
        register_nav_menu('hauptnavigation', 'Hauptnavigation oben');
    };



    /*
    * WordPress lightbox gallery without plugin by WPCookie
    * https://redpishi.com/wordpress-tutorials/lightbox-wordpress/
    * */

    add_action( 'wp_footer', function(){ if(!is_admin()) { ?>

        <script>
        window.addEventListener('load', function () {
        const allGallery = [...document.querySelectorAll('.lightbox')]
        
        let imageGroup = [];
        let images = [];

        allGallery.forEach((item, index) => {
        let imgs =  item.querySelectorAll('img')
            const imageArray = [];

        imgs.forEach((im) => {
                im.setAttribute('data-galley', index);
                imageArray.push(im);
                images.push(im);
        })
        
        imageGroup.push(imageArray);

        });
        
        images.forEach(e => e.style.cursor = "pointer")
        
        array = [...images].forEach(item => item.addEventListener('click', handleCreateLightbox))
        function handleCreateLightbox(e) {
            let linkImage = e.target.getAttribute('src')
            let ss = e.target.dataset.galley

            let imgTitle = e.target.getAttribute('title')
            let imgAlt = e.target.getAttribute('alt')

            let code = `
            <div class="cookie_box">

                <div class="cookie_box-content">

                    <i class="cookie_box-prev" data-source="${ss}"><svg class="cookie_box-prev" data-source="${ss}" width="22"  viewBox="0 0 66.692 126.253" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g style="fill:#fff;fill-opacity:1;stroke:none;stroke-opacity:1"><path d="m360.731 229.075-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" style="fill:#fff;fill-opacity:1;stroke:none;stroke-opacity:1" transform="matrix(-.26458 0 0 .26458 96.472 0)"/></g></svg></i>

                    <img
                    src="${linkImage}"
                    alt=""
                    class="cookie_box-image"
                    />

                    <i class="cookie_box-next" data-source="${ss}"><svg data-source="${ss}" class="cookie_box-next" width="22" viewBox="0 0 66.692 126.253" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g style="fill:#fff;fill-opacity:1;stroke:none;stroke-opacity:1"><path d="m360.731 229.075-225.1-225.1c-5.3-5.3-13.8-5.3-19.1 0-5.3 5.3-5.3 13.8 0 19.1l215.5 215.5-215.5 215.5c-5.3 5.3-5.3 13.8 0 19.1 2.6 2.6 6.1 4 9.5 4 3.4 0 6.9-1.3 9.5-4l225.1-225.1c5.3-5.2 5.3-13.8.1-19z" style="fill:#fff;fill-opacity:1;stroke:none;stroke-opacity:1" transform="matrix(.26458 0 0 .26458 -29.78 0)"/></g></svg></i>

                    <div class="cookie_box-text">

                        <h2>${imgTitle}</h2>

                        <p>${imgAlt}</p>

                    </div>

                    <i class="cookie_box-close" data-source="${ss}"><svg data-source="${ss}" class="cookie_box-next" width="22"" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.4 32.8"><path d="M17.8 16.5 32.1 2.2c.2-.2.4-.5.4-.9 0-.3-.1-.6-.4-.9-.2-.2-.5-.4-.8-.4-.3 0-.6.1-.9.4L16.2 14.7 2.1.5C1.8.3 1.5.2 1.2.2S.6.3.4.5c-.3.3-.4.6-.4.9s.1.6.4.8l14.3 14.3L.4 30.8c-.3.2-.4.5-.4.8s.1.6.4.9c.2.2.5.4.9.4.3 0 .6-.1.8-.4l14.1-14.1 14.1 14.1c.2.2.5.4.9.4.3 0 .6-.1.9-.4s.4-.5.4-.9c0-.3-.1-.6-.4-.9L17.8 16.5z" style="fill:#fff"/></svg></i>

                </div>

            </div>`
            document.body.insertAdjacentHTML('beforeend', code)

        }

        let index = 0

        document.addEventListener('click', handleOutLightbox)

        function handleOutLightbox(e) {
            const lightImage = document.querySelector('.cookie_box-image');
            let imageSrc = '';

            if (!lightImage) return;
            let galley_id = e.target.dataset.source;

            document.body.classList.add('stop-scrolling')

            if (e.target.matches('.cookie_box')) {
                const body = e.target.parentNode;
                body.removeChild(e.target);

                document.body.classList.remove('stop-scrolling')

            } else if (e.target.matches('.cookie_box-next')) {
                imageSrc = lightImage.getAttribute('src');
                index = imageGroup[galley_id].findIndex(item => item.getAttribute('src') === imageSrc);
                index = index + 1;
                firstImage = 0;

                if (index > imageGroup[galley_id].length - 1) {
                    index = firstImage;
                }

                ChangeLinkImage(galley_id, index, lightImage);

                // Update title and alt text for the next image, generated with chat-gpt
                imgTitle = imageGroup[galley_id][index].getAttribute('title');
                imgAlt = imageGroup[galley_id][index].getAttribute('alt');
                updateTextContent(imgTitle, imgAlt);

            } else if (e.target.matches('.cookie_box-prev')) {
                imageSrc = lightImage.getAttribute('src');
                index = imageGroup[galley_id].findIndex(item => item.getAttribute('src') === imageSrc);
                index = index - 1;
                lastImage = imageGroup[galley_id].length - 1;

                if (index < 0) {
                    index = lastImage;
                }

                ChangeLinkImage(galley_id, index, lightImage);

                // Update title and alt text for the previous image, generated with chat-gpt
                imgTitle = imageGroup[galley_id][index].getAttribute('title');
                imgAlt = imageGroup[galley_id][index].getAttribute('alt');
                updateTextContent(imgTitle, imgAlt);

            } else if (e.target.matches('.cookie_box-close')) {
                const body = e.target.parentNode.parentNode.parentNode;
                body.removeChild(e.target.parentNode.parentNode);

                document.body.classList.remove('stop-scrolling')

            }
        }

        function ChangeLinkImage(galley_id, index, lightImage) {
            const newLink = imageGroup[galley_id][index].getAttribute('src')
            lightImage.setAttribute('src', newLink)

            const newTitle = imageGroup[galley_id][index].getAttribute('title')
            lightImage.setAttribute('title', newTitle)
        }

        // Updates Title and alt text, generated with chat-gpt
        function updateTextContent(title, alt) {
            const titleElement = document.querySelector('.cookie_box-text h2');
            const altElement = document.querySelector('.cookie_box-text p');

            if (titleElement) {
                titleElement.textContent = title;
            }

            if (altElement) {
                altElement.textContent = alt;
            }
        }
        
        
        
        })
        
        </script>
    
    <?php } } );
    
    
?>