$(document).ready(function(){
    $('#contain').load('sem2.php');

     $('ul#semester li a').on("click",function(){
       var page=$(this).attr('href');
     $('#contain').load(page+'.php');
        return false;

     })
  
})
// $(document).on('click', 'ul#semester li a', function(e){  
//     e.preventDefault();  
//     var link =$(this).attr('href');  
//     $('contain').load(link + '.php');
//   });