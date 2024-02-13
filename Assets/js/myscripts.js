$(document).ready(function(){
    $('.close-icon').on('click',function(){
        $('.alert').hide();
    });

    //add-btn
    $(".add-btn").on('click',function(){
       
       let id=$(this).data('id');
       $('#p_id').val(id);
       $('#addCart').submit();
       Swal.fire({
        title: "Good Job!",
        text: "You added the item in cart!",
        icon: "success"
      });

   });
   //remove btn
   $(".dlt-btn").on('click',function(){
        let id=$(this).data('id');
        $('#p_id').val(id);
        
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to recover this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
              });
              $('#dltForm').submit();
            }
           
        });
      
    });

    //compl btn
    $('.complete-btn').on('click',function(){
        //alert('hi');
        let id=$(this).data('id');
        $('#p_id').val(id);
        $('#completeForm').submit();
    })



    //qty update
    $('.qty').on('change',function(){
       
        var el =$(this).closest('tr');
        var id =el.find('.id').val();
        var price =el.find('.price').val();
        var qty =el.find('.qty').val();
        var pid =el.find('.pid').val();
        var stock =el.find('.stock').val();
        
        location.reload(true);
        $.ajax({
            url:'../controller/update-cart.php',
            method:'post',
            cache:false,
            data:{qty:qty, price:price, id:id, pid:pid, stock:stock,},
            success:function(response){
                console.log(response);
            }
        });
        
        
    });

    //cart delete
    $(".cart-dlt-btn").on('click',function(){
        let id=$(this).data('id');
        let pid=$(this).data('pid');
        let stock=$(this).data('stock');
        $('#c_id').val(id);
        $('#p_id').val(pid);
        $('#p_stock').val(stock);
        
        Swal.fire({
            title: "Are you sure?",
            text: "You can be able to add  this again!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Remove it!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Remove!",
                text: "Your Product has been removed from cart.",
                icon: "success"
              });
              $('#dltForm').submit();
            }
           
        });


    });

    //save btn
    $('.save-btn').on('click',function(){
        $('#customerForm').submit();
    });
   //print
    $('.print-btn').on('click',function(){
        window.print();
     });
    
     //search bar
     
    //search bar
    $('#searchBar').on('keyup',function(){
        let searchText = $(this).val()
        console.log(searchText);
        
        if(searchText != ""){
            $.ajax({
                url:'../model/searchModel.php',
                method:'post',
                data:{searchText:searchText},
                success:function(data){
                    $('#searchResult').html(data);
                    $('#searchResult').css('display','block');
                    $('#all-product').css('display','none');
                    
                }
            });
        }else{
            $('#searchResult').css('display','none');
            $('#all-product').css('display','block');
        }
        
     });

    

})