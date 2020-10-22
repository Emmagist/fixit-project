

 document.querySelector('.hamburger').addEventListener('click', (e) => {
    e.preventDefault();
    document.querySelector('.navigation').classList.toggle('active');
    
});

$(document).ready(function(){
   $('#search_text').keyup(function(){
      var txt = $(this).val();
      if (txt != '') {
         
      }else{
         $('#result').html('');
         $.ajax({
            url:'fetch.php',
            method:'post',
            data:{search:txt},
            dataType:'text',
            success:function(data){
               $('#result').html(data);
            }
         });
      }
   });
});