
// $(document).ready()
// Document là dũ liệu của trang trước đó.
$(document).ready(function(){
    // alerṭ("Jquery da chay")
    // $("#sendData").submit(function(){}); //Cach 1
    $("#sendData").on("submit", function(TenToiDat){ //cach2
        TenToiDat.preventDefault();
        // alert("click vao form = JS")
        var formData = $(this).serialize(); //Chay hành vi mặc định. Chuyen data tren form thanh cap key-value

        // $.ajax({}) Truyen vao 1 doi tuong = thuoc tinh va phuong thuc 
        $.ajax({
            url:"./comment.php", //url giong vs action
            method:"POST",
            data: formData, //data lay ra tu form
            dataType:"JSON",
            success:function(response){ //reponse la tham so tu dat ten 
                alert(response.name);
            }
        })
    })
})