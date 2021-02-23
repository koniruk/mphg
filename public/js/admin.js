$(function(){
    $('.flash_message').fadeOut(30);

    var dataBox = new DataTransfer();
    var file_field = document.querySelector('input[type=file]')
    $('#img-file').change(function(){
        var files = $('input[type="file"]').prop('files')[0];
        $.each(this.files, function(i, file){
            var fileReader = new FileReader();

            dataBox.items.add(file)

            file_field.files = dataBox.files

            var num = $('.item-image').length + 1 + i
            fileReader.readAsDataURL(file);
            if (num == 10){
                $('#image-box__container').css('display', 'none')
            }
            fileReader.onloadend = function() {
                var src = fileReader.result
                var html= `
                    <div class='item-image' data-image="${file.name}">
                        <div class='item-image__content mb-2'>
                            <img src=${src} width="480" height="270" >
                            <div class='item-image__operetion'>
                                <div class='item-image__operetion--delete'><i class="fa fa-close fa-2x"></i></div>
                            </div>
                        </div>
                    </div>`
                //image_box__container要素の前にhtmlを差し込む
                $('#image-box__container').before(html);
            };
            //image-box__containerのクラスを変更し、CSSでドロップボックスの大きさを変えてやる。
            $('#image-box__container').attr('class', `item-num-${num}`)
        });
    });
    //削除ボタンをクリックすると発火するイベント
    $(document).on("click", '.item-image__operetion--delete', function(){
        //削除を押されたプレビュー要素を取得
        var target_image = $(this).parent().parent()
        //削除を押されたプレビューimageのfile名を取得
        var target_name = $(target_image).data('image')
        //プレビューがひとつだけの場合、file_fieldをクリア
        if(file_field.files.length==1){
            //inputタグに入ったファイルを削除
            $('input[type=file]').val(null)
            dataBox.clearData();
            console.log(dataBox)
        }else{
            //プレビューが複数の場合
            $.each(file_field.files, function(i,input){
                //削除を押された要素と一致した時、index番号に基づいてdataBoxに格納された要素を削除する
                if(input.name==target_name){
                    dataBox.items.remove(i)
                }
            })
            //DataTransferオブジェクトに入ったfile一覧をfile_fieldの中に再度代入
            file_field.files = dataBox.files
        }
        //プレビューを削除
        target_image.remove()
        //image-box__containerクラスをもつdivタグのクラスを削除のたびに変更
        var num = $('.item-image').length
        $('#image-box__container').show()
        $('#image-box__container').attr('class', `item-num-${num}`)
    })
});
