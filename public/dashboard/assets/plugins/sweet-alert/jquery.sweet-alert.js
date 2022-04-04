$(function(e) {
	
	//Basic
	$('#swal-basic').on('click', function () {
		swal('به صفحه مدیر خود خوش آمدید')
	});
	
	//A title with a text under
	$('#swal-title').click(function () {
		swal(
			{
				title: 'این یک عنوان است!',
				text: 'همه در الگو موجود است',
			}
		)
	});
	
	//Success Message
	$('#swal-success').click(function () {
		swal(
			{
				title: 'آفرین!',
				text: 'شما دکمه را کلیک کردید!',
				type: 'success',
				confirmButtonColor: '#57a94f'
			}
		)
	});
	
	//Warning Message
	$('#swal-warning').click(function () {
		swal({
		  title: "مطمئنی؟",
		  text: "شما قادر به بازیابی این پرونده خیالی نخواهید بود!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn btn-danger",
		  confirmButtonText: "بله ، آن را حذف کنید!",
		  closeOnConfirm: false
		},
		function(){
		  swal("حذف شده!", "پرونده خیالی شما حذف شده است.", "موفقیت");
		});
	});
	
	//Parameter
	$('#swal-parameter').click(function () {
		swal({
		  title: "مطمئنی?",
		  text: "شما قادر به بازیابی این پرونده خیالی نخواهید بود!",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonClass: "btn-danger",
		  confirmButtonText: "بله ، آن را حذف کنید!",
		  cancelButtonText: "نه ، لطفا را لغو کنید!",
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm) {
		  if (isConfirm) {
			swal("حذف شده!", "پرونده خیالی شما حذف شده است.", "موفقیت");
		  } else {
			swal("لغو شد", "پرونده خیالی شما بی خطر است :)", "خطا");
		  }
		});
	});
	
	//Custom Image
	$('#swal-image').click(function () {
		swal({
			title: 'دوست داشتني!',
			text: 'تصویر شما بارگذاری می شود.',
			imageUrl: '../../assets/img/brand/logo.png',
			animation: false
		})
	});
	
	//Auto Close Timer
	$('#swal-timer').click(function () {
		swal({
			title: 'هشدار بستن خودکار!',
			text: '1 ثانیه دیگر می بندم.',
			timer: 1000
		}).then(
			function () {
			},
			// handling the promise rejection
			function (dismiss) {
				if (dismiss === 'timer') {
					console.log('با تایمر بسته شدم')
				}
			}
		)
	});
	
	
	//Ajax with Loader Alert
	$('#swal-ajax').click(function () {
		swal({
		  title: "نمونه درخواست آژاکس",
		  text: "برای اجرای درخواست ajax ارسال کنید",
		  type: "info",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  showLoaderOnConfirm: true
		}, function () {
		  setTimeout(function () {
			swal("درخواست آژاکس تمام شد!");
		  }, 2000);
		});
	});
	
});