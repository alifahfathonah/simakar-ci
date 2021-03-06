"use strict";

// sweetalert & iziToast

// sukses

const flashData = $("#flash-data").data("flashdata");

if (flashData) {
	iziToast.success({
		title: "Sukses!",
		message: "Data Berhasil " + flashData,
		position: "center",
	});
}

// gagal

const flashError = $("#flash-error").data("flasherror");

if (flashError) {
	iziToast.error({
		title: "Gagal!",
		message: flashError,
		position: "center",
	});
}

// keluar

$("#keluar").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	swal({
		title: "Apakah Anda yakin?",
		text: "ingin log out?",
		icon: "warning",
		buttons: [true, "Log Out!"],
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			document.location.href = href;
		} else {
			iziToast.info({
				title: "Dibatalkan!",
				message: "Anda telah membatalkan log out.",
				position: "center",
			});
		}
	});
});

// hapus

$("#hapus").on("click", function (e) {
	e.preventDefault();
	const href = $(this).attr("href");

	swal({
		title: "Apakah Anda yakin?",
		text: "ingin mengahapus data ini?",
		icon: "warning",
		buttons: [true, "Hapus Data!"],
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			document.location.href = href;
		} else {
			iziToast.info({
				title: "Dibatalkan!",
				message: "Anda telah membatalkan penghapusan data.",
				position: "center",
			});
		}
	});
});

// moddule sweetalert

$("#swal-1").click(function () {
	swal("Hello");
});

$("#swal-2").click(function () {
	swal("Good Job", "You clicked the button!", "success");
});

$("#swal-3").click(function () {
	swal("Good Job", "You clicked the button!", "warning");
});

$("#swal-4").click(function () {
	swal("Good Job", "You clicked the button!", "info");
});

$("#swal-5").click(function () {
	swal("Good Job", "You clicked the button!", "error");
});

$("#swal-0").click(function () {
	swal({
		title: "Apakah Anda yakin?",
		text: "Once deleted, you will not be able to recover this imaginary file!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	}).then((willDelete) => {
		if (willDelete) {
			swal("Poof! Your imaginary file has been deleted!", {
				icon: "success",
			});
		} else {
			swal("Your imaginary file is safe!");
		}
	});
});

$("#swal-7").click(function () {
	swal({
		title: "What is your name?",
		content: {
			element: "input",
			attributes: {
				placeholder: "Type your name",
				type: "text",
			},
		},
	}).then((data) => {
		swal("Hello, " + data + "!");
	});
});

$("#swal-8").click(function () {
	swal("This modal will disappear soon!", {
		buttons: false,
		timer: 3000,
	});
});

// module iziToast

$("#toastr-1").click(function () {
	iziToast.info({
		title: "Hello, world!",
		message: "This awesome plugin is made iziToast toastr",
		position: "topRight",
	});
});

$("#toastr-2").click(function () {
	iziToast.success({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "topRight",
	});
});

$("#toastr-3").click(function () {
	iziToast.warning({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "topRight",
	});
});

$("#toastr-4").click(function () {
	iziToast.error({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "topRight",
	});
});

$("#toastr-5").click(function () {
	iziToast.show({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "bottomRight",
	});
});

$("#toastr-6").click(function () {
	iziToast.show({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "bottomCenter",
	});
});

$("#toastr-7").click(function () {
	iziToast.show({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "bottomLeft",
	});
});

$("#toastr-8").click(function () {
	iziToast.show({
		title: "Hello, world!",
		message: "This awesome plugin is made by iziToast",
		position: "topCenter",
	});
});
