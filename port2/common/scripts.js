'use strict'

//addEventListener() は EventTarget インターフェイスのメソッドで
//ターゲットに特定の"イベント"が配信されるたびに呼び出される関数を
//今回はリンクが読み込まれたら"animation"を呼び出す
window.addEventListener('load', animation);

// "定数"の定義
const load = document.getElementById('loading');

// cssクラスを追加する関数
function animation(){
  load.classList.add('loaded');
}

//"画面が読み込まれたら"animationを呼び出す
window.addEventListener('load', animation); 

//ドロワーメニューのジャバスクリプト 
$(document).ready(function(){
  let drawerBtn = $('#DrawerBtn');
  let drawerBtnCrosed = $('.drawerBtnCrosed');
  let nav = $('#nav');
  let wrapper = $('#wrapper');

  drawerBtn.click(function(){
      wrapper.toggleClass('show');
      nav.toggleClass('show');
  });

  drawerBtnCrosed.click(function(){
      wrapper.removeClass('show');
      nav.removeClass('show');
  });
})

// モーダルウィンドウを開く関数 //
function openModal() {
    let modal = document.getElementById("modal");
    modal.classList.remove("is-hidden");
    modal.classList.add("is-shown");
  }

  // モーダルウィンドウを閉じる関数 //
  function closeModal() {
    let modal = document.getElementById("modal");
    modal.classList.remove("is-shown");
    modal.classList.add("is-hidden");
  }
 // モーダルウィンドウを開く関数 //
function openModal1() {
    let modal1 = document.getElementById("modal1");
    modal1.classList.remove("is-hidden");
    modal1.classList.add("is-shown");
  }
  // モーダルウィンドウを閉じる関数 //
  function closeModal1() {
    let modal1 = document.getElementById("modal1");
    modal1.classList.remove("is-shown");
    modal1.classList.add("is-hidden");
  }
  // モーダルウィンドウを開く関数 //
function openModal2() {
    let modal2 = document.getElementById("modal2");
    modal2.classList.remove("is-hidden");
    modal2.classList.add("is-shown");
  }
  // モーダルウィンドウを閉じる関数 //
  function closeModal2() {
    let modal2 = document.getElementById("modal2");
    modal2.classList.remove("is-shown");
    modal2.classList.add("is-hidden");
  } // モーダルウィンドウを開く関数 //
  function openModal3() {
      let modal3 = document.getElementById("modal3");
      modal3.classList.remove("is-hidden");
      modal3.classList.add("is-shown");
    }
    // モーダルウィンドウを閉じる関数 //
    function closeModal3() {
      let modal3 = document.getElementById("modal3");
      modal3.classList.remove("is-shown");
      modal3.classList.add("is-hidden");
    }

   