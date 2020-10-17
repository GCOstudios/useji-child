// jQuery(document).ready(function($) {

//   // Prevent default on anchor link click
//   $("a[href^='#']").click(function(e) {
//     e.preventDefault();
//     changeHashWithoutScrolling($(this).attr('href'));
//   });

//   // Prevent instant scroll of browser
//   function changeHashWithoutScrolling(hash){
//     if($(hash).length > 0){
//         // var $el = $(hash);
//         // var elId = $el.attr('id');
//         // $el.removeAttr('id');

//         window.location.hash = hash;

//         // $el.attr('id', elId);
//     }
//   }
// });

// const prodTabs = document.querySelectorAll('a[href^="#"]');

// for (let i = 0; i < prodTabs.length; i++) {
//   prodTabs[i].addEventListener('click', function(e) {
//     e.preventDefault();

//     let newHash = window.location.hash;

//     // window.location.hash = hash;
//     console.log(this)
//   });
// }