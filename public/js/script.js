
//                   Protfolio page function

$('#All').click(function() {
    $('.p-all').removeClass('d-none');
})
$('#E-COMMERCE').click(function() {
    $('.p-all').addClass('d-none');
    $('.p-ecom').removeClass('d-none');
})
$('#BUSINESS').click(function() {
    $('.p-all').addClass('d-none');
    $('.p-business').removeClass('d-none');
})
$('#PORTAL').click(function() {
    $('.p-all').addClass('d-none');
    $('.p-portal').removeClass('d-none');
})
$('#PORTFOLIO').click(function() {
    $('.p-all').addClass('d-none');
    $('.p-portfolio').removeClass('d-none');
})

//                   Contact Insert data confrom btn

$('#contactAddConfirmBtn').click(function() {
    let name = $('#contactAddNameID').val();
    let email = $('#contactAddMailID').val();
    let phone = $('#contactAddPnID').val();
    let Website = $('#contactAddWebID').val();
    let massege = $('#contactAddMsgID').val();
    let currentdate = $('#dateId').html();

    insertContactData(name,email,phone,Website,massege,currentdate);

})

//                        Contact Insert data

function insertContactData(name,email,phone,Website,massege,currentdate){
        if (name.length==0) {
            $('#contactAddConfirmBtn').html('Enter Your Name')
            setTimeout(function(){
            $('#contactAddConfirmBtn').html('SEND MASSEGE');
            },2000)
        }else if (email.length==0) {
            $('#contactAddConfirmBtn').html('Enter Your Email')
            setTimeout(function(){
            $('#contactAddConfirmBtn').html('SEND MASSEGE');
            },2000)
        }else if (phone.length==0) {
            $('#contactAddConfirmBtn').html('Enter Your Phone')
            setTimeout(function(){
            $('#contactAddConfirmBtn').html('SEND MASSEGE');
            },2000)
        }else if (massege.length==0) {
            $('#contactAddConfirmBtn').html('Enter Your Massege')
            setTimeout(function(){
            $('#contactAddConfirmBtn').html('SEND MASSEGE');
            },2000)
        }else{
            $('#contactAddConfirmBtn').html('Sending...')
            axios.post('/insertContactData', {
                 contact_name:name,
                 contact_email:email,
                 contact_phone:phone,
                 contact_website:Website,
                 contact_massege:massege,
                 created_date:currentdate
                 })
                 .then(function(response) {
                     if (response.status==200) {
                         if (response.data==1) {
                             $('#contactAddConfirmBtn').html('Send Successfully')
                             setTimeout(function(){
                             $('#contactAddConfirmBtn').html('SEND MASSEGE');
                             },5000)
                                name = $('#contactAddNameID').val('');
                                email = $('#contactAddMailID').val('');
                                phone = $('#contactAddPnID').val('');
                                Website = $('#contactAddWebID').val('');
                                massege = $('#contactAddMsgID').val('');
                         }else{
                             $('#contactAddConfirmBtn').html('Send Failed,Please Try Again')
                             setTimeout(function(){
                             $('#contactAddConfirmBtn').html('SEND MASSEGE');
                             },2000)
                         }
                     }else{
                         $('#contactAddConfirmBtn').html('Send Failed,Please Try Again')
                         setTimeout(function(){
                         $('#contactAddConfirmBtn').html('SEND MASSEGE');
                         },2000)
                     }
                 })
                 .catch(function(error) {
                     $('#contactAddConfirmBtn').html('Send Failed,Please Try Again')
                     setTimeout(function(){
                     $('#contactAddConfirmBtn').html('SEND MASSEGE');
                     },2000)
                 });

        }

}

 $('.loginForm').on('submit',function(event){
       event.preventDefault();
       let formData= $(this).serializeArray();
       let user_email = formData[0]['value'];
       let user_password = formData[1]['value'];
       let url='/onlogin'

       axios.post(url,{
        email:user_email,
        pass:user_password
       }).then(function(responce){
            if(responce.status==200 && responce.data==1){
                window.location.replace('/deshboard');
            }else{
                $('#log_wrong_msg').removeClass('d-none');
            }
       }).catch(function(error){
        $('#log_wrong_msg').removeClass('d-none');
       });
 })

 $('.regFrom').on('submit',function(event){
    event.preventDefault();
    let formData= $(this).serializeArray();
    let userName = formData[0]['value'];
    let fullName = formData[1]['value'];
    let userEmail = formData[2]['value'];
    let userPass = formData[3]['value'];
    let url='/onregistration'

    axios.post(url,{
        user_name:userName,
        name:fullName,
        email:userEmail,
        password:userPass
    }).then(function(responce){
         if(responce.status==200 && responce.data==1){
             $('#success_msg').removeClass('d-none');
         }else{
            $('#wrong_msg').removeClass('d-none');
         }
    }).catch(function(error){
        $('#wrong_msg').removeClass('d-none');
    });
})


