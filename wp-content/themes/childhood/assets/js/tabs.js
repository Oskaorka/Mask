
jQuery(document).ready(function(){
	
// здесь табы каталога
	jQuery('ul.catalog__tabs').on('click', 'li:not(.catalog__tab_active)', function() {
        jQuery(this)
          .addClass('catalog__tab_active').siblings().removeClass('catalog__tab_active')
		  .closest('div.container').find('div.catalog__content').removeClass('catalog__content_active')
		  .eq(jQuery(this).index()).addClass('catalog__content_active');
    });

    function toggleSlide(item) {
        jQuery(item).each(function(i) {
            jQuery(this).on('click', function(e) {
                e.preventDefault();
                jQuery('.catalog-item__content').eq(i).toggleClass('catalog-item__content_active');
                jQuery('.catalog-item__list').eq(i).toggleClass('catalog-item__list_active');
            });
        });
    }

    toggleSlide('.catalog-item__link');
	toggleSlide('.catalog-item__back');
	
// скрипт для видео
function addVideosToPage(videoWrapperClass, linkClass, imageClass, buttonClass, enabledClass){
    function findVideos() {
        //take all videos
        let videos = document.querySelectorAll(videoWrapperClass);
        //run functions for each video on the page
        for (let i = 0; i < videos.length; i++) {
            setupVideo(videos[i]);
        }
    }

    function setupVideo(video) {
        //link to video
        let link = video.querySelector(linkClass);
        //video preview
        let media = video.querySelector(imageClass);
        //play button
        let button = video.querySelector(buttonClass);
        //parse id of video from url of image in current videowrapper
        let id = parseMediaURL(link);
        

        //add creating iframe instead of videolink by clicking videowrapper
        video.addEventListener('click', () => {
            //create iframe
            let iframe = createIframe(id);
            //revome link
            link.remove();
            //remove button
            button.remove();
            //place iframe inside the videowrapper
            video.appendChild(iframe);
        });

        //remove href from link to make the link just as container
        link.removeAttribute('href');
        //add class that shows our youtube button
        video.classList.add(enabledClass.replace('.', ''));
    }
     function parseMediaURL(link) {
            let regexp = /youtu\.be\/([a-zA-Z0-9_-]+)/i;
            let url = link.href;
            let match = url.match(regexp);
            return match[1];
        }
    //creating iframe
    function createIframe(id) {
        let iframe = document.createElement('iframe');
        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('allow', 'autoplay');
        iframe.setAttribute('src', generateURL(id));
        iframe.classList.add(imageClass.replace('.', ''));
        return iframe;
    }
    //generating url for iframe
    function generateURL(id)  {
        let query = '?rel=0&showinfo=0&autoplay=1';

        return ('https://www.youtube.com/embed/') + id + query;
    }

    findVideos();
}

addVideosToPage('.video', '.video__link', '.video__media', '.video__button', '.video--enabled');

//конец скрипта для видео
}); 


const slider = tns({
    container: '.carousel__inner',
    slideBy: 'page',
    autoplay: false,
    controls: false,
    nav: false,
    items: 1,
    responsive: {
        320: {
          items: 1 
        },
        640: {
          edgePadding: 20,
          gutter: 20,
          items: 1
        },
        700: {
          gutter: 30
        },
        900: {
          items: 2
        },
        1200: {
          items: 3
        }
      }

});




document.querySelector('.prev').addEventListener('click', function () {
    slider.goTo('prev');
  });
  document.querySelector('.next').addEventListener('click', function () {
    slider.goTo('next');
  });  

 




    



