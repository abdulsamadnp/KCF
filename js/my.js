// JavaScript Document

$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});


$('.navbar-nav>li>a,.hedbt>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});




        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */


function myReliefFunction() {
  document.getElementById("ReliefDropdown").classList.toggle("show");
}

function myeduFunction(){
  document.getElementById("eduDropdown").classList.toggle("show");
}

function myArtsFunction(){
  document.getElementById("artsDropdown").classList.toggle("show");
}

function  mySportsFunction(){
  document.getElementById("SportsDropdown").classList.toggle("show");
}


// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



