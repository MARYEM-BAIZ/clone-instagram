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

 







});