 $(document).ready(function(){


    // ROLE CHANGE
    $(document).on('change', '.role-change', function(){
        let id = $(this).data('id');
        let role = $(this).val();
    });
    $ajax({
        url:BackEnd/tableDataUpdate.php,
        type:'POST',
        dataType: 'json',
        data:{id:id, field:'role', value:role},
        success:function(data){
            if(data.success){
                swal.fire({icon:'success',title:'Success', text:'User role updated', timer:1500, showConfirmButton:true})
            }else{
                swal.fire({icon:'error',tittle:'Error', text:data.message, timer:1500, showConfirmButton:true})
            };
        }
    })

    // STATUS CHANGE
    $(document).on('change', '.status-change', function(){
        let id = $(this).data('id');
        let status = $(this).is(':checked') ? 'active' : 'pending';
    });
    $ajax({
        url:BackEnd/tableDataUpdate.php,
        type:'POST',
        dataType: 'json',
        data:{id:id, field:'status', value:status},
         success:function(data){
            if(data.success){
                swal.fire({icon:'success',title:'Success', text:'User role updated', timer:1500, showConfirmButton:true})
            }else{
                swal.fire({icon:'error',tittle:'Error', text:data.message, timer:1500, showConfirmButton:true})
            };
        } 

    });
 });