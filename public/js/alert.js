swal({
  title:"asdas",
  text:"asdad",
  type: "info",
  showCancelButton:true,
  closeOnConfirm:false,
  shoLoaderOnConfirm:true,
},
funtion(){
    setTimeout(function(){
      swal("Ajax","Data complite","success");
    },2000);
});
