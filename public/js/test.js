$(document).ready(function(){


   
   const forms=document.querySelectorAll('#like_form');
     
   forms.forEach(( form) => {
     
    form.addEventListener("submit",function (event) {
        event.preventDefault();


    const   publication_id=  this.querySelector('#publication_id').value

    const datarecupere={
   
        publication_id:   publication_id

    }
  
        $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });


 $.ajax({
     
     url:"/like",
     method:"post",
     data:datarecupere,
     success:function (datavenuduserveur) {
         const nbr ="#" +publication_id ;

        //  const coeur = "#like_" +publication_id;
        const icone =document.querySelectorAll('#like_form > button > i');


         $(nbr).html(datavenuduserveur.nombre);
         if (datavenuduserveur.nombre == 1) {
            $(icone).addClass('like');
         }else{
            $(icone).removeClass('like');
         }
        // nombrelike.innerHTML=datavenuduserveur.nombre;
   }


 });


 });

  })

 



























         
   const forms1=document.querySelectorAll('#save_form');
     
   forms1.forEach(( form) => {
     
    form.addEventListener("submit",function (event) {
        event.preventDefault();


    const   publication_id1=  this.querySelector('#publication_id1').value

    const datarecupere1={
   
        publication_id:   publication_id1

    }
  
        $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });


 $.ajax({
     
     url:"/save",
     method:"post",
     data:datarecupere1


 });


 });

  })


















  const forms2=document.querySelectorAll('#comment_form');
     
  forms2.forEach(( form) => {
    
   form.addEventListener("submit",function (event) {
       event.preventDefault();


   const   publication_id2=  this.querySelector('#publication_id2').value
   const   contenu_comment=  this.querySelector('#contenu_comment').value

   const datarecupere2={
  
       publication_id:   publication_id2 ,
       contenu: contenu_comment

   }
 
       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
       });


$.ajax({
    
    url:"/commentaire",
    method:"post",
    data:datarecupere2


});


});

 })





















 const forms3=document.querySelectorAll('#like1_form');
     
 forms3.forEach(( form) => {
   
  form.addEventListener("submit",function (event) {
      event.preventDefault();


  const   publication_id=  this.querySelector('#publication_idd').value

  const datarecupere={
 
      publication_id:   publication_id

  }

      $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
      });


$.ajax({
   
   url:"/like1",
   method:"post",
   data:datarecupere,
   success:function (datavenuduserveur) {
       const nbr ="#" +publication_id ;

      //  const coeur = "#like_" +publication_id;
      const icone =document.querySelectorAll('#like_form > button > i');


       $(nbr).html(datavenuduserveur.nombre);
       if (datavenuduserveur.nombre == 1) {
          $(icone).addClass('like');
       }else{
          $(icone).removeClass('like');
       }
      // nombrelike.innerHTML=datavenuduserveur.nombre;
 }


});


});

})















});