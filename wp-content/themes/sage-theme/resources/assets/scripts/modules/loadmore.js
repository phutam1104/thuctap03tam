export default class loadmore {
    constructor(){
        this.$this = $('html')
      }
      init() {
        this.Load();
      }
      Load(){
        $('#load-more').click(function(){
            $.ajax({
                type : "POST", //Phương thức truyền post hoặc get
                // dataType : "html", //Dạng dữ liệu trả về xml, json, script, or html
                url : 'http://localhost:3000/wp-admin/admin-ajax.php', //Đường dẫn chứa hàm xử lý dữ liệu. Mặc định của WP như vậy
                data : {
                    action: 'register_get_posts', //Tên action
                    name : '',//Biến truyền vào xử lý. $_POST['website']
                },
                // context: this,
                // beforeSend: function(){
                //     //Làm gì đó trước khi gửi dữ liệu vào xử lý
                // },
                success: function(response) {
                    //Làm gì đó khi dữ liệu đã được xử lý
                    if(response.success) {
                        console.log(response.data);
                        $('.loadmoredata').append(response.data);
                        $('#load-more').hide();
                    }
                    else {
                        alert('Đã có lỗi xảy ra');
                    }
                    // return response;
                },
                error: function( jqXHR, textStatus, errorThrown ){
                    //Làm gì đó khi có lỗi xảy ra
                    console.log( 'The following error occured: ' + textStatus, errorThrown );
                }
            })
            return false;
        })
      }
}
new loadmore().init()




