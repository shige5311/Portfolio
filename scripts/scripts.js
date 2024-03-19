'use strict';

// 共通のスクリプト
document.addEventListener('DOMContentLoaded', function () {
    // ドロワーメニューボタンとドロワーメニュー本体の要素を取得
    const menuBtn = document.querySelector('.menu-btn');
    const drawerMenu = document.getElementById('drawer-menu');
    const closeBtn = document.querySelector('.close-btn');

    // ドロワーメニューボタンにクリックイベントを追加
    menuBtn.addEventListener('click', function () {
        // ドロワーメニューを表示・非表示
        drawerMenu.style.left = (drawerMenu.style.left === '0px') ? '-200px' : '0px';
    });

    // ドロワーメニューの閉じるボタンにクリックイベントを追加
    closeBtn.addEventListener('click', function () {
        // ドロワーメニューを閉じる
        drawerMenu.style.left = '-200px';
    });

    // ページの読み込みが完了したときに実行される関数
    window.addEventListener('load', animation);

    // ローディング要素の取得
    const load = document.getElementById('loading');

    // ローディングアニメーションを追加する関数
    function animation() {
        load.classList.add('loaded');
    }

    // ページの読み込みが完了したときに実行される関数
    window.addEventListener('load', animation);

    // トップへ戻るボタンの表示・非表示を制御する関数
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("scrollTopBtn").style.display = "block";
        } else {
            document.getElementById("scrollTopBtn").style.display = "none";
        }
    }

    // トップへ戻るボタンをクリックしたときにトップへスクロールする関数
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    }
});


// HTMLドキュメントが完全に読み込まれたときに実行
document.addEventListener('DOMContentLoaded', function () {
    // おみくじボタンとおみくじ結果の要素を取得
    const omikujiBtn = document.getElementById('omikuji-btn');
    const resultContainer = document.getElementById('omikuji-result');

    // おみくじボタンにクリックイベントを追加
    omikujiBtn.addEventListener('click', function () {
        // おみくじの結果リスト
        const results = ['大吉', '中吉', '小吉', '吉', '末吉', '凶', '大凶'];
        // ランダムな結果を取得
        const randomResult = results[Math.floor(Math.random() * results.length)];

        // おみくじの結果表示の更新
        resultContainer.innerHTML = `<p>今日の運勢は「${randomResult}」です！ ${getFortuneComment(randomResult)}</p>`;

        // 結果を表示する
        resultContainer.style.display = 'block';
        // フェードインのアニメーションを適用
        resultContainer.style.animation = 'fadeIn 2s ease-in-out';

        // アニメーション後にアニメーションをクリア
        setTimeout(() => {
            resultContainer.style.animation = '';
        }, 2000);
    });

    // マウスオーバー時の下線を表示
    const links = document.querySelectorAll('a');
    links.forEach(link => {
        link.addEventListener('mouseover', function () {
            link.style.textDecoration = 'underline';
        });

        link.addEventListener('mouseout', function () {
            link.style.textDecoration = 'none';
        });
    });

    // おみくじ結果に対する一言コメントを取得
    function getFortuneComment(result) {
        switch (result) {
            case '大吉':
                return '良いことありそうですね！';
            case '中吉':
                return '順調な日になりそうです。';
            case '小吉':
                return '何か嬉しいことがあるかもしれません。';
            case '吉':
                return '平穏な一日になりそうです。';
            case '末吉':
                return 'ちょっとした驚きがありそうです。';
            case '凶':
                return '気をつけて行動した方がいいかもしれません。';
            case '大凶':
                return '悪いことが続くかもしれませんが、明日に期待しましょう。';
            default:
                return '';
        }
    }
});

// ページの読み込みが完了したときに実行される関数
window.addEventListener('load', animation);

// ローディング要素の取得
const load = document.getElementById('loading');

// ローディングアニメーションを追加する関数
function animation() {
    load.classList.add('loaded');
}

// ページの読み込みが完了したときに実行される関数
window.addEventListener('load', animation);

// モーダルウィンドウを開く関数
function openModal() {
    let modal = document.getElementById("modal");
    modal.classList.remove("is-hidden");
    modal.classList.add("is-shown");
}

// モーダルウィンドウを閉じる関数
function closeModal() {
    let modal = document.getElementById("modal");
    modal.classList.remove("is-shown");
    modal.classList.add("is-hidden");
}
