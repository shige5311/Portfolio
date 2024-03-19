'use strict'

// ドロワー
$(document).ready(function(){
    $('#openNav, #closeNav').on('click', function(){
      $('#nav').toggleClass('show');
    });
  });

const loading = document.querySelector( '.loading' );
 
window.addEventListener( 'load', () => {
  loading.classList.add( 'hide' );
}, false );
