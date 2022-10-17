$(document).ready(function(){
    $('#container').load('sem1.php');

    // $('ul#semester li a').click(function(){
    //     var page=$(this).attr('href');
    //  $('#container').load(page+'.php');
    //    return false;

    // })
  
})
$(document).on('click', 'ul#semester li a', function(e){  
    e.preventDefault();  
    var link =$(this).attr('href');  
    $('contain').load(link + '.php');
  });