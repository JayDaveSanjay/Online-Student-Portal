// $(document).ready(function(){

//      $('ul#semester li a').on("click",function(){
//        var page=$(this).attr('href');
//      $('#contain').load(page+'.php');
//         return false;

//      })
  
// })
var classname=document.getElementsByClassName("sem");
var myFunction = function() {
    var attribute = this.getAttribute("href");
    alert(attribute);
    $('#contain').load(page+'.php');
};

classname.addEventListener('click', myFunction(), false);
// $(document).on('click', 'ul#semester li a', function(e){  
//     e.preventDefault();  
//     var link =$(this).attr('href');  
//     $('contain').load(link + '.php');
//   });