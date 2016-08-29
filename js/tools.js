function delete_id(id){
 if(confirm('¿Estáis seguro de que quieres borrar eso?'))
 {
  window.location.href='./index.php?delete_id='+id;
 }
}
function edt_id(id){
 if(confirm('Estás seguro de editar ese ID?'))
 {
  window.location.href='./php/edit_data.php?edit_id='+id;
 }
}