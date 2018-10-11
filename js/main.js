var data = {
	title: 'Loading...',
	kategori: [],
	lamanAktif: 0,
	lamanKategori: 0,
	menu: [{
		judul: "Beranda",
		icon: "glyphicon-cloud",
	}, {
		judul: "Profil",
		icon: "icon/profil.png",
	}, {
		judul: "Kategori",
		icon: "icon/kategori.png",
		submenu: [{
			judul: "Kerajinan"
		}, {
			judul: "Kuliner"
		}, {
			judul: "Budaya"
		}]
	}, {
		judul: "Galeri",
		icon: "icon/galeri.png",
	}, {
		judul: "Tentang",
		icon: "icon/tentang.png",
	}],
	pergiKeLaman: function(i) {
		data.lamanAktif = i;
		data.lamanKategori = 0;
	},
	pergiKeSubLaman: function(i, j) {
		data.lamanAktif = i;
		data.lamanKategori = j;
	}
}

var app = new Vue({
	el: '#app',
	data: data,
})

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
	if (this.readyState == 4 && this.status == 200) {
		// Kalo selesai
		var obj = JSON.parse(this.responseText);
		data.title = obj.judul;
		data.kategori = obj.kategori;
	}
};

xhttp.open("GET", "server.php", true);
xhttp.send();