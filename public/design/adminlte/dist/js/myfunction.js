function check_all(){
    $('input[class="item_checkbox"]:checkbox').each(function(){
      if($('input[class="check_all"]:checkbox:checked').length == 0){
        $(this).prop('checked' , false);
      }else{
        $(this).prop('checked' , true);
      }
    });
}

function delete_all(){
    $(document).on('click' , '.delBtn' , function(){
        alert('delete All');
    });
}