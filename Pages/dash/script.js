

const toggle_btn = document.getElementById('toggle-btn');

var show = true;
toggle_btn.addEventListener('click', function(){



  

    if(show){
        const menu = document.getElementById('menu');
        menu.style.display = 'none';

        toggle_btn.style.display = 'block';
    } else {
        const menu = document.getElementById('menu');
        menu.style.display = 'block';
        
        toggle_btn.style.display = 'block';

    }


});

