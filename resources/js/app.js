import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const AllButtonDelete= document.querySelectorAll('.ms_button_delete');
AllButtonDelete.forEach((deleteButton) =>{
 deleteButton.addEventListener('click',function(event){

    event.preventDefault();
    const deleteModalHtml=document.getElementById('modaljs');
    let comicTitle=this.dataset.comicTitle;
    deleteModalHtml.querySelector('.my_p_modal').innerHTML=`Vuoi eliminare definitivamente il fumetto ${comicTitle}`;
    const bsDeleteModal = new bootstrap.Modal(deleteModalHtml);
    bsDeleteModal.show();
   
    const bsDeletebtn=document.getElementById('bs_delete_btn');
    bsDeletebtn.addEventListener('click',function(){
        deleteButton.parentElement.submit();
    });


 });
});