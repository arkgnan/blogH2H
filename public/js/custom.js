function create_view(data, kategori) {
	if (kategori == "pulsa") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-2 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + data.data[i].produk[j].denom + '</div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div>');
			}
		}
	} else if (kategori == "data") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				if (data.data[i].produk[j].kuota.indexOf("->") >= 0) {
					pecah = data.data[i].produk[j].kuota.split("->");
					kuota = pecah[0].trim();
					kuota2 = pecah[1].trim();
				} else {
					kuota = data.data[i].produk[j].kuota;
					kuota2 = "-";
				}
				if (kuota.indexOf("+") >= 0) {
					split = kuota.split("+");
					nama = data.data[i].produk[j].nama + " " + split[0].trim();
				} else {
					nama = data.data[i].produk[j].nama + " " + kuota;
				}
				/*nama = data.data[i].produk[j].nama+" "+kuota;*/
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8"><a onclick="showKuota(this);"' +
					'data-nama="' + data.data[i].produk[j].nama + '" data-prd="' + data.data[i].produk[j].kode + '"' +
					'data-kuota="' + kuota + '" data-detail="' + kuota2 + '" data-ma="' + data.data[i].produk[j].masa_aktif + '" data-ap="' + data.data[i].produk[j].aturan_pakai + '"><i class="fa fa-arrows-alt" aria-hidden="true"></i> ' + nama + '</a></div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div>');
			}
		}
	} else if (kategori == "paket") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				if (data.data[i].produk[j].nama.indexOf("SMS") >= 0 && data.data[i].produk[j].nama.indexOf("TELEPON") >= 0) {
					logo = '<i class="fa fa-phone-square"></i> <i class="fa fa-envelope-square"></i>';
				} else if (data.data[i].produk[j].nama.indexOf("TELEPON") >= 0 && data.data[i].produk[j].nama.indexOf("SMS") < 0) {
					logo = '<i class="fa fa-phone-square"></i>';
				} else if (data.data[i].produk[j].nama.indexOf("SMS") >= 0 && data.data[i].produk[j].nama.indexOf("TELEPON") < 0) {
					logo = '<i class="fa fa-envelope-square"></i>';
				} else {
					logo = "";
				}
				if (data.data[i].produk[j].kuota.indexOf("(") >= 0) {
					nama = logo + ' ' + data.data[i].produk[j].kuota.replace("(", " (");
				} else {
					nama = logo + ' ' + data.data[i].produk[j].kuota;
				}
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + nama + '</div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div>');
			}
		}
	} else if (kategori == "pln") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				if (data.data[i].produk[j].harga.indexOf("-") >= 0) {
					harga = 'Fee Rp. ' + data.data[i].produk[j].harga;
				} else {
					harga = 'Harga Rp. ' + data.data[i].produk[j].harga;
				}
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + data.data[i].produk[j].nama + '</div>' +
					'<div class="col-4 text-danger text-right">' + harga + '</div></li>');
			}
		}
	} else if (kategori == "transfer") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].nama + '</div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div></div></li>');
			}
		}
	} else if (kategori == "game") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + data.data[i].produk[j].nama + '</div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div></div></li>');
			}
		}
	} else if (kategori == "emoney") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + data.data[i].produk[j].nama + '</div>' +
					'<div class="col-4 text-danger text-right">Rp. ' + data.data[i].produk[j].harga + '</div></div></li>');
			}
		}
	} else if (kategori == "ppob") {
		$("#content-" + kategori).html('<div id="accordion-' + kategori + '" role="tablist"></div>');
		for (i = 0; i < data.data.length; i++) {
			if (i == 0) {
				show = "show";
				collape = "";
			} else {
				collape = "collapsed";
				show = "";
			}
			$("#accordion-" + kategori).append('<div class="card mb-3 p-0" id="card-' + kategori + i + '"></div>');
			$("#card-" + kategori + i).append('<div class="card-header" role="tab" id="' + i + '">' +
				'<h5 class="m-0">' +
				'<a data-toggle="collapse" href="#collapse-' + kategori + i + '" class="text-dark accordion-toggle ' + collape + ' no-style" role="button" aria-expanded="true" aria-controls="collapse-' + kategori + i + '">' + data.data[i].operator + '</a>' +
				'</h5>' +
				'</div>' +
				'<div id="collapse-' + kategori + i + '" class="collapse ' + show + '" role="tabpanel" aria-labelledby="' + i + '" data-parent="#accordion-' + kategori + '">' +
				'<ul class="list-group list-group-flush" id="card-body-' + kategori + i + '"></ul>' +
				'</div>');
			for (j = 0; j < data.data[i].produk.length; j++) {
				if (data.data[i].produk[j].harga.indexOf("-") >= 0) {
					harga = 'Fee Rp. ' + data.data[i].produk[j].harga.replace("-", "").trim();
				} else {
					harga = 'Harga Rp. ' + data.data[i].produk[j].harga;
				}

				$("#card-body-" + kategori + i).append('<li class="list-group-item"><div class="row"><div class="col-8">' + data.data[i].produk[j].kode + " - " + data.data[i].produk[j].nama + '</div>' +
					'<div class="col-4 text-danger text-right">' + harga + '</div></div></li>');
			}
		}
	}
}

function showKuota(d) {
	produk = d.getAttribute("data-prd");
	nama = d.getAttribute("data-nama");
	kuota = d.getAttribute("data-kuota");
	detail = d.getAttribute("data-detail");
	ma = d.getAttribute("data-ma");
	ap = d.getAttribute("data-ap");
	if (detail == "-") {
		total = kuota;
	} else {
		total = kuota + " <i class='fa caret-right'></i> " + detail
	}

	$("#kuota-data .modal-title").text(nama);
	$("#kuota-data .modal-body").html('<div class="border border-warning">' +
		'<div class="row p-1 small">' +
		'<div class="col-4">Kode Produk</div><div class="col-8">: ' + produk + '</div>' +
		'<div class="col-4">Kuota</div><div class="col-8">: ' + total + '</div>' +
		'<div class="col-4">Masa aktif</div><div class="col-8">: ' + ma + '</div>' +
		'<div class="col-4">Aturan pakai</div><div class="col-8">: ' + ap + '</div>' +
		'</div>' +
		'</div>');
	$('#kuota-data').modal('show');
}

function hideKuota() {
	$('#kuota-data').modal('hide');
}