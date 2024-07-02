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

// $(document).ready(function(){
//       setTimeout(function(){ $('#disclaimerModal').modal('show'); }, 1000);
//   })

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
      modalcontact:{
        required: true,
        number: true,
          maxlength:10,
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
      modalcontact:{
        required: "Please Enter Your Contact Number",
        number: "Please Enter Numbers only",
          maxlength:"Please Enter Only 10 Digits",
      }
    },
  })