$('.banner-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  arrows: false,
  autoplay: true,
  slidesToShow: 1,
  autoplaySpeed: 1500,
});

$(document).on('click','#formButton',function(){
  $('#contactModal').modal('show');
})

  $(document).ready(function () {
    $('#modalForm').validate({
    rules:{
      modalname:{
        required: true,
      },
      modalemail:{
        required: true,
        email: true,
      },
      countrycode:{
          required: true,
      },
   otp:{
    equalTo: "#modalcheck",
   },
      modalcontact:{
        required: true,
    number: true,
      }
    },
    messages:{
      modalname:{
        required: "Please Enter Your Name",
      },
      modalemail:{
        required: "Please Enter Your Email Id",
      },
      countrycode:{
        required: "Please Select Country",  
      },
   otp:{
    required: "Please Enter OTP",
     equalTo: "Please Enter Valid OTP",
   },
      modalcontact:{
        required: "Please Enter Your Contact Number",
        number: "Please Enter Numbers only",
  },
    },
  })
  });
  
  
 $(document).on('click','.sendModalOtp',function(e){
    e.preventDefault();
    var path = 'Raghav Realty Kurla East';
    var contact = $('#modalcontact').val();
    var mobile = '8976738434';
        var name = $('#modalname').val();
        var email = $('#modalemail').val();
        var numbers = '9819777057,9310863636,9137692059';
      var countrycode = $('#countrycode').val();
    var path2 = 'OTP- NB Raghav Realty Kurla East'
    $.ajax({
      // url: site_url + 'send-otp',
      url: 'https://neeadigital.com/crm/api/send-otp-lead',
      method:'POST',
      dataType:'json',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },    
      data:{path:path,contact:contact,mobile:mobile,name:name,email:email,numbers:numbers,path2:path2,countrycode:countrycode},

      success:function(data){
      if(data.status == 200){
        $('#modalcheck').val(data.otp);
        alert(data.message);
      }
      },error:function(error){
        alert(error.responseJSON.message);
      }
    })
  })

  $(document).on('keyup','#modalcontact',function(){
    $('#modalcheck').val('');
    $('#modalotp').val('');
  })
  
  $('#bannerForm').validate({
    rules:{
      bannername:{
        required: true,
      },
      banneremail:{
        required: true,
        email: true,
      },
      countrycode:{
          required: true,
      },
      bannercontact:{
        required: true,
    number: true,
      },
   bannerotp:{
    required: true,
    equalTo: "#bannervalidate",
   }
    },
    messages:{
      bannername:{
        required: "Please Enter Your Name",
      },
      banneremail:{
        required: "Please Enter Your Email Id",
      },
      countrycode:{
        required: "Please Select Country",  
      },
      bannercontact:{
        required: "Please Enter Your Contact Number",
        number: "Please Enter Numbers only",
  },
   bannerotp:{
    required: "Please Enter OTP",
     equalTo: "Please Enter Valid OTP",
   }
    },
  })
 
  
  
 $(document).on('click','.sendBannerOtp',function(e){
    e.preventDefault();
    var path = 'Raghav Realty Kurla East';
    var contact = $('#bannercontact').val();
    var mobile = '8976738434';
        var name = $('#bannername').val();
        var email = $('#banneremail').val();
        var numbers = '9819777057,9310863636,9137692059';
      var countrycode = $('#countrycode').val();
    var path2 = 'OTP- NB Raghav Realty Kurla East'
    $.ajax({
      // url: site_url + 'send-otp',
      url: 'https://neeadigital.com/crm/api/send-otp-lead',
      method:'POST',
      dataType:'json',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },    
      data:{path:path,contact:contact,mobile:mobile,name:name,email:email,numbers:numbers,path2:path2,countrycode:countrycode},

      success:function(data){
      if(data.status == 200){
        $('#bannervalidate').val(data.otp);
        alert(data.message);
      }
      },error:function(error){
        alert(error.responseJSON.message);
      }
    })
  })

  $(document).on('keyup','#bannercontact',function(){
    $('#bannervalidate').val('');
    $('#bannerotp').val('');
  })

  $('#stickyForm').validate({
    rules:{
      stickyname:{
        required: true,
      },
      stickyemail:{
        required: true,
        email: true,
      },
      countrycode:{
          required: true,
      },
      stickycontact:{
        required: true,
    number: true,
      },
   stickyotp:{
    required: true,
    equalTo: "#stickycheck",
   }
    },
    messages:{
      stickyname:{
        required: "Please Enter Your Name",
      },
      stickyemail:{
        required: "Please Enter Your Email Id",
      },
      countrycode:{
        required: "Please Select Country",  
      },
      stickycontact:{
        required: "Please Enter Your Contact Number",
        number: "Please Enter Numbers only",
  },
   stickyotp:{
    required: "Please Enter OTP",
     equalTo: "Please Enter Valid OTP",
   }
    },
  })
 
  
  
 $(document).on('click','.sendStickyOtp',function(e){
    e.preventDefault();
    var path = 'Raghav Realty Kurla East';
    var contact = $('#stickycontact').val();
    var mobile = '8976738434';
        var name = $('#stickyname').val();
        var email = $('#stickyemail').val();
        var numbers = '9819777057,9310863636,9137692059';
      var countrycode = $('#countrycode').val();
    var path2 = 'OTP- NB Raghav Realty Kurla East'
    $.ajax({
      // url: site_url + 'send-otp',
      url: 'https://neeadigital.com/crm/api/send-otp-lead',
      method:'POST',
      dataType:'json',
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },    
      data:{path:path,contact:contact,mobile:mobile,name:name,email:email,numbers:numbers,path2:path2,countrycode:countrycode},

      success:function(data){
      if(data.status == 200){
        $('#stickycheck').val(data.otp);
        alert(data.message);
      }
      },error:function(error){
        alert(error.responseJSON.message);
      }
    })
  })

  $(document).on('keyup','#stickycontact',function(){
    $('#stickycheck').val('');
    $('#stickyotp').val('');
  })