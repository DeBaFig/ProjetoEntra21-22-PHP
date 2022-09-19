$('.ueEyePass1').click(function(e){
    var target = e.currentTarget
    $(target).hasClass('show')?hidePassword1($(target)):showPassword1($(target))
    $("#cadastro").submit(function(e){
        return false;
    });
})
function hidePassword1(e){
    e.removeClass('show').addClass('hide')
    
    $("#ueEyePass1").removeClass('fa-eye-slash').addClass('fa-eye')
    $("#password1").attr('type','password')
}
function showPassword1(e){
    e.removeClass('hide').addClass('show')
    $("#ueEyePass1").removeClass('fa-eye').addClass('fa-eye-slash')
    $("#password1").attr('type','text')
}



$('.ueEyePass2').click(function(e){
    var target = e.currentTarget
    $(target).hasClass('show')?hidePassword2($(target)):showPassword2($(target))
    
})
function hidePassword2(e){
    e.removeClass('show').addClass('hide')
    
    $("#ueEyePass2").removeClass('fa-eye-slash').addClass('fa-eye')
    $("#password2").attr('type','password')
}
function showPassword2(e){
    e.removeClass('hide').addClass('show')
    $("#ueEyePass2").removeClass('fa-eye').addClass('fa-eye-slash')
    $("#password2").attr('type','text')
}