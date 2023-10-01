// フェードイン
AOS.init({
  offset: 100,
  delay: 200,
  duration: 500,
  easing: 'ease-out',
  anchorPlacement:'top-top',
  once:false
  });

// #js-fixedBtn_visiblityを超えると固定ボタンが出る
// オプション
const options = {
  threshold: 1.0
};
// 要素の監視イベント
const fixedBtn = document.getElementById('nav_fixed')
const observer = new IntersectionObserver((entries) => {
  for (const e of entries) {
    if (e.isIntersecting) {
      fixedBtn.classList.add('isVisible_remove');
    } else {
      fixedBtn.classList.add('isVisible');
      fixedBtn.classList.remove('isVisible_remove');
      document.getElementById('sheep_face').style.display = "none";
    }
  }
});
// 要素の監視対象
observer.observe (document.getElementById('js-fixedBtn_visiblity')
);


const top_btn = document.getElementById('top_btn');

top_btn.onclick = function(){
  document.getElementById('sheep_face').style.display = "block";
  fixedBtn.classList.add('isVisible_top');

  const observer = new IntersectionObserver((entries) => {
    for (const e of entries) {
      if (e.isIntersecting) {
        fixedBtn.classList.remove('isVisible_top');
      } else {
      }
    }
  });
  observer.observe (document.getElementById('top'));
};
