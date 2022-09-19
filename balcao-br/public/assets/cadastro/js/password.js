

$('.ueEyePass').click(function(e){
    var target = e.currentTarget
    $(target).hasClass('show')?hidePassword($(target)):showPassword($(target))
    
})
function hidePassword(e){
    e.removeClass('show').addClass('hide')
    
    $("#ueEyePass").removeClass('fa-eye-slash').addClass('fa-eye')
    $("#password").attr('type','password')
}
function showPassword(e){
    e.removeClass('hide').addClass('show')
    $("#ueEyePass").removeClass('fa-eye').addClass('fa-eye-slash')
    $("#password").attr('type','text')
}